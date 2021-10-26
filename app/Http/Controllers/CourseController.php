<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Course;
use App\Models\Language;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class CourseController extends Controller
{
    public function index(Request $request)
    {
        $categoria_home = Category::all();
        $languages = Language::all();
        $cupones = Course::latest("fecha")->where('precio_oferta', '=' ,'0.00')->paginate(18);
        $cupones_destacados = Course::where('finOferta','>',date("Y-m-d H:i:s"))->orderBy('visitas','desc')->limit(20)->get();
        $cupones_descuento = Course::where('finOferta','>',date("Y-m-d H:i:s"))->where('precio_oferta', '>', '0.00')->orderBy('visitas','desc')->limit(18)->get();
        return view('courses.index', ['categoria_home' => $categoria_home, 'cupones'=>$cupones,'cupones_destacados'=>$cupones_destacados,'languages'=>$languages,'cupones_descuento'=>$cupones_descuento]);
    }
    public function show(Request $request, $rutacoupons)
    {
        $cursosdetalle = Course::where('ruta', $rutacoupons)->first();
        $cursosdestacados = Course::where('finOferta','>',date("Y-m-d H:i:s"))->orderBy('visitas','desc')->limit(12)->get();

        $comments = Comment::where('courses_id','=', $cursosdetalle->id)->where(function ($query) {
               $query->where('estado', '=', 1)
                    ->orderBy('fecha_comentario', 'desc');
           })->limit(6)->get();

        $cursosrelacionados = Course::where("subcategories_id", '=', $cursosdetalle->subcategories_id)->orderBy('visitas', 'desc')->limit(3)->get();
        if (Cache::has($cursosdetalle->id) == false) {
            Cache::add($cursosdetalle->id, 'contador', 30);
            $cursosdetalle->visitas += 1;
            $cursosdetalle->save();
        }
        $categoria_home = Category::all();
        return view("courses.show", array(
            "cursosdetalle" => $cursosdetalle,
            "cursosdestacados" => $cursosdestacados,
            "cursosrelacionados" => $cursosrelacionados,
            "categoria_home" => $categoria_home,
            "comments"=>$comments
        ));
    }
}
