<?php

namespace App\Filament\Resources\FraisResource\Pages;

use App\Filament\Resources\FraisResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewFrais extends ViewRecord
{
    protected static string $resource = FraisResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
