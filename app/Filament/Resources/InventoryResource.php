<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Inventory;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Model;
use Filament\Forms\Components\BelongsToSelect;
use App\Filament\Resources\InventoryResource\Pages;
use App\Filament\Resources\InventoryResource\RelationManagers;

class InventoryResource extends Resource
{
    protected static ?string $model = Inventory::class;

    protected static ?string $navigationGroup = 'Shop';

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([]);
    }

    public static function canCreate(): bool
    {
        return false;
    }

    public static function canEdit(Model $record): bool
    {
        return false;
    }

    public static function canDelete(Model $record): bool
    {
        return false;
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('product.name'),
                TextColumn::make('event'),
                TextColumn::make('initial_qty'),
                TextColumn::make('current_qty'),
                TextColumn::make('qty_difference'),
                TextColumn::make('initial_price')->money('ETB', true),
                TextColumn::make('current_price')->money('ETB', true),
                TextColumn::make('price_difference')->money('ETB', true),
            ])
            ->filters([
                //
            ])
            ->bulkActions([
                // ...
            ]);;
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageInventories::route('/'),
        ];
    }

    public static function getTableColumns(): array
    {
        return [
            TextColumn::make('product.name'),
            TextColumn::make('event'),
            TextColumn::make('initial_qty'),
            TextColumn::make('current_qty'),
            TextColumn::make('qty_difference'),
            TextColumn::make('initial_price')->money('ETB', true),
            TextColumn::make('current_price')->money('ETB', true),
            TextColumn::make('price_difference')->money('ETB', true),
        ];
    }
}
