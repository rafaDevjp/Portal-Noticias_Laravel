<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Noticia extends Model{

    //define a primaryKey como o valor a baixo
    protected $primaryKey = 'id_noticia';

    protected $fillable = ['titulo', 'autor', 'description', 'visivel', 'destaque','categoria'];
}
