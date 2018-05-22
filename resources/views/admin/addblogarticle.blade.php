@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @include('layouts.menu')
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">Cikk hozzáadása</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row">
                        <form method="POST" action="{{ url('/storearticle') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group row">
                                <label for="blog_title" class="col-md-2 col-form-label text-md-right">{{ __('Cikk címe') }}</label>

                                <div class="col-md-10">
                                    <input id="blog_title" type="text" class="form-control{{ $errors->has('blog_title') ? ' is-invalid' : '' }}" name="blog_title" value="{{ old('blog_title') }}" required autofocus>

                                    @if ($errors->has('blog_title'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('blog_title') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="categoryId" class="col-md-4 col-form-label text-md-right">{{ __('Kategória') }}</label>
    
                                <div class="col-md-6">
                                    <select id="categoryId" type="categoryId" class="form-control{{ $errors->has('categoryId') ? ' is-invalid' : '' }}" name="categoryId" required>
                                        <option value="" selected>Válassz</option>
                                        @if(count($categories) > 0)
                                            @foreach($categories->all() as $category)
                                                <option value="{{$category->category_name}}"> {{ $category->category_name }} </option>
                                            @endforeach
                                        @endif
                                    </select>
                                    @if ($errors->has('categoryId'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('categoryId') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="blog_language" class="col-md-4 col-form-label text-md-right">{{ __('Nyelv') }}</label>
        
                                <div class="col-md-6">
                                    <select id="blog_language" type="blog_language" class="form-control{{ $errors->has('blog_language') ? ' is-invalid' : '' }}" name="blog_language" required>
                                        <option value="" selected>Válassz</option>
                                        <option value="hu"> Magyar </option>
                                        <option value="en"> Angol </option>
                                    </select>
                                    @if ($errors->has('blog_language'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('blog_language') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="blog_start_post" class="col-md-2 col-form-label text-md-right">{{ __('Cikk bevezető') }}</label>

                                <div class="col-md-10">
                                    <textarea id="blog_start_post" rows="5" class="form-control ckeditor{{ $errors->has('blog_start_post') ? ' is-invalid' : '' }}" name="blog_start_post" value="{{ old('blog_start_post') }}" required></textarea>

                                    @if ($errors->has('blog_start_post'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('blog_start_post') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="blog_rest_post" class="col-md-2 col-form-label text-md-right">{{ __('Teljes Cikk') }}</label>

                                <div class="col-md-10">
                                    <textarea id="blog_rest_post" name="blog_rest_post" rows="7" class="form-control ckeditor{{ $errors->has('blog_rest_post') ? ' is-invalid' : ''}}" placeholder="Write your message.." required></textarea>
                                    
                                    @if ($errors->has('blog_rest_post'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('blog_rest_post') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="blog_cover_image" class="col-md-4 col-form-label text-md-right">{{ __('Kép feltöltés') }}</label>

                                <div class="col-md-6">
                                    <input id="blog_cover_image" type="file" class="form-control{{ $errors->has('blog_cover_image') ? ' is-invalid' : '' }}" name="blog_cover_image" required>
                                </div>
                                @if ($errors->has('blog_cover_image'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('blog_cover_image') }}</strong>
                                        </span>
                                    @endif
                            </div>

                            <div class="form-group row">
                                <label for="blog_cover_image_alt" class="col-md-2 col-form-label text-md-right">{{ __('Kép alt') }}</label>
    
                                <div class="col-md-10">
                                    <input id="blog_cover_image_alt" type="text" class="form-control{{ $errors->has('blog_cover_image_alt') ? ' is-invalid' : '' }}" name="blog_cover_image_alt" value="{{ old('blog_cover_image_alt') }}" required autofocus>
    
                                    @if ($errors->has('blog_cover_image_alt'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('blog_cover_image_alt') }}</strong>
                                           </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="blog_meta_description" class="col-md-2 col-form-label text-md-right">{{ __('Meta Description') }}</label>

                                <div class="col-md-10">
                                    <input id="blog_meta_description" type="text" class="form-control{{ $errors->has('blog_meta_description') ? ' is-invalid' : '' }}" name="blog_meta_description" value="{{ old('blog_meta_description') }}" required autofocus>

                                    @if ($errors->has('blog_meta_description'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('blog_meta_description') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="blog_meta_keywords" class="col-md-2 col-form-label text-md-right">{{ __('Meta Keywords') }}</label>
    
                                <div class="col-md-10">
                                    <input id="blog_meta_keywords" type="text" class="form-control{{ $errors->has('blog_meta_keywords') ? ' is-invalid' : '' }}" name="blog_meta_keywords" value="{{ old('blog_meta_keywords') }}" required autofocus>
    
                                    @if ($errors->has('blog_meta_keywords'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('blog_meta_keywords') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary btn-large btn-block">
                                        {{ __('Cikk küldése') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
