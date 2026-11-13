<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TestimonialResource\Pages;
use App\Models\Testimonial;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class TestimonialResource extends Resource
{
    protected static ?string $model = Testimonial::class;

    protected static ?string $navigationGroup = 'Testimoni & Kredibilitas';

    protected static ?string $navigationIcon = 'heroicon-o-chat-bubble-bottom-center-text';

    protected static ?string $navigationLabel = 'Testimoni Klien';

    protected static ?string $modelLabel = 'Testimoni Klien';

    protected static ?string $pluralModelLabel = 'Testimoni Klien';

    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Informasi Klien')
                    ->schema([
                        Forms\Components\TextInput::make('client_name')
                            ->label('Nama Klien')
                            ->required()
                            ->maxLength(255)
                            ->placeholder('Contoh: Hendrik Gunawan, S.E.'),

                        Forms\Components\TextInput::make('role')
                            ->label('Jabatan')
                            ->required()
                            ->placeholder('Direktur Keuangan / Direktur Utama'),

                        Forms\Components\TextInput::make('company')
                            ->label('Perusahaan / Instansi')
                            ->required()
                            ->placeholder('PT Sawit Makmur Perkasa (Pekanbaru)'),

                        Forms\Components\TextInput::make('service_category')
                            ->label('Layanan Terkait')
                            ->default('General Audit & Asurans'),

                        Forms\Components\FileUpload::make('avatar_image')
                            ->label('Foto Klien (Opsional)')
                            ->directory('testimonials')
                            ->image()
                            ->disk('public'),
                    ])->columns(2),

                Forms\Components\Section::make('Kutipan & Pengaturan Tampilan')
                    ->schema([
                        Forms\Components\Textarea::make('quote')
                            ->label('Isi Ulasan / Testimoni')
                            ->required()
                            ->rows(4)
                            ->columnSpanFull(),

                        Forms\Components\Select::make('marquee_row')
                            ->label('Baris Animasi Marquee')
                            ->options([
                                'row1' => 'Row 1 (Bergerak Kiri ke Kanan)',
                                'row2' => 'Row 2 (Bergerak Kanan ke Kiri)',
                            ])
                            ->default('row1')
                            ->required(),

                        Forms\Components\Select::make('rating')
                            ->label('Rating Bintang')
                            ->options([
                                5 => '⭐⭐⭐⭐⭐ (5 Bintang)',
                                4 => '⭐⭐⭐⭐ (4 Bintang)',
                                3 => '⭐⭐⭐ (3 Bintang)',
                            ])
                            ->default(5)
                            ->required(),

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
                Tables\Columns\TextColumn::make('client_name')
                    ->label('Nama Klien')
                    ->searchable()
                    ->sortable()
                    ->weight('bold'),
                Tables\Columns\TextColumn::make('company')
                    ->label('Perusahaan')
                    ->searchable(),
                Tables\Columns\TextColumn::make('marquee_row')
                    ->label('Baris Marquee')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'row1' => 'info',
                        'row2' => 'primary',
                        default => 'secondary',
                    }),
                Tables\Columns\TextColumn::make('quote')
                    ->label('Kutipan')
                    ->limit(50),
                Tables\Columns\ToggleColumn::make('is_active')
                    ->label('Aktif'),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('marquee_row')
                    ->options([
                        'row1' => 'Row 1',
                        'row2' => 'Row 2',
                    ]),
                Tables\Filters\TernaryFilter::make('is_active')->label('Status Aktif'),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTestimonials::route('/'),
            'create' => Pages\CreateTestimonial::route('/create'),
            'edit' => Pages\EditTestimonial::route('/{record}/edit'),
        ];
    }
}
