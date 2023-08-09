<?php
require_once("../head/head.php");
require_once("../../controller/tpmCtrl.php");
$obj =  new tpmController();
$rows = $obj->index();
?>
<br>
<h1 class="text-center"><strong>GESTION DE TPM's</strong></h1>
<div class="container">
  <br>
  <div class="d-flex justify-content-center">
  </div>
  <form action="edit.php" method="POST">
    <div class="d-flex justify-content-center">
      &nbsp;&nbsp;
      <a href="listadolog.php" class="btn btn-outline-success">Historial de TPM
      </a>
      &nbsp;&nbsp;
      <button type="submit" class="btn btn-primary" id="realizarCambios" disabled>
        Realizar cambios</button>
      &nbsp;
    </div>
    <table class="table table-bordered table-hover" id="gestionListadoTable">
      <thead class="table-light">
        <tr>
          <th class="text-center align-middle" scope="col">Modelo</th>
          <th class="text-center align-middle" scope="col">Estaciones</th>
          <th class="text-center align-middle" scope="col">Mtrl</th>
          <th class="text-center align-middle" scope="col">Nombre de parte</th>
          <th class="text-center align-middle" scope="col">Numero de parte</th>
          <th class="text-center align-middle" scope="col">Grupo</th>
          <th class="text-center align-middle" scope="col">Comp</th>
          <th class="text-center align-middle" scope="col">Cant</th>
          <th class="text-center align-middle" scope="col">Caja</th>
          <th class="text-center align-middle" scope="col">Check</th>
        </tr>
      </thead>

      <tbody style="line-height: 0.9;">
        <?php if ($rows) : ?>
          <?php foreach ($rows as $row) : ?>
            <tr>
              <th class="text-center align-middle"><?= $row['nombreModelo'] ?> - <?= $row['nombreSufix'] ?></th>
              <th class="text-center align-middle"><?= $row['nombreEstacion'] ?><br><?= $row['nombreCorto'] ?></th>
              <th class="text-center align-middle"><?= $row['nombreMaterial'] ?></th>
              <th class="align-middle"><?= $row['nombreParte'] ?></th>
              <th class="text-center align-middle"><?= $row['numeroParte'] ?></th>
              <th class="text-center align-middle"><?= $row['codigo'] ?></th>
              <th class="text-center align-middle"><?= $row['componentCode'] ?></th>
              <th class="text-center align-middle"><?= $row['cantidad'] ?></th>
              <th class="text-center align-middle"><?= $row['numeroCaja'] ?>- <?= $row['nombreCaja'] ?></th>

              <th class="text-center align-middle">

                <input type="checkbox" class="checkbox" name="selectedRows[]" value="<?= $row['idListado'] ?>">
                &nbsp;

              </th>
            </tr>
          <?php endforeach; ?>
        <?php else : ?>
          <tr>
            <td colspan="10" class="text-center">No hay registros</td>
          </tr>
        <?php endif; ?>

      </tbody>

      <tfoot>
        <tr>
          <th colspan="7" style="text-align:right">Total:</th>
          <th class="text-center"></th>
          <th colspan="2"></th>
        </tr>
      </tfoot>
    </table>
  </form>

</div>
<?php
require_once("../head/footer.php");
?>