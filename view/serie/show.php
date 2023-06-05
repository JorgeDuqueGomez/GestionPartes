<?php
require_once("../head/head.php");
require_once("../../controller/lateralidadCtrl.php");

$obj = new lateralidadController();
$date = $obj->show($_GET['id']);

?>

<h2 class="text-center">Lateralidad Ingresada</h2>

<div class="container">
    <table class="table container-fluid">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nombre</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td scope="col"><?= $date["idLateralidad"] ?></td>
                <td scope="col"><?= $date["nombreLateralidad"] ?></td>
            </tr>
        </tbody>
    </table>
    <div>
        <a href="./index.php" class="btn btn-primary">Regresar</a>
        <a href="./edit.php?id=<?= $date[0] ?>" class="btn btn-success">Modificar</a>
        
        <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Eliminar</a>

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">

                        <h5 class="modal-title fs-5" id="exampleModalLabel">¿Desea eliminar el registro?</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Una vez eliminado no podra recuperar el registro.
                    </div>
                    <div class="modal-footer">
                    <a href="delete.php?id=<?= $date[0]?>" class="btn btn-danger">Eliminar</a>
                    <button type="button" class="btn btn-success" data-bs-dismiss="modal">Cancelar</button>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>







<?php
require_once("../head/footer.php");
?>