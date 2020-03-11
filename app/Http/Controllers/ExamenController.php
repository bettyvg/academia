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
    public function preguntas()
    {

        $examenes = examenesModel::select('id_pregunta','ex_preguntas.id_tema','pregunta_desc','resp1','resp2','resp3',
        'resp3','resp_corect','periodo','cat_temas.id_tema','cat_temas.tema')
        ->join('cat_temas', 'cat_temas.id_tema', '=','ex_preguntas.id_tema')
        ->get();

        return View::make('examenes.examen', array(
            'examenes' => $examenes,));
    }


    public function get_examenes($examen){
        //dd($estado);
        $examenes = examenesModel::select('id_pregunta','ex_preguntas.id_tema','pregunta_desc','resp1','resp2','resp3',
            'resp3','resp_corect','periodo','cat_temas.id_tema','cat_temas.tema')
            ->join('cat_temas', 'cat_temas.id_tema', '=','ex_preguntas.id_tema')
            ->where('')
            ->get();

        //dd($datos);
        return response()->json($examenes, '200');
    }

    public function fin()
    {
//dd($instituciones);
        return View::make('examenes.fin_examen');
    }
}
