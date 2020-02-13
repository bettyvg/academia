<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use \Illuminate\Support\Collection;
use Eloquent;

class documentos extends Eloquent
{
    protected $table = 'documentos';
    protected $primaryKey = 'id_documento';

}
