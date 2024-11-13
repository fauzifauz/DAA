<?php

namespace App\Filament\Admin\Resources\SistemjualnelionlineResource\Pages;

use App\Filament\Admin\Resources\SistemjualnelionlineResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSistemjualnelionline extends EditRecord
{
    protected static string $resource = SistemjualnelionlineResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
