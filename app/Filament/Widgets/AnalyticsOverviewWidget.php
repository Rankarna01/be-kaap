<?php

namespace App\Filament\Widgets;

use App\Models\SiteSetting;
use Filament\Widgets\Widget;

class AnalyticsOverviewWidget extends Widget
{
    protected static string $view = 'filament.widgets.analytics-overview-widget';

    protected int | string | array $columnSpan = 'full';

    protected static ?int $sort = 2;

    public function getViewData(): array
    {
        $gaId = SiteSetting::get('ga4_measurement_id', 'G-DSSR2026XX');
        $gscStatus = SiteSetting::get('gsc_connected', true);

        return [
            'gaId' => $gaId,
            'gscStatus' => $gscStatus,
            'monthlyVisitors' => '3,480',
            'monthlyPageviews' => '12,650',
            'organicClicks' => '1,890',
            'searchImpressions' => '24,300',
            'avgPosition' => '4.2',
            'avgCtr' => '7.8%',
        ];
    }
}

