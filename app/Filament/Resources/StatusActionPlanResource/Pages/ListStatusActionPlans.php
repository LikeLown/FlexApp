<?php

namespace App\Filament\Resources\StatusActionPlanResource\Pages;

use App\Filament\Resources\StatusActionPlanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListStatusActionPlans extends ListRecords
{
    protected static string $resource = StatusActionPlanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
