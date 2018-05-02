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

                    <table width="100%" border="1">
                        <tr>
                            <td>Mire jelentkezett</td><td>Név</td><td>Bérigény</td><td>Telefon</td><td>CV Link</td><td>Művelet</td>
                        </tr>
                        @if(count($applies) > 0)
                            @foreach($applies->all() as $apply)
                        <tr>
                            <td> {{ $apply->apply_job }} </td><td> {{ $apply->apply_name }} </td><td> {{ $apply->apply_salary }} </td><td> {{ $apply->apply_mobile }} </td><td> <a href="{{ $apply->apply_resume }}" target="_blank"> Megtekintés </a></td><td>Művelet</td>
                        </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="6">Nincsenek jelentkezések</td>
                            </tr>
                        @endif
                    </table>
                    {{ $applies->links() }}
                </div>
            </div>
        </div>
        
    </div>
    
</div>
@endsection
