<?php

namespace App\Models;
use Eloquent;

class Cat_entidades extends Eloquent  {
    protected $table = 'cat_entidades';
    protected $primaryKey = 'cve_ent';
    public $timestamps = false;
}
