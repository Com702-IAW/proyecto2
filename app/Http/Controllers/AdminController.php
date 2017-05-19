<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AdminController extends Controller
{
      public function index(){
        if (Auth::guest()){
          return view('componentes.index');
        }
        else
          if(Auth::user()->isAdmin())
                return view ('componentes.panelAdmin');
          else
              return view ('componentes.index');

      }
}
