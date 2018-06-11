@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @include('layouts.menu')
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">GDPR Statisztika</div>

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

                    Alkalmazottak száma:
                    <table border="1">
                        <tr>
                            <td>Kevesebb mint 30</td><td>31 - 249</td><td>Több mint 249</td>
                        </tr>
                        <tr>
                            <td>{{ $data['workersLessThan30Count'] }}</td><td>{{ $data['workersBetweenCount'] }}</td><td>{{ $data['workersMoreThan249Count'] }}</td>
                        </tr>
                        <tr>
                            <td></td><td></td><td></td>
                        </tr>
                        <tr>
                            <td></td><td></td><td></td>
                        </tr>
                        <tr>
                            <td></td><td></td><td></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        
    </div>
    
</div>
@endsection
