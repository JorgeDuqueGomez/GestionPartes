<?php
require_once("../head/head.php");
require_once("../../controller/listadoCtrl.php");
$obj =  new listadoController();
$rows = $obj->index();
?>
<br>
<h1 class="text-center"><strong>MODIFICAR LISTADOS</strong></h1>
<div class="container">
    <br>
    <div class="d-flex justify-content-center">
    </div>

    <form method="POST" action="edit.php">
        <div class="d-flex justify-content-center">
            <a href="./index.php" class="btn btn-danger d-flex align-items-center"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
                    <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z" />
                </svg> &nbsp;Atras</a>
            &nbsp;&nbsp;
            <button type="submit" class="btn btn-success">Realizar cambios</button>
        </div>
        <table class="table table-bordered table-hover" id="gestionListadoTable">
            <thead class="table-light">
                <tr>
                    <th class="text-center align-middle" scope="col">Modelo</th>
                    <th class="text-center align-middle" scope="col">Estaciones</th>
                    <th class="text-center align-middle" scope="col">Mtrl</th>
                    <th class="text-center align-middle" scope="col">Nombre de parte</th>
                    <th class="text-center align-middle" scope="col">Numero de parte</th>
                    <th class="text-center align-middle" scope="col">Grupo</th>
                    <th class="text-center align-middle" scope="col">Comp</th>
                    <th class="text-center align-middle" scope="col">Cant</th>
                    <th class="text-center align-middle" scope="col">Caja</th>
                </tr>
            </thead>

            <tbody style="line-height: 0.9;">
                <?php if ($rows) : ?>
                    <?php foreach ($rows as $row) : ?>
                        <tr>
                            <th class="text-center align-middle"><?= $row['nombreModelo'] ?> - <?= $row['nombreSufix'] ?></th>
                            <th class="text-center align-middle"><?= $row['nombreEstacion'] ?><br><?= $row['nombreCorto'] ?></th>
                            <th class="text-center align-middle"><?= $row['nombreMaterial'] ?></th>
                            <th class="align-middle"><?= $row['nombreParte'] ?></th>
                            <th class="text-center align-middle"><?= $row['numeroParte'] ?></th>
                            <th class="text-center align-middle"><?= $row['codigo'] ?></th>
                            <th class="text-center align-middle"><?= $row['componentCode'] ?></th>
                            <th class="text-center align-middle"><?= $row['cantidad'] ?></th>
                            <th class="text-center align-middle"><?= $row['nombreCaja'] ?>-<?= $row['nombrePosicion'] ?></th>
                        </tr>
                    <?php endforeach; ?>
                <?php else : ?>
                    <tr>
                        <td colspan="9" class="text-center">No hay registros</td>
                    </tr>
                <?php endif; ?>

            </tbody>
        </table>
    </form>
</div>
<?php
require_once("../head/footer.php");
?>