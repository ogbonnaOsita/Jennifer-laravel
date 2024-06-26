<?php

namespace App\Filament\Resources\AppearanceResource\Pages;

use App\Filament\Resources\AppearanceResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewAppearance extends ViewRecord
{
    protected static string $resource = AppearanceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
