<?php
require_once("../head/head.php");
require_once("../../controller/lateralidadCtrl.php");

$obj = new lateralidadController();
$user = $obj->show($_GET['id']);
?>
<br>
<h2 class="text-center">MODIFICANDO UNA LATERALIDAD</h2>
<br>
<div class="container">

    <form action="update.php" method="POST" autocomplete="off">

        <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label text-center">ID Lateralidad</label>
            <div class="col-sm-3">
                <input class="form-control-plaintext text-center" type="text" name="idLateralidad" id="inputPassword" value="<?= $user[0] ?>">
            </div>
        </div>

        <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label text-center">Nuevo nombre</label>
            <div class="col-sm-3">
                <input type="text" name="nombre" class="form-control text-center" id="inputPassword" value="<?= $user[1] ?>">
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