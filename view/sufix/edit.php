<?php
require_once("../head/head.php");
require_once("../../controller/sufixCtrl.php");

$obj = new sufixController();
$sufix = $obj->show($_GET['id']);
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
    <form action="update.php" method="POST" autocomplete="off" class="row justify-content-center mx-auto col-xxl-4 col-xl-6 col-md-8 col-sm-10" style="max-width: 80%;">

        <div class="row">
            <input type="hidden" name="idSufix" class="form-control-plaintext text-center" value="<?= $sufix['idSufix'] ?>">
        </div>

        <div class="mb-2 col-md-12">
            <label class="form-label">Serie actual</label>
            <select name="idSerie" class="form-select" required>
                <option selected="true" value="<?= $sufix['idSerie']?>">Serie <?= $sufix['nombreSerie']?></option>
                <?php foreach ($serie as $series) : ?>
                    <option value="<?= $series['idSerie'] ?>">Serie <?= $series['nombreSerie'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="mb-2 col-md-12">
            <label class="form-label">Familia actual</label>
            <select name="idFamilia" class="form-select" required>
                <option selected="true" value="<?= $sufix['idFamilia'] ?>"><?= $sufix['nombreFamilia'] ?></option>
                <?php foreach ($familia as $familias) : ?>
                    <option value="<?= $familias['idFamilia'] ?>"><?= $familias['nombreFamilia'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="mb-2 col-md-12">
            <label class="form-label">Modelo actual</label>
            <select name="idModelo" class="form-select" required>
                <option selected="true" value="<?= $sufix['idModelo'] ?>"><?= $sufix['nombreModelo'] ?></option>
                <?php foreach ($modelo as $modelos) : ?>
                    <option value="<?= $modelos['idModelo'] ?>"><?= $modelos['nombreModelo'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="mb-2 col-md-12">
            <label class="form-label">Nombre del proyecto</label>
            <input type="text" name="proyecto" required class="form-control" value="<?=$sufix['proyecto']?>">
        </div>

        <div class="mb-2 col-md-12">
            <label class="form-label">Nombre del sufix</label>
            <input type="text" name="nombreSufix" required class="form-control" value="<?=$sufix['nombreSufix']?>">
        </div>

        <div class="mb-2 col-md-12">
            <label class="form-label">Codigo del modelo</label>
            <input type="text" name="codigoModelo" required class="form-control" value="<?=$sufix['codigoModelo']?>">
        </div>

        <div class="mb-2 col-md-12">
            <label class="form-label">Destino actual</label>
            <select name="idDestino" class="form-select" required>
                <option selected="true" value="<?=$sufix['idDestino']?>"><?=$sufix['nombreDestino']?></option>
                <?php foreach ($destino as $destinos) : ?>
                    <option value="<?= $destinos['idDestino'] ?>"><?= $destinos['nombreDestino'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        
        <div class="mb-4 col-md-12">
            <label class="form-label">Estado actual</label>
            <select name="idEstado" class="form-select" required>
                <option selected="true" value="<?= $sufix['idEstado'] ?>"><?= $sufix['nombreEstado'] ?></option>
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