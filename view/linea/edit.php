<?php
require_once("../head/head.php");
require_once("../../controller/lineaCtrl.php");

$obj = new lineaController();
$linea = $obj->show($_GET['id']);
$estado = $obj->getEstado();
?>
<br>
<h2 class="text-center"><strong>MODIFICAR LINEA</strong></h2>
<br>

<div class="container">
    <form action="update.php" method="POST" autocomplete="off" class="row justify-content-center mx-auto col-xxl-4 col-xl-6 col-md-8 col-sm-10" style="max-width: 80%;">

        <div class="row">
            <input type="hidden" name="idLinea" class="form-control-plaintext text-center" id="inputPassword" value="<?= $linea['idLinea'] ?>">
        </div>

        <div class="mb-2 col-md-12">
            <label class="form-label">Nombre de la linea</label>
            <input type="text" name="nombreLinea" required id="example" class="form-control" value="<?= $linea['nombreLinea'] ?>">
        </div>

        <div class="mb-4 col-md-12">
            <label class="col-form-label text-start">Estado</label>
            <select name="idEstado" id="inputPassword" class="form-select" required>
            <option selected="true" value="<?= $linea['idEstado'] ?>">Estado actual <?= $linea['nombreEstado'] ?></option>
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