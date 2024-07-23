<?php

namespace App\Filament\Resources\CompteResource\Pages;

use App\Filament\Resources\CompteResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewCompte extends ViewRecord
{
    protected static string $resource = CompteResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
