<?php
require_once("../head/head.php");
require_once("../../controller/grupoCtrl.php");

$obj = new grupoController();
$user = $obj->show($_GET['id']);
?>
<br>
<h2 class="text-center">MODIFICANDO UNA GRUPO</h2>
<br>
<div class="container">

    <form action="update.php" method="POST" autocomplete="off">

    <div class="mb-3 row">
            <label class="col-sm-2 col-form-label text-center">ID Grupo</label>
            <div class="col-sm-3">
                <input type="text" name="idGrupo" class="form-control-plaintext text-center" id="inputPassword" value="<?= $user[0] ?>">
            </div>
        </div>

        <div class="mb-3 row">
            <label class="col-sm-2 col-form-label text-center">Codigo del grupo</label>
            <div class="col-sm-3">
                <input type="text" name="codigo" class="form-control text-center" id="inputPassword" value="<?= $user[1] ?>">
            </div>
        </div>

        <div class="mb-3 row">
            <label class="col-sm-2 col-form-label text-center">Nombre del grupo</label>
            <div class="col-sm-3">
                <input type="text" name="nombreGrupo" class="form-control text-center" id="inputPassword" value="<?= $user[2] ?>">
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