<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Models\Post;

Route::get('/', HomeController::class);

Route::get('/posts', [PostController::class, 'index']);

Route::get('/posts/create', [PostController::class, 'create']);

Route::get('/posts/{post}', [PostController::class, 'show']);

// Route::get('/posts/{post}/{category}', function($post, $category){
//     return "Aquí es mostrará el post {$post} de la categoria {$category}";
// });

// Route::get('/posts/{post}/{category?}', function($post, $category = null){
//     if ($category) {
//         return "Aquí es mostrará el post {$post} de la categoria {$category}";
//     }
//     return "Aquí es mostrará el post {$post}";
// });


//Get
//Post
//Put
//Patch
//Delete

Route::get('prueba', function(){
    /*
        Crear nuevo post
        $post = new Post;

        $post->title = 'Título de prueba 3';
        $post->content = 'Contenido de prueba 3';
        $post->categoria = 'Categoria de prueba 3';

        $post->save();

        return $post;
    */

    // $post = Post::find(1);

    /*
        Actualizar registro
        $post = Post::where('title', 'Título de prueba 1')
                    ->first();
        $post->categoria = 'Desarrollo web';
        $post->save();
    
        return $post;
    */

    /* 
        Seleccionar toda la tabla
        $posts = Post::all(); (tambien se puede substituïr el 'all()' con 'get()')
        
        return $posts;
    */

    /*
        Para debugar despues de hacer el de arriba
        dd($posts);
    */

    /* 
        Seleccionar toda la tabla con un condicional
        $posts = Post::where('id', '>=', '2')
                    ->get();
    
        return $posts;
    */

    /*
        Seleccionar todas las tablas con un orden
        $posts = Post::orderBy('id', 'desc')
                    ->select('id', 'title', 'categoria') (añadiendo el select pilla las columnas que quieres visualizar)
                    ->take(2) (limitas la cantidad de las que quieres ver)
                    ->get();
        
        return $posts;
     */

    // Eliminar datos de la tabla
    $post = Post::find(1);
    $post->delete();
    
    return "Eliminado correctamente";

    
});