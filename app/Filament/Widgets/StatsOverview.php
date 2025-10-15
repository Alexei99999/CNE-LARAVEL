<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Usuarios', \App\Models\User::count())
                ->description('Total de usuarios registrados')
                ->descriptionIcon('heroicon-m-user-group')
                ->color('success')
                ->chart([7, 2, 10, 3, 15, 4, 17]),

            Stat::make('Roles', \Spatie\Permission\Models\Role::count())
                ->description('Total de roles')
                ->descriptionIcon('heroicon-m-shield-check')
                ->color('info'),

            Stat::make('Permisos', \Spatie\Permission\Models\Permission::count())
                ->description('Total de permisos')
                ->descriptionIcon('heroicon-m-key')
                ->color('warning'),
        ];
    }
}
