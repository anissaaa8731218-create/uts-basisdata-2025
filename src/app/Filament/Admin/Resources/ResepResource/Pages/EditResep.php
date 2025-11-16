<?php

namespace App\Filament\Admin\Resources\ResepResource\Pages;

use App\Filament\Admin\Resources\ResepResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditResep extends EditRecord
{
    protected static string $resource = ResepResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
