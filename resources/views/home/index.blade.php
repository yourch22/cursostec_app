@extends('layouts.app')
@section('_title', '★ ' .config('app.name'). ' ★ |')  
@section('meta_title', 'La Mejor Tienda Para Comprar Tu Curso Online con 100% de descuento' . date('M , Y'))
@section('meta_description','Ofertas, cupones, reseñas... Los Cupones promocionales oficiales y verificados de Udemy están aquí. Ahorre hasta un 100% en Descuentos en muchos de los cursos. ¡Termina pronto! Aprenda a pedido. Estudia cualquier tema, en cualquier momento en Udemy y ahorra con estos cupones. Nunca pague el precio completo. Cupones verificados diariamente. Nuevas ofertas. Mejores cupones en línea',)
@section('meta_keyword','Cupones para Udemy & Cursos Online Gratis,codigos de promocion 100% OFF, cupones gratis,cursos gratis,cursos udemy gratis,descargar cursos de udemy gratis,cursos udemy mega,download courses udemy for Mega',)
@section('meta_url', route('home.index'))
@section('meta_image', url('/') . '/img/plantilla/cupones-udemy-gratis.jpg')
@section('category_banner', asset($categoria_home[0]['imgBanner']) )
@section('category_title', $categoria_home[0]['categoria'])
@section('content')
@include('sliders.slider1')
<center><script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7164053958255490"
     crossorigin="anonymous"></script>
<!-- HEAD_CURSOSTEC_HORIZONTAL -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-7164053958255490"
     data-ad-slot="4389051667"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script></center>
<div class="border dark:border-gray-700 transition duration-500	ease-in-out"></div>
<div class="w-full mb-6 mx-auto px-4 flex items-center justify-between border-gray-300">
    <h1>
    <span class="text-2xl">
        <strong class="text-2xl">Últimas publicaciones y los mejores cupones Gratis de Udemy {{date('M Y')}}</strong>
    </span>
    </h1>
</div>
<div class="w-screen sm:w-full md:full lg:w-full xl:w-full mx-auto grid grid-cols-1 px-4 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-4">
    @foreach ($cupones as $key => $item)
                    @if ($key == 0)
           <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7164053958255490" crossorigin="anonymous"></script>
            <!-- cursostec_ads_courses -->
            <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-7164053958255490"
                 data-ad-slot="9299580104" data-ad-format="auto" data-full-width-responsive="true"></ins>
            <script>
                 (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
        @endif
        @if ($key == 9)
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7164053958255490" crossorigin="anonymous"></script>
            <!-- cursostec_ads_courses -->
            <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-7164053958255490"
                 data-ad-slot="9299580104" data-ad-format="auto" data-full-width-responsive="true"></ins>
            <script>
                 (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
        @endif
        <div class="">
                <a href="{{ route('coupons-udemy.show', ['rutacoupons' => $item->ruta]) }}"
                    class="c-card block bg-white shadow-md hover:shadow-xl rounded-lg overflow-hidden">
                    <div class="relative pb-48 overflow-hidden">
                        <img class="absolute inset-0 h-full w-full object-cover" src="{{ asset($item->portada) }}"
                            alt="">
                        <div style="background-color: rgb(67, 200, 1)"
                            class="absolute top-3 mb-2 ml-3 px-2 py-1 rounded text-sm text-white">-100%</div>
                    </div>
                    <div class="p-4">
                        <div class="wx-auto grid grid-cols-2">
                            <div class="text-left"><span
                                    class="mx-2 text-sm text-red-600 uppercase font-bold">{{ __('Gratis') }}</span><span
                                    class="line-through text-sm">${{ $item->precio }}</span></div>
                            <div class="mx-auto">
                                @if ($item->plataforma === 'Udemy')
                                    <img width="32" height="32" src="{{ asset('img/plantilla/logoudemy.png') }}" />
                                @endif
                                @if ($item->plataforma === 'Itoo')
                                    <img width="32" height="32" src="{{ asset('img/plantilla/logoItoo.png') }}">
                                @endif
                            </div>
                        </div>
                        <h2 class="mt-2 mb-2  font-bold">{{ $item->titulo }}</h2>
                        <p class="text-sm">{{ __('Creado por:') }} <i>{{ $item->instructor }}</i></p>
                        <div class="mt-2 flex items-center text-sm text-gray-600">

                            <span
                                class="inline-block text-white bg-yellow-400 font-bold text-sm py-0 px-1 rounded">{{ round($item->calificacion, 1) }}</span>
                            @php
                                $rating = round($item->calificacion, 1);
                                $calificacion = ($rating * 100) / 5;
                            @endphp
                            <div class="relative inline-flex text-yellow-400">
                                <div class="absolute top-0 left-0 whitespace-no-wrap overflow-hidden w-0"
                                    style="width: {{ $calificacion }}%">
                                    <div class="inline-flex">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24"
                                            stroke="none" class="w-5 h-5">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24"
                                            stroke="none" class="w-5 h-5">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24"
                                            stroke="none" class="w-5 h-5">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24"
                                            stroke="none" class="w-5 h-5">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24"
                                            stroke="none" class="w-5 h-5">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                                        </svg>
                                    </div>
                                </div>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                                </svg>
                            </div>

                        </div>
                    </div>
                    <div class="p-4 border-t border-b text-xs">
                        <div class="grid grid-cols-2">
                            <div>
                                <span
                                    class="focus:outline-none focus:shadow-outline inline-block text-cool-gray-500 font-bold text-sm py-0 px-1 rounded-full">{{ $item->idioma }}</span>
                            </div>
                            <div class="inline-flex items-center mx-auto">
                                <svg class="text-cool-gray-500 mr-2" width="14" height="14" viewBox="0 0 24 24"
                                    version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M0 10C0 4.47715 4.47715 0 10 0C12.6522 0 15.1957 1.05357 17.0711 2.92893C18.9464 4.8043 20 7.34784 20 10C20 15.5228 15.5228 20 10 20C4.47715 20 0 15.5228 0 10ZM10 18C5.58172 18 2 14.4183 2 10C2 5.58172 5.58172 2 10 2C14.4183 2 18 5.58172 18 10C18 12.1217 17.1571 14.1566 15.6569 15.6569C14.1566 17.1571 12.1217 18 10 18ZM10.88 4.5L10.88 9.64L14.51 13.27C14.7018 13.4678 14.7018 13.7822 14.51 13.98L13.98 14.51C13.7822 14.7018 13.4678 14.7018 13.27 14.51L9.27 10.51C9.17837 10.4159 9.12492 10.2912 9.12 10.16L9.12 4.5C9.12 4.22386 9.34386 4 9.62 4L10.38 4C10.6561 4 10.88 4.22386 10.88 4.5Z"
                                        fill-rule="evenodd" stroke="none"></path>
                                </svg>
                                <span
                                    class="text-sm text-cool-gray-500 font-bold">{{ __(\Carbon\Carbon::parse($item->fecha)->diffForHumans()) }}</span>
                            </div>
                        </div>
                    </div>
                </a>

        </div>
    @endforeach
</div>
<div class="mx-auto items-center content-center text-center my-6">
    <div class="bg-white py-5 content-center justify-between border-t border-gray-200">
        <nav class="relative z-0 content-center inline-flex shadow-sm">
            <a href="/cupones-gratis"
            class="bg-blue-850 py-4 px-8 text-white font-bold uppercase text-xs rounded hover:bg-blue-750 hover:text-white">Ver más Cupones gratis</a>
        </nav>
    </div>
</div>


@include('home.inicio.inicio1')
@include('home.inicio.inicio2')
@include('home.inicio.inicio3')
@endsection