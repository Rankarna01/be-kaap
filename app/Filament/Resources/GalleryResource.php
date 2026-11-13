<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GalleryResource\Pages;
use App\Models\Gallery;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class GalleryResource extends Resource
{
    protected static ?string $model = Gallery::class;

    protected static ?string $navigationGroup = 'Media & Informasi';

    protected static ?string $navigationIcon = 'heroicon-o-photo';

    protected static ?string $navigationLabel = 'Galeri Kegiatan';

    protected static ?string $modelLabel = 'Foto Galeri';

    protected static ?string $pluralModelLabel = 'Galeri Kegiatan';

    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->label('Judul Foto / Kegiatan')
                    ->required()
                    ->maxLength(255),

                Forms\Components\Select::make('category')
                    ->label('Kategori')
                    ->options([
                        'Audit Lapangan' => 'Audit Lapangan',
                        'Pelatihan & CPD' => 'Pelatihan & CPD',
                        'Kegiatan Kantor' => 'Kegiatan Kantor',
                        'Visitasi Klien' => 'Visitasi Klien',
                    ])
                    ->default('Audit Lapangan')
                    ->required(),

                Forms\Components\FileUpload::make('image_path')
                    ->label('File Foto')
                    ->directory('galleries')
                    ->image()
                    ->required()
                    ->disk('public'),

                Forms\Components\DatePicker::make('activity_date')
                    ->label('Tanggal Kegiatan'),

                Forms\Components\Textarea::make('description')
                    ->label('Keterangan Singkat')
                    ->rows(3)
                    ->columnSpanFull(),

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
                Tables\Columns\ImageColumn::make('image_path')
                    ->label('Foto')
                    ->disk('public'),
                Tables\Columns\TextColumn::make('title')
                    ->label('Judul Kegiatan')
                    ->searchable()
                    ->weight('bold'),
                Tables\Columns\TextColumn::make('category')
                    ->label('Kategori')
                    ->badge(),
                Tables\Columns\TextColumn::make('activity_date')
                    ->label('Tanggal')
                    ->date('d M Y'),
                Tables\Columns\ToggleColumn::make('is_active')
                    ->label('Aktif'),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('category')
                    ->options([
                        'Audit Lapangan' => 'Audit Lapangan',
                        'Pelatihan & CPD' => 'Pelatihan & CPD',
                        'Kegiatan Kantor' => 'Kegiatan Kantor',
                        'Visitasi Klien' => 'Visitasi Klien',
                    ]),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListGalleries::route('/'),
            'create' => Pages\CreateGallery::route('/create'),
            'edit' => Pages\EditGallery::route('/{record}/edit'),
        ];
    }
}
