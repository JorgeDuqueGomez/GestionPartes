
// ESTACION_________________

function setDeleteId(id) {
    document.getElementById('delete-id').value = id;
}
function alertselectEstacion(){
  let linea = document.getElementById('idLinea').value;  
  let nombreEstacion = document.getElementById('nombreEstacion').value;  

  if(linea !='Seleccione una linea' && 
  nombreEstacion !='' 
  ){
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
            }).remove(); 
            
            // Eliminar el nodo de texto
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
    ordering: true,
    pageLength: 10,
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
    },
    footerCallback: function(row, data, start, end, display) {
      var api = this.api();

      // Obtener los nodos HTML de la columna 7 visibles después de aplicar los filtros
      var columnNodes = api.column(7, { search: 'applied' }).nodes().flatten().toArray();

      // Extraer los valores de los nodos HTML
      var columnData = columnNodes.map(function(node) {
        return $(node).html();
      });

      // Calcular la suma solo de los valores visibles
      var total = columnData.reduce(function(a, b) {
        var numA = parseFloat(a);
        var numB = parseFloat(b);

        if (!isNaN(numA)) {
          return numA + numB;
        } else {
          return numB;
        }
      }, 0);

      // Mostrar el resultado en la última fila
      $(api.column(7).footer()).html(total);
    }
  });

  // Agregar filtros y placeholders a cada columna
  $('#gestionListadoTable thead th').each(function() {
    var title = $(this).text();
    $(this).html('<div class="filter-container"><input type="text" class="form-control form-control-sm filter-input" placeholder="' +  title  + '" /><span class="sort-arrow"></span></div>');
  });

  // Aplicar los filtros al escribir en los inputs
  $('#gestionListadoTable thead .filter-input').on('click', function(e) {
    e.stopPropagation();
  }).on('keyup change', function() {
    var columnIndex = $(this).closest('th').index();
    table.column(columnIndex).search(this.value).draw();
  });

  // Ordenar la tabla al hacer clic en la flecha
  $('#gestionListadoTable thead .sort-arrow').on('click', function() {
    var columnIndex = $(this).closest('th').index();
    var column = table.column(columnIndex);
    var currentOrder = column.order()[0];

    // Cambiar la dirección del ordenamiento solo si se hizo clic en la flecha
    if ($(this).hasClass('asc') || $(this).hasClass('desc')) {
      var newDirection = currentOrder === 'asc' ? 'desc' : 'asc';
      column.order(newDirection).draw();
    }
  });
});


function cantidad(){
  let valor = document.getElementById('posicion').value;
  if(valor > 30 || valor < 1){
    // alert('el valor no es admitido');
    document.getElementById('posicion').value='';
   
  }
}

window.addEventListener('DOMContentLoaded', function() {
  var checkboxes = document.querySelectorAll('.checkbox');
  var botonCambios = document.getElementById('realizarCambios');

  checkboxes.forEach(function(checkbox) {
    checkbox.addEventListener('change', actualizarBoton);
  });

  function actualizarBoton() {
    var algunCheckboxSeleccionado = Array.from(checkboxes).some(function(checkbox) {
      return checkbox.checked;
    });

    if (algunCheckboxSeleccionado) {
      botonCambios.disabled = false;
    } else {
      botonCambios.disabled = true;
    }
  }
});

function restrictInput(input) {
  input.value = input.value.toUpperCase(); // Convertir el valor ingresado a mayúsculas
  input.value = input.value.substring(0, 2); // Limitar la longitud a dos dígitos
  input.value = input.value.replace(/[^a-zA-Z]/g, ''); // Reemplazar cualquier caracter que no sea una letra con una cadena vacía
}

function restrictInputNumber(input) {
  input.value = input.value.replace(/[^0-9]/g, ''); // Reemplazar cualquier caracter que no sea una numero con una cadena vacía
}

function setRestoreId(id) {
  document.getElementById('restore-id').value = id;
}

// MODULO ALISTAMIENTO___________________________________________________________

 $(document).ready(function() {
    // Manejar el evento de envío del formulario
    $(".update-form").submit(function(e) {
      e.preventDefault(); // Evitar el envío del formulario por defecto

      var form = $(this);
      var formData = form.serialize(); // Obtener los datos del formulario

      // Enviar la petición AJAX al servidor
      $.ajax({
        type: "POST",
        url: "store.php",
        data: formData,
        success: function(response) {
          // Aquí puedes manejar la respuesta del servidor si es necesario
          // Por ejemplo, mostrar un mensaje de éxito o actualizar algún elemento en la página
          console.log("Actualización exitosa");
        },
        error: function(xhr, status, error) {
          // Manejar cualquier error que pueda ocurrir durante la petición AJAX
          console.error("Error en la petición AJAX: " + status + " - " + error);
        }
      });
    });
  });

//GENERAR ALISTAMIENTO____________________________________

function generarAlistamiento(){ 
  let sufix = document.getElementById('nombreSufix1').value;
  let lote = document.getElementById('lote1').value;
  let linea = document.getElementById('nombreLinea1').value;
  if(
    sufix !='Sufix' && 
    lote !='Lote' && 
    linea !='Linea'
    ){
   let boton = document.getElementById('alistamiento');
   boton.removeAttribute('disabled');
  }
} 

//INICIAR ALISTAMIENTO____________________________________

function iniciarAlistamiento(){ 
  let sufix = document.getElementById('nombreSufixConsulta2').value;
  let lote = document.getElementById('loteConsulta2').value;
  let linea = document.getElementById('lineaConsulta2').value;
  if(
    sufix !='Sufix' && 
    lote !='Lote' && 
    linea !='Linea'
    ){
   let boton = document.getElementById('iniciar');
   boton.removeAttribute('disabled');
  }
}
//CONSULTAR ALISTAMIENTO____________________________________

function consultarAlistamientoJS(){ 
  let sufix = document.getElementById('nombreSufixConsulta3').value;
  let lote = document.getElementById('loteConsulta3').value;
  let linea = document.getElementById('lineaConsulta3').value;
  if(
    sufix !='Sufix' && 
    lote !='Lote' && 
    linea !='Linea'
    ){
   let boton = document.getElementById('consulta');
   boton.removeAttribute('disabled');
  }
}

// ESTANTERIA_______________________________________________

function alertaEstanteria(){
  let modulo = document.getElementById('modulo').value;  
  let posicion = document.getElementById('posicion').value;  
  let idLinea = document.getElementById('idLinea').value;  

  if(idLinea !='Seleccione una linea' && 
  posicion !='' && 
  modulo !='' 
   ){
   let boton = document.getElementById('agregar');
   boton.removeAttribute('disabled');
  }
}

// TPM____________________________________________

$(document).ready(function() {
  var table = $('#gestionTpmTable').DataTable({
    responsive: true,
    paging: true,
    ordering: true,
    pageLength: 10,
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
    },
    footerCallback: function(row, data, start, end, display) {
      var api = this.api();

      // Obtener los nodos HTML de la columna 7 visibles después de aplicar los filtros
      var columnNodes = api.column(7, { search: 'applied' }).nodes().flatten().toArray();

      // Extraer los valores de los nodos HTML
      var columnData = columnNodes.map(function(node) {
        return $(node).html();
      });

      // Calcular la suma solo de los valores visibles
      var total = columnData.reduce(function(a, b) {
        var numA = parseFloat(a);
        var numB = parseFloat(b);

        if (!isNaN(numA)) {
          return numA + numB;
        } else {
          return numB;
        }
      }, 0);

      // Mostrar el resultado en la última fila
      $(api.column(7).footer()).html(total);
    }
  });

  // Agregar filtros y placeholders a cada columna
  $('#gestionTpmTable thead th').each(function() {
    var title = $(this).text();
    $(this).html('<div class="filter-container"><input type="text" class="form-control form-control-sm filter-input" placeholder="' +  title  + '" /><span class="sort-arrow"></span></div>');
  });

  // Aplicar los filtros al escribir en los inputs
  $('#gestionTpmTable thead .filter-input').on('click', function(e) {
    e.stopPropagation();
  }).on('keyup change', function() {
    var columnIndex = $(this).closest('th').index();
    table.column(columnIndex).search(this.value).draw();
  });

  // Ordenar la tabla al hacer clic en la flecha
  $('#gestionTpmTable thead .sort-arrow').on('click', function() {
    var columnIndex = $(this).closest('th').index();
    var column = table.column(columnIndex);
    var currentOrder = column.order()[0];

    // Cambiar la dirección del ordenamiento solo si se hizo clic en la flecha
    if ($(this).hasClass('asc') || $(this).hasClass('desc')) {
      var newDirection = currentOrder === 'asc' ? 'desc' : 'asc';
      column.order(newDirection).draw();
    }
  });
});


// LISTADOLOG__________________________________

$(document).ready(function() {
  var table = $('#historialCambios').DataTable({
    responsive: true,
    paging: true,
    ordering: true,
    pageLength: 10,
    initComplete: function() {
      var table = this.api();
      // Obtener el campo de búsqueda
      var searchInput = $(table.table().container()).find('.dataTables_filter input');
      // Establecer el marcador de posición
      searchInput.attr('placeholder', 'BUSCAR GLOBAL');
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

  // Agregar filtros y placeholders a cada columna
  $('#historialCambios thead th').each(function() {
    var title = $(this).text();
    $(this).html('<div class="filter-container"><input type="text" class="form-control form-control-sm filter-input" placeholder="' +  title  + '" /><span class="sort-arrow"></span></div>');
  });

  // Aplicar los filtros al escribir en los inputs
  $('#historialCambios thead .filter-input').on('click', function(e) {
    e.stopPropagation();
  }).on('keyup change', function() {
    var columnIndex = $(this).closest('th').index();
    table.column(columnIndex).search(this.value).draw();
  });

  // Ordenar la tabla al hacer clic en la flecha
  $('#historialCambios thead .sort-arrow').on('click', function() {
    var columnIndex = $(this).closest('th').index();
    var column = table.column(columnIndex);
    var currentOrder = column.order()[0];
  });
});

$(document).ready(function() {
  var table = $('#consultaAlistamiento').DataTable({
    responsive: true,
    paging: true,
    ordering: true,
    pageLength: 10,
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
    },
    footerCallback: function(row, data, start, end, display) {
      var api = this.api();

      // Obtener los nodos HTML de la columna 7 visibles después de aplicar los filtros
      var columnNodes = api.column(7, { search: 'applied' }).nodes().flatten().toArray();

      // Extraer los valores de los nodos HTML
      var columnData = columnNodes.map(function(node) {
        return $(node).html();
      });

      // Calcular la suma solo de los valores visibles
      var total = columnData.reduce(function(a, b) {
        var numA = parseFloat(a);
        var numB = parseFloat(b);

        if (!isNaN(numA)) {
          return numA + numB;
        } else {
          return numB;
        }
      }, 0);

      // Mostrar el resultado en la última fila
      $(api.column(7).footer()).html(total);
    }
  });

  // Agregar filtros y placeholders a cada columna
  $('#consultaAlistamiento thead th').each(function() {
    var title = $(this).text();
    $(this).html('<div class="filter-container"><input type="text" class="form-control form-control-sm filter-input" placeholder="' +  title  + '" /><span class="sort-arrow"></span></div>');
  });

  // Aplicar los filtros al escribir en los inputs
  $('#consultaAlistamiento thead .filter-input').on('click', function(e) {
    e.stopPropagation();
  }).on('keyup change', function() {
    var columnIndex = $(this).closest('th').index();
    table.column(columnIndex).search(this.value).draw();
  });

  // Ordenar la tabla al hacer clic en la flecha
  $('#consultaAlistamiento thead .sort-arrow').on('click', function() {
    var columnIndex = $(this).closest('th').index();
    var column = table.column(columnIndex);
    var currentOrder = column.order()[0];

    // Cambiar la dirección del ordenamiento solo si se hizo clic en la flecha
    if ($(this).hasClass('asc') || $(this).hasClass('desc')) {
      var newDirection = currentOrder === 'asc' ? 'desc' : 'asc';
      column.order(newDirection).draw();
    }
  });
});

// NOVEDADES________________________________

$(document).ready(function() {
  // Function to add a new row to the table
  function addNewRow() {
    var newRow = `
    <tr>
        <td class="text-center align-middle">
          <select name="idMaterial" id="idMaterial" class="form-select text-center align-middle">
            <option selected="true" disabled="disabled">Matrl</option>
            <?php foreach ($material as $materiales) : ?>
              <option value="<?= $materiales['idMaterial'] ?>"><?= $materiales['nombreMaterial'] ?></option>
            <?php endforeach; ?>
          </select>
        </td>
        <td class="text-center align-middle">
          <input type="text" name="" class="form-control" placeholder="Numero de parte">
        </td>
        <td class="text-center align-middle">
          <div style="margin-bottom: 5px;">
            <select name="idGrupo" id="idGrupo" class="form-select text-center align-middle">
              <option selected="true" disabled="disabled">Grupo</option>
              <?php foreach ($grupo as $grupos) : ?>
                <option value="<?= $grupos['idGrupo'] ?>"><?= $grupos['codigo'] ?></option>
              <?php endforeach; ?>
            </select>
          </div>
          <div>
            <input type="text" name="" class="form-control" placeholder="Component">
          </div>
        </td>
        <td class="text-center align-middle">
          <div style="margin-bottom: 5px;">
            <select name="idEstacion" id="idEstacion" class="form-select text-center align-middle">
              <option selected="true" disabled="disabled">Estacion</option>
              <?php foreach ($estacion as $estaciones) : ?>
                <option value="<?= $estaciones['idEstacion'] ?>"><?= $estaciones['nombreEstacion'] ?></option>
              <?php endforeach; ?>
            </select>
          </div>
          <div>
            <select name="idLateralidad" id="idLateralidad" class="form-select text-center align-middle">
              <option selected="true" disabled="disabled">Lateralidad</option>
              <?php foreach ($lateralidad as $lateralidades) : ?>
                <option value="<?= $lateralidades['idLateralidad'] ?>"><?= $lateralidades['nombreLateralidad'] ?></option>
              <?php endforeach; ?>
            </select>
          </div>
        </td>
        <td class="text-center align-middle">
          <div style="margin-bottom: 5px;">
            <select name="idEstacion" id="idEstacion" class="form-select text-center align-middle">
              <option selected="true" disabled="disabled">Estacion</option>
              <?php foreach ($estacion as $estaciones) : ?>
                <option value="<?= $estaciones['idEstacion'] ?>"><?= $estaciones['nombreEstacion'] ?></option>
              <?php endforeach; ?>
            </select>
          </div>
          <div>
            <select name="idLateralidad" id="idLateralidad" class="form-select text-center align-middle">
              <option selected="true" disabled="disabled">Lateralidad</option>
              <?php foreach ($lateralidad as $lateralidades) : ?>
                <option value="<?= $lateralidades['idLateralidad'] ?>"><?= $lateralidades['nombreLateralidad'] ?></option>
              <?php endforeach; ?>
            </select>
          </div>
        </td>
        <td class="text-center align-middle">
          <input type="number" name="" class="form-control" placeholder="Cant. por vehiculo">
        </td>
        <td class="text-center align-middle">
          <input type="text" name="" class="form-control" placeholder="Descripcion">
        </td>
      </tr>


    `;
    $("#novedadesTable tbody").append(newRow);
  }
  // Event handler for the button click
  $("#nuevaNovedad").on("click", function() {
    addNewRow();
  });
});



