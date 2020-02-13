<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class calendarioModel extends Model
{
    protected $table = 'cursos';
    protected $primaryKey = 'id_capacitador';
    public $timestamps = false;
}
