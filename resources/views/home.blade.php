@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @include('layouts.menu')
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">Dashboard</div>

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

                    <table width="100%" border="1">
                        <tr class="card-header">
                            <td colspan="3">Blog bejegyzések</td>
                        </tr>
                        <tr>
                            <td>Cím</td><td>Kategória</td><td>Publikálva:</td>
                        </tr>
                        @if(count($bloglist) > 0)
                            @foreach($bloglist->all() as $blog)
                                <tr>
                                    <td> {{ $blog->blog_title }} </td><td> {{ $blog->blog_category }} </td><td> {{ date('M j, Y H:i', strtotime($blog->created_at)) }} </td>
                                </tr>
                            @endforeach
                        @else
                        <tr>
                            <td align="center" colspan="3">Nincs blogbejegyzés!</td>
                        </tr>
                        @endif
                    <table>

                    <table width="100%" border="1">
                        <tr class="card-header">
                            <td colspan="3">Aktív álláshirdetések</td>
                        </tr>
                        <tr>
                            <td>Állás neve</td><td>Típusa</td><td>Feladva:</td>
                        </tr>
                        @if(count($joblist) > 0)
                            @foreach($joblist->all() as $job )
                                <tr>
                                    <td> {{ $job->job_title }} </td><td> {{ $job->job_type }} </td><td> {{ date('M j, Y H:i', strtotime($job->created_at)) }} </td>
                                </tr>
                            @endforeach
                        @else
                        <tr>
                            <td align="center" colspan="3">Nincs aktív álláshirdetés!</td>
                        </tr>
                        @endif
                    <table>
                </div>
            </div>
        </div>
        
    </div>
    
</div>
@endsection
