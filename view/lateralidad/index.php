<?php
require_once("../head/head.php");
require_once("../../controller/lateralidadCtrl.php");
$obj =  new lateralidadController();
$rows = $obj->index();
?> 
<br> 
<h1 class="text-center">LATERALIDADES</h1>
<br>

<div class="container">
  <a href="./creat.php">
    <button type="button" class="btn btn-outline-primary">Agregar nueva lateralidad</button>
  </a>
  <br>
  <br>
  <table class="table table-bordered">
    <thead class="table-light">
      <tr>
        <th class="text-center" scope="col">Nombre</th>
        <th class="text-center" scope="col">Acciones</th>
      </tr>
    </thead>

    <tbody>
      <?php if ($rows) : ?>
        <?php foreach ($rows as $row) : ?>
          <tr>

            <th class="text-center"><?= $row[1] ?></th>
            <th class="text-center">
              <a href="edit.php?id=<?= $row[0] ?>" class="btn btn-success">Modificar</a>
              <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Eliminar</a>
              <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">¿Desea eliminar el registro?</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      Una vez eliminado no podra recuperar el registro.
                    </div>
                    <div class="modal-footer">
                      <a href="delete.php?id=<?= $row[0] ?>" class="btn btn-danger">Eliminar</a>
                      <button type="button" class="btn btn-success" data-bs-dismiss="modal">Cancelar</button>
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

<?php
require_once("../head/footer.php");
?>