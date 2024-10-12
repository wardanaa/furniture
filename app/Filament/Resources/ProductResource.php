<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Filament\Resources\ProductResource\RelationManagers;
use App\Filament\Resources\ProductResource\RelationManagers\PhotoRelationManager;
use App\Models\Brand;
use App\Models\Product;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Guava\FilamentNestedResources\Ancestor;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Hidden;
use Illuminate\Support\Facades\Auth;
use Filament\Forms\Components\Select;
use App\Enums\DimensionEnum;
use App\Enums\DiscountTypeEnum;
use App\Models\Category;
use App\Models\Color;
use Guava\FilamentNestedResources\Concerns\NestedResource;

class ProductResource extends Resource
{
    use NestedResource;

    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-squares-plus';

    protected static ?string $navigationGroup = 'Product Management';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->label('Name')
                    ->required(),
                Select::make('brand_id')
                    ->label('Brand')
                    ->options(Brand::all()->pluck('name', 'id'))
                    ->searchable()
                    ->required(),
                Forms\Components\TextInput::make('stock')
                    ->numeric()
                    ->label('Stock')
                    ->required(),
                Select::make('category_id')
                    ->label('Category')
                    ->options(Category::all()->pluck('name', 'id'))
                    ->searchable()
                    ->required(),
                Select::make('dimension')
                    ->label('Dimension')
                    ->options(DimensionEnum::class)
                    ->required(),
                Select::make('color_id')
                    ->label('Color')
                    ->options(Color::all()->pluck('name', 'id'))
                    ->searchable()
                    ->required(),
                Forms\Components\TextInput::make('price')
                    ->label('Price')
                    ->numeric()
                    ->required(),
                Forms\Components\TextInput::make('discount')
                    ->label('Discount')
                    ->numeric()
                    ->required(),
                Select::make('discount_type')
                    ->label('Discount Type')
                    ->options(DiscountTypeEnum::class)
                    ->required(),
                Forms\Components\Textarea::make('description')
                    ->label('Description')
                    ->required()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('brand.name') // Change here
                    ->label('Brand') // Optionally set a label
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('price')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('discount')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('discount_type')->sortable()->searchable(),
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
            PhotoRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
            'photos' => Pages\ManagePhoto::route('/{record}/photos'),
            'photo.create' => Pages\CreatePhoto::route('/{record}/photos/create'),
        ];
    }

    public static function getAncestor(): ?Ancestor
    {
        return null;
    }
}
