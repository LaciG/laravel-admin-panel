@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @include('layouts.menu')
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">Blog kezelés</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if(count($errors) > 0)
                        @foreach($errors->all() as $error)
                            <div class="alert alert-danger"> {{ $error }} </div>
                        @endforeach
                    @endif

                    @if(session('response'))
                        <div class="alert alert-success">
                            {{ session('response') }}
                        </div>
                    @endif

                    <table border="1" width="100%">
                        <tr>
                            <td>Cím</td><td>Kategória</td><td>Nyelv</td><td>Publikálás ideje</td><td>Törlés</td>
                        </tr>
                        @if(count($bloglist) > 0)
                            @foreach($bloglist->all() as $blog)
                                <tr>
                                    <td> {{ $blog->blog_title }} </td><td> {{ $blog->blog_category }} </td><td> {{ $blog->language }} </td><td> {{ $blog->created_at }} </td><td><a href=' {{ url("/deletearticle/{$blog->id}") }} ' onclick="return confirm('Biztos, hogy törlöd a {{ $blog->blog_title }} cikket? ')">Törlés</a></td>
                                </tr>
                            @endforeach
                            {{ $bloglist->links() }}
                            @else
                                <p>Nincsenek Cikkek</p>
                            @endif
                    <table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
