<?php
require_once("../head/head.php");
require_once("../../controller/lineaCtrl.php");

$obj =  new lineaController();
$rows = $obj->showEstado();
$estado = $obj->getEstado();

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
      <select name="idEstado" class="form-control text-center" id="inputPassword">
         <?php foreach ($estado as $estados) : ?>
           <option value="<?= $estados['idEstado'] ?>"><?= $estados['nombreEstado'] ?></option>
         <?php endforeach; ?>
      </select>
    </div>

    <button type="submit" class="btn btn-primary">Crear</button>
    <a class="btn btn-danger" href="./index.php">Cancelar</a>
  </form>
</div>
<?php
require_once("../head/footer.php");
?>
