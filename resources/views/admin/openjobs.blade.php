@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @include('layouts.menu')
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">Meghirdetett állások</div>

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
                        <tr>
                            <td>Pozíció</td><td>Helye</td><td>Típusa</td><td>Munkavégzés</td><td>Szint</td><td>Interakció</td>
                        </tr>
                        @if(count($openjobs) > 0)
                            @foreach($openjobs->all() as $job)
                            <tr>
                                <td><a href=' {{ url("/editjob/$job->id") }} '> {{ $job->job_title }}</a></td><td> {{ $job->job_place }} </td><td> {{ $job->job_type }} </td><td> {{ $job->job_time }} </td><td> {{ $job->job_level }} </td><td><a href=' {{ url("/deletejob/{$job->id}") }} ' onclick="return confirm('Biztos, hogy törlöd a {{ $job->job_title }} Álláshirdetést? ')">Törlés</a></td>
                            </tr>
                            @endforeach
                        @else
                        @endif
                    </table>
                    {{ $openjobs->links() }}
                </div>
            </div>
        </div>
        
    </div>
    
</div>
@endsection
