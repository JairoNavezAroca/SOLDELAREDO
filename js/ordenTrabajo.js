verOrdenTrabajo()

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
    window.location.href="pdfOTrab.php?numero="+numeroPrueba;
}

function verOrdenTrabajo(){
    var numeroPrueba = getQueryVariable('numero');
    $("#tablaOrdenes").load("vcargarTablaOTrabajo.php");
    $("#tablaActividadesTrabajo").load("vcargartablaActvOrdenTrab.php?numero="+numeroPrueba);
}

function registrarOrden(){
    var numero,area,fecha;
    numero = $("#nroOrden").val();
    area = $("#area").val();
    fecha = $("#fecha").val();
    if(numero==="" || area==="" || fecha===""){
        swal("Los campos no pueden estar vacíos");
        return false;
    }
    if(isNaN(numero) || numero.length!=10){
        swal("Numero orden inválido");
        return false;
    }
    $.ajax({
        url: "../controlador/cOrdenTrabajo.php",
        type: "POST",
        data: {
            numero : numero,
            area : area,
            fecha : fecha,
            accion : 'registrarOrdenTrabajo'
        },
        success: function(respuesta){
            if(respuesta==1){
                swal({
                    title:"ORDEN DE TRABAJO REGISTRADO CON EXITO",
                    text: "Guardando datos...",
                    type: "success",
                    timer: 1000,
                    showConfirmButton: false
                });
    			$("#tablaOrdenes").load("vcargarTablaOTrabajo.php");
                $("#nroOrden").val("");
                $("#area").val("");
                $("#fecha").val("");
            }
            else{
                swal("Ocurrio un error");
            }
        }
    });
}

$(document).on('click','.agregarElementos', function(){
    const element = $(this)[0].parentElement.parentElement;
    const idOrdenTrabajo = $(element).attr('idOrdenTrabajo');
    window.location.href="vActividadesOrdenTrab.php?numero="+idOrdenTrabajo;
});

$(document).on('click','.eliminarOrden', function(){
    const element = $(this)[0].parentElement.parentElement;
    var numero = $(element).attr('idOrdenTrabajo');
    var accion = 'eliminarOrdenTrabajo';
    swal({
        title: "Desea eliminar la orden?",
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
          $.post('../controlador/cOrdenTrabajo.php', {numero,accion},(response) => {
            swal("Operacion Realizada!", "Orden eliminada con éxito", "success");
            $("#tablaOrdenes").load("vcargarTablaOTrabajo.php");
          });
        } else {
          swal("Operación Cancelada!");
        }
      });
});

function registrarAct(){
    var numeroPrueba = getQueryVariable('numero');
    var cantidad,descripcion, importeUnitario,numero;
    descripcion = $("#actividad").val();
    cantidad = $("#cantidad").val();
    importeUnitario = $("#importe").val();
    numero = getQueryVariable('numero');
    if(descripcion==="" || cantidad===""|| importeUnitario===""){
        swal("Los campos no pueden estar vacíos");
        return false;
    }
    if(descripcion.length>80){
        swal("Nombre de la actvidad muy largo");
        return false;
    }
    if(isNaN(cantidad)){
        swal("La cantidad debe ser un numero");
        return false;
    }
    $.ajax({
        url: "../controlador/cOrdenTrabajo.php",
        type: "POST",
        data: {
        	numero:numero,
            descripcion : descripcion,
            cantidad : cantidad,
            importeUnitario : importeUnitario,
            accion : 'registrarActividadOrdenTrab'
        },
        success: function(respuesta){
            if(respuesta==1){
                swal({
                    title:" ACTIVIDAD REGISTRADA CON EXITO",
                    text: "Guardando datos...",
                    type: "success",
                    timer: 1000,
                    showConfirmButton: false
                });
    			$("#tablaActividadesTrabajo").load("vcargartablaActvOrdenTrab.php?numero="+numeroPrueba);
                $("#actividad").val("");
                $("#cantidad").val("");
                $("#importe").val("");
            }
            else{
                swal("Ocurrio un error");
            }
        }
    });
}

$(document).on('click','.eliminarActividad', function(){
    var numeroPrueba = getQueryVariable('numero');
    const element = $(this)[0].parentElement.parentElement;
    var idActividad = $(element).attr('idActividad');
    var accion = 'eliminarActividadOrdenTrab';
    swal({
        title: "Desea eliminar la actividad?",
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
          $.post('../controlador/cOrdenTrabajo.php', {idActividad,accion},(response) => {
            swal("Operacion Realizada!", "ACTIVIDAD eliminada con éxito", "success");
    	    $("#tablaActividadesTrabajo").load("vcargartablaActvOrdenTrab.php?numero="+numeroPrueba);
          });
        } else {
          swal("Operación Cancelada!");
        }
      });
});


$(document).on('click','.editarActividad', function(){
    const element = $(this)[0].parentElement.parentElement;
    var idActividad = $(element).attr('idActividad');
    $("#tablaActividadesTrabajo").val(idActividad);
    $.ajax({
        url: "../controlador/cOrdenTrabajo.php",
        type: "POST",
        data: {
            idActividad : idActividad,
            accion : 'seleccionarActividadOrdenTrab'
        },
        success: function(respuesta){
            var datos = JSON.parse(respuesta);
            $("#actividad").val(datos[0].descripcion);
            $("#cantidad").val(datos[0].cantidad);
            $("#importe").val(datos[0].importeUnitario);
            $("#registrarActividad").css('display','none');
            $("#actualizarActividad").css('display','block');
        }
    });
});

function actualizarAct(){
    var numeroPrueba = getQueryVariable('numero');
    var cantidad,descripcion, importeUnitario,idActividad;
    descripcion = $("#actividad").val();
    cantidad = $("#cantidad").val();
    importeUnitario = $("#importe").val();
    idActividad = $("#tablaActividadesTrabajo").val();
    if(descripcion==="" || cantidad===""|| importeUnitario===""){
        swal("Los campos no pueden estar vacíos");
        return false;
    }
    if(descripcion.length>80){
        swal("Nombre de la actvidad muy largo");
        return false;
    }
    if(isNaN(cantidad)){
        swal("La cantidad debe ser un numero");
        return false;
    }
    $.ajax({
        url: "../controlador/cOrdenTrabajo.php",
        type: "POST",
        data: {
            descripcion : descripcion,
            cantidad : cantidad,
            importeUnitario : importeUnitario,
            idActividad : idActividad,
            accion : 'actualizarActividadOrdenTrab'
        },
        success: function(respuesta){
            if(respuesta==1){
                swal({
                    title:"ACTIVIDAD ACTUALIZADA CON EXITO",
                    text: "Guardando datos...",
                    type: "success",
                    timer: 1000,
                    showConfirmButton: false
                });
    	        $("#tablaActividadesTrabajo").load("vcargartablaActvOrdenTrab.php?numero="+numeroPrueba);
                $("#descripcion").val("");
                $("#cantidad").val("");
                $("#importe").val("");
                $("#registrarActividad").css('display','none');
                $("#actualizarActividad").css('display','block');
            }
            else{
                swal("Ocurrio un error");
            }
        }
    });
}

$(document).on('click','.detalleOrden', function(){
    const element = $(this)[0].parentElement.parentElement;
    var numero = $(element).attr('idOrdenTrabajo');
    window.location.href="vDetalleOrdenTrabajo.php?numero="+numero;
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
