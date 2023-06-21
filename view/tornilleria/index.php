<?php
require_once("../head/head.php");
require_once("../../controller/tornilleriaCtrl.php");
$obj =  new tornilleriaController();

$linea = $obj->getLinea();
$modelo = $obj->getModelo();
$sufix = $obj->getSufix();
$lote = $obj->getLote();
$estacion = $obj->getEstacion();
?>
<br>
<h1 class="text-center"><strong>Alistamiento de tornilleria</strong></h1>
<br>
<form action="consulta.php" method="POST">
  <div class="d-flex justify-content-center">
    <div>
      <select name="idModelo" id="idModelo" class="form-select" onclick="alertselectAlistamientoPc()">
        <option selected="true" disabled="disabled">Modelo</option>
        <?php foreach ($modelo as $modelos) : ?>
          <option value="<?= $modelos['idModelo'] ?>"><?= $modelos['nombreModelo'] ?></option>
        <?php endforeach; ?>
      </select>
    </div>
    &nbsp;&nbsp;
    <div>
      <select name="idSufix" id="idSufix" class="form-select" onclick="alertselectAlistamientoPc()">
        <option selected="true" disabled="disabled">Sufix</option>
        <?php foreach ($sufix as $sufixes) : ?>
          <option value="<?= $sufixes['idSufix'] ?>"><?= $sufixes['nombreSufix'] ?></option>
        <?php endforeach; ?>
      </select>
    </div>
    &nbsp;&nbsp;
    <div>
      <select name="idLote" id="idLote" class="form-select" onclick="alertselectAlistamientoPc()">
        <option selected="true" disabled="disabled">Lote</option>
        <?php foreach ($lote as $lotes) : ?>
          <option value="<?= $lotes['idLote'] ?>"><?= $lotes['lote'] ?></option>
        <?php endforeach; ?>
      </select>
    </div>
    &nbsp;&nbsp;
    <div>
      <select name="idLinea" id="idLinea" class="form-select" onclick="alertselectAlistamientoPc()">
        <option selected="true" disabled="disabled">Linea</option>
        <?php foreach ($linea as $lineas) : ?>
          <option value="<?= $lineas['idLinea'] ?>"><?= $lineas['nombreLinea'] ?></option>
        <?php endforeach; ?>
      </select>
    </div>
    &nbsp;&nbsp;
    <button type="submit" id="consulta" disabled class="btn btn-primary">Consultar</button>
  </div>
</form>
<?php
require_once("../head/footer.php");
?>