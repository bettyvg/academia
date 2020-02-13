<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cat_temas extends Model
{
    protected $table = 'cat_temas';
    protected $primaryKey = 'id_tema';


    protected $fillable = ['num_sesion','tema','estatus','updated_at','created_at',];
}
