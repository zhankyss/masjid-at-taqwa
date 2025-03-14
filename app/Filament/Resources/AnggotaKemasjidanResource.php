<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Panel;
use Pages\ViewUser;
use Filament\Tables;
use Pages\ViewAnggota;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Tables\Actions;
use Filament\Infolists\Infolist;
use Filament\Resources\Resource;
use App\Models\AnggotaKemasjidan;
use function Laravel\Prompts\text;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Resources\Pages\EditRecord;
use Filament\Resources\Pages\ListRecords;
use Filament\Tables\Columns\Layout\Stack;
use Filament\Tables\Filters\SelectFilter;
use App\Filament\Resources\AnggotaKemasjidanResource\Pages;

use Illuminate\Database\Eloquent\Builder;
use Filament\Resources\Pages\CreateRecord;
use Filament\Infolists\Components\TextEntry;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\AnggotaKemasjidanResource\RelationManagers;

class AnggotaKemasjidanResource extends Resource
{
    protected static ?string $model = AnggotaKemasjidan::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('user.status')
                    ->label('Role')
                    ->badge()
                    ->color(fn(string $state): string => match ($state) {
                        'Takmir' => 'cyan',
                        'CoTakmir' => 'blue',
                        'Sekretaris' => 'violet',
                        'Bendahara' => 'fuchsia',
                        'Anggota' => 'gray',
                    })
                    ->sortable(),
                // ->prefixIcon(),
                TextColumn::make('user.name')
                    ->icon('heroicon-o-user')
                    ->searchable()
                    ->sortable(),

                // ->prefixIcon(),
                TextColumn::make('user.phone')
                    ->label('no Telephone')
                    ->icon('heroicon-o-phone')
                    ->searchable(),
                // ->prefixIcon(),
                TextColumn::make('user.date_of_birth')
                    ->icon('heroicon-o-cake')

                    ->label('Tanggal Lahir'),
                // ->prefixIcon(),
                TextColumn::make('user.gender')
                    ->label('Gender')
                    ->badge()
                    ->color(fn(string $state): string => match ($state) {
                        'Ikhwan' => 'primary',
                        'Akhwat' => 'info',
                    }),
                // ->prefixIcon(),
                TextColumn::make('user.alamat')
                    ->label('Alamat')
                    ->icon('heroicon-o-map-pin')

                    ->searchable(),
                // ->prefixIcon(),
            ])
            ->filters([
                //
            ])
            ->actions([
                // Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    // Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function canCreate(): bool
{
    return false;
}

public static function infolist(Infolist $infolist): Infolist
{
    return $infolist
        ->schema([
            // 
        ]);
}



    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAnggotaKemasjidans::route('/'),
            // 'view' => Pages\ViewAnggota::route('/{record}'),
            // 'create' => Pages\CreateAnggotaKemasjidan::route('/create'),
            // 'edit' => Pages\EditAnggotaKemasjidan::route('/{record}/edit'),
        ];
    }

}
