<?php

namespace App\Http\Controllers\Normal;

use App\Http\Controllers\Controller;
use App\Models\Pricing;
use App\Traits\CrudControllerTrait;
use Illuminate\Http\Request;

class PricingController extends Controller
{
    use CrudControllerTrait;

    public function __construct(Pricing $pricing){
        $this->model = $pricing;
        $this->path = 'normal.pricing';
    }
}
