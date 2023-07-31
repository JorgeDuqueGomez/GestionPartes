<?php
require_once("../head/head.php");
require_once("../../controller/loteCtrl.php");
$obj =  new loteController();
$rows = $obj->index();
?>
<br>
<h1 class="text-center"><strong>GESTIÓN DE LOTES DE EFECTIVIDAD</strong></h1>
<br>
<div class="container">
  <!-- <div class="d-flex justify-content-center">
    <a href="./creat.php">
      <button type="button" class="btn btn-primary d-flex align-items-center" type="button"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
          <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
        </svg>&nbsp;Agregar nueva serie</button>
    </a>
  </div> -->
  <br>
  <div class="table-responsive">
    <table class="table table-bordered table-hover" id="serieTable">
      <thead class="table-light">
        <tr>
          <th class="text-center align-middle" scope="col">Modelo</th>
          <th class="text-center align-middle" scope="col">Sufix</th>
          <th class="text-center align-middle" scope="col">Lote de <br> Efectividad</th>
          <th class="text-center align-middle" scope="col">Ultimo lote procesado</th>
          <th class="text-center align-middle" scope="col">Acciones</th>
        </tr>
      </thead>

      <tbody>
        <?php if ($rows) : ?>
          <?php foreach ($rows as $row) : ?>
            <tr>
              <th class="text-center align-middle"><?= $row['nombreModelo'] ?> - <?= $row['proyecto'] ?></th>
              <th class="text-center align-middle">SF-<?= $row['nombreSufix'] ?></th>

              <th class="text-center align-middle"><?= $row['lote'] ?></th>
              <th class="text-center align-middle"><?= $row['updateAt'] ?></th>
              <th class="text-center">
                <a href="edit.php?id=<?= $row['idLote'] ?>" class="btn btn-outline-success"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                  </svg></a>
              </th>
            </tr>
          <?php endforeach; ?>
        <?php else : ?>
          <tr>
            <td colspan="3" class="text-center">No hay registros</td>
          </tr>
        <?php endif; ?>

      </tbody>
    </table>
  </div>
</div>
<?php
require_once("../head/footer.php");
?>