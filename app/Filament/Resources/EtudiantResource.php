<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EtudiantResource\Pages;
use App\Filament\Resources\EtudiantResource\RelationManagers;
use App\Models\Etudiant;
use App\Models\Promotion;
use App\Models\User;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Parfaitementweb\FilamentCountryField\Forms\Components\Country;
use Parfaitementweb\FilamentCountryField\Tables\Columns\CountryColumn;

class EtudiantResource extends Resource
{
    protected static ?string $model = User::class;
    protected static ?string $modelLabel = 'Etudiant';
    protected static ?string $navigationLabel = 'Etudiants';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->label('Nom'),
                TextInput::make('prenom')
                    ->label('Prénom'),
                TextInput::make('postnom')
                    ->label('Postnom'),
                TextInput::make('email')
                    ->email()
                    ->label('Email'),
                TextInput::make('telephone')
                    ->tel()
                    ->label('Telephone'),
                TextInput::make('adresse')
                    ->label('Adresse'),
                TextInput::make('matricule')
                    ->label('Matricule'),
                TextInput::make('lieu_de_naissance')
                    ->label('Lieu de naissance'),
                DatePicker::make('date_de_naissance')
                    ->label('Date de naissance'),
                Country::make('nationalite')
                    ->default('Congo-Kinshasa')
                    ->searchable()
                    ->label('Nationalité'),
                Select::make('promotion_id')
                    ->label('Promotion')
                    ->options(Promotion::all()->pluck('nom', 'id'))
                    ->searchable()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                CountryColumn::make('nationalite')
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
            'index' => Pages\ListEtudiants::route('/'),
            'create' => Pages\CreateEtudiant::route('/create'),
            'view' => Pages\ViewEtudiant::route('/{record}'),
            'edit' => Pages\EditEtudiant::route('/{record}/edit'),
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
