<?php
require_once("../head/head.php");
require_once("../../controller/familiaCtrl.php");

$obj = new familiaController();
$familia = $obj->show($_GET['id']);
?>
<br>
<h2 class="text-center"><strong>MODIFICAR FAMILIA</strong></h2>
<br>

<div class="container">
    <form action="update.php" method="POST" autocomplete="off" class="row justify-content-center mx-auto col-xxl-4 col-xl-6 col-md-8 col-sm-10" style="max-width: 80%;">

        <div class="row">
            <input type="hidden" name="idFamilia" class="form-control-plaintext text-center" id="inputPassword" value="<?= $familia['idFamilia'] ?>">
        </div>

        <div class="mb-4 col-md-12">
            <label class="form-label">Nombre actual de la familia</label>
            <input type="text" name="nombreFamilia" required id="example" class="form-control" value="<?= $familia['nombreFamilia'] ?>">
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