<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Bare - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <style>
      body {
        padding-top: 54px;
      }
      @media (min-width: 992px) {
        body {
          padding-top: 56px;
        }
      }

    </style>

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
          <a class="navbar-brand" href="#">Start Bootstrap</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href=' {{ url("/") }} '>Home
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href='#'>Startup</a>
              </li>
              <li class="dropdown">
                  <a href="#" class="nav-link" data-toggle="dropdown">
                      Szolgáltatások
                  </a>
                  <ul class="dropdown-menu">
                      <li class="nav-item">
                          <a href="#">Marketing</a>
                      </li>
                      <li class="nav-item">
                          <a href="#">App Fejlesztés</a>
                      </li>
                      <li class="nav-item">
                          <a href="#">Grafikai Munkák</a>
                      </li>
                      <li class="nav-item">
                          <a href="#">Webfejlesztés</a>
                      </li>
                  </ul>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href='#'>GDPR</a>
              </li>
              <li class="nav-item active">
                  <a class="nav-link" href=' {{url("/carrier") }} '>Karrier</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href=' {{ url("/blog") }} '>Blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Kapcsolat</a>
              </li>
              @if (Route::has('login'))
                  @auth
                      <li class="nav-item">
                          <a class="nav-link" href="{{ url('/home') }}">Home</a>
                      </li>
                  @else
                      <li class="nav-item">
                          <a class="nav-link" href="{{ route('login') }}">Login</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="{{ route('register') }}">Register</a>
                      </li>
                  @endauth
              @endif
              <li class="dropdown">
                  <a href="#" class="nav-link" data-toggle="dropdown">
                      {{ Config::get('languages')[App::getLocale()] }}
                  </a>
                  <ul class="dropdown-menu">
                      @foreach (Config::get('languages') as $lang => $language)
                          @if ($lang != App::getLocale())
                              <li class="nav-item">
                                  <a href="{{ route('lang.switch', $lang) }}">{{$language}}</a>
                              </li>
                          @endif
                      @endforeach
                  </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>

    <!-- Page Content -->
    <div class="container">
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
            @if(count($joblink) > 0)
            @foreach($joblink->all() as $job)
            <div class="row">
                    <div class="col-lg-12 text-center">
                      <h1 class="mt-5">{{ $job->job_title }}</h1>
                      <p class="lead">{!! $job->job_description !!}<br></p>
                      <p>
                          <table align="center" border="1">
                              <tr>
                                  <td>Munkavégzés helye: </td><td>Típusa</td><td>Munkaidő</td><td>Szükséges szint</td>
                              </tr>
                              <tr>
                                  <td> {{ $job->job_place }} </td><td> {{ $job->job_type }} </td><td> {{ $job->job_time }} </td><td> {{ $job->job_level }} </td>
                              </tr>
                          </table>
                      </p>
                      <p class="lead">
                          Jó ha tudod: <br>
                          {!! $job->job_goodtoknow !!}
                      </p>
                      <ul class="list-unstyled">
                        <li><a href=' {{ url("/carrier") }} '>Vissza</a></li>
                        <li><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Jelentkezem</button></li>
                      </ul>
                    </div>
                  </div>
            @endforeach
        @endif
    </div>

    <!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
        @if(count($joblink) > 0)
            @foreach($joblink->all() as $job)
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Jelentkezés a {{ $job->job_title }} pozícióra</h4>
                </div>
                <div class="modal-body">
                    <form method="post" action=" {{ url('/carrier') }} " enctype="multipart/form-data">
                        @csrf
                    <p>
                        <input type="hidden" name="job_title" value=" {{ $job->job_title }} " />
                        Név: <br>
                        <input type="text" name="name" />
                    </p>
                    <p>
                        E-mail cím: <br>
                        <input type="email" name="email" />
                    </p>
                    <p>
                        Telefonszám: <br>
                        <input type="number" name="mobile" />
                    </p>
                    <p>
                        Fizetési igény: <br>
                        <input type="text" name="salary" />
                    </p>
                    <p>
                        Önéletrajz: <br>
                        <input type="file" name="resume" />
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-default">Send</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            @endforeach
        @endif
    </form>
    </div>

  </div>
</div>

    <!-- Bootstrap core JavaScript -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>

  </body>

</html>