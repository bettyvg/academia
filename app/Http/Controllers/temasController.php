<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;


use App\Models\Cat_temas;


class temasController extends Controller
{
    public function temas()
    {
        $usuario_session = Session::get('usuario');
        if (!$usuario_session) {
            return Redirect::route('login');
        }

        $cat_temas = Cat_temas::all()->where('estatus', '=', 'activo');
        $usuario_session = Session::get('usuario');
        if (!$usuario_session) {
            return Redirect::route('login');
        }

        return View::make('cat_temas.temas', array('cat_temas'=>$cat_temas));
    }

   public function registrotemas()
{
    $cat_temas = Cat_temas::all()->where('estatus', '=', 'activo');
    Cat_temas::create(request()->all());


    $alert = new \stdClass();
    $alert->message = 'El tema se creo correctamente.';
    $alert->type = 'success';

    flash("El tema se registro de manera exitosa!")->success()->important();
    return redirect('temas');


    //return View::make('temas', array(
    //  'alert' => $alert, 'cat_temas'=>$cat_temas));
}
    public function edit($id)
    {

        $tema = Cat_temas::find($id);
//dd($capacitador);
        return view('cat_temas.edit_tema', compact('tema'));

    }


    public function update($id)
    {
        $tema = Cat_temas::Find($id);

        //dd($request);

        $tema->num_sesion =Input::get('nom_cap_edit');
        $tema->tema =Input::get('apellido_paterno_edit');
        $tema->save();

        flash("Se ha actualizó el tema de manera exitosa!")->success()->important();
        return redirect('temas');

    }

    public function delete($id)
    {
        $delete = Cat_temas::find($id);

        $delete->estatus = 'inactivo';
        $delete->save();

        flash("Se ha eliminado el tema ".$delete->tema." de manera exitosa!")->success()->important();

        return back();
    }

}
