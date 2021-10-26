<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request, $search, $page){
            if ($search != "") {
                $busqueda = str_replace("-", "%20", $search);
            }
    
            $categoria_home = Category::all();
            // $page = 1;
            $page_size = 18;
            $type = "search";
            $price = "price-free";
            $language = 'es';
            $ordering = "relevance";
    
            $searchcursos = $this->serviciosapi->getCursosApi($page, $page_size, $type, $busqueda, $price, $language, $ordering);
            return view("search.show", array("categoria_home" => $categoria_home, "searchcursos" => $searchcursos, "page" => $page, "busqueda" => $busqueda));
    }
}
