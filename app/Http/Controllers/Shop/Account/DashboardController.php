<?php

namespace App\Http\Controllers\Shop\Account;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    /**
     * Provision a new web server.
     *
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {

        return view('shop.account.dashboard.index', [
            'ordersCount' => DB::table('orders')->where('user_id', $userId = auth()->id())->count(),
            'wishlistsCount' => DB::table('wishlists')->where('deleted_at', null)->where('user_id', $userId)->count(),
            'browseHistoriesCount' => DB::table('trackings')->select(['visitor_id', 'product_id'])
                ->where('visitor_id', $userId)
                ->whereNotNull('product_id')
                ->distinct('product_id')
                ->count(),
        ]);
    }
}
