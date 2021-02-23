<!--==========================
  Header
============================-->
<header id="header">
    <div class="container">

        <div id="logo" class="pull-left">
            <h1><a href="#body" class="scrollto"><span><i class="fa fa-star-half-o" aria-hidden="true"> </i> </span>
                    <img src="{{asset('site/img/logo.svg')}}">
                </a></h1>
            <!-- <a href="#body"><img src="img/logo.png" alt="" title="" /></a>-->
        </div>


        <nav id="nav-menu-container">
            <ul class="nav-menu">
                <li class="menu-active"><a href="#body">{{trans('home/header.home')}}</a></li>
                <li><a href="#about">{{trans('home/header.about')}}</a></li>
                <li><a href="#services">{{trans('home/header.service')}}</a></li>
                {{--                <li><a href="#portfolio">Portfolio</a></li>--}}
                {{--                <li><a href="#team">Our Team</a></li>--}}

                <li class="menu-has-children"><a href="">{{trans('home/header.language')}}</a>
                    <ul>
                        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                            <li><a rel="alternate" hreflang="{{ $localeCode }}"
                                   href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                    {{ $properties['native'] }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </li>
                <li><a href="#contact">{{trans('home/header.contact')}}</a></li>
                <li><a href="#contact">{{trans('home/header.login')}}</a></li>
            </ul>
        </nav><!-- #nav-menu-container -->
    </div>
</header><!-- #header -->
