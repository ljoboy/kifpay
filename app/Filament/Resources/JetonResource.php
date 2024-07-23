<?php

namespace App\Filament\Resources;

use App\Filament\Resources\JetonResource\Pages;
use App\Filament\Resources\JetonResource\RelationManagers;
use App\Models\Jeton;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
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
                Forms\Components\TextInput::make('intitule')
                    ->required()
                    ->maxLength(255),
                Forms\Components\DatePicker::make('delivre_le')
                    ->required(),
                Forms\Components\Select::make('personnel_id')
                    ->relationship('personnel', 'name')
                    ->required(),
                Forms\Components\Select::make('etudiant_id')
                    ->relationship('etudiant', 'name')
                    ->required(),
                Forms\Components\Select::make('frais_id')
                    ->relationship('frais', 'id')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('intitule')
                    ->searchable(),
                Tables\Columns\TextColumn::make('delivre_le')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
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
                Tables\Columns\TextColumn::make('personnel.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('etudiant.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('frais.id')
                    ->numeric()
                    ->sortable(),
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
