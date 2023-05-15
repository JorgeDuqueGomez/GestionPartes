<?php
require_once("../head/head.php");
require_once("../../controller/estacionCtrl.php");

$obj =  new estacionController();
$rows = $obj->showEstado();
$linea = $obj->getLinea();
$lat = $obj->getLateralidad();


?>
<br>
<h2 class="text-center"><strong>AGREGAR ESTACIÓN</strong></h2>
<br>
<div class="container">
  <form action="store.php" method="POST" autocomplete="off" class="row justify-content-center mx-auto col-xxl-4 col-xl-6 col-md-8 col-sm-10" style="max-width: 80%;">

    <div class="mb-4 col-md-12">
      <label class="form-label">Linea</label>
      <select name="idLinea" id="inputPassword" class="form-select" required>
        <option selected="true" disabled="disabled">Seleccione una linea</option>
        <?php foreach ($linea as $lineas) : ?>
          <option value="<?= $lineas['idLinea'] ?>"><?= $lineas['nombreLinea'] ?></option>
        <?php endforeach; ?>
      </select>
    </div>

    <div class="mb-3 col-md-12">
      <label class="form-label">Nombre de la estación</label>
      <input type="text" name="nombreEstacion" required id="example" class="form-control">
    </div>

    <div class="mb-4 col-md-12">
      <label class="form-label">Lateralidad</label>
      <select name="idLateralidad" id="inputPassword" class="form-select" required>
        <option selected="true" disabled="disabled">Seleccione una lateralidad</option>
        <?php foreach ($lat as $lateralidades) : ?>
          <option value="<?= $lateralidades['idLateralidad'] ?>"><?= $lateralidades['nombreLateralidad'] ?></option>
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