cargar()


function cargar(){
    $("#tablaProductos").load("vcargarTablaProducto.php");
}

function registrarProducto(){
    var codProducto,descripcion,precio,cantidad;
    codProducto = $("#codigo").val();
    descripcion = $("#producto").val();
    precio = $("#precio").val();
    cantidad = $("#cantidad").val();
    if(codProducto==="" || descripcion==="" || precio==="" || cantidad===""){
        swal("Los campos no pueden estar vacíos");
        return false;
    }
    if(codProducto.length!=4){
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
        swal("La cantidad no puede ser negativa");
        return false;
    }
    $.ajax({
        url: "../controlador/cProducto.php",
        type: "POST",
        data: {
            codProducto : codProducto,
            descripcion : descripcion,
            precio : precio,
            cantidad : cantidad,
            accion : 'registrar'
        },
        success: function(respuesta){
            if(respuesta==1){
                swal({
                    title:" PRODUCTO REGISTRADO CON EXITO",
                    text: "Guardando datos...",
                    type: "success",
                    timer: 1000,
                    showConfirmButton: false
                });
                $("#tablaProductos").load("vcargarTablaProducto.php");
                $("#codigo").val("");
                $("#producto").val("");
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
    var codProducto = $(element).attr('codProducto');
    $.ajax({
        url: "../controlador/cProducto.php",
        type: "POST",
        data: {
            codProducto : codProducto,
            accion : 'seleccionar'
        },
        success: function(respuesta){
            var datos = JSON.parse(respuesta);
            $("#codigo").val(datos[0].codProducto);
            $("#producto").val(datos[0].descripcion);
            $("#precio").val(datos[0].precio);
            $("#cantidad").val(datos[0].cantidad);
            $("#registrar").css('display','none');
            $("#actualizar").css('display','block');
        }
    });
});

function actualizarProducto(){
    var codProducto,descripcion,precio,cantidad;
    codProducto = $("#codigo").val();
    descripcion = $("#producto").val();
    precio = $("#precio").val();
    cantidad = $("#cantidad").val();
    if(codProducto==="" || descripcion==="" || precio==="" || cantidad===""){
        swal("Los campos no pueden estar vacíos");
        return false;
    }
    if(codProducto.length!=4){
        swal("C0digo inválido");
        return false;
    }
    if(isNaN(cantidad)){
        swal("Cantidad inválida");
        return false;
    }
    $.ajax({
        url: "../controlador/cProducto.php",
        type: "POST",
        data: {
            codProducto : codProducto,
            descripcion : descripcion,
            precio : precio,
            cantidad : cantidad,
            accion : 'actualizar'
        },
        success: function(respuesta){
            if(respuesta==1){
                swal({
                    title:" PRODUCTO ACTUALIZADO CON EXITO",
                    text: "Guardando datos...",
                    type: "success",
                    timer: 1000,
                    showConfirmButton: false
                });
                $("#tablaProductos").load("vcargarTablaProducto.php");
                $("#codigo").val("");
                $("#producto").val("");
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
    var codProducto = $(element).attr('codProducto');
    var accion = 'eliminar';
    swal({
        title: "Desea eliminar el producto?",
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
          $.post('../controlador/cProducto.php', {codProducto,accion},(response) => {
            swal("Operacion Realizada!", "Producto eliminado con éxito", "success");
            $("#tablaProductos").load("vcargarTablaProducto.php");
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