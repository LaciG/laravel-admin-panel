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
        <meta name="Description" content="Teljeskörű termékfejlesztési- marketing és üzletfejlesztési szolgáltatások,  tapasztalt csapatunkkal segítünk elindítani újdonsült vállalkozásod vagy startupod!">
        <meta name="Keywords" content="">
        <meta name="robots" content="index, follow">
        <meta name="revisit-after" content="1 days">
        <meta name="author" content="Drukka Startup Studio">
        <meta property="og:image" content="https://drukka.hu/assets/img/drukka_thumbnail.jpg">
        <title>Drukka Startup Studio</title>
    
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

    <body id="startup">
        <!--NAVBAR-->
            @include('content.navbar')
        <!--NAVBAR END-->
        <!--HEADER-->
            @include('content.startup-header')
        <!--HEADER END-->
        <!--STARTUP INFOGRAPHY-->
            @include('content.startup-infography')
        <!--STARTUP INFOGRAPHY END-->
        <!-- METHODOLOGY -->
            @include('content.startup-methodology')
        <!-- METHODOLOGY END -->
        <!--GALLERY STARTUP-->
            @include('content.startup-awards')
        <!--GALLERY STARTUP END-->

        <!--FOOTER-->
        @include('content.footer')
        <!--FOOTER END-->

        <!-- import jQuery before materialize.js-->
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

	<!-- import materialize.js-->
	<script type="text/javascript" src="/js/materialize.min.js"></script>
	
	<!-- owl carousel -->
	<script src="/js/owl.carousel.min.js"></script>

	<!-- custom js -->
	<script type="text/javascript" src="/js/custom.js"></script>
	<script type="text/javascript" src="/js/contact-validation.js"></script>
	
	<!-- gallery js -->
	{{--  <script src="/js/gallery.js"></script>  --}}
	<!-- gallery js end -->
    </body>
</html>