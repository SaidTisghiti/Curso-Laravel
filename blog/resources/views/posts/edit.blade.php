<x-app-layout>

    <h1>Formulario para crear un nuevo post</h1>

    <form action="{{route('posts.update', $post)}}" method="POST">

        @csrf

        @method('PUT')

        <label>
            Título:
            <input type="text" name="title" value="{{old('title', $post->title)}}">
        </label>
        
        @error('title')
            <p>{{$message}}</p>
        @enderror

        <br>
        <br>

        <label>
            Slug:
            <input type="text" name="slug" value="{{old('slug', $post->slug)}}">
        </label>

        @error('slug')
            <p>{{$message}}</p>
        @enderror

        <br>
        <br>

        <label>
            Categoria:
            <input type="text" name="categoria" value="{{old('categoria', $post->categoria)}}">
        </label>

        @error('categoria')
            <p>{{$message}}</p>
        @enderror

        <br>
        <br>

        <label>
            Contenido:
            <textarea name="content">{{old('content', $post->content)}}</textarea>
        </label>
        
        @error('content')
            <p>{{$message}}</p>
        @enderror

        <br>
        <br>

        <button type="submit">
            Actualitzar post
        </button>

    </form>
    
</x-app-layout>