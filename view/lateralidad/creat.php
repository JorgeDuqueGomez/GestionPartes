<?php
require_once("../head/head.php");
require_once("../../controller/lateralidadCtrl.php");

$obj =  new lateralidadController();

?>
<br>
<h2 class="text-center"><strong>AGREGAR LATERALIDAD</strong></h2>
<br>
<div class="container">
  <form action="store.php" method="POST" autocomplete="off" class="row justify-content-center mx-auto col-xxl-4 col-xl-6 col-md-8 col-sm-10" style="max-width: 80%;">

    <div class="mb-3 col-md-12">
      <label class="form-label">Nombre de la lateralidad</label>
      <input type="text" name="nombreLateralidad" required id="example" class="form-control">
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