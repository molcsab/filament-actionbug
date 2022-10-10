<?php

namespace App\Filament\Resources\TestDataResource\Pages;

use App\Filament\Resources\TestDataResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateTestData extends CreateRecord
{
    protected static string $resource = TestDataResource::class;
}
