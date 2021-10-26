<main class="w-full -mt-4">
    <div class="relative ">
        <div class="sliderAx h-4/5">
            <div id="slider-1" class="mx-auto">
                <div class="bg-cover bg-center  h-auto text-white py-14 px-10 object-fill"
                    style="background-image: url(@yield('category_banner'))">
                    <div class="md:w-1/2">
                        <p class="font-bold text-sm uppercase">{{__('Los mejores cursos de')}} @yield('category_title')</p>
                        <p class="text-3xl font-bold">CursosTec 2021</p>
                        <p class="text-2xl mb-10 leading-none">Con más de 5500 cursos, te guíamos a encontrar la ruta que te hará crecer como profesional y lo mejor de todo Gratis</p>
                        <a href="http://tradydaddy.com/" target="_blank"
                            class="bg-blue-850 py-4 px-8 text-white font-bold uppercase text-xs rounded hover:bg-blue-750 hover:text-white">Comienza a estudiar gratis</a>
                    </div>
                </div> <!-- container -->
                <br>
            </div>
        </div>
    </div>
</main>
