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

                    <div class="row">
                        <form method="POST" action="{{ url('/editjob', array($jobdata->id)) }}">
                            @csrf

                            <div class="form-group row">
                                <label for="job_active" class="col-md-4 col-form-label text-md-right">{{ __('Aktív?') }}</label>
        
                                <div class="col-md-6">
                                    <select id="job_active" type="job_active" class="form-control{{ $errors->has('job_active') ? ' is-invalid' : '' }}" name="job_active" required>
                                        <option value=" {{ $jobdata->job_active }} " selected>{{ $jobdata->job_active }}</option>
                                        <option value="Igen"> Igen </option>
                                        <option value="Nem"> Nem </option>
                                    </select>
                                    @if ($errors->has('job_active'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('job_active') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="job_title" class="col-md-2 col-form-label text-md-right">{{ __('Pozíció neve:') }}</label>

                                <div class="col-md-10">
                                    <input id="job_title" type="text" class="form-control{{ $errors->has('job_title') ? ' is-invalid' : '' }}" name="job_title" value="{{ $jobdata->job_title }}" required autofocus>

                                    @if ($errors->has('job_title'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('job_title') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="job_place" class="col-md-2 col-form-label text-md-right">{{ __('Munkavégzés helye:') }}</label>

                                <div class="col-md-10">
                                    <input id="job_place" type="text" class="form-control{{ $errors->has('job_place') ? ' is-invalid' : '' }}" name="job_place" value="{{ $jobdata->job_place }}" required autofocus>

                                    @if ($errors->has('job_place'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('job_place') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="job_language" class="col-md-4 col-form-label text-md-right">{{ __('Nyelv:') }}</label>
        
                                <div class="col-md-6">
                                    <select id="job_language" type="job_language" class="form-control{{ $errors->has('job_language') ? ' is-invalid' : '' }}" name="job_language" required>
                                        <option value=" {{ $jobdata->job_language }} " selected> {{ $jobdata->job_language }} </option>
                                        <option value="hu"> Magyar </option>
                                        <option value="en"> Angol </option>
                                    </select>
                                    @if ($errors->has('job_language'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('job_language') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="job_type" class="col-md-4 col-form-label text-md-right">{{ __('Munkavégzés típusa:') }}</label>
        
                                <div class="col-md-6">
                                    <select id="job_type" type="job_type" class="form-control{{ $errors->has('job_type') ? ' is-invalid' : '' }}" name="job_type" required>
                                        <option value=" {{ $jobdata->job_type }} " selected> {{ $jobdata->job_type }} </option>
                                        <option value="Design"> Design </option>
                                        <option value="Engineering"> Engineering </option>
                                        <option value="Sales"> Sales </option>
                                        <option value="Marketing/PR"> Marketing/PR </option>
                                        <option value="Finance"> Finance </option>
                                        <option value="Office Administration"> Office Administration </option>
                                        <option value="IT"> IT </option>
                                        <option value="Operations"> Operations </option>
                                        <option value="Customer Support"> Customer Support </option>
                                        <option value="Business Intelligence"> Business Intelligence </option>
                                        <option value="Management"> Management </option>
                                        <option value="Other"> Other </option>
                                    </select>
                                    @if ($errors->has('job_type'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('job_type') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="job_level" class="col-md-4 col-form-label text-md-right">{{ __('Szükséges szint:') }}</label>
        
                                <div class="col-md-6">
                                    <select id="job_level" type="job_level" class="form-control{{ $errors->has('job_level') ? ' is-invalid' : '' }}" name="job_level" required>
                                        <option value=" {{ $jobdata->job_level }} " selected> {{ $jobdata->job_level }} </option>
                                        <option value="Rookie"> Rookie </option>
                                        <option value="Junior"> Junior </option>
                                        <option value="Intermediate"> Intermediate </option>
                                        <option value="Senior"> Senior </option>
                                        <option value="Lead"> Lead </option>
                                        <option value="Any"> Any </option>
                                    </select>
                                    @if ($errors->has('job_level'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('job_level') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="job_time" class="col-md-4 col-form-label text-md-right">{{ __('Munkaidő:') }}</label>
        
                                <div class="col-md-6">
                                    <select id="job_time" type="job_time" class="form-control{{ $errors->has('job_time') ? ' is-invalid' : '' }}" name="job_time" required>
                                        <option value=" {{ $jobdata->job_time }} " selected> {{ $jobdata->job_time }} </option>
                                        <option value="Part-Time"> Part-Time </option>
                                        <option value="Full-Time"> Full-Time </option>
                                        <option value="Internship"> Internship </option>
                                        <option value="CO-Founder"> CO-Founder </option>
                                    </select>
                                    @if ($errors->has('job_time'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('job_time') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="job_meta_description" class="col-md-2 col-form-label text-md-right">{{ __('Meta Description') }}</label>

                                <div class="col-md-10">
                                    <input id="job_meta_description" type="text" class="form-control{{ $errors->has('job_meta_description') ? ' is-invalid' : '' }}" name="job_meta_description" value="{{ $jobdata->job_meta_description }}" required autofocus>

                                    @if ($errors->has('job_meta_description'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('job_meta_description') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="job_meta_keywords" class="col-md-2 col-form-label text-md-right">{{ __('Meta Keywords') }}</label>
    
                                <div class="col-md-10">
                                    <input id="job_meta_keywords" type="text" class="form-control{{ $errors->has('job_meta_keywords') ? ' is-invalid' : '' }}" name="job_meta_keywords" value="{{ $jobdata->job_meta_keywords }}" required autofocus>
    
                                    @if ($errors->has('job_meta_keywords'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('job_meta_keywords') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="job_description" class="col-md-2 col-form-label text-md-right">{{ __('Rövid leírás') }}</label>

                                <div class="col-md-10">
                                    <textarea id="job_description" name="job_description" rows="7" class="form-control ckeditor{{ $errors->has('job_description') ? ' is-invalid' : ''}}" placeholder="Write your message.." required> {{ $jobdata->job_description }} </textarea>
                                    
                                    @if ($errors->has('job_description'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('job_description') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="job_goodtoknow" class="col-md-2 col-form-label text-md-right">{{ __('Teljes Cikk') }}</label>

                                <div class="col-md-10">
                                    <textarea id="job_goodtoknow" name="job_goodtoknow" rows="7" class="form-control ckeditor{{ $errors->has('job_goodtoknow') ? ' is-invalid' : ''}}" placeholder="Write your message.." required>{{ $jobdata->job_goodtoknow }}</textarea>
                                    
                                    @if ($errors->has('job_goodtoknow'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('job_goodtoknow') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary btn-large btn-block">
                                        {{ __('Állás Frissítése') }}
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
