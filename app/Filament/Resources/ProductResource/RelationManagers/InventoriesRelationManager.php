<?php

namespace App\Filament\Resources\ProductResource\RelationManagers;

use Filament\Forms;
use Filament\Tables;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Illuminate\Database\Eloquent\Model;
use App\Filament\Resources\InventoryResource;
use Filament\Resources\RelationManagers\HasManyRelationManager;

class InventoriesRelationManager extends HasManyRelationManager
{
    protected static string $relationship = 'inventories';

    protected static ?string $recordTitleAttribute = 'id';

    protected function canCreate(): bool
    {
        return false;
    }

    protected  function canEdit(Model $record): bool
    {
        return false;
    }


    protected  function canDelete(Model $record): bool
    {
        return false;
    }

    public static function table(Table $table): Table
    {
        return InventoryResource::table($table);
    }
}
