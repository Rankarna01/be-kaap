<?php

namespace App\Filament\Pages;

use App\Models\HeroSection;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Pages\Page;

class ManageHeroSection extends Page implements HasForms
{
    use InteractsWithForms;

    protected static ?string $navigationIcon = 'heroicon-o-sparkles';

    protected static ?string $navigationGroup = 'Beranda & Konten Utama';

    protected static ?string $navigationLabel = 'Hero & Banner Section';

    protected static ?string $title = 'Manajemen Hero Section (Header Beranda)';

    protected static ?int $navigationSort = 1;

    protected static string $view = 'filament.pages.manage-hero-section';

    public ?array $data = [];

    public function mount(): void
    {
        $hero = HeroSection::first();

        $this->form->fill([
            'headline' => $hero?->headline ?? 'KAP DRS. SINURAYA DAN REKAN',
            'badge_text' => $hero?->badge_text ?? 'JLN. PASUNDAN 29A, MEDAN',
            'cta_primary_label' => $hero?->cta_primary_label ?? 'Konsultasi Sekarang',
            'cta_primary_url' => $hero?->cta_primary_url ?? '/#contact',
            'cta_primary_active' => $hero?->cta_primary_active ?? true,
            'cta_secondary_label' => $hero?->cta_secondary_label ?? 'Lihat Layanan Kami',
            'cta_secondary_url' => $hero?->cta_secondary_url ?? '/#services',
            'cta_secondary_active' => $hero?->cta_secondary_active ?? true,
            'banner_image_light' => $hero?->banner_image_light,
            'banner_image_dark' => $hero?->banner_image_dark,
            'is_active' => $hero?->is_active ?? true,
        ]);
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Teks Utama & Lokasi Badge')
                    ->schema([
                        TextInput::make('headline')
                            ->label('Headline Nama Firma')
                            ->helperText('Tampil 1 baris di bagian paling atas hero section.')
                            ->required(),
                        TextInput::make('badge_text')
                            ->label('Badge Alamat Singkat')
                            ->helperText('Contoh: JLN. PASUNDAN 29A, MEDAN')
                            ->required(),
                    ])->columns(2),

                Section::make('Tombol Call to Action (CTA)')
                    ->schema([
                        TextInput::make('cta_primary_label')
                            ->label('Label Tombol Utama')
                            ->required(),
                        TextInput::make('cta_primary_url')
                            ->label('URL Tombol Utama')
                            ->required(),
                        Toggle::make('cta_primary_active')
                            ->label('Aktifkan Tombol Utama')
                            ->default(true),

                        TextInput::make('cta_secondary_label')
                            ->label('Label Tombol Kedua')
                            ->required(),
                        TextInput::make('cta_secondary_url')
                            ->label('URL Tombol Kedua')
                            ->required(),
                        Toggle::make('cta_secondary_active')
                            ->label('Aktifkan Tombol Kedua')
                            ->default(true),
                    ])->columns(3),

                Section::make('Gambar Banner Hero')
                    ->schema([
                        FileUpload::make('banner_image_light')
                            ->label('Gambar Banner (Mode Terang / Light)')
                            ->directory('hero-banners')
                            ->image()
                            ->imageEditor()
                            ->disk('public'),
                        FileUpload::make('banner_image_dark')
                            ->label('Gambar Banner (Mode Gelap / Dark)')
                            ->directory('hero-banners')
                            ->image()
                            ->imageEditor()
                            ->disk('public'),
                        Toggle::make('is_active')
                            ->label('Tampilkan Hero Section di Website')
                            ->default(true),
                    ])->columns(2),
            ])
            ->statePath('data');
    }

    public function submit(): void
    {
        $state = $this->form->getState();

        $hero = HeroSection::first();
        if ($hero) {
            $hero->update($state);
        } else {
            HeroSection::create($state);
        }

        Notification::make()
            ->title('Hero section berhasil diperbarui')
            ->success()
            ->send();
    }
}

