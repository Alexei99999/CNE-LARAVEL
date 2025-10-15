<?php

namespace App\Filament\Widgets;

use Filament\Widgets\Widget;

class NombreWidget extends Widget
{
    protected static string $view = 'filament.widgets.nombre-widget';

    // Puedes pasar datos a la vista así:
    protected function getViewData(): array
    {
        return [
            'mensaje' => '¡Bienvenido al panel de administración!',
        ];
    }
}
