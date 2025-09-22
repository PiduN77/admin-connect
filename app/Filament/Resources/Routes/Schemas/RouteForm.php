<?php

namespace App\Filament\Resources\Routes\Schemas;

use App\Models\Operator;
use App\Models\TransportType;
use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;

class RouteForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Rute')
                    ->required()
                    ->columns(3),
                
                TextInput::make('code')
                    ->label('Kode Rute')
                    ->required()
                    ->columns(3),
                
                Textarea::make('description')
                    ->label('Deskripsi')
                    ->required()
                    ->columnSpanFull(),

                Select::make('transportTypeId')
                    ->label('Tipe Transportasi')
                    ->options(TransportType::query()->pluck('name', 'id'))
                    ->required()
                    ->columns(3),

                Select::make('operatorId')
                    ->label('Kontak Operator')
                    ->options(
                        Operator::query()
                            ->get()
                            ->mapWithKeys(fn ($operator) => [
                                $operator->id => $operator->name . ' - ' . $operator->contactInfo
                            ])
                    )
                    ->required()
                    ->columns(3),

            ]);
    }
}
