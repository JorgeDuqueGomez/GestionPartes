<?php
require_once("../head/head.php");
require_once("../../controller/sufixCtrl.php");

$obj = new sufixController();
$general = $obj->show($_GET['id']);
$serie = $obj->getSerie();
$familia = $obj->getFamilia();
$modelo = $obj->getModelo();
$destino = $obj->getDestino();
$estado = $obj->getEstado();
?>
<br>
<h2 class="text-center"><strong>MODIFICAR SUFIX</strong></h2>
<br>

<div class="container">
    <form action="update.php" method="POST" autocomplete="off" class="row justify-content-center mx-auto col-xxl-4 col-xl-6 col-md-8 col-sm-10" style="max-width: 65%;">

        <div class="mb-3 row">
            <label class="col-form-label text-center">ID Sufix</label>
            <input type="text" name="idSufix" class="form-control-plaintext text-center" id="inputPassword" value="<?= $general[13] ?>">
        </div>

        <div class="mb-4 col-md-12">
            <label class="form-label">Familia</label>
            <select name="idFamilia" id="inputPassword" class="form-select" required>
                <option selected="true" value="<?= $general[2] ?>"><?= $general[3] ?></option>
                <?php foreach ($familia as $familias) : ?>
                    <option value="<?= $familias['idFamilia'] ?>"><?= $familias['nombreFamilia'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="mb-4 col-md-12">
            <label class="form-label">Modelo</label>
            <select name="idModelo" id="inputPassword" class="form-select" required>
                <option selected="true" value="<?= $general[4] ?>"><?= $general[5] ?></option>
                <?php foreach ($modelo as $modelos) : ?>
                    <option value="<?= $modelos['idModelo'] ?>"><?= $modelos['nombreModelo'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="mb-2 col-md-12">
            <label class="form-label">Proyecto</label>
            <input type="text" name="proyecto" required id="example" class="form-control" value="<?= $general[6] ?>">
        </div>

        <div class="mb-2 col-md-12">
            <label class="form-label">Nombre del sufix</label>
            <input type="text" name="nombreSufix" required id="example" class="form-control" value="<?= $general[7] ?>">
        </div>

        <div class="mb-2 col-md-12">
            <label class="form-label">Codigo del modelo</label>
            <input type="text" name="codigoModelo" required id="example" class="form-control" value="<?= $general[8] ?>">
        </div>

        <div class="mb-2 col-md-12">
            <label class="form-label">Destino</label>
            <select name="idDestino" id="inputPassword" class="form-select" required>
                <option selected="true" value="<?= $general[9] ?>"><?= $general[10] ?></option>
                <?php foreach ($destino as $destinos) : ?>
                    <option value="<?= $destinos['idDestino'] ?>"><?= $destinos['nombreDestino'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="mb-4 col-md-12">
            <label class="form-label">Estado</label>
            <select name="idEstado" id="inputPassword" class="form-select" required>
                <option selected="true" value="<?= $general[11] ?>">Estado actual <?= $general[12] ?></option>
                <?php foreach ($estado as $estados) : ?>
                    <option value="<?= $estados['idEstado'] ?>"><?= $estados['accion'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="mb-5 col-md-12 d-flex justify-content-center gap-3">
            <button class="btn btn-outline-success" type="submit">Actualizar</button>
            <a href="./index.php" class="btn btn-outline-danger">Cancelar</a>
        </div>
    </form>
</div>









<?php
require_once("../head/footer.php");
?>