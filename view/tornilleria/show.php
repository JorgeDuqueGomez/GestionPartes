<?php
require_once("../head/head.php");
require_once("../../controller/tornilleriaCtrl.php");
$obj =  new tornilleriaController();
$rows = $obj->consultarAlistamiento($_POST['nombreSufix'], $_POST['lote'],$_POST['nombreLinea']);
?>
<br>
<h1 class="text-center"><strong>Consulta alistamiento</strong></h1>
<br>
<div class="container">
    <div class="d-flex justify-content-center">
        <div class="row">
            <div class="col-md-3 d-flex justify-content-center">
                <a href="index.php" class="btn btn-danger d-flex align-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
                        <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z" />
                    </svg>
                    &nbsp;&nbsp;Atras
                </a>
            </div>
            <div class="col-md-3 d-flex justify-content-center">
                <input class="form-control" type="text" disabled value="Sufix - <?= $_POST['nombreSufix'] ?>">
            </div>
            <div class="col-md-3 d-flex justify-content-center">
                <input class="form-control" type="text" disabled value="Lote - <?= $_POST['lote'] ?>">
            </div>
        </div>
    </div>
    <br>
    <table class="table" id="consultaAlistamiento">
        <thead>
            <tr>
                <th class="text-center align-middle">Estacion</th>
                <th class="text-center align-middle">Lateralidad</th>
                <th class="text-center align-middle">Ubicación</th>
                <th class="text-center align-middle">Numero de parte</th>
                <th class="text-center align-middle">Nombre de parte</th>
                <th class="text-center align-middle">Cantidad</th>
                <th class="text-center align-middle">Caja</th>
                <th class="text-center align-middle">Usuario</th>
                <th class="text-center align-middle">Check</th>
                <th class="text-center align-middle">Fecha</th>
            </tr>
        </thead>
        <tbody>
            <?php if ($rows) : ?>
                <?php foreach ($rows as $row) : ?>
                    <tr>
                        <td class="text-center align-middle"><?= $row["nombreEstacion"] ?></td>
                        <td class="text-center align-middle"><?= $row["nombreLateralidad"] ?></td>
                        <td class="text-center align-middle"><?= $row["modulo"] ?>-<?= $row["posicion"] ?></td>
                        <td class="text-center align-middle"><?= $row["numeroParte"] ?></td>
                        <td class="align-middle"><?= $row["nombreParte"] ?></td>
                        <td class="text-center align-middle"><?= $row["cantidad"] ?></td>
                        <td class="text-center align-middle"><?= $row["numeroCaja"] ?>- <?= $row["nombreCaja"] ?></td>
                        <td class="text-center align-middle">Usuario</td>
                        <td class="text-center align-middle"><?= $row["checkList"] ?></td>
                        <td class="text-center align-middle"><?= $row["createdAt"] ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php else : ?>
        </tbody>
    </table>
<?php endif; ?>
</div>

<?php
require_once("../head/footer.php");
?>