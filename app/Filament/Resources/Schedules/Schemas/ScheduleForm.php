<?php

namespace App\Filament\Resources\Schedules\Schemas;

use App\Models\Route;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TimePicker;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ScheduleForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('routeId')
                    ->label('Rute')
                    ->options(Route::query()->pluck('name', 'id'))
                    ->required()
                    ->columnSpan(6),

                TimePicker::make('arrivalTime')
                    ->label('Waktu Kedatangan')
                    ->required()
                    ->seconds(false)
                    ->columnSpan(3),
                
                TimePicker::make('departureTime')
                    ->label('Waktu Keberangkatan')
                    ->required()
                    ->seconds(false)
                    ->columnSpan(3),
                
                TextInput::make('dayOfWeek')
                    ->label('Hari')
                    ->required()
                    ->columnSpanFull(),
            ])
            ->columns(12);
    }
}
