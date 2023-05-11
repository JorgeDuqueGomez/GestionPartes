<?php
require_once("../head/head.php");
?>
<br>
<h2 class="text-center">AGREGAR UNA LATERALIDAD</h2>
<br>
<div class="container">
  <form action="store.php" method="POST" autocomplete="off">

    <div class="mb-3 col-sm-4">
      <label class="form-label">Nueva lateralidad</label>
      <input type="text" name="nombre" required class="form-control" id="example">
    </div>

    <button type="submit" class="btn btn-primary">Crear</button>
    <a class="btn btn-danger" href="./index.php">Cancelar</a>
  </form>
</div>
<?php
require_once("../head/footer.php");
?>