verFODA()

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
    var idFodaPrueba=getQueryVariable('idFoda');
    window.location.href="pdf.php?idFoda="+idFodaPrueba;
}

function verFODA(){
    var idFodaPrueba=getQueryVariable('idFoda');
    $("#tablaFoda").load("vcargarTablaFODA.php");
    $("#cargarFortalezas").load("vcargarFortalezas.php?idFoda="+idFodaPrueba);
    $("#cargarDebilidades").load("vcargarDebilidades.php?idFoda="+idFodaPrueba);
    $("#cargarOportunidades").load("vcargarOportunidades.php?idFoda="+idFodaPrueba);
    $("#cargarAmenazas").load("vcargarAmenazas.php?idFoda="+idFodaPrueba);
    $("#estrategiasFO").load("vcargarFO.php?idFoda="+idFodaPrueba);
    $("#estrategiasFA").load("vcargarFA.php?idFoda="+idFodaPrueba);
    $("#estrategiasDO").load("vcargarDO.php?idFoda="+idFodaPrueba);
    $("#estrategiasDA").load("vcargarDA.php?idFoda="+idFodaPrueba);
    $("#matriz").load("vcargarMatrizFoda.php?idFoda="+idFodaPrueba);
}

function registrarFODA(){
    var annio = $("#annio").val();
    if(annio===""){
        swal("Los campos no pueden estar vacíos");
        return false;
    }
    if(isNaN(annio) && annio.length!=4){
        swal("Año invalido");
        return false;
    }
    $.ajax({
        url: "../controlador/cFoda.php",
        type: "POST",
        data: {
            annio : annio,
            accion : 'registrarFoda'
        },
        success: function(respuesta){
            if(respuesta==1){
                swal({
                    title:" FODA REGISTRADO CON EXITO",
                    text: "Guardando datos...",
                    type: "success",
                    timer: 1000,
                    showConfirmButton: false
                });
                $("#tablaFoda").load("vcargarTablaFODA.php");
                $("#annio").val("");
            }
            else{
                swal("Ocurrio un error");
            }
        }
    });
}

$(document).on('click','.agregarElementos', function(){
    const element = $(this)[0].parentElement.parentElement;
    var idFoda = $(element).attr('idFoda');
    window.location.href="vAspectosFoda.php?idFoda="+idFoda;
});

$(document).on('click','.agregarEstrategias', function(){
    const element = $(this)[0].parentElement.parentElement;
    var idFoda = $(element).attr('idFoda');
    window.location.href="vEstrategiasFoda.php?idFoda="+idFoda;
});

$(document).on('click','.detalleFODA', function(){
    const element = $(this)[0].parentElement.parentElement;
    var idFoda = $(element).attr('idFoda');
    window.location.href="vMatrizFoda.php?idFoda="+idFoda;
});

$(document).on('click','.eliminarFODA', function(){
    const element = $(this)[0].parentElement.parentElement;
    var idFoda = $(element).attr('idFoda');
    var accion = 'eliminarFoda';
    swal({
        title: "Desea eliminar el FODA?",
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
          $.post('../controlador/cFoda.php', {idFoda,accion},(response) => {
            swal("Operacion Realizada!", "FODA eliminada con éxito", "success");
            $("#tablaFoda").load("vcargarTablaFODA.php");
          });
        } else {
          swal("Operación Cancelada!");
        }
      });
});

function registrarFort(){
    var idFodaPrueba=getQueryVariable('idFoda');
    var idFoda,fortaleza;
    fortaleza=$("#fortaleza").val();
    idFoda = getQueryVariable('idFoda');
    if(fortaleza===""){
        swal("Los campos no pueden estar vacíos");
        return false;
    }
    $.ajax({
        url: "../controlador/cFoda.php",
        type: "POST",
        data: {
            descripcion : fortaleza,
            idFoda : idFoda,
            accion : 'registrarFortaleza'
        },
        success: function(respuesta){
            if(respuesta==1){
                swal({
                    title:" FORTALEZA REGISTRADA CON EXITO",
                    text: "Guardando datos...",
                    type: "success",
                    timer: 1000,
                    showConfirmButton: false
                });
                $("#cargarFortalezas").load("vcargarFortalezas.php?idFoda="+idFodaPrueba);
                $("#fortaleza").val("");
            }
            else{
                swal("Ocurrio un error");
            }
        }
    });
}

function registrarDeb(){
    var idFodaPrueba=getQueryVariable('idFoda');
    var idFoda,debilidad;
    debilidad=$("#debilidad").val();
    idFoda = getQueryVariable('idFoda');
    if(debilidad===""){
        swal("Los campos no pueden estar vacíos");
        return false;
    }
    $.ajax({
        url: "../controlador/cFoda.php",
        type: "POST",
        data: {
            descripcion : debilidad,
            idFoda : idFoda,
            accion : 'registrarDebilidad'
        },
        success: function(respuesta){
            if(respuesta==1){
                swal({
                    title:" DEBILIDAD REGISTRADA CON EXITO",
                    text: "Guardando datos...",
                    type: "success",
                    timer: 1000,
                    showConfirmButton: false
                });
                $("#cargarDebilidades").load("vcargarDebilidades.php?idFoda="+idFodaPrueba);
                $("#debilidad").val("");
            }
            else{
                swal("Ocurrio un error");
            }
        }
    });
}

function registrarOpor(){
    var idFodaPrueba=getQueryVariable('idFoda');
    var idFoda,oportunidad;
    oportunidad=$("#oportunidad").val();
    idFoda = getQueryVariable('idFoda');
    if(oportunidad===""){
        swal("Los campos no pueden estar vacíos");
        return false;
    }
    $.ajax({
        url: "../controlador/cFoda.php",
        type: "POST",
        data: {
            descripcion : oportunidad,
            idFoda : idFoda,
            accion : 'registrarOportunidad'
        },
        success: function(respuesta){
            if(respuesta==1){
                swal({
                    title:" OPORTUNIDAD REGISTRADA CON EXITO",
                    text: "Guardando datos...",
                    type: "success",
                    timer: 1000,
                    showConfirmButton: false
                });
                $("#cargarOportunidades").load("vcargarOportunidades.php?idFoda="+idFodaPrueba);
                $("#oportunidad").val("");
            }
            else{
                swal("Ocurrio un error");
            }
        }
    });
}

function registrarAmen(){
    var idFodaPrueba=getQueryVariable('idFoda');
    var idFoda,amenaza;
    amenaza=$("#amenaza").val();
    idFoda = getQueryVariable('idFoda');
    if(amenaza===""){
        swal("Los campos no pueden estar vacíos");
        return false;
    }
    $.ajax({
        url: "../controlador/cFoda.php",
        type: "POST",
        data: {
            descripcion : amenaza,
            idFoda : idFoda,
            accion : 'registrarAmenaza'
        },
        success: function(respuesta){
            if(respuesta==1){
                swal({
                    title:" AMENAZA REGISTRADA CON EXITO",
                    text: "Guardando datos...",
                    type: "success",
                    timer: 1000,
                    showConfirmButton: false
                });
                $("#cargarAmenazas").load("vcargarAmenazas.php?idFoda="+idFodaPrueba);
                $("#amenaza").val("");
            }
            else{
                swal("Ocurrio un error");
            }
        }
    });
}

$(document).on('click','.editarFortaleza', function(){
    const element = $(this)[0].parentElement.parentElement;
    var idFortaleza = $(element).attr('idFortaleza');
    $("#tablaFortaleza").val(idFortaleza);
    $.ajax({
        url: "../controlador/cFoda.php",
        type: "POST",
        data: {
            idFortaleza : idFortaleza,
            accion : 'seleccionarFortaleza'
        },
        success: function(respuesta){
            var datos = JSON.parse(respuesta);
            $("#fortaleza").val(datos[0].descripcion);
            $("#registrarFortaleza").css('display','none');
            $("#actualizarFortaleza").css('display','block');
        }
    });
});

$(document).on('click','.editarDebilidad', function(){
    const element = $(this)[0].parentElement.parentElement;
    var idDebilidad = $(element).attr('idDebilidad');
    $("#tablaDebilidad").val(idDebilidad);
    $.ajax({
        url: "../controlador/cFoda.php",
        type: "POST",
        data: {
            idDebilidad : idDebilidad,
            accion : 'seleccionarDebilidad'
        },
        success: function(respuesta){
            var datos = JSON.parse(respuesta);
            $("#debilidad").val(datos[0].descripcion);
            $("#registrarDebilidad").css('display','none');
            $("#actualizarDebilidad").css('display','block');
        }
    });
});

$(document).on('click','.editarOportunidad', function(){
    const element = $(this)[0].parentElement.parentElement;
    var idOportunidad = $(element).attr('idOportunidad');
    $("#tablaOportunidad").val(idOportunidad);
    $.ajax({
        url: "../controlador/cFoda.php",
        type: "POST",
        data: {
            idOportunidad : idOportunidad,
            accion : 'seleccionarOportunidad'
        },
        success: function(respuesta){
            var datos = JSON.parse(respuesta);
            $("#oportunidad").val(datos[0].descripcion);
            $("#registrarOportunidad").css('display','none');
            $("#actualizarOportunidad").css('display','block');
        }
    });
});

$(document).on('click','.editarAmenaza', function(){
    const element = $(this)[0].parentElement.parentElement;
    var idAmenaza = $(element).attr('idAmenaza');
    $("#tablaAmenaza").val(idAmenaza);
    $.ajax({
        url: "../controlador/cFoda.php",
        type: "POST",
        data: {
            idAmenaza : idAmenaza,
            accion : 'seleccionarAmenaza'
        },
        success: function(respuesta){
            var datos = JSON.parse(respuesta);
            $("#amenaza").val(datos[0].descripcion);
            $("#registrarAmenaza").css('display','none');
            $("#actualizarAmenaza").css('display','block');
        }
    });
});

function actualizarFort(){
    var idFodaPrueba=getQueryVariable('idFoda');
    var idFortaleza,fortaleza;
    fortaleza=$("#fortaleza").val();
    idFortaleza = $("#tablaFortaleza").val();
    if(fortaleza===""){
        swal("Los campos no pueden estar vacíos");
        return false;
    }
    $.ajax({
        url: "../controlador/cFoda.php",
        type: "POST",
        data: {
            descripcion : fortaleza,
            idFortaleza : idFortaleza,
            accion : 'actualizarFortaleza'
        },
        success: function(respuesta){
            if(respuesta==1){
                swal({
                    title:" FORTALEZA ACTUALIZADA CON EXITO",
                    text: "Guardando datos...",
                    type: "success",
                    timer: 1000,
                    showConfirmButton: false
                });
                $("#cargarFortalezas").load("vcargarFortalezas.php?idFoda="+idFodaPrueba);
                $("#fortaleza").val("");
            }
            else{
                swal("Ocurrio un error");
            }
        }
    });
}

function actualizarDeb(){
    var idFodaPrueba=getQueryVariable('idFoda');
    var idDebilidad,debilidad;
    debilidad=$("#debilidad").val();
    idDebilidad = $("#tablaDebilidad").val();
    if(debilidad===""){
        swal("Los campos no pueden estar vacíos");
        return false;
    }
    $.ajax({
        url: "../controlador/cFoda.php",
        type: "POST",
        data: {
            descripcion : debilidad,
            idDebilidad : idDebilidad,
            accion : 'actualizarDebilidad'
        },
        success: function(respuesta){
            if(respuesta==1){
                swal({
                    title:" DEBILIDAD ACTUALIZADA CON EXITO",
                    text: "Guardando datos...",
                    type: "success",
                    timer: 1000,
                    showConfirmButton: false
                });
                $("#cargarDebilidades").load("vcargarDebilidades.php?idFoda="+idFodaPrueba);
                $("#debilidad").val("");
            }
            else{
                swal("Ocurrio un error");
            }
        }
    });
}

function actualizarOpor(){
    var idFodaPrueba=getQueryVariable('idFoda');
    var idOportunidad,oportunidad;
    oportunidad=$("#oportunidad").val();
    idOportunidad = $("#tablaOportunidad").val();
    if(oportunidad===""){
        swal("Los campos no pueden estar vacíos");
        return false;
    }
    $.ajax({
        url: "../controlador/cFoda.php",
        type: "POST",
        data: {
            descripcion : oportunidad,
            idOportunidad : idOportunidad,
            accion : 'actualizarOportunidad'
        },
        success: function(respuesta){
            if(respuesta==1){
                swal({
                    title:" OPORTUNIDAD ACTUALIZADA CON EXITO",
                    text: "Guardando datos...",
                    type: "success",
                    timer: 1000,
                    showConfirmButton: false
                });
                $("#cargarOportunidades").load("vcargarOportunidades.php?idFoda="+idFodaPrueba);
                $("#oportunidad").val("");
            }
            else{
                swal("Ocurrio un error");
            }
        }
    });
}

function actualizarAmen(){
    var idFodaPrueba=getQueryVariable('idFoda');
    var idAmenaza,amenaza;
    amenaza=$("#amenaza").val();
    idAmenaza = $("#tablaAmenaza").val();
    if(amenaza===""){
        swal("Los campos no pueden estar vacíos");
        return false;
    }
    $.ajax({
        url: "../controlador/cFoda.php",
        type: "POST",
        data: {
            descripcion : amenaza,
            idAmenaza : idAmenaza,
            accion : 'actualizarAmenaza'
        },
        success: function(respuesta){
            if(respuesta==1){
                swal({
                    title:" AMENAZA ACTUALIZADA CON EXITO",
                    text: "Guardando datos...",
                    type: "success",
                    timer: 1000,
                    showConfirmButton: false
                });
                $("#cargarAmenazas").load("vcargarAmenazas.php?idFoda="+idFodaPrueba);
                $("#amenaza").val("");
            }
            else{
                swal("Ocurrio un error");
            }
        }
    });
}

$(document).on('click','.eliminarFortaleza', function(){
    var idFodaPrueba=getQueryVariable('idFoda');
    const element = $(this)[0].parentElement.parentElement;
    var idFortaleza = $(element).attr('idFortaleza');
    var accion = 'eliminarFortaleza';
    swal({
        title: "Desea eliminar la fortaleza?",
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
          $.post('../controlador/cFoda.php', {idFortaleza,accion},(response) => {
            swal("Operacion Realizada!", "Fortaleza eliminada con éxito", "success");
            $("#cargarFortalezas").load("vcargarFortalezas.php?idFoda="+idFodaPrueba);
          });
        } else {
          swal("Operación Cancelada!");
        }
      });
});

$(document).on('click','.eliminarDebilidad', function(){
    var idFodaPrueba=getQueryVariable('idFoda');
    const element = $(this)[0].parentElement.parentElement;
    var idDebilidad = $(element).attr('idDebilidad');
    var accion = 'eliminarDebilidad';
    swal({
        title: "Desea eliminar la debilidad?",
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
          $.post('../controlador/cFoda.php', {idDebilidad,accion},(response) => {
            swal("Operacion Realizada!", "Debilidad eliminada con éxito", "success");
            $("#cargarDebilidades").load("vcargarDebilidades.php?idFoda="+idFodaPrueba);
          });
        } else {
          swal("Operación Cancelada!");
        }
      });
});

$(document).on('click','.eliminarOportunidad', function(){
    var idFodaPrueba=getQueryVariable('idFoda');
    const element = $(this)[0].parentElement.parentElement;
    var idOportunidad = $(element).attr('idOportunidad');
    var accion = 'eliminarOportunidad';
    swal({
        title: "Desea eliminar la oportunidad?",
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
          $.post('../controlador/cFoda.php', {idOportunidad,accion},(response) => {
            swal("Operacion Realizada!", "Oportunidad eliminada con éxito", "success");
            $("#cargarOportunidades").load("vcargarOportunidades.php?idFoda="+idFodaPrueba);
          });
        } else {
          swal("Operación Cancelada!");
        }
      });
});

$(document).on('click','.eliminarAmenaza', function(){
    var idFodaPrueba=getQueryVariable('idFoda');
    const element = $(this)[0].parentElement.parentElement;
    var idAmenaza = $(element).attr('idAmenaza');
    var accion = 'eliminarAmenaza';
    swal({
        title: "Desea eliminar la amenaza?",
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
          $.post('../controlador/cFoda.php', {idAmenaza,accion},(response) => {
            swal("Operacion Realizada!", "Amenaza eliminada con éxito", "success");
            $("#cargarAmenazas").load("vcargarAmenazas.php?idFoda="+idFodaPrueba);
          });
        } else {
          swal("Operación Cancelada!");
        }
      });
});

function registrarEFO(){
    var idFodaPrueba=getQueryVariable('idFoda');
    var eFO = $("#efo").val();
    var idFoda = getQueryVariable('idFoda');
    var fortalezas = [];
    var oportunidades = [];
    var i=0;
    var j=0;
    $("#checkFortaleza:checked").each(function(){
      fortalezas[i]= $(this).val();
      i++;
    });
    if(fortalezas.length==0){
      swal("Debe relacionar fortalezas");
      return false;
    }
    $("#checkOportunidad:checked").each(function(){
      oportunidades[j]= $(this).val();
      j++;
    });
    if(oportunidades.length==0){
      swal("Debe relacionar oportunidades");
      return false;
    }
    $.ajax({
        data : {
          descripcion : eFO,
          fortalezas : fortalezas,
          oportunidades : oportunidades,
          idFoda : idFoda,
          accion : 'registrarEstrategiaFO'
        },
        url : '../controlador/cFoda.php',
        type : "POST",
        success : function(r){
          if (r==1) {
            swal({
                title:" ESTRATEGIA FO REGISTRADA CON EXITO",
                text: "Guardando datos...",
                type: "success",
                timer: 1000,
                showConfirmButton: false
            });
            $("#estrategiasFO").load("vcargarFO.php?idFoda="+idFodaPrueba);
          }
        }
    });
}

function registrarEFA(){
    var idFodaPrueba=getQueryVariable('idFoda');
    var eFA = $("#eFA").val();
    var idFoda = getQueryVariable('idFoda');
    var fortalezas = [];
    var amenazas = [];
    var i=0;
    var j=0;
    $("#checkFortaleza1:checked").each(function(){
      fortalezas[i]= $(this).val();
      i++;
    });
    if(fortalezas.length==0){
      swal("Debe relacionar fortalezas");
      return false;
    }
    $("#checkAmenaza:checked").each(function(){
        amenazas[j]= $(this).val();
      j++;
    });
    if(amenazas.length==0){
      swal("Debe relacionar amenazas");
      return false;
    }
    $.ajax({
        data : {
          descripcion : eFA,
          fortalezas : fortalezas,
          amenazas : amenazas,
          idFoda : idFoda,
          accion : 'registrarEstrategiaFA'
        },
        url : '../controlador/cFoda.php',
        type : "POST",
        success : function(r){
          if (r==1) {
            swal({
                title:" ESTRATEGIA FA REGISTRADA CON EXITO",
                text: "Guardando datos...",
                type: "success",
                timer: 1000,
                showConfirmButton: false
            });
            $("#estrategiasFA").load("vcargarFA.php?idFoda="+idFodaPrueba);
          }
        }
    });
}

function registrarEDO(){
    var idFodaPrueba=getQueryVariable('idFoda');
    var eDO = $("#eDO").val();
    var idFoda = getQueryVariable('idFoda');
    var debilidades = [];
    var oportunidades = [];
    var i=0;
    var j=0;
    $("#checkDebilidad:checked").each(function(){
        debilidades[i]= $(this).val();
      i++;
    });
    if(debilidades.length==0){
      swal("Debe relacionar debilidades");
      return false;
    }
    $("#checkOportunidad1:checked").each(function(){
        oportunidades[j]= $(this).val();
      j++;
    });
    if(oportunidades.length==0){
      swal("Debe relacionar oportunidades");
      return false;
    }
    $.ajax({
        data : {
          descripcion : eDO,
          debilidades : debilidades,
          oportunidades : oportunidades,
          idFoda : idFoda,
          accion : 'registrarEstrategiaDO'
        },
        url : '../controlador/cFoda.php',
        type : "POST",
        success : function(r){
          if (r==1) {
            swal({
                title:" ESTRATEGIA DO REGISTRADA CON EXITO",
                text: "Guardando datos...",
                type: "success",
                timer: 1000,
                showConDirmButton: false
            });
            $("#estrategiasDO").load("vcargarDO.php?idFoda="+idFodaPrueba);
          }
        }
    });
}

function registrarEDA(){
    var idFodaPrueba=getQueryVariable('idFoda');
    var eDA = $("#eDA").val();
    var idFoda = getQueryVariable('idFoda');
    var debilidades = [];
    var amenazas = [];
    var i=0;
    var j=0;
    $("#checkDebilidad1:checked").each(function(){
        debilidades[i]= $(this).val();
      i++;
    });
    if(debilidades.length==0){
      swal("Debe relacionar debilidades");
      return false;
    }
    $("#checkAmenaza1:checked").each(function(){
        amenazas[j]= $(this).val();
      j++;
    });
    if(amenazas.length==0){
      swal("Debe relacionar amenazas");
      return false;
    }
    $.ajax({
        data : {
          descripcion : eDA,
          debilidades : debilidades,
          amenazas : amenazas,
          idFoda : idFoda,
          accion : 'registrarEstrategiaDA'
        },
        url : '../controlador/cFoda.php',
        type : "POST",
        success : function(r){
          if (r==1) {
            swal({
                title:" ESTRATEGIA DA REGISTRADA CON EXITO",
                text: "Guardando datos...",
                type: "success",
                timer: 1000,
                showConDirmButton: false
            });
            $("#estrategiasDA").load("vcargarDA.php?idFoda="+idFodaPrueba);
          }
        }
    });
}
  
$(document).on('click','.editarFO', function(){
    const element = $(this)[0].parentElement.parentElement;
    var idEstrategiaFO = $(element).attr('idEstrategiaFO');
    $("#idEfo").val(idEstrategiaFO);
    $.ajax({
        url: "../controlador/cFoda.php",
        type: "POST",
        data: {
            idEstrategiaFO : idEstrategiaFO,
            accion : 'seleccionarEstrategiaFO'
        },
        success: function(respuesta){
            var datos = JSON.parse(respuesta);
            $("#efo").val(datos[0].descripcion);
            $("#registrarFO").css('display','none');
            $("#actualizarFO").css('display','block');
            $("#tF").css('display','none');
            $("#tO").css('display','none');

        }
    });
});

$(document).on('click','.editarFA', function(){
    const element = $(this)[0].parentElement.parentElement;
    var idEstrategiaFA = $(element).attr('idEstrategiaFA');
    $("#idEfa").val(idEstrategiaFA);
    $.ajax({
        url: "../controlador/cFoda.php",
        type: "POST",
        data: {
            idEstrategiaFA : idEstrategiaFA,
            accion : 'seleccionarEstrategiaFA'
        },
        success: function(respuesta){
            var datos = JSON.parse(respuesta);
            $("#eFA").val(datos[0].descripcion);
            $("#registrarFA").css('display','none');
            $("#actualizarFA").css('display','block');
            $("#tF1").css('display','none');
            $("#tA").css('display','none');

        }
    });
});

$(document).on('click','.editarDO', function(){
    const element = $(this)[0].parentElement.parentElement;
    var idEstrategiaDO = $(element).attr('idEstrategiaDO');
    $("#idEdo").val(idEstrategiaDO);
    $.ajax({
        url: "../controlador/cFoda.php",
        type: "POST",
        data: {
            idEstrategiaDO : idEstrategiaDO,
            accion : 'seleccionarEstrategiaDO'
        },
        success: function(respuesta){
            var datos = JSON.parse(respuesta);
            $("#eDO").val(datos[0].descripcion);
            $("#registrarDO").css('display','none');
            $("#actualizarDO").css('display','block');
            $("#tD").css('display','none');
            $("#tO1").css('display','none');

        }
    });
});

$(document).on('click','.editarDA', function(){
    const element = $(this)[0].parentElement.parentElement;
    var idEstrategiaDA = $(element).attr('idEstrategiaDA');
    $("#idEda").val(idEstrategiaDA);
    $.ajax({
        url: "../controlador/cFoda.php",
        type: "POST",
        data: {
            idEstrategiaDA : idEstrategiaDA,
            accion : 'seleccionarEstrategiaDA'
        },
        success: function(respuesta){
            var datos = JSON.parse(respuesta);
            $("#eDA").val(datos[0].descripcion);
            $("#registrarDA").css('display','none');
            $("#actualizarDA").css('display','block');
            $("#tD1").css('display','none');
            $("#tA1").css('display','none');

        }
    });
});

function actualizarEFO(){
    var idFodaPrueba=getQueryVariable('idFoda');
    var eFO,idEstrategiaFO;
    eFO=$("#efo").val();
    idEstrategiaFO = $("#idEfo").val();
    if(eFO===""){
        swal("Los campos no pueden estar vacíos");
        return false;
    }
    $.ajax({
        url: "../controlador/cFoda.php",
        type: "POST",
        data: {
            descripcion : eFO,
            idEstrategiaFO : idEstrategiaFO,
            accion : 'actualizarEstrategiaFO'
        },
        success: function(respuesta){
            if(respuesta==1){
                swal({
                    title:" ESTRATEGIA FO ACTUALIZADA CON EXITO",
                    text: "Guardando datos...",
                    type: "success",
                    timer: 1000,
                    showConfirmButton: false
                });
                $("#estrategiasFO").load("vcargarFO.php?idFoda="+idFodaPrueba);
                $("#efo").val("");
                $("#actualizarFO").css('display','none');
                $("#registrarFO").css('display','block');
                $("#tF").css('display','block');
                $("#tO").css('display','block');
            }
            else{
                swal("Ocurrio un error");
            }
        }
    });
}

function actualizarEFA(){
    var idFodaPrueba=getQueryVariable('idFoda');
    var eFA,idEstrategiaFA;
    eFA=$("#eFA").val();
    idEstrategiaFA = $("#idEfa").val();
    if(eFA===""){
        swal("Los campos no pueden estar vacíos");
        return false;
    }
    $.ajax({
        url: "../controlador/cFoda.php",
        type: "POST",
        data: {
            descripcion : eFA,
            idEstrategiaFA : idEstrategiaFA,
            accion : 'actualizarEstrategiaFA'
        },
        success: function(respuesta){
            if(respuesta==1){
                swal({
                    title:"ESTRATEGIA FA ACTUALIZADA CON EXITO",
                    text: "Guardando datos...",
                    type: "success",
                    timer: 1000,
                    showConfirmButton: false
                });
                $("#estrategiasFA").load("vcargarFA.php?idFoda="+idFodaPrueba);
                $("#eFA").val("");
                $("#actualizarFA").css('display','none');
                $("#registrarFA").css('display','block');
                $("#tF1").css('display','block');
                $("#tA").css('display','block');
            }
            else{
                swal("Ocurrio un error");
            }
        }
    });
}

function actualizarEDO(){
    var idFodaPrueba=getQueryVariable('idFoda');
    var eDO,idEstrategiaDO;
    eDO=$("#eDO").val();
    idEstrategiaDO = $("#idEdo").val();
    if(eDO===""){
        swal("Los campos no pueden estar vacíos");
        return false;
    }
    $.ajax({
        url: "../controlador/cFoda.php",
        type: "POST",
        data: {
            descripcion : eDO,
            idEstrategiaDO : idEstrategiaDO,
            accion : 'actualizarEstrategiaDO'
        },
        success: function(respuesta){
            if(respuesta==1){
                swal({
                    title:"ESTRATEGIA DO ACTUALIZADA CON EXITO",
                    text: "Guardando datos...",
                    type: "success",
                    timer: 1000,
                    showConfirmButton: false
                });
                $("#estrategiasDO").load("vcargarDO.php?idFoda="+idFodaPrueba);
                $("#eDO").val("");
                $("#actualizarDO").css('display','none');
                $("#registrarDO").css('display','block');
                $("#tD").css('display','block');
                $("#tO1").css('display','block');
            }
            else{
                swal("Ocurrio un error");
            }
        }
    });
}

function actualizarEDA(){
    var idFodaPrueba=getQueryVariable('idFoda');
    var eDA,idEstrategiaDA;
    eDA=$("#eDA").val();
    idEstrategiaDA = $("#idEda").val();
    if(eDA===""){
        swal("Los campos no pueden estar vacíos");
        return false;
    }
    $.ajax({
        url: "../controlador/cFoda.php",
        type: "POST",
        data: {
            descripcion : eDA,
            idEstrategiaDA : idEstrategiaDA,
            accion : 'actualizarEstrategiaDA'
        },
        success: function(respuesta){
            if(respuesta==1){
                swal({
                    title:"ESTRATEGIA DA ACTUALIZADA CON EXITO",
                    text: "Guardando datos...",
                    type: "success",
                    timer: 1000,
                    showConfirmButton: false
                });
                $("#estrategiasDA").load("vcargarDA.php?idFoda="+idFodaPrueba);
                $("#eDA").val("");
                $("#actualizarDA").css('display','none');
                $("#registrarDA").css('display','block');
                $("#tD1").css('display','block');
                $("#tA1").css('display','block');
            }
            else{
                swal("Ocurrio un error");
            }
        }
    });
}

$(document).on('click','.eliminarFO', function(){
    var idFodaPrueba=getQueryVariable('idFoda');
    const element = $(this)[0].parentElement.parentElement;
    var idEstrategiaFO = $(element).attr('idEstrategiaFO');
    var accion = 'eliminarEstrategiaFO';
    swal({
        title: "Desea eliminar la estrategia FO?",
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
          $.post('../controlador/cFoda.php', {idEstrategiaFO,accion},(response) => {
            swal("Operacion Realizada!", "Estrategia FO eliminada con éxito", "success");
            $("#estrategiasFO").load("vcargarFO.php?idFoda="+idFodaPrueba);
          });
        } else {
          swal("Operación Cancelada!");
        }
      });
});

$(document).on('click','.eliminarFA', function(){
    var idFodaPrueba=getQueryVariable('idFoda');
    const element = $(this)[0].parentElement.parentElement;
    var idEstrategiaFA = $(element).attr('idEstrategiaFA');
    var accion = 'eliminarEstrategiaFA';
    swal({
        title: "Desea eliminar la estrategia FA?",
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
          $.post('../controlador/cFoda.php', {idEstrategiaFA,accion},(response) => {
            swal("Operacion Realizada!", "Estrategia FA eliminada con éxito", "success");
            $("#estrategiasFA").load("vcargarFA.php?idFoda="+idFodaPrueba);
          });
        } else {
          swal("Operación Cancelada!");
        }
      });
});

$(document).on('click','.eliminarDO', function(){
    var idFodaPrueba=getQueryVariable('idFoda');
    const element = $(this)[0].parentElement.parentElement;
    var idEstrategiaDO = $(element).attr('idEstrategiaDO');
    var accion = 'eliminarEstrategiaDO';
    swal({
        title: "Desea eliminar la estrategia DO?",
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
          $.post('../controlador/cFoda.php', {idEstrategiaDO,accion},(response) => {
            swal("Operacion Realizada!", "Estrategia DO eliminada con éxito", "success");
            $("#estrategiasDO").load("vcargarDO.php?idFoda="+idFodaPrueba);
          });
        } else {
          swal("Operación Cancelada!");
        }
      });
});

$(document).on('click','.eliminarDA', function(){
    var idFodaPrueba=getQueryVariable('idFoda');
    const element = $(this)[0].parentElement.parentElement;
    var idEstrategiaDA = $(element).attr('idEstrategiaDA');
    var accion = 'eliminarEstrategiaDA';
    swal({
        title: "Desea eliminar la estrategia DA?",
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
          $.post('../controlador/cFoda.php', {idEstrategiaDA,accion},(response) => {
            swal("Operacion Realizada!", "Estrategia DA eliminada con éxito", "success");
            $("#estrategiasDA").load("vcargarDA.php?idFoda="+idFodaPrueba);
          });
        } else {
          swal("Operación Cancelada!");
        }
      });
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