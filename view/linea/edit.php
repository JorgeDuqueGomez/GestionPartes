<?php
require_once("../head/head.php");
require_once("../../controller/lineaCtrl.php");

$obj = new lineaController();
$linea = $obj->show($_GET['id']);
$estado = $obj->getEstado();

?>
<br>
<h2 class="text-center"><strong>MODIFICAR UNA LINEA</strong></h2>
<br>

<div class="container">
    <form action="update.php" method="POST" autocomplete="off" class="row justify-content-center mx-auto col-xxl-4 col-xl-6 col-md-8 col-sm-10" style="max-width: 80%;">
        <div class="row">
            <label class="col-form-label text-center">ID Linea</label>
            <input type="text" name="idLinea" class="form-control-plaintext text-center" id="inputPassword" value="<?= $linea[0] ?>">
        </div>

        <div class="mb-3 row">
            <label class="col-form-label text-start">Nombre linea</label>
            <input type="text" name="nombreLinea" class="form-control text-start" id="inputPassword" value="<?= $linea[1] ?>">

        </div>
        <div class="mb-4 row">
            <label class="col-form-label text-start">Estado</label>
            <select name="idEstado" id="inputPassword" class="form-select">
                <option value="<?= $linea[3] ?>">Estado actual <?= $linea[2] ?></option>
                <?php foreach ($estado as $estados) : ?>
                    <option value="<?= $estados['idEstado'] ?>"><?= $estados['accion'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="col-md-12 d-flex justify-content-center gap-3">
            <button class="btn btn-outline-success" type="submit">Actualizar</button>
            <a href="./index.php" class="btn btn-outline-danger">Cancelar</a>
        </div>

    </form>
</div>









<?php
require_once("../head/footer.php");
?>