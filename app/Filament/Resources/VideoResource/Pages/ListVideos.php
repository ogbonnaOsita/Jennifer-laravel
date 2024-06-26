<?php

namespace App\Filament\Resources\VideoResource\Pages;

use App\Filament\Resources\VideoResource;
use App\Models\Video;
use Filament\Actions;
use Filament\Resources\Components\Tab;
use Filament\Resources\Pages\ListRecords;

class ListVideos extends ListRecords
{
    protected static string $resource = VideoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    public function getTabs(): array
    {
        $tabs = [];

        $tabs['all'] = Tab::make(label: 'All Videos')
            ->badge(Video::withoutTrashed()->count())
            ->modifyQueryUsing(function ($query) {
                return $query->whereNull('deleted_at');
            });
        
        $tabs['archived'] = Tab::make(label: 'Archived')
            ->badge(Video::onlyTrashed()->count())
            ->modifyQueryUsing(function ($query){
                return $query->onlyTrashed();
            });
        return $tabs;
    }
}
