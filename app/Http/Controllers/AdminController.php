<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Monitor;
use App\Mouse;
use App\Teclado;
use App\User;
use App\Parlante;
use App\Pedido;
use Redirect;
use DB;

class AdminController extends Controller
{
      public function index(){
        if (Auth::guest())
          return redirect('home');
        else
          if(Auth::user()->isAdmin()){
              $monitores = Monitor::all();
              $teclados = Teclado::all();
              $mouses = Mouse::all();
              $parlantes = Parlante::all();
              //agregar lo de parlantes y eso array($monitores,$parlantes,...)
              $componentes = array($monitores,$teclados,$mouses,$parlantes);
              return view ('componentes.panelAdmin')->with('componentes',$componentes);
            }
          else
            return redirect('home');
<<<<<<< HEAD
      }     
=======
      }

      public function store(Request $request){

       if($request->isMethod('post')){

        $tipo = "";
        $tipo2 = $request->input('tipo');

        switch ($tipo2) {
          case "0":
             $tipo = "monitors";
            break;
           case "1":
             $tipo = "teclados";
            break;
          case "2":
            $tipo = "mice";
            break;
          case "3":
            $tipo = "parlantes";
            break;
        }

        DB::table($tipo)->insert([
          [
            'marca' => $request->input('marca'),
            'precio' => $request->input('precio'),
            'color' => $request->input('color'),
            'imagen' => $request->input('imagen')
          ]]);   
       }

       return redirect('home');
      }
>>>>>>> 04c3040d69e6eff0c9ca1feda58e2085b03908fe
}
