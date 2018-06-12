<div id="footer" class="hide-on-med-and-down">
        <footer class="page-footer">
            <div class="container">
                <div class="row">
                    {{--  <form class="col s12 offset-l2 l8 center" id="kapcsolat" name="kapcsolat" method="post" action="">
                        <h2 class="center dijak-white">
                            Kapcsolat
                        </h2>
                        <div class="row">
                            <div class="input-field col s12 m6"> <input id="name2" type="text" class="validate" name="name" pattern="(^[A-Za-záéiíoóöőuúüűÁÉIÍOÓÖŐUÚÜŰä&]{3,20})([ ]{0,1})([A-Za-záéiíoóöőuúüűÁÉIÍOÓÖŐUÚÜŰä&]{0,20})" required>
                                <label for="name2">
                                    Név </label> <span class="error-message text-danger"></span> </div>
                            <div class="input-field col s12 m6"> <input id="email2" type="email" class="validate" name="email" pattern="[^ @]+@[^ @]+\.[^ @]+" required>
                                <label for="email2">
                                    E-mail cím </label> <span class="error-message text-danger"></span> </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12 m6"> <input id="tel" type="text" class="validate" name="mobile" maxlength="25" pattern="[+0-9]{1,25}" required>
                                <label for="tel">
                                    Telefonszám </label> <span class="error-message text-danger"></span> </div>
                            <div class="input-field col s12 m6"> <input id="targy" type="text" class="validate" name="subject" maxlength="40" pattern="(^[0-9A-Za-záéiíoóöőuúüűÁÉIÍOÓÖŐUÚÜŰä&]{3,20})([ ]{0,1})([0-9A-Za-záéiíoóöőuúüűÁÉIÍOÓÖŐUÚÜŰä&]{0,20})" required>
                                <label for="targy">
                                    Tárgy </label> <span class="error-message text-danger"></span> </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12"> <textarea id="uzenet" class="materialize-textarea" name="message" maxlength="290" required></textarea>
                                <label for="uzenet">
                                    Üzenet </label> <span class="error-message text-danger"></span> </div>
                        </div>
                        
                             
                                <p>
                                    <input id="contact-checkbox-datahandling" type="checkbox" class="contact-checkbox" name="contact-checkbox-datahandling" required>
                                    <label for="contact-checkbox-datahandling">
                                        Megismertem és elfogadom az <a class="contact-link" href="/pdf/adatvedelmi-tajekoztato.pdf" target="_blank">adatkezelési szabályzatot</a>. Kizárólag kapcsolatfelvétel és árajánlatadás miatt kezeljük az adataidat.
                                    </label>
                                </p>
                                
                            
                        
                        <button class="btn waves-effect waves-light whitebtn" type="submit" name="contact-button">
                            Küldés
                        </button>
                    </form>  --}}
                    {{--  @include('content.contact')  --}}
                            <form method="post" action=" {{ url('/contact') }} " class="col s12 offset-l2 l8 center" id="kapcsolat" name="kapcsolat">
                                @csrf
                                <h2 class="center dijak-white">
                                        Kapcsolat
                                    </h2>
                                <div class="row">
                                    <div class="input-field col s12 m6"> <input id="name2" type="text" class="validate" name="name" pattern="(^[A-Za-záéiíoóöőuúüűÁÉIÍOÓÖŐUÚÜŰä&]{3,20})([ ]{0,1})([A-Za-záéiíoóöőuúüűÁÉIÍOÓÖŐUÚÜŰä&]{0,20})" required>
                                        <label for="name2">Név </label> <span class="error-message text-danger"></span>
                                    </div>
                                    <div class="input-field col s12 m6"> <input id="email2" type="email" class="validate" name="email" pattern="[^ @]+@[^ @]+\.[^ @]+" required>
                                        <label for="email2">E-mail cím </label> <span class="error-message text-danger"></span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12 m6"> <input id="tel" type="text" class="validate" name="mobile" maxlength="25" pattern="[+0-9]{1,25}" required>
                                        <label for="tel"> Telefonszám </label> <span class="error-message text-danger"></span>
                                    </div>
                                    <div class="input-field col s12 m6"> <input id="targy" type="text" class="validate" name="subject" maxlength="40" pattern="(^[0-9A-Za-záéiíoóöőuúüűÁÉIÍOÓÖŐUÚÜŰä&]{3,20})([ ]{0,1})([0-9A-Za-záéiíoóöőuúüűÁÉIÍOÓÖŐUÚÜŰä&]{0,20})" required>
                                        <label for="targy">Tárgy </label> <span class="error-message text-danger"></span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12"> <textarea id="uzenet" class="materialize-textarea" name="message" maxlength="290" required></textarea>
                                        <label for="uzenet">Üzenet </label> <span class="error-message text-danger"></span>
                                    </div>
                                </div>
                                <p>
                                    <input id="contact-checkbox-datahandling" type="checkbox" class="contact-checkbox" name="contact-checkbox-datahandling" required>
                                    <label for="contact-checkbox-datahandling">
                                        Megismertem és elfogadom az <a class="contact-link" href="/pdf/adatvedelmi-tajekoztato.pdf" target="_blank">adatkezelési szabályzatot</a>. Kizárólag kapcsolatfelvétel és árajánlatadás miatt kezeljük az adataidat.
                                    </label>
                                </p>
                                <button class="btn waves-effect waves-light whitebtn" type="submit">
                                    Küldés
                                </button>
                            </form>
                        </div>
                        @if(session('response'))
            <div class="alert alert-success">
                {{ session('response') }}
            </div>
         @endif
            </div>
            <div class="container">
                <div class="row">
                    <div class="col s12 m6 l3">
                        <h5 class="footer-heading">drukka kft.</h5> <address>        1138 Budapest,<br>        Váci út 168/A<br>        <a href="tel:+3612692718">Tel.: +36 1 269 2718</a><br>                Fax: +36 1 269 2722<br>        <a href="mailto:info@drukka.hu">Mail: info@drukka.hu</a>        </address>
                        <!--<p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>-->
                    </div>
                    <div class="col s12 m6 l3">
                        <h5 class="footer-heading">Drukka America Inc.</h5> <address>        1001 N. Federal Hwy, Suite 350,<br>        Hallandale, FL-33009<br>        <a href="tel:+19544163366">Tel.: +1 954 416 3366</a><br>        <a href="mailto:info@drukka.com">Mail: info@drukka.com</a><br>        </address>
                        <!--<p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>-->
                    </div>
                    <div class="col s12 m6 l4">
                        <h5 class="footer-heading">InnoWEB Solutions S.R.L.</h5> <address>        540331 Targu Mures,<br>Str. Mihail Eminescu<br>Nr.55, jud. Mures, Romania<br>        <a href="tel:+4036542443">Tel.: (+4) 0365-424-43</a><br>        <a href="mailto:info@innoweb.ro">Mail: info@innoweb.ro</a><br>        </address>
                        <!--<p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>-->
                    </div>
                    <div class="col s12 m6 l2">
                        <h5 class="footer-heading">Linkek</h5>
                        <ul>
                            <li class="hide">
                                <a class="grey-text text-lighten-3" href="/">
                                    Főoldal </a>
                            </li>
                            <li>
                                <a class="grey-text text-lighten-3 hide" href="/startup">
                                    Startup </a>
                            </li>
                            <li>
                                <a class="grey-text text-lighten-3 hide" href="/karrier">
                                    Karrier </a>
                            </li>
                            <li>
                                <a class="grey-text text-lighten-3 hide" href="/blog">
                                    Blog </a>
                            </li>
                            <li>
                                <a class="grey-text text-lighten-3" href="/szolgaltatas-marketing">
                                    MArketing
                                </a>
                            </li>
                            <li>
                                <a class="grey-text text-lighten-3" href="/szolgaltatas-app">
                                    Appfejlesztés
                                </a>
                            </li>
                            <li>
                                <a class="grey-text text-lighten-3" href="/szolgaltatas-grafika">
                                    Grafika
                                </a>
                            </li>
                            <li>
                                <a class="grey-text text-lighten-3" href="/szolgaltatas-webfejlesztes">
                                    Webfejlesztés
                                </a>
                            </li>
                            <li>
                                <a class="grey-text text-lighten-3" href="/gdpr">
                                GDPR
                                </a>
                            
                            </li>
                            <li class="hide">
                                <a class="grey-text text-lighten-3" href="#footer">
                                    Kapcsolat
                            </li>
                            <li class="hide">
                                <a class="grey-text text-lighten-3" href="/aszf.php">
                                    ÁSZF </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container"> © 2011-<?php echo date("Y"); ?> Drukka.hu – Minden jog fenntartva – <a href="/pdf/aszf.pdf" target="_blank" class="aszf-link">ÁSzF</a> - <a href="/pdf/adatvedelmi-tajekoztato.pdf" class="aszf-link" target="_blank">Adatvédelmi nyilatkozat</a> - <a href="/pdf/suti-tajekoztato.pdf" class="aszf-link" target="_blank">Süti Szabályzat</a> <a target="_blank" class="grey-text text-lighten-4" href="https://www.linkedin.com/company/3729065/"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a> <a target="_blank" class="grey-text text-lighten-4" href="https://www.instagram.com/drukka_startup/"><i class="fa fa-instagram" aria-hidden="true"></i></a> <a target="_blank" class="grey-text text-lighten-4" href="https://www.facebook.com/Drukka-Startup-Studio-986116881423763/?fref=ts"><i class="fa fa-facebook" aria-hidden="true" style="padding: 5px 10px 5px 8px;"></i></a> </div>
            </div>
            <div class="container center">
                    <div class="row" style="margin-bottom: 0px;">
                        <p>Együttműködő partner: <a target="_blank" class="intellitext-logo" href="http://intellitext.hu/"><img src="../assets/img/intellitext-logo2.png" height="25"></a></p>
                    </div>
            </div>
        </footer>
    <footer id="m-footer" class="page-footer hide-on-large-only">
        <div class="row">
                <form method="post" class="col s12 center" id="kapcsolat" name="kapcsolat" action=" {{ url('/contact') }} ">
                        @csrf
                        <h2 class="center dijak-white">
                                Kapcsolat
                            </h2>
                        <div class="row">
                            <div class="input-field col s12 m6"> <input id="name2m" type="text" class="validate" name="name" pattern="(^[A-Za-záéiíoóöőuúüűÁÉIÍOÓÖŐUÚÜŰä&]{3,20})([ ]{0,1})([A-Za-záéiíoóöőuúüűÁÉIÍOÓÖŐUÚÜŰä&]{0,20})" required>
                                <label for="name2m">Név </label> <span class="error-message text-danger"></span>
                            </div>
                            <div class="input-field col s12 m6"> <input id="email2m" type="email" class="validate" name="email" pattern="[^ @]+@[^ @]+\.[^ @]+" required>
                                <label for="email2m">E-mail cím </label> <span class="error-message text-danger"></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12 m6"> <input id="telm" type="text" class="validate" name="mobile" maxlength="25" pattern="[+0-9]{1,25}" required>
                                <label for="telm"> Telefonszám </label> <span class="error-message text-danger"></span>
                            </div>
                            <div class="input-field col s12 m6"> <input id="targym" type="text" class="validate" name="subject" maxlength="40" pattern="(^[0-9A-Za-záéiíoóöőuúüűÁÉIÍOÓÖŐUÚÜŰä&]{3,20})([ ]{0,1})([0-9A-Za-záéiíoóöőuúüűÁÉIÍOÓÖŐUÚÜŰä&]{0,20})" required>
                                <label for="targym">Tárgy </label> <span class="error-message text-danger"></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12"> <textarea id="uzenetm" class="materialize-textarea" name="message" maxlength="290" required></textarea>
                                <label for="uzenetm">Üzenet </label> <span class="error-message text-danger"></span>
                            </div>
                        </div>
                
                <p>
                    <input id="contact-checkbox-datahandling-mobil" type="checkbox" class="contact-checkbox" name="" required>
                    <label for="contact-checkbox-datahandling-mobil">
                        Megismertem és elfogadom az <a href="/pdf/adatvedelmi-tajekoztato.pdf" class="contact-link">adatkezelési szabályzatot</a>. Kizárólag kapcsolatfelvétel és árajánlatadás miatt kezeljük az adataidat.
                    </label>
                </p>
                
                <button class="btn waves-effect waves-light whitebtn" type="submit" name="contact-button">
                    Küldés </button>
            </form>
        </div>
        <div id="drukka" class="container">
            <div class="row">
                <div class="col s12 m6 l3">
                    <h5 class="footer-heading">drukka kft.</h5> <address>        1138 Budapest,<br>        Váci út 168/A<br>        <a href="tel:+3612692718">Tel.: +36 1 269 2718</a><br>        Fax: +36 1 269 2722<br>         <a href="mailto:info@drukka.hu">Mail: info@drukka.hu</a>        </address>
                    <!--<p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>-->
                </div>
                <div class="col s12 m6 l3">
                    <h5 class="footer-heading">Drukka America Inc.</h5> <address>        1001 N. Federal Hwy, Suite 350,<br>        Hallandale, FL-33009<br>        <a href="tel:+19544163366">Tel.: +1 954 416 3366</a><br>        <a href="mailto:info@drukka.hu">Mail: info@drukka.hu</a>        </address>
                    <!--<p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>-->
                </div>
                <div class="col s12 m7 l4">
                    <h5 class="footer-heading">InnoWEB Solutions KFT.</h5> <address>        540331 Marosvásárhely,<br>        Mihai Eminescu u. 48 sz.,<br>        <a href="tel:+4036542443">Tel.: (+4) 0365-424-43</a><br>        <a href="mailto:info@innoweb.ro">Mail: info@innoweb.ro</a>         </address>
                    <!--<p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>-->
                </div>
                <div class="col s12 offset-m1 m4 l2 hide">
                    <h5 class="footer-heading">Linkek</h5>
                    <ul>
                        <!--<li>
                            <a class="grey-text text-lighten-3" href="/">
                                Főoldal </a>
                        </li>-->
                        <li>
                            <a class="grey-text text-lighten-3" href="/startup">
                                Startup </a>
                        </li>
                        <li>
                            <a class="grey-text text-lighten-3" href="/karrier">
                                Karrier </a>
                        </li>
                        <li>
                            <a class="grey-text text-lighten-3" href="/blog">
                                Blog </a>
                        </li>
                        <li class="hide">
                            <a class="grey-text text-lighten-3" href="/szolgaltatas-marketing">
                                Marketing
                            </a>
                        </li>
                        <li class="hide">
                            <a class="grey-text text-lighten-3" href="/szolgaltatas-app">
                                Appfejlesztés
                            </a>
                        </li>
                        <li class="hide">
                            <a class="grey-text text-lighten-3" href="/szolgaltatas-grafika">
                                Grafika
                            </a>
                        </li>
                        <li class="hide">
                            <a class="grey-text text-lighten-3" href="/szolgaltatas-webfejlesztes">
                                Webfejlesztés
                            </a>
                        </li>
                        <li>
                            <a class="grey-text text-lighten-3" href="/gdpr">
                                GDPR
                            </a>
                        
                        </li>
                        <!--<li>
                            <a class="grey-text text-lighten-3" href="#m-footer">
                                Kapcsolat</a>
                        </li>-->
                        <!--<li>
                            <a class="grey-text text-lighten-3" href="/aszf.php">
                                ÁSZF</a>
                        </li>-->
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container"> © 2011-<?php echo date("Y"); ?> Drukka.hu – Minden jog fenntartva – <a href="/pdf/aszf.pdf" target="_blank" class="aszf-link">ÁSzF</a> - <a href="/pdf/adatvedelmi-tajekoztato.pdf" class="aszf-link" target="_blank">Adatvédelmi nyilatkozat</a> - <a href="/pdf/suti-tajekoztato.pdf" class="aszf-link" target="_blank">Süti Szabályzat</a> <a target="_blank" class="grey-text text-lighten-4" href="https://www.linkedin.com/company/3729065/"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a> <a target="_blank" class="grey-text text-lighten-4" href="https://www.instagram.com/drukka_startup/"><i class="fa fa-instagram" aria-hidden="true"></i></a> <a target="_blank" class="grey-text text-lighten-4" href="https://www.facebook.com/Drukka-Startup-Studio-986116881423763/?fref=ts"><i class="fa fa-facebook" aria-hidden="true" style="padding: 5px 10px 5px 8px;"></i></a> </div>
        </div>
        <div class="container center">
                    <div class="row" style="margin-bottom: 0px;">
                        <p>Együttműködő partner: <a target="_blank" class="intellitext-logo" href="http://intellitext.hu/"><img src="../assets/img/intellitext-logo2.png" height="25"></a></p>
                    </div>
            </div>
    </footer>