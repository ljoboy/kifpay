<?php

namespace App\Filament\Resources\JetonResource\Pages;

use App\Filament\Resources\JetonResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListJetons extends ListRecords
{
    protected static string $resource = JetonResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
