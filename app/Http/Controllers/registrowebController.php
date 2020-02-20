<?php

namespace App\Http\Controllers;

use App\Models\Cat_codigospostales;
use Illuminate\Http\Request;
use App\Models\registrowebModel;
use App\Models\Registro;
use App\Models\cat_scian;
use App\Models\Cat_entidades;
use App\Models\Cat_municipios;
use App\Models\Cat_escolaridad;
use App\Models\Cat_pais;
use App\Mail\MensajeEnviado;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use \Illuminate\Support\Facades\Redirect;

class registrowebController extends Controller
{
    public function index()
    {
        $cat_entidades = Cat_entidades::all();
        //$cat_municipios = Cat_municipios::where('cve_compuesta_ent_mun', 'like', '14%')->orderBy('nom_mun', 'ASC')->get();
        $cat_municipios = Cat_codigospostales::select('d_estado','c_estado','D_mnpio')->where('c_estado', '14')->groupBy('d_estado','c_estado','D_mnpio')->get();
        $cat_codigospostales = Cat_codigospostales::select('d_estado')->groupBy('d_estado')->get();
        $cat_codigospostales2 = Cat_codigospostales::all();
        $cat_escolaridad = Cat_escolaridad::select('id_escolaridad','nivel', 'estatus')->orderBy('id_escolaridad', 'ASC')->get();
        //$detalle_registrop = Registro::get();
        $cat_pais = Cat_pais::all();
        $sectores = cat_scian::select('codigo_sector', 'descripcion_sector')->distinct()->get();
        $subsectores = cat_scian::select('codigo_subsector', 'descripcion_subsector')->distinct()->get();
        $ramas = cat_scian::select('codigo_rama', 'descripcion_rama')->distinct()->get();
        $subramas = cat_scian::select('codigo_subrama', 'descripcion_subrama')->distinct()->get();
        $clase_actividad = cat_scian::select('codigo_clase', 'descripcion_clase')->distinct()->get();
        $detalle_registrop = Registro::select('nombre','apellido_paterno','apellido_materno','genero','cat_municipios.nom_mun','fecha_nacimiento',
            'correo','telefono','cat_escolaridad.nivel','cat_escolaridad.estatus','ocupacion','created_at')
            ->join('cat_escolaridad', 'cat_escolaridad.id_escolaridad', '=','registroplatica.id_escolaridad')
            ->join('cat_municipios','cat_municipios.cve_compuesta_ent_mun', '=', 'registroplatica.cve_compuesta_ent_mun')
            ->orderBy('created_at', 'DESC')->get();

        //dd($detalle_registrop);


        return View::make('usuarios.nuevoregistro2', array(
            'cat_entidades' => $cat_entidades,
            'sectores' => $sectores,
            'subsectores' => $subsectores,
            'ramas' => $ramas,
            'subramas' => $subramas,
            'clase_actividad' => $clase_actividad,
            'cat_municipios' => $cat_municipios,
            'cat_codigospostales' => $cat_codigospostales,
            'cat_codigospostales2' => $cat_codigospostales2,
            'cat_escolaridad' => $cat_escolaridad,
            'detalle_registrop' => $detalle_registrop,
            'cat_pais' => $cat_pais
        ));
    }

     public function get_municipio($estado){
        //dd($estado);
        $datos = Cat_codigospostales::select('c_estado', 'D_mnpio','c_mnpio')->where('c_estado', $estado)->groupby('D_mnpio','c_estado','c_mnpio')->get();
        //dd($datos);
        return response()->json($datos, '200');
    }

    public function get_colonia($colonia){
        //dd($estado);
        $datos = Cat_codigospostales::select('d_asenta', 'id_codigocp', 'c_mnpio','d_tipo_asenta')->where('c_mnpio', $colonia)->groupby('d_asenta', 'id_codigocp', 'c_mnpio','d_tipo_asenta')->get();
        //dd($datos);
        return response()->json($datos, '200');
    }

    public function get_cp($cp){
        //dd($cp);
        $datos = Cat_codigospostales::select('d_codigo', 'd_asenta','id_codigocp','D_mnpio','c_mnpio')->where('d_codigo', $cp)->groupby('D_mnpio','c_mnpio', 'd_codigo', 'd_asenta','id_codigocp')->get();
        //dd($datos);
        return response()->json($datos, '200');
    }

    public function create()
    {
        registrowebModel::create(request()->all());/*Metodo create*/

        Mail::to('betty.vargas.garcia@gmail.com')->send(new MensajeEnviado);

        flash("Tu información se envío exitosamente!")->success()->important();

        return 'Mensaje Enviado';

        ///return redirect('registrowebModel');
    }


}
