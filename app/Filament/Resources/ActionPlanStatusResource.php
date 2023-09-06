<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ActionPlanStatusResource\Pages;
use App\Filament\Resources\ActionPlanStatusResource\RelationManagers;
use App\Models\ActionPlanStatus;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ActionPlanStatusResource extends Resource
{
    protected static ?string $model = ActionPlanStatus::class;
    protected static ?string $label = 'Statut des actions';
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                ->label('Nom')
                ->required()
                ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')->label('Nom')
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
            ])
            ->emptyStateActions([
                Tables\Actions\CreateAction::make(),
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
            'index' => Pages\ListActionPlanStatuses::route('/'),
            'create' => Pages\CreateActionPlanStatus::route('/create'),
            'edit' => Pages\EditActionPlanStatus::route('/{record}/edit'),
        ];
    }    
}
