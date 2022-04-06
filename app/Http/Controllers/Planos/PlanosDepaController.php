<?php

namespace App\Http\Controllers\Planos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;

class PlanosDepaController extends Controller {
    //

    public function index() {
        
        /// return view("layouts.plantillaFormatoHC");
        return view("planosDepartamentos.planosDeparta");
    }
    
}
