<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

// Importaciones de Spatie
use Spatie\Permission\Traits\HasRoles;
use Filament\Models\Contracts\FilamentUser;
use Filament\Panel;

class User extends Authenticatable implements FilamentUser
{
    use HasFactory, Notifiable, HasRoles;

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    // Este método es obligatorio para Filament
    public function canAccessPanel(Panel $panel): bool
    {
        // Permite acceso a todos los usuarios autenticados
        //return true;

        // O restringe por rol/email:
        return $this->roles()->exists();
        // return str_ends_with($this->email, '@tudominio.com');
    }
}
