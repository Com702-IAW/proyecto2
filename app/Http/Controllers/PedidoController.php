<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;
use Auth;
use App\Pedido;
use App\Monitor;
use App\Teclado;
use App\Mouse;
use App\Parlante;
use Webpatser\Uuid\Uuid;

class PedidoController extends Controller
{
	public function index(){
        if (Auth::guest())
          return redirect('home');
        else
            return view('componentes.panelPedidos');
   }

  /* public function json(){
      $listado = Pedido::all()->where('user_id',Auth::user()->getId());
      $i = 0;
      $pedidos = array();
      foreach($listado as $p){
          $monitor = Monitor::find($p->monitor_id);
          $teclado = Teclado::find($p->teclado_id);
          $mouse = Mouse::find($p->mouse_id);
          $parlante = Parlante::find($p->parlante_id);
          $pedido = array($monitor,$teclado,$mouse,$parlante);
          $pedidos[$i] = $pedido;
          ++$i;
      }
      return $pedidos;
   }*/

   public function json(){
    if(!Auth::guest()){
      return Pedido::where("user_id",Auth::user()->getId())->get();
    }
    else
      return redirect("home");
   }

	public function store(Request $r){
    
    if (!Auth::guest()){
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
  else
    return redirect("home");
}

  public function pedidoId($id){

    if (!Auth::guest()){
      $p = Pedido::where('id',$id)->get();
      $pedido = $p[0];
      if (Auth::user()->getId() == $pedido->user_id){
         $monitor = Monitor::find($pedido->monitor_id);
          $teclado = Teclado::find($pedido->teclado_id);
          $mouse = Mouse::find($pedido->mouse_id);
          $parlante = Parlante::find($pedido->parlante_id);
          $p = array($monitor,$teclado,$mouse,$parlante);
        return $p;
      }
       else
          return redirect("home");
    }
    else
      return redirect("home");

      
  }

  public function compartido($id) {

      // hacer un get en la base de datos, WHERE token = $id
    // si existe, devolver una view con la instancia encontrada
    // si no existe, hacer otra cosa (redirect o mostrar pagina de error)
  }

}
