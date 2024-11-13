<?php

namespace App\Filament\Admin\Resources\SistemjualnelionlineResource\Pages;

use App\Filament\Admin\Resources\SistemjualnelionlineResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSistemjualnelionlines extends ListRecords
{
    protected static string $resource = SistemjualnelionlineResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
