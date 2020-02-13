<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class EvaluacionCap extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    //Query Scope

    protected function scopeCapacitador($query, $id_capacitador)
    {
        if($id_capacitador)
            return $query->where('capacitador','LIKE', "%$id_capacitador%");

    }
    protected function scopefecha1($query, $fecha1)
    {
        if($fecha1)
            return $query->where('fecha1','>=', "$fecha1");

    }
    protected function scopefecha2($query, $fecha2)
    {
        if($fecha2)
            return $query->where('fecha2','<=', "$fecha2");

    }

}
