<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class video_stop extends Model
{
    public $table = 'video_stop';
    protected $primaryKey = 'id_video_stop';

    protected $fillable = [
        'id_usuario',
        'id_cursosonline',
        'stop_video'
    ];
}
