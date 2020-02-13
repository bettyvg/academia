<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Eloquent;

class cat_pais extends Eloquent
{
    protected $table = 'cat_pais';
    protected $primaryKey = 'id';
    public $timestamps = false;
}
