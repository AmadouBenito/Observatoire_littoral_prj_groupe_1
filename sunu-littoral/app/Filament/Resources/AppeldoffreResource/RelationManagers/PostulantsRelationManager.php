<?php

namespace App\Filament\Resources\AppeldoffreResource\RelationManagers;

use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PostulantsRelationManager extends RelationManager
{
    protected static string $relationship = 'postulants';

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name'),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                //
            ])
            ->actions([
                //Tables\Actions\ViewAction::make()
            ])
            ->bulkActions([
                /* Tables\Actions\DissociateBulkAction::make(),
                Tables\Actions\DeleteBulkAction::make(), */
            ]);
    }    
}
