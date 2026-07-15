<?php

namespace App\Filament\Resources\Heroes\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class HeroForm
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

            Textarea::make('text_hu')
                ->label('Magyar szöveg'),

            Textarea::make('text_en')
                ->label('Angol szöveg'),

            FileUpload::make('image')
                ->label('Hero háttérkép')
                ->image()
                ->directory('hero')
                ->disk('public'),

        ]);
    }
}
