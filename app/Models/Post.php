<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model {
    use HasFactory;

    protected $fillable = ['title','slug','description','content','image','category_id'];    //En Laravel 11 a "fillable" se le incorpora "$" como si fuera una variable.

    public function category() {
        return $this->belongsTo(Category::class);     //Relación directa; en este caso un post sólo puede tener una categoria.
    }
}
