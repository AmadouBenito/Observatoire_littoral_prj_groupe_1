<?php

namespace App\Filament\Widgets;

use App\Models\Fichier;
use Closure;
use Filament\Tables;
use Filament\Widgets\TableWidget as BaseWidget;
use Illuminate\Database\Eloquent\Builder;

class Fichiers extends BaseWidget
{

    protected static ?int $sort = 2;

    protected int | string | array $columnSpan = 'full';
    protected function getTableQuery(): Builder
    {
        return Fichier::query()->where('id','>',intval('0'))->limit(10);

    }

    protected function getTableColumns(): array
    {
        return [
            Tables\Columns\TextColumn::make('titre'),
            Tables\Columns\TextColumn::make('url'),
            Tables\Columns\TextColumn::make('date'),
            Tables\Columns\TextColumn::make('user.name'),
            Tables\Columns\TextColumn::make('type_fichier.libelle')
                ->label('Type de fi'),
            Tables\Columns\TextColumn::make('domaine.libelle')
                ->label('Domaine'),
        ];
    }
}
