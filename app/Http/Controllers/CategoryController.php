<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show($ruta, $page)
    {
        $categoria_home = Category::all();
        // $page = 2;
        $page_size = 18;
        $type = "category";
        $price = "price-free";
        $language = 'es';
        $ordering = 'relevance';
        $categoriadetalle = Category::select('categories.*')->where('ruta', $ruta)->get();
        if ($categoriadetalle != null) {
            foreach ($categoriadetalle as $value) {
                $categories =  $value["api"];
            }
        }
        $cursoscategory = $this->serviciosapi->getCursosApi($page, $page_size, $type, $categories, $price, $language, $ordering);
        return view('category.show', array("categoria_home" => $categoria_home, "categoriadetalle" => $categoriadetalle, 'cursoscategory' => $cursoscategory, 'page' => $page));
    }
}
