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

                    <table>
                        <tr>
                            <td>1</td><td>1</td><td>1</td><td>1</td>
                        </tr>
                    <table>

                    <table>
                        <tr>
                            <td>1</td><td>1</td><td>1</td><td>1</td>
                        </tr>
                    <table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
