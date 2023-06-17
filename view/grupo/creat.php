<?php
require_once("../head/head.php");
?>
<br>
<h2 class="text-center"><strong>AGREGAR GRUPO</strong></h2>
<br>
<div class="container">
  <form action="store.php" method="POST" autocomplete="off" class="row justify-content-center mx-auto col-xxl-4 col-xl-6 col-md-8 col-sm-10" style="max-width: 80%;">

    <div class="mb-3 col-sm-12">
      <label class="form-label">Codigo del grupo</label>
      <input type="text" name="codigo" required class="form-control" id="example">
    </div>

    <div class="mb-3 col-sm-12">
      <label class="form-label">Nombre del grupo</label>
      <input type="text" name="nombreGrupo" required class="form-control" id="example">
    </div>

    <div class="col-md-12 d-flex justify-content-center gap-3">
      <button class="btn btn-outline-success" type="submit">Agregar</button>
      <a href="./index.php" class="btn btn-outline-danger">Cancelar</a>
    </div>
  </form>

<?php
require_once("../head/footer.php");
?>