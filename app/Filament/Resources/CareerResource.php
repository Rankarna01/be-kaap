<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CareerResource\Pages;
use App\Models\Career;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class CareerResource extends Resource
{
    protected static ?string $model = Career::class;

    protected static ?string $navigationGroup = 'Media & Informasi';

    protected static ?string $navigationIcon = 'heroicon-o-academic-cap';

    protected static ?string $navigationLabel = 'Lowongan Karir';

    protected static ?string $modelLabel = 'Lowongan Karir';

    protected static ?string $pluralModelLabel = 'Lowongan Karir';

    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('role')
                    ->label('Posisi Jabatan')
                    ->required()
                    ->placeholder('Junior Auditor / Senior Auditor / Magang')
                    ->maxLength(255),

                Forms\Components\Select::make('location')
                    ->label('Lokasi Kerja')
                    ->options([
                        'Medan' => 'Medan',
                        'Pekanbaru' => 'Pekanbaru',
                        'Medan & Pekanbaru' => 'Medan & Pekanbaru',
                    ])
                    ->default('Medan & Pekanbaru')
                    ->required(),

                Forms\Components\Select::make('job_type')
                    ->label('Tipe Pekerjaan')
                    ->options([
                        'Full-Time' => 'Full-Time',
                        'Part-Time' => 'Part-Time',
                        'Internship (3-6 Bulan)' => 'Internship (3-6 Bulan)',
                    ])
                    ->default('Full-Time')
                    ->required(),

                Forms\Components\TextInput::make('application_email')
                    ->label('Email Tujuan Pengiriman CV')
                    ->default('Kapdrsselamatsinurayadanrekan@gmail.com')
                    ->email(),

                Forms\Components\DatePicker::make('deadline_date')
                    ->label('Batas Akhir Lamaran'),

                Forms\Components\RichEditor::make('requirements')
                    ->label('Persyaratan & Kualifikasi')
                    ->required()
                    ->columnSpanFull(),

                Forms\Components\RichEditor::make('responsibilities')
                    ->label('Tanggung Jawab Pekerjaan (Opsional)')
                    ->columnSpanFull(),

                Forms\Components\Toggle::make('is_open')
                    ->label('Status Lowongan Buka')
                    ->default(true),

                Forms\Components\TextInput::make('order_priority')
                    ->label('Urutan')
                    ->numeric()
                    ->default(0),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->defaultSort('order_priority')
            ->columns([
                Tables\Columns\TextColumn::make('role')
                    ->label('Posisi')
                    ->searchable()
                    ->weight('bold'),
                Tables\Columns\TextColumn::make('location')
                    ->label('Lokasi')
                    ->badge(),
                Tables\Columns\TextColumn::make('job_type')
                    ->label('Tipe')
                    ->badge(),
                Tables\Columns\ToggleColumn::make('is_open')
                    ->label('Buka'),
                Tables\Columns\TextColumn::make('deadline_date')
                    ->label('Deadline')
                    ->date('d M Y'),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCareers::route('/'),
            'create' => Pages\CreateCareer::route('/create'),
            'edit' => Pages\EditCareer::route('/{record}/edit'),
        ];
    }
}
