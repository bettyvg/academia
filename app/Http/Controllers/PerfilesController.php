<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cat_perfiles;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\View;

class PerfilesController extends Controller
{
    public function index()
    {
        //
        $perfiles = Cat_perfiles::all()->where('estatus', '=', 'activo');


        return View::make('cat_perfiles.perfiles',  array('perfiles'=>$perfiles));
    }


    public function create()
    {
        //
        //dd(request()->all());
        $usuario_session = Session::get('usuario');
        if (!$usuario_session) {
            return Redirect::route('login');
        }

        Cat_perfiles::create(request()->all());/*Metodo create*/
        flash("El perfil se registro de manera exitosa!")->success()->important();
        return redirect('perfiles');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {

        Cat_perfiles::create(request()->all());/*Metodo create*/

        flash("El perfil se registro de manera exitosa!")->success()->important();
        return redirect('perfiles');

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

        $perfiles = Cat_perfiles::find($id);
//dd($perfiles);
        return View::make('cat_perfiles.edit_perfil', array('perfiles'=>$perfiles));

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
        $perfiles = Cat_perfiles::Find($id);

        //dd($id);

        $perfiles->nom_perfil =Input::get('nom_perfil_edit');
//dd($perfiles);

        $perfiles->save();

        flash("Se ha actualizó el perfiles de manera exitosa!")->success()->important();

        return Redirect::route('perfiles');

        //return redirect('perfiles', compact('perfiles'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $perfil = Cat_perfiles::find($id);
//dd($perfil);
        $perfil->estatus = 'inactivo';

        $perfil->save();

        flash("Se ha eliminado el perfil ".$perfil->nom_perfil." de manera exitosa!")->success()->important();

        return back();
    }
}
