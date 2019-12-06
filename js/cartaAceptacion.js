cargar();

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

function cargar(){
    $("#tablaCartas").load("vcargarTablaCarta.php");
}

function registrarCarta(){
    var area,tipo,titulo,descripcion,idProyecto,annio;
    area = $("#area").val();
    tipo = $("#tipo").val();
    titulo = $("#titulo").val();
    descripcion = $("#descripcion").val();
    idProyecto = $("#idProyecto").val();
    annio = $("#annio").val();
    if(area==="" || tipo==="" || titulo==="" || descripcion==="" || idProyecto==="" || annio==="" || /^\s+$/.test(area) || /^\s+$/.test(tipo) || /^\s+$/.test(titulo) || /^\s+$/.test(descripcion)){
        swal("Los campos no pueden estar vacíos");
        return false;
    }
    $.ajax({
        url: "../controlador/cCartaAceptacion.php",
        type: "POST",
        data: {
            area : area,
            tipo : tipo,
            titulo : titulo,
            descripcion : descripcion,
            idProyecto : idProyecto,
            annio : annio,
            accion : 'registrarCarta'
        },
        success: function(respuesta){
            if(respuesta==1){
                swal({
                    title:" CARTA REGISTRADA CON EXITO",
                    text: "Guardando datos...",
                    type: "success",
                    timer: 1000,
                    showConfirmButton: false
                });
                $("#tablaCartas").load("vcargarTablaCarta.php");
                $("#area").val("");
                $("#tipo").val("");
                $("#titulo").val("");
                $("#descripcion").val("");
                $("#idProyecto").val("");
                $("#annio").val("");
            }
            else{
                swal("Ocurrio un error");
            }
        }
    });
}

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

$(document).on('click','.detalleCarta', function(){
    const element = $(this)[0].parentElement.parentElement;
    var idCarta = $(element).attr('idCarta');
    window.location.href="vDetalleCarta.php?idCarta="+idCarta;
});

$(document).on('click','.eliminarCarta', function(){
    const element = $(this)[0].parentElement.parentElement;
    var idCarta = $(element).attr('idCarta');
    var accion = 'eliminarCarta';
    swal({
        title: "Desea eliminar la carta?",
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
          $.post('../controlador/cCartaAceptacion.php', {idCarta,accion},(response) => {
            swal("Operacion Realizada!", "Carta eliminada con éxito", "success");
            $("#tablaCartas").load("vcargarTablaCarta.php");
          });
        } else {
          swal("Operación Cancelada!");
        }
      });
});