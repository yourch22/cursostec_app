<div class="bg-gray-950 relative max-w-full mb-2 md:mb-4 z-10">
    <div class="bg-gray-950 flex text-gray-700 max-w-md mx-auto relative sm:max-w-none sm:w-full px-2 md:px-4 xl:max-w-screen-xl z-10">
        <div
            class="bg-gray-950 mb-2 ms:mb-2 md:mb-0 lg:mb-0 xl:mb-0  sm:mt-3 md:mt-4 lg:mt-4 xl:mt-4 flex flex-col w-full">
            <div class="bg-gray-950 flex flex-col items-start sm:flex-row sm:items-center">
                <a href="/" class="h-10 flex-shrink-0 my-3 sm:my-0">
                    <img src="{{ asset('img/logo-cursostec.png') }}" alt="logo cursostec" class="h-full rounded" />
                </a>
                <div class="flex-1 flex w-full min-w-0 sm:px-2 md:px-4 lg:px-16 xl:px-24">
                    <input type="search" name="serch" id="languaje" idioma="{{ app()->getLocale() }}"
                        placeholder="{{ __('¿Qué buscaremos hoy?') }}"
                        class="border border-r-0 rounded-l block flex-1 min-w-0 leading-6 text-sm px-4 focus:outline-none buscador">
                    <button type="submit"
                        class="flex-shrink-0 bg-gray-700 hover:bg-gray-600 px-4 py-2 leading-6 text-white rounded-r text-sm buscar">
                        {{ __('Buscar') }}
                    </button>
                </div>
            </div>
        </div>
        <div
            class="bg-gray-950 mb-2 ms:mb-2 md:mb-0 lg:mb-0 xl:mb-0 mt-3 absolute right-0 top-0 flex flex-shrink-0 px-2 md:flex-col sm:relative sm:pt-0 md:pt-1 sm:px-0 md:py-0">
            <div class="flex md:w-full flex-shrink-0">
                <a href="https://www.facebook.com/groups/2972697229723737" target="_blank"
                    class="hidden sm:flex items-center text-sm md:mr-2">
                    <span class="flex rounded bg-gray-700 hover:bg-gray-600 p-3 md:p-2 md:mr-2">
                        <svg class="w-4 h-4 md:w-6 md:h-6 text-white"
                            style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
                            version="1.1" viewBox="0 0 187 187" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink">
                            <defs>
                                <style type="text/css"><![CDATA[.fil1 {fill: #FEFEFE}]]></style>
                            </defs>
                            <g id="Layer_x0020_1">
                                <rect class="fil0" rx="18" ry="18" />
                                <path class="fil1"
                                    d="M131 79l0 -12c0,-6 4,-7 6,-7 3,0 18,0 18,0l0 -27 -24 0c-27,0 -33,20 -33,32l0 14 -15 0 0 19 0 12 16 0c0,35 0,77 0,77l30 0c0,0 0,-42 0,-77l23 0 1 -12 2 -19 -24 0z" />
                            </g>
                        </svg>
                    </span>
                </a>
                <a href="https://www.youtube.com/" target="_blank" class="hidden sm:flex items-center text-sm md:mr-2">
                    <span class="flex rounded bg-gray-700 hover:bg-gray-600 p-3 md:p-2 md:mr-2">
                        <svg class="w-4 h-4 md:w-6 md:h-6 text-white" fill="currentColor" id="Bold"
                            enable-background="new 0 0 24 24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="m23.469 5.929.03.196c-.29-1.029-1.073-1.823-2.068-2.112l-.021-.005c-1.871-.508-9.4-.508-9.4-.508s-7.51-.01-9.4.508c-1.014.294-1.798 1.088-2.083 2.096l-.005.021c-.699 3.651-.704 8.038.031 11.947l-.031-.198c.29 1.029 1.073 1.823 2.068 2.112l.021.005c1.869.509 9.4.509 9.4.509s7.509 0 9.4-.509c1.015-.294 1.799-1.088 2.084-2.096l.005-.021c.318-1.698.5-3.652.5-5.648 0-.073 0-.147-.001-.221.001-.068.001-.149.001-.23 0-1.997-.182-3.951-.531-5.846zm-13.861 9.722v-7.293l6.266 3.652z" />
                        </svg>
                    </span>
                </a>
                <a href="https://twitter.com/CursosDev" target="_blank" class="hidden sm:flex items-center text-sm md:mr-2">
                    <span class="flex rounded bg-gray-700 hover:bg-gray-600 p-3 md:p-2 md:mr-2">
                        <svg class="w-4 h-4 md:w-6 md:h-6 text-white" fill="currentColor" version="1.1" id="Capa_1"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                            y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;"
                            xml:space="preserve">
                            <path d="M512,97.248c-19.04,8.352-39.328,13.888-60.48,16.576c21.76-12.992,38.368-33.408,46.176-58.016
                                    c-20.288,12.096-42.688,20.64-66.56,25.408C411.872,60.704,384.416,48,354.464,48c-58.112,0-104.896,47.168-104.896,104.992
                                    c0,8.32,0.704,16.32,2.432,23.936c-87.264-4.256-164.48-46.08-216.352-109.792c-9.056,15.712-14.368,33.696-14.368,53.056
                                    c0,36.352,18.72,68.576,46.624,87.232c-16.864-0.32-33.408-5.216-47.424-12.928c0,0.32,0,0.736,0,1.152
                                    c0,51.008,36.384,93.376,84.096,103.136c-8.544,2.336-17.856,3.456-27.52,3.456c-6.72,0-13.504-0.384-19.872-1.792
                                    c13.6,41.568,52.192,72.128,98.08,73.12c-35.712,27.936-81.056,44.768-130.144,44.768c-8.608,0-16.864-0.384-25.12-1.44
                                    C46.496,446.88,101.6,464,161.024,464c193.152,0,298.752-160,298.752-298.688c0-4.64-0.16-9.12-0.384-13.568
                                    C480.224,136.96,497.728,118.496,512,97.248z" />
                        </svg>
                    </span>
                </a>
                <button type="button" class="items-center text-sm flex ml-2 md:hidden"
                    @click="mobileMenuOpen = !mobileMenuOpen">
                    <span class="flex rounded bg-gray-700 hover:bg-gray-600 p-3 relative md:p-2 md:mr-2"
                        :class="[ mobileMenuOpen === true ? 'bg-green-500 hover:bg-green-600' : '' ]">
                        <img src="https://obr.now.sh/remix/system/menu-line/eceef2" class="w-4 h-4 md:w-6 md:h-6"
                            :class="[ mobileMenuOpen === false ? 'visible' : 'invisible' ]" />
                        <img src="https://obr.now.sh/remix/system/close-line/eceef2"
                            class="w-4 h-4 absolute left-0 top-0 md:w-6 md:h-6 m-3"
                            :class="[ mobileMenuOpen === true ? 'visible' : 'invisible' ]" />
                    </span>
                </button>
            </div>
        </div>
    </div>
    <div class="bg-yellow-450 absolute w-full z-0 transform lg:block-important md:relative" x-show="mobileMenuOpen">
        <nav class="bg-yellow-450 w-full mt-2 md:mt-4 px-2 max-w-md mx-auto sm:max-w-none"
            @click.away="mobileMenuOpen = false">
            <ul
                class="bg-yellow-450 flex flex-col md:flex-row md:justify-start md:items-center text-gray-700 max-w-md sm:max-w-none mx-auto relative sm:w-full xl:max-w-screen-xl shadow rounded md:shadow-none md:rounded-none md:px-2 xl:px-4">
                <li class="mr-6 my-2 md:my-0 hidden lg:block xl:block" x-data="{ openCateg: false }">
                    <a class="cursor-pointer inline-flex items-center py-1 md:py-3 pl-1 align-middle text-base font-bold color_head_botton_text no-underline hover:text-white"
                        @click="openCateg = true">
                        <span class="pb-1 md:pb-0 text-sm uppercase">{{ __('Categorias') }}</span>
                        <svg fill="currentColor" viewBox="0 0 20 20"
                            :class="{'rotate-180': openCateg, 'rotate-0': !openCateg}"
                            class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>
                    <div class="bg-white text-sm shadow rounded-lg absolute pin-t pin-l ml-3 mt-5 z-30"
                        style="width:520px" x-show="openCateg" @click.away="openCateg = false">
                        <svg class="block fill-current text-white w-8 h-8 absolute pin-t pin-l ml-5 -mt-3 z-0"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path d="M12 0l12 10h-24z"></path>
                        </svg>
                        <div class="flex flex-wrap justify-between rounded-t-lg p-2">
                            <div class="grid gap-1 grid-cols-2 mx-auto w-screen">
                                <div class="flex flex-col">
                                    <div class="z-20 relative grid gap-6 bg-white px-5 py-6 sm:gap-8 sm:p-8">
                                        @foreach ($categoria_home as $item)
                                            <a href="{{ route('category.show', ['ruta' => $item->ruta, 'page' => 1]) }}"
                                                class="-m-3 p-1 text-xs flex items-start space-x-4 rounded-sm hover:bg-cool-gray-200 transition ease-in-out duration-150 hover:bg-gray-200">
                                                <div class="space-y-1">
                                                    <h2 id="listacategorias" id="listacategorias"
                                                        lang="{{ app()->getLocale() }}" tipo="{{ $item->ruta }}"
                                                        idcategoria="{{ $item['id'] }}"
                                                        class="text-base leading-6 font-medium text-gray-900">
                                                        {{ __($item['categoria']) }}
                                                    </h2>
                                                </div>
                                            </a>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="flex flex-col">
                                    <div id="listasubcategorias"
                                        class="z-20 relative grid gap-6 bg-white px-5 py-6 sm:gap-8 sm:p-8">
                                        <a
                                            class="-m-3 p-1 flex items-start space-x-4 rounded-sm hover:bg-cool-gray-300 transition ease-in-out duration-150">
                                            <div class="space-y-1">
                                                <p class="text-base leading-6 font-medium text-gray-900">
                                                </p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </li>
                <li class="mr-6 my-2 md:my-0 sm:block md:block lg:hidden xl:hidden">
                    <button class="cursor-pointer inline-flex items-center py-1 md:py-3 pl-1 align-middle text-base uppercase font-bold color_head_botton_text no-underline hover:text-white"
                        @click="showModal = true">
                        <i class="fas fa-tasks fa-fw mr-3"></i><span
                            class="pb-1 md:pb-0 text-sm uppercase">{{ __('Categorias') }}</span>
                        <svg class="text-gray-500 h-5 w-5 group-hover:text-gray-500 hover:text-white group-focus:text-gray-500 transition ease-in-out duration-150"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                </li>
                <li class="mr-6 my-2 md:my-0">
                    <a href="/cupones-gratis"
                        class="block py-1 md:py-3 pl-1 align-middle text-base font-bold color_head_botton_text no-underline hover:text-white">
                        <i class="fa fa-gift fa-fw mr-3"></i><span
                            class="relative pb-1 md:pb-0 text-sm uppercase">Cupones Udemy
                            <div class="absolute top-0 right-0 -mt-4 text-white text-xs -mr-4 px-3 py-0.5 bg-red-500 rounded-t-full rounded-br-full">
                                Gratis</div>
                        </span>
                    </a>
                </li>
                <li class="mr-6 my-2 md:my-0">
                    <a href="/cursos-gratis"
                        class="block py-1 md:py-3 pl-1 align-middle text-base font-bold color_head_botton_text no-underline hover:text-white">
                        <i class="fa fa-gift fa-fw mr-3"></i><span
                            class="relative pb-1 md:pb-0 text-sm uppercase">Cursos Udemy
                            <div class="absolute top-0 right-0 -mt-4 text-white text-xs -mr-4 px-3 py-0.5 bg-red-500 rounded-t-full rounded-br-full">
                                Gratis</div>
                        </span>
                    </a>
                </li>
        
            </ul>
        </nav>
    </div>
</div>
<div class="fixed inset-0 w-full h-full top-0 left-0 flex items-center justify-center z-20 overflow-y-auto"
    x-show="showModal" >
    <div class="modal-overlay absolute w-full h-full bg-gray-950 opacity-95"></div>
    <div class="modal-container fixed w-full h-full z-50">
          <div
          class="modal-close absolute top-0 right-0 cursor-pointer flex flex-col items-center mt-4 mr-4 text-black text-sm z-50" @click="showModal = false">
          <svg class="fill-current text-white" xmlns="http://www.w3.org/2000/svg" width="18" height="18"
              viewBox="0 0 18 18">
              <path
                  d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
              </path>
          </svg>
      </div>
        <div class="modal-content container mx-auto h-auto text-left p-4">
            <ul class="flex flex-col w-full">
                @foreach ($categoria_home as $item)
                    <li class="my-px">
                        <a href="{{ route('category.show', ['ruta' => $item->ruta, 'page' => 1]) }}"
                            class="flex flex-row items-center h-12 px-4 rounded-lg text-gray-300">
                            <h2>
                                <span class="ml-3">{{ __($item['categoria']) }}</span>
                            </h2>
                            <span
                                class="flex items-center justify-center text-sm h-6 px-2 rounded-full ml-auto">
                                <svg class="fill-current text-white h-6 w-6 mr-1"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </span>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>