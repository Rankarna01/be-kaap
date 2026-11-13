<?php

namespace App\Filament\Resources;

use App\Filament\Resources\StatsMetricResource\Pages;
use App\Models\StatsMetric;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class StatsMetricResource extends Resource
{
    protected static ?string $model = StatsMetric::class;

    protected static ?string $navigationGroup = 'Beranda & Konten Utama';

    protected static ?string $navigationIcon = 'heroicon-o-chart-bar';

    protected static ?string $navigationLabel = 'Statistik & Key Metrics';

    protected static ?string $modelLabel = 'Metrik Statistik';

    protected static ?string $pluralModelLabel = 'Statistik & Key Metrics';

    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('metric_key')
                    ->label('Kunci Metrik (Key Identifier)')
                    ->required()
                    ->placeholder('clients, partners, workers, experience')
                    ->unique(ignoreRecord: true),

                Forms\Components\TextInput::make('count_value')
                    ->label('Nilai Angka Counter')
                    ->numeric()
                    ->required()
                    ->placeholder('90, 4, 33, 15'),

                Forms\Components\TextInput::make('count_suffix')
                    ->label('Akhiran Simbol (+ / %)')
                    ->placeholder('Contoh: +')
                    ->maxLength(10),

                Forms\Components\TextInput::make('highlight_title')
                    ->label('Judul Highlight')
                    ->required()
                    ->placeholder('Jumlah client, Jumlah partner, Pekerja'),

                Forms\Components\TextInput::make('description')
                    ->label('Keterangan / Deskripsi')
                    ->required()
                    ->placeholder('KAP Drs.Sinuraya dan rekan'),

                Forms\Components\Select::make('icon_type')
                    ->label('Tipe Ikon')
                    ->options([
                        'clients' => 'Klien (Smile / Person)',
                        'partners' => 'Partner (Headset / Support)',
                        'workers' => 'Pekerja (Briefcase / Work)',
                        'experience' => 'Pengalaman (Award / Shield)',
                    ])
                    ->default('clients')
                    ->required(),

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
                Tables\Columns\TextColumn::make('count_value')
                    ->label('Angka Counter')
                    ->formatStateUsing(fn ($record) => $record->count_value . ($record->count_suffix ?? ''))
                    ->weight('bold'),
                Tables\Columns\TextColumn::make('highlight_title')
                    ->label('Judul Highlight')
                    ->searchable(),
                Tables\Columns\TextColumn::make('description')
                    ->label('Keterangan'),
                Tables\Columns\TextColumn::make('icon_type')
                    ->label('Ikon')
                    ->badge(),
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
            'index' => Pages\ListStatsMetrics::route('/'),
            'create' => Pages\CreateStatsMetric::route('/create'),
            'edit' => Pages\EditStatsMetric::route('/{record}/edit'),
        ];
    }
}
