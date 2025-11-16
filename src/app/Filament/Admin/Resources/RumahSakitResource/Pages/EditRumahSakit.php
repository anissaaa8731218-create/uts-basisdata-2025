<?php

namespace App\Filament\Admin\Resources\RumahSakitResource\Pages;

use App\Filament\Admin\Resources\RumahSakitResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRumahSakit extends EditRecord
{
    protected static string $resource = RumahSakitResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
