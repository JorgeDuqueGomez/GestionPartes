<?php
require_once("../head/head.php");
?>
<br>
<h2 class="text-center">AGREGAR UN GRUPO</h2>
<br>
<div class="container">
  <form action="store.php" method="POST" autocomplete="off">

    <div class="mb-3 col-sm-4">
      <label class="form-label">Codigo del grupo</label>
      <input type="text" name="codigo" required class="form-control" id="example">
    </div>

    <div class="mb-3 col-sm-4">
      <label class="form-label">Nombre del grupo</label>
      <input type="text" name="nombreGrupo" required class="form-control" id="example">
    </div>

    <button type="submit" class="btn btn-primary">Crear</button>
    <a class="btn btn-danger" href="./index.php">Cancelar</a>
  </form>
</div>
<?php
require_once("../head/footer.php");
?>