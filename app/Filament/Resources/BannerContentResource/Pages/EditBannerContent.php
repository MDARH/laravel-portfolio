<?php

namespace App\Filament\Resources\BannerContentResource\Pages;

use App\Filament\Resources\BannerContentResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBannerContent extends EditRecord
{
    protected static string $resource = BannerContentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
