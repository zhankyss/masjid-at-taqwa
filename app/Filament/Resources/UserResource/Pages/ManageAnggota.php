<?php

namespace App\Filament\Resources\AnggotaKemasjidanResource\Pages;
use App\Filament\Resources\AnggotaKemasjidanResource;
use App\Models\AnggotaKemasjidan;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageAnggota extends ManageRecords
{
    protected static string $resource = AnggotaKemasjidanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
