<?php

use App\Models\Phone;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('prueba', function(){
    return 'Hola soy una ruta de prueba';
});

Route::get('prueba', function() {
    // User::create([
    //     'name' => 'Victor Arana',
    //     'email' => 'victor@codersfree.com',
    //     'password' => bcrypt('12345678')
    // ]);

    // return 'Usuario creado';

    // Phone::create([
    //     'number' => '987654321',
    //     'user_id' => 1
    // ]);

    // return 'Telefono creado';

    // $user = User::where('id', 1)
    //             ->with('phone')
    //             ->first();

    // return $user;

    $phone = Phone::find(1);

    return $phone->user;

});