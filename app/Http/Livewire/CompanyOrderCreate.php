<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Illuminate\Support\Str;
use App\Models\CompanyOrder;
use Filament\Facades\Filament;
use App\Models\CompanyOrderItem;
use Illuminate\Support\Facades\DB;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Select;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\HasManyRepeater;
use Filament\Forms\Concerns\InteractsWithForms;

class CompanyOrderCreate extends Component implements HasForms
{
    use InteractsWithForms;

    public  $company_name, $company_phone_number, $contact_person_name;
    public $contact_person_phone_number, $company_state, $company_city, $company_address;
    public  $notes, $for_when;
    public $companyOrderItems = [];

    public function render()
    {
        return view('livewire.company-order-create');
    }

    protected function getFormSchema(): array
    {
        return [
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

                ])
                ->columns(2),
            RichEditor::make('notes'),
            Repeater::make('companyOrderItems')
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
        ];
    }

    public function submit()
    {
        $data = $this->form->getState();
        $data['total_price'] = 0;
        $data['uuid'] =  Str::uuid()->toString();
        $companyOrderItems = $data['companyOrderItems'];

        foreach ($companyOrderItems as $item) {
            $data['total_price'] += $item['qty'] * $item['unit_price'];
        }

        unset($data['companyOrderItems']);

        DB::transaction(function () use ($companyOrderItems, $data) {
            $companyOrder = CompanyOrder::create($data);

            foreach ($companyOrderItems as $item) {
                CompanyOrderItem::create([
                    'company_order_id' => $companyOrder->id,
                    'product_id' => $item['product_id'],
                    'qty' => $item['qty'],
                    'unit_price' => $item['unit_price']
                ]);
            }

            Filament::notify('success', 'Successfully made a request');
        });
    }
}
