<?php

namespace App\Http\Controllers;

use App\Models\Cat_ejecutivos;
use App\Models\Cat_entidades;
use Illuminate\Http\Request;
use App\Models\Cat_capacitador;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;

class CapacitadoresController extends Controller
{

    public function index()
    {
        //
        $usuario_session = Session::get('usuario');
        if (!$usuario_session) {
            return Redirect::route('login');
        }
        $capacitadores = Cat_capacitador::all()->where('estatus', '=', 'activo');
        $entidades = Cat_entidades::all();

        return view('cat_capacitadores.cat_capacitadores', compact('capacitadores','entidades'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
       //dd(request()->all());
        $usuario_session = Session::get('usuario');
        if (!$usuario_session) {
            return Redirect::route('login');
        }

        Cat_capacitador::create(request()->all());/*Metodo create*/
        flash("El capacittador se registro de manera exitosa!")->success()->important();


        return View::make('capacitadores');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        /*$request->validate([
            'nombre'=>'required',
            'apat'=>'required',
            'amat'=>'required'
        ]);*/

        //dd(request()->all());

        Cat_capacitador::create(request()->all());/*Metodo create*/


        flash("Se ha creado el capacitador de manera exitosa!")->success()->important();
        return redirect('cat_capacitadores');
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

        $capacitador = Cat_capacitador::find($id);
//dd($capacitador);
        return view('cat_capacitadores.edit_capacitador', compact('capacitador'));

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
         $capacitador = Cat_capacitador::Find($id);

        //dd($request);

        $capacitador->nom_cap =Input::get('nom_cap_edit');
        $capacitador->apellido_paterno =Input::get('apellido_paterno_edit');
        $capacitador->apellido_materno =Input::get('apellido_materno_edit');
        $capacitador->genero =Input::get('genero_edit');
        $capacitador->correo =Input::get('correo_edit');
        $capacitador->fecha_nacimiento =Input::get('fechanacimiento_edit');
        $capacitador->rfc =Input::get('rfc_edit');
        $capacitador->telefono =Input::get('telefono_edit');
        $capacitador->save();

        flash("Se ha actualizó el capacitador de manera exitosa!")->success()->important();
        return redirect('cat_capacitadores');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete_capacitador($id)
    {
        $delete = Cat_capacitador::find($id);
//DD($delete);
        $delete->estatus = 'inactivo';
        $delete->save();

        flash("Se ha eliminado el capacitador ".$delete->nom_cap." de manera exitosa!")->success()->important();

        return back();
    }
}
