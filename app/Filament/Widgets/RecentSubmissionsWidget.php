<?php

namespace App\Filament\Widgets;

use App\Models\ContactSubmission;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;

class RecentSubmissionsWidget extends BaseWidget
{
    protected static ?int $sort = 4;

    protected int | string | array $columnSpan = 'full';

    protected static ?string $heading = 'Permohonan Audit & Pesan Konsultasi Masuk Terbaru';

    public function table(Table $table): Table
    {
        return $table
            ->query(
                ContactSubmission::query()->latest()->limit(5)
            )
            ->columns([
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Tanggal Masuk')
                    ->dateTime('d M Y H:i')
                    ->sortable(),
                Tables\Columns\TextColumn::make('name')
                    ->label('Nama Pengirim')
                    ->weight('bold')
                    ->searchable(),
                Tables\Columns\TextColumn::make('company')
                    ->label('Perusahaan / Instansi')
                    ->default('-')
                    ->searchable(),
                Tables\Columns\TextColumn::make('service_type')
                    ->label('Layanan yang Dipilih')
                    ->badge()
                    ->color('primary'),
                Tables\Columns\TextColumn::make('phone')
                    ->label('WhatsApp')
                    ->copyable()
                    ->default('-'),
                Tables\Columns\SelectColumn::make('status')
                    ->label('Status')
                    ->options([
                        'new' => '🟡 Baru',
                        'contacted' => '🔵 Dihubungi',
                        'proposal_sent' => '🟣 Proposal',
                        'closed' => '🟢 Selesai',
                    ]),
            ])
            ->actions([
                Tables\Actions\Action::make('whatsapp')
                    ->label('Chat WA')
                    ->icon('heroicon-m-chat-bubble-left-ellipsis')
                    ->color('success')
                    ->url(fn (ContactSubmission $record): ?string => $record->phone ? 'https://wa.me/' . preg_replace('/[^0-9]/', '', $record->phone) : null)
                    ->openUrlInNewTab()
                    ->visible(fn (ContactSubmission $record): bool => !empty($record->phone)),
                Tables\Actions\Action::make('view')
                    ->label('Buka Detail')
                    ->icon('heroicon-m-eye')
                    ->url(fn (ContactSubmission $record): string => url("/admin/contact-submissions/{$record->id}")),
            ]);
    }
}

