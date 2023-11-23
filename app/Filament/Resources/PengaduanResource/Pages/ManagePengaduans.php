<?php

namespace App\Filament\Resources\PengaduanResource\Pages;

use Filament\Actions;
use Illuminate\Database\Eloquent\Model;
use Filament\Resources\Pages\ManageRecords;
use App\Filament\Resources\PengaduanResource;

class ManagePengaduans extends ManageRecords
{
    protected static string $resource = PengaduanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
            
        ];
    }
    public static function getGlobalSearchResultTitle(Model $record): string
{
    return $record->Laporan;
}
}
