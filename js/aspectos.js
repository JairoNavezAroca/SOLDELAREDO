cambiar();

function cambiar(){
    $("#actualizar").css('display','none');
    if($("#mision").val()!=""){
      $("#registrar").css('display','none');
      $("#actualizar").css('display','block');
    }
}

function registrarAspecto(){
    var mision,vision,propuesta,factor,objetivos;
    mision=$("#mision").val();
    vision=$("#vision").val();
    propuesta=$("#valor").val();
    factor=$("#factor").val();
    objetivos=$("#objetivos").val();
    if (mision==""|| vision=="" || /^\s+$/.test(mision) || /^\s+$/.test(vision) || /^\s+$/.test(propuesta) || /^\s+$/.test(factor) || /^\s+$/.test(objetivos))
    {
      swal("Los campos estan vacios");
      return false;
    }
    $.ajax({
      url:"../controlador/cAspectos.php",
      type:"POST",
      data:{
        mision : mision,
        vision : vision,
        valor : propuesta,
        factor :factor,
        objetivos : objetivos,
        accion : 'registrar'
      },
      dataType:"html",
      success:function(respuesta){
        if(respuesta==1){
          swal({
                  title:" DATOS REGISTRADOS CON EXITO",
                  text: "Guardando datos...",
                  type: "success",
                  timer: 5000,
                  showConfirmButton: false
              });
          window.location.href="vVerAspectos.php";
        }
        else if(respuesta==0){
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

function actualizarAspecto(){
    var mision,vision,valor,factor,objetivos;
    mision=$("#mision").val();
    vision=$("#vision").val();
    valor=$("#valor").val();
    factor=$("#factor").val();
    objetivos=$("#objetivos").val();
    if (mision==""|| vision=="" || /^\s+$/.test(mision) || /^\s+$/.test(vision) || /^\s+$/.test(propuesta) || /^\s+$/.test(factor) || /^\s+$/.test(objetivos)) 
    {
      swal("Los campos estan vacios");
      return false;
    }
    $.ajax({
      url:"../controlador/cAspectos.php",
      type:"POST",
      data:{
        mision : mision,
        vision : vision,
        valor : valor,
        factor :factor,
        objetivos : objetivos,
        accion : 'actualizar'
      },
      dataType:"html",
      success:function(respuesta){
        if(respuesta==1){
          swal({
                  title:" DATOS ACTUALIZADOS CON EXITO",
                  text: "Guardando datos...",
                  type: "success",
                  timer: 5000,
                  showConfirmButton: false
              });
          window.location.href="vVerAspectos.php";
        }
        else if(respuesta==0){
          swal("Ocurrio un error"); 
        }
      }
    });
}