<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ActualiteResource\Pages;
use App\Filament\Resources\ActualiteResource\RelationManagers;
use App\Models\Actualite;
use Filament\Forms;
use Filament\Forms\Components\RichEditor;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ActualiteResource extends Resource
{
    protected static ?string $model = Actualite::class;

    protected static ?string $navigationIcon = 'heroicon-o-newspaper';

    protected static ?string $navigationGroup = 'Gestion des actualités';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('titre')
                ->maxLength(55),
                RichEditor::make('contenue')
                    ->toolbarButtons([
                        'attachFiles',
                        'blockquote',
                        'bold',
                        'bulletList',
                        'codeBlock',
                        'h2',
                        'h3',
                        'italic',
                        'link',
                        'orderedList',
                        'redo',
                        'strike',
                        'undo',
                    ]),
                Forms\Components\FileUpload::make('image')
                ->preserveFilenames()
                ->image(),
                Forms\Components\TextInput::make('video')
                ->placeholder("Veillez mettre une vodéo youtube")
                ->maxLength(45),
                Forms\Components\DateTimePicker::make('date')
                ->hidden(),
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
                    ->limit(30)->searchable(),
                Tables\Columns\TextColumn::make('date')
                    ->sortable()
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
    
    protected static function shouldRegisterNavigation(): bool
    {
        $roles = [
            'Pecheur' => 3,
            'Usager' => 4,
        ];
        return !in_array(auth()->user()->role_id, $roles)  ;
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->whereBelongsTo(auth()->user());
    }
    
}
