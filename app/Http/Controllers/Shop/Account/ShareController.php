<?php

namespace App\Http\Controllers\Shop\Account;

use App\Models\User;
use Illuminate\Support\Carbon;
use App\Models\Marketing\Invitee;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Marketing\DailyCount;
use App\Models\Marketing\Invitation;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class ShareController extends Controller
{


    public function index()
    {
        return view('shop.account.share.index', [
            'inviteLink' => $inviteLink = route('invite', auth()->user()->uuid),

            'dailyCount' => DB::table('daily_counts')
                ->where('user_id', auth()->id())
                ->whereDate('created_at', Carbon::today())
                ->first()
                ?->count ?? 0,

            'weeklyCount' => DB::table('daily_counts')
                ->where('user_id', auth()->id())
                ->whereBetween(
                    'created_at',
                    [
                        Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()
                    ]
                )->sum('count'),


            'monthlyCount' => DB::table('daily_counts')
                ->where('user_id', auth()->id())
                ->whereBetween(
                    'created_at',
                    [
                        Carbon::now()->startOfMonth(), Carbon::now()->endOfMonth()
                    ]
                )->sum('count'),

            'totalCount' => Invitation::where('channel_id', 2)
                ->where('user_id', auth()->id())
                ->first()
                ?->total_count ?? 0,

            'qrCode' =>  QrCode::eyeColor(0, 0, 0, 0, 0, 0, 0)
                ->eyeColor(1, 0, 0, 0, 0, 0, 0)
                ->eyeColor(2, 0, 0, 0, 0, 0, 0)
                ->color(77, 67, 229)
                ->size(140)
                ->generate($inviteLink)
        ]);
    }


    public function setInvitation(User $user)
    {
        session()->put('invitedBy', $user);

        return redirect()->route('login');
    }

    public function cancelInvitation()
    {
        session()->forget('invitedBy');
        return redirect()->back();
    }


    public function goToInvite()
    {
        $inviter = session()->pull('invitedBy', false);
        if ($inviter) {
            return redirect($inviter->getMyInviteLink(2));
        }
        return redirect()->back();
    }


    public function myInvitees()
    {
        return view('shop.account.share.my-invites', [
            'myInvitees' => Invitee::where('inviter_id', auth()->id())
                ->paginate(20)
        ]);
    }


    public function leaderBoard($period)
    {
        if ($period == 'daily') {
            return view('shop.account.share.leader-board', [
                'leaderBoards' => DailyCount::with('user')
                    ->whereDate('created_at', Carbon::today())
                    ->orderBy('count', 'DESC')
                    ->limit(10)
                    ->get()
            ]);
        } elseif ('weekly') {
            return view('shop.account.share.leader-board', [
                'leaderBoards' => DailyCount::with('user')
                    ->whereBetween(
                        'created_at',
                        [
                            Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()
                        ]
                    )
                    ->select('user_id', DB::raw('COUNT(count) AS week_count'))
                    ->groupBy('user_id')
                    ->orderByDesc('week_count')
                    ->limit(10)
                    ->get()
            ]);
        } else {
            abort(404);
        }
    }
}
