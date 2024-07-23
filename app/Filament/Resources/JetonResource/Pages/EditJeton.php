<?php

namespace App\Filament\Resources\JetonResource\Pages;

use App\Filament\Resources\JetonResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditJeton extends EditRecord
{
    protected static string $resource = JetonResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
