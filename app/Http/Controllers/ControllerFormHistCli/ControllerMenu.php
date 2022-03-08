<?php

namespace App\Http\Controllers\ControllerFormHistCli;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;

class ControllerMenu extends Controller {
    //

    public function formaHisClinico() {
        
        /// return view("layouts.plantillaFormatoHC");
        return view("formHistoriaClinica.formHistoriaCli");

    }
}
