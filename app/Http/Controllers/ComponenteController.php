<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Monitor;
use App\Teclado;

class ComponenteController extends Controller
{
    public function index(){
      $monitores = Monitor::all();
      $teclados = Teclado::all();
      //agregar lo de parlantes y eso array($monitores,$parlantes,...)
      $componentes = array($monitores,$teclados);
      return view('componentes.index',compact('componentes'));
    }

    public function json(){
      $monitores = Monitor::all();
      $teclados = Teclado::all();
      //agregar lo de parlantes y eso array($monitores,$parlantes,...)
      $componentes = array($monitores,$teclados);
      return $componentes;
    }
}
