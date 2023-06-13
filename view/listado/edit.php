<?php
require_once("../head/head.php");
require_once("../../controller/listadoCtrl.php");
$obj =  new listadoController();
// Obtener los IDs de las filas seleccionadas
$selectedIds = $_POST['selectedRows'] ?? [];

// Obtener los registros correspondientes a las filas seleccionadas
if (!empty($selectedIds)) {
    $selectedRows = $obj->getSelectedRows($selectedIds);
}
$lat = $obj->getLateralidad();
$linea = $obj->getLinea();
$estacion = $obj->getEstacion();
$grupo = $obj->getGrupo();
$caja = $obj->getCaja();
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
        <br>

        <table class="table table-bordered table-hover">
            <thead class="table-light">
                <tr>
                    <th class="text-center align-middle" style="width: 8%;" scope="col">Modelo</th>
                    <th class="text-center align-middle" style="width: 16%;" scope="col">Estacion</th>
                    <th class="text-center align-middle" style="width: 5%;" scope="col">Material</th>
                    <th class="text-center align-middle" style="width: 20%;" scope="col">Nombre de parte</th>
                    <th class="text-center align-middle" style="width: 15%;" scope="col">Numero de parte</th>
                    <th class="text-center align-middle" style="width: 10%;" scope="col">Codigo grupo</th>
                    <th class="text-center align-middle" style="width: 10%;" scope="col">Component<br>Code</th>
                    <th class="text-center align-middle" style="width: 5%;" scope="col">Cantidad</th>
                    <th class="text-center align-middle" style="width: 10%;" scope="col">Caja</th>
                </tr>
            </thead>

            <tbody>
                <?php if (!empty($selectedRows)) : ?>
                    <?php foreach ($selectedRows as $row) : ?>
                        <tr>
                            <input name="idListado" type="hidden" value="<?= $row['idListado'] ?>">

                            <th class="text-center align-middle"><?= $row['nombreModelo'] ?> - <?= $row['nombreSufix'] ?></th>

                            <th>
                                <div>
                                    <select name="nombreLinea" class="form-select">
                                        <option selected="true"><?= $row['nombreLinea'] ?></option>
                                        <?php foreach ($linea as $lineas) : ?>
                                            <option value="<?= $lineas['idLinea'] ?>"><?= $lineas['nombreLinea'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div>
                                    <select name="nombreEstacion" class="form-select">
                                        <option selected="true"><?= $row['nombreEstacion'] ?></option>
                                        <?php foreach ($estacion as $estaciones) : ?>
                                            <option value="<?= $estaciones['idEstacion'] ?>"><?= $estaciones['nombreEstacion'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div>
                                    <select name="nombreLateralidad" class="form-select">
                                        <option selected="true"><?= $row['nombreLateralidad'] ?></option>
                                        <?php foreach ($lat as $lateralidades) : ?>
                                            <option value="<?= $lateralidades['idLateralidad'] ?>"><?= $lateralidades['nombreLateralidad'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </th>

                            <th class="text-center align-middle"><?= $row['nombreMaterial'] ?></th>
                            <th class="align-middle"><?= $row['nombreParte'] ?></th>
                            <th class="text-center align-middle"><?= $row['numeroParte'] ?></th>

                            <th class="text-center align-middle">
                                <div>
                                    <select name="idGrupo" class="form-select">
                                        <option selected="true"><?= $row['codigo'] ?></option>
                                        <?php foreach ($grupo as $grupos) : ?>
                                            <option value="<?= $grupos['idGrupo'] ?>"><?= $grupos['codigo'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </th>

                            <th class="text-center align-middle">
                                <div class="mb-2 col-md-12">
                                    <input type="text" name="componentCode" class="form-control  text-center" value="<?= $row['componentCode'] ?>">
                                </div>

                            <th class="text-center align-middle">
                                <div class="mb-2 col-md-12">
                                    <input type="text" name="cantidad" class="form-control  text-center" value="<?= $row['cantidad'] ?>">
                                </div>
                            </th>

                            <th class="text-center align-middle">
                                <div class="mb-2 col-md-12">
                                    <input type="text" name="nombreCaja" class="form-control text-center" value="<?= $row['nombreCaja'] ?>">
                                </div>

                                <div>
                                    <select name="nombrePosicion" class="form-select text-center">
                                        <option selected="true"><?= $row['nombrePosicion'] ?></option>
                                        <?php foreach ($caja as $cajas) : ?>
                                            <option value="<?= $cajas['idPosicionCaja'] ?>"><?= $cajas['nombrePosicion'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </th>

                        </tr>
                    <?php endforeach; ?>
                <?php else : ?>
                    <tr>
                        <td colspan="9" class="text-center">No selecciono ningún ítem</td>
                    </tr>
                <?php endif; ?>

            </tbody>
        </table>
    </form>
</div>
<?php
require_once("../head/footer.php");
?>