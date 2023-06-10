
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

// SUFIX_____________

$(document).ready(function() {
  $('#sufixTable').DataTable({
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

$(document).ready(function() {
  var table = $('#sufixTableConsulta').DataTable({
    paging: true,
    ordering: false
  });

  // Agregar filtros y placeholders a cada columna
  $('#sufixTableConsulta thead th').each(function() {
    var title = $(this).text();
    $(this).html('<input type="text" class="form-control form-control-sm" placeholder="' + title + '" style="width:;" />');
  });

  // Aplicar los filtros al escribir en los inputs
  $('#sufixTableConsulta thead input').on('keyup change', function() {
    var columnIndex = $(this).closest('th').index();
    table.column(columnIndex).search(this.value).draw();
  });

});





function alertaSufix(){
  let serie = document.getElementById('idSerie').value;  
  let familia = document.getElementById('nombreFamilia').value;  
  let modelo = document.getElementById('nombreModelo').value;  
  let proyecto = document.getElementById('nombreProyecto').value;  
  let sufix = document.getElementById('nombreSufix').value;  
  let codigo = document.getElementById('codigoModelo').value;  
  let destino = document.getElementById('idDestino').value;  
  if(serie !='Seleccione una serie' && 
  familia !='Seleccione una familia' && 
  modelo != 'Seleccione un modelo'&& 
  proyecto != ''&& 
  sufix != ''&& 
  codigo != ''&& 
  destino != 'Seleccione el destino' ){
   let boton = document.getElementById('agregar');
   boton.removeAttribute('disabled');
  }
} 

// PARTE_______________________

$(document).ready(function() {
  $('#partesTable').DataTable({
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


// GRUPO_____________________________

$(document).ready(function() {
  $('#grupoTable').DataTable({
    responsive: true,
    scrollY: '50vh',
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

$(document).ready(function() {
  $('#grupoTableConsulta').DataTable({
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

// ESTANTERIA______________________


$(document).ready(function() {
  $('#gestionEstanteriaTable').DataTable({
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

// PARTES________________________________

$(document).ready(function() {
  $('#gestionPartesTable').DataTable({
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


// LISTADOS__________________________________

$(document).ready(function() {
  var table = $('#gestionListadoTable').DataTable({
    responsive: true,
    paging: true,
    ordering: false,
    pageLength: 25,
  });

  // Agregar filtros y placeholders a cada columna
  $('#gestionListadoTable thead th').each(function() {
    var title = $(this).text();
    $(this).html('<input type="text" class="form-control form-control-sm" placeholder="' + title + '" style="width:;" />');
  });

  // Aplicar los filtros al escribir en los inputs
  $('#gestionListadoTable thead input').on('keyup change', function() {
    var columnIndex = $(this).closest('th').index();
    table.column(columnIndex).search(this.value).draw();
  });

});
