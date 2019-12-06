cargar()

function cargar(){
    $("#tablaInsumos").load("vcargarTablaInsumos.php");
}

function registrarInsumo(){
    var codInsumo,descripcion,precio,cantidad;
    codInsumo = $("#codigo").val();
    descripcion = $("#insumo").val();
    precio = $("#precio").val();
    cantidad = $("#cantidad").val();
    if(codInsumo==="" || descripcion==="" || precio==="" || cantidad===""){
        swal("Los campos no pueden estar vacíos");
        return false;
    }
    if(codInsumo.length!=4){
        swal("Codigo inválido");
        return false;
    }
    if(isNaN(cantidad)){
        swal("Cantidad inválida");
        return false;
    }
    if(precio<0){
        swal("El precio no puede ser negativo");
        return false;
    }
    if(cantidad<0){
        swal("La cantidad no puede ser negativo");
        return false;
    }
    $.ajax({
        url: "../controlador/cInsumo.php",
        type: "POST",
        data: {
            codInsumo : codInsumo,
            descripcion : descripcion,
            precio : precio,
            cantidad : cantidad,
            accion : 'registrar'
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
                $("#tablaInsumos").load("vcargarTablaInsumos.php");
                $("#codigo").val("");
                $("#insumo").val("");
                $("#precio").val("");
                $("#cantidad").val("");
            }
            else{
                swal("Ocurrio un error");
            }
        }
    });
}

$(document).on('click','.editar', function(){
    const element = $(this)[0].parentElement.parentElement;
    var codInsumo = $(element).attr('codInsumo');
    $.ajax({
        url: "../controlador/cInsumo.php",
        type: "POST",
        data: {
            codInsumo : codInsumo,
            accion : 'seleccionar'
        },
        success: function(respuesta){
            var datos = JSON.parse(respuesta);
            $("#codigo").val(datos[0].codInsumo);
            $("#insumo").val(datos[0].descripcion);
            $("#precio").val(datos[0].precio);
            $("#cantidad").val(datos[0].cantidad);
            $("#registrar").css('display','none');
            $("#actualizar").css('display','block');
        }
    });
});

function actualizarInsumo(){
    var codInsumo,descripcion,precio,cantidad;
    codInsumo = $("#codigo").val();
    descripcion = $("#insumo").val();
    precio = $("#precio").val();
    cantidad = $("#cantidad").val();
    if(codInsumo==="" || descripcion==="" || precio==="" || cantidad===""){
        swal("Los campos no pueden estar vacíos");
        return false;
    }
    if(codInsumo.length!=4){
        swal("C0digo inválido");
        return false;
    }
    if(isNaN(cantidad)){
        swal("Cantidad inválida");
        return false;
    }
    if(precio<0){
        swal("El precio no puede ser negativo");
        return false;
    }
    if(cantidad<0){
        swal("La cantidad no puede ser negativo");
        return false;
    }
    $.ajax({
        url: "../controlador/cInsumo.php",
        type: "POST",
        data: {
            codInsumo : codInsumo,
            descripcion : descripcion,
            precio : precio,
            cantidad : cantidad,
            accion : 'actualizar'
        },
        success: function(respuesta){
            if(respuesta==1){
                swal({
                    title:" INSUMO ACTUALIZADO CON EXITO",
                    text: "Guardando datos...",
                    type: "success",
                    timer: 1000,
                    showConfirmButton: false
                });
                $("#tablaInsumos").load("vcargarTablaInsumos.php");
                $("#codigo").val("");
                $("#insumo").val("");
                $("#precio").val("");
                $("#cantidad").val("");
                $("#actualizar").css('display','none');
                $("#registrar").css('display','block');
            }
            else{
                swal("Ocurrio un error");
            }
        }
    });
}

$(document).on('click','.eliminar', function(){
    const element = $(this)[0].parentElement.parentElement;
    var codInsumo = $(element).attr('codInsumo');
    var accion = 'eliminar';
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
          $.post('../controlador/cInsumo.php', {codInsumo,accion},(response) => {
            swal("Operacion Realizada!", "Insumo eliminado con éxito", "success");
            $("#tablaInsumos").load("vcargarTablaInsumos.php");
          });
        } else {
          swal("Operación Cancelada!");
        }
      });
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