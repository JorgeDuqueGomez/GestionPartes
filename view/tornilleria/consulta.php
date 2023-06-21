<?php
require_once("../head/head.php");
require_once("../../controller/tornilleriaCtrl.php");
$obj =  new tornilleriaController();

$rows = $obj->index($_POST['idSufix'], $_POST['idLinea']);

$linea = $obj->getLinea();
$modelo = $obj->getModelo();
$sufix = $obj->getSufix();
$lote = $obj->getLote();
$estacion = $obj->getEstacion();
?>
<br>
<h1 class="text-center"><strong>Alistamiento de tornilleria</strong></h1>
<br>
<div class="d-flex justify-content-center">
  <a href="index.php" class="btn btn-danger d-flex align-items-center"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
      <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z" />
    </svg> &nbsp;Atras</a>
</div>
<div class="container">
  <br>

  <div class="table-responsive">
    <table class="table table-bordered table-hover" id="tornilleriaTable">


      <tbody>
        <?php $uniqueStations = []; // Array para almacenar las estaciones únicas 
        ?>
        <?php foreach ($rows as $row) : ?>
          <?php $station = $row['nombreEstacion'] . "-" . $row['nombreCorto']; ?>
          <?php if (!in_array($station, $uniqueStations)) : ?>
            <?php $uniqueStations[] = $station; ?>
            <tr>
              <td colspan="8" class="text-center">
                <strong>
                  <details>
                    <summary><?= $station ?></summary>
                    <table class="table table-bordered table-hover">
                      <thead class="table-light">
                        <tr>
                          <th class="text-center align-middle" style="width: 3%;">Orden</th>
                          <th class="text-center align-middle" style="width: 3%;">Ubicación</th>
                          <th class="text-center align-middle" style="width: 10%;">Numero Parte</th>
                          <th class="text-center align-middle" style="width: 15%;">Nombre Parte</th>
                          <th class="text-center align-middle" style="width: 10%;">Cantidad lote</th>
                          <th class="text-center align-middle" style="width: 10%;">Numero caja</th>
                          <th class="text-center align-middle" style="width: 3%;">Check</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach ($rows as $innerRow) : ?>
                          <?php $innerStation = $innerRow['nombreEstacion'] . "-" . $innerRow['nombreCorto']; ?>
                          <?php if ($innerStation == $station) : ?>
                            <tr>
                              <td class="text-center align-middle"><?= $innerRow['orden'] ?></td>
                              <td class="text-center align-middle"><?= $innerRow['modulo'] ?> - <?= $innerRow['posicion'] ?></td>
                              <td class="text-center align-middle"><?= $innerRow['numeroParte'] ?></td>
                              <td class="text-center align-middle"><?= $innerRow['nombreParte'] ?></td>
                              <td class="text-center align-middle"><?= $innerRow['cantidad'] ?></td>
                              <td class="text-center align-middle"><?= $innerRow['numeroCaja'] ?></td>
                              <td class="text-center align-middle"><input type="checkbox" class="checkbox"></td>
                            </tr>
                          <?php endif; ?>
                        <?php endforeach; ?>
                      </tbody>
                    </table>
                  </details>
                </strong>
              </td>
            </tr>
          <?php endif; ?>
        <?php endforeach; ?>
      </tbody>





    </table>
  </div>
</div>
<?php
require_once("../head/footer.php");
?>