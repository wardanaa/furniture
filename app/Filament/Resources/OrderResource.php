<?php

namespace App\Filament\Resources;

use App\Enums\StatusEnum;
use App\Filament\Resources\OrderResource\Pages;
use App\Filament\Resources\OrderResource\RelationManagers;
use App\Models\Order;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class OrderResource extends Resource
{
    protected static ?string $model = Order::class;

    protected static ?string $navigationIcon = 'heroicon-o-shopping-cart';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('status')
                    ->label('Status')
                    ->options(StatusEnum::class)
                    ->searchable()
                    ->required(),
                Forms\Components\TextInput::make('total_payment')
                    ->numeric()
                    ->label('Total Payment')
                    ->required(),
                Forms\Components\TextInput::make('shipping_code')
                    ->label('Shipping Code'),
                Forms\Components\TextInput::make('shipping_companny')
                    ->label('Shipping Companny'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('cart.cart_code') // Change here
                    ->label('Cart Code') // Optionally set a label
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('status')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('total_payment')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('shipping_code')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('shipping_companny')->sortable()->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListOrders::route('/'),
            'create' => Pages\CreateOrder::route('/create'),
            'edit' => Pages\EditOrder::route('/{record}/edit'),
        ];
    }
}
