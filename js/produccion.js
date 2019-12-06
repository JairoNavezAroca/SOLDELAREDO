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
    window.location.href="pdfProd.php?numero="+numeroPrueba;
}

function cargar(){
    var numeroPrueba = getQueryVariable('numero');
    $("#tablaProduccion").load("vcargarTablaProduccion.php");
    $("#tablaInsumosProd").load("vcargarTablaInsumosProd.php?numero="+numeroPrueba);
}

function registrarProduccion(){
    var numero,fecha,fechaAlmacen,idProducto,cantidad,labor,area,especificaciones;
    numero = $("#nroOrden").val();
    fecha = $("#fecha").val();
    fechaAlmacen = $("#fechaAlmacen").val();
    idProducto = $("#idProducto").val();
    cantidad = $("#cantidad").val();
    labor = $("#labor").val();
    area = $("#area").val();
    especificaciones = $("#especificaciones").val();
    if(numero==="" || fecha==="" || fechaAlmacen==="" || idProducto==="" || cantidad==="" || labor==="" || area==="" || especificaciones===""){
        swal("Los campos no pueden estar vacíos");
        return false;
    }
    if(numero.length !=10){
        swal("Numero inválido");
        return false;
    }
    if(isNaN(cantidad)){
        swal("Cantidad inválida");
        return false;
    }
    $.ajax({
        url: "../controlador/cProduccion.php",
        type: "POST",
        data: {
            numero : numero,
            fecha : fecha,
            fechaAlmacen : fechaAlmacen,
            area : area,
            cantidad : cantidad,
            especificaciones : especificaciones,
            labor : labor,
            codProducto : idProducto,
            accion : 'registrarProduccion'
        },
        success: function(respuesta){
            if(respuesta==1){
                swal({
                    title:" PRODUCCION REGISTRADA CON EXITO",
                    text: "Guardando datos...",
                    type: "success",
                    timer: 1000,
                    showConfirmButton: false
                });
                $("#tablaProduccion").load("vcargarTablaProduccion.php");
                $("#nroOrden").val("");
                $("#fecha").val("");
                $("#fechaAlmacen").val("");
                $("#idProducto").val("");
                $("#cantidad").val("");
                $("#labor").val("");
                $("#area").val("");
                $("#especificaciones").val("");
            }
            else{
                swal("Ocurrio un error");
            }
        }
    });
}

function registrarInsumoProd(){
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
        url: "../controlador/cProduccion.php",
        type: "POST",
        data: {
            numero : numero,
            codInsumo : codInsumo,
            cantidad : cantidadInsumo,
            accion : 'registrarInsumoPro'
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
                $("#tablaInsumosProd").load("vcargarTablaInsumosProd.php?numero="+numeroPrueba);
                $("#codInsumo").val("");
                $("#cantidadInsumo").val("");
            }
            else{
                swal("Ocurrio un error");
            }
        }
    });
}

$(document).on('click','.eliminarProduccion', function(){
    const element = $(this)[0].parentElement.parentElement;
    var numero = $(element).attr('numero');
    var accion = 'eliminarProduccion';
    swal({
        title: "Desea eliminar la produccion?",
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
          $.post('../controlador/cProduccion.php', {numero,accion},(response) => {
            swal("Operacion Realizada!", "Produccion eliminada con éxito", "success");
            $("#tablaProduccion").load("vcargarTablaProduccion.php");
          });
        } else {
          swal("Operación Cancelada!");
        }
      });
});

$(document).on('click','.eliminarInsumoProd', function(){
    var numeroPrueba = getQueryVariable('numero');
    const element = $(this)[0].parentElement.parentElement;
    var codInsumo = $(element).attr('codInsumo');
    const element1 = $(this)[0].parentElement.parentElement;
    var numero = $(element1).attr('numero');
    var accion = 'eliminarInsumoProd';
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
          $.post('../controlador/cProduccion.php', {numero,codInsumo,accion},(response) => {
            swal("Operacion Realizada!", "Insumo eliminado con éxito", "success");
            $("#tablaInsumosProd").load("vcargarTablaInsumosProd.php?numero="+numeroPrueba);
          });
        } else {
          swal("Operación Cancelada!");
        }
      });
});

$(document).on('click','.agregarInsumos', function(){
    const element = $(this)[0].parentElement.parentElement;
    var numero = $(element).attr('numero');
    window.location.href="vInsumosProduccion.php?numero="+numero;
});

$(document).on('click','.detalleProduccion', function(){
    const element = $(this)[0].parentElement.parentElement;
    var numero = $(element).attr('numero');
    window.location.href="vDetalleProduccion.php?numero="+numero;
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