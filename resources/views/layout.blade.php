<!DOCTYPE html>
<html lang="{{ LaravelLocalization::getCurrentLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap&subset=latin-ext" rel="stylesheet">
    <link rel="stylesheet" href="{{ css('app.min.css') }}">
    <link rel="stylesheet" href="/css/magnific-popup.css">
    <link rel="apple-touch-icon" sizes="180x180" href="/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicons/favicon-16x16.png">
    <link rel="manifest" href="/favicons/site.webmanifest">
    <link rel="mask-icon" href="/favicons/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="/favicons/favicon.ico">
    <meta name="msapplication-TileColor" content="#2b5797">
    <meta name="msapplication-config" content="/favicons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    @yield('head')
</head>
<body class="font-sans min-h-screen flex flex-col bg-gray-100">

    @if (config('app.debug'))
        <div class="fixed pin-l text-white text-sm p-2 font-bold z-50 xhidden">
            <div class="sm:hidden">Mobile</div>
            <div class="hidden sm:block md:hidden">SM</div>
            <div class="hidden md:block lg:hidden">MD</div>
            <div class="hidden lg:block xl:hidden">LG</div>
            <div class="hidden xl:block">XL</div>
        </div>
    @endif

    <header class="bg-black text-gray-100 fixed w-full top-0">
        <div class="container">

            {{-- Desktop Menu --}}
            <div class="hidden lg:flex justify-between items-center h-16">
                <h1 class="text-3xl">@lang('Zelenyákova trinástka')</h1>
                <div class="flex items-center">
                    <ul class="menu mr-4">
                        <li><a id="front-home" class="menu__link" href="{{ route('front.home') }}">@lang('Domov')</a></li>
                        <li><a id="front-proposition" class="menu__link" href="{{ route('front.proposition') }}">@lang('Propozícia')</a></li>
                        <li><a id="front-register" class="menu__link" href="{{ route('front.register') }}">@lang('Registrácia')</a></li>
                        <li><a id="front-gallery" class="menu__link" href="{{ route('front.gallery') }}">@lang('Galéria')</a></li>
                    </ul>

                    <div class="">
                        @if (LaravelLocalization::getCurrentLocale() == 'sk')
                            <a class="
                                block text-xs uppercase font-bold text-white
                                bg-blue-800 px-2 py-1 rounded-sm hover:bg-blue-700
                                lang-hu" href="/hu">hu</a>
                        @else
                            <a class="
                                block text-xs uppercase font-bold text-white
                                bg-blue-800 px-2 py-1 rounded-sm hover:bg-blue-700
                                lang-sk" href="/sk">sk</a>
                        @endif
                    </div>

                </div>
            </div>

            {{-- Mobile Menu --}}
            <div class="flex lg:hidden justify-between items-center h-16">
                <button id="sidenavOpen" class="open fill-current -ml-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"/></svg>
                </button>
                <h1>@lang('Zelenyákova trinástka')</h1>
            </div>

        </div>
    </header>

    <main class="pt-16 flex-1">
        @yield('banner')
        <div class="container my-12">
            @yield('content')
        </div>
    </main>

    <footer class="bg-black py-8 text-gray-300">
        <div class="container">
            <div class="grid grid-gap-4 text-center">
                <div class="">
                    <div class="font-bold">Kontakt:</div>
                    <div class="lg:flex justify-center">
                        <div class="lg:px-2 lg:border-r border-gray-700">@lang('Ľudovít Béres'): +421 911 610 235</div>
                        <div class="lg:px-2 lg:border-r border-gray-700">Bc. Gábor Juhász: +421 903 394 123</div>
                        <div class="lg:px-2">
                            <a href="mailto:info@zelenyak.sk">info@zelenyak.sk</a>
                        </div>
                    </div>
                </div>
                <div>
                    <a href="https://www.facebook.com/Cestn%C3%BD-beh-Zeleny%C3%A1kova-trin%C3%A1stka-Zeleny%C3%A1k-tizenh%C3%A1rmas-fut%C3%B3verseny-133525517228309">
                        <img class="h-8 mx-auto" src="/img/facebook-logo.png" alt="">
                    </a>
                </div>
                <div>
                    <a class="text-sm text-gray-600" href="{{ route('front.gdpr') }}">@lang('Vyhlásenie GDPR')</a>
                {{-- <div>
                    @foreach (collect(LaravelLocalization::getSupportedLocales())
                        ->forget(LaravelLocalization::getCurrentLocale()) as $key => $lang)
                        <a class="text-sm text-gray-600 lang-{{ $key }}" href="/{{ $key }}">[{{ $lang['native'] }}]</a>
                    @endforeach
                </div> --}}
            </div>
        </div>
    </footer>

    {{-- Slide in Menu --}}
    <div class="sidenav">
        <button id="sidenavClose" class="sidenav__close">
            <svg class="sidenav__icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
        </button>
        <ul class="sidenav__menu">
            <li><a id="route.home" class="sidenav__link" href="{{ route('front.home') }}">@lang('Domov')</a></li>
            <li><a id="route-proposition" class="sidenav__link" href="{{ route('front.proposition') }}">@lang('Propozícia')</a></li>
            <li><a id="route-register" class="sidenav__link" href="{{ route('front.register') }}">@lang('Registrácia')</a></li>
            <li><a id="route-gallery" class="sidenav__link" href="{{ route('front.gallery') }}">@lang('Galéria')</a></li>
            <li>
                @if (LaravelLocalization::getCurrentLocale() == 'sk')
                    <a class="
                        inline-block text-xs uppercase font-bold text-white
                        bg-blue-800 px-2 py-1 rounded-sm mx-4 my-8"
                        href="/hu">hu</a>
                @else
                    <a class="
                        inline-block text-xs uppercase font-bold text-white
                        bg-blue-800 px-2 py-1 rounded-sm mx-4 my-8"
                        href="/sk">sk</a>
                @endif
            </li>
        </ul>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="/js/jquery.magnific-popup.min.js"></script>
    <script src="/js/parallax.min.js"></script>
    <script>
        var route = '{{ str_replace('.', '-', Route::currentRouteName()) }}';
        var currentLanguage = '{{ LaravelLocalization::getCurrentLocale() }}';

        $('#'+route).css('background-color', '#4A5568');

        $('#sidenavOpen').click(function() {
            $('.sidenav').css('width', '250px');
            $('body').css('overflow', 'hidden');
        }),

        $('#sidenavClose').click(function() {
            $('.sidenav').css('width', '0');
            $('body').css('overflow', '');
        })
    </script>

    @yield('footer.scripts')
</body>
</html>