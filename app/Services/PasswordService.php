<?php

namespace App\Services;


use Filament\Facades\Filament;
use Illuminate\Support\Facades\Password;

class PasswordService
{
    public static function sendPasswordResetLink($data)
    {
        if ($data['sendPasswordResetLink']) {
            $status = Password::sendResetLink(['email' => $data['email']]);
            Filament::notify(
                $status  === Password::RESET_LINK_SENT ? 'success' : 'danger',
                __($status)
            );
        }
    }
}
