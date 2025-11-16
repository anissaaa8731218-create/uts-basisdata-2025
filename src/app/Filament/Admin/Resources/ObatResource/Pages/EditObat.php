<?php

namespace App\Filament\Admin\Resources\ObatResource\Pages;

use App\Filament\Admin\Resources\ObatResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditObat extends EditRecord
{
    protected static string $resource = ObatResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
