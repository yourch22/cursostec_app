<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SubCategoryController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[HomeController::class,'index'])->name('home.index');
Route::get('/cursos-gratis', [HomeController::class,'udemy_free'])->name('gratis');
Route::post('/{rutafree}', [HomeController::class,'show_udemy_free'])->name('udemy_gratis');
Route::get('/cupones-gratis', [CourseController::class, 'index'])->name('coupons');
Route::get('/{id_courses}-{rutafree}', [HomeController::class,'show_udemy_frees'])->name('udemy_gratiss');

route::get('/subcategorias/{icCategoria}',[HomeController::class,'show']);
Route::get('/search/{search}/{page}', [SearchController::class, 'search'])->name('search');
Route::get('/courses/{ruta}/{page}', [CategoryController::class,'show'])->name('category.show');
Route::get('/{ruta}/{rutas}/{page}', [SubCategoryController::class,'show'])->name("subcategory.show");
// Route::get('/coupons', [CourseController::class, 'index'])->name('coupons');
// Route::get('/cupones-udemy', [CourseController::class, 'index'])->name('coupons');
Route::get('/coupons-udemy/{rutacoupons}', [CourseController::class,'show'])->name("coupons-udemy.show");
Route::post('/comments', [CommentController::class, 'store'])->name('comments');
Route::get('/coupons/{idioma}', [LanguageController::class,'show'])->name("languages.show");
Route::get('/politicas-de-privacidad', [HomeController::class, 'politicas_privacidad'])->name('politicas-de-privacidad');
Route::get('/politica-de-cookies', [HomeController::class, 'politica_cookies'])->name('politica-de-cookies');
