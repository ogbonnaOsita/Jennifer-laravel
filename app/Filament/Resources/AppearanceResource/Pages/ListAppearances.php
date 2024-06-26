<?php

namespace App\Filament\Resources\AppearanceResource\Pages;

use App\Filament\Resources\AppearanceResource;
use App\Models\Appearance;
use Filament\Actions;
use Filament\Resources\Components\Tab;
use Filament\Resources\Pages\ListRecords;

class ListAppearances extends ListRecords
{
    protected static string $resource = AppearanceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    public function getTabs(): array
    {
        $tabs = [];

        $tabs['all'] = Tab::make(label: 'All Appearances')
            ->badge(Appearance::withoutTrashed()->count())
            ->modifyQueryUsing(function ($query) {
                return $query->whereNull('deleted_at');
            });
        
        $tabs['archived'] = Tab::make(label: 'Archived')
            ->badge(Appearance::onlyTrashed()->count())
            ->modifyQueryUsing(function ($query){
                return $query->onlyTrashed();
            });
        return $tabs;
    }
}
