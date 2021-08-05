<?php

namespace App\Http\Controllers\Normal\MediaText;

use App\Http\Controllers\Controller;
use App\Models\MediaText;
use App\Traits\CrudControllerTrait;
use Illuminate\Http\Request;

class TextoConcluirCompraController extends Controller
{
    use CrudControllerTrait;

    public function __construct(MediaText $pricing){
        $this->model = $pricing;
        $this->path = 'normal.mediatext.concluircompra';
        $this->redirectPath = 'textoconcluircompra';
    }

    public function index()
    {
        $results = MediaText::where('id', config('constants.idTextoConcluirCompra'))->first();

        return view('normal.mediatext.concluircompra.index', ['results' => $results]);
    }
}
