<?php

namespace App\Filament\Resources\KuesionerResource\Pages;

use App\Filament\Resources\KuesionerResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKuesioner extends EditRecord
{
    protected static string $resource = KuesionerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
