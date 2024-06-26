<?php

namespace App\Filament\Resources\AwardResource\Pages;

use App\Filament\Resources\AwardResource;
use App\Models\Award;
use Filament\Actions;
use Filament\Resources\Components\Tab;
use Filament\Resources\Pages\ListRecords;

class ListAwards extends ListRecords
{
    protected static string $resource = AwardResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    public function getTabs(): array
    {
        $tabs = [];

        $tabs['all'] = Tab::make(label: 'All Achievements')
            ->badge(Award::withoutTrashed()->count())
            ->modifyQueryUsing(function ($query) {
                return $query->whereNull('deleted_at');
            });
        
        $tabs['archived'] = Tab::make(label: 'Archived')
            ->badge(Award::onlyTrashed()->count())
            ->modifyQueryUsing(function ($query){
                return $query->onlyTrashed();
            });
        return $tabs;
    }
}
