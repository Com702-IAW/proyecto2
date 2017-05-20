<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PedidoController extends Controller
{
	public function index(){

		$userid = Auth::user()->getId();
        $pedidos = Pedido::where('user_id',$userid)->get();    
        foreach ($pedidos as $pedido)
            echo $pedido->mouse_id;
      
      return view('componentes.pedidos');
    }

}
