<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table='categories';
    public function subcategoria()
    {
        // return $this->belongsTo('App\Subcategorias', 'id_categoria', 'id');
        return $this->hasMany('App\Models\SubCategory', 'categories_id', 'id');
    }
}
