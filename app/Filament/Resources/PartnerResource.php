<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PartnerResource\Pages;
use App\Models\Partner;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class PartnerResource extends Resource
{
    protected static ?string $model = Partner::class;

    protected static ?string $navigationGroup = 'Tim & Kepemimpinan';

    protected static ?string $navigationIcon = 'heroicon-o-users';

    protected static ?string $navigationLabel = 'Partner & Rekan KAP';

    protected static ?string $modelLabel = 'Partner';

    protected static ?string $pluralModelLabel = 'Partner & Rekan KAP';

    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Identitas Partner')
                    ->schema([
                        Forms\Components\TextInput::make('name')
                            ->label('Nama Lengkap Beserta Gelar')
                            ->required()
                            ->maxLength(255)
                            ->placeholder('Contoh: Bahtera Sinuraya, SE, MM, AK, CPA'),

                        Forms\Components\TextInput::make('role')
                            ->label('Jabatan')
                            ->default('Partner KAP')
                            ->required()
                            ->maxLength(255),

                        Forms\Components\TextInput::make('license_number')
                            ->label('Nomor Izin Registrasi AP / Kemenkeu')
                            ->placeholder('AP.0812 / Kemenkeu RI'),

                        Forms\Components\Toggle::make('is_leader')
                            ->label('Apakah Pimpinan Utama KAP?')
                            ->default(false),
                    ])->columns(2),

                Forms\Components\Section::make('Kontak & Tautan Profil')
                    ->schema([
                        Forms\Components\TextInput::make('email')
                            ->label('Email Partner')
                            ->email(),

                        Forms\Components\TextInput::make('linkedin_url')
                            ->label('Tautan LinkedIn')
                            ->url()
                            ->placeholder('https://www.linkedin.com/in/...'),

                        Forms\Components\TextInput::make('portfolio_url')
                            ->label('Tautan Portfolio / CV')
                            ->placeholder('/#about'),

                        Forms\Components\FileUpload::make('avatar_image')
                            ->label('Foto Profil (Opsional)')
                            ->helperText('Jika dikosongkan, sistem akan otomatis menampilkan Modern Executive Vector Avatar.')
                            ->directory('partners')
                            ->image()
                            ->imageEditor()
                            ->disk('public'),

                        Forms\Components\TextInput::make('order_priority')
                            ->label('Urutan Tampilan')
                            ->numeric()
                            ->default(0),

                        Forms\Components\Toggle::make('is_active')
                            ->label('Status Aktif')
                            ->default(true),
                    ])->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->defaultSort('order_priority')
            ->columns([
                Tables\Columns\ImageColumn::make('avatar_image')
                    ->label('Foto')
                    ->disk('public')
                    ->circular(),
                Tables\Columns\TextColumn::make('name')
                    ->label('Nama Partner')
                    ->searchable()
                    ->sortable()
                    ->weight('bold'),
                Tables\Columns\TextColumn::make('role')
                    ->label('Jabatan')
                    ->badge(),
                Tables\Columns\IconColumn::make('is_leader')
                    ->label('Pimpinan')
                    ->boolean(),
                Tables\Columns\TextColumn::make('email')
                    ->label('Email')
                    ->copyable(),
                Tables\Columns\ToggleColumn::make('is_active')
                    ->label('Aktif'),
                Tables\Columns\TextColumn::make('order_priority')
                    ->label('Urutan')
                    ->sortable(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPartners::route('/'),
            'create' => Pages\CreatePartner::route('/create'),
            'edit' => Pages\EditPartner::route('/{record}/edit'),
        ];
    }
}
