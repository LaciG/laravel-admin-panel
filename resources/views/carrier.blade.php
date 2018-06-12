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
<body id="karrier">
    <!--NAVBAR-->
        @include('content.navbar')
    <!--NAVBAR END-->

    <!-- karrier -->
	<section id="karrier-content">
		<div class="container">
			<h2 class="center dijak">
                    RÓLUNK
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
			<div class="row center">
				<div class="col s12 m6 l3"><img class="responsive-img" src="/assets/img/karrier1.jpg" alt="Drukka csapat">
				</div>
				<div class="col s12 m6 l3"><img class="responsive-img" src="/assets/img/karrier2.jpg" alt="Drukka csapat">
				</div>
				<div class="col s12 m6 l3"><img class="responsive-img" src="/assets/img/karrier3.jpg" alt="Drukka csapat">
				</div>
				<div class="col s12 m6 l3"><img class="responsive-img" src="/assets/img/karrier4.jpg" alt="Drukka csapat">
				</div>
			</div>
			<div class="row">
                @if(count($joblist) > 0)
                    @foreach($joblist->all() as $job)
                        <div class="col offset-m1 m10 s12 offset-l3 l6">
                            <div class="card horizontal">
                                <div class="card-image">
                                    <img class="responsive-img" src="/assets/img/karrier-icon.png" alt="drukka karrier">
                                </div>
                                <div class="card-stacked">
                                    <div class="card-content">
                                        <h2 class="header">
                                            {{ $job->job_title }}
                                        </h2>
                                            {!! $job->job_description !!}
                                    </div>
                                    <div class="card-action">
                                        <a class="waves-effect waves-light btn zoldbtn" href=' {{ url("/carrier/{$job->id}") }} ' target="_blank">
                                            BŐVEBBEN
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
            <div class="row center">{{ $joblist->links() }}</div>
		</div>
	</section>
	<!-- karrier end-->

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
</body>
</html>