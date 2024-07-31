<?php

namespace App\Filament\Resources;

use App\Filament\Resources\JetonResource\Pages;
use App\Filament\Resources\JetonResource\RelationManagers;
use App\Models\Etudiant;
use App\Models\Frais;
use App\Models\Jeton;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class JetonResource extends Resource
{
    protected static ?string $model = Jeton::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('etudiant_id')
                    ->searchable()
                    ->label('Etudiant')
                    ->options(function () {
                        return Etudiant::all()->mapWithKeys(function ($user) {
                            return [$user->id => $user->full_name];
                        });
                    })
                    ->searchPrompt('Entrez le nom, postnom ou prenom dudit étudiant')
                    ->loadingMessage('Chargement de la liste des étudiants')
                    ->noSearchResultsMessage("Aucun.e étudiant.e correspondant.e n'a été trouvé !")
                    ->searchable(['nom', 'postnom', 'prenom'])
                    ->preload()
                    ->required(),
                Forms\Components\Select::make('frais_id')
                    ->label('Frais')
                    ->options(function () {
                        return Frais::all()->mapWithKeys(function ($frais) {
                            return [$frais->id => $frais->libelle];
                        });
                    })
                    ->preload()
                    ->searchable()
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('code')
                    ->sortable()
                    ->searchable()
                    ->label('Code'),
                Tables\Columns\TextColumn::make('frais.intitule')
                    ->sortable(),
                Tables\Columns\TextColumn::make('etudiant.fullname')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('etudiant.promotion.nom')
                    ->sortable(),
                Tables\Columns\TextColumn::make('personnel.name')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('deleted_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\TrashedFilter::make(),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    Tables\Actions\ForceDeleteBulkAction::make(),
                    Tables\Actions\RestoreBulkAction::make(),
                ]),
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
            'index' => Pages\ListJetons::route('/'),
            'create' => Pages\CreateJeton::route('/create'),
            'view' => Pages\ViewJeton::route('/{record}'),
            'edit' => Pages\EditJeton::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }


}
