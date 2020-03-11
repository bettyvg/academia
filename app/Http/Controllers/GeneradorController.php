<?php

namespace App\Http\Controllers;

use App\Models\registrowebModel;
use App\Models\EvaluacionCapacitador;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Models\Registro;
//use Barryvdh\DomPDF\PDF;
use Barryvdh\DomPDF\Facade as PDF;

class GeneradorController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function imprimir($id_beneficiario)
    {
        $reg = registrowebModel::find($id_beneficiario);
        $pdf = PDF::loadView('ejemplo',['data'  => $reg])
            ->setPaper('Letter','Landscape');
        //dd($reg);
        //var_dump($data); die();
        return $pdf->download('Constancia.pdf');
    }

}
