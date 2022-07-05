<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FichierResource\Pages;
use App\Filament\Resources\FichierResource\RelationManagers;
use App\Models\Fichier;
use Filament\Forms;
use Filament\Forms\Components\Hidden;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Actions\Action;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class FichierResource extends Resource
{
    protected static ?string $model = Fichier::class;

    protected static ?string $navigationIcon = 'heroicon-o-folder-open';

    protected static ?string $navigationGroup = 'Fichiers et Médias';

    protected static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('titre')
                    ->maxLength(45),
                Forms\Components\Select::make('type_fichier_id')
                    ->relationship('type_fichier','libelle')
                    ->label('Type du ficher')
                    ->required(),
                Forms\Components\Select::make('domaine_id')
                    ->relationship('domaine','libelle')
                    ->label('Domaine (Le document parle de quoi)')
                    ->required(),
                Forms\Components\FileUpload::make('url')
                    ->preserveFilenames()
                    ->maxSize(30000000)
                    ->required(),
                Forms\Components\DateTimePicker::make('date')
                    ->hidden(),
                Forms\Components\TextInput::make('user_id')
                    ->hidden(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('titre')
                ->searchable()
                ->sortable(),
                Tables\Columns\TextColumn::make('date')
                ->dateTime(),
                Tables\Columns\TextColumn::make('user.name')
                    ->label('Auteur'),
                Tables\Columns\TextColumn::make('type_fichier.libelle'),
                Tables\Columns\TextColumn::make('domaine.libelle'),
            ])
            ->filters([
                SelectFilter::make('type_fichier')->relationship('type_fichier', 'libelle')
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Action::make('edit')
                    ->label('Paratager')
                    ->url(fn (Fichier $record): string => route('partager_fichier', $record))
                    ->icon('heroicon-s-share')
                    ->color('green')
                    ->hidden(fn (Fichier $record): bool => $record->pub_yes_no == 1),
                Action::make('partager')
                    ->label('Enlever partage')
                    ->url(fn (Fichier $record): string => route('no_partager_fichier', $record))
                    ->icon('heroicon-s-share')
                    ->color('green')
                    ->hidden(fn (Fichier $record): bool => $record->pub_yes_no == intval('0')),
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
            'index' => Pages\ListFichiers::route('/'),
            'create' => Pages\CreateFichier::route('/create'),
            'edit' => Pages\EditFichier::route('/{record}/edit'),
        ];
    }    

}
