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

        $examenes = examenesModel::all();

        return View::make('examenes.examen', array(
            'examenes' => $examenes,));
    }
    public function fin()
    {
//dd($instituciones);
        return View::make('examenes.fin_examen');
    }
}
