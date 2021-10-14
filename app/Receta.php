<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Receta extends Model
{
    //campos que se van a guardar
    protected $fillable = [
        'titulo', 'ingredientes','preparacion','imagen','categoria_id'
    ];


    public function categoria()
    {
        return $this->belongsTo(CategoriaReceta::class);
    }

}
