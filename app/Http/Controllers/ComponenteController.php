<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Monitor;
use App\Mouse;
use App\Teclado;
use Auth;
use Redirect;

class ComponenteController extends Controller
{
    public function index(){
        $monitores = Monitor::all();
        $teclados = Teclado::all();
        $mouses = Mouse::all();
        //agregar lo de parlantes y eso array($monitores,$parlantes,...)
        $componentes = array($monitores,$teclados,$mouses);
        return view('componentes.index',compact('componentes'));
    }

    public function json(){
      $monitores = Monitor::all();
      $teclados = Teclado::all();
      $mouses = Mouse::all();
      //agregar lo de parlantes y eso array($monitores,$parlantes,...)
      $componentes = array($monitores,$teclados,$mouses);
      return $componentes;
    }

    //metodo que reciba los datos y que grabe a la base de datos.
    //Laravel como recibir desde post requerimient.
}
