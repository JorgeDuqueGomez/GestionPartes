<?php
require_once("../head/head.php");
require_once("../../controller/listadoCtrl.php");
$obj =  new listadoController();
$rows = $obj->trash();
?>
<br>
<h1 class="text-center"><strong>HISTORIAL DE LISTADOS</strong></h1>
<div class="container">
  <br>
  <div class="d-flex justify-content-center">
  </div>
  <form action="edit.php" method="POST">
    <div class="d-flex justify-content-center">
      <a href="index.php" class="btn btn-danger d-flex align-items-center"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
          <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z" />
        </svg> &nbsp;Atras</a>
      <br>
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
          <th class="text-center align-middle" scope="col">Fecha</th>
          <th class="text-center align-middle" scope="col">Acciones</th>
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
              <th class="text-center align-middle"><?= $row['updateAt'] ?></th>

              <th class="text-center align-middle">

                <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="setRestoreId('<?= $row['idListado'] ?>')"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-clockwise" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2v1z" />
                    <path d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466z" />
                  </svg></button>

              </th>
            </tr>
          <?php endforeach; ?>
        <?php else : ?>
          <tr>
            <td colspan="10" class="text-center">El historial se encuentra vació</td>
          </tr>
        <?php endif; ?>

      </tbody>
    </table>
  </form>

  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">¿Desea restaurar el registro?</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          El registro estará disponible en el listado oficial.
        </div>
        
        <div class="modal-footer">
          <form id="restore-form" method="POST" action="restore.php">
            <input type="hidden" name="id" id="restore-id">
            <button type="submit" class="btn btn-outline-success">Restaurar</button>
            <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Cancelar</button>
          </form>
        </div>
      </div>
    </div>
  </div>

</div>
<?php
require_once("../head/footer.php");
?>