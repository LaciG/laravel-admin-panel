@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @include('layouts.menu')
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">GDPR Beállítások</div>

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
                    
                    <table>
                        <tr>
                            <td>Alkalmazottak száma:</td><td>Ügyfelek száma: </td><td>Light</td><td>Standard</td><td>Enterprise</td><td>Követés</td><td>DPO</td><td>Napi Díj</td><td>Követési Díj</td>
                        </tr>
                    </table>
                            
                        @if(count($gdprData) > 0)
                            @foreach($gdprData->all() as $data)
                                <form method="post" action='{{ url("/gdprsettings/{$data->id}/edit") }}'>
                                    @csrf
                                    <div class="row">
                                        <div>{{ $data->workers }}</div><div>{{ $data->clients }}</div><div><input style="width: 50px;" type="number" name="Light" value="{{ $data->Light }}"></div><div><input style="width: 50px;" type="number" name="Standard" value="{{ $data->Standard }}"></div><div><input style="width: 50px;" type="number" name="Enterprise" value="{{ $data->Enterprise }}"></div><div><input style="width: 50px;" type="number" name="Follow" value="{{ $data->Follow }}"></div><div><input style="width: 50px;" type="number" name="DPO" value="{{ $data->DPO }}"></div><div><input style="width: 50px;" type="number" name="daily_price" value="{{ $data->daily_price }}"></div><div><input style="width: 50px;" type="number" name="follow_price" value="{{ $data->follow_price }}"></div><div><button type="submit" value="{{ $data->id }}" class="btn btn-primary btn-sm">Mentés</button></div>
                                    </div>
                                </form>
                            @endforeach
                        @endif
                </div>
            </div>
        </div>
        
    </div>
    
</div>
@endsection
