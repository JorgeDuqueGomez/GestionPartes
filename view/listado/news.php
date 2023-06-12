<?php
require_once("../head/head.php");
require_once("../../controller/listadoCtrl.php");

$obj = new listadoController();
$general = $obj->show($_GET['id']);
$parte = $obj->showParte();


?>

<br>
<h2 class="text-center"><strong>MODIFICAR LISTADO</strong></h2>
<br>
<div class="container">
    <form action="update.php" method="POST" autocomplete="off" class="row justify-content-center mx-auto col-xxl-4 col-xl-6 col-md-8 col-sm-10" style="max-width: 80%;">

        <div class="row">
            <input type="hidden" name="idEstanteria" class="form-control-plaintext text-center" id="inputPassword" value="<?= $general['idEstanteria'] ?>">
        </div>

        <div class="row">
            <label class="col-form-label text-center">UBICACIÓN</label>
            <input type="text" name="idLateralidad" class="form-control-plaintext text-center" id="inputPassword" value="<?= $general['modulo'] ?> - <?= $general['posicion'] ?>">
        </div>

        <div class="mb-4 col-md-12">
            <label class="form-label">Numero de parte</label>
            <select name="idParte" id="inputPassword" class="form-select" required>
                <option selected="true" disabled="disabled">Asignar una parte</option>
                <?php foreach ($parte as $partes) : ?>
                    <option value="<?= $partes['idParte'] ?>"><?= $partes['numeroParte'] ?> - <?= $partes['nombreParte'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="mb-5 col-md-12 d-flex justify-content-center gap-3">
            <button class="btn btn-outline-success" type="submit">Actualizar</button>
            <a href="./show.php" class="btn btn-outline-danger">Cancelar</a>
        </div>

    </form>
</div>









<?php
require_once("../head/footer.php");
?>