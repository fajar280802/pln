<?php

namespace App\Filament\Resources\UlasanCResource\Pages;

use App\Filament\Resources\UlasanCResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageUlasanCS extends ManageRecords
{
    protected static string $resource = UlasanCResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
