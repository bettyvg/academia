<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use App\Models\Cat_ejecutivos;

class EjecutivosController extends Controller
{
    public function ejecutivos()
    {

        $usuario_session = Session::get('usuario');
        if (!$usuario_session) {
            return Redirect::route('login');
        }



        $cat_ejecutivos = Cat_ejecutivos::all()->where('estatus', '=', 'activo');


        return View::make('ejecutivos', array('cat_ejecutivos'=>$cat_ejecutivos));
    }

    public function ejecutivoscreate()    {
        //dd(request()->all());
        try {
              $cat_ejecutivos = Cat_ejecutivos::all();

               // dd(request());

                Cat_ejecutivos::create(request()->all());

                //$alert = new \stdClass();
                //$alert->message = 'Se creo el ejecutivo correctamente';
                //return View::make('ejecutivos', array('alert' => $alert, 'cat_ejecutivos' => $cat_ejecutivos));
            return redirect('ejecutivos')->with('Capacitador guardado correctamente!');


        }catch (Exception $e) {
            $alert = new \stdClass();
            $alert->message = 'Ocurrió un error, por favor, contacte al administrador.';
            $alert->type = 'danger';
            return View::make('evaluacionplaticainfo',
                array(
                    'alert' => $alert)
            );
        }
    }

    public function delete_ejecutivos($id){

        $delete = Cat_ejecutivos::find($id);

        $delete->estatus = 'inactivo';
        $delete->save();
        //dd($delete);
        flash("Se ha eliminado el ejecutivo ".$delete->nombre_ejecutivo .' '.$delete->apellido_paterno.' '.$delete->apellido_materno." de manera exitosa!")->success()->important();

        return back();

    }

    public function edit($id){

        $ejecutivo = Cat_ejecutivos::find($id);

        return view('ejecutivos.edit', compact('ejecutivo'));
    }

    public function update($id)
    {

        $ejecutivo = Cat_ejecutivos::find($id);
//dd($ejecutivo);
        $ejecutivo->nombre_ejecutivo =  Input::get('nombre_ejecutivo_edit');
        $ejecutivo->apellido_paterno = Input::get('apellido_paterno_edit');
        $ejecutivo->apellido_materno = Input::get('apellido_materno_edit');

        $ejecutivo->save();

        flash("El ejecutivo se actualizó de manera exitosa!" )->success()->important();
        return Redirect::route('ejecutivos');
    }



}
