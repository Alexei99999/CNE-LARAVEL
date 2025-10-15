<?php

// app/Observers/UserObserver.php
namespace App\Observers;

use App\Models\User;
use App\Models\Bitacora;

class UserObserver
{
    public function created(User $user)
    {
        Bitacora::create([
            'accion' => 'Usuario creado',
            'descripcion' => 'El usuario "' . $user->name . '" fue creado.',
            'user_id' => auth()->id(),
        ]);
    }

    public function updated(User $user)
    {
        Bitacora::create([
            'accion' => 'Usuario actualizado',
            'descripcion' => 'El usuario "' . $user->name . '" fue actualizado.',
            'user_id' => auth()->id(),
        ]);
    }

    public function deleted(User $user)
    {
        Bitacora::create([
            'accion' => 'Usuario eliminado',
            'descripcion' => 'El usuario "' . $user->name . '" fue eliminado.',
            'user_id' => auth()->id(),
        ]);
    }
}
