<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SubThemeResource\Pages;
use App\Filament\Resources\SubThemeResource\RelationManagers;
use App\Models\SubTheme;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SubThemeResource extends Resource
{
    protected static ?string $model = SubTheme::class;
    protected static ?string $label = 'sous-thème';
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form->schema([TextInput::make('title')->label('Nom')]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([TextColumn::make('title')->label('Nom')])
            ->filters([
                //
            ])
            ->actions([Tables\Actions\EditAction::make()])
            ->bulkActions([Tables\Actions\BulkActionGroup::make([Tables\Actions\DeleteBulkAction::make()])])
            ->emptyStateActions([Tables\Actions\CreateAction::make()]);
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
            'index' => Pages\ListSubThemes::route('/'),
            'create' => Pages\CreateSubTheme::route('/create'),
            'edit' => Pages\EditSubTheme::route('/{record}/edit'),
        ];
    }
}
