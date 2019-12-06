$(document).ready(function(){
    let idproceso = '';
    let edit = false;
    verProceso();
    vertareas();

  function verProceso() {
    idproceso = $('#idproceso').val();
    let accion = "obtenerProceso";
    $.ajax({
      url: '../controlador/proceso.php',
      data: {idproceso,accion},
      type: 'POST',
      success: function(response) {
      console.log(response);
      const proceso = JSON.parse(response);
      let template = '';
          template += ` ${proceso.proceso}`
          $('#titulo').html(template);
      }
    });
  }


  $('#frmTareas').submit(e => {
    e.preventDefault();
    let rup = edit === false ? 'nuevo' : 'modificar';
    const postData = {
      idtarea: $('#idtarea').val(),
      tarea: $('#tarea').val(),
      area: $('#area').val(),
      idproceso: $('#idproceso').val(),
      numero: $('#numero').val(),
      accion: rup
    };
    console.log(postData);
    const url = '../controlador/tarea.php';
    $.post(url, postData, (response) => {
      swal(response);
      $('#frmTareas').trigger('reset');
      vertareas();
      edit=false;
    });
  });

//ver Tareas
function vertareas() {
    idproceso = $('#idproceso').val();
    let accion = "obtenerTareas";
    $.ajax({
      url: '../controlador/tarea.php',
      data: {idproceso,accion},
      type: 'POST',
      success: function(response) {
      const tareas = JSON.parse(response);
      let template = '';
      let cont=0;
        tareas.forEach(tarea => {
          cont=cont+1;
          template += `
                  <tr idtarea="${tarea.idtarea}">
                  <td>${cont}</td>
                  <td><a href="#" class="area-item">${tarea.tarea}</a></td>
                  <td><a href="#" class="area-item">${tarea.area}</a></td>
                  <td>
                    <a class="tarea-ver btn btn-danger btn-xs"  href="../vista/actividades.php?idtarea=${tarea.idtarea}&idproceso=${tarea.idproceso}"><i class="glyphicon glyphicon-eye-close"></i></a>
                    <button type="button" class="tarea-edit btn btn-danger btn-xs" ><i class="fa fa-pencil"></i></button>
                    <button type="button" class="tarea-delete btn btn-danger btn-xs" ><i class="fa fa-trash-o"></i></button>
                  </td>
                  </tr>
                `
        });
        $('#tareas').html(template);
      }
    });
  }

  // Eliminar tarea
  $(document).on('click', '.tarea-delete', function() {
    if(confirm('Are you sure you want to delete it?')) {
      let element = $(this)[0].parentElement.parentElement;
      let idtarea = $(element).attr('idtarea');
      let accion = 'eliminar';
      $.post('../controlador/tarea.php', {idtarea,accion},(response) => {
        swal(response);
        vertareas();
      });
    }
  });

    $(document).on('click', '.tarea-edit', function() {
        let accion = "obtenerTarea";
        let element = $(this)[0].parentElement.parentElement;
        let idtarea = $(element).attr('idtarea');
        $.post('../controlador/tarea.php', {idtarea,accion},(response) => {
          const tarea = JSON.parse(response);
          $('#idtarea').val(tarea.idtarea);
          $('#tarea').val(tarea.tarea);
          $('#area').val(tarea.area);
          edit = true;
        });
    });
});



