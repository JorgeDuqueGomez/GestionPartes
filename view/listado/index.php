<?php
require_once("../head/head.php");
require_once("../../controller/listadoCtrl.php");
$obj =  new listadoController();
$rows = $obj->index();
?>
<br>
<h1 class="text-center"><strong>GESTION DE LISTADOS</strong></h1>
<div class="container">
  <br>
  <div class="d-flex justify-content-center">
  </div>
  <form action="edit.php" method="POST">
    <div class="d-flex justify-content-center">
      <a href="trash.php" class="btn btn-outline-danger">
        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
          <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
        </svg>
      </a>
      &nbsp;&nbsp;
        <a href="trash.php" class="btn btn-outline-success">Historial de cambios
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

              <th class="text-center align-middle">

                <input type="checkbox" class="checkbox" name="selectedRows[]" value="<?= $row['idListado'] ?>">
                &nbsp;

                <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="setDeleteId('<?= $row['idListado'] ?>')"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                    <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                  </svg></button>

              </th>
            </tr>
          <?php endforeach; ?>
        <?php else : ?>
          <tr>
            <td colspan="10" class="text-center">No hay registros</td>
          </tr>
        <?php endif; ?>

      </tbody>
    </table>
  </form>

  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">¿Desea eliminar el registro?</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          El registro no estara disponible en el listado oficial.
        </div>

        <div class="modal-footer">
          <form id="delete-form" method="POST" action="delete.php">
            <input type="hidden" name="id" id="delete-id">
            <button type="submit" class="btn btn-outline-danger">Eliminar</button>
            <button type="button" class="btn btn-outline-success" data-bs-dismiss="modal">Cancelar</button>
          </form>
        </div>
      </div>
    </div>
  </div>

</div>
<?php
require_once("../head/footer.php");
?>