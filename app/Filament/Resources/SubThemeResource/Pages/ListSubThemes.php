<?php

namespace App\Filament\Resources\SubThemeResource\Pages;

use App\Filament\Resources\SubThemeResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSubThemes extends ListRecords
{
    protected static string $resource = SubThemeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
