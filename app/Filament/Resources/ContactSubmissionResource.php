<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ContactSubmissionResource\Pages;
use App\Models\ContactSubmission;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class ContactSubmissionResource extends Resource
{
    protected static ?string $model = ContactSubmission::class;

    protected static ?string $navigationGroup = 'Interaksi & Klien';

    protected static ?string $navigationIcon = 'heroicon-o-inbox-arrow-down';

    protected static ?string $navigationLabel = 'Pesan Konsultasi & RFP';

    protected static ?string $modelLabel = 'Pesan Masuk';

    protected static ?string $pluralModelLabel = 'Pesan Konsultasi (Inbox)';

    protected static ?int $navigationSort = 1;

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::where('status', 'new')->count() ?: null;
    }

    public static function getNavigationBadgeColor(): ?string
    {
        return 'danger';
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Informasi Pengirim')
                    ->schema([
                        Forms\Components\TextInput::make('name')
                            ->label('Nama Lengkap')
                            ->disabled(),

                        Forms\Components\TextInput::make('company')
                            ->label('Perusahaan / Instansi')
                            ->disabled(),

                        Forms\Components\TextInput::make('email')
                            ->label('Email')
                            ->disabled(),

                        Forms\Components\TextInput::make('phone')
                            ->label('Nomor WhatsApp / HP')
                            ->disabled(),

                        Forms\Components\TextInput::make('service_type')
                            ->label('Layanan yang Dipilih')
                            ->disabled(),

                        Forms\Components\Textarea::make('message')
                            ->label('Pesan / Kebutuhan Konsultasi')
                            ->rows(4)
                            ->columnSpanFull()
                            ->disabled(),
                    ])->columns(2),

                Forms\Components\Section::make('Tindak Lanjut & Status Admin')
                    ->schema([
                        Forms\Components\Select::make('status')
                            ->label('Status Penanganan')
                            ->options([
                                'new' => '🟡 Baru (Belum Ditindaklanjuti)',
                                'contacted' => '🔵 Sudah Dihubungi / Follow Up',
                                'proposal_sent' => '🟣 Proposal Penawaran Terkirim',
                                'closed' => '🟢 Selesai / Deal',
                            ])
                            ->required(),

                        Forms\Components\Textarea::make('admin_notes')
                            ->label('Catatan Internal Tim KAP')
                            ->placeholder('Tuliskan rangkuman follow up atau hasil komunikasi dengan calon klien...')
                            ->rows(3),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->defaultSort('created_at', 'desc')
            ->columns([
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Tanggal Masuk')
                    ->dateTime('d M Y H:i')
                    ->sortable(),
                Tables\Columns\TextColumn::make('name')
                    ->label('Nama Pengirim')
                    ->searchable()
                    ->weight('bold'),
                Tables\Columns\TextColumn::make('company')
                    ->label('Perusahaan')
                    ->searchable(),
                Tables\Columns\TextColumn::make('phone')
                    ->label('WhatsApp')
                    ->copyable(),
                Tables\Columns\TextColumn::make('service_type')
                    ->label('Layanan')
                    ->badge(),
                Tables\Columns\SelectColumn::make('status')
                    ->label('Status')
                    ->options([
                        'new' => 'Baru',
                        'contacted' => 'Dihubungi',
                        'proposal_sent' => 'Proposal',
                        'closed' => 'Selesai',
                    ]),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('status')
                    ->options([
                        'new' => 'Baru',
                        'contacted' => 'Sudah Dihubungi',
                        'proposal_sent' => 'Proposal Terkirim',
                        'closed' => 'Selesai',
                    ]),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListContactSubmissions::route('/'),
            'view' => Pages\ViewContactSubmission::route('/{record}'),
            'edit' => Pages\EditContactSubmission::route('/{record}/edit'),
        ];
    }
}
