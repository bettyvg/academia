<?php

namespace App\Http\Controllers;

use App\Models\cursos;
use App\Models\Cat_temas;
use App\Models\Cat_capacitador;
use App\Models\Cat_instituciones;
use App\Models\documentos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;
use Illuminate\Validation\Rules\In;

class CursosController extends Controller
{
    function  cursos(){
        $usuario_session = Session::get('usuario');
        if (!$usuario_session) {
            return Redirect::route('login');
        }

        if(Input::get('editar') == 0)
            $alert = $this->nuevo_curso();
        else
            $alert = $this->editar_curso(Input::get('id_curso'));

        $cat_temas = Cat_temas::where('estatus', 'activado')->orderBy('tema')->get();
        $cat_capacitador = Cat_capacitador::orderBy('nom_cap')->get();
        $cat_instituciones = Cat_instituciones::orderBy('nombre_inst')->get();
        $cursos = DB::select('SELECT cursos.id_curso,cursos.nom_curso, cursos.fecha_inicio, cursos.hora_inicio, cursos.fecha_fin, cursos.hora_fin,
                cursos.descripcion, cat_temas.tema,cat_instituciones.nombre_inst, documentos.nombre as nombre_documento, cat_capacitador.nom_cap as nombre_capacitador,
                cat_capacitador.apellido_paterno as apellido_paterno_capacitador, cat_capacitador.apellido_materno as apellido_materno_capacitador, cursos.id_tema,cat_instituciones.direccion
                FROM cursos
                INNER JOIN cat_temas ON cat_temas.id_tema = cursos.id_tema
                INNER JOIN cat_instituciones ON cat_instituciones.id_institucion = cursos.id_institucion
                INNER JOIN cat_capacitador on cat_capacitador.id_capacitador = cursos.id_capacitador
                LEFT JOIN documentos ON documentos.id = cursos.id_curso AND documentos.tabla = "cursos"');

        return View::make('cursos.cursos',
            array('cat_temas' => $cat_temas,
                'cat_capacitadores' => $cat_capacitador,
                'alert' => $alert,
                'cat_instituciones' => $cat_instituciones,
                'cursos' => $cursos));
    }

    function nuevo_curso(){

        $curso = new cursos();
//dd($curso);
        $curso->nom_curso = Input::get('nombre_curso');
        $curso->id_tema = Input::get('categoria');
        $curso->id_institucion = Input::get('ubicacion');
        $curso->fecha_inicio = Input::get('fecha_inicio');
        $curso->hora_inicio = Input::get('horario_inicio');
        $curso->fecha_fin = Input::get('fecha_fin');
        $curso->hora_fin = Input::get('horario_fin');
        $curso->descripcion = Input::get('descripcion');
        $curso->id_admn = Session::get('usuario')->id_usuario;
        $curso->id_capacitador = Input::get('capacitador');

        if($curso->save()){
            $alert = new \stdClass();
            $alert->message = 'El curso se registro correctamente.';
            $alert->type = 'success';

            /** imagen para curso **/
            $name = null;
            $extension = null;
            $img = Input::file('imagen_curso');

            if ($img != null) {
                $imagen_curso = new documentos();
                $extension = Input::file('imagen_curso')->getClientOriginalExtension();
                if ($extension == 'png' || $extension == 'PNG' || $extension == 'JPG'|| $extension == 'JPEG' || $extension == 'jpg'|| $extension == 'jpeg') {
                    $name = date("YmdHis") . uniqid("", true) . '.' . $extension;
                    $imagen_curso->nombre = $name;
                    $imagen_curso->tipo_documento = 'IMAGEN';
                    $imagen_curso->tabla = 'cursos';
                    $imagen_curso->extension = $extension;
                    $imagen_curso->id = $curso->id_curso;
                    $imagen_curso->id_user = Session::get('usuario')->id_usuario;

                    $imagen_curso->save();

                    Input::file('imagen_curso')->move(public_path('img/documentos'), $imagen_curso->nombre);
                }
            }

        }else{
            $alert = new \stdClass();
            $alert->message = 'Ocurrio un error al registrar el curso, por favor contacte al administrador.';
            $alert->type = 'danger';
        }

        return $alert;
    }

    function editar_curso($id_curso){

        $curso = cursos::find($id_curso);

        $curso->nom_curso = Input::get('nombre_curso');
        $curso->id_tema = Input::get('categoria');
        $curso->id_institucion = Input::get('ubicacion');
        $curso->fecha_inicio = Input::get('fecha_inicio');
        $curso->hora_inicio = Input::get('horario_inicio');
        $curso->fecha_fin = Input::get('fecha_fin');
        $curso->hora_fin = Input::get('horario_fin');
        $curso->descripcion = Input::get('descripcion');
        $curso->id_admn = Session::get('usuario')->id_usuario;
        $curso->id_capacitador = Input::get('capacitador');

        if($curso->save()){
            $alert = new \stdClass();
            $alert->message = 'El curso se actualizo correctamente.';
            $alert->type = 'success';

            /** imagen para curso **/
            $name = null;
            $extension = null;
            $img = Input::file('imagen_curso');

            if ($img != null) {
                $document = documentos::where('id',$curso->id_curso)->where('tabla', 'cursos')->first();
                $imagen_curso = new documentos();
                $extension = Input::file('imagen_curso')->getClientOriginalExtension();
                if ($extension == 'png' || $extension == 'PNG' || $extension == 'JPG'|| $extension == 'JPEG' || $extension == 'jpg'|| $extension == 'jpeg') {
                    $name = date("YmdHis") . uniqid("", true) . '.' . $extension;
                    $imagen_curso->nombre = $name;
                    $imagen_curso->tipo_documento = 'IMAGEN';
                    $imagen_curso->tabla = 'cursos';
                    $imagen_curso->extension = $extension;
                    $imagen_curso->id = $curso->id_curso;
                    $imagen_curso->id_user = Session::get('usuario')->id_usuario;

                    if($imagen_curso->save()){
                        if($document != null){
                            unlink(public_path('img/documentos/'.$document->nombre));
                            $document->delete();
                        }
                        Input::file('imagen_curso')->move(public_path('img/documentos'), $imagen_curso->nombre);
                    }

                }
            }

        }else{
            $alert = new \stdClass();
            $alert->message = 'Ocurrio un error al actualizar el curso, por favor contacte al administrador.';
            $alert->type = 'danger';
        }

        return $alert;
    }

    function get_curso($id){
        $cursos = DB::select('SELECT cursos.id_curso,cursos.nom_curso, cursos.fecha_inicio, cursos.hora_inicio, cursos.fecha_fin, cursos.hora_fin,
                        cursos.descripcion, cat_temas.tema,cat_instituciones.nombre_inst, documentos.nombre as nombre_documento, cat_capacitador.nom_cap as nombre_capacitador,
                        cat_capacitador.apellido_paterno as apellido_paterno_capacitador, cat_capacitador.apellido_materno as apellido_materno_capacitador, 
                        cursos.id_institucion, cursos.id_capacitador, cursos.id_tema, cat_instituciones.direccion
                        FROM cursos
                        INNER JOIN cat_temas ON cat_temas.id_tema = cursos.id_tema
                        INNER JOIN cat_instituciones ON cat_instituciones.id_institucion = cursos.id_institucion
                        INNER JOIN cat_capacitador on cat_capacitador.id_capacitador = cursos.id_capacitador
                        LEFT JOIN documentos ON documentos.id = cursos.id_curso AND documentos.tabla = "cursos"
                        WHERE cursos.id_curso = '.$id);

        return response()->json($cursos, 200);
    }
}
