<?php

namespace App\Filament\Resources\StatusActionPlanResource\Pages;

use App\Filament\Resources\StatusActionPlanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditStatusActionPlan extends EditRecord
{
    protected static string $resource = StatusActionPlanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
