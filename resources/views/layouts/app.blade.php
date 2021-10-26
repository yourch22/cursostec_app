<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7164053958255490" crossorigin="anonymous"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title> @yield('_title') @yield('meta_title')</title>
    <meta name="title" content="@yield('meta_title')">
    <meta name="description" content="@yield('meta_description')">
    <meta name="keyword" content="@yield('meta_keyword')">
    <!--Marcado FACEBOOK-->
    <meta property="og:type" content="website" />
    <meta property="og:title" content="@yield('meta_title')">
    <meta property="og:url" content="@yield('meta_url')">
    <meta property="og:description" content="@yield('meta_description')">
    <meta property="og:image" content="@yield('meta_image')">
    <meta property="og:site_name" content="CursosTec">
    <meta property="og:locale" content="es_ES">
    <meta property="fb:app_id" content="" />
    <!--Marcado TWITTER-->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="">
    <meta name="twitter:url" content="">
    <meta name="twitter:description" content="">
    <meta name="twitter:image" content="">
    <meta name="twitter:site" content="">
    <!--Marcado GOOGLE-->
    <meta itemprop="name" content="">
    <meta itemprop="url" content="">
    <meta itemprop="description" content="">
    <meta itemprop="image" content="">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>[x-cloak]{display: none !important;}</style>
    <script src="{{ asset('js/jquery-3.5.1.min.js') }}" defer></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
     <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-28PF8EPL4S"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'G-28PF8EPL4S');
    </script>
    <script async custom-element="amp-auto-ads" src="https://cdn.ampproject.org/v0/amp-auto-ads-0.1.js"></script>
</head>

<body class="h-full min-h-full font-sans antialiased" x-data="{showModal: false, mobileMenuOpen: false}" @keydown.escape="showModal = false" x-cloak>
    <amp-auto-ads type="adsense" data-ad-client="ca-pub-7164053958255490"></amp-auto-ads>
    <header>
        @include('modules.header')
    </header>
    <main>
        @yield('content')
    </main>
      <div class="cookie-container mx-auto px-4 container overflow-hidden flex flex-col lg:flex-row justify-between">
          <p class="mx-auto my-4">
            Usamos cookies en este sitio web para brindarle la mejor experiencia en nuestro
            sitio y mostrarle anuncios relevantes. Para obtener más información, lea nuestro
            <a class="font-semibold underline text-blue-800" href="politicas-de-privacidad">política de privacidad</a> & <a class="font-semibold underline text-blue-800" href="politica-de-cookies">política de cookies</a>.
          </p>
    
          <button class="cookie-btn py-2 my-4 px-8 bg-indigo-400 hover:bg-indigo-500 text-white rounded font-bold text-sm shadow-xl">
            Acepto
          </button>
        </div>
    <footer class="bg-gray-950 text-white pt-12 pb-8 px-4">
        @include('modules.footer')
    </footer>
</body>
</html>
