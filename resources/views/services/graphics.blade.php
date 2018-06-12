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
                <meta name="Description" content="Grafikai munkák">
                <meta name="Keywords" content="Grafikai munkák">
                <meta name="robots" content="noindex, nofollow">
                <meta name="revisit-after" content="1 days">
                <meta name="author" content="Drukka Startup Studio">
                <meta property="og:image" content="https://drukka.hu/assets/img/drukka_thumbnail.jpg">
                <title>Drukka.hu grafikai munkák</title>
            
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
<body id="services-graphic" class="services-bg">
    <!--NAVBAR-->
        @include('content.navbar')
    <!--NAVBAR END-->

    <!-- header services -->
	<div id="services-header" class="services-header">
		<div id="services-text" class="services-header-text">
			<div class="col s12">
				<h1>
                    GRAFIKAI MUNKÁK
				</h1>
				<p>
			</div>
		</div>
	</div>
	<!-- header-services end -->
    
    <!-- services graphic -->
	<section id="gdpr-infografika">
		<div class="container">

			<div class="row">
				<div class="col s12 xl6 center"><img class="responsive-img" src="assets/svg/services/services-graphic-webapp.svg" alt="grafika webapp">
				</div>
				<div class="col s12 xl6">
					<div class="">
						<h2>WEB&APP<span><div class="green-point"></div>WEB ÉS APP DESIGN</span></h2>
						<p><b>Tervezd meg velünk új weboldalad.</b></p>
						<p>Szakembereink a legújabb trendek szerint építik fel oldalad, úgy hogy az nem csak esztétikus, de könnyen kezelhető, felhasználóbarát is legyen.</p>
					</div>
				</div>
			</div>

			<div class="row">
			<div class="col s12 xl6 center hide-over-1200">
					<img class="responsive-img" src="assets/svg/services/services-graphic-logo.svg" alt="grafika logó">
				</div>
				<div class="col s12 xl6">
					<div class="services-background-green">
						<h2>BRANDING<span><div class="green-point"></div>LOGÓ ÉS ARCULAT</span></h2>
						<p><b>Tervezőgrafikusaink képesek vizuálisan megvalósítani azt, amit kommunikálni szeretnél.</b></p>
						<p><b>Elkészítjük vállalkozásod teljes arculatát és logóját is!</b></p>
					</div>
				</div>
				<div class="col s12 xl6 center hide-under-1200">
					<img class="responsive-img" src="assets/svg/services/services-graphic-logo.svg" alt="grafika logó">
				</div>
			</div>

			<div class="row">
				<div class="col s12 xl6 center"><img class="responsive-img" src="assets/svg/services/services-graphic-ux.svg" alt="grafika ux ui">
				</div>
				<div class="col s12 xl6">
					<div class="">
						<h2>USER FRIENDLY<span><div class="green-point"></div>UX UI</span></h2>
						<p><b>Felmérés, tervezés, tesztelés, véglegesítés.</b></p>
						<p>Felhasználóbarát weboldalak és mobil appok létrehozása, melyeket élmény használni. Te tudod, hogy milyen színű gombot kattintanak a leggyakrabban? Vagy, hogy melyik színnek mi az üzenete?</p>
					</div>
				</div>
			</div>

			<div class="row">
			<div class="col s12 xl6 center hide-over-1200">
					<img class="responsive-img" src="assets/svg/services/services-graphic-info.svg" alt="grafika infografika">
				</div>
				<div class="col s12 xl6">
					<div class="services-background-green">
						<h2>INFOGRAPHICS<span><div class="green-point"></div>INFOGRAFIKÁK KÉSZÍTÉSE</span></h2>
						<p><b>Száraz szöveg helyett mond el egy képben!</b></p>
						<p><b>Tedd érdekessé a tényeidet infografikáink segítségével.</b></p>
					</div>
				</div>
				<div class="col s12 xl6 center hide-under-1200">
					<img class="responsive-img" src="assets/svg/services/services-graphic-info.svg" alt="grafika infografika">
				</div>
			</div>

		</div>
	</section>
	<!-- services graphic end -->

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