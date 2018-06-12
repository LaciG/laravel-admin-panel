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
                <meta name="Description" content="Webfejlesztés">
                <meta name="Keywords" content="Webfejlesztés">
                <meta name="robots" content="noindex, nofollow">
                <meta name="revisit-after" content="1 days">
                <meta name="author" content="Drukka Startup Studio">
                <meta property="og:image" content="https://drukka.hu/assets/img/drukka_thumbnail.jpg">
                <title>Drukka.hu webfejlesztés</title>
            
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
<body id="services-webdevelop" class="services-bg">
    <!--NAVBAR-->
        @include('content.navbar')
    <!--NAVBAR END-->

    <!-- header services -->
	<div id="services-header" class="services-header">
		<div id="services-text" class="services-header-text">
			<div class="col s12">
				<h1>
                    WEBFEJLESZTÉS
				</h1>
				<p>
			</div>
		</div>
	</div>
    <!-- header-services end -->
    
    <!-- services webdevelop -->
	<section id="gdpr-infografika">
		<div class="container">

			<div class="row">
				<div class="col s12 xl6 center"><img class="responsive-img" src="assets/svg/services/services-webdevelop-webdevelop.svg" alt="marketing stratégia">
				</div>
				<div class="col s12 xl6">
					<div class="">
						<h2>DEVELOPMENT<span><div class="green-point"></div>WEBFEJLESZTÉS</span></h2>
						<p><b>Tűnj ki honlapoddal a tömegből.</b></p>
						<p>Napjainkban elveszel a zajban, ha nem vagy jelen az online térben.</p>
						<p>Wordpress és egyedi weboldalakat készítünk, igényeid szerint testre szabva.</p>
						<p>Gondoskodunk róla, hogy megkapd a legprofibb bemutatkozást vállalkozásod részére, kizárólag a legmodernebb eljárásokkal és eszközökkel dolgozunk, a vállalkozásod igényeidhez igazítva.</p>
						<p>Mobile first metódus alapján reszponzív oldalakat készítünk.</p>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col s12 xl6 center hide-over-1200">
					<img class="responsive-img" src="assets/svg/services/services-webdevelop-webshop.svg" alt="marketing stratégia">
				</div>
				<div class="col s12 xl6">
					<div class="services-background-green">
						<h2>WEBSHOP<span><div class="green-point"></div>WEBÁRUHÁZ KÉSZÍTÉS</span></h2>
						<p><b>Hatékony és forgalomnövelő webáruházat készítünk a legmodernebb eszközökkel számodra.</b></p>
						<p>Mai világban igazán fontos egy jó és megbízható online áruház is üzletednek. Nyílt forráskódú rendszerekkel és eszközökkel dolgozunk, amit könnyedén szabadon tudunk módosítani, hogy minél jobban személyre szabhassuk neked, ami elengedhetetlen lesz számodra, hogy az üzleted pillanatok alatt a csúcsra juttathasd.</p>
						<p>A projekt átadása után is együttműködünk veled és szívesen segítünk bármiben.</p>
					</div>
				</div>
				<div class="col s12 xl6 center hide-under-1200">
					<img class="responsive-img" src="assets/svg/services/services-webdevelop-webshop.svg" alt="marketing stratégia">
				</div>
			</div>

			<div class="row">
				<div class="col s12 xl6 center"><img class="responsive-img" src="assets/svg/services/services-webdevelop-crm.svg" alt="marketing stratégia">
				</div>
				<div class="col s12 xl6">
					<div class="">
						<h2>CRM SYSTEM<span><div class="green-point"></div>CRM RENDSZEREK</span></h2>
						<p><b>Szabd egyedire már meglévő CRM rendszered vagy el is készíthetünk egy teljesen újat.</b></p>
						<p>A CRM rendszerek többsége nehezen átlátható, bonyolult, nehezen tanulható, de erre tudunk megoldást kínálni neked. Ugye neked se mindegy, hogyan tartod a kapcsolatot az ügyfelekkel, hogyan tudod őket kiszolgálni vagy éppen mennyi időt ölel fel egy ilyen rendszer adminisztrálása és kezelése.</p>
						<p>A megoldás egy teljesen egyedi ügyfélkapcsolat-kezelő felület kialakítása, ami teljesen a te igényeid alapján készül el. UX kutatóink felmérik neked, mire van szükséged és egy tökéletes rendszert tervezünk meg neked.</p>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col s12 xl6 center hide-over-1200">
					<img class="responsive-img" src="assets/svg/services/services-webdevelop-gdpr.svg" alt="marketing stratégia">
				</div>
				<div class="col s12 xl6">
					<div class="services-background-green">
						<h2>GDPR<span><div class="green-point"></div>GDPR FELKÉSZÍTÉS</span></h2>
						<p><b>Professzionális GDPR tanácsadás:</b></p>
						<p>Adatvagyon felmérés a jelenlegi adatkezelési folyamatok megismerése</p>
						<p>Adatvagyon-leltár elkészítése</p>
						<p>GDPR analízis, hiányosságok feltárása, szükséges módosítások összegyűjtése</p>
						<p>Szabályzat készítés</p>
						<p>Szükség esetén szoftver bevezetés</p>
					</div>
				</div>
				<div class="col s12 xl6 center hide-under-1200">
					<img class="responsive-img" src="assets/svg/services/services-webdevelop-gdpr.svg" alt="marketing stratégia">
				</div>
			</div>

		</div>
	</section>
	<!-- services webdevelop end -->
    
    <!--GALÉRIA-->
        @include('content.gallery')
    <!--GALÉRIA END-->

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
	<script type="text/javascript" src="/js/services-validation.js"></script>
    <!-- gallery js -->
    <script src="/js/gallery_lang.js"></script>
	<script src="/js/gallery.js"></script>
	<!-- gallery js end -->
</body>
</html>