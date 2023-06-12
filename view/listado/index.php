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

  <form method="POST" action="edit.php">
    <div class="d-flex justify-content-center">
      <button type="submit" class="btn btn-primary">
        Realizar cambios en modelos seleccionados</button>
        &nbsp; 
      <lord-icon src="https://cdn.lordicon.com/egiwmiit.json" trigger="hover" colors="primary:#0033ff" style="width:40px;height:40px">
      </lord-icon>
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
              <th class="text-center align-middle"><?= $row['nombreCaja'] ?>-<?= $row['nombrePosicion'] ?></th>

              <th class="text-center align-middle">
                <input type="checkbox" class="checkbox" value="<?= $row['idListado'] ?>">
                &nbsp;
                <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="setDeleteId('<?= $row['idListado'] ?>')"><svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                    <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                  </svg></button>

                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">¿Desea eliminar el registro?</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        Una vez eliminado no podrá recuperar el registro.
                      </div>
                      <div class="modal-footer">
                        <form id="delete-form" method="POST" action="delete.php">
                          <input type="hidden" name="id" id="delete-id">
                          <button type="submit" class="btn btn-outline-danger">Eliminar</button>
                        </form>
                        <button type="button" class="btn btn-outline-success" data-bs-dismiss="modal">Cancelar</button>
              </th>
            </tr>
          <?php endforeach; ?>
        <?php else : ?>
          <tr>
            <td colspan="9" class="text-center">No hay registros</td>
          </tr>
        <?php endif; ?>

      </tbody>
    </table>
  </form>
</div>
<?php
require_once("../head/footer.php");
?>