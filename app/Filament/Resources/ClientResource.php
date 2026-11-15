<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ClientResource\Pages;
use App\Models\Client;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class ClientResource extends Resource
{
    protected static ?string $model = Client::class;

    protected static ?string $navigationGroup = 'Testimoni & Kredibilitas';

    protected static ?string $navigationIcon = 'heroicon-o-building-office-2';

    protected static ?string $navigationLabel = 'Klien & Portofolio';

    protected static ?string $modelLabel = 'Klien';

    protected static ?string $pluralModelLabel = 'Klien & Portofolio';

    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Informasi Perusahaan & Sektor')
                    ->schema([
                        Forms\Components\TextInput::make('company_name')
                            ->label('Nama Perusahaan / Entitas')
                            ->required()
                            ->maxLength(255)
                            ->placeholder('Contoh: PT Sawit Makmur Perkasa')
                            ->live(onBlur: true)
                            ->afterStateUpdated(fn (string $operation, $state, Forms\Set $set) => $operation === 'create' ? $set('slug', \Illuminate\Support\Str::slug($state)) : null),

                        Forms\Components\TextInput::make('slug')
                            ->label('URL Slug')
                            ->required()
                            ->unique(ignoreRecord: true)
                            ->maxLength(255),

                        Forms\Components\Select::make('industry_sector')
                            ->label('Sektor Industri')
                            ->options([
                                'Perkebunan & Kelapa Sawit' => 'Perkebunan & Kelapa Sawit',
                                'Manufaktur & Pabrik' => 'Manufaktur & Pabrik',
                                'Perdagangan & Distribusi' => 'Perdagangan & Distribusi',
                                'Kesehatan & Rumah Sakit' => 'Kesehatan & Rumah Sakit',
                                'Jasa & Logistik' => 'Jasa & Logistik',
                                'Yayasan & Pendidikan' => 'Yayasan & Pendidikan',
                                'BUMD & Instansi Pemerintah' => 'BUMD & Instansi Pemerintah',
                                'Properti & Konstruksi' => 'Properti & Konstruksi',
                                'Energi & Pertambangan' => 'Energi & Pertambangan',
                                'Lainnya' => 'Lainnya',
                            ])
                            ->searchable()
                            ->required(),

                        Forms\Components\Select::make('service_provided')
                            ->label('Layanan yang Diberikan')
                            ->options([
                                'General Audit (Audit Umum)' => 'General Audit (Audit Umum)',
                                'Management Audit' => 'Management Audit',
                                'Accounting Service & System' => 'Accounting Service & System',
                                'Special Audit & Investigasi' => 'Special Audit & Investigasi',
                                'Konsultasi & Kepatuhan Perpajakan' => 'Konsultasi & Kepatuhan Perpajakan',
                            ])
                            ->default('General Audit (Audit Umum)')
                            ->required(),

                        Forms\Components\TextInput::make('year_engaged')
                            ->label('Tahun Mulai Kerjasama / Penugasan')
                            ->numeric()
                            ->placeholder('2021'),

                        Forms\Components\TextInput::make('website_url')
                            ->label('Website Resmi Perusahaan')
                            ->url()
                            ->placeholder('https://...'),
                    ])->columns(2),

                Forms\Components\Section::make('Logo Perusahaan')
                    ->schema([
                        Forms\Components\FileUpload::make('logo')
                            ->label('Logo Perusahaan')
                            ->directory('clients')
                            ->image()
                            ->imageResizeMode('contain')
                            ->imageCropAspectRatio('16:9')
                            ->disk('public')
                            ->helperText('Format PNG transparan atau SVG berlatar belakang bersih disarankan.'),
                    ]),

                Forms\Components\Section::make('Kontak Person (PIC Perusahaan)')
                    ->schema([
                        Forms\Components\TextInput::make('pic_name')
                            ->label('Nama Lengkap PIC')
                            ->placeholder('Contoh: Hendrik Gunawan, S.E.'),

                        Forms\Components\TextInput::make('pic_position')
                            ->label('Jabatan PIC')
                            ->placeholder('Contoh: Direktur Keuangan / Financial Controller'),

                        Forms\Components\TextInput::make('pic_phone')
                            ->label('Nomor Telepon / WhatsApp PIC')
                            ->tel()
                            ->placeholder('+62 812-3456-7890'),

                        Forms\Components\TextInput::make('pic_email')
                            ->label('Email PIC')
                            ->email()
                            ->placeholder('pic@perusahaan.com'),
                    ])->columns(2),

                Forms\Components\Section::make('Pengaturan Tampilan')
                    ->schema([
                        Forms\Components\TextInput::make('order_priority')
                            ->label('Urutan Prioritas')
                            ->numeric()
                            ->default(0),

                        Forms\Components\Toggle::make('show_in_homepage')
                            ->label('Tampilkan Logo di Beranda (Showcase)')
                            ->default(true),

                        Forms\Components\Toggle::make('is_active')
                            ->label('Status Aktif')
                            ->default(true),
                    ])->columns(3),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->defaultSort('order_priority')
            ->columns([
                Tables\Columns\ImageColumn::make('logo')
                    ->label('Logo')
                    ->disk('public'),
                Tables\Columns\TextColumn::make('company_name')
                    ->label('Nama Perusahaan')
                    ->searchable()
                    ->sortable()
                    ->weight('bold'),
                Tables\Columns\TextColumn::make('industry_sector')
                    ->label('Sektor')
                    ->badge()
                    ->color('info')
                    ->searchable(),
                Tables\Columns\TextColumn::make('service_provided')
                    ->label('Layanan')
                    ->limit(25),
                Tables\Columns\TextColumn::make('pic_name')
                    ->label('Kontak PIC')
                    ->description(fn (Client $record): ?string => $record->pic_position)
                    ->searchable(),
                Tables\Columns\TextColumn::make('pic_phone')
                    ->label('WhatsApp PIC')
                    ->copyable(),
                Tables\Columns\ToggleColumn::make('show_in_homepage')
                    ->label('Showcase Beranda'),
                Tables\Columns\ToggleColumn::make('is_active')
                    ->label('Aktif'),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('industry_sector')
                    ->label('Sektor Industri')
                    ->options([
                        'Perkebunan & Kelapa Sawit' => 'Perkebunan & Kelapa Sawit',
                        'Manufaktur & Pabrik' => 'Manufaktur & Pabrik',
                        'Perdagangan & Distribusi' => 'Perdagangan & Distribusi',
                        'Kesehatan & Rumah Sakit' => 'Kesehatan & Rumah Sakit',
                        'Jasa & Logistik' => 'Jasa & Logistik',
                        'Yayasan & Pendidikan' => 'Yayasan & Pendidikan',
                        'BUMD & Instansi Pemerintah' => 'BUMD & Instansi Pemerintah',
                    ]),
                Tables\Filters\TernaryFilter::make('show_in_homepage')->label('Showcase Beranda'),
                Tables\Filters\TernaryFilter::make('is_active')->label('Status Aktif'),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListClients::route('/'),
            'create' => Pages\CreateClient::route('/create'),
            'edit' => Pages\EditClient::route('/{record}/edit'),
        ];
    }
}
