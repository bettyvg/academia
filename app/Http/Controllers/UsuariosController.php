<?php
namespace App\Http\Controllers;

use App\Models\Cat_direcciones;
use App\Models\Cat_puestos;
use App\Models\cursosOnlineModel;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Hash;
use App\Models\Usuario;
use App\Http\Requests\RegistroRequest;
use App\Models\Cat_perfiles;
use Illuminate\Routing\Controller as BaseController;
use Laracasts\Flash\Flash;



class UsuariosController extends BaseController {

    /**
     * Muestra el login
     */
    public function login() {

        $title = 'Inicio de Sesión';

        try {
            // Si es por método post
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {

                if (Input::get('usuario') && Input::get('contrasena')) {
                    $cat_perfiles = Cat_perfiles::all();
                    $usuario = Usuario::where('correo_electronico', Input::get('usuario'))->first();
                    $cursos = DB::select('SELECT cursos_online.id_cursosonline,cursos_online.nombre_curso, cursos_online.descripcion, cat_temas.tema, documentos.nombre as nombre_documento, cat_capacitador.nom_cap as nombre_capacitador,
                        cat_capacitador.apellido_paterno as apellido_paterno_capacitador, cat_capacitador.apellido_materno as apellido_materno_capacitador, cursos_online.id_capacitador, cursos_online.id_categoria, documentos.tipo_documento
                        FROM cursos_online
                        INNER JOIN cat_temas ON cat_temas.id_tema = cursos_online.id_categoria    
                        INNER JOIN cat_capacitador on cat_capacitador.id_capacitador = cursos_online.id_capacitador
                        LEFT JOIN documentos ON documentos.id = cursos_online.id_cursosonline AND documentos.tabla = "cursos_online"
                        WHERE documentos.tipo_documento = "IMAGEN"');
                   // dd(Hash::make('123456'));
                   // dd(password_verify(Input::get('contrasena'), $usuario->password));
                    $alert = null;
                    // Verifica que exista el usuario y que la contraseña sea correcta
                    if ($usuario && password_verify(Input::get('contrasena'), $usuario->password)) {

                        $usuario->last_login = date('Y-m-d');
                        $usuario->last_ip  = $_SERVER['REMOTE_ADDR'];

                        $usuario->save();

                        Session::put('usuario', $usuario);
                        Session::save();
                    if($usuario->id_perfil != '4'){return View::make('inicio'); }else{return View::make('inicio2', array('cursos' => $cursos));}

                    } else {
                        $alert = new \stdClass();
                        $alert->message = 'La contraseña o el usuario son incorrectos.';
                        $alert->type = 'danger';

                        return View::make('usuarios.login', array(
                            'alert' => $alert,
                        ));
                    }
                    return View::make('usuarios.login', array(
                        'title' => $title,
                        'usuario' => $usuario,
                        'cursos' => $cursos,
                        'alert' => $alert
                    ));
                } else {

                }
            }
            return View::make('usuarios.login', array(
                'title' => $title
            ));
        } catch (QueryException $exception) {
            $alert = new \stdClass();
            $alert->message = 'Ocurrió un error, por favor, contacte al administrador. ' .$exception->getMessage();
            $alert->type = 'danger';
            return View::make('usuarios.login', array(
                'title' => $title,
                'alert' => $alert
            ));
        }
    }


    public function index(){

            $title = 'Inicio de usuarios';

            $cat_perfiles = Cat_perfiles::all();
            $cat_direcciones = Cat_direcciones::all();
            $detalle_registrousuarios = Usuario::select('usuarios.id_usuario','usuarios.nombre','usuarios.apellido_paterno','usuarios.apellido_materno','usuarios.correo_electronico','cat_perfiles.nom_perfil','cat_direcciones.nom_dir','cat_puestos.nom_puesto','usuarios.created_at')
                ->join('cat_perfiles', 'cat_perfiles.id_perfil', '=','usuarios.id_perfil')
                ->join('cat_direcciones', 'cat_direcciones.id_direccion', '=','usuarios.id_direcciones')
                ->join('cat_puestos','cat_puestos.id_puesto', '=', 'usuarios.id_puesto')
                ->where('usuarios.estatus', '=', 'activo')
                ->get();
            $cat_puestos = Cat_puestos::select('cat_puestos.nom_puesto','cat_puestos.id_direcciones','cat_direcciones.nom_dir')
                ->join('cat_direcciones', 'cat_direcciones.id_direccion', '=','cat_puestos.id_direcciones')
                ->get();


            return View('usuarios.usuarios', array(
                'title' => $title,
                'detalle_registrousuarios' => $detalle_registrousuarios,
                'cat_perfiles' => $cat_perfiles,
                'cat_direcciones' => $cat_direcciones,
                'cat_puestos' => $cat_puestos
            ));



    }


    public function registro(){

        try {

            $title = 'Registro de usuarios';

            if ($_SERVER['REQUEST_METHOD'] === 'POST' ) {
                $usuario = new Usuario();

                $cat_perfiles = Cat_perfiles::all();
                $cat_direcciones = Cat_direcciones::all();
                $detalle_registrousuarios = Usuario::select('usuarios.id_usuario','usuarios.nombre','usuarios.apellido_paterno','usuarios.apellido_materno','usuarios.correo_electronico','cat_perfiles.nom_perfil','cat_direcciones.nom_dir','cat_puestos.nom_puesto','usuarios.created_at')
                    ->join('cat_perfiles', 'cat_perfiles.id_perfil', '=','usuarios.id_perfil')
                    ->join('cat_direcciones', 'cat_direcciones.id_direccion', '=','usuarios.id_direcciones')
                    ->join('cat_puestos','cat_puestos.id_puesto', '=', 'usuarios.id_puesto')
                    ->where('usuarios.estatus', '=', 'activo')
                    ->get();
                $cat_puestos = Cat_puestos::select('cat_puestos.nom_puesto','cat_puestos.id_direcciones','cat_direcciones.nom_dir')
                    ->join('cat_direcciones', 'cat_direcciones.id_direccion', '=','cat_puestos.id_direcciones')
                    ->get();

                if(Input::get('confirma-contrasena') == Input::get('contrasena'))
                {
                    $pass = Input::get('contrasena');
                    $usuario->nombre = Input::get('nombre');
                    $usuario->apellido_paterno = Input::get('apat');
                    $usuario->apellido_materno = Input::get('amat');
                    $usuario->correo_electronico = Input::get('correo');
                    $usuario->id_direcciones = Input::get('area');
                    $usuario->id_puesto = Input::get('puesto');
                    $usuario->id_perfil = Input::get('perfil');
                    $usuario->estatus = 'activo';
                    $usuario->password = Hash::make($pass);

                    $usuario->save();

                    flash("El usuario se ha creado correctamente")->success()->important();

                    $alert = new \stdClass();
                    $alert->message = 'El usuario se creo correctamente.';
                    $alert->type = 'success';
                    return Redirect::route('usuarios');

                }else{
                    $alert = new \stdClass();
                    $alert->message = 'Las contraseñas no coinciden.';
                    $alert->type = 'danger';
                    return View::make('usuarios', array(
                        'title' => $title,
                        'alert' => $alert,
                        'detalle_registrousuarios' => $detalle_registrousuarios,
                        'cat_perfiles' => $cat_perfiles,
                        'cat_direcciones' => $cat_direcciones
                    ));
                }

            }else{
                flash("el usuario no se creo correctamente, intente de nuevo")->danger()->important();

                return View::make('usuarios.usuarios');
            }

        } catch (Exception $e) {
            $alert = new \stdClass();
            $alert->message = 'Ocurrió un error, por favor, contacte al administrador.';
            $alert->type = 'danger';
            return View::make('usuarios.usuarios', array(
                'title' => $title,
                'alert' => $alert,
                'detalle_registrousuarios' => $detalle_registrousuarios,
                'cat_perfiles' => $cat_perfiles,
                'cat_direcciones' => $cat_direcciones,

            ));
        }



    }


    public function edit($id){
        $usuario_session = Session::get('usuario');
        if(!$usuario_session){
            return Redirect::route('login');
        }

        try {
            $title = 'Edicion de usuario';
            $cat_perfiles = Cat_perfiles::all();
            $detalle_registrousuarios = Usuario::select('id_usuario','usuarios.nombre','usuarios.apellido_paterno','usuarios.apellido_materno','usuarios.correo_electronico','cat_perfiles.nom_perfil','cat_direcciones.nom_dir','cat_puestos.nom_puesto','usuarios.created_at')
                ->join('cat_perfiles', 'cat_perfiles.id_perfil', '=','usuarios.id_perfil')
                ->join('cat_direcciones', 'cat_direcciones.id_direccion', '=','usuarios.id_direcciones')
                ->join('cat_puestos','cat_puestos.id_puesto', '=', 'usuarios.id_puesto')
                ->get();
            $cat_direcciones = Cat_direcciones::all();
            $cat_puestos = Cat_puestos::select('cat_puestos.id_puesto','cat_puestos.nom_puesto','cat_puestos.id_direcciones','cat_direcciones.nom_dir')
                ->join('cat_direcciones', 'cat_direcciones.id_direccion', '=','cat_puestos.id_direcciones')
                ->get();

           if ($_SERVER['REQUEST_METHOD'] === 'POST') {

                $usuario = Usuario::find($id);

                if(Input::get('confirma-contrasena') == Input::get('contrasena'))
                {
                    $usuario->nombre = Input::get('nombre');
                    $usuario->apellido_paterno = Input::get('apat');
                    $usuario->apellido_materno = Input::get('amat');
                    $usuario->id_direcciones = Input::get('area');
                    $usuario->id_perfil = Input::get('perfil');
                    $usuario->id_puesto = Input::get('puesto');
//dd($usuario);
                    if(!Input::get('password') == ''){
                        $usuario->password = Hash::make(Input::get('password'));
                    }

                    if(Input::get('correo') != $usuario->correo_electronico){
                        $usuario->correo_electronico = Input::get('correo');
                    }

                    $usuario->save();

                    $alert = new \stdClass();
                    $alert->message = 'El usuario se actualizo correctamente.';
                    $alert->type = 'success';
                    flash("El usuario ".$usuario->nombre .' '.$usuario->apellido_paterno.' '.$usuario->apellido_materno." se actualizó de manera exitosa!" )->success()->important();
                    return Redirect::route('usuarios');


                    /*return View::make('modificaUsuarios', array('alert' => $alert,
                        'edit_user' => $usuario,
                        'title' => $title,
                        'cat_puestos'=> $cat_puestos,
                        'cat_direcciones' => $cat_direcciones,
                        'detalle_registrousuarios' => $detalle_registrousuarios,
                        'cat_perfiles' => $cat_perfiles))->with('usuario', $usuario);*/

                }else{
                    $alert = new \stdClass();
                    $alert->message = 'Las contraseñas no coinciden.';
                    $alert->type = 'danger';
                    return View::make('usuarios', array(
                        'title' => $title,
                        'alert' => $alert,
                        'detalle_registrousuarios' => $detalle_registrousuarios,
                        'cat_puestos'=> $cat_puestos,
                        'cat_perfiles' => $cat_perfiles,
                        'cat_direcciones' => $cat_direcciones
                    ));
                }

            }else{
                $edit_user = Usuario::find($id);
                return View::make('usuarios.registro', array('edit_user' => $edit_user, 'cat_perfiles' => $cat_perfiles,
                    'cat_direcciones' => $cat_direcciones, 'detalle_registrousuarios' => $detalle_registrousuarios, 'cat_puestos'=> $cat_puestos,));
            }

        } catch (Exception $e) {
            $alert = new \stdClass();
            $alert->message = 'Ocurrió un error, por favor, contacte al administrador.';
            $alert->type = 'danger';
            return View::make('usuarios', array(
                'title' => $title,
                'alert' => $alert,
                'detalle_registrousuarios' => $detalle_registrousuarios,
                'cat_perfiles' => $cat_perfiles,
                'cat_puestos'=> $cat_puestos,
                'cat_direcciones' => $cat_direcciones
            ));
        }

    }


    public function detalle_registrousuarios(){

        $usuario_session = Session::get('usuario');

        if (!$usuario_session) {
            return Redirect::route('login');
        }

        $detalle_registrousuarios = Usuario::select('id_usuario','usuarios.nombre','apellido_paterno','apellido_materno','correo_electronico','cat_perfiles.nom_perfil','cat_direcciones.nom_dir','cat_puestos.nom_puesto','usuarios.created_at')
            ->join('cat_perfiles', 'cat_perfiles.id_perfil', '=','usuarios.id_perfil')
            ->join('cat_direcciones', 'cat_direcciones.id_direccion', '=','usuarios.id_direcciones')
            ->join('cat_puestos','cat_puestos.id_puesto', '=', 'usuarios.id_puesto')
            ->where('usuarios.estatus', '=', 'activo')
            ->get();
        $cat_perfiles = Cat_perfiles::all();
        $cat_direcciones = Cat_direcciones::all();

        $cat_puestos = Cat_puestos::select('cat_puestos.nom_puesto', 'cat_puestos.id_direcciones')
            ->join('cat_direcciones', 'cat_direcciones.id_direccion', '=','cat_puestos.id_direcciones')
            ->get();

        return View::make('usuarios.usuarios', array(
            'detalle_registrousuarios' => $detalle_registrousuarios,
            'cat_perfiles'=> $cat_perfiles,
            'cat_puestos'=> $cat_puestos,
            'cat_direcciones' => $cat_direcciones
             ));

    }




    public function get_puesto($id_area){
        $datos = Cat_puestos::select('id_puesto', 'nom_puesto', 'id_direcciones')->where('id_direcciones', $id_area)->get();
        return response()->json($datos, '200');
    }

    /**

     * Cierra la sesión
     */
    public function signout() {
        Session::flush();
        return Redirect::route('login');
    }



    public function delete_user ($id){

        $delete = Usuario::find($id);
        $delete->estatus = 'inactivo';
        $delete->save();

        flash("Se ha eliminado el usuario ".$delete->nombre.' '.$delete->apellido_paterno.' '.$delete->apellido_materno." de manera exitosa!")->success()->important();

        return back();

    }

    /**
     * Interfaz de inicio
     */
    public function inicio() {
        return View::make('inicio');
    }

}

