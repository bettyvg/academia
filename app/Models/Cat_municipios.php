<?php

namespace App\Models;
use Eloquent;

class Cat_municipios extends Eloquent  {
    protected $table = 'cat_municipios';
    protected $primaryKey = 'cve_compuesta_ent_mun';
    public $timestamps = false;
}
