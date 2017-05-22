<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Monitor;
use App\Mouse;
use App\Teclado;
use Auth;
use App\User;
use App\Parlante;
use App\Pedido;
use Redirect;
use App\AdminController;

class ComponenteController extends Controller
{
    public function index(){
      return view('componentes.producto');
    }

    public function json(){
      $monitores = Monitor::all();
      $teclados = Teclado::all();
      $mouses = Mouse::all();
      $parlantes = Parlante::all();
      //agregar lo de parlantes y eso array($monitores,$parlantes,...)
      $componentes = array($monitores,$teclados,$mouses,$parlantes);
      return $componentes;
    }

  
    
}
