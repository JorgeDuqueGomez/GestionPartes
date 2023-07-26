<?php
require_once("../head/head.php");
require_once("../../controller/novedadesCtrl.php");

$obj =  new novedadesController();
$parte = $obj->showParte();
?>
<br>
<h2 class="text-center"><strong>AGREGAR UN NUEVO LISTADO</strong></h2>
<br>
<div class="container">
  <form action="store.php" method="POST" autocomplete="off" class="row justify-content-center mx-auto col-xxl-4 col-xl-6 col-md-8 col-sm-10" style="max-width: 80%;">

    <div class="mb-3 col-sm-12">
      <label class="form-label">Módulo</label>
      <input type="text" name="modulo" required class="form-control" placeholder="Los modulos se designan con letras del alfabeto ej. (A, B, BA, CA)">
    </div>

    <div class="mb-4 col-sm-12">
      <label class="form-label">Posición</label>
      <input type="text" name="posicion" required class="form-control" placeholder="Las posiciones son del 1-30">
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