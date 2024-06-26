<?php

namespace App\Filament\Resources\StoryResource\Pages;

use App\Filament\Resources\StoryResource;
use App\Models\Story;
use Filament\Actions;
use Filament\Resources\Components\Tab;
use Filament\Resources\Pages\ListRecords;

class ListStories extends ListRecords
{
    protected static string $resource = StoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }


    public function getTabs(): array
    {
        $tabs = [];

        $tabs['all'] = Tab::make(label: 'All Stories')
            ->badge(Story::withoutTrashed()->count())
            ->modifyQueryUsing(function ($query) {
                return $query->whereNull('deleted_at');
            });
        
        $tabs['archived'] = Tab::make(label: 'Archived')
            ->badge(Story::onlyTrashed()->count())
            ->modifyQueryUsing(function ($query){
                return $query->onlyTrashed();
            });
        return $tabs;
    }
}
