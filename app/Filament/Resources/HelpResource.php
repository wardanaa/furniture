<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HelpResource\Pages;
use App\Filament\Resources\HelpResource\RelationManagers;
use App\Models\Help;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class HelpResource extends Resource
{
    protected static ?string $model = Help::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Textarea::make('pertanyaan')
                    ->required(),
                Forms\Components\Textarea::make('jawaban')
                    ->label('Jawaban')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('description'),
                Tables\Columns\TextColumn::make('jawaban'),
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
            'index' => Pages\ListHelps::route('/'),
            'create' => Pages\CreateHelp::route('/create'),
            'edit' => Pages\EditHelp::route('/{record}/edit'),
        ];
    }
}
