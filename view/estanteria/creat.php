<?php
require_once("../head/head.php");
require_once("../../controller/estanteriaCtrl.php");

$obj =  new estanteriaController();
$parte = $obj->showParte();
?>
<br>
<h2 class="text-center"><strong>ASIGNAR UBICACÍON</strong></h2>
<br>
<div class="container">
  <form action="store.php" method="POST" autocomplete="off" class="row justify-content-center mx-auto col-xxl-4 col-xl-6 col-md-8 col-sm-10" style="max-width: 80%;">

    <div class="mb-4 col-md-12">
      <label class="form-label">Numero de parte</label>
      <select name="idParte" id="inputPassword" class="form-select" required>
        <option selected="true" disabled="disabled">Seleccione una parte</option>
        <?php foreach ($parte as $partes) : ?>
          <option value="<?= $partes['idParte'] ?>"><?= $partes['numeroParte'] ?> - <?= $partes['nombreParte'] ?></option>
        <?php endforeach; ?>
      </select>
    </div>

    <div class="mb-3 col-sm-12">
      <label class="form-label">Módulo</label>
      <input type="text" name="modulo" required class="form-control" id="example">
    </div>
    
    <div class="mb-3 col-sm-12">
      <label class="form-label">Posición</label>
      <input type="text" name="posicion" required class="form-control" id="example">
    </div>
    
    <div class="mb-3 col-sm-12">
      <label class="form-label">Orden de alistamiento</label>
      <input type="text" name="orden" required class="form-control" id="example">
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