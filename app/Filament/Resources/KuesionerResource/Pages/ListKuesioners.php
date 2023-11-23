<?php

namespace App\Filament\Resources\KuesionerResource\Pages;

use App\Filament\Resources\KuesionerResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKuesioners extends ListRecords
{
    protected static string $resource = KuesionerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
