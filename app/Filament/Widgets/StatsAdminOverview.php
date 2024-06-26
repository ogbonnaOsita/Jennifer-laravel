<?php

namespace App\Filament\Widgets;

use App\Models\Appearance;
use App\Models\Story;
use App\Models\Video;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsAdminOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Stories', Story::query()->count()),
            Stat::make('Total Short Videos', Video::query()->count()),
            Stat::make('Total Appearances', Appearance::query()->count()),
        ];
    }
}
