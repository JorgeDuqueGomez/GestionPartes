<?php
require_once("../head/head.php");
require_once("../../controller/lateralidadCtrl.php");

$obj = new lateralidadController();
$lateralidad = $obj->show($_GET['id']);
?>
<br>
<h2 class="text-center"><strong>MODIFICAR LATERALIDAD</strong></h2>
<br>

<div class="container">
    <form action="update.php" method="POST" autocomplete="off" class="row justify-content-center mx-auto col-xxl-4 col-xl-6 col-md-8 col-sm-10" style="max-width: 80%;">
        <div class="row">
            <label class="col-form-label text-center">ID Lateralidad</label>
            <input type="text" name="idLateralidad" class="form-control-plaintext text-center" id="inputPassword" value="<?= $lateralidad[0] ?>">
        </div>

        <div class="mb-3 row">
            <label class="col-form-label text-start">Nombre lateralidad</label>
            <input type="text" name="nombreLateralidad" class="form-control text-start" id="inputPassword" value="<?= $lateralidad[1] ?>">
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