<?php

namespace App\Filament\Resources\JetonResource\Pages;

use App\Filament\Resources\JetonResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewJeton extends ViewRecord
{
    protected static string $resource = JetonResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
