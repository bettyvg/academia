<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cat_perfiles extends Model
{
    protected $table = 'cat_perfiles';
    protected $primaryKey = 'id_perfil';
    public $timestamps = false;

    protected $fillable = [
        'nom_perfil',
        'estatus',
        'created_at',
        'updated_at'
    ];
}


