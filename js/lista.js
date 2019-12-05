$(document).ready(function(){
    
    let edit = false;
    verListas(); 
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
        verListas();
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
          verListas();
          edit = false;
        });
    });


    function verListas() {
      let accion = "obtenerListas";
      $.ajax({
        url: '../controlador/lista.php',
        data: {accion},
        type: 'POST',
        success: function(response) {
        const listas = JSON.parse(response);
        console.log(response);
        let template = '';
        let cont=0;
          listas.forEach(lista => {
            cont=cont+1;
            template += `
                    <tr idlista="${lista.idlista}">
                    <td>${cont}</td>
                    <td>${lista.fecha}</td>
                    <td>${lista.versiones}</td>           
                    <td>
                      <a class="lista-ver btn btn-danger btn-xs"  href="../vista/reportedeprocesos.php?idlista=${lista.idlista}"><i class="glyphicon glyphicon-eye-close"></i></a>
                      <a class="lista-edit btn btn-danger btn-xs"  href="../vista/modelado.php?idlista=${lista.idlista}"><i class="fa fa-pencil"></i></a>
                      <button type="button" class="lista-delete btn btn-danger btn-xs" ><i class="fa fa-trash-o"></i></button>
                    </td>
                    </tr>
                  `
          });
          $('#listas').html(template);
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
          verListas();
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