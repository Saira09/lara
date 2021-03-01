<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\UsuariosModel;
use App\EstadosModel;
use App\MunicipiosModel;

class SistemController extends Controller{

    public function entrada(){
        return view('entrada');
    }

    public function informacion(){
        $usus = UsuariosModel::orderBy('id_usuario')
         ->paginate(5);

        return view("informacion")
         ->with(['usus' => $usus]);
    }

    public function combos(){
        $estados = EstadosModel::all();
        return view('combos')
             ->with(['estados'=>$estados]);;
    }
}