<?php

namespace App\Http\Controllers;

use App\Models\inscripcioncurso;
use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Models\Cat_municipios;
use App\Models\Cat_entidades;
use App\Models\Cat_temas;
use App\Models\Cat_capacitador;
use App\Models\Cat_instituciones;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Session;
use \Illuminate\Support\Facades\Redirect;
use \Illuminate\Support\Collection;
use \Illuminate\Database\QueryException;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Routing\Controller as Controller;


class HomeController extends Controller
{


    public function inicio()
    {

        $usuario_session = Session::get('usuario');
        if (!$usuario_session) {
            return Redirect::route('login');
        }else{

            return View::make('inicio');
        }

    }

    public function inicio2()
    {
        $usuario_session = Session::get('usuario');
        if (!$usuario_session) {
            return Redirect::route('login');
        }
        $cat_temas = Cat_temas::where('estatus', 'activado')->orderBy('tema')->get();
        $cat_capacitador = Cat_capacitador::orderBy('nom_cap')->get();

        $cursos = DB::select('SELECT cursos_online.id_cursosonline,cursos_online.nombre_curso, cursos_online.descripcion, cat_temas.tema, documentos.nombre as nombre_documento, cat_capacitador.nom_cap as nombre_capacitador,
                        cat_capacitador.apellido_paterno as apellido_paterno_capacitador, cat_capacitador.apellido_materno as apellido_materno_capacitador, cursos_online.id_capacitador, cursos_online.id_categoria, documentos.tipo_documento
                        FROM cursos_online
                INNER JOIN cat_temas ON cat_temas.id_tema = cursos_online.id_categoria
                INNER JOIN cat_capacitador on cat_capacitador.id_capacitador = cursos_online.id_capacitador
                LEFT JOIN documentos ON documentos.id = cursos_online.id_cursosonline AND documentos.tabla = "cursos_online"
                WHERE documentos.tipo_documento = "IMAGEN"');
    
     $inscritos_municipio = DB::select('SELECT COUNT(usuarios.id_usuario) as total, cat_municipios.nom_mun
FROM usuarios
INNER JOIN cat_municipios ON cat_municipios.cve_compuesta_ent_mun = usuarios.cve_compuesta_ent_mun
WHERE usuarios.cve_compuesta_ent_mun = "14008"
GROUP BY cat_municipios.nom_mun');

        return View::make('inicio2', array('cat_temas' => $cat_temas,
            'cat_capacitadores' => $cat_capacitador,
            'cursos' => $cursos,
            'inscritos_municipio' => $inscritos_municipio
        ));

    }

    /*public function usuarios()
    {
        $usuario_session = Session::get('usuario');
        if (!$usuario_session) {
            return Redirect::route('login');
        }
        return View::make('usuarios');
    }*/


    public function capacitadores()
    {
        $cat_municipios = Cat_municipios::where('cve_compuesta_ent_mun', 'like', '14%')->orderBy('nom_mun', 'ASC')->get();
        $cat_entidades = Cat_entidades::all();

        $usuario_session = Session::get('usuario');
        if (!$usuario_session) {
            return Redirect::route('login');
        }

        return View::make('cat_capacitadores', array(
            'cat_municipios' => $cat_municipios,
            'cat_entidades' => $cat_entidades));
    }

    public function alumnos()
    {
        $usuario_session = Session::get('usuario');
        if (!$usuario_session) {
            return Redirect::route('login');
        }

                return View::make('alumnos');
    }

    public function testubica()
    {
        $usuario_session = Session::get('usuario');
        if (!$usuario_session) {
            return Redirect::route('login');
        }

        return View::make('testubica');
    }

    public function calendario()
    {
        $usuario_session = Session::get('usuario');
        if (!$usuario_session) {
            return Redirect::route('login');
        }

        return View::make('calendario');
    }


    public function reportecognos()
    {
        $usuario_session = Session::get('usuario');
        if (!$usuario_session) {
            return Redirect::route('login');
        }
        return View::make('cognos.reporte_cognos');
    }

    public function cursos()
    {
        $usuario_session = Session::get('usuario');

        if (!$usuario_session) {
            return Redirect::route('login');
        }

        $cat_temas = Cat_temas::where('estatus', 'activo')->orderBy('tema')->get();
        $cat_capacitador = Cat_capacitador::where('estatus', 'activo')->orderBy('nom_cap')->get();
        $cat_instituciones = Cat_instituciones::orderBy('nombre_inst')->get();
        $cursos = DB::select('SELECT cursos.id_curso,cursos.nom_curso, cursos.fecha_inicio, cursos.hora_inicio, cursos.fecha_fin, cursos.hora_fin,
                cursos.descripcion, cat_temas.tema,cat_instituciones.nombre_inst, documentos.nombre as nombre_documento, cat_capacitador.nom_cap as nombre_capacitador,
                cat_capacitador.apellido_paterno as apellido_paterno_capacitador, cat_capacitador.apellido_materno as apellido_materno_capacitador, cursos.id_tema, cat_instituciones.direccion
                FROM cursos
                INNER JOIN cat_temas ON cat_temas.id_tema = cursos.id_tema
                INNER JOIN cat_instituciones ON cat_instituciones.id_institucion = cursos.id_institucion
                INNER JOIN cat_capacitador on cat_capacitador.id_capacitador = cursos.id_capacitador
                LEFT JOIN documentos ON documentos.id = cursos.id_curso AND documentos.tabla = "cursos"');

        return View::make('cursos.cursos', array('cat_temas' => $cat_temas,
            'cat_capacitadores' => $cat_capacitador,
            'cat_instituciones' => $cat_instituciones,
            'cursos' => $cursos
        ));
    }

    public function cursos_online()
    {
        $usuario_session = Session::get('usuario');

        if (!$usuario_session) {
            return Redirect::route('login');
        }

        $cat_temas = Cat_temas::where('estatus', 'activo')->orderBy('tema')->get();
        $cat_capacitador = Cat_capacitador::where('estatus', 'activo')->orderBy('nom_cap')->get();
        $cat_instituciones = Cat_instituciones::orderBy('nombre_inst')->get();
        $cursos = DB::select('SELECT cursos_online.id_cursosonline,cursos_online.nombre_curso, cursos_online.descripcion, cat_temas.tema, documentos.nombre as nombre_documento, cat_capacitador.nom_cap as nombre_capacitador,
                        cat_capacitador.apellido_paterno as apellido_paterno_capacitador, cat_capacitador.apellido_materno as apellido_materno_capacitador, cursos_online.id_capacitador, cursos_online.id_categoria, documentos.tipo_documento
                        FROM cursos_online
                        LEFT JOIN cat_temas ON cat_temas.id_tema = cursos_online.id_categoria    
                        LEFT JOIN cat_capacitador on cat_capacitador.id_capacitador = cursos_online.id_capacitador
                        LEFT JOIN documentos ON documentos.id = cursos_online.id_cursosonline AND documentos.tabla = "cursos_online"
                        WHERE documentos.tipo_documento = "IMAGEN"');

        return View::make('cursos.cursos_online', array('cat_temas' => $cat_temas,
            'cat_capacitadores' => $cat_capacitador,
            'cat_instituciones' => $cat_instituciones,
            'cursos' => $cursos
        ));
    }

    public function miscursos()
    {
        $usuario_session = Session::get('usuario');

        if (!$usuario_session) {
            return Redirect::route('login');
        }



        $cat_temas = Cat_temas::where('estatus', 'activo')->orderBy('tema')->get();
        $cat_capacitador = Cat_capacitador::where('estatus', 'activo')->orderBy('nom_cap')->get();
        $cat_instituciones = Cat_instituciones::orderBy('nombre_inst')->get();
        $cursos = DB::select('SELECT cursos_online.id_cursosonline,cursos_online.nombre_curso, cursos_online.descripcion, cat_temas.tema, documentos.nombre as nombre_documento, 
cat_capacitador.nom_cap as nombre_capacitador, cat_capacitador.apellido_paterno as apellido_paterno_capacitador, inscripcion_curso.id_cursosonline,inscripcion_curso.id_usuario, 
cat_capacitador.apellido_materno as apellido_materno_capacitador, cursos_online.id_capacitador, cursos_online.id_categoria, documentos.tipo_documento
                        FROM cursos_online
                        LEFT JOIN cat_temas ON cat_temas.id_tema = cursos_online.id_categoria    
                        LEFT JOIN cat_capacitador on cat_capacitador.id_capacitador = cursos_online.id_capacitador
                        LEFT JOIN documentos ON documentos.id = cursos_online.id_cursosonline AND documentos.tabla = "cursos_online"
                        LEFT JOIN inscripcion_curso ON inscripcion_curso.id_cursosonline = cursos_online.id_cursosonline
                        WHERE documentos.tipo_documento = "IMAGEN"
                        AND inscripcion_curso.id_usuario ='.$usuario_session->id_usuario);

        /*inscripcioncurso::select('cursos_online.id_cursosonline','cursos_online.nombre_curso', 'cursos_online.descripcion', 'cat_temas.tema', 'documentos.nombre as nombre_documento', 'cat_capacitador.nom_cap as nombre_capacitador',
                        'cat_capacitador.apellido_paterno as apellido_paterno_capacitador','inscripcion_curso.id_usuario', 'cat_capacitador.apellido_materno as apellido_materno_capacitador', 'cursos_online.id_capacitador', 'cursos_online.id_categoria', 'documentos.tipo_documento')
                    ->leftjoin('cat_temas','cat_temas.id_tema','cursos_online.id_categoria')
                    ->leftjoin('cat_capacitador','cat_capacitador.id_capacitador','cursos_online.id_capacitado')
                    ->leftjoin('documentos','documentos.id','cursos_online.id_cursosonline' and 'documentos.tabla','=','cursos_online')
                    ->leftjoin('inscripcion_curso','inscripcion_curso.id_cursosonline','cursos_online.id_cursosonline')
                    ->where('inscripcion_curso.id_usuario', $miscursos->id_usuario)
                    ->get();*/


        return View::make('cursos.miscursos', array('cat_temas' => $cat_temas,
            'cat_capacitadores' => $cat_capacitador,
            'cat_instituciones' => $cat_instituciones,
            'cursos' => $cursos
        ));
    }

}
