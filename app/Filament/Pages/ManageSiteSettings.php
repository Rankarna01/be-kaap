<?php

namespace App\Filament\Pages;

use App\Models\SiteSetting;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Pages\Page;

class ManageSiteSettings extends Page implements HasForms
{
    use InteractsWithForms;

    protected static ?string $navigationIcon = 'heroicon-o-cog-6-tooth';

    protected static ?string $navigationGroup = 'Pengaturan Sistem';

    protected static ?string $navigationLabel = 'Pengaturan Situs & Kontak';

    protected static ?string $title = 'Pengaturan Identitas Situs & Kontak Firma';

    protected static ?int $navigationSort = 1;

    protected static string $view = 'filament.pages.manage-site-settings';

    public ?array $data = [];

    public function mount(): void
    {
        $this->form->fill([
            'firm_name' => SiteSetting::get('firm_name', 'KAP DRS. SELAMAT SINURAYA DAN REKAN'),
            'firm_short_name' => SiteSetting::get('firm_short_name', 'KAP DSSR'),
            'tagline' => SiteSetting::get('tagline', 'Independensi, Integritas, Objektivitas, dan Standar Mutu Profesional Tertinggi'),
            'license_kemenkeu' => SiteSetting::get('license_kemenkeu', 'Izin Usaha KAP Kemenkeu RI No. KEP-918/KM.1/2019'),
            'iapi_registration' => SiteSetting::get('iapi_registration', 'Anggota Terdaftar Institut Akuntan Publik Indonesia (IAPI)'),
            'working_hours' => SiteSetting::get('working_hours', 'Senin - Jumat: 08:30 - 17:00 WIB'),
            'linkedin_url' => SiteSetting::get('linkedin_url', 'https://www.linkedin.com'),
            'email_primary' => SiteSetting::get('email_primary', 'Kapdrsselamatsinurayadanrekan@gmail.com'),
            'phone_primary' => SiteSetting::get('phone_primary', '+62 852-7665-3453'),
            'whatsapp_primary' => SiteSetting::get('whatsapp_primary', '6285276653453'),
        ]);
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Identitas Resmi Kantor Akuntan Publik')
                    ->schema([
                        TextInput::make('firm_name')
                            ->label('Nama Resmi Firma')
                            ->required(),
                        TextInput::make('firm_short_name')
                            ->label('Nama Singkat / Brand')
                            ->required(),
                        TextInput::make('tagline')
                            ->label('Tagline / Slogan')
                            ->columnSpanFull(),
                        TextInput::make('license_kemenkeu')
                            ->label('Nomor Izin Kemenkeu RI'),
                        TextInput::make('iapi_registration')
                            ->label('Registrasi Keanggotaan IAPI'),
                    ])->columns(2),

                Section::make('Kontak Terpusat & Operasional')
                    ->schema([
                        TextInput::make('email_primary')
                            ->label('Email Utama')
                            ->email(),
                        TextInput::make('phone_primary')
                            ->label('Telepon Utama'),
                        TextInput::make('whatsapp_primary')
                            ->label('Nomor WhatsApp (Contoh: 6285276653453)'),
                        TextInput::make('working_hours')
                            ->label('Jam Operasional'),
                        TextInput::make('linkedin_url')
                            ->label('Tautan LinkedIn Resmi')
                            ->url()
                            ->columnSpanFull(),
                    ])->columns(2),
            ])
            ->statePath('data');
    }

    public function submit(): void
    {
        $state = $this->form->getState();

        foreach ($state as $key => $val) {
            SiteSetting::set($key, $val, 'general', 'text');
        }

        Notification::make()
            ->title('Pengaturan berhasil diperbarui')
            ->success()
            ->send();
    }
}

