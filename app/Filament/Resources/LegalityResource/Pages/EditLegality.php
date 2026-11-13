<?php

namespace App\Filament\Resources\LegalityResource\Pages;

use App\Filament\Resources\LegalityResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLegality extends EditRecord
{
    protected static string $resource = LegalityResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
