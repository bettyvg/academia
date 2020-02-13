<?php

namespace App\Http\Controllers;

use App\Models\cursosOnlineModel;
use App\Models\Cat_temas;
use App\Models\Cat_capacitador;
use App\Models\documentos;
use App\Models\inscripcioncurso;
use App\Models\video_stop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;
use Illuminate\Validation\Rules\In;

class CursosOnlineController extends Controller
{
   function  cursos_online(){
       $usuario_session = Session::get('usuario');
       if (!$usuario_session) {
           return Redirect::route('login');
       }


    if(Input::get('editar_online') == 0)
            $alert = $this->nuevo_curso();
        else
            $alert = $this->editar_curso(Input::get('id_cursosonline'));

        $cat_temas = Cat_temas::where('estatus', 'activo')->orderBy('tema')->get();
        //dd($cat_temas);
        $cat_capacitador = Cat_capacitador::where('estatus', 'activo')->orderBy('nom_cap')->get();

       $cursos = DB::select('SELECT cursos_online.id_cursosonline,cursos_online.nombre_curso, cursos_online.descripcion, cat_temas.tema, documentos.nombre as nombre_documento, cat_capacitador.nom_cap as nombre_capacitador, video_stop.id_cursosonline,video_stop.stop_video,
                        cat_capacitador.apellido_paterno as apellido_paterno_capacitador, cat_capacitador.apellido_materno as apellido_materno_capacitador, cursos_online.id_capacitador, cursos_online.id_categoria, documentos.tipo_documento,documentos.extension
                        FROM cursos_online
                        LEFT JOIN cat_temas ON cat_temas.id_tema = cursos_online.id_categoria    
                        LEFT JOIN cat_capacitador on cat_capacitador.id_capacitador = cursos_online.id_capacitador
                        LEFT JOIN video_stop ON video_stop.id_cursosonline = cursos_online.id_cursosonline
                        LEFT JOIN documentos ON documentos.id = cursos_online.id_cursosonline AND documentos.tabla = "cursos_online"
                        WHERE documentos.tipo_documento = "IMAGEN" and video_stop.id_usuario = '. $usuario_session->id_usuario);

        return View::make('cursos.cursos_online',
            array('cat_temas' => $cat_temas,
                'cat_capacitadores' => $cat_capacitador,
                'alert' => $alert,
                'cursos' => $cursos));
    }

    function nuevo_curso(){
        $usuario_session = Session::get('usuario');
        if (!$usuario_session) {
            return Redirect::route('login');
        }
        $curso = new cursosOnlineModel();

        $curso->nombre_curso = Input::get('nombre_curso_online');
        $curso->id_categoria = Input::get('categoria_online');
        $curso->id_capacitador = Input::get('capacitador_online');
        $curso->descripcion = Input::get('descripcion_online');
        $curso->id_admin = Session::get('usuario')->id_usuario;


        if($curso->save()) {
            $alert = new \stdClass();
            $alert->message = 'El curso se registro correctamente.';
            $alert->type = 'success';

            /** imagen para curso **/
            $name = null;
            $extension = null;
            $img = Input::file('imagen_curso');
            $video = Input::file('video_curso');
            $archivo = Input::file('archivo_apoyo');
            //dd($img);
            if ($img != null && $video != null && $archivo != null) {
                $imagen_curso = new documentos();
                $video_curso = new documentos();
                $archivo = new documentos();

                $extension = Input::file('imagen_curso')->getClientOriginalExtension();
                $extension_video = Input::file('video_curso')->getClientOriginalExtension();
                $extension_documentos = Input::file('archivo_apoyo')->getClientOriginalExtension();

//dd($curso->id_cursoOnline);

                if ($extension == 'png' || $extension == 'PNG' || $extension == 'JPG' || $extension == 'JPEG' || $extension == 'jpg' || $extension == 'jpeg') {
                    $name = date("YmdHis") . uniqid("", true) . '.' . $extension;
                    $imagen_curso->nombre = $name;
                    $imagen_curso->tipo_documento = 'IMAGEN';
                    $imagen_curso->tabla = 'cursos_online';
                    $imagen_curso->extension = $extension;
                    $imagen_curso->id = $curso->id_cursosonline;
                    $imagen_curso->id_user = Session::get('usuario')->id_usuario;

                    $imagen_curso->save();

                    //dd($imagen_curso);

                    Input::file('imagen_curso')->move(public_path('img/documentos'), $imagen_curso->nombre);
                }

                if ($extension_video == 'omg' || $extension_video == 'wmv' || $extension_video == 'mpg' || $extension_video == 'webm' || $extension_video == 'mov' ||
                    $extension_video == 'asx' || $extension_video == 'mpeg' || $extension_video == 'mp4' || $extension_video == 'm4v' || $extension_video == 'avi') {
                    $name = date("YmdHis") . uniqid("", true) . '.' . $extension_video;
                    $video_curso->nombre = $name;
                    $video_curso->tipo_documento = 'VIDEO';
                    $video_curso->tabla = 'cursos_online';
                    $video_curso->extension = $extension_video;
                    $video_curso->id = $curso->id_cursosonline;
                    $video_curso->id_user = Session::get('usuario')->id_usuario;

                    $video_curso->save();

                    Input::file('video_curso')->move(public_path('img/documentos'), $video_curso->nombre);
                }

                if ($extension_documentos == 'pdf') {
                    $name = date("YmdHis") . uniqid("", true) . '.' . $extension_documentos;
                    $archivo->nombre = $name;
                    $archivo->tipo_documento = 'DOCUMENTO';
                    $archivo->tabla = 'cursos_online';
                    $archivo->extension = $extension_documentos;
                    $archivo->id = $curso->id_cursosonline;
                    $archivo->id_user = Session::get('usuario')->id_usuario;

                    $archivo->save();

                    Input::file('archivo_apoyo')->move(public_path('img/documentos'), $archivo->nombre);
                }

        }
        }else{
            $alert = new \stdClass();
            $alert->message = 'Ocurrio un error al registrar el curso, por favor contacte al administrador.';
            $alert->type = 'danger';
        }

        return $alert;
    }

    function editar_curso($id){

        $curso1 = cursosOnlineModel::find($id);
//dd($curso1);
        $curso1->nombre_curso = Input::get('nombre_curso_online');
        $curso1->id_categoria = Input::get('categoria_online');
        $curso1->id_capacitador = Input::get('capacitador_online');
        $curso1->descripcion = Input::get('descripcion_online');
        $curso1->id_admin = Session::get('usuario')->id_usuario;

        if($curso1->save()){

            $alert = new \stdClass();
            $alert->message = 'El curso se actualizo correctamente.';
            $alert->type = 'success';

            //dd($curso1);

            /** imagen para curso **/
            $name = null;
            $extension = null;
            $img = Input::file('imagen_curso');
            $video_curso = Input::file('video_curso');
            $archivo = Input::file( 'archivo_apoyo');

            if ($img != null && $video_curso != null && $archivo != null) {

                $document = documentos::where('id',$curso1->id_cursoOnline)->where('tabla', 'cursos_online')->first();

                $imagen_curso = new documentos();

                $extension = Input::file('imagen_curso')->getClientOriginalExtension();
                $extension_video = Input::file('video_curso')->getClientOriginalExtension();
                $extension_documentos = Input::file('archivo_apoyo')->getClientOriginalExtension();


                if ($extension == 'png' || $extension == 'PNG' || $extension == 'JPG'|| $extension == 'JPEG' || $extension == 'jpg'|| $extension == 'jpeg') {
                    $name = date("YmdHis") . uniqid("", true) . '.' . $extension;
                    $imagen_curso->nombre = $name;
                    $imagen_curso->tipo_documento = 'IMAGEN';
                    $imagen_curso->tabla = 'curso_online';
                    $imagen_curso->extension = $extension;
                    $imagen_curso->id = $curso1->id_cursosonline;
                    $imagen_curso->id_user = Session::get('usuario')->id_usuario;

                    if($imagen_curso->save()){
                        if($document != null){
                            unlink(public_path('img/documentos/'.$document->nombre));
                            $document->delete();
                        }
                        Input::file('imagen_curso_online')->move(public_path('img/documentos'), $imagen_curso->nombre);
                    }

                }
                if ($extension_video == 'omg' || $extension_video == 'wmv' || $extension_video == 'mpg' || $extension_video == 'webm' || $extension_video == 'mov' ||
                    $extension_video == 'asx' || $extension_video == 'mpeg' || $extension_video == 'mp4' || $extension_video == 'm4v' || $extension_video == 'avi') {
                    $name = date("YmdHis") . uniqid("", true) . '.' . $extension_video;
                    $video_curso->nombre = $name;
                    $video_curso->tipo_documento = 'VIDEO';
                    $video_curso->tabla = 'cursos_online';
                    $video_curso->extension = $extension_video;
                    $video_curso->id = $curso1->id_cursosonline;
                    $video_curso->id_user = Session::get('usuario')->id_usuario;

                    $video_curso->save();

                    Input::file('video_curso')->move(public_path('img/documentos'), $video_curso->nombre);
                }

                if ($extension_documentos == 'pdf') {
                    $name = date("YmdHis") . uniqid("", true) . '.' . $extension_documentos;
                    $archivo->nombre = $name;
                    $archivo->tipo_documento = 'DOCUMENTO';
                    $archivo->tabla = 'cursos_online';
                    $archivo->extension = $extension_documentos;
                    $archivo->id = $curso1->id_cursosonline;
                    $archivo->id_user = Session::get('usuario')->id_usuario;

                    $archivo->save();

                    Input::file('archivo_apoyo')->move(public_path('img/documentos'), $archivo->nombre);
                }
            }

        }else{
            $alert = new \stdClass();
            $alert->message = 'Ocurrio un error al actualizar el curso, por favor contacte al administrador.';
            $alert->type = 'danger';
        }

        return $alert;
    }

    function get_cursoonline($id){
        $usuario_session = Session::get('usuario');
        if (!$usuario_session) {
            return Redirect::route('login');
        }
        $cursos = DB::select('SELECT cursos_online.id_cursosonline,cursos_online.nombre_curso, cursos_online.descripcion, cat_temas.tema, documentos.nombre as nombre_documento, cat_capacitador.nom_cap as nombre_capacitador,
                        cat_capacitador.apellido_paterno as apellido_paterno_capacitador, cat_capacitador.apellido_materno as apellido_materno_capacitador, cursos_online.id_capacitador, cursos_online.id_categoria, documentos.tipo_documento
                        FROM cursos_online
                        INNER JOIN cat_temas ON cat_temas.id_tema = cursos_online.id_categoria    
                        INNER JOIN cat_capacitador on cat_capacitador.id_capacitador = cursos_online.id_capacitador
                        LEFT JOIN documentos ON documentos.id = cursos_online.id_cursosonline AND documentos.tabla = "cursos_online"
                        WHERE cursos_online.id_cursosonline = '.$id);

        return response()->json($cursos, 200);
    }

    function guardar_minuto()
    {
        $usuario_session = Session::get('usuario');
        if (!$usuario_session) {
            return Redirect::route('login');
        }
        $id_curso = Input::get('id_cursosonline');
        $min_curso = Input::get('minuto_curso');
        $id_user = Input::get('id_user');

          $video_stop = new video_stop();

          $video_stop->id_usuario = $id_user;
          $video_stop->id_cursosonline = $id_curso;
          $video_stop->stop_video = $min_curso;
          $video_stop->ip = $_SERVER['REMOTE_ADDR'];
          $video_stop->start = Input::get('start');
          $video_stop->pause = Input::get('pause');
          $video_stop->terminado = Input::get('terminado');
          $video_stop->save();

    }

    function guardar_inscripcion()
    {
        $usuario_session = Session::get('usuario');
        if (!$usuario_session) {
            return Redirect::route('login');
        }

        $id_curso = Input::get('id_cursosonline');
        $id_user = Input::get('id_user');

dd($id_curso);
        $inscripcioncurso = inscripcioncurso::where('id_cursosonline',$id_curso)->first();
        $usuario_buscar = inscripcioncurso::where('id_usuario',$id_user)->first();

        if($inscripcioncurso == null && $usuario_buscar == null)
        {
            $inscripcioncurso = new inscripcioncurso();

            $inscripcioncurso->id_usuario = $id_user;
            $inscripcioncurso->id_cursosonline = $id_curso;

            $inscripcioncurso->save();


        }else{

        }

    }
}
