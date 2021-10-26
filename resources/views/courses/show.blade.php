@extends('layouts.app')
@section('_title', '⭐ Cupón Gratis:')
@section('meta_title', $cursosdetalle->titulo . ' ' . date('D M'))
@section('meta_description', $cursosdetalle->descripcion_corta)
@section('meta_keyword', 'Cupones para Udemy & Cursos Online Gratis,codigos de promocion 100% OFF, cupones gratis,cursos
    gratis,cursos udemy gratis,descargar cursos de udemy gratis,cursos udemy mega,download courses udemy for Mega')
@section('meta_url', route('coupons-udemy.show', [$cursosdetalle->ruta]))
@section('meta_image', $cursosdetalle->portada)
@section('content')
    <div class="flex justify-between container mx-auto">
        <div class="w-full lg:w-8/12">
            <div class="">
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
                <div class="max-w-5xl px-10 py-6 bg-white rounded-lg shadow-md">
                    <div class="mx-auto flex flex-wrap">
                        <img alt="ecommerce"
                            class="lg:w-1/2 max-h-auto object-cover object-center rounded-lg rounded-b-none border border-gray-200"
                            src="{{ asset($cursosdetalle->portada) }}">
                        <div class="lg:w-1/2 lg:pl-10 lg:py-3 mt-6 lg:mt-0">
                            <h2 class="text-sm title-font text-gray-500 tracking-widest">[100% DESCT.°]</h2>
                            <h1 class="text-gray-900 title-font font-medium text-xl font-bold mb-1">
                                {{ $cursosdetalle->titulo }}</h1>
                            <div class="flex mb-2">
                                <span class="flex items-center">
                                    @if ($cursosdetalle->precio_oferta != 0.0)
                                        <span
                                            class="title-font font-medium uppercase font-bold text-lg text-red-600 pr-2">${{ $cursosdetalle->precio_oferta }}</span>
                                    @else
                                        <span
                                            class="title-font font-medium uppercase font-bold text-lg text-red-600 pr-2">{{ __('Gratis') }}</span>
                                    @endif
                                    <span
                                        class="title-font font-medium text-lg text-gray-900 line-through">${{ $cursosdetalle->precio }}</span>
                                </span>
                                <span class="flex ml-3 pl-3 py-2 border-l-2 border-gray-200">
                                    <p class="text-black leading-none"><span>{{ __('Creado por:') }}
                                        </span>{{ $cursosdetalle->instructor }}</p>
                                </span>
                            </div>
                            <p class="leading-relaxed">{{ $cursosdetalle->descripcion_corta }}</p>
                            <div class="flex mt-2 items-center border-b-2 border-gray-200">
                                <div class="flex">
                                    <div class="flex items-center justify-end">
                                        @php
                                            $fechaActual = date('Y-m-d H:i:s');
                                        @endphp
                                        @if ($cursosdetalle->finOferta > $fechaActual)
                                            <div id="clockdiv" date="{{ $cursosdetalle->finOferta }}">
                                                <div>
                                                    <span class="text-black days"></span>
                                                    <div class="text-black smalltext">Dias</div>
                                                </div>
                                                <div>
                                                    <span class="text-black hours"></span>
                                                    <div class="text-black smalltext">Horas</div>
                                                </div>
                                                <div>
                                                    <span class="text-black minutes"></span>
                                                    <div class="text-black smalltext">Min</div>
                                                </div>
                                                <div>
                                                    <span class="text-black seconds"></span>
                                                    <div class="text-black smalltext">Seg</div>
                                                </div>
                                            </div>
                                        @else
                                            <div class="text-center text-3xl">
                                                <h4>{{ __('Cupón Expirado') }}</h4>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="flex ml-6 items-center">
                                    <div class="mx-auto">
                                        @if ($cursosdetalle->plataforma === 'Udemy')

                                            <img width="45" height="45"
                                                src="{{ asset('img/plantilla/logoudemy.png') }}" />

                                        @endif
                                        @if ($cursosdetalle->plataforma === 'Itoo')
                                            <img width="45" height="45" src="{{ asset('img/plantilla/logoItoo.png') }}">
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-between items-center mt-6">
                        <span  class="font-light text-gray-600">{{ \Carbon\Carbon::parse($cursosdetalle->fecha)->format('d M Y') }}</span>
                    </div>
                    <section class="bg-coolGray-100 mx-auto item-center text-coolGray-900 w-full">
                        <div class="mx-auto flex flex-col justify-around p-4 text-center md:p-6 lg:flex-row">
                            <div class="flex flex-col justify-center lg:text-left">
                                <p class="py-2 text-2xl font-medium leading-tight title-font">Comparte si te a gustado: </p>
                            </div>
                            <div class="flex flex-col items-center justify-center flex-shrink-0 mt-2 space-y-4 sm:flex-row sm:space-y-0 sm:space-x-4 lg:ml-4 lg:mt-0 lg:justify-end">
                                <button id="share-fb" class="inline-flex items-center px-6 py-3 rounded-lg bg-blue-500 hover:bg-blue-600 shadow-md text-white">
                                    <svg class="w-5 h-5 fill-current" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                                    </svg>
                                    <span class="flex flex-col items-start ml-4 leading-none">
                                        <span class="font-semibold title-font">Facebook</span>
                                    </span>
                                </a>
                                <button id="share-twitter" class="inline-flex items-center px-6 py-3 rounded-lg bg-blue-400 hover:bg-blue-500 shadow-md text-white">
                                    <svg class="w-5 h-5 fill-current" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" />
                                    </svg>
                                    <span class="flex flex-col items-start ml-4 leading-none">
                                        <span class="font-semibold title-font">Twitter</span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </section>
                    <div class="mt-2"><a href="/cupones-gratis"
                            class="text-5xl text-gray-700 font-bold hover:underline">{{ $cursosdetalle->titulo }}</a>
                        <p class="mt-2 text-gray-600">{!! $cursosdetalle->descripcion !!}</p>
                    </div>
                 <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7164053958255490"
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
                    </script>
                    <div class="my-2">
                        <div class="grid gap-6 mb-8 md:grid-cols-2">
                            <div class="flex content-center">
                                @if ($cursosdetalle->plataforma === 'Udemy')
                                    <a href="{{ 'https://ad.admitad.com/g/05dgete24s372c5c98e4b3e3b7aadc/?subid=udemy_cupon&ulp=https%3A%2F%2Fwww.udemy.com%2Fcourse%2F' . $cursosdetalle->ruta . '%2F%3FcouponCode%3D' . $cursosdetalle->cupon }}"
                                        target="_blank"
                                        class="border border-purple-800 bg-blue-850 hover:bg-indigo-500 my-8 mr-2 text-white block rounded-sm font-bold py-4 px-6 ml-2 flex text-center items-center">
                                        {{ __('Obtener Cupón') }}
                                    </a>
                                @endif
                                @if ($cursosdetalle->plataforma === 'Itoo')
                                    <a href="{{ config('services.cred_affiliate_itoo.url') . $cursosdetalle->ruta . config('services.cred_affiliate_itoo.offert_id') . config('services.cred_affiliate_itoo.cod_affiliate') . '&coupon_code=' . $cursosdetalle->cupon }}"
                                        target="_blank"
                                        class="border border-purple-800 bg-blue-850 hover:bg-indigo-500 my-8 mr-2 text-white block rounded-sm font-bold py-4 px-6 ml-2 flex text-center items-center">
                                        {{ __('Obtener Cupón') }}
                                    </a>
                                @endif
                                <a href="/cupones-gratis"
                                    class="border border-purple-800 text-bg-blue-850  block my-8 rounded-sm font-bold py-4 px-6 flex text-center items-center hover:bg-indigo-500 hover:text-white">
                                    Mas Cursos
                                    <svg class="h-5 w-5 ml-2 fill-current" clasversion="1.1" id="Layer_1"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        x="0px" y="0px" viewBox="-49 141 512 512"
                                        style="enable-background:new -49 141 512 512;" xml:space="preserve">
                                        <path id="XMLID_11_"
                                            d="M-24,422h401.645l-72.822,72.822c-9.763,9.763-9.763,25.592,0,35.355c9.763,9.764,25.593,9.762,35.355,0
                                                    l115.5-115.5C460.366,409.989,463,403.63,463,397s-2.634-12.989-7.322-17.678l-115.5-115.5c-9.763-9.762-25.593-9.763-35.355,0
                                                    c-9.763,9.763-9.763,25.592,0,35.355l72.822,72.822H-24c-13.808,0-25,11.193-25,25S-37.808,422-24,422z" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="px-3 my-2 mb-4">
                        <span class="font-semibold text-gray-600 text-sm">Tags:</span>
                        <ul class="inline-block list-none text-sm text-white font-semibold">
                            @foreach ($cursosdetalle->tags as $tag)
                                <li class="inline-block bg-blue-500 px-2 rounded-full">#{{ $tag->name }}</li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="mx-4 flex justify-between items-center">
                        <div class="flex">
                            <a href="/hagnerd/setting-up-tailwind-with-create-react-app-4jd"
                                class="py-1 pl-1 pr-2 text-gray-600 text-sm rounded hover:bg-gray-100 hover:text-black">
                                <svg class="inline fill-current" version="1.1" id="Capa_1" width="24" height="24"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                                    y="0px" viewBox="0 0 511.992 511.992" style="enable-background:new 0 0 511.992 511.992;"
                                    xml:space="preserve">
                                    <path
                                        d="M510.096,249.937c-4.032-5.867-100.928-143.275-254.101-143.275C124.56,106.662,7.44,243.281,2.512,249.105
                                                                                                                c-3.349,3.968-3.349,9.792,0,13.781C7.44,268.71,124.56,405.329,255.995,405.329S504.549,268.71,509.477,262.886
                                                                                                                C512.571,259.217,512.848,253.905,510.096,249.937z M255.995,383.996c-105.365,0-205.547-100.48-230.997-128
                                                                                                                c25.408-27.541,125.483-128,230.997-128c123.285,0,210.304,100.331,231.552,127.424
                                                                                                                C463.013,282.065,362.256,383.996,255.995,383.996z" />
                                    <path
                                        d="M255.995,170.662c-47.061,0-85.333,38.272-85.333,85.333s38.272,85.333,85.333,85.333s85.333-38.272,85.333-85.333
                                                                                                                S303.056,170.662,255.995,170.662z M255.995,319.996c-35.285,0-64-28.715-64-64s28.715-64,64-64s64,28.715,64,64
                                                                                                                S291.28,319.996,255.995,319.996z" />
                                </svg>
                                {{ $cursosdetalle->visitas }}<span
                                    class="hidden md:inline">&nbsp;{{ __('Visualizaciones') }}</span>
                            </a>
                            <a href="/hagnerd/setting-up-tailwind-with-create-react-app-4jd#comments"
                                class="py-1 pl-1 pr-2 text-gray-600 text-sm rounded hover:bg-gray-100 hover:text-black">
                                <svg class="inline fill-current" width="24" height="24" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10.5 5h3a6 6 0 110 12v2.625c-3.75-1.5-9-3.75-9-8.625a6 6 0 016-6zM12 15.5h1.5a4.501 4.501 0 001.722-8.657A4.5 4.5 0 0013.5 6.5h-3A4.5 4.5 0 006 11c0 2.707 1.846 4.475 6 6.36V15.5z">
                                    </path>
                                </svg>{{ count($comments) }}<span
                                    class="hidden md:inline">&nbsp;{{ __('comentarios') }}</span>
                            </a>
                            <a href="/hagnerd/setting-up-tailwind-with-create-react-app-4jd#comments"
                                class="py-1 pl-1 pr-2 text-gray-600 text-sm rounded hover:bg-gray-100 hover:text-black">
                                <svg class="inline fill-current" width="18" height="18" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20">
                                    <path
                                        d="M5.08 12.16A2.99 2.99 0 0 1 0 10a3 3 0 0 1 5.08-2.16l8.94-4.47a3 3 0 1 1 .9 1.79L5.98 9.63a3.03 3.03 0 0 1 0 .74l8.94 4.47A2.99 2.99 0 0 1 20 17a3 3 0 1 1-5.98-.37l-8.94-4.47z" />
                                </svg>
                                <span class="hidden md:inline">&nbsp;{{ __('Compartir:') }}:</span>
                            </a>
                            <div class="flex flex-col items-center justify-center flex-shrink-0 mt-2 space-y-4 sm:flex-row sm:space-y-0 sm:space-x-4 lg:ml-4 lg:mt-0 lg:justify-end">
                                <button id="share-fb2" class="inline-flex items-center px-6 py-3 rounded-lg bg-blue-500 hover:bg-blue-600 shadow-md text-white">
                                    <svg class="w-5 h-5 fill-current" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                                    </svg>
                                    <span class="flex flex-col items-start ml-4 leading-none">
                                        <span class="font-semibold title-font">Facebook</span>
                                    </span>
                                </a>
                                <button id="share-twitter2" class="inline-flex items-center px-6 py-3 rounded-lg bg-blue-400 hover:bg-blue-500 shadow-md text-white">
                                    <svg class="w-5 h-5 fill-current" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" />
                                    </svg>
                                    <span class="flex flex-col items-start ml-4 leading-none">
                                        <span class="font-semibold title-font">Twitter</span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <section class="blog text-gray-700 body-font">
                        <div class="container py-4 mx-auto">
                            <div class="flex flex-wrap w-full mb-4 flex-col items-center text-center">
                                <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">
                                    {{ __('Articulos Relacionados') }}</h1>
                            </div>
                            {{-- <a href="#"> --}}
                                <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4">
                                    @foreach ($cursosrelacionados as $items)
                                        <div
                                            class="p-4 md:w-1/3 md:mb-0 mb-6 flex flex-col justify-center items-center max-w-sm mx-auto">
                                            <div class="bg-gray-300 h-56 w-full rounded-lg shadow-md bg-cover bg-center"
                                                style="background-image: url({{ $items->portada }})">
                                            </div>
                                            <div class=" w-70 bg-white -mt-10 shadow-lg rounded-lg overflow-hidden p-5">
                                                <div class="header-content inline-flex ">
                                                    <div
                                                        class="category-badge flex-1  h-4 w-4 m rounded-full m-1 bg-purple-100">
                                                        <div class="h-2 w-2 rounded-full m-1 bg-purple-500 "></div>
                                                    </div>
                                                    <div class="title-post font-medium">{{ $items->titulo }}</div>
                                                </div>
                                                <div class="summary-post text-base text-justify">
                                                    {{ $items->descripcion_corta }}
                                                </div>
                                                <a href="{{route('coupons-udemy.show', ['rutacoupons' => $items->ruta])}}" class="py-2 px-6 mt-4 text-white w-full text-center hover:bg-blue-750 rounded-lg bg-blue-850 shadow-lg block md:inline-block">Ir al Curso</a>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            {{-- </a> --}}
                        </div>
                    </section>
                </div>
            </div>
        </div>
        <div class="-mx-8 w-full xl:w-4/12 hidden lg:block">
            <div class="px-8">
                <a target="_blank" rel="nofollow"
                    href="https://www.domestika.org/es/courses/highest_rated?atag=1649a9&utm_medium=affiliates&utm_source=jotafm645_1649a9"><img
                        width="320" height="480" border="0"
                        src="{{ asset('img/plantilla/coupon_domestica_Banner300x250.jpg') }}"
                        alt="Domestica cursosdev" /></a>
                <h1 class="mb-4 text-xl font-bold text-gray-700">CURSOS DESTACADOS</h1>
                <div class="flex flex-col bg-white max-w-lg px-6 py-4 mx-auto rounded-lg shadow-md">
                    @foreach ($cursosdestacados as $item)
                        <a href="{{ route('coupons-udemy.show', ['rutacoupons' => $item->ruta]) }}">
                            <div class="rounded w-full flex flex-col md:flex-row mb-10">
                                <img src="{{ asset($item->portada) }}"
                                    class="rounded-md h-32 sm:h-56 md:h-32 md:m-0 lg:h-16 m-4" />
                                <div class="bg-white rounded px-4">
                                    <div class="text-gray-800 font-semibold text-sm mb-2 md:mt-4 lg:mt-0">
                                        {{ $item->titulo }}
                                    </div>

                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

@endsection
