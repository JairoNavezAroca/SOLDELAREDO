$(document).ready(function(){
    let edit = false;
    fecha();
    verOrden();

    function fecha(){
      var actual;
      n =  new Date();
      y = n.getFullYear();
      document.getElementById("fecha").value = y ;
    } 

     function verOrden() {
      let accion = "obtenerOrdenes";
      $.ajax({
        url: '../controlador/orden.php',
        data: {accion},
        type: 'POST',
        success: function(response) {
          const ordenes = JSON.parse(response);
          console.log(ordenes);
          let template = '';
          ordenes.forEach(orden => {
            template += `
                    <tr idorden="${orden.idorden}">
                    <td>${orden.idorden}</td>           
                    <td>${orden.proceso}</td>
                    <td>${orden.propuesta}</td>
                    <td>
                      <a class="orden-ver btn btn-danger btn-xs"  href="../vista/ordendeimplementacion.php?idorden=${orden.idorden}&word=${orden.idorden}"><i class="fa fa-file-word-o"></i></a>
                      <a class="orden-ver btn btn-danger btn-xs"  href="../vista/ordendeimplementacion.php?idorden=${orden.idorden}&pdf=${orden.idorden}"><i class="fa fa-file-pdf-o"></i></a>
                      <button type="button" class="orden-edit btn btn-danger btn-xs" ><i class="fa fa-pencil"></i></button>
                      <button type="button" class="orden-delete btn btn-danger btn-xs" ><i class="fa fa-trash-o"></i></button>
                    </td>
                    </tr>
                  `
          });     
          $('#implementacion').html(template);
        }
      });
    }

    // search key type event
    $('#search').keyup(function() {
      if($('#search').val()) {
        let search = $('#search').val();
        $.ajax({
          url: '../controlador/buscarOrden.php',
          data: {search},
          type: 'POST',
          success: function (response) {
            console.log(response);
            if(!response.error) {
              let ordenes = JSON.parse(response);
              let template = '';
              ordenes.forEach(orden => {
                template += `
                    <tr idorden="${orden.idorden}">
                    <td>${orden.idorden}</td>          
                    <td>${orden.proceso}</td>
                    <td>${orden.propuesta}</td>
                    <td>
                      <a class="orden-ver btn btn-danger btn-xs"  href="../vista/ordendeimplementacion.php?idorden=${orden.idorden}&word=${orden.idorden}"><i class="fa fa-file-word-o"></i></a>
                      <a class="orden-ver btn btn-danger btn-xs"  href="../vista/ordendeimplementacion.php?idorden=${orden.idorden}&pdf=${orden.idorden}"><i class="fa fa-file-pdf-o"></i></a>
                      <button type="button" class="orden-edit btn btn-danger btn-xs" ><i class="fa fa-pencil"></i></button>
                      <button type="button" class="orden-delete btn btn-danger btn-xs" ><i class="fa fa-trash-o"></i></button>
                    </td>
                    </tr>
                  `
              });
              $('#implementacion').html(template);
            }
          } 
        })
      }
      else
        verOrden();
    });


    $('#frmOrden').submit(e => {
        e.preventDefault();
        let rup = edit === false ? 'nuevo' : 'modificar';
        const postData = {
          cargo: $('#cargo').val(),
          fecha: $('#fecha').val(),
          idorden: $('#idorden').val(),
          propuesta: $('#propuesta').val(),
          idmejora: $('#idmejora').val(),
          actividades: $('#actividades').val(),
          docrelacionados: $('#docrelacionados').val(),
          observaciones: $('#observaciones').val(),
          accion: rup
        };
        console.log(postData);
        const url = '../controlador/orden.php';
        $.post(url, postData, (response) => {
          swal(response);
          $('#frmOrden').trigger('reset');
          verOrden();
          fecha();
          edit = false;
        });
    });


    // Delete mejora
    $(document).on('click', '.orden-delete', function() {
      if(confirm('Are you sure you want to delete it?')) {
        let element = $(this)[0].parentElement.parentElement;
        let idorden = $(element).attr('idorden');
        let accion = 'eliminar';
        $.post('../controlador/orden.php', {idorden,accion},(response) => {
          swal(response);
          verOrden();
        });
      }
    });

      // Edit mejora
    $(document).on('click', '.orden-edit', function() {
        let accion = "obtenerOrden";
        let element = $(this)[0].parentElement.parentElement;
        let idorden = $(element).attr('idorden');
        $.post('../controlador/orden.php', {idorden,accion},(response) => {
          const orden = JSON.parse(response);
          $('#idorden').val(orden.idorden);
          $('#fecha').val(orden.fecha);
          $('#propuesta').val(orden.propuesta);
          $('#actividades').val(orden.actividades);
          $('#docrelacionados').val(orden.docrelacionados);
          $('#cargo').val(orden.cargo);
          $('#observaciones').val(orden.observaciones);
          $('#idmejora').val(orden.idmejora);
          $('#proceso').val(orden.proceso);
          $('#codigo').val(orden.idproceso);
          edit = true;
        });
    });

});