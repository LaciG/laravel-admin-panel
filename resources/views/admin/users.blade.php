@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @include('layouts.menu')
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">Felhasználók</div>

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

                    <table width="100%">
                        <tr>
                            <td>Név: </td><td>E-mail cím: </td><td>Regisztrálva: </td>
                        </tr>
                        @if(count($users) > 0)
                            @foreach($users->all() as $user)
                                <tr>
                                    <td> {{ $user->name }} </td><td> {{ $user->email }} </td><td> {{ $user->created_at }} </td>
                                </tr>
                            @endforeach
                        @endif
                    </table>
                    {{ $users->links() }}
                </div>
            </div>
        </div>
        
    </div>
    
</div>
@endsection
