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
            <input type="hidden" name="idGrupo" class="form-control-plaintext text-center" id="inputPassword" value="<?= $grupo['idGrupo'] ?>">
        </div>

        <div class="mb-3 row">
            <label class="col-form-label text-start">Codigo del grupo</label>
            <input type="text" name="codigo" class="form-control text-start" id="inputPassword" value="<?= $grupo['codigo'] ?>">
        </div>

        <div class="mb-4 row">
            <label class="col-form-label text-start">Nombre del grupo</label>
            <input type="text" name="nombreGrupo" class="form-control text-start" id="inputPassword" value="<?= $grupo['nombreGrupo'] ?>">
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