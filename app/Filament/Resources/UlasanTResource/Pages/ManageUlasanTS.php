<?php

namespace App\Filament\Resources\UlasanTResource\Pages;

use App\Filament\Resources\UlasanTResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageUlasanTS extends ManageRecords
{
    protected static string $resource = UlasanTResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
