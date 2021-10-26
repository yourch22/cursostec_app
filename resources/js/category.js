$(document).on("mouseover", "#listacategorias", (function () {
    var a = $(this).attr("idcategoria");
    var t = $(this).attr("tipo");
    var lang = $(this).attr("lang");
    var datossubcategory = new FormData();
    datossubcategory.append("idCategoria", a);
    datossubcategory.append("language", lang);
    $.ajax({
        url: "/subcategorias/" + a,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        method: "GET",
        data: datossubcategory,
        cache: !1,
        contentType: !1,
        processData: !1,
        dataType: "json",
        success: function (a) {
            $("#listasubcategorias").html("");
            for (var s = 0; s < a.length; s++){
                    $("#listasubcategorias").
                    append('<a  href="/' + t + "/" + a[s].ruta + '/1" class="-m-3 p-1 flex items-start space-x-4 rounded-lg hover:bg-gray-50 transition ease-in-out duration-150 hover:bg-gray-200">'+
                    '<div class="space-y-1"> <h2 class="text-base leading-6 font-medium text-gray-900">' +a[s].subcategoria+'</h2></div> </a>')
            } 
        }
    });
}));

//buscador
$(".buscador").change((function () {
    var idioma= $('#languaje').attr("idioma");
    var searh = $(this).val();
    if (/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]*$/.test(searh)) {
        var c = searh.replace(/[áéíóúÁÉÍÓÚ ]/g, "-");
        $(".buscar").click((function () {
            "" != $(".buscador").val() && (window.location = "/search/" + c + "/1");
        }))
    } else $(".buscador").val("")
})), $(document).on("keyup", ".buscador", (function (a) {
    if (a.preventDefault(), 13 == a.keyCode && "" != $(".buscador").val()) {
        var idioma= $('#languaje').attr("idioma");
        var c = $(".buscador").val();
        if (/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]*$/.test(c)) {
            var e = c.replace(/[áéíóúÁÉÍÓÚ ]/g, "-");
            window.location = "/search/" + e + "/1";
        } else $(".buscador").val("");
    }
}));
// Paginacion
$(document).ready((function () {
    var a = $("#uk-pagination").attr("totalpage"),
        t = $("#uk-pagination").attr("cat"),
        n = $("#uk-pagination").attr("url"),
        i = Number($("#uk-pagination").attr("pagina")),
        o = $("#uk-pagination").attr("tipo"),
        languag = $("#uk-pagination").attr("lan"); 
    $("#uk-pagination").twbsPagination({
        totalPages: a,
        visiblePages: 5,
        startPage: i,
        // first: '',
        // last: '',
        prev: '<svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>',
        next: '<svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/></svg>'
    }).on("page", (function (a, i) {
        "search" == o ? window.location = n + "/" + i : "category" == o ? window.location = n + "/" + t + "/" + i : "subcategory" == o && (window.location = n +"/" + t + "/" + i)
    }));
}));
