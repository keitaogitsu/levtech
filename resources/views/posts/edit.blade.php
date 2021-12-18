<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Create</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        
    </head>
    <body>
        <h1>Blog Name</h1>
        <h2>編集画面</h2>
        <form action="/posts/{{ $post->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class="title">
                <h3>Title</h3>
                <input type="text" name="post[title]" value="{{$post->title}}" /><br>
                <p class="title__error" style="color:red">{{ $errors->first('post.title') }}</p>
            </div>
            <div class="body">
                <h3>Body</h3>
                <input type='text' name='post[body]' value="{{ $post->body }}">
                <p class="body__error" style="color:red">{{ $errors->first('post.body') }}</p>
            </div>
            <input type="submit" value="更新" />
        </form>
        <div class="back">[<a href="/posts/{{ $post->id }}">back</a>]</div>
    </body>
</html>
