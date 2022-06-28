<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ActualiteResource\Pages;
use App\Filament\Resources\ActualiteResource\RelationManagers;
use App\Models\Actualite;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ActualiteResource extends Resource
{
    protected static ?string $model = Actualite::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('titre')
                ->maxLength(55),
                Forms\Components\Textarea::make('contenue')
                ->required(),
                Forms\Components\FileUpload::make('image')
                ->preserveFilenames()
                ->image(),
                Forms\Components\TextInput::make('video')
                ->placeholder("Veillez mettre une vodéo youtube")
                ->maxLength(45),
                Forms\Components\DateTimePicker::make('date'),
                Forms\Components\TextInput::make('user_id')
                ->label("User")
                ->hidden(),
                Forms\Components\Select::make('categorie_id')
                ->relationship('categorie', 'libelle')
                ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')
                    ->rounded(),
                Tables\Columns\TextColumn::make('titre')
                    ->limit(30),
                Tables\Columns\TextColumn::make('date')->since()
                    ->dateTime()
                    ->label('Date e création'),
                Tables\Columns\TextColumn::make('user.name')
                    ->label('Auteur'),
                Tables\Columns\TextColumn::make('categorie.libelle')
                    ->label('Cotégorie'),
            ])
            ->filters([

            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
    
    public static function getRelations(): array
    {
        return [
            //
        ];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListActualites::route('/'),
            'create' => Pages\CreateActualite::route('/create'),
            'edit' => Pages\EditActualite::route('/{record}/edit'),
        ];
    }    
    

    
}
