<x-filament::widget>
    <x-filament::card>
        <div class="flex items-center space-x-4">
            <div class="flex-shrink-0">
                <x-heroicon-o-user-circle class="w-12 h-12 text-primary-500" />
            </div>
            <div>
                <h2 class="text-xl font-bold text-gray-800">
                    {{ $mensaje }}
                </h2>
                <p class="text-gray-600 mt-1">
                    @if(auth()->user()->hasRole('admin'))
                        Tienes acceso total como <span class="font-semibold text-primary-600">Administrador</span>. Puedes gestionar usuarios, roles, permisos y toda la configuración del sistema.
                    @elseif(auth()->user()->hasRole('gestor'))
                        Bienvenido, <span class="font-semibold text-amber-600">Gestor</span>. Puedes consultar información y ver reportes, pero no modificar la configuración principal.
                    @else
                        Bienvenido al panel. Consulta tus datos y solicita permisos adicionales si los necesitas.
                    @endif
                </p>
            </div>
        </div>
        @if(auth()->user()->hasRole('admin'))
            <div class="mt-6">
                <a href="{{ route('filament.admin.resources.users.index') }}"
                class="inline-flex items-center px-4 py-2 bg-primary-600 text-white rounded hover:bg-primary-700 transition">
                    <x-heroicon-o-users class="w-5 h-5 mr-2" />
                    Gestionar usuarios
                </a>
                <a href="{{ route('filament.admin.resources.roles.index') }}"
                class="inline-flex items-center px-4 py-2 bg-primary-600 text-white rounded hover:bg-primary-700 transition ml-2">
                    <x-heroicon-o-shield-check class="w-5 h-5 mr-2" />
                    Gestionar roles
                </a>
            </div>
        @endif
    </x-filament::card>
</x-filament::widget>
