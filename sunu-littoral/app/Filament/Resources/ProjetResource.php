<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProjetResource\Pages;
use App\Filament\Resources\ProjetResource\RelationManagers;
use App\Models\Projet;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProjetResource extends Resource
{
    protected static ?string $model = Projet::class;

    protected static ?string $navigationIcon = 'heroicon-o-user';

    protected static ?string $navigationGroup = 'Projets';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('user_id')
                    ->disabled()
                    ->default(auth()->id())
                    ,
                Forms\Components\TextInput::make('nom')
                    ->label("Nom du projet"),
                Forms\Components\FileUpload::make('fichir')
                    ->label("Document de description du projet")
                    ->preserveFilenames()
                    ->acceptedFileTypes(['application/pdf'])
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nom')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('fichir')
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
            'index' => Pages\ManageProjets::route('/'),
        ];
    } 
    
    protected function getCreatedNotificationMessage(): ?string
    {
        return 'Actualité créée avec succès';
    }
}
