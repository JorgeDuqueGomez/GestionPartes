<?php

require_once("../head/head.php");
require_once("../../controller/tpmCtrl.php");
$obj =  new tpmController();
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
$material = $obj->getMaterial();
$parte = $obj->getParte();
$caja = $obj->getCaja();
$valEstacion = $obj->validationEstacion();
?>
<br>
<h1 class="text-center"><strong>MODIFICAR LISTADOS</strong></h1>
<div class="container">
    <br>
    <div class="d-flex justify-content-center">
    </div>

    <form method="POST" action="store.php">
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
                    <th class="text-center align-middle" style="width: 8%;" scope="col">Estacion</th>
                    <th class="text-center align-middle" style="width: 15%;" scope="col">Descripción de la Parte</th>
                    <th class="text-center align-middle" style="width: 5%;" scope="col">Codigo grupo</th>
                    <th class="text-center align-middle" style="width: 5%;" scope="col">Comp.<br>Code</th>
                    <th class="text-center align-middle" style="width: 4%;" scope="col">Cantidad</th>
                    <th class="text-center align-middle" style="width: 11%;" scope="col">Caja/Posición</th>
                </tr>
            </thead>

            <tbody>
                <?php if (!empty($selectedRows)) : ?>
                    <?php foreach ($selectedRows as $row) : ?>
                        <tr>
                            <input name="idListado[]" type="hidden" value="<?= $row['idListado'] ?>">

                            <th class="text-center align-middle">
                                <div class="form-group col-md-13 mb-2">
                                    <div class="form-floating">

                                        <input name="idSufix[]" type="hidden" value="<?= $row['idSufix'] ?>">
                                        <input name="nombreSufix[]" type="hidden" value="<?= $row['nombreSufix'] ?>">
                                        <input name="loteAnterior[]" type="hidden" value="<?= $row['lote'] ?>">


                                        <input class="form-control text-center align-middle" id="floatingInput" type="text" disabled value="Lote Actual - <?= $row['lote'] ?>">
                                        <label class="text-center align-middle" for="floatingInput" style="color: red;"><?= $row['nombreModelo'] ?> - <?= $row['nombreSufix'] ?></label>

                                    </div>
                                </div>

                                <div class="form-group col-md-13 mb-2">
                                    <div class="form-floating">

                                        <input name="loteEfectividad[]" type="number" min="0" class="form-control text-center align-middle" id="floatingInput" required>
                                        <label for="floatingInput" style="color: green;">Lote Efectividad</label>

                                    </div>
                                </div>
                            </th>

                            <th>
                                <div class="mb-1">

                                    <input name="nombreEstacionAnterior[]" type="hidden" value="<?= $row['nombreEstacion'] ?>">

                                    <select id="nombreLinea" class="form-select nombreLinea" onclick="validarEstacion(this)">
                                        <option selected="true" disabled><?= $row['nombreLinea'] ?></option>
                                        <?php foreach ($linea as $lineas) : ?>
                                            <option value="<?= $lineas['nombreLinea'] ?>"><?= $lineas['nombreLinea'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>

                                <div class="mb-1">
                                    <select name="nombreEstacionNueva[]" id="nombreEstacion" class="form-select nombreEstacion" required>
                                        <option selected="true" value="<?= $row['nombreEstacion'] ?>"><?= $row['nombreEstacion'] ?></option>
                                        <?php foreach ($estacion as $estaciones) : ?>
                                            <option value="<?= $estaciones['nombreEstacion'] ?>"><?= $estaciones['nombreEstacion'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>

                                <div class="mb-1">

                                    <input name="nombreLateralidadAnterior[]" type="hidden" value="<?= $row['nombreLateralidad'] ?>">

                                    <select name="nombreLateralidadNueva[]" class="form-select">
                                        <option selected="true" value="<?= $row['nombreLateralidad'] ?>"><?= $row['nombreLateralidad'] ?></option>
                                        <?php foreach ($lat as $lateralidades) : ?>
                                            <option value="<?= $lateralidades['nombreLateralidad'] ?>"><?= $lateralidades['nombreLateralidad'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </th>

                            <th class="text-center align-middle ">
                                <div class="form-group col-md-13 mb-2">
                                    <div class="form-floating">

                                        <input name="idParteAnterior[]" type="hidden" value="<?= $row['idParte'] ?>">

                                        <input class="form-control" id="floatingInput" type="text" disabled value="<?= $row['numeroParte'].' - '.$row['nombreMaterial'].' - '.$row['nombreParte']?>">
                                        <label for="floatingInput" style="color: red;">Parte actual</label>
                                    </div>
                                </div>

                                <div class="form-floating">
                                    <select class="form-select" name="idParteNueva[]" id="floatingSelect" aria-label="Floating label select example">
                                        <option selected="true" value="<?= $row['idParte'] ?>"></option>
                                        <?php foreach ($parte as $partes) : ?>
                                            <option value="<?= $partes['idParte'] ?>"><?= $partes['numeroParte'].' - '.$partes['nombreMaterial'].' - '.$partes['nombreParte'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <label for="floatingSelect" style="color: green;">Parte nueva</label>
                                </div>
                            </th>

                            <th class="text-center align-middle">
                                <div class="mb-2">
                                    <div class="form-floating">

                                        <input name="grupoAnterior[]" type="hidden" value="<?= $row['codigo'] ?>">

                                        <input class="form-control" id="floatingInput" type="text" disabled value="<?= $row['codigo'] ?>">
                                        <label for="floatingSelect" style="color: red;">Actual</label>
                                    </div>
                                </div>

                                <div class="form-floating">
                                    <select name="grupoNuevo[]" class="form-select" id="floatingSelect" aria-label="Floating label select example">
                                        <option selected="true" value="<?= $row['codigo'] ?>"><?= $row['codigo'] ?></option>
                                        <?php foreach ($grupo as $grupos) : ?>
                                            <option value="<?= $grupos['codigo'] ?>"><?= $grupos['codigo'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <label for="floatingSelect" style="color: green;">Nuevo</label>
                                </div>
                            </th>

                            <th class="text-center align-middle">

                                <div class="mb-2">
                                    <div class="form-floating">

                                        <input name="componentAnterior[]" type="hidden" value="<?= $row['componentCode'] ?>">

                                        <input class="form-control text-center align-middle" id="floatingInput" type="text" value="<?= $row['componentCode'] ?>" disabled>
                                        <label for="floatingSelect" style="color: red;">Actual</label>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <input name="componentNuevo[]" class="form-control text-center align-middle" type="text" id="floatingInput" type="text"  value="<?= $row['componentCode'] ?>" oninput="restrictInput(this)" maxlength="2">
                                        <label for="floatingSelect" style="color: green;">Nuevo</label>
                                    </div>
                                </div>

                            </th>
                            <th class="text-center align-middle">
                                <div class="mb-2">
                                    <div class="form-floating">

                                        <input name="cantidadAnterior[]" type="hidden" value="<?= $row['cantidad'] ?>">

                                        <input class="form-control text-center align-middle" id="floatingInput" type="number" disabled value="<?= $row['cantidad'] ?>">
                                        <label for="floatingSelect" style="color: red;">Actual</label>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <input name="cantidadNueva[]" class="form-control text-center align-middle" type="text" id="floatingInput" type="number" value="<?= $row['cantidad'] ?>"oninput="restrictInputNumber(this)" maxlength="3">
                                        <label for="floatingSelect" style="color: green;">Nuevo</label>
                                    </div>
                                </div>

                            </th>

                            <input name="numeroCajaAnterior[]" type="hidden" value="<?= $row['numeroCaja'] ?>">
                            <input name="nombreCajaAnterior[]" type="hidden" value="<?= $row['nombreCaja'] ?>">

                            <th class="text-center align-middle">
                                <div class="mb-2">
                                    <div class="form-floating">
                                        <input class="form-control text-center align-middle" id="floatingInput" type="text" disabled value="<?= $row['numeroCaja'] ?> - <?= $row['nombreCaja'] ?>" >
                                        <label for="floatingSelect" style="color: red;">Actual</label>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-5">
                                        <div class="form-floating">
                                            <input type="text" name="numeroCajaNueva[]" class="form-control text-center" value="<?= $row['numeroCaja'] ?>" oninput="restrictInputNumber(this)" maxlength="2">
                                            <label for="floatingSelect" style="color: green;">Caja</label>
                                        </div>
                                    </div>

                                    <div class="col-sm-7">
                                        <div class="form-floating">
                                            <input name="nombreCajaAnterior[]" type="hidden" value="<?= $row['nombreCaja'] ?>">
                                            <select name="nombreCajaNueva[]" class="form-select text-center">
                                                <option selected="true" value="<?= $row['nombreCaja'] ?>"><?= $row['nombreCaja'] ?></option>
                                                <?php foreach ($caja as $cajas) : ?>
                                                    <option value="<?= $cajas['nombreCaja'] ?>"><?= $cajas['nombreCaja'] ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                            <label for="floatingSelect" style="color: green;">Posición</label>
                                        </div>
                                    </div>
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

    </form>
</div>
<?php
require_once("../head/footer.php");
?>

<script>
    function validarEstacion(selectLineaDropdown) {
        const selectLinea = selectLineaDropdown.value;
        const idLoteDropdown = selectLineaDropdown.parentNode.nextElementSibling.querySelector(".nombreEstacion");
        idLoteDropdown.innerHTML = '<option selected="true" disabled="disabled"></option>';

        <?php foreach ($valEstacion as $valEstaciones) : ?>
            if ("<?= $valEstaciones['nombreLinea'] ?>" === selectLinea) {
                const option = document.createElement("option");
                option.value = "<?= $valEstaciones['nombreEstacion'] ?>";
                option.text = "<?= $valEstaciones['nombreEstacion'] ?>";
                idLoteDropdown.appendChild(option);
            }
        <?php endforeach; ?>
    }
</script>