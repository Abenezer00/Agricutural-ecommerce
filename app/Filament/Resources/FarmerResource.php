<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Farmer;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\MultiSelect;
use Filament\Forms\Components\BelongsToSelect;
use App\Filament\Resources\FarmerResource\Pages;
use App\Filament\Resources\FarmerResource\RelationManagers;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;

class FarmerResource extends Resource
{
    protected static ?string $model = Farmer::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                BelongsToSelect::make('fba_id')
                    ->relationship(
                        'fba',
                        'name',
                        fn (Builder $query) => $query->whereHas('roles', function ($q) {
                            $q->where('name', 'like', '%FBA%');
                        })
                    ),
                TextInput::make('name')
                    ->required(),
                TextInput::make('phone_number')
                    ->required(),
                Select::make('state')
                    ->options([
                        'Addis Ababa' => 'Addis Ababa',
                        'Oromia' => 'Oromia',
                        'SNNP' => 'SNNP'
                    ]),
                TextInput::make('zone')
                    ->required(),
                TextInput::make('address')
                    ->required(),
                TextInput::make('longitude')
                    ->required(),
                TextInput::make('latitude')
                    ->required(),

                TextInput::make('total_land_size')
                    ->required()
                    ->numeric(),

                TextInput::make('currently_free_land_size')
                    ->required()
                    ->numeric(),

                TextInput::make('currently_occupied_land_size')
                    ->required()
                    ->numeric(),

                MultiSelect::make('soil_types')
                    ->options([
                        'Lime' => 'Lime',
                        'RED' => 'RED'
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {

        return $table
            ->columns([
                TextColumn::make('fba.name')->searchable(),
                TextColumn::make('name')->searchable(),
                TextColumn::make('phone_number')->searchable(),
                TextColumn::make('state')->searchable(),
                TextColumn::make('zone')->searchable(),
                TextColumn::make('total_land_size'),
                TextColumn::make('currently_occupied_land_size'),
                TextColumn::make('currently_free_land_size'),
            ])
            ->filters([
                //
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListFarmers::route('/'),
            'create' => Pages\CreateFarmer::route('/create'),
            'edit' => Pages\EditFarmer::route('/{record}/edit'),
        ];
    }
}
