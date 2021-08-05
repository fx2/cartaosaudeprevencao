<?php

namespace App\Http\Controllers\Normal\MediaText;

use App\Http\Controllers\Controller;
use App\Models\MediaText;
use App\Traits\CrudControllerTrait;
use Illuminate\Http\Request;

class TextoContratoController extends Controller
{
    use CrudControllerTrait;

    public function __construct(MediaText $pricing){
        $this->model = $pricing;
        $this->path = 'normal.mediatext.termoscontrato';
        $this->redirectPath = 'textocontrato';
    }

    public function index()
    {
        $results = MediaText::where('id', config('constants.idTextoContrato'))->first();

        return view('normal.mediatext.termoscontrato.index', ['results' => $results]);
    }
}
