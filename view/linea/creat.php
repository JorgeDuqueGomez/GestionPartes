<?php
require_once("../head/head.php");
require_once("../../controller/lineaCtrl.php");

$obj =  new lineaController();
$rows = $obj->showEstado();
?>
<br>
<h2 class="text-center">AGREGAR UNA LINEA</h2>
<br>
<div class="container">
  <form action="store.php" method="POST" autocomplete="off">

    <div class="mb-3 col-sm-4">
      <label class="form-label">Nombre de la linea</label>
      <input type="text" name="nombreLinea" required class="form-control" id="example">
    </div>

    <div class="mb-3 col-sm-4">
      <label class="form-label">Estado</label>
    <input type="text" name="idEstado" required class="form-control" id="example">
    </div>

    <button type="submit" class="btn btn-primary">Crear</button>
    <a class="btn btn-danger" href="./index.php">Cancelar</a>
  </form>
</div>
<?php
require_once("../head/footer.php");
?>

<select name="" id=""></select>