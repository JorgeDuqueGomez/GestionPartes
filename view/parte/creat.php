<?php
require_once("../head/head.php");
require_once("../../controller/parteCtrl.php");

$obj =  new parteController();
?>
<br>
<h2 class="text-center"><strong>AGREGAR PARTES</strong></h2>
<br><br>

<div class="container">
  <div class="row justify-content-evenly">
    <div class="col-5 d-flex flex-column align-items-center border border-muted border-3 rounded-2">

      <br>
      <h4 class="align-self-center">Agregar una parte</h4><br>

      <form class="col-8" action="store.php" method="POST" autocomplete="off">
        <div class="mb-3">
          <label class="form-label">Nombre de la parte</label>
          <input type="text" name="nombreParte" required id="example" class="form-control">
        </div>

        <div class="mb-3">
          <label class="form-label">Numero de parte</label>
          <input type="text" name="numeroParte" required id="example" class="form-control">
        </div>

        <div class="mb-5 d-flex justify-content-center gap-3">
          <button class="btn btn-outline-success" type="submit">Agregar</button>
          <a href="./index.php" class="btn btn-outline-danger">Cancelar</a>
        </div>
      </form>
    </div>

    <div class="col-5 border border-success border-3 rounded-2 d-flex flex-column align-items-center">
      <br>
      <h4 class="align-self-center">Importar partes desde EXCEL</h4><br>
      <div class="mb-3 col-10 ">
        <label for="formFile" class="form-label">Inserte el archivo que contiene las partes</label>
        <input class="mb-3 form-control" type="file" id="formFile">
        <div class="mb-5 d-flex justify-content-center gap-3">
          <button class="btn btn-outline-success" type="submit">Subir archivo</button>
        </div>
      </div>

    </div>
  </div>
</div>

<?php
require_once("../head/footer.php");
?>