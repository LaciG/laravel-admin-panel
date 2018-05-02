@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @include('layouts.menu')
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">Állásjelentkezések</div>

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

                    
                </div>
            </div>
        </div>
        
    </div>
    
</div>
@endsection
