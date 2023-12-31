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

    <form method="POST" action="update.php">
        <div class="d-flex justify-content-center">
            <a href="index.php" class="btn btn-danger d-flex align-items-center"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
                    <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z" />
                </svg> &nbsp;Atras</a>
            &nbsp;&nbsp;
            <button type="submit" class="btn btn-success">Realizar cambios</button>
        </div>
        <br>

        <table class="table table-bordered table-hover">
            <thead class="table-light">
                <tr>
                    <th class="text-center align-middle" style="width: 10%;" scope="col">Modelo</th>
                    <th class="text-center align-middle" style="width: 16%;" scope="col">Estacion</th>
                    <th class="text-center align-middle" style="width: 5%;" scope="col">Material</th>
                    <th class="text-center align-middle" style="width: 20%;" scope="col">Nombre de parte</th>
                    <th class="text-center align-middle" style="width: 12%;" scope="col">Numero de parte</th>
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
                            <input name="idListado[]" type="hidden" value="<?= $row['idListado'] ?>">

                            <th class="text-center align-middle"><?= $row['nombreModelo'] ?> - <?= $row['nombreSufix'] ?><br><br>
                                <label>Lote Actual</label><br>
                            <input type="number" value="<?= $row['lote'] ?>" style="width: 50px;" class="text-center">

                            </th>

                            <th>
                                <div class="mb-1">
                                    <select name="nombreLinea" class="form-select">
                                        <option selected="true"><?= $row['nombreLinea'] ?></option>
                                        <?php foreach ($linea as $lineas) : ?>
                                            <option value="<?= $lineas['idLinea'] ?>"><?= $lineas['nombreLinea'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="mb-1">
                                    <select name="idEstacion[]" class="form-select">
                                        <option selected="true" value="<?= $row['idEstacion'] ?>"><?= $row['nombreEstacion'] ?></option>
                                        <?php foreach ($estacion as $estaciones) : ?>
                                            <option value="<?= $estaciones['idEstacion'] ?>"><?= $estaciones['nombreEstacion'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="mb-1">
                                    <select name="idLateralidad[]" class="form-select">
                                        <option selected="true" value="<?= $row['idLateralidad'] ?>"><?= $row['nombreLateralidad'] ?></option>
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
                                    <select name="idGrupo[]" class="form-select">
                                        <option selected="true" value="<?= $row['idGrupo'] ?>"><?= $row['codigo'] ?></option>
                                        <?php foreach ($grupo as $grupos) : ?>
                                            <option value="<?= $grupos['idGrupo'] ?>"><?= $grupos['codigo'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </th>

                            <th class="text-center align-middle">
                                <div class="col-md-12">
                                    <input type="text" name="componentCode[]" class="form-control text-center" value="<?= $row['componentCode'] ?>" oninput="restrictInput(this)" maxlength="2">
                                </div>

                            <th class="text-center align-middle">
                                <div class="col-md-12">
                                    <input type="text" name="cantidad[]" class="form-control  text-center" value="<?= $row['cantidad'] ?>">
                                </div>
                            </th>
                            <th class="text-center align-middle">
                                <label <?= ($row['nombreMaterial'] != 'PC') ? '' : 'class="d-none"' ?>>No aplica</label>
                                <label <?= ($row['nombreMaterial'] != 'PC') ? 'class="d-none"' : '' ?>>Numero</label>
                                <div class="col-md-12">
                                    <input type="text" name="numeroCaja[]" class="form-control text-center" value="<?= $row['numeroCaja'] ?>" <?= ($row['nombreMaterial'] != 'PC') ? 'hidden' : '' ?>>
                                </div>
                                <label <?= ($row['nombreMaterial'] != 'PC') ? 'class="d-none"' : '' ?>>Posición</label>
                                <div>
                                    <select name="idCaja[]" class="form-select text-center" <?= ($row['nombreMaterial'] != 'PC') ? 'hidden' : '' ?>>
                                        <option selected="true" value="<?= $row['idCaja'] ?>"><?= $row['nombreCaja'] ?></option>
                                        <?php foreach ($caja as $cajas) : ?>
                                            <option value="<?= $cajas['idCaja'] ?>"><?= $cajas['nombreCaja'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </th>

                        </tr>
                        <input type="hidden" name="nombreModeloCopy[]" value="<?= $row['nombreModelo'] ?>">
                        <input type="hidden" name="nombreSufixCopy[]" value="<?= $row['nombreSufix'] ?>">
                        <input type="hidden" name="loteCopy[]" value="<?= $row['lote'] ?>">
                        <input type="hidden" name="nombreEstacionCopy[]" value="<?= $row['nombreEstacion'] ?>">
                        <input type="hidden" name="nombreLateralidadCopy[]" value="<?= $row['nombreLateralidad'] ?>">
                        <input type="hidden" name="nombreMaterialCopy[]" value="<?= $row['nombreMaterial'] ?>">
                        <input type="hidden" name="nombreParteCopy[]" value="<?= $row['nombreParte'] ?>">
                        <input type="hidden" name="numeroParteCopy[]" value="<?= $row['numeroParte'] ?>">
                        <input type="hidden" name="codigoCopy[]" value="<?= $row['codigo'] ?>">
                        <input type="hidden" name="componentCodeCopy[]" value="<?= $row['componentCode'] ?>">
                        <input type="hidden" name="cantidadCopy[]" value="<?= $row['cantidad'] ?>">
                        <input type="hidden" name="numeroCajaCopy[]" value="<?= $row['numeroCaja'] ?>">
                        <input type="hidden" name="nombreCajaCopy[]" value="<?= $row['nombreCaja'] ?>">
                        </tr>
                    <?php endforeach; ?>
                <?php else : ?>
                    <tr>
                        <td colspan="9" class="text-center">No selecciono ningún ítem</td>
                    </tr>
                <?php endif; ?>

            </tbody>

    </form>
</div>
<?php
require_once("../head/footer.php");
?>