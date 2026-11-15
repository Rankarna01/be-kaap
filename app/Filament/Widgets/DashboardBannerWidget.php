<?php

namespace App\Filament\Widgets;

use App\Models\ContactSubmission;
use Filament\Widgets\Widget;

class DashboardBannerWidget extends Widget
{
    protected static string $view = 'filament.widgets.dashboard-banner-widget';

    protected int | string | array $columnSpan = 'full';

    protected static ?int $sort = 1;

    public function getViewData(): array
    {
        $newSubmissions = ContactSubmission::where('status', 'new')->count();
        $user = auth()->user();

        return [
            'userName' => $user?->name ?? 'Administrator',
            'userEmail' => $user?->email ?? 'admin@kapdssr.com',
            'newSubmissions' => $newSubmissions,
            'todayDate' => now()->translatedFormat('l, d F Y'),
        ];
    }
}

