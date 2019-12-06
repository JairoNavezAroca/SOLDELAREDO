$(document).ready(function(){
    let idproceso = '';
    let edit = false;
    verTarea();
    verActividad();

  function verTarea() {
    idtarea = $('#idtarea').val();
    let accion = "obtenerTarea";
    $.ajax({
      url: '../controlador/tarea.php',
      data: {idtarea,accion},
      type: 'POST',
      success: function(response) {
      const tarea = JSON.parse(response);
      let template = '';
          template += ` ${tarea.tarea}`
          $('#titulo').html(template);
      }
    });
  }

  $('#frmActividad').submit(e => {
    e.preventDefault();
    let rup = edit === false ? 'nuevo' : 'modificar';
    const postData = {
      idproceso: $('#idproceso').val(),
      idtarea: $('#idtarea').val(),
      idactividad: $('#idactividad').val(),
      actividad: $('#actividad').val(),
      accion: rup
    }; 
    const url = '../controlador/actividad.php';
    $.post(url, postData, (response) => {
      swal(response);
      $('#frmActividad').trigger('reset');
      verActividad();
      edit=false;
    });
  });


//ver Actividad
function verActividad() {
    idtarea = $('#idtarea').val();
    let accion = "obtenerActividades";
    $.ajax({
      url: '../controlador/actividad.php',
      data: {idtarea,accion},
      type: 'POST',
      success: function(response) {
        console.log(response);
      const actividades = JSON.parse(response);
      let template = '';
        actividades.forEach(actividad => {
          template += `
                  <tr idactividad="${actividad.idactividad}">
                  <td><a href="#" class="area-item">${actividad.actividad}</a></td>
                  <td>
                    <a class="actividad-ver btn btn-danger btn-xs"  href="../vista/resumen.php"><i class="glyphicon glyphicon-eye-close"></i></a>
                    <button type="button" class="actividad-edit btn btn-danger btn-xs" ><i class="fa fa-pencil"></i></button>
                    <button type="button" class="actividad-delete btn btn-danger btn-xs" ><i class="fa fa-trash-o"></i></button>
                  </td>
                  </tr>
                `
        });
        $('#actividades').html(template);
      }
    });
  }

  // Eliminar tarea
  $(document).on('click', '.actividad-delete', function() {
    if(confirm('Are you sure you want to delete it?')) {
      let element = $(this)[0].parentElement.parentElement;
      let idactividad = $(element).attr('idactividad');
      let accion = 'eliminar';
      $.post('../controlador/actividad.php', {idactividad,accion},(response) => {
        swal(response);
        verActividad();
      });
    }
  });

    $(document).on('click', '.actividad-edit', function() {
        let accion = "obtenerActividad";
        let element = $(this)[0].parentElement.parentElement;
        let idactividad = $(element).attr('idactividad');
        $.post('../controlador/actividad.php', {idactividad,accion},(response) => {
          const actividad = JSON.parse(response);
          $('#idactividad').val(actividad.idactividad);
          $('#actividad').val(actividad.actividad);
          $('#idtarea').val(actividad.idtarea);
          edit = true;
        });
    });
});
