<?php
require_once("../head/head.php");
require_once("../../controller/grupoCtrl.php");

$obj = new grupoController();
$grupo = $obj->show($_GET['id']);
?>
<br>
<h2 class="text-center"><strong>MODIFICAR GRUPO</strong></h2>
<br>

<div class="container">
    <form action="update.php" method="POST" autocomplete="off" class="row justify-content-center mx-auto col-xxl-4 col-xl-6 col-md-8 col-sm-10" style="max-width: 80%;">

    <div class="row">
            <label class="col-form-label text-center">ID Grupo</label>
            <input type="text" name="idLinea" class="form-control-plaintext text-center" id="inputPassword" value="<?= $grupo[0] ?>">
        </div>

        <div class="mb-3 row">
            <label class="col-form-label text-start">Codigo del grupo</label>
            <input type="text" name="nombreLinea" class="form-control text-start" id="inputPassword" value="<?= $grupo[1] ?>">
        </div>

        <div class="mb-3 row">
            <label class="col-form-label text-start">Nombre del grupo</label>
            <input type="text" name="nombreLinea" class="form-control text-start" id="inputPassword" value="<?= $grupo[2] ?>">
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