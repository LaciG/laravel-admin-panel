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
                <meta name="Description" content="App fejlesztés">
                <meta name="Keywords" content="gdpr">
                <meta name="robots" content="noindex, nofollow">
                <meta name="revisit-after" content="1 days">
                <meta name="author" content="Drukka Startup Studio">
                <meta property="og:image" content="https://drukka.hu/assets/img/drukka_thumbnail.jpg">
                <title>Drukka.hu App fejlesztés</title>
            
            <!-- cookie -->
            <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.css" />
            <script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.js"></script>
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
<body id="services-app" class="services-bg">
    <!--NAVBAR-->
        @include('content.navbar')
    <!--NAVBAR END-->

    <!-- header services -->
	<div id="services-header" class="services-header">
		<div id="services-text" class="services-header-text">
			<div class="col s12">
				<h1>
                    APP FEJLESZTÉS
				</h1>
			</div>
		</div>
	</div>
	<!-- header-services end -->
    
    <!-- services app -->
	<section id="gdpr-infografika">
		<div class="container">

			<div class="row">
				<div class="col s12 xl6 center"><img class="responsive-img" src="assets/svg/services/services-app-application.svg" alt="app fejlesztés ikon">
				</div>
				<div class="col s12 xl6">
					<div class="">
						<h2>DEVELOPMENT<span><div class="green-point"></div>APP FEJLESZTÉS</span></h2>
						<p><b>Az elmúlt pár évben gyökeresen megváltoztak a tartalomfogyasztási szokások.</b></p>
						<p>A mobil átvette az uralmat és az elsőszámú képernyővé lépett elő az életünkbe. Egy mobil applikáció óriási segítség, és hatékony eszköz a vevőidért és felhasználóidért folytatott harcban. Bátran számíthatsz ránk iOS és Android mobil applikációk teljes körű fejlesztésében, a tervezéstől az üzemeltetésig. Két kedvenc platformunk, amire örömmel fejlesztünk. Külön megtervezve az Android és iOS verziót is.</p>
						<p>Mindkettőben rengeteg lehetőséget látunk és ezeket ki is aknázzuk.</p>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col s12">
					<div class="services-background-green">
						<h2 style="display: none">application<span><div class="green-point"></div>GARANCIA</span></h2>
						<p>Ezután folyamatos kapcsolattartással haladunk egészen a megvalósításig. Minden álltatunk fejlesztett applikációra 1 év garanciát adunk, ami a hibajavításokra és a rendszerszintű követelmények változásaira is kiterjed.</p>
						<p><b>Biztos sok helyen láttad már, hogy garancia, de mit is jelent ez pontosan?</b></p>
						<p><b>Minden applikációnkat nagyon körültekintően tervezzük meg, teszteljük, finomítjuk. Mint minden területen, itt is lehetnek változások az eszközökön, amiért valamelyik funkció módosításra szorul, vagy egyszerűen csak egy apróbb hiba kerülte el a figyelmünket. Az ilyen esetekre való tekintettel vállaljuk minden általunk fejlesztett applikáció esetében az 1 éves garanciát, hogy hosszú távon is maximális elégedettséget biztosíthassunk.</b></p>
					</div>
				</div>
			</div>

		</div>
	</section>
    <!-- services app end-->
    
    <!--GALÉRIA-->
        @include('content.gallery')
    <!--GALÉRIA END-->

    <!--FOOTER-->
        @include('content.footer')
    <!--FOOTER END-->

    <!-- import jQuery before materialize js-->
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

	<!-- owl carousel -->
	<script src="/js/owl.carousel.min.js"></script>

	<!-- import materialize js-->
	<script type="text/javascript" src="/js/materialize.min.js"></script>

	<!-- custom js -->
	<script type="text/javascript" src="/js/custom.js"></script>
	<script type="text/javascript" src="/js/services-validation.js"></script>
    <!-- gallery js -->
    <script src="/js/gallery_lang.js"></script>
	<script src="/js/gallery.js"></script>
	<!-- gallery js end -->
</body>
</html>