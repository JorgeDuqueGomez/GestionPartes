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

        usort($rows, function ($a, $b) {
          return $a['ordenAlistamiento'] - $b['ordenAlistamiento'];
        });
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
                    <form>
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
                            return $a['orden'] - $b['orden'];
                          });

                          foreach ($rows as $innerRow) :
                            $innerStation = $innerRow['nombreEstacion'] . "-" . $innerRow['nombreCorto'];
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
                              <label>Referencias totales </label>
                              <input class="form-control" type="text" value="<?= count($unifiedRows) ?>" style="width: 45px; height: 20px;" disabled readonly>
                            </div>
                            &nbsp;&nbsp;
                            <div class="gap-1" style="display: inline-flex;">
                              <label>Cajas </label>
                              <input class="form-control" type="text" value="<?= $maxCaja ?>" style="width: 45px; height: 20px;" disabled readonly>
                            </div>
                          </div>

                          <?php foreach ($unifiedRows as $unifiedRow) : ?>
                            <tr>
                              <td class="text-center align-middle"><?= $unifiedRow['modulo'] ?> - <?= $unifiedRow['posicion'] ?></td>
                              <td class="text-center align-middle"><?= $unifiedRow['numeroParte'] ?></td>
                              <td class="text-center align-middle"><?= $unifiedRow['nombreParte'] ?></td>
                              <td class="text-center align-middle"><?= $unifiedRow['cantidad'] ?></td>
                              <td class="text-center align-middle"><?= $unifiedRow['numeroCaja'] ?>- <?= $unifiedRow['nombreCaja'] ?></td>
                              <td class="text-center align-middle"><input type="checkbox" class="checkbox"></td>
                            </tr>
                          <?php endforeach; ?>
                        </tbody>

                      </table>
                      <input type="submit" class="btn btn-success" value="Guardar estación">
                    </form>
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