<?php

namespace App\Filament\Resources\TestDataResource\Pages;

use App\Filament\Resources\TestDataResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTestData extends EditRecord
{
    protected static string $resource = TestDataResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
