<?php

namespace App\Models;
use Eloquent;
use Illuminate\Database\Eloquent\Model;

class Cat_escolaridad extends Eloquent  {
    public $table = 'cat_escolaridad';
    protected $primaryKey = 'id_escolaridad';
    public $timestamps = false;
}