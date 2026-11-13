<?php

namespace App\Filament\Pages;

use App\Models\Office;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Pages\Page;

class ManageOffices extends Page implements HasForms
{
    use InteractsWithForms;

    protected static ?string $navigationIcon = 'heroicon-o-building-office-2';

    protected static ?string $navigationGroup = 'Pengaturan Sistem';

    protected static ?string $navigationLabel = 'Kantor Medan & Pekanbaru';

    protected static ?string $title = 'Manajemen Kantor Medan & Pekanbaru';

    protected static ?int $navigationSort = 2;

    protected static string $view = 'filament.pages.manage-offices';

    public ?array $data = [];

    public function mount(): void
    {
        $medan = Office::where('slug', 'medan')->first();
        $pku = Office::where('slug', 'pekanbaru')->first();

        $this->form->fill([
            'medan_name' => $medan?->name ?? 'Kantor Pusat Medan',
            'medan_address' => $medan?->address ?? 'Jl. Pasundan No. 29A, Sei Putih Tim. II, Kec. Medan Petisah, Kota Medan, Sumatera Utara 20118',
            'medan_phone' => $medan?->phone ?? '+62 852-7665-3453 / +62 813-6124-6093',
            'medan_email' => $medan?->email ?? 'Kapdrsselamatsinurayadanrekan@gmail.com',
            'medan_whatsapp' => $medan?->whatsapp_number ?? '6285276653453',
            'medan_map_embed' => $medan?->map_embed_url ?? '',
            'medan_direct_map' => $medan?->direct_map_link ?? 'https://maps.google.com/?q=Jl.+Pasundan+No.+29A,+Medan',

            'pku_name' => $pku?->name ?? 'Kantor Cabang Pekanbaru',
            'pku_address' => $pku?->address ?? 'Jl. Paus No. 43 C, Wonorejo, Kec. Marpoyan Damai, Kota Pekanbaru, Riau 28125',
            'pku_phone' => $pku?->phone ?? '+62 811-6907-799',
            'pku_email' => $pku?->email ?? 'selamatsinurayapku@gmail.com',
            'pku_whatsapp' => $pku?->whatsapp_number ?? '628116907799',
            'pku_map_embed' => $pku?->map_embed_url ?? '',
            'pku_direct_map' => $pku?->direct_map_link ?? 'https://maps.google.com/?q=Jl.+Paus+No.+43C,+Pekanbaru',
        ]);
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Kantor Pusat Medan')
                    ->description('Detail alamat, nomor kontak, dan peta Google Maps untuk kantor Medan')
                    ->schema([
                        TextInput::make('medan_name')->label('Nama Kantor')->required(),
                        TextInput::make('medan_phone')->label('Nomor Telepon')->required(),
                        TextInput::make('medan_email')->label('Email Resmi')->email()->required(),
                        TextInput::make('medan_whatsapp')->label('WhatsApp'),
                        Textarea::make('medan_address')->label('Alamat Lengkap')->rows(2)->columnSpanFull()->required(),
                        TextInput::make('medan_direct_map')->label('Link Google Maps (Direct Link)')->url(),
                        Textarea::make('medan_map_embed')->label('Embed URL Google Maps (Iframe Src)')->rows(2)->columnSpanFull(),
                    ])->columns(2),

                Section::make('Kantor Cabang Pekanbaru')
                    ->description('Detail alamat, nomor kontak, dan peta Google Maps untuk kantor Pekanbaru')
                    ->schema([
                        TextInput::make('pku_name')->label('Nama Kantor')->required(),
                        TextInput::make('pku_phone')->label('Nomor Telepon')->required(),
                        TextInput::make('pku_email')->label('Email Resmi')->email()->required(),
                        TextInput::make('pku_whatsapp')->label('WhatsApp'),
                        Textarea::make('pku_address')->label('Alamat Lengkap')->rows(2)->columnSpanFull()->required(),
                        TextInput::make('pku_direct_map')->label('Link Google Maps (Direct Link)')->url(),
                        Textarea::make('pku_map_embed')->label('Embed URL Google Maps (Iframe Src)')->rows(2)->columnSpanFull(),
                    ])->columns(2),
            ])
            ->statePath('data');
    }

    public function submit(): void
    {
        $state = $this->form->getState();

        Office::updateOrCreate(
            ['slug' => 'medan'],
            [
                'city' => 'Medan',
                'name' => $state['medan_name'],
                'phone' => $state['medan_phone'],
                'email' => $state['medan_email'],
                'whatsapp_number' => $state['medan_whatsapp'],
                'address' => $state['medan_address'],
                'direct_map_link' => $state['medan_direct_map'],
                'map_embed_url' => $state['medan_map_embed'],
                'is_headquarters' => true,
                'order_priority' => 1,
            ]
        );

        Office::updateOrCreate(
            ['slug' => 'pekanbaru'],
            [
                'city' => 'Pekanbaru',
                'name' => $state['pku_name'],
                'phone' => $state['pku_phone'],
                'email' => $state['pku_email'],
                'whatsapp_number' => $state['pku_whatsapp'],
                'address' => $state['pku_address'],
                'direct_map_link' => $state['pku_direct_map'],
                'map_embed_url' => $state['pku_map_embed'],
                'is_headquarters' => false,
                'order_priority' => 2,
            ]
        );

        Notification::make()
            ->title('Data Kantor Medan & Pekanbaru berhasil disimpan')
            ->success()
            ->send();
    }
}

