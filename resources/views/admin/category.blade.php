@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @include('layouts.menu')
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">Kategória hozzáadása</div>

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

                     <form method="POST" action="{{ url('/addCategory') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="categoryId" class="col-sm-4 col-form-label text-md-right">{{ __('Kategória hozzáadása') }}</label>

                            <div class="col-md-6">
                                <input id="categoryId" type="categoryId" class="form-control{{ $errors->has('categoryId') ? ' is-invalid' : '' }}" name="categoryId" value="{{ old('categoryId') }}" required autofocus>

                                @if ($errors->has('categoryId'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('categoryId') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Hozzáadás') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
