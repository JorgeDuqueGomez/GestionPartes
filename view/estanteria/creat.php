<?php
require_once("../head/head.php");
require_once("../../controller/estanteriaCtrl.php");

$obj =  new estanteriaController();
$parte = $obj->showParte();
$linea = $obj->getLinea();
?>
<br>
<h2 class="text-center"><strong>AGREGAR NUEVA UBICACIÓN</strong></h2>
<br>
<div class="container">
  <form action="store.php" method="POST" autocomplete="off" class="row justify-content-center mx-auto col-xxl-4 col-xl-6 col-md-8 col-sm-10" style="max-width: 80%;">

    <div class="mb-3 col-sm-12">
      <label class="form-label">Módulo</label>
      <input type="text" name="modulo" id="modulo" required class="form-control" placeholder="Los modulos se designan con letras del alfabeto ej. (A, B, BA, CA)" oninput="restrictInput(this)" maxlength="2" onchange="alertaEstanteria()">
    </div>

    <div class="mb-3 col-sm-12">
      <label class="form-label">Posición</label>
      <input id="posicion" type="number" max="30" min="1" name="posicion" required class="form-control" placeholder="Las posiciones son del 1-30" onchange="alertaEstanteria(),cantidad()" >
    </div>

    <div class="mb-4 col-md-12">
      <label class="form-label">Linea</label>
      <select name="idLinea" id="idLinea" class="form-select" onclick="alertaEstanteria()">
        <option  selected="true">Seleccione una linea</option>
        <?php foreach ($linea as $lineas) : ?>
          <option value="<?= $lineas['idLinea'] ?>"><?= $lineas['nombreLinea'] ?></option>
        <?php endforeach; ?>
      </select>
    </div>

    <div class="col-md-12 d-flex justify-content-center gap-3">
      <button class="btn btn-outline-success" id="agregar" disabled type="submit">Agregar</button>
      <a href="./index.php" class="btn btn-outline-danger">Cancelar</a>
    </div>

  </form>
</div>
<?php
require_once("../head/footer.php");
?>