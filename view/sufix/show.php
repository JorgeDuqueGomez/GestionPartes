<?php
require_once("../head/head.php");
require_once("../../controller/sufixCtrl.php");
$obj =  new sufixController();
$rows = $obj->index();
?>
<br>
<h1 class="text-center"><strong>CONSULTA DE MODELOS</strong></h1>
<br>
<div class="container">
  <div class="d-flex justify-content-center">
  </div>
  <br>


  <div class="table-responsive">
    <table class="table table-bordered table-hover" id="sufixTableConsulta">
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
        <?php if ($rows) : ?>
          <?php foreach ($rows as $row) : ?>
            <tr>
              <th class="text-center align-middle"><?= $row['nombreSerie'] ?></th>
              <th class="text-center align-middle"><?= $row['nombreFamilia'] ?></th>
              <th class="text-center align-middle"><?= $row['nombreModelo'] ?></th>
              <th class="text-center align-middle"><?= $row['proyecto'] ?></th>
              <th class="text-center align-middle"><?= $row['nombreSufix'] ?></th>
              <th class="text-center align-middle"><?= $row['codigoModelo'] ?></th>
              <th class="text-center align-middle"><?= $row['nombreDestino'] ?></th>
            </tr>
          <?php endforeach; ?>
        <?php else : ?>
          <tr>
            <td colspan="8" class="text-center">No hay registros</td>
          </tr>
        <?php endif; ?>

      </tbody>
    </table>
  </div>
</div>
<?php
require_once("../head/footer.php");
?>