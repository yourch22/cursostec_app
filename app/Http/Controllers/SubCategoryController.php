<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    public function show(SubCategory $subcategory, $ruta, $rutas, $page)
    {
        $categoria_home = Category::all();
        $traerCatySub = Subcategory::all();
        $subcategoriadetalle = Subcategory::where('ruta', $rutas)->get();
        // $page = 2;
        $page_size = 18;
        if ($subcategoriadetalle[0]["gratis"]==1) {
            $type = "category";
            $price = "price-free";
        } else {
            $type = "subcategory";
            $price = "price-free";
        }

        $language = 'es';
        $ordering = 'relevance';

        // foreach ($subcategoriadetalle as $value) {
        //     $category =  $value["api"];
        // }
        $category =  $subcategoriadetalle[0]["api"];
        $cursosSubcategory = $this->serviciosapi->getCursosApi($page, $page_size, $type, $category, $price, $language, $ordering);

        return view("subcategory.show", array(
            "categoria_home" => $categoria_home,
            "subcategoriadetalle" => $subcategoriadetalle,
            'cursosSubcategory' => $cursosSubcategory,
            'page' => $page,
            'traerCatySub' => $traerCatySub
        ));
    }
}
