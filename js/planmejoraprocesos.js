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

     function mejoras() {
      let accion = "obtenerMejoras";
      $.ajax({
        url: '../controlador/planmejoraprocesos.php',
        data: {accion},
        type: 'POST',
        success: function(response) {
          console.log(response);
        const mejoras = JSON.parse(response);
        let template = '';
          mejoras.forEach(mejora => {
            template += `<ul class="list-unstyled timeline">
                          <li>
                            <div class="block" idmejora="${mejora.idmejora}">
                              <div class="tags"> 
                                <a href=""><span >${mejora.proceso}</span></a>
                              </div>
                              <div class="block_content">
                                <h2 class="title">
                                                <a>${mejora.diagnostico}</a>
                                            </h2>
                                <div class="byline">
                                <span>${mejora.fecha}</span>
                                </div>
                                <p class="excerpt">Recomendacion: ${mejora.recomendacion}
                                </p>
                              </div>
                              <div>
                                <a class="mejora-ver btn btn-dark btn-xs"  href="../vista/orden.php?idmejora=${mejora.idmejora}&idproceso=${mejora.idproceso}"><i class="glyphicon glyphicon-eye-close"></i></a>
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
          mejoras();
        }
   });


    $('#frmPlanprocesos').submit(e => {
        e.preventDefault();
        let rup = edit === false ? 'nuevo' : 'modificar';
        const postData = {
          fecha: $('#fecha').val(),
          diagnostico: $('#diagnostico').val(),
          recomendacion: $('#recomendacion').val(),
          idmejora: $('#idmejora').val(),
          idproceso: $('#seleccionado').val(),
          accion: rup
        };
        const url = '../controlador/planmejoraprocesos.php';
        $.post(url, postData, (response) => {
          alert(response);
          $('#frmPlanprocesos').trigger('reset');
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
        $.post('../controlador/planmejoraprocesos.php', {idmejora,accion},(response) => {
          alert(response);
          mejoras();
        });
      }
    });

      // Edit mejora
    $(document).on('click', '.mejora-edit', function() {
        let accion = "obtenerMejora";
        let element = $(this)[0].parentElement.parentElement;
        let idmejora = $(element).attr('idmejora');
        $.post('../controlador/planmejoraprocesos.php', {idmejora,accion},(response) => {
          const mejora = JSON.parse(response);
          $('#idmejora').val(mejora.idmejora);
          $('#fecha').val(mejora.fecha);
          $('#diagnostico').val(mejora.diagnostico);
          $('#recomendacion').val(mejora.recomendacion);
          edit = true;
        });
    });

});