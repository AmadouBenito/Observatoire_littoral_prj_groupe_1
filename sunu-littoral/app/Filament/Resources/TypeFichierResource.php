<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TypeFichierResource\Pages;
use App\Filament\Resources\TypeFichierResource\RelationManagers;
use App\Models\TypeFichier;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TypeFichierResource extends Resource
{
    protected static ?string $model = TypeFichier::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    protected static ?string $navigationGroup = 'Fichiers et Médias';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('libelle')
                    ->maxLength(100)
                    ->label('Nom du type de fichier'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('libelle'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageTypeFichiers::route('/'),
        ];
    }    

    protected static function shouldRegisterNavigation(): bool
    {
        $roles = [
            'admin' => 1,
        ];
        return in_array(auth()->user()->role_id, $roles)  ;
    }
}
