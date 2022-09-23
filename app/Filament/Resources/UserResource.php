<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\User;
use Filament\Tables;
use Squire\Models\Country;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use App\Forms\Components\AddressForm;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Section;
use App\Filament\Resources\UserResource\Pages;
use Filament\Forms\Components\BelongsToManyMultiSelect;
use App\Filament\Resources\UserResource\RelationManagers;
use Filament\Tables\Columns\TextColumn;
use Spatie\Permission\Models\Role;

class UserResource extends Resource
{
    protected static ?string $model = User::class;


    protected static ?string $navigationIcon = 'heroicon-o-user-group';

    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Card::make()
                    ->schema([
                        Forms\Components\TextInput::make('name')
                            ->required(),
                        Forms\Components\TextInput::make('email')
                            ->required()
                            ->email()
                            ->unique(User::class, 'email', fn ($record) => $record),

                    ])
                    ->columns([
                        'sm' => 2,
                    ])
                    ->columnSpan([
                        'sm' => 2,
                    ]),
                Forms\Components\Card::make()
                    ->schema([
                        Forms\Components\Placeholder::make('created_at')
                            ->label('Created at')
                            ->content(fn (?User $record): string => $record ? $record->created_at->diffForHumans() : '-'),
                        Forms\Components\Placeholder::make('updated_at')
                            ->label('Last modified at')
                            ->content(fn (?User $record): string => $record ? $record->updated_at->diffForHumans() : '-'),
                    ])
                    ->columnSpan(1),


                Section::make('Access')
                    ->schema([

                        Toggle::make('sendPasswordResetLink')
                            ->required()
                            ->default(false)
                            ->inline()
                            ->reactive(),

                        // TextInput::make('password')
                        //     ->rules([new CustomPasswordRule()])
                        //     ->password()
                        //     ->disableAutocomplete()
                        //     ->disabled(fn (Closure $get) => $get('sendPasswordResetLink') === true),

                        BelongsToManyMultiSelect::make('roles')->relationship('roles', 'name')->preload(),
                    ])
                    ->columns(1),
            ])
            ->columns([
                'sm' => 3,
                'lg' => null,
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('email')
                    ->searchable()
                    ->sortable(),
            ])
            ->filters([
                //
            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }

    public static function getGloballySearchableAttributes(): array
    {
        return ['name', 'email'];
    }
}
