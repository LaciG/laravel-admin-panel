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

                        <div class="form-group row">
                            <label for="class" class="col-sm-4 col-form-label text-md-right">{{ __('Osztály kiválasztása') }}</label>
    
                            <div class="col-md-6">
                                <select name="class">
                                    <option value="uiux">uiux</option>
                                    <option value="marketing">marketing</option>
                                    <option value="Startup">Startup</option>
                                    <option value="Fejlesztés">Fejlesztés</option>
                                </select>
                                @if ($errors->has('class'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('class') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="image" class="col-sm-4 col-form-label text-md-right">{{ __('Kép kiválasztása') }}</label>
        
                            <div class="col-md-6">
                                <table width="300">
                                    <tr>
                                        <td align="center"><img src="/images/categories/ux.png"><br>
                                            UX<bR>
                                            <input type="radio" name="image" value="/images/categories/ux.png">
                                        </td>
                                        <td align="center"><img src="/images/categories/marketing.png"><br>
                                            Marketing<br>
                                            <input type="radio" name="image" value="/images/categories/marketing.png">
                                        </td>
                                        <td align="center"><img src="/images/categories/startup.png"><br>
                                            Startup<br>
                                            <input type="radio" name="image" value="/images/categories/startup.png">
                                        </td>
                                        <td align="center"><img src="/images/categories/fejlesztes.png"><br>
                                            Fejlesztés<br>
                                            <input type="radio" name="image" value="/images/categories/fejlesztes.png">
                                        </td>
                                    </tr>
                                    
                                </table>
                                @if ($errors->has('image'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('image') }}</strong>
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
