<?php

namespace App\Filament\Resources\BannerContentResource\Pages;

use App\Filament\Resources\BannerContentResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBannerContents extends ListRecords
{
    protected static string $resource = BannerContentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
