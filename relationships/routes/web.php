<?php

use App\Models\Comment;
use App\Models\Phone;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('prueba', function(){
    return 'Hola soy una ruta de prueba';
});

Route::get('prueba', function() {
    /*
    User::create([
        'name' => 'Victor Arana',
        'email' => 'victor@codersfree.com',
        'password' => bcrypt('12345678')
    ]);

    return 'Usuario creado';
    */
    
    /*
    Phone::create([
        'number' => '987654321',
        'user_id' => 1
    ]);

    return 'Telefono creado';
    */

    /*
    $user = User::where('id', 1)
                ->with('phone')
                ->first();

    return $user;
    */

    /*
    $phone = Phone::find(1);

    return $phone->user;
    */

    /*
    Post::create([
        'title' => 'Post 2',
        'content' => 'Contenido del post 2'
    ]);

    return 'Post creado';
    */
    
    /*
    Comment::create([
        'content' => 'Comentario 3',
        'post_id' => 1
    ]);
 
    return 'Comentario creado';
    */
    
    /*
    $post = Post::find(1);

    return $post->comments;
    */
    
    /*
    $comment = Comment::find(1);

    return $comment->post;
    */
    
    $post = Post::find(2);

    $post->comments()->create([
        'content' => 'Un comentario de prueba'
    ]);

    return 'Comentario creado';

});