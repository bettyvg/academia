<?php

namespace App\Http\Controllers;

use App\Models\cursosOnlineModel;
use App\Models\Cat_temas;
use App\Models\Cat_capacitador;
use App\Models\video_stop;
use Illuminate\Support\Facades\Redirect;
use App\Models\documentos;
use App\Models\ContenidoCursoModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;
use Illuminate\Validation\Rules\In;
use App\Models\reproducciones;

class cursoDetalleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $usuario_session = Session::get('usuario');
        if (!$usuario_session) {
            return Redirect::route('login');
        }
        $cat_temas = Cat_temas::where('estatus', 'activado')->orderBy('tema')->get();
        $cat_capacitador = Cat_capacitador::orderBy('nom_cap')->get();
        $stop_video = video_stop::all();
    
    	$reproduccion_usuario = reproducciones::where('id_usuario', $usuario_session->id_usuario)->where('id_curso', $id)->first();

        if(sizeof($reproduccion_usuario) > 0 ){
            $reproduccion_usuario->reproducciones = intval($reproduccion_usuario->reproducciones)+1;

            $reproduccion_usuario->save();
        }else{
            $reproducciones = new reproducciones();

            $reproducciones->reproducciones = 1;
            $reproducciones->id_curso = $id;
            $reproducciones->id_usuario = $usuario_session->id_usuario;

            $reproducciones->save();
        }
    
    	$reg = video_stop::where('id_cursosonline', $id)->where('id_usuario', $usuario_session->id_usuario)->first();
        $complemento = '';
        if( sizeof($reg) > 0 ){
            $complemento = ' and video_stop.id_usuario = '. $usuario_session->id_usuario;
        }
    
        $cursos = DB::select('SELECT cursos_online.id_cursosOnline,cursos_online.nombre_curso, cursos_online.descripcion, cat_temas.tema, documentos.nombre as nombre_documento, cat_capacitador.nom_cap as nombre_capacitador, video_stop.id_cursosonline,video_stop.stop_video,
                        cat_capacitador.apellido_paterno as apellido_paterno_capacitador, cat_capacitador.apellido_materno as apellido_materno_capacitador, cursos_online.id_capacitador, cursos_online.id_categoria, documentos.tipo_documento,documentos.extension
                        FROM cursos_online
                        LEFT JOIN cat_temas ON cat_temas.id_tema = cursos_online.id_categoria    
                        LEFT JOIN cat_capacitador on cat_capacitador.id_capacitador = cursos_online.id_capacitador
                        LEFT JOIN video_stop ON video_stop.id_cursosonline = cursos_online.id_cursosonline
                        LEFT JOIN documentos ON documentos.id = cursos_online.id_cursosonline AND documentos.tabla = "cursos_online"
                        WHERE documentos.tipo_documento = "VIDEO" and id='.$id. $complemento );
       //dd($cursos);
        $documentos = DB::select('SELECT cursos_online.id_cursosonline,cursos_online.nombre_curso, cursos_online.descripcion, cat_temas.tema, documentos.nombre as nombre_documento, cat_capacitador.nom_cap as nombre_capacitador, video_stop.id_cursosonline,video_stop.stop_video,
                        cat_capacitador.apellido_paterno as apellido_paterno_capacitador, cat_capacitador.apellido_materno as apellido_materno_capacitador, cursos_online.id_capacitador, cursos_online.id_categoria, documentos.tipo_documento,documentos.extension
                        FROM cursos_online
                        LEFT JOIN cat_temas ON cat_temas.id_tema = cursos_online.id_categoria    
                        LEFT JOIN cat_capacitador on cat_capacitador.id_capacitador = cursos_online.id_capacitador
                        LEFT JOIN video_stop ON video_stop.id_cursosonline = cursos_online.id_cursosonline
                        LEFT JOIN documentos ON documentos.id = cursos_online.id_cursosonline AND documentos.tabla = "cursos_online"
                        WHERE documentos.tipo_documento = "DOCUMENTO" and id='.$id.$complemento);

        return View::make('cursos.cursodetalle',
            array('cat_temas' => $cat_temas,
                'cat_capacitadores' => $cat_capacitador,
                'cursos' => $cursos,
                'stop_video' => $stop_video,
                'documentos' => $documentos,
            ));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
