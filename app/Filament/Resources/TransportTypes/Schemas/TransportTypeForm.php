<?php

namespace App\Filament\Resources\TransportTypes\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;

class TransportTypeForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Nama')
                    ->required()
                    ->columnSpanFull(),
                
                TextInput::make('description')
                    ->label('Deskripsi')
                    ->required()
                    ->columnSpanFull()
            ]);
    }
}
