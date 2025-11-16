<?php

namespace App\Filament\Admin\Resources\PoliklinikResource\Pages;

use App\Filament\Admin\Resources\PoliklinikResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPolikliniks extends ListRecords
{
    protected static string $resource = PoliklinikResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
