<?php

namespace App\Http\Controllers;

use App\Models\Cat_perfiles;
use App\Models\Cat_municipios;
use App\Models\Usuario;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Hash;


class NuevoUsuariosController extends Controller
{


    public function registro(Request $request){

        try {

            $title = 'Registro de usuarios';

            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $usuario = new Usuario();

                $cat_perfiles = Cat_perfiles::all();
            	$cat_municipios = Cat_municipios::where('cve_compuesta_ent_mun', 'like', '14%')->orderBy('nom_mun', 'ASC')->get();
            
            $this->validate($request, [
                    'correo' => 'required|unique:usuarios,correo_electronico',
                ]);

                if(Input::get('confirma-contrasena') == Input::get('contrasena'))
                {
                    $pass = Input::get('contrasena');
                    $usuario->nombre = Input::get('nombre');
                    $usuario->apellido_paterno = Input::get('apat');
                    $usuario->apellido_materno = Input::get('amat');
                	$usuario->fecha_nacimiento = Input::get('fecha_nacimiento');
                    $usuario->cve_compuesta_ent_mun = Input::get('municipio_usuario');
                    $usuario->correo_electronico = Input::get('correo');
                    $usuario->id_perfil = '4';
                    $usuario->id_puesto = '45';
                    $usuario->id_direcciones = '9';
                	$usuario->estatus = 'activo';

                    $usuario->password = Hash::make($pass);
                    //dd($usuario);
                    $usuario->save($request->all());

                    $alert = new \stdClass();
                    $alert->message = 'El usuario se creo correctamente favor de iniciar sesion.';
                    $alert->type = 'success';
 					flash("El usuario se ha creado correctamente favor de iniciar sesion")->success()->important();
                    return Redirect::route('login');

                    /*return View::make('usuarios.login', array(
                        'title' => $title,
                        'alert' => $alert,
                        'cat_perfiles' => $cat_perfiles
                    ));*/

                }else{
                    $alert = new \stdClass();
                    $alert->message = 'Las contraseñas no coinciden.';
                    $alert->type = 'danger';
                    return View::make('usuarios.nuevoregistro');

                }

            }else{
                $cat_municipios = Cat_municipios::where('cve_compuesta_ent_mun', 'like', '14%')->orderBy('nom_mun', 'ASC')->get();
                return View::make('usuarios.nuevoregistro', array('cat_municipios' => $cat_municipios));
            }

        } catch (Exception $e) {
            $alert = new \stdClass();
            $alert->message = 'Ocurrió un error, por favor, contacte al administrador.';
            $alert->type = 'danger';
            return View::make('usuarios.login', array(
                'title' => $title,
                'alert' => $alert,
                'cat_perfiles' => $cat_perfiles,
            	'cat_municipios' => $cat_municipios
            ));
        }
    }


    public function signout() {
        Session::flush();
        return Redirect::route('login');
    }

}
