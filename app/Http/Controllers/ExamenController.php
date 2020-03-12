<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Models\examenesModel;

class ExamenController extends Controller
{
    public function index()
    {
        return View::make('examenes.inicio_examen');
    }
    public function preguntas($examen)
    {
        $preguntas = examenesModel::select('id_pregunta','ex_preguntas.id_tema','pregunta_desc','resp1','resp2','resp3',
        'resp3','resp_corect','periodo','cat_temas.id_tema','cat_temas.tema')
        ->join('cat_temas', 'cat_temas.id_tema', '=','ex_preguntas.id_tema')
        ->where('ex_preguntas.id_tema',$examen)
        ->get();

        return View::make('examenes.examen', array('preguntas' => $preguntas));
    }


    public function get_examenes($examen){
        //dd($estado);
        $preguntas = examenesModel::select('id_pregunta','ex_preguntas.id_tema','pregunta_desc','resp1','resp2','resp3',
            'resp3','resp_corect','periodo','cat_temas.id_tema','cat_temas.tema')
            ->join('cat_temas', 'cat_temas.id_tema', '=','ex_preguntas.id_tema')
            ->where('ex_preguntas.id_tema',$examen)
            ->get();

        //dd($datos);
        return View::make('examenes.examen', array(
            'preguntas' => $preguntas,));
    }

    public function fin()
    {
//dd($instituciones);
        return View::make('examenes.fin_examen');
    }
}
