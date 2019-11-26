$(document).ready(function(){
    
    let edit = false;
    verProcesos(); 
    fecha();

    function fecha(){
      var actual;
      n =  new Date();
      y = n.getFullYear();
      m = n.getMonth() + 1;
      d = n.getDate();
      return actual = y + "/" + m + "/" + d;
    }

    // search key type event
    $('#search').keyup(function() {
      if($('#search').val()) {
        let search = $('#search').val();
        $.ajax({
          url: '../controlador/buscarProcesos.php',
          data: {search},
          type: 'POST',
          success: function (response) {
            if(!response.error) {
              let procesos = JSON.parse(response);
              let template = '';
              procesos.forEach(proceso => {
                template += `
                    <tr idproceso="${proceso.idproceso}">
                    <td>${proceso.proceso}</td>
                    <td>${proceso.fecha}</td>           
                    <td>${proceso.versiones}</td>
                    <td>${proceso.tipoproceso}</td>
                    <td>
                      <a class="proceso-ver btn btn-danger btn-xs"  href="../vista/tareas.php?idproceso=${proceso.idproceso}"><i class="glyphicon glyphicon-eye-close"></i></a>
                      <button type="button" class="proceso-edit btn btn-danger btn-xs" ><i class="fa fa-pencil"></i></button>
                      <button type="button" class="proceso-delete btn btn-danger btn-xs" ><i class="fa fa-trash-o"></i></button>
                    </td>
                    </tr>
                  `
              });
              $('#procesos').html(template);
            }
          } 
        })
      }
      else
        verProcesos();
    });

    $('#frmProcesos').submit(e => {
        e.preventDefault();
        let rup = edit === false ? 'nuevo' : 'modificar';
        const postData = {
          proceso: $('#proceso').val(),
          idproceso: $('#idproceso').val(),
          tipoproceso: $('#tipoproceso').val(),
          fecha:fecha(),
          accion: rup
        };
        const url = '../controlador/proceso.php';
        $.post(url, postData, (response) => {
          alert(response);
          $('#frmProcesos').trigger('reset');
          verProcesos();
          edit = false;
        });
    });


    function verProcesos() {
      let accion = "obtenerProcesos";
      $.ajax({
        url: '../controlador/proceso.php',
        data: {accion},
        type: 'POST',
        success: function(response) {
        const procesos = JSON.parse(response);
        let template = '';
          procesos.forEach(proceso => {
            template += `
                    <tr idproceso="${proceso.idproceso}">
                    <td>${proceso.proceso}</td>
                    <td>${proceso.tipoproceso}</td>
                    <td>${proceso.fecha}</td>           
                    <td>${proceso.versiones}</td>
                    <td>
                      <a class="proceso-ver btn btn-danger btn-xs"  href="../vista/tareas.php?idproceso=${proceso.idproceso}"><i class="glyphicon glyphicon-eye-close"></i></a>
                      <button type="button" class="proceso-edit btn btn-danger btn-xs" ><i class="fa fa-pencil"></i></button>
                      <button type="button" class="proceso-delete btn btn-danger btn-xs" ><i class="fa fa-trash-o"></i></button>
                    </td>
                    </tr>
                  `
          });
          $('#procesos').html(template);
        }
      });
    }

    // Delete a proceso
    $(document).on('click', '.proceso-delete', function() {
      if(confirm('Are you sure you want to delete it?')) {
        let element = $(this)[0].parentElement.parentElement;
        let idproceso = $(element).attr('idproceso');
        let accion = 'eliminar';
        $.post('../controlador/proceso.php', {idproceso,accion},(response) => {
          alert(response);
          verProcesos();
        });
      }
    });

      // Edit a proceso
    $(document).on('click', '.proceso-edit', function() {
        let accion = "obtenerProceso";
        let element = $(this)[0].parentElement.parentElement;
        let idproceso = $(element).attr('idproceso');
        $.post('../controlador/proceso.php', {idproceso,accion},(response) => {
          const proceso = JSON.parse(response);
          $('#idproceso').val(proceso.idproceso);
          $('#proceso').val(proceso.proceso);
          $('#tipoproceso').val(proceso.tipoproceso);
          edit = true;
        });
    });
});

/*function validar(){
  $.ajax({
    url : '../controlador/listarProcesos.php',
    type : 'POST',
    data : {},
    success : function(r){
      alert(r);
    }
  });
}*/