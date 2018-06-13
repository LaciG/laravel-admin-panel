<!DOCTYPE html>
<html llang="{{ app()->getLocale() }}">
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
            <meta name="Description" content="GDPR">
            <meta name="Keywords" content="gdpr">
            <meta name="robots" content="noindex, nofollow">
            <meta name="revisit-after" content="1 days">
            <meta name="author" content="Drukka Startup Studio">
			<meta property="og:image" content="https://drukka.hu/assets/img/drukka_thumbnail.jpg">
			<meta name="csrf-token" content="{{ csrf_token() }}">
            <title>Drukka.hu GDPR</title>
        
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
		
		<script type="text/javascript">
			var secure_token = '{{ csrf_token() }}';
		</script>
        
        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-W855H2');</script>
        <!-- End Google Tag Manager -->
        
</head>
<body id="gdpr">
    <!--NAVBAR-->
        @include('content.navbar')
    <!--NAVBAR END-->
    
    <!-- gdpr -->
	<section id="karrier-content">
		<div class="container">
			<h2 class="center dijak">
				információ és adatvédelmi szolgáltatás - gdpr
			</h2>
		


			<div class="row">
				<div class="col offset-s5 s2">
					<hr>
					<div class="green-point-center"></div>
				</div>
			</div>
			<div class="row gdpr-margin-bottom-zero">
				<div class="col m10 offset-m1">
					<p class="karrier-text gdpr-text">
						Minden, személyes adatot kezelő és tároló cégnek <b>2018. május 25-től</b> meg kell felelni<br>az Európai Adatvédelmi Rendelet (GDPR) előírásainak!
					</p>
				</div>
			</div>
			<div class="row">
				<div class="col m6 offset-m3">
					<p class="gdpr-text uppercase center-align"><span class="red-text"><b>Önt is érinti?</b></span> <b>Sikerült felkészülnie?</b>
					</p>
					<p class="gdpr-text center-align">Szánjon rá pár percet és gondolja át:</p>
				</div>
			</div>
			<div class="row">
				<div class="col m4 right-align">
					<img class="responsive-img question-mark-img audit-packages-img-width" src="/assets/svg/gdpr/icon-question-mark.svg" alt="question mark icon">
				</div>
				<div class="col m6">
					<ul class="gdpr-ul">
						<li>
							<div class="green-point-small"></div>
							<div class="li-text"><b>Van legalább egy munkavállalója?</b>
							</div>
						</li>
						<li>
							<div class="green-point-small"></div>
							<div class="li-text"><b>Kezel és tárol személyes adatokat</b> – tudja garantálni ezek <b>biztonságát</b> és a <b>hozzáférést?</b>
							</div>
						</li>
						<li>
							<div class="green-point-small"></div>
							<div class="li-text">Ismeri a <b>jogi kötelezettségeket</b>, van <b>adatkezelési hozzájárulása?</b>
							</div>
						</li>
						<li>
							<div class="green-point-small"></div>
							<div class="li-text">Van jogszabály által előírt <b>Adatvédelmi Szabályzata?</b>
							</div>
						</li>
						<li>
							<div class="green-point-small"></div>
							<div class="li-text"><b>Tudja, hogy az Adatvédelmi Szabályzat</b> és az <b>adatvédelmi biztos</b> kijelölésével önmagában nem teljesítette még az elvárásokat?</div>
						</li>
						<li>
							<div class="green-point-small"></div>
							<div class="li-text">Tudja, hogy a jogszabályi előírások be nem tartása esetén Ön <b>akár 20.000.000 euróig terjedő bírságot kaphat?</b>
							</div>
						</li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="col m10 offset-m1">
					<p class="karrier-text gdpr-text">
                        Bár a határidő nagyon közeli, aggodalomra nincs oka!
                    </p>
					<p>
                        TÜV-minősítésű szakembereink és <b>rugalmas audit-szolgáltatáscsomagjaink</b> között könnyen megtalálhatja az Önnek legkedvezőbbet!
					</p>
					<p class="karrier-text center">
						<b>Kérje ajánlatunkat még ma!</b>
					</p>
					<p class="karrier-text gdpr-text">Az adatvédelem bevezetésével Ön nem csak a törvényi előírásoknak tesz eleget, hanem biztonságosabb üzletmenetet is kialakíthat, partnerei számára jelzi a biztonság iránti elkötelezettségét, így növeli a vállalkozása iránti bizalmat is!</p>
				</div>
			</div>

			<h2 class="center dijak">
				ajánlataink
			</h2>
			<div class="row">
				<div class="col offset-s5 s2">
					<hr>
					<div class="green-point-center"></div>
				</div>
			</div>
			<div class="row">

				<div class="center-align">
					<img class="responsive-img audit-packages-img-width" src="/assets/svg/gdpr/data-protection-delegate.svg" alt="data protection delegate icon">
				</div>
				<h3 class="karrier-text">
					<b>ADATVÉDELMI KÉPVISELŐ (Szakemberkihelyezés)</b>
				</h3>
			

				<div class="col m10 offset-m1">
					<p class="karrier-text gdpr-text">
						Minden vállalatméret és forma számára javasolt! TÜV minősített szakemberünk szerződéskötéskor elvégzi/irányítja a GDPR auditot, majd havi díjazás ellenében (min. 1 évig) gondoskodik annak szinten tartásáról, védi cége érdekeit és képviseli Önöket a hatóság felé.
					</p>
					
				</div>
			</div>
			<div class="row gdpr-margin-bottom-50">
				<div class="center-align">
					<img class="responsive-img audit-packages-img-width" src="/assets/svg/gdpr/audit-packages.svg" alt="audit packages icon">
				</div>
				<h3 class="karrier-text">
					<span class="gdpr-text red-text"> <b>Vagy válasszon időszakos csomagjaink közül.</b></span>
				</h3>
			</div>
		</div>
		<div class="audit-packages">

			<div class="audit-packages-div">
				<div class="audit-packages-type">GDPR LIGHT *</div>
				
				<ul>
					<li>
						<i class="fa fa-check"></i>
						<div class="audit-packages-text"> Feltárjuk a jelenlegi és elvárt rendszer közötti különbségeket.
						</div>
					</li>
					<li><i class="fa fa-check"></i><div class="audit-packages-text"> Ajánlásokat adunk a fejlesztésekre vonatkozóan.</li>
					<li><i class="fa fa-check"></i><div class="audit-packages-text"> Adatvédelmi oktatás.</li>
					<li><i class="fa fa-check"></i><div class="audit-packages-text"> Adatvédelmi Szabályzatot készítünk a vállalkozásra szabva.</li>
				</ul>
				<hr class="audit-packages-hr">
				<p class="audit-packages-price">144.000 Ft-tól</p>
				<p class="audit-packages-light"><small>* KKV-k számára ajánlott szolgáltatás</small></p>
			</div>

			<div class="audit-packages-div">
				<div class="audit-packages-type">GDPR STANDARD</div>
				
				<ul>
					<li><i class="fa fa-check"></i><div class="audit-packages-text"> Tartalmazza a <span class="audit-packages-text-green">GDPR LIGHT</span> csomagot.</div> </li>
					<li><i class="fa fa-plus"></i><div class="audit-packages-text"> Előre egyeztetett időpontban átvizsgáljuk az új rendszert.</div></li>
				</ul>
				<hr class="audit-packages-hr">
				<p class="audit-packages-price">216.000 Ft-tól</p>
				<p class="audit-packages-light"> </p>
			</div>

			<div class="audit-packages-div">
				<div class="audit-packages-type">GDPR Enterprise</div>
				<ul>
					<li><i class="fa fa-check"></i><div class="audit-packages-text"> Tartalmazza a <span class="audit-packages-text-green">GDPR LIGHT</span> és <span class="audit-packages-text-green">GDPR STANDARD</span> csomagokat.</div></li>
					<li><i class="fa fa-plus"></i><div class="audit-packages-text"> Segítünk kidolgozni a végrehajtandó feladatokat.</div></li>
				</ul>
				<hr class="audit-packages-hr">
				<p class="audit-packages-price">288.000 Ft-tól</p>
				<p class="audit-packages-light"> </p>
			</div>

			<div class="audit-packages-div">
				<div class="audit-packages-type">GDPR KÖVETÉS *</div>
				<ul>
					<li><i class="fa fa-check"></i><div class="audit-packages-text"> Alkalmi követést biztosítunk egy adott időpontban,</div></li>
					<li><i class="fa fa-check"></i><div class="audit-packages-text"> Változások lekövetését, szükség szerint új adatkezelési folyamatok kialakítását, új belépők oktatását vállaljuk.</div></li>
				</ul>
				<hr class="audit-packages-hr">
				<p class="audit-packages-price">72.000 Ft-tól</p>
				<p class="audit-packages-light"><small>* Szolgáltatásunk a GDPR Light, Standard és Teljes csomaghoz kapcsolható</small></p>
			</div>
		</div>
	</section>
    <!-- gdpr end-->
    
	<!-- calculator -->
	<section id="calculator">
		<h2 class="center dijak ">
				költségkalkulátor
			</h2>
		<div class="row">
			<div class="col offset-s5 s2">
				<hr>
				<div class="green-point-center"></div>
			</div>
		</div>
		<!-- Ide jönnek a hibaüzenetek -->

		<div class="row">
			<div class="col s12 m8 offset-m2">
				<div class="calculator-div">
					<form method="post">
							<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<input type="hidden" name="function" value="calculate">
						<div class="calculator-icon"><img src="" alt="">
						</div>
						<div class="col s12 xl7">
							<div class="input-field">
								<select name="workers" id="workers" required>
									<option value="" disabled selected>Válasszon!</option>
									<option value="Kevesebb mint 30">Kevesebb mint 30</option>
									<option value="31-249">31-249</option>
									<option value="Több mint 249">Több mint 249</option>
								</select>
								<label>Hány alkalmazottja van az önök cégének/szervezetének?</label>
							</div>
							<div class="input-field">
								<select id="clients">
									
								</select>
								<label>Hány ügyfele van az önök cégének/szervezetének?</label>
							</div>
							<div class="input-field">
								<select name="industry" id="industry" required>
									<option value="" disabled selected>Válasszon!</option>
									<option value="Államigazgatás">Államigazgatás</option>
									<option value="Egészségügy">Egészségügy</option>
									<option value="Jog">Jog</option>
									<option value="Pénzügy">Pénzügy</option>
									<option value="Energetika">Energetika</option>
									<option value="Telekommunikáció">Telekommunikáció</option>
									<option value="Gyógyszeripar">Gyógyszeripar</option>
									<option value="Élelmiszeripar">Élelmiszeripar</option>
									<option value="Közműszolgáltatás">Közműszolgáltatás</option>
									<option value="Informatika">Informatika</option>
									<option value="Közlekedés">Közlekedés</option>
									<option value="Kereskedelem">Kereskedelem</option>
									<option value="Logisztika">Logisztika</option>
									<option value="Egyéb">Egyéb</option>
								</select>
								<label>Milyen iparágban tevékenykedik az önök cége/szervezete?</label>
							</div>
							<div class="input-field">
								<select name="process" id="process" required>
									<option value="" disabled selected>Válasszon!</option>
									<option value="Igen">Igen</option>
									<option value="Nem">Nem</option>
								</select>
								<label>Utasításokkal szabályzottak a belső folyamatok?</label>
							</div>
						</div>
						<div class="col s12 xl5">
							<div class="calculator-checkbox">
								<label>Önálló szervezetként működik-e?</label>
								<p>
									<input type="checkbox" id="checkbox-law" name="law" value="Jog"/>
									<label for="checkbox-law">a Jog</label>
								</p>
								<p>
									<input type="checkbox" id="checkbox-human" name="hr" value="Hr"/>
									<label for="checkbox-human">a Humánerőforrás/HR</label>
								</p>
								<p>
									<input type="checkbox" id="checkbox-payroll" name="payroll" value="Bérszámfejtés"/>
									<label for="checkbox-payroll">a Bérszámfejtés</label>
								</p>
								<p>
									<input type="checkbox" id="checkbox-it" name="it" value="Informatika"/>
									<label for="checkbox-it">az Informatika</label>
								</p>
							</div>
							<div class="input-field">
								<select name="incident" id="incident" required>
									<option value="" disabled selected>Válasszon!</option>
									<option value="Igen, és a terveinket folyamatosan teszteljük, és aktualizáljuk">Igen, és a terveinket folyamatosan teszteljük, és aktualizáljuk</option>
									<option value="Igen, de a vonatkozó terveink elavultak">Igen, de a vonatkozó terveink elavultak</option>
									<option value="Nem, de tervezzük egy ilyen megoldás bevezetését">Nem, de tervezzük egy ilyen megoldás bevezetését</option>
									<option value="Nem">Nem</option>
									<option value="Egyéb">Egyéb</option>
								</select>
								<label class="incident">Az Önök incidenskezelési terve (BCP/DRP/…) 
									rendelkezik-e a krízishelyzet esetén történő 
									kommunikáció módjáról és felelőseiről?
								</label>
							</div>	
						</div>
						<div class="row">
						<div class="input-field col s12 xl6 offset-xl3">
							<select name="package" id="package" required>
								<option value="" disabled selected>Válasszon!</option>
								<option value="Light">GDPR LIGHT</option>
								<option value="Standard">GDPR STANDARD</option>
								<option value="Enterprise">GDPR Enterprise</option>
								<option value="Követés">GDPR KÖVETÉS</option>
								<option value="DPO">ADATVÉDELMI FELELŐS KIHELYEZÉS</option>
							</select>
							<label>Melyik csomagunkra kéri az ajánlatot?</label>
						</div></div>
						<div class="row hide">
							<div class="col s12 l6 offset-l3">
								<div class="input-field">
									<input id="gdpr-email" type="email" class="validate">
									<label for="gdpr-email" data-error="wrong" data-success="right">Kérlek add meg az emailcímed</label>
								</div>
							</div>
						</div>
						<div class="row center-align">
							<a type="button" href="#kalkulator" class="btn waves-effect waves-light zoldbtn" id="sending">SZÁMÍTÁS</a>
						</div>	
					</form>
					<span id="error-message" class="calculator-error-message"></span>

					<section id="kalkulator">
						<div class="calculator-result-div">			
							<div class="followprice-js">
								<div class="calculator-result-div-inner">
									<p class="calculator-title">1x követési díj</p>
									<p class="calculator-price result"><span id="follow_price"></span> FT/HÓ</p>
								</div>
								<hr>
							</div>
							<h3 class="karrier-text">
								<b>VÁLASZTOTT CSOMAG</b>
							</h3>
							<div class="calculator-result-div-inner">
								<p class="calculator-title"><span id="package-name"></span> csomag</p>
								<p class="calculator-price"><span id="standard-price"></span> FT</p>
							</div>
						</div>
						<div class="sending center-align">
				
				<div class="row">
					<div class="col s12 l6 offset-l3">
						<form method="post" id="gdpr-sending-form">
							<input type="hidden" name="mail_send" value="send_mail_with_data">

							<input type="hidden" id="workers_data" name="workers_data"  value=""/>
							<input type="hidden" id="clients_data" name="clients_data"  value=""/>
							<input type="hidden" id="industry_data" name="industry_data"  value=""/>
							<input type="hidden" id="process_data" name="process_data"  value=""/>
							<input type="hidden" id="law_data" name="law_data"  value=""/>
							<input type="hidden" id="hr_data" name="hr_data"  value=""/>
							<input type="hidden" id="payroll_data" name="payroll_data"  value=""/>
							<input type="hidden" id="it_data" name="it_data"  value=""/>
							<input type="hidden" id="incident_data" name="incident_data"  value=""/>

							<input type="hidden" id="pack_name" name="pack_name"  value=""/>
							<input type="hidden" id="pack_price" name="pack_price" value="" />
							<input type="hidden" id="fol_price" name="fol_price" value="" />
							<hr>
							<img id="gdpr-sending-icon" src="assets/img/gdpr-sending-icon.png" alt="gdpr mail icon">
								
								<div class="col s12">
									<div class="input-field">
										<input id="gdpr-sending-company-name-calculator" name="company_name" type="text" class="validate" required>
										<label for="sending-company-name-calculator" data-error="Érvénytelen formátum" data-success="Rendben">Cégnév</label>
									</div>
								</div>
								<div id="gdpr-sending-company-name-error" class="gdpr-error"></div>
								
								<div class="col s12">
									<div class="input-field">
										<input id="gdpr-sending-contact-name-calculator" name="contact_name" type="text" class="validate" required>
										<label for="sending-contact-name-calculator" data-error="Érvénytelen formátum" data-success="Rendben">Kapcsolattartó</label>
									</div>
								</div>
								<div id="gdpr-sending-contact-name-error" class="gdpr-error"></div>
								
								<div class="col s12">
									<div class="input-field">
										<input id="gdpr-sending-email-calculator" name="email" type="email" class="validate" pattern="[^ @]+@[^ @]+\.[^ @]+" required>
										<label for="sending-email-calculator" data-error="Érvénytelen formátum" data-success="Rendben">Email</label>
									</div>
								</div>
								<div id="gdpr-sending-email-error" class="gdpr-error"></div>	
							
								<div class="col s12">
									<div class="input-field">
										<input id="gdpr-sending-tel-calculator" name="mobile" type="tel" pattern="[0-9+]{1,30}" class="validate" required>
										<label for="sending-tel-calculator" data-error="Érvénytelen formátum" data-success="Rendben">Telefon</label>
									</div>
								</div>
								<div id="gdpr-sending-tel-error" class="gdpr-error"></div>
							 
								<div class="adatvedelmi-nyilatkozat-aszf-checkbox">
									<p>
										<input type="checkbox" id="checkbox-adatvedelmi-nyilatkozat2" required/>
										<label for="checkbox-adatvedelmi-nyilatkozat2">Elfogadom az <a href="/pdf/adatvedelmi-tajekoztato.pdf" target="_blank">adatvédelmi-nyilatkozat</a> -ot.</label>
									</p>
									<p>
										<input type="checkbox" id="checkbox-aszf2" required/>
										<label for="checkbox-aszf2">Elfogadom az <a href="/pdf/aszf.pdf" target="_blank">általános szerződési feltételeket (ÁSZF)</a>.</label>
									</p>
								</div>
							
							<div class="row center-align">
								<a type="button" id="sending-submit-with-data" class="btn waves-effect waves-light zoldbtn">KÜLDÉS</a>
							</div>
							<h3 id="success-with-data"></h3>
						</form>
					</div>
 			 </div>
			</div>
					</section>
				</div>
			</div>
		</div>
		
		<div id="contact-form" class="container">
			
			<div class="row">
				<h3 class="karrier-text">
						<b>ADATOK MEGADÁSA A KIÉRTÉKELÉS ELKÜLDÉSÉHEZ</b>
					</h3>
					<div class="col m10 offset-m1">
						<p class="karrier-text gdpr-text">
							Minden vállalatméret és forma számára javasolt! TÜV minősített szakemberünk szerződéskötéskor elvégzi/irányítja a GDPR auditot, majd havi díjazás ellenében (min. 1 évig) gondoskodik annak szinten tartásáról, védi cége érdekeit és képviseli Önöket a hatóság felé.
						</p>
					</div>
			</div>
			
			<div class="sending center-align">
				
				<div class="row">
					<div class="col s12 l6 offset-l3">
						<form method="post" id="gdpr-sending-form">
							<input type="hidden" name="mail_send" value="send_mail_no_data">
							
							<img id="gdpr-sending-icon" src="assets/img/gdpr-sending-icon.png" alt="gdpr mail icon">
								
								<div class="col s12">
									<div class="input-field">
										<input id="gdpr-sending-company-name" name="company_name" type="text" class="validate" required>
										<label for="sending-company-name" data-error="Érvénytelen formátum" data-success="Rendben">Cégnév</label>
									</div>
								</div>
								<div id="gdpr-sending-company-name-error" class="gdpr-error"></div>
								
								<div class="col s12">
									<div class="input-field">
										<input id="gdpr-sending-contact-name" name="contact_name" type="text" class="validate" required>
										<label for="sending-contact-name" data-error="Érvénytelen formátum" data-success="Rendben">Kapcsolattartó</label>
									</div>
								</div>
								<div id="gdpr-sending-contact-name-error" class="gdpr-error"></div>
								
								<div class="col s12">
									<div class="input-field">
										<input id="gdpr-sending-email" name="email" type="email" class="validate" pattern="[^ @]+@[^ @]+\.[^ @]+" required>
										<label for="sending-email" data-error="Érvénytelen formátum" data-success="Rendben">Email</label>
									</div>
								</div>
								<div id="gdpr-sending-email-error" class="gdpr-error"></div>	
							
								<div class="col s12">
									<div class="input-field">
										<input id="gdpr-sending-tel" name="mobile" type="tel" pattern="[0-9+]{1,30}" class="validate" required>
										<label for="sending-tel" data-error="Érvénytelen formátum" data-success="Rendben">Telefon</label>
									</div>
								</div>
								<div id="gdpr-sending-tel-error" class="gdpr-error"></div>
							 
								<div class="adatvedelmi-nyilatkozat-aszf-checkbox">
									<p>
										<input type="checkbox" id="checkbox-adatvedelmi-nyilatkozat" required/>
										<label for="checkbox-adatvedelmi-nyilatkozat">Elfogadom az <a href="/pdf/adatvedelmi-tajekoztato.pdf" target="_blank">adatvédelmi-nyilatkozat</a> -ot.</label>
									</p>
									<p>
										<input type="checkbox" id="checkbox-aszf" required/>
										<label for="checkbox-aszf">Elfogadom az <a href="/pdf/aszf.pdf" target="_blank">általános szerződési feltételeket (ÁSZF)</a>.</label>
									</p>
								</div>
							
							<div class="row center-align">
								<a type="button" id="sending-submit-no-data" class="btn waves-effect waves-light zoldbtn">KÜLDÉS</a>
							</div>
							<h3 id="success"></h3>
						</form>
					</div>
 			 </div>
			</div>
			
		</div>
		
	</section>
    <!-- calculator end -->
    
    <!--FOOTER-->
	<div id="footer" class="hide-on-med-and-down">
			<footer id="footer-gdpr" class="page-footer">
				<div class="container">
					<div class="row">
						<div class="col s12 m6 l3">
							<h5 class="footer-heading">drukka kft.</h5> <address>        1138 Budapest,<br>        Váci út 168/A<br>        <a href="tel:+3612692718">Tel.: +36 1 269 2718</a><br>          Fax: +36 1 269 2722<br>        <a href="mailto:info@drukka.hu">Mail: info@drukka.hu</a>        </address> </div>
						<div class="col s12 m6 l3">
							<h5 class="footer-heading">Drukka America Inc.</h5> <address>        1001 N. Federal Hwy, Suite 350,<br>        Hallandale, FL-33009<br>        <a href="tel:+19544163366">Tel.: +1 954 416 3366</a><br>        <a href="mailto:info@drukka.com">Mail: info@drukka.com</a><br>        </address>
						</div>
						<div class="col s12 m6 l4">
							<h5 class="footer-heading">InnoWEB Solutions S.R.L.</h5> <address>        540331 Targu Mures,<br>Str. Mihail Eminescu<br>Nr.55, jud. Mures, Romania<br>        <a href="tel:+4036542443">Tel.: (+4) 0365-424-43</a><br>        <a href="mailto:info@innoweb.ro">Mail: info@innoweb.ro</a><br>        </address>
						</div>
						<div class="col s12 m6 l2">
							<h5 class="footer-heading">Linkek</h5>
							<ul>
								<li class="hide">
									<a class="grey-text text-lighten-3" href="/">
										menü </a>
								</li>
								<li>
									<a class="grey-text text-lighten-3" href="/startup">
										menü</a>
								</li>
								<li>
									<a class="grey-text text-lighten-3" href="/karrier">
										menü </a>
								</li>
								<li>
									<a class="grey-text text-lighten-3" href="/blog">
										menü
									</a>
								</li>
								<li>
									<a class="grey-text text-lighten-3" href="/szolgaltatas-marketing">
										menü
									</a>
								</li>
								<li>
									<a class="grey-text text-lighten-3" href="/szolgaltatas-app">
										menü
									</a>
								</li>
								<li class="hide">
									<a class="grey-text text-lighten-3" href="/szolgaltatas-grafika">
										menü
									</a>
								</li>
								<li>
									<a class="grey-text text-lighten-3" href="/szolgaltatas-webfejlesztes">
										menü
									</a>
								</li>
								<li>
									<a class="grey-text text-lighten-3" href="/gdpr">
									GDPR
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="footer-copyright">
					<div class="container"> © 2011-<?php echo date("Y"); ?> Drukka.hu – Minden jog fenntartva – <a href="/pdf/aszf.pdf" target="_blank">ÁSzF</a> - <a href="/pdf/adatvedelmi-tajekoztato.pdf" class="aszf-link" target="_blank">Adatvédelmi nyilatkozat</a> - <a href="/pdf/suti-tajekoztato.pdf" class="aszf-link" target="_blank">Süti Szabályzat</a> <a target="_blank" class="grey-text text-lighten-4" href="https://www.linkedin.com/company/3729065/"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a> <a target="_blank" class="grey-text text-lighten-4" href="https://www.instagram.com/drukka_startup/"><i class="fa fa-instagram" aria-hidden="true"></i></a> <a target="_blank" class="grey-text text-lighten-4" href="https://www.facebook.com/Drukka-Startup-Studio-986116881423763/?fref=ts"><i class="fa fa-facebook" aria-hidden="true" style="padding: 5px 10px 5px 8px;"></i></a> </div>
				</div>
				<div class="container center">
						<div class="row" style="margin-bottom: 0px;">
							<p>Együttműködő partner: <a target="_blank" class="intellitext-logo" href="http://intellitext.hu/"><img src="../assets/img/intellitext-logo2.png" height="25"></a></p>
						</div>
				</div>
			</footer>
		</div>
		<footer id="m-footer-gdpr" class="page-footer hide-on-large-only">
			<div class="row hide">
				<form class="col s12 center" id="kapcsolat" name="kapcsolat" method="post" action="">
					<h2 class="center dijak-white">
						KAPCSOLAT </h2>
					<div class="row">
						<div class="input-field col s12 m6"> <input id="name2m" type="text" class="validate" name="name" pattern="(^[A-Za-záéiíoóöőuúüűÁÉIÍOÓÖŐUÚÜŰä&]{3,20})([ ]{0,1})([A-Za-záéiíoóöőuúüűÁÉIÍOÓÖŐUÚÜŰä&]{0,20})" required>
							<label for="name2m">
								Név </label> <span class="error-message text-danger"></span> </div>
						<div class="input-field col s12 m6"> <input id="email2m" type="email" class="validate" name="email" pattern="[^ @]+@[^ @]+\.[^ @]+" required>
							<label for="email2m">
								E-mail cím </label> <span class="error-message text-danger"></span> </div>
					</div>
					<div class="row">
						<div class="input-field col s12 m6"> <input id="telm" type="number" class="validate" name="mobile" maxlength="25" pattern="[+0-9]{1,25}" required>
							<label for="tel">
								Telefonszám </label> <span class="error-message text-danger"></span> </div>
						<div class="input-field col s12 m6"> <input id="targym" type="text" class="validate" maxlength="40" name="subject" pattern="(^[0-9A-Za-záéiíoóöőuúüűÁÉIÍOÓÖŐUÚÜŰä&]{3,20})([ ]{0,1})([0-9A-Za-záéiíoóöőuúüűÁÉIÍOÓÖŐUÚÜŰä&]{0,20})" required>
							<label for="targy">
								Tárgy </label> <span class="error-message text-danger"></span> </div>
					</div>
					<div class="row left-align"> <label id="uzenet-labelm" for="uzenet">Üzenet</label>
						<div class="input-field col s12"> <textarea id="uzenetm" class="materialize-textarea" name="message" maxlength="290" required></textarea> <span class="error-message text-danger"></span> </div>
					</div>
					<div class="row">
						<div class="input-field col s12"> <input id="" type="checkbox" class="" name="" required>
							<label for="">
								<?php echo "Megismertem és elfogadom az adatkezelési szabályzatot. Kizárólag kapcsolatfelvétel és árajánlatadás miatt kezeljük az adataidat."; ?>
							</label> <span class="error-message text-danger"></span>
						</div>
					</div>
					<button class="btn waves-effect waves-light whitebtn" type="submit" name="contact-button">
						Küldés </button>
				</form>
			</div>
			<div id="drukka" class="container">
				<div class="row">
					<div class="col s12 m6 l3">
						<h5 class="footer-heading">drukka kft.</h5> <address>        1138 Budapest,<br>        Váci út 168/A<br>        <a href="tel:+3612692718">Tel.: +36 1 269 2718</a><br>        Fax: +36 1 269 2722<br>         <a href="mailto:info@drukka.hu">Mail: info@drukka.hu</a>        </address>
					</div>
					<div class="col s12 m6 l3">
						<h5 class="footer-heading">Drukka America Inc.</h5> <address>        1001 N. Federal Hwy, Suite 350,<br>        Hallandale, FL-33009<br>        <a href="tel:+19544163366">Tel.: +1 954 416 3366</a><br>        <a href="mailto:info@drukka.hu">Mail: info@drukka.hu</a>        </address>
					</div>
					<div class="col s12 m7 l4">
						<h5 class="footer-heading">InnoWEB Solutions KFT.</h5> <address>        540331 Marosvásárhely,<br>        Mihai Eminescu u. 48 sz.,<br>        <a href="tel:+4036542443">Tel.: (+4) 0365-424-43</a><br>        <a href="mailto:info@innoweb.ro">Mail: info@innoweb.ro</a>         </address>
					</div>
					<div class="col s12 offset-m1 m4 l2 hide">
						<h5 class="footer-heading">Linkek</h5>
						<ul>
							<li>
								<a class="grey-text text-lighten-3" href="/">
									menü </a>
							</li>
							<li>
								<a class="grey-text text-lighten-3" href="/startup">
									menü </a>
							</li>
							<li>
								<a class="grey-text text-lighten-3" href="/karrier">
									menü </a>
							</li>
							<li>
								<a class="grey-text text-lighten-3" href="/blog">
									menü </a>
							</li>
							<li>
								<a class="grey-text text-lighten-3" href="/szolgaltatas-marketing">
									menü								</a>
							</li>
							<li>
								<a class="grey-text text-lighten-3" href="/szolgaltatas-app">
									menü								</a>
							</li>
							<li>
								<a class="grey-text text-lighten-3" href="/szolgaltatas-grafika">
									menü								</a>
							</li>
							<li>
								<a class="grey-text text-lighten-3" href="/szolgaltatas-webfejlesztes">
									menü
								</a>
							</li>
							<li>
								<a class="grey-text text-lighten-3" href="/gdpr">
									GDPR
									menü
								</a>
							
							</li>
							<li>
								<a class="grey-text text-lighten-3 navbar-contact" href="#m-footer">
										menü </a>
							</li>
							<li>
								<a class="grey-text text-lighten-3" href="/aszf.php">
									menü</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="footer-copyright">
				<div class="container"> © 2011-<?php echo date("Y"); ?> Drukka.hu – Minden jog fenntartva – <a href="/pdf/aszf.pdf" target="_blank">ÁSzF</a> - <a href="/pdf/adatvedelmi-tajekoztato.pdf" class="aszf-link" target="_blank">Adatvédelmi nyilatkozat</a> - <a href="/pdf/suti-tajekoztato.pdf" class="aszf-link" target="_blank">Süti Szabályzat</a> <a target="_blank" class="grey-text text-lighten-4" href="https://www.linkedin.com/company/3729065/"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a> <a target="_blank" class="grey-text text-lighten-4" href="https://www.instagram.com/drukka_startup/"><i class="fa fa-instagram" aria-hidden="true"></i></a> <a target="_blank" class="grey-text text-lighten-4" href="https://www.facebook.com/Drukka-Startup-Studio-986116881423763/?fref=ts"><i class="fa fa-facebook" aria-hidden="true" style="padding: 5px 10px 5px 8px;"></i></a> </div>
			</div>
			<div class="container center">
						<div class="row" style="margin-bottom: 0px;">
							<p>Együttműködő partner: <a target="_blank" class="intellitext-logo" href="http://intellitext.hu/"><img src="../assets/img/intellitext-logo2.png" height="25"></a></p>
						</div>
				</div>
		</footer>
    <!--FOOTER END-->

    <!-- import jQuery before materialize.js-->
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

	<!-- owl carousel -->
	<script src="/js/owl.carousel.min.js"></script>

	<!-- import materialize.js-->
	<script type="text/javascript" src="/js/materialize.min.js"></script>

	<!-- custom js -->
	<script type="text/javascript" src="/js/custom.js"></script>
	<script type="text/javascript" src="/js/gdpr-validation.js"></script>
	<script type="text/javascript" src="/js/ajax.js"></script>
	<script type="text/javascript" src="/js/formsubmit.js"></script>

	<script type="text/javascript">
	function formDatas(){
		var workers_data = $('#workers_data').text();
		$('#workers_data_form').val(workers_data);

		var clients_data = $('#clients_data').text();
		$('#clients_data_form').val(clients_data);

		var industry_data = $('#industry_data').text();
		$('#industry_data_form').val(industry_data);

		var process_data = $('#process_data').text();
		$('#process_data_form').val(process_data);

		var law_data = $('#law_data').text();
		$('#law_data_form').val(law_data);
		console.log("Law Checkbox: " + law_data);

		var hr_data = $('#hr_data').text();
		$('#hr_data_form').val(hr_data);
		console.log("Hr Checkbox: " + hr_data);

		var payroll_data = $('#payroll_data').text();
		$('#payroll_data_form').val(payroll_data);
		console.log("Payroll Checkbox: " + payroll_data);

		var it_data = $('#it_data').text();
		$('#it_data_form').val(it_data);
		console.log("IT Checkbox: " + it_data)

		var incident_data = $('#incident_data').text();
		$('#incident_data_form').val(incident_data);

	}
    </script>
    <script type="text/javascript" src="/js/select_jquery.js"></script>
</body>
</html>