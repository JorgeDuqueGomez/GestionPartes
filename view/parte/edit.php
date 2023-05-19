<?php
require_once("../head/head.php");
require_once("../../controller/parteCtrl.php");

$obj = new parteController();
$general = $obj->show($_GET['id']);
?>
<br>
<h2 class="text-center"><strong>MODIFICAR PARTE</strong></h2>
<br>

<div class="container">
    <form action="update.php" method="POST" autocomplete="off" class="row justify-content-center mx-auto col-xxl-4 col-xl-6 col-md-8 col-sm-10" style="max-width: 65%;">

        <div class="mb-3 row">
            <label class="col-form-label text-center">ID Parte</label>
            <input type="text" name="idParte" class="form-control-plaintext text-center" id="inputPassword" value="<?= $general[0] ?>">
        </div>

        <div class="mb-2 col-md-12">
            <label class="form-label">Descripción de la parte</label>
            <input type="text" name="nombreParte" required id="example" class="form-control" value="<?= $general[1] ?>">
        </div>

        <div class="mb-4 col-md-12">
            <label class="form-label">Numero de parte</label>
            <input type="text" name="numeroParte" required id="example" class="form-control" value="<?= $general[2] ?>">
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