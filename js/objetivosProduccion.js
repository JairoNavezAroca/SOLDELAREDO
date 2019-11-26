cargar()

function cargar(){
    $("#tablaObjProd").load("vcargarTablaObjProd.php");
}

function registrar(){
    var objetivo,fecha;
    objetivo = $("#objetivo").val();
    fecha = $("#fecha").val();
    if(objetivo==="" || fecha===""){
        swal("Los campos no pueden estar vacíos");
        return false;
    }
    $.ajax({
        url: "../controlador/cObjetivosProduccion.php",
        type: "POST",
        data: {
            descripcion : objetivo,
            fecha : fecha,
            accion : 'registrar'
        },
        success: function(respuesta){
            if(respuesta==1){
                swal({
                    title:" OBJETIVO REGISTRADO CON EXITO",
                    text: "Guardando datos...",
                    type: "success",
                    timer: 1000,
                    showConfirmButton: false
                });
                $("#tablaObjProd").load("vcargarTablaObjProd.php");
                $("#objetivo").val("");
                $("#fecha").val("");
            }
            else{
                swal("Ocurrio un error");
            }
        }
    });
}

$(document).on('click','.eliminar', function(){
    const element = $(this)[0].parentElement.parentElement;
    var idObjetivo = $(element).attr('idObjetivo');
    var accion = 'eliminar';
    swal({
        title: "Desea eliminar el objetivo?",
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
          $.post('../controlador/cObjetivosProduccion.php', {idObjetivo,accion},(response) => {
            swal("Operacion Realizada!", "Objetivo eliminado con éxito", "success");
            $("#tablaObjProd").load("vcargarTablaObjProd.php");
          });
        } else {
          swal("Operación Cancelada!");
        }
      });
});