verProyecto()

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

function verProyecto(){
    var idProyectoPrueba = getQueryVariable('idProyecto');
    $("#actualizar").css('display','none');
    $("#tablaProyecto").load("vcargarTablaProy.php");
    $("#tablaActividades").load("vcargarTablaActProy.php?idProyecto="+idProyectoPrueba);
}

$(document).on('click','.agregarEleProy', function(){
    const element = $(this)[0].parentElement.parentElement;
    const idProyecto = $(element).attr('idProyecto');
    window.location.href="vActividadesProyecto.php?idProyecto="+idProyecto;
});

function registrarProyecto(){
    var annioInicio,annioFin,proyecto;
    annioInicio = $("#añoInicio").val();
    annioFin = $("#añoFin").val();
    proyecto = $("#descripcion").val();
    if(annioInicio==="" || annioFin==="" || proyecto===""){
        swal("Los campos no pueden estar vacíos");
        return false;
    }
    if(isNaN(annioInicio) || annioInicio.length!=4){
        swal("Año inválido");
        return false;
    }
    if(isNaN(annioFin) || annioFin.length!=4){
        swal("Año inválido");
        return false;
    }
    $.ajax({
        url: "../controlador/cProyecto.php",
        type: "POST",
        data: {
            annioInicio : annioInicio,
            annioFin : annioFin,
            proyecto : proyecto,
            accion : 'registrarProyecto'
        },
        success: function(respuesta){
            if(respuesta==1){
                swal({
                    title:" PROYECTO REGISTRADO CON EXITO",
                    text: "Guardando datos...",
                    type: "success",
                    timer: 1000,
                    showConfirmButton: false
                });
                $("#tablaProyecto").load("vcargarTablaProy.php");
                $("#añoInicio").val("");
                $("#añoFin").val("");
                $("#descripcion").val("");
            }
            else{
                swal("Ocurrio un error");
            }
        }
    });
}

function registrarActProyecto(){
    var descripcion,equipo,tiempo,subtareas;
    descripcion = $("#descripcion").val();
    equipo = $("#equipo").val();
    duracion = $("#duracion").val();
    subtareas = $("#subtareas").val();
    idProyecto = getQueryVariable('idProyecto');
    if(descripcion==="" || equipo==="" || tiempo==="" || subtareas===""){
        swal("Los campos no pueden estar vacíos");
        return false;
    }
    $.ajax({
        url: "../controlador/cProyecto.php",
        type: "POST",
        data: {
            descripcion : descripcion,
            equipo : equipo,
            duracion : duracion,
            subtareas : subtareas,
            idProyecto : idProyecto,
            accion : 'registrarActividadProy'
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
                var idProyectoPrueba = getQueryVariable('idProyecto');
                $("#tablaActividades").load("vcargarTablaActProy.php?idProyecto="+idProyectoPrueba);
                $("#descripcion").val("");
                $("#equipo").val("");
                $("#duracion").val("");
                $("#subtareas").val("");
            }
            else{
                swal("Ocurrio un error");
            }
        }
    });
}

$(document).on('click','.eliminarProyecto', function(){
    const element = $(this)[0].parentElement.parentElement;
    var idProyecto = $(element).attr('idProyecto');
    var accion = 'eliminarProyecto';
    swal({
        title: "Desea eliminar el proyecto?",
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
          $.post('../controlador/cProyecto.php', {idProyecto,accion},(response) => {
            swal("Operacion Realizada!", "Proyecto eliminada con éxito", "success");
            $("#tablaProyecto").load("vcargarTablaProy.php");
          });
        } else {
          swal("Operación Cancelada!");
        }
      });
});

$(document).on('click','.eliminarActProy', function(){
    const element = $(this)[0].parentElement.parentElement;
    var idProyectoPrueba = getQueryVariable('idProyecto');
    var idActividadProy = $(element).attr('idActividadProy');
    var accion = 'eliminarActividadProy';
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
          $.post('../controlador/cProyecto.php', {idActividadProy,accion},(response) => {
            swal("Operacion Realizada!", "Actividad eliminada con éxito", "success");
            $("#tablaActividades").load("vcargarTablaActProy.php?idProyecto="+idProyectoPrueba);
          });
        } else {
          swal("Operación Cancelada!");
        }
      });
});

$(document).on('click','.editarActProy', function(){
    const element = $(this)[0].parentElement.parentElement;
    var idActividadProy = $(element).attr('idActividadProy');
    $("#tablaActividades").val(idActividadProy);
    $.ajax({
        url: "../controlador/cProyecto.php",
        type: "POST",
        data: {
            idActividadProy : idActividadProy,
            accion : 'seleccionarActividadProy'
        },
        success: function(respuesta){
            var datos = JSON.parse(respuesta);
            $("#descripcion").val(datos[0].actividad);
            $("#equipo").val(datos[0].equipo);
            $("#duracion").val(datos[0].duracion);
            $("#subtareas").val(datos[0].subtareas);
            $("#registrar").css('display','none');
            $("#actualizar").css('display','block');
        }
    });
});

function actualizarActProyecto(){
    var idProyectoPrueba = getQueryVariable('idProyecto');
    var descripcion,equipo,tiempo,subtareas;
    descripcion = $("#descripcion").val();
    equipo = $("#equipo").val();
    duracion = $("#duracion").val();
    subtareas = $("#subtareas").val();
    idActividadProy = $("#tablaActividades").val();
    if(descripcion==="" || equipo==="" || tiempo==="" || subtareas===""){
        swal("Los campos no pueden estar vacíos");
        return false;
    }
    $.ajax({
        url: "../controlador/cProyecto.php",
        type: "POST",
        data: {
            descripcion : descripcion,
            equipo : equipo,
            duracion : duracion,
            subtareas : subtareas,
            idActividadProy : idActividadProy,
            accion : 'editarActividadProy'
        },
        success: function(respuesta){
            if(respuesta==1){
                swal({
                    title:" ACTIVIDAD ACTUALIZADA CON EXITO",
                    text: "Guardando datos...",
                    type: "success",
                    timer: 1000,
                    showConfirmButton: false
                });
                $("#tablaActividades").load("vcargarTablaActProy.php?idProyecto="+idProyectoPrueba);
                $("#descripcion").val("");
                $("#equipo").val("");
                $("#duracion").val("");
                $("#subtareas").val("");
                $("#actualizar").css('display','none');
                $("#registrar").css('display','block');
            }
            else{
                swal("Ocurrio un error");
            }
        }
    });
}

$(document).on('click','.detalleProy', function(){
    const element = $(this)[0].parentElement.parentElement;
    var idProyecto = $(element).attr('idProyecto');
    window.location.href="vDetalleProyecto.php?idProyecto="+idProyecto;
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