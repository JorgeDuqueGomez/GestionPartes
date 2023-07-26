<?php
require_once("../head/head.php");
require_once("../../controller/novedadesCtrl.php");
$obj =  new novedadesController();
$rows = $obj->index();

$usuario = $obj->getUsuario();
$modelo = $obj->getModelo();
$sufix = $obj->getSufix();
$estacion = $obj->getEstacion();
$linea = $obj->getLinea();
$tipoNovedad = $obj->getTipoNovedad();
$material = $obj->getMaterial();
$grupo = $obj->getGrupo();
$estacion = $obj->getEstacion();
$lateralidad = $obj->getLateralidad();

?>
<br>
<h1 class="text-center"><strong>AGREGAR NOVEDADES</strong></h1>
<br>

<form action="store.php" method="POST">
  <div class="d-flex justify-content-center">

    <div class="row">
      <input type="hidden" name="areaSolicitante" class="form-control-plaintext text-center" value="Logistica">
    </div>

    <div class="row">
      <input type="hidden" name="nombreSolicitante" class="form-control-plaintext text-center" value="Fredy Martinez">
    </div>

    <div>
      <select name="idUsuario" id="idUsuario" class="form-select">
        <option selected="true" disabled="disabled">Procesos</option>
        <?php foreach ($usuario as $usuarios) : ?>
          <option value="<?= $usuarios['idUsuario'] ?>"><?= $usuarios['nombreUsuario'] ?></option>
        <?php endforeach; ?>
      </select>
    </div>
    &nbsp;&nbsp;
    <div>
      <select name="idModelo" id="idModelo" class="form-select">
        <option selected="true" disabled="disabled">Modelo</option>
        <?php foreach ($modelo as $modelos) : ?>
          <option value="<?= $modelos['idModelo'] ?>"><?= $modelos['nombreModelo'] ?></option>
        <?php endforeach; ?>
      </select>
    </div>
    &nbsp;&nbsp;
    <div>
      <select name="idSufix" id="idSufix" class="form-select">
        <option selected="true" disabled="disabled">Sufix</option>
        <?php foreach ($sufix as $sufixes) : ?>
          <option value="<?= $sufixes['idSufix'] ?>"><?= $sufixes['nombreSufix'] ?></option>
        <?php endforeach; ?>
      </select>
    </div>
    &nbsp;&nbsp;
    <div>
      <select name="idLinea" id="idLinea" class="form-select">
        <option selected="true" disabled="disabled">Linea</option>
        <?php foreach ($linea as $lineas) : ?>
          <option value="<?= $lineas['idLinea'] ?>"><?= $lineas['nombreLinea'] ?></option>
        <?php endforeach; ?>
      </select>
    </div>
    &nbsp;&nbsp;
    <div>
      <select name="idNovedad" id="idNovedad" class="form-select">
        <option selected="true" disabled="disabled">Novedad</option>
        <?php foreach ($tipoNovedad as $tipoNovedades) : ?>
          <option value="<?= $tipoNovedades['idNovedad'] ?>"><?= $tipoNovedades['nombreNovedad'] ?></option>
        <?php endforeach; ?>
      </select>
    </div>
    &nbsp;&nbsp;
    <div>
      <button id="nuevaNovedad" type="button" class="btn btn-outline-dark">+</button>
    </div>
  </div>

  <br>

  <div class="container">
    <div class="d-flex justify-content-center">
      <table class="table table-striped table-hover" id="novedadesTable">
        <thead>
          <tr>
            <th class="text-center align-middle" style="width: 30px;">Material</th>
            <th class="text-center align-middle" style="width: 120px;">Numero de parte</th>
            <th class="text-center align-middle" style="width: 20px;">Grupo/Comp</th>
            <th class="text-center align-middle" style="width: 100px;">Origen</th>
            <th class="text-center align-middle" style="width: 100px;">Destino</th>
            <th class="text-center align-middle" style="width: 60px;">Cpv</th>
            <th class="text-center align-middle" style="width: 100px;">Observaciones</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="text-center align-middle">
              <select name="idMaterial" id="idMaterial" class="form-select text-center align-middle">
                <option selected="true" disabled="disabled">Matrl</option>
                <?php foreach ($material as $materiales) : ?>
                  <option value="<?= $materiales['idMaterial'] ?>"><?= $materiales['nombreMaterial'] ?></option>
                <?php endforeach; ?>
              </select>
            </td>
            <td class="text-center align-middle">
              <input type="text" name="" class="form-control" placeholder="Numero de parte">
            </td>
            <td class="text-center align-middle">
              <div style="margin-bottom: 5px;">
                <select name="idGrupo" id="idGrupo" class="form-select text-center align-middle">
                  <option selected="true" disabled="disabled">Grupo</option>
                  <?php foreach ($grupo as $grupos) : ?>
                    <option value="<?= $grupos['idGrupo'] ?>"><?= $grupos['codigo'] ?></option>
                  <?php endforeach; ?>
                </select>
              </div>
              <div>
                <input type="text" name="" class="form-control" placeholder="Component">
              </div>
            </td>
            <td class="text-center align-middle">
              <div style="margin-bottom: 5px;">
                <select name="idEstacion" id="idEstacion" class="form-select text-center align-middle">
                  <option selected="true" disabled="disabled">Estacion</option>
                  <?php foreach ($estacion as $estaciones) : ?>
                    <option value="<?= $estaciones['idEstacion'] ?>"><?= $estaciones['nombreEstacion'] ?></option>
                  <?php endforeach; ?>
                </select>
              </div>
              <div>
                <select name="idLateralidad" id="idLateralidad" class="form-select text-center align-middle">
                  <option selected="true" disabled="disabled">Lateralidad</option>
                  <?php foreach ($lateralidad as $lateralidades) : ?>
                    <option value="<?= $lateralidades['idLateralidad'] ?>"><?= $lateralidades['nombreLateralidad'] ?></option>
                  <?php endforeach; ?>
                </select>
              </div>
            </td>
            <td class="text-center align-middle">
              <div style="margin-bottom: 5px;">
                <select name="idEstacion" id="idEstacion" class="form-select text-center align-middle">
                  <option selected="true" disabled="disabled">Estacion</option>
                  <?php foreach ($estacion as $estaciones) : ?>
                    <option value="<?= $estaciones['idEstacion'] ?>"><?= $estaciones['nombreEstacion'] ?></option>
                  <?php endforeach; ?>
                </select>
              </div>
              <div>
                <select name="idLateralidad" id="idLateralidad" class="form-select text-center align-middle">
                  <option selected="true" disabled="disabled">Lateralidad</option>
                  <?php foreach ($lateralidad as $lateralidades) : ?>
                    <option value="<?= $lateralidades['idLateralidad'] ?>"><?= $lateralidades['nombreLateralidad'] ?></option>
                  <?php endforeach; ?>
                </select>
              </div>
            </td>
            <td class="text-center align-middle">
              <input type="number" name="" class="form-control" placeholder="Cant. por vehiculo">
            </td>
            <td class="text-center align-middle">
              <input type="text" name="" class="form-control" placeholder="Descripcion">
            </td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="d-flex justify-content-center">
      <button type="submit" id="consulta1" class="btn btn-primary">Subir novedades</button>
    </div>
  </div>
</form>
<br>

<?php
require_once("../head/footer.php");
?>
<?php
require_once("../head/footer.php");
?>