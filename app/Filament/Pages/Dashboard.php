<?php

namespace App\Filament\Pages;

use Filament\Pages\Dashboard as BaseDashboard;

class Dashboard extends BaseDashboard
{
    // Cambia el nombre en el menú lateral
    protected static ?string $navigationLabel = 'Panel';

    // Cambia el título principal de la página (debe ser público)
    public function getHeading(): string
    {
        return 'Panel';
    }

    public function getTitle(): string
    {
        return 'Panel';
    }


}
