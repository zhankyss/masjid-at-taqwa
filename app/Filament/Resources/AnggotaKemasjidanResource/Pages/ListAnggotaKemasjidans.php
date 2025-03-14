<?php

namespace App\Filament\Resources\AnggotaKemasjidanResource\Pages;

use App\Filament\Resources\AnggotaKemasjidanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Resources\Components\Tab;
use Illuminate\Database\Eloquent\Builder;

class ListAnggotaKemasjidans extends ListRecords
{
    protected static string $resource = AnggotaKemasjidanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }


    public function getTabs(): array
    {
        return [
            'all' => Tab::make(),
            'Takmir' => Tab::make()
                ->modifyQueryUsing(
                    fn(Builder $query) =>
                    $query->whereHas(
                        'user',
                        fn($query) =>
                        $query->where('status', 'Takmir')
                    )
                ),

            'CoTakmir' => Tab::make()
                ->modifyQueryUsing(
                    fn(Builder $query) =>
                    $query->whereHas(
                        'user',
                        fn($query) =>
                        $query->where('status', 'CoTakmir')
                    )
                ),
            'Sekretaris' => Tab::make()
                ->modifyQueryUsing(
                    fn(Builder $query) =>
                    $query->whereHas(
                        'user',
                        fn($query) =>
                        $query->where('status', 'Sekretaris')
                    )
                ),
            'Bendahara' => Tab::make()
                ->modifyQueryUsing(
                    fn(Builder $query) =>
                    $query->whereHas(
                        'user',
                        fn($query) =>
                        $query->where('status', 'Bendahara')
                    )
                ),
            'Anggota' => Tab::make()
                ->modifyQueryUsing(
                    fn(Builder $query) =>
                    $query->whereHas(
                        'user',
                        fn($query) =>
                        $query->where('status', 'Anggota')
                    )
                ),

        ];
    }
}
