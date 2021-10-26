<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use App\Models\Language;
use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function show($idioma)
    {
        $categoria_home = Category::all();
  
        $cursosXidioma = Course::where([
            ['idioma', '=', $idioma],
            ['precio_oferta', '=', '0.00'],
        ])->orderBy('fecha', 'desc')->paginate(18);
        $languages = Language::all();
        return view("languages.show", [
            "cursosXidioma" => $cursosXidioma, 'languages' => $languages, "categoria_home" => $categoria_home
        ]);

  
    }
}
