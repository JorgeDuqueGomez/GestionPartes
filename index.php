<?php
require_once("../HINO/view/head/head.php");
?>

<div class="grid text-center">
    <div class="g-col-6">
        <div>
            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item">
                        <img src="../HINO/images/imagen3.jpg" class="d-block w-100 img-fluid" alt="...">

                    </div>

                    <div class="carousel-item active">
                        <img src="../HINO/images/imagen4.jpeg" class="d-block w-100 img-fluid" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <p class="display-3">Sistema de gestion de partes</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="../HINO/images/imagen1.jpg" class="d-block w-100 img-fluid" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
</div>
<br><br>
<div class="container-xl">
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
            <div class="card container border-0">
                <img src="./images/imagen11.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h4 class="card-title text-center">Control Parts List</h4>
                    <p class="card-text text-center">Consulte el CPL de cualquier modelo facil y rapidamente</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card container border-0">

                <div class="card-body">
                    <h4 class="card-title text-center">Listados</h4>
                    <p class="card-text text-center">Consulte los listados con todas las actualizaciones en tiempo real</p>
                    <img src="./images/imagen7.webp" class="card-img-top" alt="...">
                    <img src="./images/imagen16.jpg" class="card-img-top" alt="...">
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card container border-0">
                <img src="./images/imagen15.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h4 class="card-title text-center">Modelos</h4>
                    <p class="card-text text-center">Consulte todos los modelos que se ensamblan en HMMC actualmente</p>
                </div>
            </div>
        </div>

    </div>
</div>
</div>
<?php
require_once("../HINO/view/head/footer.php");
?>