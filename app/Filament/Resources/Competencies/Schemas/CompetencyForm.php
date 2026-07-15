<?php

namespace App\Filament\Resources\Competencies\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class CompetencyForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                TextInput::make('label_hu')
                    ->label('Magyar címke')
                    ->required(),

                TextInput::make('label_en')
                    ->label('Angol címke')
                    ->required(),

                Textarea::make('text_hu')
                    ->label('Magyar leírás')
                    ->required()
                    ->columnSpanFull(),

                Textarea::make('text_en')
                    ->label('Angol leírás')
                    ->required()
                    ->columnSpanFull(),

                FileUpload::make('image')
                    ->label('Kép')
                    ->image()
                    ->disk('public')
                    ->directory('competencies'),

                Toggle::make('reverse_layout')
                    ->label('Fordított kép-szöveg elrendezés'),

                TextInput::make('sort_order')
                    ->label('Sorrend')
                    ->numeric()
                    ->default(0),

            ]);
    }
}
