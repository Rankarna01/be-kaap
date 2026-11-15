<?php

namespace App\Filament\Widgets;

use App\Models\Article;
use App\Models\Client;
use App\Models\ContactSubmission;
use App\Models\Partner;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverviewWidget extends BaseWidget
{
    protected static ?int $sort = 2;

    protected function getStats(): array
    {
        $totalSubmissions = ContactSubmission::count();
        $newSubmissions = ContactSubmission::where('status', 'new')->count();

        $totalClients = Client::where('is_active', true)->count();
        $totalArticles = Article::where('status', 'published')->count();
        $featuredArticles = Article::where('is_featured', true)->count();

        $totalPartners = Partner::where('is_active', true)->count();

        return [
            Stat::make('Pesan Masuk (RFP)', (string) $totalSubmissions)
                ->description($newSubmissions > 0 ? "{$newSubmissions} permohonan baru butuh follow up" : 'Semua pesan telah ditindaklanjuti')
                ->descriptionIcon($newSubmissions > 0 ? 'heroicon-m-bell-alert' : 'heroicon-m-check-badge')
                ->color($newSubmissions > 0 ? 'danger' : 'primary')
                ->chart([3, 5, 4, 9, 7, 12, $totalSubmissions ?: 5]),

            Stat::make('Klien Korporasi', (string) ($totalClients ?: 90) . ' Klien')
                ->description('Tersebar di Medan, Riau & Nasional')
                ->descriptionIcon('heroicon-m-building-office-2')
                ->color('success')
                ->chart([70, 75, 80, 85, 88, 90, 92]),

            Stat::make('Artikel Wawasan', (string) $totalArticles)
                ->description("{$featuredArticles} artikel di Bento Grid Beranda")
                ->descriptionIcon('heroicon-m-newspaper')
                ->color('info')
                ->chart([1, 2, 4, 6, 8, 10, $totalArticles ?: 3]),

            Stat::make('Partner & Tenaga Ahli', "{$totalPartners} Partner / 33 Staf")
                ->description('Akuntan Publik Terdaftar IAPI & Kemenkeu')
                ->descriptionIcon('heroicon-m-academic-cap')
                ->color('warning')
                ->chart([4, 4, 4, 4, 4]),
        ];
    }
}

