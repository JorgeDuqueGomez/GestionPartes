<?php

require_once("../head/head.php");
require_once("../../controller/tpmCtrl.php");
$obj =  new tpmController();


$rows = $obj->tpmLog();
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
        </div>
        <br>

        <table class="table table-bordered table-hover">
            <thead class="table-light">
                <tr>
                    <th class="text-center align-middle" style="width: 15%;" scope="col">Modelo</th>
                    <th class="text-center align-middle" style="width: 12%;" scope="col">Estacion</th>
                    <th class="text-center align-middle" style="width: 30%;" scope="col">Descripción de la Parte</th>
                    <th class="text-center align-middle" style="width: 9%;" scope="col">Grupo/Comp</th>
                    <th class="text-center align-middle" style="width: 9%;" scope="col">Cantidad</th>
                    <th class="text-center align-middle" style="width: 8%;" scope="col">Caja</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($rows as $row) : ?>
                    <tr>

                        <th class="text-center align-middle">
                            <div class="form-group col-md-13 mb-2">
                                <div class="form-floating">

                                    <input class="form-control text-center align-middle" id="floatingInput" type="text" disabled value="Lote Actual - <?= $row['loteAnterior'] ?>">
                                    <label class="text-center align-middle" for="floatingInput" style="color: red;"><?= $row['nombreSufix'] ?></label>

                                </div>
                            </div>

                            <div class="form-group col-md-13 mb-2">
                                <div class="form-floating">

                                    <input name="loteEfectividad[]" type="number" min="0" class="form-control text-center align-middle" id="floatingInput" disabled value="<?= $row['loteEfectividad'] ?>">
                                    <label for="floatingInput" style="color: green;">Lote Efectividad</label>

                                </div>
                            </div>
                        </th>

                        <th>

                            <div class="mb-1">
                                <select name="nombreEstacionNueva[]" id="nombreEstacion" class="form-select nombreEstacion">
                                    <option selected="true"><?= $row['nombreEstacionNueva'] ?></option>
                                </select>
                            </div>

                            <div class="mb-1">

                                <select name="nombreLateralidadNueva[]" class="form-select">
                                    <option selected="true"><?= $row['nombreLateralidadNueva'] ?></option>
                                </select>
                            </div>
                        </th>

                        <th class="text-center align-middle ">
                            <div class="form-group col-md-13 mb-2">
                                <div class="form-floating">

                                    <input class="form-control" id="floatingInput" type="text" disabled value="<?= $row['numeroParte'] ?> - <?= $row['nombreParte'] ?> - <?= $row['nombreMaterial'] ?>">
                                    <label for="floatingInput" style="color: red;">Parte actual</label>
                                </div>
                            </div>

                            <div class="form-floating">
                                <select class="form-select" name="idParteNueva[]" id="floatingSelect" aria-label="Floating label select example">
                                    <option selected="true"></option>
                                    <?php foreach ($parte as $partes) : ?>
                                        <option><?= $partes['numeroParte'] ?> - <?= $partes['nombreParte'] ?> - <?= $partes['nombreMaterial'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <label for="floatingSelect" style="color: green;">Parte nueva</label>
                            </div>
                        </th>

                        <th class="text-center align-middle">
                            <div class="mb-2">
                                <div class="form-floating">
                                    <input class="form-control" id="floatingInput" type="text" disabled value="<?= $row['grupoAnterior'] ?> - <?= $row['componentAnterior'] ?>">
                                    <label for="floatingSelect" style="color: red;">Actual</label>
                                </div>
                            </div>
                            <div class="mb-2">
                                <div class="form-floating">
                                    <input class="form-control" id="floatingInput" type="text" disabled value="<?= $row['grupoNuevo'] ?> - <?= $row['componentNuevo'] ?>">
                                    <label for="floatingSelect" style="color: red;">Nuevo</label>
                                </div>
                            </div>

                        </th>
                        <th class="text-center align-middle">

                            <div class="mb-2">
                                <div class="form-floating">
                                    <input class="form-control text-center align-middle" id="floatingInput" type="text" disabled value="<?= $row['cantidadAnterior'] ?>">
                                    <label for="floatingSelect" style="color: red;">Actual</label>
                                </div>
                            </div>
                            <div class="mb-2">
                                <div class="form-floating">
                                    <input class="form-control text-center align-middle" id="floatingInput" type="text" disabled value="<?= $row['cantidadNueva'] ?>">
                                    <label for="floatingSelect" style="color: red;">Nueva</label>
                                </div>
                            </div>
                        </th>
                        <th class="text-center align-middle">

                            <div class="mb-2">
                                <div class="form-floating">
                                    <input class="form-control text-center align-middle" id="floatingInput" type="text" disabled value="<?= $row['numeroCajaAnterior'] ?> - <?= $row['nombreCajaAnterior'] ?>">
                                    <label for="floatingSelect" style="color: red;">Actual</label>
                                </div>
                            </div>

                            <div class="mb-2">
                                <div class="form-floating">
                                    <input class="form-control text-center align-middle" id="floatingInput" type="text" disabled value="<?= $row['numeroCajaNueva'] ?> - <?= $row['nombreCajaNueva'] ?>">
                                    <label for="floatingSelect" style="color: red;">Nueva</label>
                                </div>
                            </div>

                        </th>
                    </tr>
                <?php endforeach; ?>
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
        idLoteDropdown.innerHTML = '<option selected="true" disabled="disabled">Estacion</option>';

        <?php foreach ($valEstacion as $valEstaciones) : ?>
            if ("<?= $valEstaciones['nombreLinea'] ?>" === selectLinea) {
                const option = document.createElement("option");
                option.value = "<?= $valEstaciones['idEstacion'] ?>";
                option.text = "<?= $valEstaciones['nombreEstacion'] ?>";
                idLoteDropdown.appendChild(option);
            }
        <?php endforeach; ?>
    }
</script>