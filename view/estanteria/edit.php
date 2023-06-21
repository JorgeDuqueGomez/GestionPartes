<?php
require_once("../head/head.php");
require_once("../../controller/estanteriaCtrl.php");

$obj = new estanteriaController();
$general = $obj->show($_GET['id']);
$parte = $obj->showParte();
$linea = $obj->getLinea();
?>
<br>
<h2 class="text-center"><strong>ASIGNAR PARTE A LA ESTANTERIA</strong></h2>
<br>
<div class="container">
    <form action="update.php" method="POST" autocomplete="off" class="row justify-content-center mx-auto col-xxl-4 col-xl-6 col-md-8 col-sm-10" style="max-width: 80%;">

        <div class="row">
            <input type="hidden" name="idEstanteria" class="form-control-plaintext text-center" value="<?= $general['idEstanteria'] ?>">
        </div>

        <div class="row">
            <input disabled type="text" class="form-control-plaintext text-center <?php echo $general['nombreEstado2'] === 'Disponible' ? 'text-success' : 'text-warning' ?>" style="font-weight: bold;" value="<?= $general['nombreEstado2'] ?>">
            <input disabled type="text" class="form-control-plaintext text-center <?php echo $general['nombreEstado2'] === 'Disponible' ? 'text-success' : 'text-warning' ?>" style="font-weight: bold;" value="<?= $general['modulo'] ?> - <?= $general['posicion'] ?>">
        </div>

        <div class="mb-3 col-md-12">
            <label class="form-label">Numero de parte</label>
            <select name="idParte" class="form-select">
                <option selected="true" value="<?= $general['idParte'] ?>"><?= $general['numeroParte'] ?> - <?= $general['nombreParte'] ?></option>
                <?php foreach ($parte as $partes) : ?>
                    <option value="<?= $partes['idParte'] ?>"><?= $partes['numeroParte'] ?> - <?= $partes['nombreParte'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="mb-4 col-md-12">
            <label class="form-label">Linea</label>
            <select name="idLinea" class="form-select">
                <option selected="true" value="<?= $general['idLinea'] ?>"><?= $general['nombreLinea'] ?></option>
                <?php foreach ($linea as $lineas) : ?>
                    <option value="<?= $lineas['idLinea'] ?>"><?= $lineas['nombreLinea'] ?></option>
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