<?php

namespace App\Filament\Admin\Resources\PoliklinikResource\Pages;

use App\Filament\Admin\Resources\PoliklinikResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPoliklinik extends EditRecord
{
    protected static string $resource = PoliklinikResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
