(function($) {
    'use strict';
    $(function() {
      $('#order-listing').DataTable({
        "aLengthMenu": [
          [5, 10, 15, -1],
          [5, 10, 15, "Tots"]
        ],
        "order": [[ 0, "asc" ]],
        "iDisplayLength": 10,
        "language": {
          "processing": "Procesando...",
          "lengthMenu": "Mostrando _MENU_ registros",
          "zeroRecords": "No se encontraron registros",
          "emptyTable": "No hay registros disponibles en esta tabla",
          "info": "Mostrando del _START_ al _END_ de un total de _TOTAL_ registro/s",
          "infoEmpty": "No hay registros disponibles",
          "infoFiltered": "(filtrado de _MAX_ registros)",
          "search": "Buscador: ",
          "infoThousands": ".",
          "decimal": ",",
          "loadingRecords": "Cargando...",
          "paginate": {
              "first": "Primero",
              "previous": "Anterior",
              "next": "Siguiente",
              "last": "Último"
          },
          "aria": {
              "sortAscending": ": Activa para ordenar la columna de forma ascendente",
              "sortDescending": ": Activa para ordenar la columna de forma descendente"
          },
          "buttons": {
              "print": "Imprimeix",
              "copy": "Copia",
              "colvis": "Columnes",
              "copyTitle": "Copia al portapapers",
              "copySuccess": {
                  "_": "%d files copiades",
                  "1": "1 fila copiada"
              },
              "pageLength": {
                  "-1": "Muestra todas las filas",
                  "_": "Muestra %d filas"
              }
          },
          "select": {
              "rows": {
                  "_": "%d files seleccionades",
                  "0": "Cap fila seleccionada",
                  "1": "1 fila seleccionada"
              }
          }
        }
      });
      $('#order-listing').each(function() {
        var datatable = $(this);
        // SEARCH - Add the placeholder for Search and Turn this into in-line form control

        var search_input = datatable.closest('.dataTables_wrapper').find('div[id$=_filter] input');
        search_input.attr('placeholder', 'Search');
        search_input.removeClass('form-control-sm');
        // LENGTH - Inline-Form control

        var length_sel = datatable.closest('.dataTables_wrapper').find('div[id$=_length] select');
        length_sel.removeClass('form-control-sm');
      });
      $('.dataTables_filter input').attr("placeholder", "Buscar ...");
    });
  })(jQuery);