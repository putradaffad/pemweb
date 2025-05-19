<?php

namespace App\Filament\Admin\Resources\RentalHistoryResource\Pages;

use App\Filament\Admin\Resources\RentalHistoryResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRentalHistories extends ListRecords
{
    protected static string $resource = RentalHistoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
