<?php
require_once("../head/head.php");
require_once("../../controller/parteCtrl.php");
require_once("../../controller/tpmCtrl.php");

$obj =  new parteController();
$objTpm =  new tpmController();
$parte = $objTpm->showParte();
$sufix = $objTpm->getSufix();
$material = $obj->showMaterial();

?>
<br>
<h1 class="text-center"><strong>GESTIÓN DE TPM's</strong></h1>
<div class="container">
  <div class="row justify-content-evenly">
    <div class="d-flex justify-content-center mb-3">
      <a href="index.php" class="btn btn-danger d-flex align-items-center"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
          <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z" />
        </svg> &nbsp;Atras</a>
    </div>

    <div class="col-5 border border-success border-3 rounded-2 d-flex flex-column align-items-center">
      <br>
      <h4 class="align-self-center">Ingresar un Tpm</h4><br>
      <div class="mb-3 col-10 ">
        <div class="mb-3 col-md-12">
          <div class="form-floating">
            <select class="form-select" name="idParte" id="floatingSelect" aria-label="Floating label select example">
              <option selected="true"></option>
              <?php foreach ($parte as $partes) : ?>
                <option value="<?= $partes['idParte'] ?>"><?= $partes['numeroParte'] ?></option>
              <?php endforeach; ?>
            </select>
            <label for="floatingSelect">Numero Antiguo</label>
          </div>
          <br>
          <div class="form-floating">
            <select class="form-select" name="idParte" id="floatingSelect">
              <option selected="true"></option>
              <?php foreach ($parte as $partes) : ?>
                <option value="<?= $partes['idParte'] ?>"><?= $partes['numeroParte'] ?></option>
              <?php endforeach; ?>
            </select>
            <label for="floatingSelect">Numero Nuevo</label>
          </div>
          <br>
          <div class="form-row">
            <div class="form-group col-md-10">
              <div class="form-floating">
                <select name="nombreSufix" class="form-select">
                  <option selected="true"></option>
                  <?php foreach ($sufix as $sufixes) : ?>
                    <option value="<?= $sufixes['idSufix'] ?>"><?= $sufixes['nombreSufix'] ?></option>
                  <?php endforeach; ?>
                </select>
                <label for="floatingSelect">Sufix Code</label>
              </div>
            </div>
            <div class="form-group col-md-13">
              <div class="form-floating">
                <input type="number" class="form-control" name="nombreParte" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Lote de efectividad</label>
              </div>
            </div>
          </div>
        </div>
        <div class="mb-2 d-flex justify-content-center">
          <button class="btn btn-outline-success" type="submit">Agregar Cambio</button>
        </div>
      </div>
    </div>

    <div class="col-5 d-flex flex-column align-items-center border border-muted border-3 rounded-2">
      <br>
      <h4 class="align-self-center">Agregar parte Inexistente</h4><br>
      <form class="col-8" action="../parte/storeTpm.php" method="POST" autocomplete="off">

        <div class="form-floating mb-3">
          <input type="text" class="form-control" name="nombreParte" id="floatingInput" placeholder="name@example.com">
          <label for="floatingInput">Nombre de la parte</label>
        </div>

        <div class="form-floating mb-3">
          <input type="text" class="form-control" name="numeroParte" id="floatingInput" placeholder="name@example.com">
          <label for="floatingInput">Numero de parte</label>
        </div>

        <div class="form-floating">
          <select class="form-select" name="idMaterial" aria-label="Floating label select example">
            <option selected="true" disabled="disabled">Seleccione un material</option>
            <?php foreach ($material as $materiales) : ?>
              <option value="<?= $materiales['idMaterial'] ?>"><?= $materiales['nombreMaterial'] ?></option>
            <?php endforeach; ?>
          </select>
          <label for="floatingSelect">Tipo de material</label>
        </div>
        <br>
        <div class="mb-2 d-flex justify-content-center">
          <button class="btn btn-outline-secondary" type="submit">Crear Parte</button>
        </div>
      </form>
    </div>
  </div>
</div>
<br><br>
<?php
require_once("../head/footer.php");
?>