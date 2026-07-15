<?php

namespace App\Filament\Resources\Competencies;

use App\Filament\Resources\Competencies\Pages\CreateCompetency;
use App\Filament\Resources\Competencies\Pages\EditCompetency;
use App\Filament\Resources\Competencies\Pages\ListCompetencies;
use App\Filament\Resources\Competencies\Pages\ViewCompetency;
use App\Filament\Resources\Competencies\RelationManagers\ItemsRelationManager;
use App\Filament\Resources\Competencies\Schemas\CompetencyForm;
use App\Filament\Resources\Competencies\Schemas\CompetencyInfolist;
use App\Filament\Resources\Competencies\Tables\CompetenciesTable;
use App\Models\Competency;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class CompetencyResource extends Resource
{
    protected static ?string $model = Competency::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedAcademicCap;

    protected static ?string $recordTitleAttribute = 'label_hu';

    protected static ?string $navigationLabel = 'Kompetenciák';

    protected static ?string $modelLabel = 'Kompetencia';

    protected static ?string $pluralModelLabel = 'Kompetenciák';


    public static function form(Schema $schema): Schema
    {
        return CompetencyForm::configure($schema);
    }


    public static function infolist(Schema $schema): Schema
    {
        return CompetencyInfolist::configure($schema);
    }


    public static function table(Table $table): Table
    {
        return CompetenciesTable::configure($table);
    }


    public static function getRelations(): array
    {
        return [
            ItemsRelationManager::class,
        ];
    }


    public static function getPages(): array
    {
        return [
            'index' => ListCompetencies::route('/'),
            'create' => CreateCompetency::route('/create'),
            'view' => ViewCompetency::route('/{record}'),
            'edit' => EditCompetency::route('/{record}/edit'),
        ];
    }
}
