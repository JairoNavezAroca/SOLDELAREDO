$(document).ready(function(){
    vercriterios();
    //ver criterios
    function vercriterios() {
        let accion = "obtenerCriterios";
        $.ajax({
          url: '../controlador/criterio.php',
          data: {accion},
          type: 'POST',
          success: function(response) {
          const criterios = JSON.parse(response);
          let template = '';
            criterios.forEach(criterio => {
              template += `
                      <tr idcriterio="${criterio.idcriterio}">
                      <td>${criterio.criterio}</td>
                      <td><a href="#" class="area-item">${criterio.descripcion}</a></td>
                      <td><a href="#" class="area-item">${criterio.peso}%</a></td>
                      </tr>
                    `
            });
            $('#criterios').html(template);
          }
        });
      }

});



