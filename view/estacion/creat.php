<?php
require_once("../head/head.php");
?>ss
<br>
<h2 class="text-center">AGREGAR UNA ESTACION</h2>
<br>
<div class="container">
  <form action="store.php" method="POST" autocomplete="off">

    <div class="mb-3 col-sm-4">
      <label class="form-label">Nombre de la estacion</label>
      <input type="text" name="nombreEstacion" required class="form-control" id="example">
    </div>

    <div class="mb-3 col-sm-4">
      <label class="form-label">Linea</label>
      <input type="text" name="idLinea" required class="form-control" id="example">
    </div>
    
    <div class="mb-3 col-sm-4">
      <label class="form-label">Lateralidad</label>
      <input type="text" name="idLateralidad" required class="form-control" id="example">
    </div>
    
    <div class="mb-3 col-sm-4">
      <label class="form-label">Estado</label>
      <input type="text" name="idEstado" required class="form-control" id="example">
    </div>

    <button type="submit" class="btn btn-primary">Crear</button>
    <a class="btn btn-danger" href="./index.php">Cancelar</a>
  </form>
</div>
<?php
require_once("../head/footer.php");
?>