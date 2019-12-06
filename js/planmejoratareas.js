$(document).ready(function(){
    let edit = false;
    selectprocesos();
    fecha();
    mejoras();

    function fecha(){
      var actual;
      n =  new Date();
      y = n.getFullYear();
      m = n.getMonth() + 1;
      d = n.getDate();
      document.getElementById("fecha").value = y + "/" + m + "/" + d;
    } 

    function selectprocesos() {
      let accion = "obtenerProcesos";
      $.ajax({
        url: '../controlador/proceso.php',
        data: {accion},
        type: 'POST',
        success: function(response) {
        const procesos = JSON.parse(response);
        let template2='';
        template2 = `<option disabled="" selected="" value='-1'>Seleccione procesos</option>`;
        let template1 = '';
          procesos.forEach(proceso => {
            template1 += `<option value="${proceso.idproceso}">${proceso.proceso}</option>`
          });
          let template='';
          template +=template2+template1;
          $('#tipo').html(template);
        }
      });
    }

    function selecttareas() {
      let idproceso= $('#seleccionado').val();
      let accion = "obtenerTareas";
      $.ajax({
        url: '../controlador/tarea.php',
        data: {accion,idproceso},
        type: 'POST',
        success: function(response) {
        const tareas = JSON.parse(response);
        let template2='';
        template2 = `<option disabled="" selected="" value='-1'>Seleccione tarea</option>`;
        let template1 = '';
          tareas.forEach(tarea => {
            template1 += `<option value="${tarea.idtarea}">${tarea.tarea}</option>`
          });
          let template='';
          template +=template2+template1;
          $('#selectTarea').html(template);
        }
      });
    }

     function mejoras() {
      let idproceso= $('#seleccionado').val();
      let accion = "obtenerMejoras";
      $.ajax({
        url: '../controlador/planmejoratareas.php',
        data: {accion,idproceso},
        type: 'POST',
        success: function(response) {
        const mejoras = JSON.parse(response);
        let template = '';
          mejoras.forEach(mejora => {
            template += `<ul class="list-unstyled timeline">
                          <li>
                            <div class="block" idmejora="${mejora.idmejora}">
                              <div class="tags"> 
                                <a href=""><span >${mejora.tarea}</span></a>
                              </div>
                              <div class="block_content">
                                <h2 class="title">
                                                <a>${mejora.diagnostico}</a>
                                            </h2>
                                <div class="byline">
                                <span>${mejora.fecha}</span>
                                </div>
                                <p class="excerpt">Causa: ${mejora.causa} 
                                <p class="excerpt">Recomendacion: ${mejora.recomendacion}
                                </p>
                              </div>
                              <div>
                                <button type="button" class="mejora-edit btn btn-dark btn-xs" ><i class="fa fa-pencil"></i></button>
                                <button type="button" class="mejora-delete btn btn-dark btn-xs" ><i class="fa fa-trash-o"></i></button>
                              </div>
                            </div>
                          </li>
                        </ul>`
          });     
          $('#mejora').html(template);
        }
      });
    }

    function selectproceso() {
    let accion = "obtenerProceso";
    let idproceso = $('#seleccionado').val();
    $.ajax({
      url: '../controlador/proceso.php',
      data: {accion,idproceso},
      type: 'POST',
      success: function(response) {
      const procesos = JSON.parse(response);
      let template = '';
          template += `${procesos.proceso}`
        $('#proceso').html(template);
      }
    });
  }



    $(document).on('change', '#tipo', function(event) {
      if($(this)[0].selectedIndex==0)
        {
          $(this).prop('required',true);
        }
        else
        {
          $(this).prop('required',false);       
        let idseleccionado = $(this).val();
          $('#seleccionado').val(idseleccionado);
          selecttareas();
          mejoras();
        }
   });

     $(document).on('change', '#selectTarea', function(event) {
      if($(this)[0].selectedIndex==0)
        {
          $(this).prop('required',true);
        }
        else
        {
          $(this).prop('required',false);       
          let idseleccionado = $(this).val();
          $('#idtarea').val(idseleccionado);
        }
   });


    $('#frmPlan').submit(e => {
        e.preventDefault();
        let rup = edit === false ? 'nuevo' : 'modificar';
        const postData = {
          fecha: $('#fecha').val(),
          diagnostico: $('#diagnostico').val(),
          causa: $('#causa').val(),
          recomendacion: $('#recomendacion').val(),
          idmejora: $('#idmejora').val(),
          idtarea: $('#idtarea').val(),
          idproceso: $('#seleccionado').val(),
          accion: rup
        };
        const url = '../controlador/planmejoratareas.php';
        $.post(url, postData, (response) => {
          swal(response);
          $('#frmPlan').trigger('reset');
          mejoras();
          fecha();
          edit = false;
        });
    });


    // Delete mejora
    $(document).on('click', '.mejora-delete', function() {
      if(confirm('Are you sure you want to delete it?')) {
        let element = $(this)[0].parentElement.parentElement;
        let idmejora = $(element).attr('idmejora');
        let accion = 'eliminar';
        $.post('../controlador/planmejoratareas.php', {idmejora,accion},(response) => {
          swal(response);
          mejoras();
        });
      }
    });

      // Edit mejora
    $(document).on('click', '.mejora-edit', function() {
        let accion = "obtenerMejora";
        let element = $(this)[0].parentElement.parentElement;
        let idmejora = $(element).attr('idmejora');
        $.post('../controlador/planmejoratareas.php', {idmejora,accion},(response) => {
          const mejora = JSON.parse(response);
          $('#idmejora').val(mejora.idmejora);
          $('#fecha').val(mejora.fecha);
          $('#idtarea').val(mejora.idtarea);
          $('#edittarea').val(mejora.tarea);
          $('#diagnostico').val(mejora.diagnostico);
          $('#causa').val(mejora.causa);
          $('#recomendacion').val(mejora.recomendacion);
          edit = true;
        });
    });

});