<?php

namespace App\Filament\Resources\ProjetResource\RelationManagers;

use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class OngsRelationManager extends RelationManager
{
    protected static string $relationship = 'ongs';

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('lastName')
                    ->label('prenom'),
                Tables\Columns\TextColumn::make('name')
                    ->label('Nom'),
                Tables\Columns\TextColumn::make('tel')
                    ->label('Téléphone'),
                Tables\Columns\TextColumn::make('email')
                    ->label('Adresse mail'),
            ])
            ->filters([
                //
            ])
            ->headerActions([
            ])
            ->actions([
                //
            ])
            ->bulkActions([
                Tables\Actions\DissociateBulkAction::make(),
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }    
}
