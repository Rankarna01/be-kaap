<?php

namespace App\Providers\Filament;

use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\AuthenticateSession;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Pages;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Filament\Widgets;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;

class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('admin')
            ->path('admin')
            ->login()
            ->brandName('KAP Drs. Selamat Sinuraya & Rekan')
            ->brandLogo(asset('images/logo/logo-kaap.jpeg'))
            ->brandLogoHeight('2.6rem')
            ->favicon('/images/logo/logo-kaap.jpeg')
            ->sidebarWidth('16rem')
            ->collapsedSidebarWidth('4.5rem')
            ->sidebarCollapsibleOnDesktop()
            ->collapsibleNavigationGroups(true)
            ->renderHook(
                \Filament\View\PanelsRenderHook::HEAD_END,
                fn () => view('filament.custom-styles'),
            )
            ->colors([
                'primary' => [
                    50 => '#f0f7fd',
                    100 => '#dfeffa',
                    200 => '#b8dff6',
                    300 => '#7ac4ee',
                    400 => '#35a5e3',
                    500 => '#0369b1',
                    600 => '#0b6ec8',
                    700 => '#0958a2',
                    800 => '#0c4b85',
                    900 => '#103f6e',
                    950 => '#0a2849',
                ],
            ])
            ->navigationGroups([
                'Beranda & Konten Utama',
                'Layanan & Spesialisasi',
                'Tim & Kepemimpinan',
                'Testimoni & Kredibilitas',
                'Publikasi & Wawasan',
                'Interaksi & Klien',
                'Media & Informasi',
                'Analitik & SEO',
                'Pengaturan Sistem',
            ])
            ->discoverResources(in: app_path('Filament/Resources'), for: 'App\\Filament\\Resources')
            ->discoverPages(in: app_path('Filament/Pages'), for: 'App\\Filament\\Pages')
            ->pages([
                Pages\Dashboard::class,
            ])
            ->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\\Filament\\Widgets')
            ->widgets([
                \App\Filament\Widgets\DashboardBannerWidget::class,
                \App\Filament\Widgets\StatsOverviewWidget::class,
                \App\Filament\Widgets\AnalyticsOverviewWidget::class,
                \App\Filament\Widgets\RecentSubmissionsWidget::class,
            ])
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                VerifyCsrfToken::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
            ])
            ->authMiddleware([
                Authenticate::class,
            ]);
    }
}
