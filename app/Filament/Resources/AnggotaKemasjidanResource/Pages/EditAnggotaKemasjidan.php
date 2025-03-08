<?php

namespace App\Filament\Resources\AnggotaKemasjidanResource\Pages;

use App\Filament\Resources\AnggotaKemasjidanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAnggotaKemasjidan extends EditRecord
{
    protected static string $resource = AnggotaKemasjidanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
