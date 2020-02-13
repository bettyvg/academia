<?php

namespace App\Http\Controllers;

use App\Models\Cat_puestos;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class PuestosController extends Controller
{
    public function puestos()
    {
        $usuario_session = Session::get('usuario');
        if (!$usuario_session) {
            return Redirect::route('login');
        }

        $cat_puestos = Cat_puestos::all()->where('estatus', '=', 'activo');

        $usuario_session = Session::get('usuario');
        if (!$usuario_session) {
            return Redirect::route('login');
        }

        return View::make('puestos', array('cat_puestos'=>$cat_puestos));
    }
}
