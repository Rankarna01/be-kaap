<?php

namespace App\Filament\Resources\StatsMetricResource\Pages;

use App\Filament\Resources\StatsMetricResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListStatsMetrics extends ListRecords
{
    protected static string $resource = StatsMetricResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
