<?php
    require_once('models/product.php');
    if (isset($_GET['id'])) {
        
        $product = getProduct($db, $_GET['id']);
    }
?>
<?php require_once('partials/head.php'); ?>
<?php require_once('partials/header.php'); ?>

<main>
    <h1>DETALLE DEL PRODUCTO</h1>
    <div class="product">
        <article class="card col-12 col-sm-6 col-md-4 col-xl-3 p-3" style="width: 18rem;">
            <img class="card-img-top" src="https://i.linio.com/p/be2df0b65895b20885c41e0e0c13b7f7-catalog.webp" alt="">
            <div class="card-body">
                <h5 class="card-title"><?= $product['title'] ?></h5>
                <small class="card-subtitle"><?= $product['discount'] ?>% de descuento</small>
                <p class="card-text mt-2">$<?= $product['price'] ?></p>
            </div>
        </article>
    </div>
</main>

<?php require_once('partials/footer.php'); ?>