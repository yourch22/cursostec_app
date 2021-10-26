@extends('layouts.app')
@section('_title', '⭐ Cursos Gratis:')  
@section('meta_title', 'La Mejor Tienda Online Para Conseguir Cursos Gratis')
@section('meta_description','Los Cursos oficiales y verificados de Udemy Gratis. Ahorre hasta un 100% en muchos cursos. Estudia cualquier tema, en cualquier momento en Udemy',)
@section('meta_keyword','Cupones para Udemy & Cursos Online Gratis,codigos de promocion 100% OFF, cupones gratis,cursos gratis,cursos udemy gratis,descargar cursos de udemy gratis,cursos udemy mega,download courses udemy for Mega',)
@section('meta_url', route('gratis'))
@section('meta_image', url('/') . '/img/plantilla/cupones-udemy-gratis.jpg')
@section('content')
<center><script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7164053958255490"
     crossorigin="anonymous"></script>
<!-- cursostec_coupons_head -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-7164053958255490"
     data-ad-slot="7424866433"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script></center>
<div class="px-4 mt-4 mb-2 flex items-center justify-between">
    <div class="flex items-center select-none">
        <nav class="text-black font-bold my-2" aria-label="Breadcrumb">
            <ol class="list-none p-0 inline-flex">
                <li class="flex items-center">
                    <a href="/">Home</a>
                    <svg class="fill-current w-3 h-3 mx-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                        <path
                            d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z" />
                    </svg>
                </li>
                <li class="flex items-center">
                    <a href="#" class="text-gray-500" aria-current="page">Coupons</a>
                </li>
            </ol>
        </nav>
    </div>
    <nav :class="{'flex': open, 'hidden': !open}"
        class="flex-grow pb-4 md:pb-0 md:flex md:justify-end flex-row sm:flex-row md:flex-row">
        <a class="hidden sm:hidden md:flex lg:flex xl:flex px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
            href="/">Udemy
        </a>
        <div @click.away="open = false" class="relative" x-data="{ open: false }">
            <button @click="open = !open" class="relative flex flex-row items-center w-full px-4 py-2 mt-2 text-sm font-semibold text-left bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:focus:bg-gray-600 dark-mode:hover:bg-gray-600 md:w-auto md:inline md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                <span>{{ __('Categorias') }}</span>
                <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}"
                    class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1">
                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
            </button>
            <div class="absolute top-0 right-0 -mt-3 text-xs -mr-4 px-3 py-0.5 bg-red-500 text-white rounded-t-full rounded-br-full">{{__('Gratis')}}</div>
            <div x-show="open" class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-48 z-50">
                <div class="px-2 py-2 bg-white rounded-md shadow dark-mode:bg-gray-800">
                    @foreach ($categoria_home as $key => $itemcategory)
                            <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                            href="{{ route('subcategory.show',['ruta'=>$itemcategory->ruta,'rutas'=>$itemcategory->ruta.'-free','page'=>1]) }}">{{ __($itemcategory->categoria) }}</a>
                    @endforeach
                </div>
            </div>
        </div>
    </nav>
</div>
<div class="border dark:border-gray-700 transition duration-500	ease-in-out mb-4"></div>

<div class="w-full mt-8 mb-6 mx-auto px-4 flex items-center justify-between">
    <span class="text-2xl">
      {{__('Los mejores cursos de')}}
      <strong class="text-2xl">{{ __($categoria_home[0]['categoria']) }} {{__('Gratis')}}</strong>
    </span>
</div>

<div class="w-screen sm:w-full md:full lg:w-full xl:w-full mx-auto grid grid-cols-1 px-4 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-4 mb-10">
    @foreach ($cursos->results as $key => $item)
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
    <div class="c-card block bg-white shadow-md hover:shadow-xl rounded-lg overflow-hidden">
        <div class="relative pb-48 overflow-hidden">
          <img class="absolute inset-0 h-full w-full object-cover"
            src="{{$item->image_240x135}}" alt="">
        </div>
        <div class="p-4">
        <div class="wx-auto grid grid-cols-2">
            <div class="text-left"><span class="mx-2 text-sm text-red-600 uppercase font-bold">{{ __('Gratis') }}</span>
                <span class="line-through text-sm">$0.00</span>
            </div>
            <div class="mx-auto">
                <img width="32" height="32" src="{{ asset('img/plantilla/logoudemy.png') }}" />
            </div>
        </div>
          <h2 class="mt-2 mb-2  font-bold">{{ $item->title }}</h2>
          <p class="text-sm">{{__('Creado por:')}} <i>{{$item->visible_instructors[0]->display_name}}</i></p>
          <div class="mt-2 flex items-center text-sm text-gray-600">
            <span class="inline-block text-white bg-yellow-400 font-bold text-sm py-0 px-1 rounded">{{round($item->avg_rating, 1)}}</span>
            @php
              $rating = round($item->avg_rating, 1);
              $calificacion= $rating*100/5;
            @endphp
            <div class="relative inline-flex text-yellow-400">
              <div class="absolute top-0 left-0 whitespace-no-wrap overflow-hidden w-0" style="width:{{$calificacion}}%">
                <div class="inline-flex">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke="none"
                    class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                  </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke="none"
                    class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                  </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke="none"
                    class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                  </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke="none"
                    class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                  </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke="none"
                    class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                  </svg>
                </div>
              </div>
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                class="w-5 h-5">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                class="w-5 h-5">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                class="w-5 h-5">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                class="w-5 h-5">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                class="w-5 h-5">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
              </svg>
            </div>
          </div>
        </div>
        <div class="p-4 border-t border-b">
          <div class="grid grid-cols-2">
              <div class="col-span-2 text-center">
                <form action="{{ route('udemy_gratis',['rutafree'=>$item->published_title]) }}" method="post">
                  @method('post')
                  @csrf
                  <input type="hidden" name="id_curso" value="{{$item->id}}">
                 
                 
                  <button type="submit" target="_blank" class="bg-blue-850 text-sm hover:bg-blue-750 text-white font-bold py-2 px-6 rounded-full inline-flex items-center">
                  </form>
                  {{-- <button href="{{ config('services.cred_affiliate_admitad.url') . '' . config('services.cred_affiliate_admitad.sub_id') . config('services.cred_affiliate_admitad.url_udemy') . $item->url }}" target="_blank" class="bg-blue-850 text-sm hover:bg-blue-750 text-white font-bold py-2 px-6 rounded-full inline-flex items-center"> --}}
                  <span>{{__('Inscríbete Gratis')}}</span>
                    <svg class="fill-current w-4 h-4 ml-2" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        viewBox="0 0 511.992 511.992" style="enable-background:new 0 0 511.992 511.992;" xml:space="preserve">
                            <path d="M510.096,249.937c-4.032-5.867-100.928-143.275-254.101-143.275C124.56,106.662,7.44,243.281,2.512,249.105
                                c-3.349,3.968-3.349,9.792,0,13.781C7.44,268.71,124.56,405.329,255.995,405.329S504.549,268.71,509.477,262.886
                                C512.571,259.217,512.848,253.905,510.096,249.937z M255.995,383.996c-105.365,0-205.547-100.48-230.997-128
                                c25.408-27.541,125.483-128,230.997-128c123.285,0,210.304,100.331,231.552,127.424
                                C463.013,282.065,362.256,383.996,255.995,383.996z"/>
                            <path d="M255.995,170.662c-47.061,0-85.333,38.272-85.333,85.333s38.272,85.333,85.333,85.333s85.333-38.272,85.333-85.333
                                S303.056,170.662,255.995,170.662z M255.995,319.996c-35.285,0-64-28.715-64-64s28.715-64,64-64s64,28.715,64,64
                                S291.28,319.996,255.995,319.996z"/>
                    </svg>
                </button>
            </div>
          </div>
        </div>
    </div>
    @endforeach
</div>
<section>
<div class="container max-w-full mx-auto py-4 px-6">
<h2 class="text-center text-2xl text-black font-medium leading-snug tracking-wider">
<strong
    class="text-2xl">{{ __('Los Cursos Más Destacados con una calificacion de 5 estrellas con Cupones de 96% Descuento Vigentes') }}
</strong>
</h2>
<p class="text-center text-lg text-gray-700 mt-2 px-6">
{{ __('Obtenga los cursos más vendidas, códigos promocionales y ofertas, Te presentamos Top 1 de los mejores cursos en udemy 100% recomendados y con una calificacion de 5 estrellas') }}
</p>
<div class="h-1 mx-auto bg-indigo-200 w-24 opacity-75 mt-4 rounded"></div>
</div>
</section>
    <div
        class="w-screen sm:w-full md:full lg:w-full xl:w-full mx-auto grid grid-cols-1 px-4 py-4 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-4">
        @foreach ($cupones_descuento as $key => $items)
        @if ($key == 0)
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7164053958255490"
             crossorigin="anonymous"></script>
        <!-- cursostec_coupons_relevance -->
        <ins class="adsbygoogle"
             style="display:block"
             data-ad-client="ca-pub-7164053958255490"
             data-ad-slot="9685866566"
             data-ad-format="auto"
             data-full-width-responsive="true"></ins>
        <script>
             (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
        @endif
        @if ($key == 9)
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7164053958255490"
             crossorigin="anonymous"></script>
        <!-- cursostec_coupons_relevance -->
        <ins class="adsbygoogle"
             style="display:block"
             data-ad-client="ca-pub-7164053958255490"
             data-ad-slot="9685866566"
             data-ad-format="auto"
             data-full-width-responsive="true"></ins>
        <script>
             (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
        @endif
            <div class="">
                <a href="{{ route('coupons-udemy.show', ['rutacoupons' => $items->ruta]) }}" class="c-card block bg-white shadow-md hover:shadow-xl rounded-lg overflow-hidden">
                    <div class="relative pb-48 overflow-hidden">
                        <img class="absolute inset-0 h-full w-full object-cover" src="{{ asset($items->portada) }}"
                            alt="">
                        <div style="background-color: rgb(67, 200, 1)"
                            class="absolute top-3 mb-2 ml-3 px-2 py-1 rounded text-sm text-white">-96%</div>
                    </div>
                    <div class="p-4">
                        <div class="wx-auto grid grid-cols-2">
                            <div class="text-left"><span class="mx-2 text-sm text-red-600 uppercase font-bold">
                        ${{ $items->precio_oferta }}</span>
                    <span class="line-through text-sm">${{ $items->precio }}</span></div>
                            <div class="mx-auto">
                                @if ($items->plataforma === 'Udemy')
                                    <img width="32" height="32" src="{{ asset('img/plantilla/logoudemy.png') }}" />
                                @endif
                                @if ($items->plataforma === 'Itoo')
                                    <img width="32" height="32" src="{{ asset('img/plantilla/logoItoo.png') }}">
                                @endif
                            </div>
                        </div>
                        <h2 class="mt-2 mb-2  font-bold">{{ $items->titulo }}</h2>
                        <p class="text-sm">{{ __('Creado por:') }} <i>{{ $items->instructor }}</i></p>
                        <div class="mt-2 flex items-center text-sm text-gray-600">

                            <span
                                class="inline-block text-white bg-yellow-400 font-bold text-sm py-0 px-1 rounded">{{ round($items->calificacion, 1) }}</span>
                            @php
                                $rating = round($items->calificacion, 1);
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
                                    class="focus:outline-none focus:shadow-outline inline-block text-cool-gray-500 font-bold text-sm py-0 px-1 rounded-full">{{ $items->idioma }}</span>
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
                                    class="text-sm text-cool-gray-500 font-bold">{{ __(\Carbon\Carbon::parse($items->fecha)->diffForHumans()) }}</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
@endsection