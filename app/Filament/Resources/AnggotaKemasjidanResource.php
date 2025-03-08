<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\User;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use App\Models\AnggotaKemasjidan;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\AnggotaKemasjidanResource\Pages;
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
                ->label('Role :')
                ->badge()
                ->color(fn ($state) => match ($state) {
                    'Takmir' => 'info',
                    'CoTakmir' => 'green',
                    'Sekretaris' => 'red',
                    'Bendahara' => 'sky',
                    'Anggota' => 'lime',
                    default => 'gray',
                }),
                
                TextColumn::make('User.name')
                    ->label('Nama :')
                    ->searchable(),

                    TextColumn::make('User.phone')
                    ->label('No Telephone :')
                    ->searchable(),

                    TextColumn::make('User.date_of_birth')
                    ->label('Tanggal Lahir :'),

                    TextColumn::make('User.gender')
                    ->label('Jenis Kelamin :')
                    ->badge('true')
                    ->color(fn(string $state): string => match ($state) {
                        'Ikhwan' => 'cyan',
                        'Akhwat' => 'pink'}),

                    TextColumn::make('User.alamat')
                        ->label('Alamat :'),
            ])
            ->filters([
                SelectFilter::make($a = 'status')
    ->label('Filter Peran')
    ->options(function ($a) {
        return User::select('status')->distinct()->get()->pluck('status', 'status')->toArray();
    })
    ->query(fn ($query, $data) => 
        empty($data) 
            ? $query
            : $query->whereRelation('user', 'status', $data)
    )
    // '' => 'Semua',
    //     'Takmir' => 'Takmir',
    //     'Cotakmir' => 'Cotakmir',
    //     'Sekretaris' => 'Sekretaris',
    //     'Bendahara' => 'Bendahara',
    //     'Anggota' => 'Anggota',


            

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
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAnggotaKemasjidans::route('/'),
            'create' => Pages\CreateAnggotaKemasjidan::route('/create'),
            'edit' => Pages\EditAnggotaKemasjidan::route('/{record}/edit'),
        ];
    }
}
