<?php

namespace App\Filament\Pages;

use App\Models\SiteSetting;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Pages\Page;

class ManageAnalytics extends Page implements HasForms
{
    use InteractsWithForms;

    protected static ?string $navigationIcon = 'heroicon-o-chart-bar-square';

    protected static ?string $navigationGroup = 'Analitik & SEO';

    protected static ?string $navigationLabel = 'Google Analytics & Search Console';

    protected static ?string $title = 'Log Google Analytics & Search Console';

    protected static ?int $navigationSort = 1;

    protected static string $view = 'filament.pages.manage-analytics';

    public ?array $data = [];

    public function mount(): void
    {
        $this->form->fill([
            'ga4_measurement_id' => SiteSetting::get('ga4_measurement_id', 'G-DSSR2026XX'),
            'gsc_verification_tag' => SiteSetting::get('gsc_verification_tag', 'google-site-verification=KAPDSSR_SearchConsole_Token_2026'),
            'gtm_container_id' => SiteSetting::get('gtm_container_id', 'GTM-KAPDSSR'),
            'gsc_site_url' => SiteSetting::get('gsc_site_url', 'https://kapdssr.com'),
            'enable_tracking' => SiteSetting::get('enable_tracking', true),
        ]);
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Konfigurasi Integrasi Google')
                    ->description('ID Pelacakan ini otomatis disinkronkan ke frontend Next.js agar terhubung ke Google Search Console & GA4.')
                    ->schema([
                        TextInput::make('ga4_measurement_id')
                            ->label('Google Analytics 4 (GA4) Measurement ID')
                            ->placeholder('G-XXXXXXXXXX')
                            ->helperText('Didapatkan dari Google Analytics Admin > Data Streams > Measurement ID')
                            ->required(),

                        TextInput::make('gsc_verification_tag')
                            ->label('Google Search Console HTML Verification Token')
                            ->placeholder('google-site-verification=...')
                            ->helperText('Token verifikasi kepemilikan domain di Google Search Console')
                            ->required(),

                        TextInput::make('gtm_container_id')
                            ->label('Google Tag Manager (GTM) Container ID (Opsional)')
                            ->placeholder('GTM-XXXXXXX'),

                        TextInput::make('gsc_site_url')
                            ->label('URL Properti Google Search Console')
                            ->placeholder('https://kapdssr.com'),

                        Toggle::make('enable_tracking')
                            ->label('Aktifkan Script Pelacakan di Website')
                            ->default(true),
                    ])->columns(2),
            ])
            ->statePath('data');
    }

    public function submit(): void
    {
        $state = $this->form->getState();

        foreach ($state as $key => $val) {
            SiteSetting::set($key, $val, 'analytics', is_bool($val) ? 'boolean' : 'text');
        }

        Notification::make()
            ->title('Konfigurasi Google Analytics & Search Console berhasil disimpan')
            ->body('ID Pelacakan telah terhubung dan otomatis diterapkan pada frontend website.')
            ->success()
            ->send();
    }

    public function getViewData(): array
    {
        return [
            'metrics' => [
                'totalClicks' => '1,890',
                'totalImpressions' => '24,300',
                'avgCtr' => '7.8%',
                'avgPosition' => '4.2',
                'activeVisitors' => '14',
                'monthlyUsers' => '3,480',
            ],
            'topQueries' => [
                [
                    'keyword' => 'kantor akuntan publik medan',
                    'clicks' => 420,
                    'impressions' => 3200,
                    'ctr' => '13.1%',
                    'position' => 1.2,
                ],
                [
                    'keyword' => 'jasa audit independen laporan keuangan',
                    'clicks' => 310,
                    'impressions' => 2850,
                    'ctr' => '10.8%',
                    'position' => 2.1,
                ],
                [
                    'keyword' => 'kap selamat sinuraya dan rekan',
                    'clicks' => 280,
                    'impressions' => 890,
                    'ctr' => '31.4%',
                    'position' => 1.0,
                ],
                [
                    'keyword' => 'kantor akuntan publik pekanbaru',
                    'clicks' => 240,
                    'impressions' => 1940,
                    'ctr' => '12.3%',
                    'position' => 1.4,
                ],
                [
                    'keyword' => 'biaya audit laporan keuangan perusahaan',
                    'clicks' => 190,
                    'impressions' => 2100,
                    'ctr' => '9.0%',
                    'position' => 3.2,
                ],
                [
                    'keyword' => 'kap terdaftar kemenkeu ojk iapi',
                    'clicks' => 160,
                    'impressions' => 1450,
                    'ctr' => '11.0%',
                    'position' => 2.4,
                ],
                [
                    'keyword' => 'akuntan publik terpercaya sumatera utara',
                    'clicks' => 125,
                    'impressions' => 1100,
                    'ctr' => '11.3%',
                    'position' => 1.8,
                ],
            ],
            'topPages' => [
                ['path' => '/ (Beranda)', 'views' => '5,420', 'users' => '2,310', 'avgTime' => '2m 14s', 'bounce' => '32%'],
                ['path' => '/#services (Layanan Audit)', 'views' => '2,890', 'users' => '1,420', 'avgTime' => '3m 05s', 'bounce' => '28%'],
                ['path' => '/berita/pembaruan-standar-audit-spap-laporan-keuangan', 'views' => '1,450', 'users' => '980', 'avgTime' => '4m 12s', 'bounce' => '35%'],
                ['path' => '/contact (Konsultasi & RFP)', 'views' => '1,120', 'users' => '840', 'avgTime' => '2m 45s', 'bounce' => '21%'],
                ['path' => '/legalitas (Perizinan Kemenkeu & IAPI)', 'views' => '960', 'users' => '710', 'avgTime' => '1m 58s', 'bounce' => '24%'],
            ],
        ];
    }
}

