<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Farmer;
use App\Models\Product;
use App\Models\CompanyOrder;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\RichEditor;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\BelongsToSelect;
use Filament\Forms\Components\HasManyRepeater;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Filament\Resources\CompanyOrderResource\Pages;
use App\Filament\Resources\CompanyOrderResource\RelationManagers;
use App\Filament\Resources\CompanyOrderResource\Pages\EditCompanyOrder;
use App\Filament\Resources\CompanyOrderResource\Pages\ListCompanyOrders;
use App\Filament\Resources\CompanyOrderResource\Pages\CreateCompanyOrder;

class CompanyOrderResource extends Resource
{
    protected static ?string $model = CompanyOrder::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Grid::make()
                    ->schema([
                        TextInput::make('company_name')->required(),
                        TextInput::make('company_phone_number')->required(),
                        TextInput::make('contact_person_name')->required(),
                        TextInput::make('contact_person_phone_number')->required(),
                        TextInput::make('company_state')->required(),
                        TextInput::make('company_city')->required(),
                        TextInput::make('company_address')->required(),
                        DatePicker::make('for_when')->required(),
                        BelongsToSelect::make('farmer_id')
                            ->relationship(
                                'farmer',
                                'name'
                            )
                            ->required()
                            ->reactive()
                            ->afterStateUpdated(fn ($state, callable $set) => $set('fba_id', Farmer::find($state)?->fba_id)),

                        BelongsToSelect::make('fba_id')
                            ->relationship(
                                'fba',
                                'name'
                            )
                            ->disabled(),
                        Select::make('status')
                            ->options([
                                'new' => 'New',
                                'processing' => 'Processing',
                                'shipped' => 'Shipped',
                                'delivered' => 'Delivered',
                                'cancelled' => 'Cancelled',
                            ])
                            ->required(),

                    ])
                    ->columns(2),

                Grid::make()
                    ->schema([
                        RichEditor::make('notes'),
                        HasManyRepeater::make('companyOrderItems')
                            ->relationship('companyOrderItems')
                            ->schema([
                                Select::make('product_id')
                                    ->label('Product')
                                    ->options(Product::query()->pluck('name', 'id'))
                                    ->required()
                                    ->reactive()
                                    ->afterStateUpdated(fn ($state, callable $set) => $set('unit_price', Product::find($state)?->price ?? 0))
                                    ->columnSpan([
                                        'md' => 5,
                                    ]),
                                TextInput::make('qty')
                                    ->numeric()
                                    ->mask(
                                        fn (TextInput\Mask $mask) => $mask
                                            ->numeric()
                                            ->integer()
                                    )
                                    ->default(1)
                                    ->columnSpan([
                                        'md' => 2,
                                    ])
                                    ->required(),
                                TextInput::make('unit_price')
                                    ->label('Unit Price')
                                    ->disabled()
                                    ->numeric()
                                    ->required()
                                    ->columnSpan([
                                        'md' => 3,
                                    ]),
                            ])
                            ->dehydrated()
                            ->defaultItems(1)
                            ->disableLabel()
                            ->columns([
                                'md' => 10,
                            ])
                            ->required(),
                    ])
                    ->columns(1),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('fba.name')->searchable(),
                TextColumn::make('farmer.name')->searchable(),
                TextColumn::make('company_name')->searchable(),
                TextColumn::make('company_phone_number')->searchable(),
                TextColumn::make('contact_person_name')->searchable(),
                TextColumn::make('contact_person_phone_number')->searchable(),
                TextColumn::make('company_state')->searchable(),
                TextColumn::make('company_city')->searchable(),
                TextColumn::make('company_address')->searchable(),
                TextColumn::make('uuid')->searchable(),
                TextColumn::make('total_price')->searchable(),
                TextColumn::make('status')->searchable(),
                TextColumn::make('for_when')->dateTime(),
            ])
            ->filters([
                //
            ]);
    }

    // TODO: on farmer & fba assing, manage land notify fba....make fba see only his order etc...

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCompanyOrders::route('/'),
            'create' => Pages\CreateCompanyOrder::route('/create'),
            'edit' => Pages\EditCompanyOrder::route('/{record}/edit'),
        ];
    }
}
