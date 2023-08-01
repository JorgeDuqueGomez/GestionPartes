<?php
require_once("../head/head.php");
require_once("../../controller/estacionCtrl.php");

$obj = new estacionController();
$estacion = $obj->show($_GET['id']);
$estado = $obj->getEstado();
$linea = $obj->getLinea();

?>
<br>
<h2 class="text-center"><strong>MODIFICAR ESTACION</strong></h2>
<br>

<div class="container">
    <form action="update.php" method="POST" autocomplete="off" class="row justify-content-center mx-auto col-xxl-4 col-xl-6 col-md-8 col-sm-10" style="max-width: 80%;">

        <div class="row">
            <input type="hidden" name="idEstacion" class="form-control-plaintext text-center" id="inputPassword" value="<?= $estacion['idEstacion'] ?>">
        </div>

        <div class="mb-3 col-md-12">
            <label class="form-label">Linea actual</label>
            <select name="idLinea" id="inputPassword" class="form-select">
                <option selected="true" value="<?= $estacion['idLinea'] ?>"><?= $estacion['nombreLinea'] ?></option>
                <?php foreach ($linea as $lineas) : ?>
                    <option value="<?= $lineas['idLinea'] ?>"><?= $lineas['nombreLinea'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="mb-2 col-md-12">
            <label class="form-label">Nombre de la estación</label>
            <input type="text" name="nombreEstacion" required id="example" class="form-control" value="<?= $estacion['nombreEstacion'] ?>">
        </div>

        <div class="mb-4 col-md-12">
            <label class="col-form-label text-start">Estado</label>
            <select name="idEstado" id="inputPassword" class="form-select" required>
            <option selected="true" value="<?= $estacion['idEstado'] ?>">Estado actual <?= $estacion['nombreEstado'] ?></option>
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