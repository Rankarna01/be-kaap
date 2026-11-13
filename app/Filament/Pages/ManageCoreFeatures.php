<?php

namespace App\Filament\Pages;

use App\Models\SiteSetting;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Pages\Page;

class ManageCoreFeatures extends Page implements HasForms
{
    use InteractsWithForms;

    protected static ?string $navigationIcon = 'heroicon-o-shield-exclamation';

    protected static ?string $navigationGroup = 'Beranda & Konten Utama';

    protected static ?string $navigationLabel = 'Nilai Inti & Sambutan';

    protected static ?string $title = 'Manajemen Nilai Inti & Sambutan (Core Features)';

    protected static ?int $navigationSort = 3;

    protected static string $view = 'filament.pages.manage-core-features';

    public ?array $data = [];

    public function mount(): void
    {
        $this->form->fill([
            'about_badge' => SiteSetting::get('about_badge', 'TENTANG KAMI'),
            'about_heading' => SiteSetting::get('about_heading', 'Dedikasi & Standar Mutu Profesional KAP Drs. Selamat Sinuraya dan Rekan'),
            'about_subheading' => SiteSetting::get('about_subheading', 'Memberikan jaminan keyakinan memadai (reasonable assurance) dan nilai tambah strategis bagi tata kelola keuangan perusahaan Anda.'),
            'core_values' => SiteSetting::get('core_values', 'Independensi, Integritas, Objektivitas, Kerahasiaan, dan Kepatuhan Standar Profesional Akuntan Publik (SPAP)'),
        ]);
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Sambutan & Headline Section Tentang Kami')
                    ->schema([
                        TextInput::make('about_badge')
                            ->label('Badge Atas')
                            ->default('TENTANG KAMI')
                            ->required(),
                        TextInput::make('about_heading')
                            ->label('Judul Utama Tentang Kami')
                            ->required()
                            ->columnSpanFull(),
                        Textarea::make('about_subheading')
                            ->label('Deskripsi Pengantar')
                            ->rows(3)
                            ->columnSpanFull(),
                        Textarea::make('core_values')
                            ->label('Nilai-Nilai Inti (Core Values)')
                            ->rows(3)
                            ->columnSpanFull(),
                    ]),
            ])
            ->statePath('data');
    }

    public function submit(): void
    {
        $state = $this->form->getState();

        foreach ($state as $key => $val) {
            SiteSetting::set($key, $val, 'about', 'text');
        }

        Notification::make()
            ->title('Informasi Nilai Inti & Sambutan berhasil disimpan')
            ->success()
            ->send();
    }
}

