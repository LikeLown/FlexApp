<?php

namespace App\Filament\Resources;

use App\Filament\Resources\StatusActionPlanResource\Pages;
use App\Filament\Resources\StatusActionPlanResource\RelationManagers;
use App\Models\StatusActionPlan;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class StatusActionPlanResource extends Resource
{
    protected static ?string $model = StatusActionPlan::class;
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
            'index' => Pages\ListStatusActionPlans::route('/'),
            'create' => Pages\CreateStatusActionPlan::route('/create'),
            'edit' => Pages\EditStatusActionPlan::route('/{record}/edit'),
        ];
    }    
}
