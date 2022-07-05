<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AppeldoffreResource\Pages;
use App\Filament\Resources\AppeldoffreResource\RelationManagers;
use App\Models\Appeldoffre;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AppeldoffreResource extends Resource
{
    protected static ?string $model = Appeldoffre::class;

    protected static ?string $navigationIcon = 'heroicon-o-speakerphone';

    protected static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('user_id')
                    ->hidden(),
                Forms\Components\TextInput::make('libelle')
                    ->maxLength(255),
                Forms\Components\DateTimePicker::make('dateDebut')
                    ->label("Date de début dépot"),
                Forms\Components\DateTimePicker::make('dateFin')
                    ->label("Date de fin de dépot"),
                Forms\Components\FileUpload::make('fichier')
                    ->label("Document officiel")
                    ->preserveFilenames()
                    ->acceptedFileTypes(['application/pdf'])
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user.name')
                    ->label("Auteur"),
                Tables\Columns\TextColumn::make('libelle'),
                Tables\Columns\TextColumn::make('dateDebut')
                    ->label("Date de début de dépot")
                    ->dateTime(),
                Tables\Columns\TextColumn::make('dateFin')
                    ->label("Date de fin de dépot")
                    ->since(),
                Tables\Columns\TextColumn::make('fichier'),
            ])
            ->filters([
                //
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
            AppeldoffreResource\RelationManagers\PostulantsRelationManager::class
        ];
    }


    protected static function shouldRegisterNavigation(): bool
    {
        $roles = [
            'admin' => 1,
            'serviceEtat' => 6,
            'ong' => 5,
        ];
        return in_array(auth()->user()->role_id, $roles)  ;
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAppeldoffres::route('/'),
            'create' => Pages\CreateAppeldoffre::route('/create'),
            'edit' => Pages\EditAppeldoffre::route('/{record}/edit'),
        ];
    }   
     
    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->whereBelongsTo(auth()->user());
    }
}
