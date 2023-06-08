<?php
require_once("../head/head.php");
require_once("../../controller/sufixCtrl.php");

$obj =  new sufixController();
$serie = $obj->getSerie();
$familia = $obj->getFamilia();
$modelo = $obj->getModelo();
$destino = $obj->getDestino();

?>
<br>
<h2 class="text-center"><strong>AGREGAR SUFIX</strong></h2>
<br>
<div class="container">
  <form action="store.php" method="POST" autocomplete="off" class="row justify-content-center mx-auto col-xxl-4 col-xl-6 col-md-8 col-sm-10" style="max-width: 80%;">

    <div class="mb-2 col-md-12">
      <label class="form-label">Serie</label>
      <select name="idSerie" id="idSerie" class="form-select" required onclick="alertaSufix()">
        <option  selected="true" disabled="disabled">Seleccione una serie</option>
        <?php foreach ($serie as $series) : ?>
          <option value="<?= $series['idSerie'] ?>">Serie <?= $series['nombreSerie'] ?></option>
        <?php endforeach; ?>
      </select>
    </div>

    <div class="mb-2 col-md-12">
      <label class="form-label">Familia</label>
      <select name="nombreFamilia" id="nombreFamilia" class="form-select" required onclick="alertaSufix()">
        <option  selected="true" disabled="disabled"  >Seleccione una familia</option>
        <?php foreach ($familia as $familias) : ?>
          <option value="<?= $familias['idFamilia'] ?>"><?= $familias['nombreFamilia'] ?></option>
        <?php endforeach; ?>
      </select>
    </div>

    <div class="mb-2 col-md-12">
      <label class="form-label">Modelo</label>
      <select name="nombreModelo" id="nombreModelo" class="form-select" required onclick="alertaSufix()">
        <option  selected="true" disabled="disabled"  >Seleccione un modelo</option>
        <?php foreach ($modelo as $modelos) : ?>
          <option value="<?= $modelos['idModelo'] ?>"><?= $modelos['nombreModelo'] ?></option>
        <?php endforeach; ?>
      </select>
    </div>

    <div class="mb-2 col-md-12">
      <label class="form-label">Nombre del proyecto</label>
      <input type="text" name="nombreProyecto" required id="nombreProyecto" class="form-control" placeholder="" onchange="alertaSufix()">
    </div>
    
    <div class="mb-2 col-md-12">
      <label class="form-label">Nombre del sufix</label>
      <input type="text" name="nombreSufix" required id="nombreSufix" class="form-control" placeholder="Ingrese unicamente 2 caracteres" onchange="alertaSufix()">
    </div>
    
    <div class="mb-2 col-md-12">
      <label class="form-label">Codigo del modelo</label>
      <input type="text" name="codigoModelo" required id="codigoModelo" class="form-control" placeholder="" onchange="alertaSufix()">
    </div>

    <div class="mb-4 col-md-12">
      <label class="form-label">Destino</label>
      <select name="idDestino" id="idDestino" class="form-select" required onclick="alertaSufix()">
        <option selected="true" disabled="disabled">Seleccione el destino</option>
        <?php foreach ($destino as $destinos) : ?>
          <option value="<?= $destinos['idDestino'] ?>"><?= $destinos['nombreDestino'] ?></option>
        <?php endforeach; ?>
      </select>
    </div>

    <div class="mb-5 col-md-12 d-flex justify-content-center gap-3">
      <button class="btn btn-outline-success" disabled id="agregar" type="submit">Agregar</button>
      <a href="./index.php" class="btn btn-outline-danger">Cancelar</a>
    </div>

  </form>
</div>

<?php
require_once("../head/footer.php");
?>

