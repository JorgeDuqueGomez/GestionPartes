<?php
require_once("../head/head.php");
require_once("../../controller/modeloCtrl.php");

$obj = new modeloController();
$modelo = $obj->show($_GET['id']);
$serie = $obj->getSerie();
?>
<br>
<h2 class="text-center"><strong>MODIFICAR MODELO</strong></h2>
<br>

<div class="container">
    <form action="update.php" method="POST" autocomplete="off" class="row justify-content-center mx-auto col-xxl-4 col-xl-6 col-md-8 col-sm-10" style="max-width: 80%;">

        <div class="mb-4 row">
            <label class="col-form-label text-center">ID Modelo</label>
            <input type="text" name="idModelo" class="form-control-plaintext text-center" id="inputPassword" value="<?= $modelo[0] ?>">
        </div>

        <div class="mb-3 col-md-12">
            <label class="form-label">Nombre del modelo</label>
            <input type="text" name="nombreModelo" required id="example" class="form-control" value="<?= $modelo[1] ?>">
        </div>

        <div class="mb-4 col-md-12">
            <label class="form-label">Serie</label>
            <select name="idSerie" id="inputPassword" class="form-select" required>
                <option selected="true" value="<?= $modelo[2] ?>">Serie actual <?= $modelo[3] ?></option>
                <?php foreach ($serie as $series) : ?>
                    <option value="<?= $series['idSerie'] ?>"><?= $series['nombreSerie'] ?></option>
                <?php endforeach; ?>
            </select>
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