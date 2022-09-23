<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Product;
use Livewire\Component;
use Illuminate\Support\Str;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Group;
use Filament\Tables\Columns\TagsColumn;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Model;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\ProductResource\Pages;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use App\Filament\Resources\ProductResource\Pages\EditProduct;
use App\Filament\Resources\ProductResource\Pages\ListProducts;
use App\Filament\Resources\ProductResource\Pages\CreateProduct;
use App\Filament\Resources\BrandResource\RelationManagers\ProductsRelationManager;
use App\Filament\Resources\ProductResource\RelationManagers\InventoriesRelationManager;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationGroup = 'Shop';

    protected static ?string $navigationIcon = 'heroicon-o-lightning-bolt';

    protected static ?int $navigationSort = 0;

    public static function form(Form $form): Form
    {
        return $form
            ->schema(static::getFormSchema(Forms\Components\Card::class))
            ->columns([
                'sm' => 3,
                'lg' => null,
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns(static::getTableColumns())
            ->filters([
                //
            ]);
    }

    public static function getRelations(): array
    {
        return [
            InventoriesRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }

    public static function getGloballySearchableAttributes(): array
    {
        return ['name', 'sku'];
    }


    protected static function getGlobalSearchEloquentQuery(): Builder
    {
        return parent::getGlobalSearchEloquentQuery();
    }

    public static function getFormSchema(string $layout = Forms\Components\Grid::class): array
    {
        return [
            Forms\Components\Group::make()
                ->schema([
                    $layout::make()
                        ->schema([
                            Forms\Components\TextInput::make('name')
                                ->required()
                                ->reactive()
                                ->afterStateUpdated(fn ($state, callable $set) => $set('slug', Str::slug($state))),
                            Forms\Components\TextInput::make('slug')
                                ->disabled()
                                ->required()
                                ->unique(Product::class, 'slug', fn ($record) => $record),
                            RichEditor::make('description')
                                ->toolbarButtons([
                                    'attachFiles',
                                    'blockquote',
                                    'bold',
                                    'bulletList',
                                    'codeBlock',
                                    'h2',
                                    'h3',
                                    'italic',
                                    'link',
                                    'orderedList',
                                    'redo',
                                    'strike',
                                    'undo',
                                ])
                                ->columnSpan([
                                    'sm' => 2,
                                ]),
                        ])->columns([
                            'sm' => 2,
                        ]),
                    $layout::make()
                        ->schema([
                            SpatieMediaLibraryFileUpload::make('media')
                                ->collection('product-images')
                                ->multiple()
                                ->minFiles(2)
                                ->maxFiles(5),
                        ])
                        ->columns(1),
                    $layout::make()
                        ->schema([
                            Forms\Components\Placeholder::make('Pricing'),
                            Forms\Components\Grid::make()
                                ->schema([
                                    Forms\Components\TextInput::make('price')
                                        ->numeric()
                                        ->rules(['regex:/^\d{1,6}(\.\d{0,2})?$/'])
                                        ->required(),
                                    Forms\Components\TextInput::make('old_price')
                                        ->label('Compare at price')
                                        ->numeric()
                                        ->rules(['regex:/^\d{1,6}(\.\d{0,2})?$/'])
                                        ->required(),
                                    Forms\Components\TextInput::make('cost')
                                        ->label('Cost per item')
                                        ->helperText('Users won\'t see this price.')
                                        ->numeric()
                                        ->rules(['regex:/^\d{1,6}(\.\d{0,2})?$/'])
                                        ->required(),
                                ]),
                        ]),
                    $layout::make()
                        ->schema([
                            Forms\Components\Placeholder::make('Inventory'),
                            Forms\Components\Grid::make()
                                ->schema([
                                    Forms\Components\TextInput::make('sku')
                                        ->label('SKU (Stock Keeping Unit)')
                                        ->unique(Product::class, 'sku', fn ($record) => $record)
                                        ->required(),
                                    Forms\Components\TextInput::make('barcode')
                                        ->label('Barcode (ISBN, UPC, GTIN, etc.)')
                                        ->unique(Product::class, 'barcode', fn ($record) => $record)
                                        ->required(),
                                    Forms\Components\TextInput::make('qty')
                                        ->label('Quantity')
                                        ->numeric()
                                        ->rules(['integer', 'min:0'])
                                        ->required(),
                                ]),
                        ]),

                ])->columnSpan([
                    'sm' => 2,
                ]),
            Forms\Components\Group::make()
                ->schema([
                    $layout::make()
                        ->schema([
                            Forms\Components\Placeholder::make('Status'),
                            Forms\Components\Group::make()
                                ->schema([
                                    Forms\Components\Toggle::make('is_visible')
                                        ->label('Visible')
                                        ->default(true),

                                    Forms\Components\Toggle::make('featured')
                                        ->label('Featured')
                                        ->default(false),
                                ]),
                        ])
                        ->columns(1),
                    $layout::make()
                        ->schema([
                            Forms\Components\BelongsToManyMultiSelect::make('categories')
                                ->relationship('categories', 'name')
                                ->required(),

                            Forms\Components\TextInput::make('period')
                                ->integer()
                                ->required(),

                            Forms\Components\TextInput::make('yield')
                                ->numeric()
                                ->required(),
                        ])
                        ->columns(1),
                ])
                ->columnSpan(1),
        ];
    }

    public static function getTableColumns(): array
    {
        return [
            Tables\Columns\TextColumn::make('name')
                ->label('Name')
                ->searchable()
                ->sortable(),
            Tables\Columns\TextColumn::make('price')
                ->label('Price')
                ->searchable()
                ->sortable(),
            Tables\Columns\TextColumn::make('sku')
                ->searchable()
                ->sortable(),
            Tables\Columns\TextColumn::make('qty')
                ->searchable()
                ->sortable(),
            Tables\Columns\BooleanColumn::make('is_visible')
                ->label('Visibility')
                ->sortable()
                ->toggleable(true),
            Tables\Columns\BooleanColumn::make('featured')
                ->label('Featured')
                ->sortable(),
        ];
    }
}
