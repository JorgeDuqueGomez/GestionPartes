<?php
require_once("../head/head.php");
require_once("../../controller/estacionCtrl.php");

$obj = new estacionController();
$user = $obj->show($_GET['id']);

?>
<br>
<h2 class="text-center">MODIFICANDO UNA ESTACION</h2>
<br>
<div class="container">

    <form action="update.php" method="POST" autocomplete="off">

    <div class="mb-3 row">
            <label class="col-sm-2 col-form-label text-center">ID Estacion</label>
            <div class="col-sm-3">
                <input type="text" name="id" class="form-control-plaintext text-center" id="inputPassword" value="<?= $user[0] ?>">
            </div>
        </div>

        <div class="mb-3 row">
            <label class="col-sm-2 col-form-label text-center">Linea</label>
            <div class="col-sm-3">
                <input type="text" name="linea" class="form-control text-center" id="inputPassword" value="<?= $user[1] ?>">
            </div>
        </div>

        <div class="mb-3 row">
            <label class="col-sm-2 col-form-label text-center">Nombre de la estacion</label>
            <div class="col-sm-3">
                <input type="text" name="nombre" class="form-control text-center" id="inputPassword" value="<?= $user[2] ?>">
            </div>
        </div>

        <div class="mb-3 row">
            <label class="col-sm-2 col-form-label text-center">Lateralidad</label>
            <div class="col-sm-3">
                <input type="text" name="lateralidad" class="form-control text-center" id="inputPassword" value="<?= $user[3] ?>">
            </div>
        </div>
        
        <div class="mb-3 row">
            <label class="col-sm-2 col-form-label text-center">Estado</label>
            <div class="col-sm-3">
                <input type="text" name="estado" class="form-control text-center" id="inputPassword" value="<?= $user[4] ?>">
            </div>
        </div>

        <div>
            <input type="submit" class="btn btn-success" value="Actualizar">
            <a class="btn btn-danger" href="./index.php">Cancelar</a>
        </div>

    </form>
</div>









<?php
require_once("../head/footer.php");
?>