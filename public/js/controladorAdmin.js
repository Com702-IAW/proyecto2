$(function () {

  $.ajax({
     url: "/componentes/json",
     context: document.body,
     success: function (data) {
         mostrar(ordenarComponentes(data));
     }
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

function mostrar(arreglo) {
    var index2,index;
    
    for (index2 = 0; index2 < arreglo.length; ++index2) {
        var objeto = arreglo[index2];
          agregarComponente(objeto);
    }
}

function agregarComponente(componente) {

    var tipo;

    switch(componente.id){
      case 0 : 
        tipo = "Monitor";
        break;
      case 1 : 
        tipo = "Teclado";
        break;
      case 2 : 
        tipo = "Mouse";
        break;
      case 3 : 
        tipo = "Parlante";
        break;
    }

    var row = $("<tr></tr>").attr("id", componente.id);
    row.append($("<td></td").text(tipo));
    row.append($("<td></td").text(componente.marca));
    row.append($("<td></td").text(componente.precio));
    row.append($("<td></td").text(componente.color));
    var boton = $("<button></button>").text("Eliminar");
    row.append($("<td></td").append(boton));
    boton.click(function() {
        eliminar(componente);
    });
    $("#tabla-eliminar").append(row);
}

function eliminar(componente){
  var index;

  //ver como reformular
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
}