@extends('layouts.app')
@section('_title', '⭐ Cursos de '.$busqueda.':')  
@section('meta_title', 'Los mejores cursos de '.$busqueda)
@section('meta_description','Los Cursos oficiales y verificados de Udemy Gratis. Ahorre hasta un 100% en muchos cursos. Estudia cualquier tema, en cualquier momento en Udemy',)
@section('meta_keyword','Cupones para Udemy & Cursos Online Gratis,codigos de promocion 100% OFF, cupones gratis,cursos gratis,cursos udemy gratis,descargar cursos de udemy gratis,cursos udemy mega,download courses udemy for Mega',)
@section('meta_url', Request::fullUrl())

@section('meta_image', url('/') . '/img/plantilla/cupones-udemy-gratis.jpg')
@section('content')
<div class="w-full mt-8 mb-6 mx-auto px-4 flex items-center justify-between">
  <span class="text-2xl">
    {{__('Los mejores cursos de')}}
    <strong class="text-2xl">{{ $busqueda }}</strong>
  </span>
</div>
<div class="w-screen sm:w-full md:full lg:w-full xl:w-full mx-auto grid grid-cols-1 px-4 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-4 mb-10">
  @foreach ($searchcursos->results as $key => $item)
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
    <a href="{{ config('services.cred_affiliate_admitad.url') . '' . config('services.cred_affiliate_admitad.sub_id') . config('services.cred_affiliate_admitad.url_udemy') . $item->url }}" target="_blank" class="c-card block bg-white shadow-md hover:shadow-xl rounded-lg overflow-hidden">
      <div class="relative pb-48 overflow-hidden">
        <img class="absolute inset-0 h-full w-full object-cover"
          src="{{$item->image_240x135}}" alt="">
      </div>
      <div class="p-4">
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
              @if ($item->price=="Free")
              <form action="{{ route('udemy_gratis',['rutafree'=>$item->published_title]) }}" method="post">
                @method('post')
                @csrf
                <input type="hidden" name="id_curso" value="{{$item->id}}">
              <button type="submit" target="_blank" class="bg-blue-850 text-sm hover:bg-blue-750 text-white font-bold py-2 px-6 rounded-full inline-flex items-center">
                <span>{{__('Ir al Curso')}}</span>
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
              </form>
              @else
              <button href="{{ config('services.cred_affiliate_admitad.url') . '' . config('services.cred_affiliate_admitad.sub_id') . config('services.cred_affiliate_admitad.url_udemy') . $item->url }}" target="_blank" class="bg-blue-850 text-sm hover:bg-blue-750 text-white font-bold py-2 px-6 rounded-full inline-flex items-center">
                <span>{{__('Ver Oferta')}}</span>
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
              @endif
          </div>
        </div>
      </div>
    </a>
  </div>
  @endforeach
</div>
@php
$totalpaginas= ceil($searchcursos->count/20);
@endphp
<div class="container mx-auto items-center content-center text-center">
    <div class="bg-white py-5 content-center justify-between border-t border-gray-200">
        <nav id="uk-pagination" class="relative z-0 content-center inline shadow-sm" url="{{url('/')}}/search/{{$busqueda}}"
             tipo="search" pagina="{{ $page }}"
            totalpage="{{ $totalpaginas }}" cat="">
        </nav>
    </div>
</div>
@endsection