<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Services\PasswordService;
use App\Filament\Resources\UserResource;
use Filament\Resources\Pages\CreateRecord;

class CreateUser extends CreateRecord
{
    protected static string $resource = UserResource::class;

    // protected function mutateFormDataBeforeCreate(array $data): array
    // {
    //     $data['password'] = bcrypt($data['password']);
    //     return $data;
    // }

    protected function afterCreate(): void
    {
        PasswordService::sendPasswordResetLink($this->form->getState());
    }
}
