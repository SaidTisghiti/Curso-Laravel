<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Mail\PostCreateMail;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('id', 'desc')
                    ->paginate(10);
        
        return view('posts.index', compact('posts'));
    }
    public function create()
    {
        return view('posts.create');
    }

    public function store(StorePostRequest $request)
    {
        /*
        $request->validate([
            'title' => 'required|min:5|max:255', // ['required', 'min:5', 'max:255'] (Este tambien sirve)
            'slug' => 'required|unique:posts',
            'categoria' => 'required',
            'content' => 'required',
        ]);
        */

        $post = Post::create($request->all());
        
        /*
        Post::create([
            'title' => $request->title,
            'slug' => $request->slug,
            'categoria' => $request->categoria,
            'content' => $request->content,
        ]);
        (Esto es lo mismo que lo de abajo)
        Post::create($request->all());
        */
        
        /*
        $post = new Post();

        $post->title = $request->title;
        $post->slug = $request->slug;
        $post->categoria = $request->categoria;
        $post->content = $request->content;

        $post->save();
        */
        
        Mail::to('prueba@prueba.com')->send(new PostCreateMail($post));

        return redirect()->route('posts.index');
    }

    public function show(Post $post)
    {
        // $post = Post::find($post);
        //compact('post); ['post' => $post]
        
        
        return view('posts.show', compact('post'));
    }

    public function edit(Post $post)
    {
        // $post = Post::find($post);
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request,Post $post)
    {
        // $post = Post::find($post);

        $request->validate([
            'title' => 'required|min:5|max:255', // ['required', 'min:5', 'max:255'] (Este tambien sirve)
            'slug' => "required|unique:posts,slug,{$post->id}",
            'categoria' => 'required',
            'content' => 'required',
        ]);
        
        $post->update($request->all());

        /*
        $post->title = $request->title;
        $post->slug = $request->slug;
        $post->categoria = $request->categoria;
        $post->content = $request->content;

        $post->save();*/

        return redirect()->route('posts.show', $post);
    }

    public function destroy(Post $post)
    {
        // $post = Post::find($post);
        $post->delete();

        return redirect()->route('posts.index');
    }
}
