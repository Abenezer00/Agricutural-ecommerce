<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Services\PasswordService;
use App\Filament\Resources\UserResource;
use Filament\Resources\Pages\EditRecord;

class EditUser extends EditRecord
{
    protected static string $resource = UserResource::class;

    // protected function mutateFormDataBeforeSave(array $data): array
    // {
    //     if (empty(trim($data['password'])) == false && !$data['sendPasswordResetLink']) {
    //         $data['password'] = bcrypt($data['password']);
    //     } else {
    //         unset($data['password']);
    //     }

    //     return $data;
    // }


    protected function afterSave(): void
    {
        PasswordService::sendPasswordResetLink($this->form->getState());
    }
}
