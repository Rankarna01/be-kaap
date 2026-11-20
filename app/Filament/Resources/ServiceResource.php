<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ServiceResource\Pages;
use App\Models\Service;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class ServiceResource extends Resource
{
    protected static ?string $model = Service::class;

    protected static ?string $navigationGroup = 'Layanan & Spesialisasi';

    protected static ?string $navigationIcon = 'heroicon-o-briefcase';

    protected static ?string $navigationLabel = 'Layanan Audit & Jasa';

    protected static ?string $modelLabel = 'Layanan';

    protected static ?string $pluralModelLabel = 'Layanan Audit';

    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Informasi Utama Layanan')
                    ->schema([
                        Forms\Components\TextInput::make('title')
                            ->label('Nama Layanan')
                            ->required()
                            ->maxLength(255)
                            ->live(onBlur: true)
                            ->afterStateUpdated(fn (string $operation, $state, Forms\Set $set) => $operation === 'create' ? $set('slug', \Illuminate\Support\Str::slug($state)) : null),

                        Forms\Components\TextInput::make('slug')
                            ->label('URL Slug')
                            ->required()
                            ->unique(ignoreRecord: true)
                            ->maxLength(255),

                        Forms\Components\TextInput::make('number')
                            ->label('Nomor Pilar (01, 02, ...)')
                            ->placeholder('01')
                            ->maxLength(10),

                        Forms\Components\TextInput::make('subtitle')
                            ->label('Subtitle / Tagline')
                            ->placeholder('Contoh: Pemeriksaan Laporan Keuangan Independen')
                            ->maxLength(255),

                        Forms\Components\Textarea::make('short_desc')
                            ->label('Ringkasan Layanan (Tampil di Card)')
                            ->rows(3)
                            ->columnSpanFull(),

                        Forms\Components\RichEditor::make('full_desc')
                            ->label('Deskripsi Lengkap / Teori Audit (Tampil di Detail Modal)')
                            ->columnSpanFull(),
                    ])->columns(2),

                Forms\Components\Section::make('Lingkup Kerja (Scope of Work)')
                    ->schema([
                        Forms\Components\Repeater::make('scope')
                            ->label('Poin-Poin Lingkup Pemeriksaan')
                            ->simple(
                                Forms\Components\TextInput::make('item')
                                    ->required()
                                    ->placeholder('Masukkan butir cakupan audit...')
                            )
                            ->columnSpanFull(),
                    ]),

                Forms\Components\Section::make('Aset Gambar & Pengaturan Tampilan')
                    ->schema([
                        Forms\Components\FileUpload::make('mascot_image')
                            ->label('Gambar / 3D Mascot')
                            ->directory('services')
                            ->image()
                            ->imageEditor()
                            ->disk('public'),

                        Forms\Components\TextInput::make('icon_name')
                            ->label('Identifier Icon SVG')
                            ->placeholder('general-audit, management-audit, dll.'),

                        Forms\Components\TextInput::make('order_priority')
                            ->label('Urutan Tampilan')
                            ->numeric()
                            ->default(0),

                        Forms\Components\Toggle::make('show_in_core_features')
                            ->label('Tampilkan di Core Features (About Section)')
                            ->default(true),

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
                Tables\Columns\TextColumn::make('number')
                    ->label('No.')
                    ->sortable(),
                Tables\Columns\ImageColumn::make('mascot_image')
                    ->label('Mascot')
                    ->disk('public'),
                Tables\Columns\TextColumn::make('title')
                    ->label('Nama Layanan')
                    ->searchable()
                    ->sortable()
                    ->weight('bold'),
                Tables\Columns\TextColumn::make('subtitle')
                    ->label('Subtitle')
                    ->limit(35),
                Tables\Columns\ToggleColumn::make('show_in_core_features')
                    ->label('Core Feature'),
                Tables\Columns\ToggleColumn::make('is_active')
                    ->label('Aktif'),
                Tables\Columns\TextColumn::make('order_priority')
                    ->label('Urutan')
                    ->sortable(),
            ])
            ->filters([
                Tables\Filters\TernaryFilter::make('is_active')->label('Status Aktif'),
                Tables\Filters\TernaryFilter::make('show_in_core_features')->label('Core Feature'),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListServices::route('/'),
            'create' => Pages\CreateService::route('/create'),
            'edit' => Pages\EditService::route('/{record}/edit'),
        ];
    }
}
