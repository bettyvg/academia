<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cat_codigospostales extends Model
{
    protected $table = 'cat_codigos_postales';
    protected $primaryKey = 'id_codigocp';
    public $timestamps = false;
}
