<?php

namespace App\Filament\Admin\Resources\KunjunganResource\Pages;

use App\Filament\Admin\Resources\KunjunganResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKunjungans extends ListRecords
{
    protected static string $resource = KunjunganResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
