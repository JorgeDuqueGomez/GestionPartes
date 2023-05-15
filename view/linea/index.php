<?php
require_once("../head/head.php");
require_once("../../controller/lineaCtrl.php");
$obj =  new lineaController();
$rows = $obj->index();
?>
<br>
<h1 class="text-center"><strong>GESTIÓN DE LINEAS</strong></h1>
<br>
<div class="container">

  <div class="d-flex justify-content-center">
    <a href="./creat.php">
      <button type="button" class="btn btn-primary" type="button">Agregar nueva linea</button>
    </a>
  </div>
  <br>

  <table class="table table-bordered mx-auto" style="max-width: 80%;">
    <thead class="table-light">
      <tr>
        <th class="text-center" scope="col">Nombre</th>
        <th class="text-center" scope="col">Estado</th>
        <th class="text-center" scope="col">Acciones</th>
      </tr>
    </thead>

    <tbody>
      <?php if ($rows) : ?>
        <?php foreach ($rows as $row) : ?>
          <tr>
            <th class="text-center align-middle"><?= $row[1] ?></th>
            <th class="text-center align-middle"><?= $row[2] ?></th>
            <th class="text-center">
              <a href="edit.php?id=<?= $row[0] ?>" class="btn btn-outline-success">Modificar</a>
              
              <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="setDeleteId('<?= $row[0] ?>')">Eliminar</button>

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
                    </div>
                  </div>
                </div>
              </div>

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
<script src="/HINO/JavaScript/linea.js"></script>
<?php
require_once("../head/footer.php");
?>