<?php
require_once("../head/head.php");
require_once("../../controller/grupoCtrl.php");
$obj =  new grupoController();
$rows = $obj->index();
?>
<br>
<h1 class="text-center"><strong>LISTA DE GRUPOS</strong></h1>
<br>

<script>
    $(document).ready(function() {
        $('#grupoTable').DataTable({
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.13.1/i18n/es-ES.json"
            }
        });
    });
</script>

<div class="container">

    <table class="table table-bordered" id="grupoTable">
        <thead class="table-light">
            <tr>
                <th class="text-center">Grupo</th>
                <th class="text-center">Nombre</th>
            </tr>
        </thead>

        <tbody>
            <?php if ($rows) : ?>
                <?php foreach ($rows as $row) : ?>
                    <tr>
                        <th class="text-center align-middle"><?= $row[1] ?></th>
                        <th class="text-break align-middle"><?= $row[2] ?></th>
                    </tr>
                <?php endforeach; ?>
            <?php else : ?>
                <tr>
                    <td colspan="3" class="text-center">No hay registros</td>
                </tr>
            <?php endif; ?>

        </tbody>
    </table>
</div>

<?php
require_once("../head/footer.php");
?>