<?php

namespace App\Filament\Admin\Resources\KunjunganResource\Pages;

use App\Filament\Admin\Resources\KunjunganResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKunjungan extends EditRecord
{
    protected static string $resource = KunjunganResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
