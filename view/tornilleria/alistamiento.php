<?php
require_once("../head/head.php");
require_once("../../controller/tornilleriaCtrl.php");
$obj =  new tornilleriaController();

$rows = $obj->iniciarAlistamiento($_POST['nombreSufix'], $_POST['lote'], $_POST['nombreLinea']);

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
    <table class="table table-bordered table-hover">
      <tbody>
        <?php $uniqueStations = []; // Array para almacenar las estaciones unicas 
        usort($rows, function ($a, $b) {
          return $a['ordenEstacion'] - $b['ordenEstacion'];
        });
        ?>
        <?php foreach ($rows as $row) : ?>
          <?php $station = $row['nombreEstacion'] . "-" . $row['nombreLateralidad']; ?>
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
                          <th class="text-center align-middle" style="width: 3%;">Ubicación</th>
                          <th class="text-center align-middle" style="width: 10%;">Numero Parte</th>
                          <th class="text-center align-middle" style="width: 15%;">Nombre Parte</th>
                          <th class="text-center align-middle" style="width: 10%;">Cantidad lote</th>
                          <th class="text-center align-middle" style="width: 10%;">Numero caja</th>
                          <th class="text-center align-middle" style="width: 3%;">Check</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $unifiedRows = []; // Array para almacenar las filas unificadas por número de parte y número de caja
                        $maxCaja = 0; // Variable para almacenar el número mayor en la columna "caja"

                        usort($rows, function ($a, $b) {
                          return $a['ordenEstacion'] - $b['ordenEstacion'];
                        });

                        foreach ($rows as $innerRow) :
                          $innerStation = $innerRow['nombreEstacion'] . "-" . $innerRow['nombreLateralidad'];
                          if ($innerStation == $station) {
                            $key = $innerRow['numeroParte'] . "-" . $innerRow['numeroCaja'] . "-" . $innerRow['nombreCaja'];
                            if (isset($unifiedRows[$key])) {
                              // Si ya existe una fila unificada con el mismo número de parte y número de caja, se suma la cantidad al lote existente
                              $unifiedRows[$key]['cantidad'] += $innerRow['cantidad'];
                            } else {
                              // Si no existe una fila unificada, se agrega una nueva fila al array
                              $unifiedRows[$key] = $innerRow;
                            }
                            // Verificar y actualizar el número mayor en la columna "caja"
                            $caja = (int) $innerRow['numeroCaja'];
                            if ($caja > $maxCaja) {
                              $maxCaja = $caja;
                            }
                          }
                        endforeach;
                        ?>
                        <div style="text-align: end;">
                          <div class="gap-1" style="display: inline-flex;">
                            <label>Alistamientos totales </label>
                            <input class="form-control" type="text" value="<?= count($unifiedRows) ?>" style="width: 45px; height: 20px;" disabled readonly>
                          </div>
                          &nbsp;&nbsp;
                          <div class="gap-1" style="display: inline-flex;">
                            <label>Cajas </label>
                            <input class="form-control" type="text" value="<?= $maxCaja ?>" style="width: 45px; height: 20px;" disabled readonly>
                          </div>
                        </div>
                        <?php foreach ($unifiedRows as $unifiedRow) : ?>
                          
                          <form class="update-form" data-id="<?= $unifiedRow['idAlistamientoPC'] ?>">
                            <tr>
                              <td style="display: none;"><input name="idAlistamientoPC[]" value="<?= $unifiedRow['idAlistamientoPC'] ?>"></td>
                              <td style="display: none;"><input name="idSufix[]" value="<?= $unifiedRow['idSufix'] ?>"></td>
                              <td style="display: none;"><input name="nombreSufix[]" value="<?= $unifiedRow['nombreSufix'] ?>"></td>
                              <td style="display: none;"><input name="lote[]" value="<?= $unifiedRow['lote'] ?>"></td>

                              <td class="align-middle"><input style="display: none;" value="<?= $unifiedRow['modulo'] ?> - <?= $unifiedRow['posicion'] ?>"><?= $unifiedRow['modulo'] ?> - <?= $unifiedRow['posicion'] ?></td>
                              <td class="align-middle"><input style="display: none;" value="<?= $unifiedRow['numeroParte'] ?>"><?= $unifiedRow['numeroParte'] ?></td>
                              <td class="align-middle"><input style="display: none;" value="<?= $unifiedRow['nombreParte'] ?>"><?= $unifiedRow['nombreParte'] ?></td>
                              <td class="align-middle"><input style="display: none;" value="<?= $unifiedRow['cantidad'] ?>"><?= $unifiedRow['cantidad'] ?></td>
                              <td class="align-middle"><input style="display: none;" value="<?= $unifiedRow['numeroCaja'] ?>- <?= $unifiedRow['nombreCaja'] ?>"><?= $unifiedRow['numeroCaja'] ?>- <?= $unifiedRow['nombreCaja'] ?></td>

                              <td>
                                <input class="btn <?= $unifiedRow['checkList'] === 'PENDIENTE' ? 'btn-danger' : 'btn-success' ?>" name="enviar" type="submit" value="<?= $unifiedRow['checkList'] === 'PENDIENTE' ? 'Pendiente' : 'Alistado' ?>" <?= $unifiedRow['checkList'] === 'PENDIENTE' ? '' : 'disabled' ?>>
                              </td>
                            </tr>
                          </form>
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