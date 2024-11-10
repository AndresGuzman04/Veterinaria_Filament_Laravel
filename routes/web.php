<?php

use Illuminate\Support\Facades\Route;

// Redirigir la raíz al panel de administración de Filament
Route::get('/', function () {
    return redirect('/admin'); // Cambia '/admin' si tienes una URL diferente para Filament
});
