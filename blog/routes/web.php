<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return "Welcome to the homepage";
});

Route::get('/posts', function(){
    return "Aquí se mostrarán todos los posts";
});

Route::get('/posts/create', function(){
    return "Aqui se mostrará un formulario para crear un post";
});

Route::get('/posts/{post}', function($post){
    return "Aquí es mostrará el post {$post}";
});

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