<?php
require_once("../head/head.php");
require_once("../../controller/estanteriaCtrl.php");
$obj =  new estanteriaController();
$rows = $obj->index();
$ocupados = 0;
$disponibles = 0;
foreach ($rows as $row) {
  if ($row['nombreEstado2'] === 'Disponible') {
    $disponibles++;
  } else {
    $ocupados++;
  }
}
$total = $ocupados + $disponibles;
$contenido = $ocupados;
?>
<br>
<h1 class="text-center"><strong>GESTION DE ESTANTERÍA</strong></h1>
<div class="container">
  <br>
  <div class="d-flex justify-content-center">

    <div class="tooltip-container">
      <lord-icon src="https://cdn.lordicon.com/iiixgoqp.json" trigger="hover" colors="primary:#121331" style="width:40px;height:40px">
      </lord-icon> </lord-icon>
      <div class="tooltip-content">
        <p class="line"><strong>En uso:</strong> <?php echo $ocupados; ?></p>
        <p class="line"><strong>Disponibles:</strong> <?php echo $disponibles; ?></p>
        <p class="line"><strong>Totales:</strong> <?php echo $total; ?></p>
      </div>
    </div>
  </div>

  <table class="table table-bordered table-hover" id="gestionEstanteriaTable">
    <thead class="table-light">
      <tr>
        <th class="text-center align-middle" scope="col">Orden</th>
        <th class="text-center align-middle" scope="col">Ubicación</th>
        <th class="text-center align-middle" scope="col">Estado</th>

        <th class="text-center align-middle" scope="col">Descripcion</th>
        <th class="text-center align-middle" scope="col">Numero de parte</th>
      </tr>
    </thead>

    <tbody>
      <?php if ($rows) : ?>
        <?php foreach ($rows as $row) : ?>
          <tr>

            <th class="text-center align-middle"><?= $row['orden'] ?></th>
            <th class="text-center align-middle"><?= $row['modulo'] ?>-<?= $row['posicion'] ?></th>
            <th class="text-center align-middle">
              <?php if ($row['nombreEstado2'] === 'Disponible') : ?>
                <span class="text-success"><?= $row['nombreEstado2'] ?></span>
              <?php else : ?>
                <span class="text-warning"><?= $row['nombreEstado2'] ?></span>
              <?php endif; ?>
            </th>

            <th class="text-center align-middle"><?= $row['nombreParte'] ?></th>
            <th class="text-center align-middle"><?= $row['numeroParte'] ?></th>
        
          </tr>
        <?php endforeach; ?>
      <?php else : ?>
        <tr>
          <td colspan="5" class="text-center">No hay registros</td>
        </tr>
      <?php endif; ?>

    </tbody>
  </table>

</div>
<?php
require_once("../head/footer.php");
?>