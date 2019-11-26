verPTA()

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

function verPTA(){
    var idPTAprueba = getQueryVariable('idPTA');
    $("#tablaPlan").load("vcargarTablaPTA.php");
    $("#tablaActividadesPTA").load("vcargarTablaActividadesPTA.php?idPTA="+idPTAprueba);
}

function registrarPTA(){
    var PTA,objetivo,meta,annio;
    PTA = $("#plan").val();
    objetivo = $("#objetivo").val();
    meta = $("#meta").val();
    annio = $("#annio").val();
    if(PTA==="" || objetivo==="" || meta==="" || annio===""){
        swal("Los campos no pueden estar vacíos");
        return false;
    }
    if(PTA.length>100){
        swal("Nombre del plan muy largo");
        return false;
    }
    if(objetivo.length>100){
        swal("Nombre del objetivo muy largo");
        return false;
    }
    if(meta.length>100){
        swal("Nombre de la meta muy largo");
        return false;
    }
    if(isNaN(annio) || annio.length!=4){
        swal("Año inválido");
        return false;
    }
    $.ajax({
        url: "../controlador/cPlanAnual.php",
        type: "POST",
        data: {
            PTA : PTA,
            objetivo : objetivo,
            meta : meta,
            annio : annio,
            accion : 'registrarPTA'
        },
        success: function(respuesta){
            if(respuesta==1){
                swal({
                    title:" PLAN ANUAL REGISTRADO CON EXITO",
                    text: "Guardando datos...",
                    type: "success",
                    timer: 1000,
                    showConfirmButton: false
                });
                $("#tablaPlan").load("vcargarTablaPTA.php");
                $("#plan").val("");
                $("#objetivo").val("");
                $("#meta").val("");
                $("#annio").val("");
            }
            else{
                swal("Ocurrio un error");
            }
        }
    });
}

function registrarActividadPTA(){
    var idPTAprueba = getQueryVariable('idPTA');
    var descripcion, responsable,fecha,idPTA;
    descripcion = $("#descripcion").val();
    responsable = $("#responsable").val();
    fecha = $("#fecha").val();
    idPTA = getQueryVariable('idPTA');
    if(descripcion==="" || responsable===""){
        swal("Los campos no pueden estar vacíos");
        return false;
    }
    if(descripcion.length>80){
        swal("Nombre de la actvidad muy largo");
        return false;
    }
    if(responsable.length>50){
        swal("Nombre del area responsable muy largo");
        return false;
    }
    $.ajax({
        url: "../controlador/cPlanAnual.php",
        type: "POST",
        data: {
            descripcion : descripcion,
            responsable : responsable,
            fecha : fecha,
            idPTA : idPTA,
            accion : 'registrarActividadPTA'
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
                $("#tablaActividadesPTA").load("vcargarTablaActividadesPTA.php?idPTA="+idPTAprueba);
                $("#fecha").val("");
                $("#descripcion").val("");
                $("#responsable").val("");
            }
            else{
                swal("Ocurrio un error");
            }
        }
    });
}

$(document).on('click','.agregarElementos', function(){
    const element = $(this)[0].parentElement.parentElement;
    const idPTA = $(element).attr('idPTA');
    window.location.href="vElementosPTA.php?idPTA="+idPTA;
});

$(document).on('click','.eliminarActividadPTA', function(){
    var idPTAprueba = getQueryVariable('idPTA');
    const element = $(this)[0].parentElement.parentElement;
    var idActividadesPTA = $(element).attr('idActividadPTA');
    var accion = 'eliminarActividadPTA';
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
          $.post('../controlador/cPlanAnual.php', {idActividadesPTA,accion},(response) => {
            swal("Operacion Realizada!", "Actividad eliminada con éxito", "success");
            $("#tablaActividadesPTA").load("vcargarTablaActividadesPTA.php?idPTA="+idPTAprueba);
          });
        } else {
          swal("Operación Cancelada!");
        }
      });
});

$(document).on('click','.eliminarPTA', function(){
    const element = $(this)[0].parentElement.parentElement;
    var idPTA = $(element).attr('idPTA');
    var accion = 'eliminarPTA';
    swal({
        title: "Desea eliminar el plan?",
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
          $.post('../controlador/cPlanAnual.php', {idPTA,accion},(response) => {
            swal("Operacion Realizada!", "Plan eliminado con éxito", "success");
            $("#tablaPlan").load("vcargarTablaPTA.php");
          });
        } else {
          swal("Operación Cancelada!");
        }
      });
});

$(document).on('click','.detallePTA', function(){
    const element = $(this)[0].parentElement.parentElement;
    var idPTA = $(element).attr('idPTA');
    window.location.href="vDetallePTA.php?idPTA="+idPTA;
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