<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cat_instituciones;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\View;

class InstitucionesController extends Controller
{
    public function index()
    {
        $instituciones = Cat_instituciones::all()->where('estatus', '=', 'activo');
//dd($instituciones);
        return View::make('cat_instituciones.instituciones',  array('instituciones'=>$instituciones));
    }


    public function create()
    {
        //
        //dd(request()->all());
        $usuario_session = Session::get('usuario');
        if (!$usuario_session) {
            return Redirect::route('login');
        }

        Cat_instituciones::create(request()->all());/*Metodo create*/
        flash("La institución se registro de manera exitosa!")->success()->important();
        return redirect('instituciones');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
       //dd(request()->all());
        Cat_instituciones::create(request()->all());/*Metodo create*/

        flash("La institución se registro de manera exitosa!")->success()->important();
        return redirect('instituciones');

        //return redirect('cat_perfiles.cat_perfiles')->with('Hecho', 'Capacitador guardado correctamente!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $instituciones = Cat_instituciones::find($id);
//dd($instituciones);
        return View::make('cat_instituciones.edit_instituciones', array('instituciones'=>$instituciones));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $instituciones = Cat_instituciones::find($id);

        //dd($instituciones);
        $instituciones->nombre_inst =Input::get('nombre_inst_edit');
        $instituciones->direccion =Input::get('direccion_edit');
    	$instituciones->contacto =Input::get('contacto_edit');
        $instituciones->telefono =Input::get('telefono_edit');
        $instituciones->save();

        flash("Se ha actualizó el institución de manera exitosa!")->success()->important();

        return Redirect::route('instituciones');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $instituciones = Cat_instituciones::find($id);

        $instituciones->estatus = 'inactivo';

        $instituciones->save();

        flash("Se ha eliminado la instituciones ".$instituciones->nombre_inst." de manera exitosa!")->success()->important();

        return back();
    }

}
