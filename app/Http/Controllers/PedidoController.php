<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;
use Auth;
use App\Pedido;
use Webpatser\Uuid\Uuid;

class PedidoController extends Controller
{
	public function index(){
        if (Auth::guest())
          return redirect('home');
        else
<<<<<<< HEAD
            return view('componentes.panelPedidos');
   }

	public function store(Request $r){
    
      $p = new Pedido;
      $p->user_id = Auth::user()->getId();
      $p->monitor_id = $r->monitor_id;
      $p->teclado_id  = $r->teclado_id;
      $p->mouse_id = $r->mouse_id;
      $p->parlante_id = $r->parlante_id;
      $p->token = Uuid::generate();
      $p->save();

      return Response::json([ 'mensaje' => 'El pedido se guardo correctamente']);
	}

  public function compartido($id) {

      // hacer un get en la base de datos, WHERE token = $id
    // si existe, devolver una view con la instancia encontrada
    // si no existe, hacer otra cosa (redirect o mostrar pagina de error)
  }
=======
            return view ('componentes.panelPedidos');
   }

   public function store(){
   	if (Request::ajax()){
   		$data = Input::all();
   		echo $data;
   	}
   }
>>>>>>> 04c3040d69e6eff0c9ca1feda58e2085b03908fe

}
