<?php

namespace App\Filament\Resources\Routes\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;

class RoutesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label('Nama')
                    ->sortable()
                    ->searchable(),
                
                TextColumn::make('code')
                    ->label('Kode')
                    ->searchable(),

                TextColumn::make('description')
                    ->label('Deskripsi')
                    ->searchable(),

                TextColumn::make('transportType.name')
                    ->label('Tipe')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('operator.contactInfo')
                    ->label('Kontak')
                    ->sortable()
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
