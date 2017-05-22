<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PedidoController extends Controller
{
	public function index(){
        if (Auth::guest())
          return redirect('home');
        else
            return view ('componentes.panelPedidos');
   }

   public function store(){
   	if (Request::ajax()){
   		$data = Input::all();
   		echo $data;
   	}
   }

}
