<?php
require_once("../head/head.php");
require_once("../../controller/lineaCtrl.php");

$obj =  new lineaController();
$rows = $obj->showEstado();
$estado = $obj->getEstado();

?>
<br>
<h2 class="text-center"><strong>AGREGAR UNA LINEA</strong></h2>
<br>
<div class="container">
  <form action="store.php" method="POST" autocomplete="off" class="row justify-content-center mx-auto col-xxl-4 col-xl-6 col-md-8 col-sm-10" style="max-width: 80%;">
    <div class="mb-3 col-md-12">
      <label class="form-label">Nombre de la linea</label>
      <input type="text" name="nombreLinea" required id="example" class="form-control">
    </div>
    <div class="mb-4 col-md-12">
      <label class="form-label">Estado</label>
      <select required name="idEstado" id="inputPassword" class="form-select">
        <option selected="true" disabled>Seleccione un estado</option>
        <?php foreach ($estado as $estados) : ?>
          <option value="<?= $estados['idEstado'] ?>"><?= $estados['nombreEstado'] ?></option>
        <?php endforeach; ?>
      </select>
    </div>
    <div class="col-md-12 d-flex justify-content-center gap-3">
      <button class="btn btn-outline-success" type="submit">Agregar</button>
      <a href="./index.php" class="btn btn-outline-danger">Cancelar</a>
    </div>
  </form>
</div>

<?php
require_once("../head/footer.php");
?>