<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LegalityResource\Pages;
use App\Models\Legality;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class LegalityResource extends Resource
{
    protected static ?string $model = Legality::class;

    protected static ?string $navigationGroup = 'Testimoni & Kredibilitas';

    protected static ?string $navigationIcon = 'heroicon-o-shield-check';

    protected static ?string $navigationLabel = 'Legalitas & Izin';

    protected static ?string $modelLabel = 'Dokumen Legalitas';

    protected static ?string $pluralModelLabel = 'Legalitas & Izin';

    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->label('Nama Dokumen / Izin')
                    ->required()
                    ->maxLength(255)
                    ->placeholder('Contoh: Izin Usaha Kantor Akuntan Publik (KAP)'),

                Forms\Components\TextInput::make('issuer')
                    ->label('Instansi Penerbit')
                    ->required()
                    ->maxLength(255)
                    ->placeholder('Kementerian Keuangan Republik Indonesia'),

                Forms\Components\TextInput::make('license_number')
                    ->label('Nomor SK / Izin')
                    ->maxLength(255),

                Forms\Components\Textarea::make('description')
                    ->label('Uraian Keterangan')
                    ->required()
                    ->rows(3)
                    ->columnSpanFull(),

                Forms\Components\FileUpload::make('file_path')
                    ->label('File Lampiran / PDF (Opsional)')
                    ->directory('legalities')
                    ->acceptedFileTypes(['application/pdf', 'image/*'])
                    ->disk('public'),

                Forms\Components\TextInput::make('order_priority')
                    ->label('Urutan')
                    ->numeric()
                    ->default(0),

                Forms\Components\Toggle::make('is_active')
                    ->label('Status Aktif')
                    ->default(true),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->defaultSort('order_priority')
            ->columns([
                Tables\Columns\TextColumn::make('order_priority')
                    ->label('Urutan')
                    ->sortable(),
                Tables\Columns\TextColumn::make('title')
                    ->label('Nama Dokumen')
                    ->searchable()
                    ->weight('bold'),
                Tables\Columns\TextColumn::make('issuer')
                    ->label('Penerbit')
                    ->badge(),
                Tables\Columns\TextColumn::make('license_number')
                    ->label('No. Izin'),
                Tables\Columns\ToggleColumn::make('is_active')
                    ->label('Aktif'),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListLegalities::route('/'),
            'create' => Pages\CreateLegality::route('/create'),
            'edit' => Pages\EditLegality::route('/{record}/edit'),
        ];
    }
}
