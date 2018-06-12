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
                <meta name="Description" content="Marketing">
                <meta name="Keywords" content="Marketing">
                <meta name="robots" content="noindex, nofollow">
                <meta name="revisit-after" content="1 days">
                <meta name="author" content="Drukka Startup Studio">
                <meta property="og:image" content="https://drukka.hu/assets/img/drukka_thumbnail.jpg">
                <title>Drukka.hu marketing</title>
            
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
<body id="services-marketing" class="services-bg">
    <!--NAVBAR-->
        @include('content.navbar')
    <!--NAVBAR END-->

    <!-- header services -->
	<div id="services-header" class="services-header">
		<div id="services-text" class="services-header-text">
			<div class="col s12">
				<h1>
                    MARKETING
				</h1>
			</div>
		</div>
	</div>
    <!-- header-services end -->
    
    <!-- services-marketing -->
	<section id="gdpr-infografika">
		<div class="container">

			<div class="row">
				<div class="col s12 xl6 center"><img class="responsive-img" src="assets/svg/services/services-marketing-strategia.svg" alt="marketing stratégia">
				</div>
				<div class="col s12 xl6">
					<div class="">
						<h2>STRATEGY<span><div class="green-point"></div> MARKETING STRATÉGIA</span></h2>
						<p>Felépítjük online jelenléted. Megállapítjuk számodra hol érdemes hirdetni és mikor, milyen eszközök segítségével. Közösen meghatározzuk célcsoportod és segítünk buyer perszónák felállításában is.</p>
						<p>Összehangoljuk adwords és facebook kampányaidat, hírleveled és blogod. Megmutatjuk weboldalad hibáit és segítünk abban, hogy jobb tartalmat állíts elő közösségi média csatornáid számára.</p>
						<p><b>Nem csak a tervezésben, hanem a kivitelezésben is számíthatsz ránk!</b></p>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col s12 xl6 center hide-over-1200">
					<img class="responsive-img" src="/assets/svg/services/adwords_marketing-01.svg" alt="marketing adwords">
				</div>
				<div class="col s12 xl6">
					<div class="services-background-green">
						<h2>CAMPAIGN<span><div class="green-point"></div>ADWORDS KAMPÁNYOK | SEM</span></h2>
						<p><b>Úgy érzed, vevőid azonnali megoldást keresnek a problémájukra?</b> Akkor neked találták ki ezeket a kampányokat, árulj akár terméket vagy szolgáltatást. A Google hirdetések az egyik legelterjedtebb és leghatékonyabb eszköze a weboldalra történő forgalom terelésre.</p>
						<p>Mi az alapoktól indulva létrehozzuk hirdetéseidet majd folyamatosan mérjük és optimalizáljuk a lehető legjobb eredmény érdekében.</p>
						<p>Havonta kapsz egy összefoglaló elemzést arról, hogy hogyan teljesítettek a kampányaid.</p>
						<p>Az eddig felsorolt eszközökkel és kitartó munkával megnöveljük weboldalat látogatottságát és optimalizáljuk költségeidet.</p>
					</div>
				</div>
				<div class="col s12 xl6 center hide-under-1200">
					<img class="responsive-img" src="/assets/svg/services/adwords_marketing-01.svg" alt="marketing adwords">
				</div>
			</div>

			<div class="row">
				<div class="col s12 xl6 center"><img class="responsive-img" src="/assets/svg/services/services-marketing-analitics.svg" alt="marketing analitika">
				</div>
				<div class="col s12 xl6">
					<div class="">
						<h2>ANALITYCS<span><div class="green-point"></div>ANALITIKA ÉS ELEMZÉS</span></h2>
						<p>Weboldal nem lehet teljes forgalom- és konverzió mérések nélkül, ehhez pedig tökéletes platformok a Google Analytics és Tag Manager. Az analitikai eszközök segítségével átfogó képet kaphatunk befektetéseink megtérüléséről, valamint azonosíthatók a változtatást igénylő területek.</p>
						<p>Teljes személyre szabottság mellett mérhetők a weboldalon található gombok, így a mikro- elköteleződések száma is. Az E-Kereskedelmi modul segítségével pedig a webshopok teljesítménye is maximalizálható./p>
						<p>Végeredmény képpen az Analytics segítségével kulcsfontosságú adatokra tehetünk szert, amik nagy mértékben segítenek optimalizálni a weboldalunkat és hirdetéseinket egyaránt.</p>
					</div>
				</div>
			</div>

			<div class="row">
			<div class="col s12 xl6 center hide-over-1200">
					<img class="responsive-img" src="/assets/svg/services/services-marketing-social.svg" alt="marketing social">
				</div>
				<div class="col s12 xl6">
					<div class="services-background-green">
						<h2>SOCIAL MEDIA<span><div class="green-point"></div>SOCIAL</span></h2>
						<p><b>Teljes körű Facebook és Instagram menedzsment.</b></p>
						<p>Tartalom előállítás a maximumon: szövegezés, videós- és képi tartalmak készítése. Folyamatos moderáció mellett gondoskodunk a hirdetések megtervezéséről, elindításáról, és menedzseléséről.</p>
						<p>Megállás nélkül A/B tesztelünk, így támogatva a teljes optimalizálást. Influencer marketing keretein belül pedig a megfelelő véleményvezéreket keressük fel és vonjunk be a márkakommunikációba.</p>
						<p>Célunk, hogy segítsünk megtalálni a vállalkozásod számára optimális hirdetés költségeket, hogy növelhesd bevételed, valamint a megfelelő márkaüzenetek használatával fejleszthesd márkád imázsát.</p>
					</div>
				</div>
				<div class="col s12 xl6 center hide-under-1200">
					<img class="responsive-img" src="/assets/svg/services/services-marketing-social.svg" alt="marketing social">
				</div>
			</div>

		</div>
	</section>
	<!-- services-marketing end -->

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