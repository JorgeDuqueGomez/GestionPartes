<?php
require_once("../head/head.php");
require_once("../../controller/tornilleriaCtrl.php");
$obj =  new tornilleriaController();

$linea = $obj->getLinea();
$modelo = $obj->getModelo();
$sufix = $obj->getSufix();
$lote = $obj->getLote();
$lote2 = $obj->getLote2();
$estacion = $obj->getEstacion();
?>
<br>
<h1 class="text-center"><strong>Generar Alistamiento</strong></h1>
<br>
<div class="d-flex justify-content-center text-center">
  <form action="creat.php" method="POST">
    <div class="d-flex justify-content-center gap-2">
      <div class="col-2 ">
        <select name="nombreSufix" id="nombreSufix1" class="form-select" onchange="generarAlistamiento()">
          <option selected="true" disabled="disabled">Sufix</option>
          <?php foreach ($sufix as $sufixes) : ?>
            <option value="<?= $sufixes['nombreSufix'] ?>"><?= $sufixes['nombreSufix'] ?></option>
          <?php endforeach; ?>
        </select>
      </div>
      <div class="col-2">
        <input class="form-control" type="text" name="lote" id="lote1" placeholder="Lote">
      </div>
      <div class="col-3">
        <select name="nombreLinea" id="nombreLinea1" class="form-select" onchange="generarAlistamiento()">
          <option selected="true" disabled="disabled">Linea</option>
          <?php foreach ($linea as $lineas) : ?>
            <option value="<?= $lineas['nombreLinea'] ?>"><?= $lineas['nombreLinea'] ?></option>
          <?php endforeach; ?>
        </select>
      </div>
      <button type="submit" id="alistamiento" disabled class="btn btn-danger">Generar</button>
    </div>
  </form>
</div>
<br><br>
<h1 class="text-center"><strong>Iniciar Alistamiento</strong></h1>
<br>
<div class="d-flex justify-content-center">
  <form action="alistamiento.php" method="POST">
    <div class="d-flex justify-content-center gap-2">
      <div class="col-3">
        <select name="nombreSufix" id="nombreSufixConsulta2" class="form-select" onchange="iniciarLote(),iniciarAlistamiento()">
          <option selected="true" disabled="disabled">Sufix</option>
          <?php foreach ($sufix as $sufixes) : ?>
            <option value="<?= $sufixes['nombreSufix'] ?>"><?= $sufixes['nombreSufix'] ?></option>
          <?php endforeach; ?>
        </select>
      </div>
      <div class="col-3">
        <select name="lote" id="loteConsulta2" class="form-select" onchange="iniciarAlistamiento(),iniciarSufix()">
          <option selected="true" disabled="disabled">Lote</option>
        </select>
      </div>
      <div class="col-4">
        <select name="nombreLinea" id="lineaConsulta2" class="form-select" onchange="iniciarAlistamiento()">
          <option selected="true" disabled="disabled">Linea</option>
        </select>
      </div>
      <button type="submit" id="iniciar" disabled class="btn btn-primary">Iniciar</button>
    </div>
  </form>
</div>
<br><br>
<h1 class="text-center"><strong>Consultar Alistamientos</strong></h1>
<br>
<div class="d-flex justify-content-center">
  <form action="show.php" method="POST">
    <div class="d-flex justify-content-center gap-2">
      <div class="col-3">
        <select name="nombreSufix" id="nombreSufixConsulta3" class="form-select" onchange="consultarLote(),consultarAlistamientoJS()">
          <option selected="true" disabled="disabled">Sufix</option>
          <?php foreach ($sufix as $sufixes) : ?>
            <option value="<?= $sufixes['nombreSufix'] ?>"><?= $sufixes['nombreSufix'] ?></option>
          <?php endforeach; ?>
        </select>
      </div>
      <div class="col-3">
        <select name="lote" id="loteConsulta3" class="form-select" onchange="consultarAlistamientoJS(),consultarSufix()">
          <option selected="true" disabled="disabled">Lote</option>
        </select>
      </div>
      <div class="col-4">
        <select name="nombreLinea" id="lineaConsulta3" class="form-select" onchange="consultarAlistamientoJS()">
          <option selected="true" disabled="disabled">Linea</option>
        </select>
      </div>
      <button type="submit" id="consulta" disabled class="btn btn-success">Consultar</button>
    </div>
  </form>
</div>

<?php
require_once("../head/footer.php");
?>

<script>

// INICIAR ALISTAMIENTO_________________________________________________

  function iniciarLote() {
    const selectedIdSufix = document.getElementById("nombreSufixConsulta2").value;
    const idLoteDropdown = document.getElementById("loteConsulta2");

    idLoteDropdown.innerHTML = '<option selected="true" disabled="disabled">Lote</option>';

    <?php foreach ($lote as $lotes) : ?>
      if ("<?= $lotes['nombreSufix'] ?>" === selectedIdSufix) {
        const option = document.createElement("option");
        option.value = "<?= $lotes['lote'] ?>";
        option.text = "<?= $lotes['lote'] ?>";
        idLoteDropdown.appendChild(option);
      }
    <?php endforeach; ?>
  }

  function iniciarSufix() {
    const selectedIdSufix = document.getElementById("nombreSufixConsulta2").value;
    const selectedLote = document.getElementById("loteConsulta2").value;
    const Linea = document.getElementById("lineaConsulta2");

    Linea.innerHTML = '<option selected="true" disabled="disabled">Linea</option>';

    <?php foreach ($lote2 as $lotes) : ?>
      if ("<?= $lotes['nombreSufix'] ?>" === selectedIdSufix && "<?= $lotes['lote'] ?>" === selectedLote) {
        const option = document.createElement("option");
        option.value = "<?= $lotes['nombreLinea'] ?>";
        option.text = "<?= $lotes['nombreLinea'] ?>";
        Linea.appendChild(option);
      }
    <?php endforeach; ?>
  }

// CONSULTAR ALISTAMIENTO_________________________________________________

  function consultarLote() {
    const selectedIdSufix = document.getElementById("nombreSufixConsulta3").value;
    const idLoteDropdown = document.getElementById("loteConsulta3");

    idLoteDropdown.innerHTML = '<option selected="true" disabled="disabled">Lote</option>';

    <?php foreach ($lote as $lotes) : ?>
      if ("<?= $lotes['nombreSufix'] ?>" === selectedIdSufix) {
        const option = document.createElement("option");
        option.value = "<?= $lotes['lote'] ?>";
        option.text = "<?= $lotes['lote'] ?>";
        idLoteDropdown.appendChild(option);
      }
    <?php endforeach; ?>
  }

  function consultarSufix() {
    const selectedIdSufix = document.getElementById("nombreSufixConsulta3").value;
    const selectedLote = document.getElementById("loteConsulta3").value;
    const Linea = document.getElementById("lineaConsulta3");

    Linea.innerHTML = '<option selected="true" disabled="disabled">Linea</option>';

    <?php foreach ($lote2 as $lotes) : ?>
      if ("<?= $lotes['nombreSufix'] ?>" === selectedIdSufix && "<?= $lotes['lote'] ?>" === selectedLote) {
        const option = document.createElement("option");
        option.value = "<?= $lotes['nombreLinea'] ?>";
        option.text = "<?= $lotes['nombreLinea'] ?>";
        Linea.appendChild(option);
      }
    <?php endforeach; ?>
  }
</script>