<?php

namespace App\Filament\Resources\Operators\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;

class OperatorForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Nama')
                    ->required()
                    ->columnSpanFull(),
                
                TextInput::make('contactInfo')
                    ->label('Kontak Info')
                    ->required()
                    ->columnSpanFull()
            ]);
    }
}
