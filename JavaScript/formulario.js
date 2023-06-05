
// ESTACION_________________

function setDeleteId(id) {
    document.getElementById('delete-id').value = id;
}
  function alertselectEstacion(){
    let linea = document.getElementById('idLinea').value;  
    let nombreEstacion = document.getElementById('nombreEstacion').value;  
    let lateralidad = document.getElementById('idLateralidad').value;  
    if(linea !='Seleccione una linea' && nombreEstacion !='' && lateralidad != 'Seleccione una lateralidad' ){
     let boton = document.getElementById('agregar');
     boton.removeAttribute('disabled');
    }
} 
$(document).ready(function() {
  $('#estacionTable').DataTable({
    responsive: true,
    scrollY: '45vh',
    scrollCollapse: true,
    paging: false,
    language: {
      url: "//cdn.datatables.net/plug-ins/1.13.1/i18n/es-ES.json"
    },
    initComplete: function() {
      var table = this.api();
      // Obtener el campo de búsqueda
      var searchInput = $(table.table().container()).find('.dataTables_filter input');
      // Establecer el marcador de posición
      searchInput.attr('placeholder', 'BUSCAR');
            // Ocultar la etiqueta de búsqueda
            var searchLabel = $(table.table().container()).find('.dataTables_filter label');
            searchLabel.contents().filter(function() {
              return this.nodeType === 3; // Filtrar nodos de texto
            }).remove(); // Eliminar el nodo de texto
            // Centrar el campo de búsqueda
            searchInput.css('text-align', 'center');
            searchInput.css('margin', '0 auto');
            searchInput.parent().css('text-align', 'center');
    }
  });
});

// LINEA______________________

$(document).ready(function() {
  $('#lineaTable').DataTable({
    responsive: true,
    scrollY: '45vh',
    scrollCollapse: true,
    paging: false,
    language: {
      url: "//cdn.datatables.net/plug-ins/1.13.1/i18n/es-ES.json"
    },
    initComplete: function() {
      var table = this.api();
      // Obtener el campo de búsqueda
      var searchInput = $(table.table().container()).find('.dataTables_filter input');
      // Establecer el marcador de posición
      searchInput.attr('placeholder', 'BUSCAR');
            // Ocultar la etiqueta de búsqueda
            var searchLabel = $(table.table().container()).find('.dataTables_filter label');
            searchLabel.contents().filter(function() {
              return this.nodeType === 3; // Filtrar nodos de texto
            }).remove(); // Eliminar el nodo de texto
            // Centrar el campo de búsqueda
            searchInput.css('text-align', 'center');
            searchInput.css('margin', '0 auto');
            searchInput.parent().css('text-align', 'center');
    }
  });
});

// LATERALIDAD________________

$(document).ready(function() {
  $('#lateralidadTable').DataTable({
    responsive: true,
    scrollY: '45vh',
    scrollCollapse: true,
    paging: false,
    language: {
      url: "//cdn.datatables.net/plug-ins/1.13.1/i18n/es-ES.json"
    },
    initComplete: function() {
      var table = this.api();
      // Obtener el campo de búsqueda
      var searchInput = $(table.table().container()).find('.dataTables_filter input');
      // Establecer el marcador de posición
      searchInput.attr('placeholder', 'BUSCAR');
            // Ocultar la etiqueta de búsqueda
            var searchLabel = $(table.table().container()).find('.dataTables_filter label');
            searchLabel.contents().filter(function() {
              return this.nodeType === 3; // Filtrar nodos de texto
            }).remove(); // Eliminar el nodo de texto
            // Centrar el campo de búsqueda
            searchInput.css('text-align', 'center');
            searchInput.css('margin', '0 auto');
            searchInput.parent().css('text-align', 'center');
    }
  });
});

// SERIE_____________________

$(document).ready(function() {
  $('#serieTable').DataTable({
    responsive: true,
    scrollY: '45vh',
    scrollCollapse: true,
    paging: false,
    language: {
      url: "//cdn.datatables.net/plug-ins/1.13.1/i18n/es-ES.json"
    },
    initComplete: function() {
      var table = this.api();
      // Obtener el campo de búsqueda
      var searchInput = $(table.table().container()).find('.dataTables_filter input');
      // Establecer el marcador de posición
      searchInput.attr('placeholder', 'BUSCAR');
            // Ocultar la etiqueta de búsqueda
            var searchLabel = $(table.table().container()).find('.dataTables_filter label');
            searchLabel.contents().filter(function() {
              return this.nodeType === 3; // Filtrar nodos de texto
            }).remove(); // Eliminar el nodo de texto
            // Centrar el campo de búsqueda
            searchInput.css('text-align', 'center');
            searchInput.css('margin', '0 auto');
            searchInput.parent().css('text-align', 'center');
    }
  });
});

// FAMILIA__________________

$(document).ready(function() {
  $('#familiaTable').DataTable({
    responsive: true,
    scrollY: '45vh',
    scrollCollapse: true,
    paging: false,
    language: {
      url: "//cdn.datatables.net/plug-ins/1.13.1/i18n/es-ES.json"
    },
    initComplete: function() {
      var table = this.api();
      // Obtener el campo de búsqueda
      var searchInput = $(table.table().container()).find('.dataTables_filter input');
      // Establecer el marcador de posición
      searchInput.attr('placeholder', 'BUSCAR');
            // Ocultar la etiqueta de búsqueda
            var searchLabel = $(table.table().container()).find('.dataTables_filter label');
            searchLabel.contents().filter(function() {
              return this.nodeType === 3; // Filtrar nodos de texto
            }).remove(); // Eliminar el nodo de texto
            // Centrar el campo de búsqueda
            searchInput.css('text-align', 'center');
            searchInput.css('margin', '0 auto');
            searchInput.parent().css('text-align', 'center');
    }
  });
});

// MODELO_____________

$(document).ready(function() {
  $('#modeloTable').DataTable({
    responsive: true,
    scrollY: '45vh',
    scrollCollapse: true,
    paging: false,
    language: {
      url: "//cdn.datatables.net/plug-ins/1.13.1/i18n/es-ES.json"
    },
    initComplete: function() {
      var table = this.api();
      // Obtener el campo de búsqueda
      var searchInput = $(table.table().container()).find('.dataTables_filter input');
      // Establecer el marcador de posición
      searchInput.attr('placeholder', 'BUSCAR');
            // Ocultar la etiqueta de búsqueda
            var searchLabel = $(table.table().container()).find('.dataTables_filter label');
            searchLabel.contents().filter(function() {
              return this.nodeType === 3; // Filtrar nodos de texto
            }).remove(); // Eliminar el nodo de texto
            // Centrar el campo de búsqueda
            searchInput.css('text-align', 'center');
            searchInput.css('margin', '0 auto');
            searchInput.parent().css('text-align', 'center');
    }
  });
});