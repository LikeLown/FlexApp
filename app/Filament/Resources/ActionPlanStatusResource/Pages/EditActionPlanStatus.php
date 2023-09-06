<?php

namespace App\Filament\Resources\ActionPlanStatusResource\Pages;

use App\Filament\Resources\ActionPlanStatusResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditActionPlanStatus extends EditRecord
{
    protected static string $resource = ActionPlanStatusResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
