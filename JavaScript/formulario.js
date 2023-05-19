

function setDeleteId(id) {
    document.getElementById('delete-id').value = id;
}


  $(document).ready(function() {
    $('#sufixTable').DataTable({
      responsive: true,
      scrollY: '450px',
      scrollCollapse: false,
      paging: false,
      
      "language": {
        "url": "//cdn.datatables.net/plug-ins/1.13.1/i18n/es-ES.json"
      }
    });
  });
