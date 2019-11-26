cargar()

function cargar(){
    var numeroPrueba = getQueryVariable('numero');
    $("#tablaPedido").load("vcargarTablaPedido.php");
    $("#tablaInsumosPed").load("vcargarTablaInsumosPed.php?numero="+numeroPrueba);
}


function registrarPedido(){
    var numero,proveedor,fecha,lugar;
    numero = $("#numeroOrden").val();
    proveedor = $("#proveedor").val();
    fecha = $("#fecha").val();
    lugar = $("#lugar").val();
    if(numero==="" || proveedor==="" || fecha==="" || lugar===""){
        swal("Los campos no pueden estar vacíos");
        return false;
    }
    if(numero.length !=10){
        swal("Numero inválido");
        return false;
    }
    $.ajax({
        url: "../controlador/cPedido.php",
        type: "POST",
        data: {
            numero : numero,
            proveedor : proveedor,
            fecha: fecha,
            lugarAtencion : lugar,
            accion : 'registrarPedido'
        },
        success: function(respuesta){
            if(respuesta==1){
                swal({
                    title:" PEDIDO REGISTRADO CON EXITO",
                    text: "Guardando datos...",
                    type: "success",
                    timer: 1000,
                    showConfirmButton: false
                });
                $("#tablaPedido").load("vcargarTablaPedido.php");
                $("#numeroOrden").val("");
                $("#proveedor").val("");
                $("#fecha").val("");
                $("#lugar").val("");
            }
            else{
                swal("Ocurrio un error");
            }
        }
    });
}

function registrarInsPed(){
    var numeroPrueba = getQueryVariable('numero');
    var numero,codInsumo,cantidadInsumo;
    numero = getQueryVariable('numero');
    codInsumo = $("#codInsumo").val();
    cantidadInsumo = $("#cantidadInsumo").val();
    if(codInsumo==="" || cantidadInsumo===""){
        swal("Los campos no pueden estar vacíos");
        return false;
    }
    if(isNaN(cantidadInsumo)){
        swal("Cantidad inválida");
        return false;
    }
    $.ajax({
        url: "../controlador/cPedido.php",
        type: "POST",
        data: {
            numero : numero,
            codInsumo : codInsumo,
            cantidad : cantidadInsumo,
            accion : 'registrarInsumoPed'
        },
        success: function(respuesta){
            if(respuesta==1){
                swal({
                    title:" INSUMO REGISTRADO CON EXITO",
                    text: "Guardando datos...",
                    type: "success",
                    timer: 1000,
                    showConfirmButton: false
                });
                $("#tablaInsumosPed").load("vcargarTablaInsumosPed.php?numero="+numeroPrueba);
                $("#codInsumo").val("");
                $("#cantidadInsumo").val("");
            }
            else{
                swal("Ocurrio un error");
            }
        }
    });
}

$(document).on('click','.eliminarPedido', function(){
    const element = $(this)[0].parentElement.parentElement;
    var numero = $(element).attr('numero');
    var accion = 'eliminarPedido';
    swal({
        title: "Desea eliminar el pedido?",
        type: "warning",
        showCancelButton: true,
        cancelButtonClass: "btn-primary",
        confirmButtonClass: "btn-danger",
        confirmButtonText: "Si",
        cancelButtonText: "No",
        closeOnConfirm: false,
        closeOnCancel: false
      },
      function(isConfirm) {
        if (isConfirm) {
          $.post('../controlador/cPedido.php', {numero,accion},(response) => {
            swal("Operacion Realizada!", "Pedido eliminado con éxito", "success");
            $("#tablaPedido").load("vcargarTablaPedido.php");
          });
        } else {
          swal("Operación Cancelada!");
        }
      });
});

$(document).on('click','.eliminarInsumoPed', function(){
    var numeroPrueba = getQueryVariable('numero');
    const element = $(this)[0].parentElement.parentElement;
    var codInsumo = $(element).attr('codInsumo');
    const element1 = $(this)[0].parentElement.parentElement;
    var numero = $(element1).attr('numero');
    var accion = 'eliminarInsumoPed';
    swal({
        title: "Desea eliminar el insumo?",
        type: "warning",
        showCancelButton: true,
        cancelButtonClass: "btn-primary",
        confirmButtonClass: "btn-danger",
        confirmButtonText: "Si",
        cancelButtonText: "No",
        closeOnConfirm: false,
        closeOnCancel: false
      },
      function(isConfirm) {
        if (isConfirm) {
          $.post('../controlador/cPedido.php', {numero,codInsumo,accion},(response) => {
            swal("Operacion Realizada!", "Insumo eliminado con éxito", "success");
            $("#tablaInsumosPed").load("vcargarTablaInsumosPed.php?numero="+numeroPrueba);
          });
        } else {
          swal("Operación Cancelada!");
        }
      });
});

$(document).on('click','.agregarInsumos', function(){
    const element = $(this)[0].parentElement.parentElement;
    var numero = $(element).attr('numero');
    window.location.href="vInsumosPedidos.php?numero="+numero;
});

$(document).on('click','.detallePedido', function(){
    const element = $(this)[0].parentElement.parentElement;
    var numero = $(element).attr('numero');
    window.location.href="vDetallePedido.php?numero="+numero;
});

function getQueryVariable(variable) {
    var query = window.location.search.substring(1);
    var vars = query.split("&");
    for (var i=0; i < vars.length; i++) {
        var pares = vars[i].split("="); 
        if (pares[0] == variable) {
            return pares[1];
        }
    }
    return false;
}