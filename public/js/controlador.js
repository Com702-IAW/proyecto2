/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
var jsonCarrito;

//ver de usar canvas - > pdf
//hacer botom reset, borrar fotos y vaciar jsonCarrito
//collapse, buscar propiedad de que este uno solo abierto

$(function () {
    $.ajax({
     url: "/componentes/json",
     context: document.body,
     success: function (data) {
         mostrar(ordenarComponentes(data));
     }
    });

    var estilo = localStorage.getItem("Estilo");
    if (estilo !== null)
        $("#linkestilo").attr("href", estilo);

    //Si soy usuario registrado guardo en localstorage????
    mostrarAnterior();
});

$(document).ready(function () {
    $("#estilo1").click(function () {
        $("#linkestilo").attr("href", "css/estilo2.css");
        localStorage.setItem("Estilo", "css/estilo2.css");
    });
});

$(document).ready(function(){
	$("#resetear").click(function (){
		localStorage.setItem("PedidoAnterior",null);
		var index;
		for(index = 0; index<jsonCarrito.length; ++index)
		{	jsonCarrito[index] = null;
			$("#imagen"+index).attr("src","");
		}
		$("#imagen0").attr("src",);
		$("#imagen1").attr("src",);
		$("#imagen2").attr("src",);
		$("#imagen3").attr("src",);
        $("#preciototal").text("");
	})
});

$(document).ready(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $("#guardarPedido").click(function(){
        monitor = jsonCarrito[0].id2;
        teclado = jsonCarrito[1].id2;
        mouse =  jsonCarrito[2].id2;
        parlante =  jsonCarrito[3].id2;
        $.ajax({
            type: "post",
            url : '/producto/store',
            data : { monitor_id: monitor,
                     teclado_id: teclado,
                     mouse_id: mouse,
                     parlante_id: parlante
                    },
            datatype: "JSON",
            success : function(data){
                alert(data.mensaje);
            }
        });
    });
});

$(document).ready(function () {
    $("#estilo2").click(function () {
        $("#linkestilo").attr("href", "css/estilo1.css");
        localStorage.setItem("Estilo", "css/estilo1.css");
    });
});

function ordenarComponentes(componentes) {
    var index, index1, cont;
    cont = 0;
    var arreglo = new Array();
    for (index = 0; index < componentes.length; ++index) {
        var objet = componentes[index];
        for (index1 = 0; index1 < objet.length; ++index1) {
            var objeto = objet[index1];
            objeto.id = index;      //para ubicar en primer arreglo en json
            objeto.id2 = index1+1;    //para ubicar en segund arreglo en json (dentro de tipo de componente)
            //        objeto.pedido = false;
            arreglo[cont] = objeto;
            ++cont;
        }
    }
    return arreglo;
}

function actualizarPedido(componente) {
    jsonCarrito[componente.id] = componente;
    $("#imagen" + componente.id).attr("src", componente.imagen);
    var total = computarTotal();
	$("#preciototal").text("El precio total es: $" + total);
}

function eliminarItem(componente) {
    objeto = jsonCarrito[componente.id];
    if (objeto != null){
        if (objeto.id2 == componente.id2){
            jsonCarrito[componente.id] = null;
            ruta = "src/pregunta1.png";
            if (componente.id == 0)
                ruta = "src/pregunta.png";
            $("#imagen"+componente.id).attr("src",ruta);
            var total = computarTotal();
            $("#preciototal").text("El precio total es: $" + total);
        }
    }
}

function computarTotal() {
    var total, index, cant;
    total = 0;
    cant = 0;

    for (index = 0; index < jsonCarrito.length; ++index) {
        var lala2 = jsonCarrito[index];
        if (lala2 !== null) {
            total = total + lala2.precio;
            ++cant;
        }
    }
	$("#carrito").text("Items: " + cant);
	localStorage.setItem("PedidoAnterior",JSON.stringify(jsonCarrito));

	return total;
}

function mostrarAnterior() {
    var carritoAnterior = localStorage.getItem("PedidoAnterior");
    if (carritoAnterior !== null) {
        var index,cant,precio;
		cant = 0;
		precio = 0;
        var obj = JSON.parse(carritoAnterior);
		if (obj !== null){
			for (index = 0; index < obj.length; ++index) {
            var objeto = obj[index];
            if (objeto !== null){
				jsonCarrito[index] = objeto;
				$("#imagen" + index).attr("src", objeto.imagen);
				++cant;
				precio+=objeto.precio;
			}
        }
		$("#carrito").text("Items: " + cant);
		$("#preciototal").text("El precio total es: $" + precio);

		}

    }
}
