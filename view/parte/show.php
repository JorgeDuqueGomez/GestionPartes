<?php
require_once("../head/head.php");
require_once("../../controller/sufixCtrl.php");

$obj = new sufixController();
$sufix = $obj->showGrupos();

?>
<br>
<h1 class="text-center"><strong>LISTA DE MODELOS</strong></h1>

<script>
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
</script>
<div class="container">
  <div class="d-flex justify-content-center">
  </div>
  <br>
  <table class="table table-bordered mx-auto display responsive nowrap" style="max-width: 100%;" id="sufixTable">
    <thead class="table-light">
      <tr>
        <th class="text-center align-middle" scope="col">Serie</th>
        <th class="text-center align-middle" scope="col">Familia</th>
        <th class="text-center align-middle" scope="col">Modelo</th>
        <th class="text-center align-middle" scope="col">Proyecto</th>
        <th class="text-center align-middle" scope="col">Sufix</th>
        <th class="text-center align-middle" scope="col">Codigo de modelo</th>
        <th class="text-center align-middle" scope="col">Destino</th>
      </tr>
    </thead>

    <tbody>
      <?php if ($sufix) : ?>
        <?php foreach ($sufix as $row) : ?>
          <tr>
            <th class="text-center align-middle"><?= $row[0] ?></th>
            <th class="text-center align-middle"><?= $row[1] ?></th>
            <th class="text-center align-middle"><?= $row[2] ?></th>
            <th class="text-center align-middle"><?= $row[3] ?></th>
            <th class="text-center align-middle"><?= $row[4] ?></th>
            <th class="text-center align-middle"><?= $row[5] ?></th>
            <th class="text-center align-middle"><?= $row[6] ?></th>
            </th>
          </tr>
        <?php endforeach; ?>
      <?php else : ?>
        <tr>
          <td colspan="5" class="text-center">No hay registros</td>
        </tr>
      <?php endif; ?>

    </tbody>
  </table>
</div>
<script src="/HINO/JavaScript/formulario.js"></script>
<?php
require_once("../head/footer.php");
?>