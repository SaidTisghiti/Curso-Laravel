<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Models\Post;


Route::get('/', HomeController::class);

/*
Route::get('/posts', [PostController::class, 'index'])
    ->name('posts.index');

Route::get('/posts/create', [PostController::class, 'create'])
    ->name('posts.create');

Route::post('/posts', [PostController::class, 'store'])
    ->name('posts.store');

Route::get('/posts/{post}', [PostController::class, 'show'])
    ->name('posts.show');

Route::get('/posts/{post}/edit', [PostController::class, 'edit'])
    ->name('posts.edit');

Route::put('/posts/{post}', [PostController::class, 'update'])
    ->name('posts.update');

Route::delete('/posts/{post}', [PostController::class, 'destroy'])
    ->name('posts.destroy');
*/

/*
Route::apiResource('posts', PostController::class);
(los dos hacen lo mismo, solo que el de abajo lo indicas y el de arriba no)
Route::resource('posts', PostController::class)
    ->except(['create', 'edit']);

*/

// Route::resource('posts', PostController::class)
    // ->parameters(['articles' => 'post']) (cambiar el nombre de las variables que pillamos del codigo)
    // ->names('posts'); (cambiar el nombre de la ruta, ex: posts.delete)
    // ->except(['destroy', 'edit']); (Te crea las rutas menos los que pongas allí)
    // ->only(['index', 'create', 'store']); (Te crea solo los que pones allí)

// Route::get('/posts/{post}/{category}', function($post, $category){
//     return "Aquí es mostrará el post {$post} de la categoria {$category}";
// });

// Route::get('/posts/{post}/{category?}', function($post, $category = null){
//     if ($category) {
//         return "Aquí es mostrará el post {$post} de la categoria {$category}";
//     }
//     return "Aquí es mostrará el post {$post}";
// });

Route::resource('posts', PostController::class); 

//Get
//Post
//Put
//Patch
//Delete

Route::get('prueba', function(){
    /*
        $post = new Post;

        $post->title = 'TíTuLo DE prueBA 4';
        $post->content = 'Contenido de prueba 4';
        $post->categoria = 'Categoria de prueba 4';

        $post->save();

        return $post;
    */

    /*
        $post = Post::find(4);

        return $post;
    */

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

    /*
        Eliminar datos de la tabla
        $post = Post::find(1);
        $post->delete();
        
        return "Eliminado correctamente";
    */
    
    
    $post = Post::find(1);

    // return $post->published_at->format('d-m-Y');
    // return $post->created_at->diffForHumans(); //(Te dice el tiempo ocurrido del created_ad)
    dd($post->is_active);
    
});