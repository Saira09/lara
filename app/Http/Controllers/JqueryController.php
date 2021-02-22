<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\UsuariosModel;

class JqueryController extends Controller{
   
    public function js00(Request $request){
        $email = $request->get('email');
        //dd($email);
        
        $usu = UsuariosModel::where('email',$email)->get();
        //dd($usu);

        return view('jquery/js_00')
          ->with(['usu' => $usu]);
    }

    public function js01(Request $request){
        $idtab = $request->get('idtab');
        //dd($email);
        
        $usu = UsuariosModel::where('id_usuario',$idtab)->get();
        //dd($usu);

        return view('jquery/js_01')
          ->with(['usu' => $usu]);
    }
}
