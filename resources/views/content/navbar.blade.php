<ul id="dropdown1" class="dropdown-content">
    @foreach (Config::get('languages') as $lang => $language)
        <li>
            <a class="dropdown-item" href="{{ route('lang.switch', $lang) }}">{{$language}}</a>
        </li>
    @endforeach
</ul>
<ul id="dropdown2" class="dropdown-content">
    @foreach (Config::get('languages') as $lang => $language)
        <li>
            <a class="dropdown-item" href="{{ route('lang.switch', $lang) }}">{{$language}}</a>
        </li>
    @endforeach
</ul>
    <!-- services Dropdown Structure -->
      <ul id='services-dropdown' class='dropdown-content'>
        <li><a href="">{!! __('text.marketing') !!}</a></li>
        <li><a href="">{!! __('text.app') !!}</a></li>
        <li><a href="">{!! __('text.graphics') !!}</a></li>
        <li><a href="">{!! __('text.webdevelop') !!}</a></li>
      </ul>  
    <div class="navbar-fixed">
        <nav>
            <div class="nav-wrapper">
                <!--<a href="#!" class="brand-logo">Logo</a>-->
                <a href="" class="brand-logo hide-on-large-only"><img class="responsive-img" src="/assets/img/drukka_logo.png" alt="drukka logo"></a>
                <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                <ul id="nav" class="right hide-on-med-and-down">
                    <li>
                        <a href="">
                            <i class="fa fa-home fa-lg"></i>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            {!! __('text.startup') !!}
                        </a>
                    </li>
                    <li class="services-active-li">
                        <a class='dropdown-button' href='#' data-activates='services-dropdown' data-hover="true">
                            {!! __('text.services') !!}
                        </a>
                    </li>
                    <li>
                        <a href="">
                            GDPR
                        </a>
                    </li>
                    <li>
                        <a href="">
                            {!! __('text.carrier') !!}
                        </a>
                    </li>
                    <li>
                        <a href="">
                            {!! __('text.blog') !!}
                        </a>
                    </li>
                    <li class="">
                        <a class="navbar-contact" href="#footer">
                            {!! __('text.contact') !!}
                        </a>
                    </li>
                    <!-- Dropdown Trigger -->
                    <li id="langButtonLi"><a id="langButton" class="dropdown-button" href="#!" data-activates="dropdown1" data-hover="true"><img src="/assets/svg/nyelvvalaszto.svg" class="responsive-img" width="40" height="40" alt="Nyelvválasztó"><!--<i class="material-icons right">arrow_drop_down</i>--></a>
                    </li>
                </ul>
                <ul class="side-nav" id="mobile-demo">
                    <li>
                        <a href="/">
                            <!--<i class="fa fa-home fa-lg"></i>-->
                            {!! __('text.home') !!}
                        </a>
                    </li>
                    <li>
                        <a href="">
                            {!! __('text.startup') !!}
                        </a>
                    </li>
                    <li><a href="">{!! __('text.marketing') !!}</a></li>
                    <li><a href="">{!! __('text.app') !!}</a></li>
                    <li><a href="">{!! __('text.graphics') !!}</a></li>
                    <li><a href="">{!! __('text.webdevelop') !!}</a></li>
                    <li>
                        <a href="">
                            GDPR
                        </a>
                    </li>
                    <li>
                        <a href="">
                            {!! __('text.carrier') !!}
                        </a>
                    </li>
                    <li>
                        <a href="">
                            {!! __('text.blog') !!}
                        </a>
                    </li>
                    <li class="">
                        <a class="navbar-contact" href="#m-footer" >
                            {!! __('text.contact') !!}
                        </a>
                    </li>
                    <li><a id="langButtonMobil" class="dropdown-button" href="#!" data-activates="dropdown2" data-hover="true"><img src="/assets/svg/nyelvvalaszto.svg" class="responsive-img" width="40" height="40" alt="Nyelvválasztó"><!--<i class="material-icons right">arrow_drop_down</i>--></a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>