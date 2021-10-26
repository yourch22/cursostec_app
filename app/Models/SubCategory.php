<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;
   protected $table='subcategories';
   public function categoria()
   {
       // relacion de una sub categoria pertenece a un solo categoria
       // orden de parametro 1: relacion ruta x\modelo, 2: id_tabla llaveforanea, id_tabla llaveprimaria
       return $this->belongsTo('App\Models\Category', 'categories_id', 'id');
   }
}
