<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Monitor;
use App\Teclado;

class MonitorController extends Controller
{
    public function index(){
      $monitores = Monitor::all();
      //agregar lo de parlantes y eso array($monitores,$parlantes,...)
      $todos = array($monitores);
      return compact('todos');
    }

    public function json(){
      $monitores = Monitor::all();
      $teclados = Teclado::all();
      //agregar lo de parlantes y eso array($monitores,$parlantes,...)
      $componentes = array($monitores,$teclados);
      return $componentes;
    }
}
