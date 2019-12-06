cargar()

function Export2Doc(element, filename = ''){
    var preHtml = "<html xmlns:o='urn:schemas-microsoft-com:office:office' xmlns:w='urn:schemas-microsoft-com:office:word' xmlns='http://www.w3.org/TR/REC-html40'><head><meta charset='utf-8'><title>Export HTML To Doc</title></head><body>";
    var postHtml = "</body></html>";
    var html = preHtml+document.getElementById(element).innerHTML+postHtml;

    var blob = new Blob(['ufeff', html], {
        type: 'application/msword'
    });
    
    // Specify link url
    var url = 'data:application/vnd.ms-word;charset=utf-8,' + encodeURIComponent(html);
    
    // Specify file name
    filename = filename?filename+'.doc':'document.doc';
    
    // Create download link element
    var downloadLink = document.createElement("a");

    document.body.appendChild(downloadLink);
    
    if(navigator.msSaveOrOpenBlob ){
        navigator.msSaveOrOpenBlob(blob, filename);
    }else{
        // Create a link to the file
        downloadLink.href = url;
        
        // Setting the file name
        downloadLink.download = filename;
        
        //triggering the function
        downloadLink.click();
    }
    
    document.body.removeChild(downloadLink);
}

function generar(){
    var numeroPrueba = getQueryVariable('numero');
    window.location.href="pdfPed.php?numero="+numeroPrueba;
}

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
    if(cantidadInsumo<0){
        swal("La cantidad no puede ser negativa");
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

function soloLetras(e){
    key = e.keyCode || e.which;
    tecla = String.fromCharCode(key).toLowerCase();
    letras = " abcdefghijklmnñopqrstuvwxyz";
    especiales = "8-37-39-46";

    tecla_especial = false
    for(var i in especiales){
         if(key == especiales[i]){
             tecla_especial = true;
             break;
         }
     }

     if(letras.indexOf(tecla)==-1 && !tecla_especial){
         return false;
     }
 }

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