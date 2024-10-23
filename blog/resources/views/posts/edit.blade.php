<x-app-layout>

    <h1>Formulario para crear un nuevo post</h1>

    <form action="{{route('posts.update', $post)}}" method="POST">

        @csrf

        @method('PUT')

        <label>
            Título:
            <input type="text" name="title" value="{{$post->title}}">
        </label>

        <br>
        <br>

        <label>
            Slug:
            <input type="text" name="slug" value="{{$post->slug}}">
        </label>

        <br>
        <br>

        <label>
            Categoria:
            <input type="text" name="categoria" value="{{$post->categoria}}">
        </label>

        <br>
        <br>

        <label>
            Contenido:
            <textarea name="content">{{$post->content}}</textarea>
        </label>
        
        <br>
        <br>

        <button type="submit">
            Actualitzar post
        </button>

    </form>
    
</x-app-layout>