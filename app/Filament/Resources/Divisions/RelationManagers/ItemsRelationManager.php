<?php

namespace App\Filament\Resources\Divisions\RelationManagers;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\CreateAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\TextInput;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ItemsRelationManager extends RelationManager
{
    protected static string $relationship = 'items';


    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([

                TextInput::make('text_hu')
                    ->label('Magyar szöveg')
                    ->required(),

                TextInput::make('text_en')
                    ->label('Angol szöveg')
                    ->required(),

                TextInput::make('sort_order')
                    ->label('Sorrend')
                    ->numeric()
                    ->default(0),

            ]);
    }


    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('text_hu')

            ->columns([

                TextColumn::make('text_hu')
                    ->label('Magyar')
                    ->searchable(),

                TextColumn::make('text_en')
                    ->label('Angol')
                    ->searchable(),

                TextColumn::make('sort_order')
                    ->label('Sorrend')
                    ->sortable(),

            ])

            ->filters([
                //
            ])

            ->headerActions([
                CreateAction::make(),
            ])

            ->recordActions([
                EditAction::make(),
                DeleteAction::make(),
            ])

            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
