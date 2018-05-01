<html>
    <head>
        <title>Blog lista</title>
    </head>
    <body>
        @if(count($bloglist) > 0)
            @foreach($bloglist->all() as $blog)
                <div class="row">
                    <img class="img-fluid" src="{{ $blog->blog_cover_image }}" alt=" {{ $blog->blog_cover_image_alt }} "><br>
                    {{ $blog->blog_title }}<br>
                    {{ $blog->blog_start_post }}<br>
                    <a href=' {{ url("/blog/{$blog->id}") }} '>Tovább olvasom</a>
                </div>
            @endforeach
        @endif
    </body>
</html>