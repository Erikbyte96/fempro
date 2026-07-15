<?php

namespace App\Filament\Resources\Settings\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;

class SettingForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                TextInput::make('company_name')
                    ->label('Cégnév')
                    ->required(),

                Textarea::make('address_hu')
                    ->label('Magyar cím')
                    ->rows(3),

                Textarea::make('address_en')
                    ->label('Angol cím')
                    ->rows(3),

                TextInput::make('phone')
                    ->label('Telefon'),

                TextInput::make('email')
                    ->label('Email')
                    ->email(),

                FileUpload::make('logo')
                    ->label('Logó')
                    ->image()
                    ->directory('settings')
                    ->disk('public'),

                FileUpload::make('footer_logo')
                    ->label('Footer logó')
                    ->image()
                    ->directory('settings')
                    ->disk('public'),

            ]);
    }
}
