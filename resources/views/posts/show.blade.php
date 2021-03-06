<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Posts</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        
        <script src="https://kit.fontawesome.com/700f927bd6.js" crossorigin="anonymous"></script>
        
        
    </head>
    <body>
        <h1>Blog Name</h1>
        <h2 class="title">
            {{ $post->title }}
        </h2>
        <div class="content">
            <div class="content_post">
                <h3>本文</h3>
                <p class="body">{{ $post->body }}</p>
                <p class="updated_at">{{ $post->updated_at }}</p>
            </div>
        </div>
        <div class='footer'>
            <a href="/">戻る</a>
            <p class="edit">[<a href="/posts/{{ $post->id }}/edit">edit</a>]</p>
            <form action="/posts/{{ $post->id }}" id="form" method="post" style="display:inline">
                @csrf
                @method('DELETE')
                <span onclick="Check(this);"><i class="fa fa-trash" aria-hidden="true"></i></span> 
                <script type="text/javascript">
                    function Check(e){
                        let checked = confirm("削除しますか？");
                        if (checked==true) {
                            document.getElementById("form").submit();
                        } else if (checked==false) {
                            console.log('false if is executed');

                            return false;
                        }
                    }
                </script>
            </form>
        </div>
    </body>
</html>
