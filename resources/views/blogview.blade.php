<html>
    <head>
        <title>Blog lista</title>
    </head>
    <body>
        @if(count($blogpost) > 0)
            @foreach($blogpost->all() as $blog)
                <div class="row">
                    <img class="img-fluid" src="{{ $blog->blog_cover_image }}" alt=" {{ $blog->blog_cover_image_alt }} "><br>
                    {{ $blog->blog_title }}<br>
                    {{ $blog->blog_start_post }}<br>
                    {!! $blog->blog_rest_post !!}<br>
                    <a href=' {{ url("/blog") }} '>VISSZA</a>
                </div>
            @endforeach
        @endif
    </body>
</html>