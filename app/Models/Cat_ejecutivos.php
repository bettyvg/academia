<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use \Illuminate\Support\Collection;
use Eloquent;

class Cat_ejecutivos extends Model
{
    protected $table = 'cat_ejecutivos';
    protected $primaryKey = 'id_ejecutivo';

    protected $fillable = ['nombre_ejecutivo','apellido_paterno','apellido_materno','estatus','updated_at','created_at'];

}

