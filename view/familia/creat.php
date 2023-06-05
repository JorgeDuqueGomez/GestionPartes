<?php
require_once("../head/head.php");
require_once("../../controller/familiaCtrl.php");
$obj =  new familiaController();
?>
<br>
<h2 class="text-center"><strong>AGREGAR FAMILIA</strong></h2>
<br>
<div class="container">
  <form action="store.php" method="POST" autocomplete="off" class="row justify-content-center mx-auto col-xxl-4 col-xl-6 col-md-8 col-sm-10" style="max-width: 80%;">

    <div class="mb-3 col-md-12">
      <label class="form-label">Nombre de la familia</label>
      <input type="text" name="nombreFamilia" required id="nombreFamilia" class="form-control" placeholder="Ingrese una nueva familia">
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

