<?php
require_once("../head/head.php");
require_once("../../controller/lineaCtrl.php");
require_once("c:/wamp64/www/HINO/config/conexion.php");

$obj = new lineaController();
$user = $obj->show($_GET['id']);


$PDO = (new db())->conexion();

$consulta = $PDO->query("SELECT idEstado , nombreEstado FROM estado");

?>
<br>
<h2 class="text-center">MODIFICANDO UNA LINEA</h2>
<br>
<div class="container">
    <form action="update.php" method="POST" autocomplete="off">
        <div class="mb-3 row">
            <label class="col-sm-2 col-form-label text-center">ID Linea</label>
            <div class="col-sm-3">
                <input type="text" name="idLinea" class="form-control-plaintext text-center" id="inputPassword" value="<?= $user[0] ?>">
            </div>
        </div>

        <div class="mb-3 row">
            <label class="col-sm-2 col-form-label text-center">Nombre linea</label>
            <div class="col-sm-3">
                <input type="text" name="nombreLinea" class="form-control text-center" id="inputPassword" value="<?= $user[1] ?>">
            </div>
        </div>

        <div class="mb-3 row">
            <label class="col-sm-2 col-form-label text-center">Estado
            </label>
            <div class="col-sm-3">
                <select name="estado" class="form-control text-center" id="inputPassword">
                    <?php
                    while ($estado = $consulta->fetch(PDO::FETCH_ASSOC)) {
                        echo '<option value ="' . $estado['idEstado'] . '">' . $estado['nombreEstado'] . '</option>';
                    }
                    ?>
                </select>
            </div>
        </div>

        <div>
            <input type="submit" class="btn btn-success" value="Actualizar">
            <a class="btn btn-danger" href="./index.php">Cancelar</a>
        </div>

    </form>
</div>









<?php
require_once("../head/footer.php");
?>