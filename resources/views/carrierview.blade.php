<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
        <head>

                <!-- Import Google Icon Font -->
                <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
            
                <!-- Import materialize.css -->
                <link type="text/css" rel="stylesheet" href="/css/materialize.min.css" media="screen,projection"/>
            
                <!-- owl carousel -->
                <link rel="stylesheet" href="/css/owl.carousel.min.css">
                <link rel="stylesheet" href="/css/owl.theme.default.min.css">
            
                <!-- Custom CSS -->
                <link rel="stylesheet" href="/css/custom.css?v=1.23">
                <link rel="stylesheet" href="/css/gdpr.css?v=3.35">
                
                <!-- Animate CSS -->
                <link rel="stylesheet" href="/css/animate.css">
                
                <!-- Import font-awesome.css -->
                <link rel="stylesheet" href="/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
                        
                <!-- favicon -->
                <link rel="shortcut icon" href="/assets/img/favicon.ico" type="image/x-icon">
                <link rel="icon" href="/assets/img/favicon.ico" type="image/x-icon">
            
                <!-- Let browser know website is optimized for mobile -->
                <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
                <meta charset="utf-8">
                <meta name="Description" content="Kezd el karrieredet a Drukka Startup Studiónál.
                Dolgozz velünk együtt, a jövő sikeres startupjain! Fiatalos közeg, nagy önállóság és rengetek új kihívás!">
                <meta name="Keywords" content="">
                <meta name="robots" content="index, follow">
                <meta name="revisit-after" content="1 days">
                <meta name="author" content="Drukka Startup Studio">
                <meta property="og:image" content="https://drukka.hu/assets/img/drukka_thumbnail.jpg">
                <title>Drukka Startup Studio karrier</title>
            
            <!-- cookie -->
            <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.css" />
            <script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.js"></script>
            <!-- <script>
            window.addEventListener("load", function(){
            window.cookieconsent.initialise({
              "palette": {
                "popup": {
                  "background": "rgba(0, 0, 0, 0.8)",
                  "text": "#ffffff"
                },
                "button": {
                  "background": "rgba(184, 204 ,11, 0.8)",
                  "text": "#ffffff"
                }
              },
              "theme": "classic",
              "content": {
                "message": "A nagyobb felhasználói élmény érdekében sütiket (cookie-kat) használunk. A böngészés folytatásával jóváhagyod használatukat.",
                "dismiss": "Elfogadom!",
                "link": "Részletek",
                "href": "cookie-details"
              }
            })});
            </script> -->
            <script>
            window.addEventListener("load", function(){
            window.cookieconsent.initialise({
              "palette": {
                "popup": {
                  "background": "rgba(0, 0, 0, 0.8)",
                  "text": "#ffffff"
                },
                "button": {
                  "background": "rgba(184, 204 ,11, 0.8)",
                  "text": "#ffffff"
                }
              },
              "theme": "classic",
              "content": {
                "message": "A nagyobb felhasználói élmény érdekében sütiket (cookie-kat) használunk. A böngészés folytatásával jóváhagyod használatukat.",
                "dismiss": "Elfogadom!",
                "link": "Részletek",
                "href": "pdf/suti-tajekoztato.pdf"
              }
            })});
            </script>
            <!-- cookie end -->
            
            <!-- Google Tag Manager -->
            <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
            })(window,document,'script','dataLayer','GTM-W855H2');</script>
            <!-- End Google Tag Manager -->
            
            </head>
<body id="job">
    <!--NAVBAR-->
        @include('content.navbar')
    <!--NAVBAR END-->

    <!-- karrier -->
	<section id="karrier-content">
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
		<div class="container">
			<h2 class="center dijak">
                    {{ $job->job_title }}
			</h2>
			<div class="row">
				<div class="col offset-s5 s2">
					<hr>
					<div class="green-point-center"></div>
				</div>
			</div>
			<p class="karrier-text">
                Tapasztalt, lendületes startup építő csapat vagyunk. Olyan új termékeket és cégeket építünk, melyek pozitív változást hoznak. Olyan csapattagokat keresünk, akik vonzódnak a technológiai újításokhoz, és egy fiatalos közegben, nagy önállóság mellett szeretnének részt venni az építkezésben. Nálunk csak mélyvíz van, abban viszont együtt úszunk.
			</p>
			<div class="row">
				<div class="col offset-m1 m10 s12 offset-l0 l12">
					<div class="card horizontal">
						<div class="card-image">
							<img class="responsive-img" src="/assets/img/karrier-icon.png">
						</div>
						<div class="card-stacked">
							<div class="card-content">
								<h2 class="header">
                                   Munka Leírás
								</h2>
                                <p>
                                    {!! $job->job_description !!}
                                </p>
								<p>
									<table class="details-table">
										<tr>
											<th>Munkavégzés helye:</th>
											<th>Típusa:</th>
											<th>Munkaidő:</th>
											<th>Szükséges szint:</th>
										</tr>
                                        <tr>
                                            <td>{!! $job->job_place !!}</td>
                                            <td>{!! $job->job_type !!}</td>
                                            <td>{!! $job->job_time !!}</td>
                                            <td>{!! $job->job_level !!}</td>
                                        </tr>
                                    </table>
									<table class="m-details-table">
										<tr>
                                            <th>Munkavégzés helye:</th>
											<td>{!! $job->job_place !!}</td>
										</tr>
										<tr>
                                            <th>Típusa:</th>
											<td>{!! $job->job_type !!}</td>
										</tr>
										<tr>
                                            <th>Munkaidő:</th>
											<td>{!! $job->job_time !!}</td>
										</tr>
										<tr>
                                            <th>Szükséges szint:</th>
											<td>{!! $job->job_level !!}</td>
										</tr>
                                    </table>
								</p>
                                
                                <!-- P be kerül -->
                                {!! $job->job_goodtoknow !!}
                                <!-- P be kerül -->
							</div>
							
							<div class="card-action">
                             <button data-target="modal1" class="right waves-effect waves-light btn zoldbtn modal-trigger" data-toggle="modal" data-target="#modalForm">
									Jelentkezés
								</button>
							</div>
							
						</div>
					</div>
				</div>
				
			</div>
        </div>
        @endforeach
    @endif
	</section>
	<!-- karrier end-->

  <!-- Modal Structure -->
  <div id="modal1" class="modal">
    <div class="modal-content">
            @if(count($joblink) > 0)
            @foreach($joblink->all() as $job)
            <form method="post" action=" {{ url('/carrier') }} " enctype="multipart/form-data">
                @csrf
            <h4 class="modal-title">Jelentkezés a {{ $job->job_title }} pozícióra</h4>
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
      <p>
				<input type="checkbox" id="cv_cb" name="cv_cb" required/>
				<label for="cv_cb">Megismertem és elfogadom az <a href="/pdf/adatvedelmi-tajekoztato.pdf" target="_blank">adatkezelési szabályzatot</a>.</label>
      </p>
    </div>
    <div class="modal-footer">
            <button type="submit" class="btn btn-default">Küldés</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
    @endforeach
    @endif
    </form>
  </div>

    <!--NEWSLETTER-->
        @include('content.newsletter')
    <!--NEWSLETTER END-->
    <!--FOOTER-->
        @include('content.footer')
    <!--FOOTER END-->
    
    <!-- import jQuery before materialize.js-->
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

	<!-- owl carousel -->
	<script src="/js/owl.carousel.min.js"></script>

	<!-- import materialize.js-->
	<script type="text/javascript" src="/js/materialize.min.js"></script>

	<!-- custom js -->
	<script type="text/javascript" src="/js/custom.js"></script>
  <script type="text/javascript" src="/js/contact-validation.js"></script>

    <script>
  $(document).ready(function(){
    // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
    $('.modal').modal({
      dismissible: true, // Modal can be dismissed by clicking outside of the modal
      opacity: .5, // Opacity of modal background
      inDuration: 300, // Transition in duration
      outDuration: 200, // Transition out duration
      startingTop: '4%', // Starting top style attribute
      endingTop: '12%', // Ending top style attribute
      ready: function(modal, trigger) { // Callback for Modal open. Modal and trigger parameters available.
        // alert("Ready");
        console.log(modal, trigger);
      },
    //   complete: function() { alert('Closed'); } // Callback for Modal close
    }
  );
  });
</script>
</body>
</html>