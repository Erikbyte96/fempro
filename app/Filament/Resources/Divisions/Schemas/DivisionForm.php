<?php

namespace App\Filament\Resources\Divisions\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class DivisionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                TextInput::make('title_hu')
                    ->label('Magyar cím')
                    ->required(),

                TextInput::make('title_en')
                    ->label('Angol cím')
                    ->required(),

                FileUpload::make('image')
                    ->label('Kép')
                    ->image()
                    ->disk('public')
                    ->directory('divisions'),

                TextInput::make('sort_order')
                    ->label('Sorrend')
                    ->numeric()
                    ->default(0),

            ]);
    }
}
