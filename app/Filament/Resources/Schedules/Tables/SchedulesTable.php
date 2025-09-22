<?php

namespace App\Filament\Resources\Schedules\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class SchedulesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('routes.name')
                    ->label('Rute')
                    ->searchable(),
                
                TextColumn::make('departureTime')
                    ->label('Waktu Keberangkatan')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('arrivalTime')
                    ->label('Waktu Kedatangan')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('dayOfWeek')
                    ->label('Hari')
                    ->searchable(),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
