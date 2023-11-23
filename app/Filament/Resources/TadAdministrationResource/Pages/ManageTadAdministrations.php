<?php

namespace App\Filament\Resources\TadAdministrationResource\Pages;

use App\Filament\Resources\TadAdministrationResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageTadAdministrations extends ManageRecords
{
    protected static string $resource = TadAdministrationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
