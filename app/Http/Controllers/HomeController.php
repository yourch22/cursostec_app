<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $page = 1;
        $page_size = 18;
        $type = "category";
        $price = "price-free";
        $language = "es";
        $ordering = 'relevance';
        $categoria_home = Category::all();
        $cupones = Course::latest("fecha")->where('precio_oferta', '=' ,'0.00')->paginate(18);
        $i = mt_rand(1, 5);
        if ($i) {
            $categoria = Category::where("id", $i)->get();
            $category =  $categoria[0]["api"];
            $cursos = $this->serviciosapi->getCursosApi($page, $page_size, $type, $category, $price, $language, $ordering);
        }
        $i1 = mt_rand(6, 9);
        if ($i1) {
            $categoria1 = Category::where("id", $i1)->get();
            $category1 =  $categoria1[0]["api"];
            $cursos1 = $this->serviciosapi->getCursosApi($page, $page_size, $type, $category1, $price, $language, $ordering);
        }
        $i2 = mt_rand(10, 13);
        if ($i2) {
            $categoria2 = Category::where("id", $i2)->get();
            $category2 =  $categoria2[0]["api"];
            $cursos2 = $this->serviciosapi->getCursosApi($page, $page_size, $type, $category2, $price, $language, $ordering);
        }

        // $languaje = "en";
        $this->serviciosapi->getLanguages($language);
        $idioma_actual = app()->getlocale();
        return view('home.index', [
            'categoria_home'=>$categoria_home, 'categoria1' => $categoria1, 'categoria2' => $categoria2,
            'cursos' => $cursos, 'cursos1' => $cursos1, 'cursos2' => $cursos2,'idioma_actual'=>$idioma_actual,'cupones'=>$cupones
        ]);
    }
    
    public function show(Request $request, $idCategoria)
    {
        if ($request->ajax()) {
            $home = Category::find($idCategoria)->subcategoria;
            return response()->json($home);
        }
        $data = SubCategory::select('subcategoria', 'id')->where('categories_id', $request->idCategoria)->take(100)->get();
        return response()->json($data);
    }
    public function udemy_free(){
        $page = 1;
        $page_size = 18;
        $type = "category";
        $price = "price-free";
        $language = "es";
        $ordering = 'relevance';
        $categoria_home = Category::all();
        $i = mt_rand(1, 5);
        if ($i) {
            $categoria = Category::where("id", $i)->get();
            $category =  $categoria[0]["api"];
            $cursos = $this->serviciosapi->getCursosApi($page, $page_size, $type, $category, $price, $language, $ordering);
        }
        $i1 = mt_rand(6, 9);
        if ($i1) {
            $categoria1 = Category::where("id", $i1)->get();
            $category1 =  $categoria1[0]["api"];
            $cursos1 = $this->serviciosapi->getCursosApi($page, $page_size, $type, $category1, $price, $language, $ordering);
        }
        $i2 = mt_rand(10, 13);
        if ($i2) {
            $categoria2 = Category::where("id", $i2)->get();
            $category2 =  $categoria2[0]["api"];
            $cursos2 = $this->serviciosapi->getCursosApi($page, $page_size, $type, $category2, $price, $language, $ordering);
        }

        // $languaje = "en";
        $this->serviciosapi->getLanguages($language);
        $idioma_actual = app()->getlocale();
         $cupones_descuento = Course::where('finOferta','>',date("Y-m-d H:i:s"))->where('precio_oferta', '>', '0.00')->orderBy('visitas','desc')->limit(18)->get();
        return view('free.index', [
            'categoria_home'=>$categoria_home, 'categoria1' => $categoria1, 'categoria2' => $categoria2,
            'cursos' => $cursos, 'cursos1' => $cursos1, 'cursos2' => $cursos2,'idioma_actual'=>$idioma_actual,'cupones_descuento'=>$cupones_descuento
        ]);
    }
    public function show_udemy_free(Request $request, $rutafree)
    {
        // $id_curso = $request->id_curso;
        $courses_free_detalle=$this->serviciosapi->getCourses($request->id_curso);
        $rutaSubCategory=$courses_free_detalle->primary_subcategory->title_cleaned;
        $page = 1;
        $page_size = 6;
        $type = "subcategory";
        $price = "price-free";
        $language = "es";
        $ordering = 'relevance';
        $categoria1 = Subcategory::where("ruta", $rutaSubCategory)->get();
        $category1 =  $categoria1[0]["api"];
        $cursos2_relacionados = $this->serviciosapi->getCursosApi($page, $page_size, $type, $category1, $price, $language, $ordering);
        $categoria_home = Category::all();
        
        // $cursosdestacados = Course::orderBy('fecha', 'desc')->orderBy('visitas', 'desc')->limit(12)->get();
        $cursosdestacados = Course::where('finOferta','>',date("Y-m-d H:i:s"))->orderBy('visitas','desc')->limit(12)->get();
        // $data = SubCategory::select('subcategoria', 'id')->where('categories_id', $request->idCategoria)->take(100)->get();
        return view('free.show', [
            'categoria_home'=>$categoria_home,'courses_free_detalle'=>$courses_free_detalle,'cursosdestacados'=>$cursosdestacados,'cursos2_relacionados'=>$cursos2_relacionados]);
    }
    public function show_udemy_frees(Request $request, $id_courses, $rutafree)
    {
        // $id_curso = $request->id_curso;
        $courses_free_detalle=$this->serviciosapi->getCourses($id_courses);
        $rutaSubCategory=$courses_free_detalle->primary_subcategory->title_cleaned;
        $page = 1;
        $page_size = 6;
        $type = "subcategory";
        $price = "price-free";
        $language = "es";
        $ordering = 'relevance';
        $categoria1 = Subcategory::where("ruta", $rutaSubCategory)->get();
        $category1 =  $categoria1[0]["api"];
        $cursos2_relacionados = $this->serviciosapi->getCursosApi($page, $page_size, $type, $category1, $price, $language, $ordering);
        $categoria_home = Category::all();
        
        // $cursosdestacados = Course::orderBy('fecha', 'desc')->orderBy('visitas', 'desc')->limit(12)->get();
        $cursosdestacados = Course::where('finOferta','>',date("Y-m-d H:i:s"))->orderBy('visitas','desc')->limit(12)->get();
        // $data = SubCategory::select('subcategoria', 'id')->where('categories_id', $request->idCategoria)->take(100)->get();
        return view('free.show', [
            'categoria_home'=>$categoria_home,'courses_free_detalle'=>$courses_free_detalle,'cursosdestacados'=>$cursosdestacados,'cursos2_relacionados'=>$cursos2_relacionados]);
    }
    public function politicas_privacidad(){
        $categoria_home = Category::all();
        return view('politicas_privacidad.politicas-de-privacidad',['categoria_home'=>$categoria_home]);
    }
    
    public function politica_cookies(){
        $categoria_home = Category::all();
        return view('politicas_privacidad.politica-de-cookies',['categoria_home'=>$categoria_home]);
    }
    
}
