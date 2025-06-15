<?php

namespace App\Filament\Resources\ShoeCategoryResource\Pages;

use App\Filament\Resources\ShoeCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageShoeCategories extends ManageRecords
{
    protected static string $resource = ShoeCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
