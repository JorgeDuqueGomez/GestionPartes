<?php
require_once("../head/head.php");
require_once("../../controller/modeloCtrl.php");
$obj =  new modeloController();
?>
<br>
<h2 class="text-center"><strong>AGREGAR MODELO</strong></h2>
<br>
<div class="container">
  <form action="store.php" method="POST" autocomplete="off" class="row justify-content-center mx-auto col-xxl-4 col-xl-6 col-md-8 col-sm-10" style="max-width: 80%;">

    <div class="mb-3 col-md-12">
      <label class="form-label">Nombre del modelo</label>
      <input type="text" name="nombreModelo" required id="nombreModelo" class="form-control" placeholder="Ingrese un nuevo modelo">
    </div>

    <div class="col-md-12 d-flex justify-content-center gap-3">
      <button class="btn btn-outline-success" id="agregar" type="submit">Agregar</button>
      <a href="./index.php" class="btn btn-outline-danger">Cancelar</a>
    </div>

  </form>
</div>

<?php
require_once("../head/footer.php");
?>

