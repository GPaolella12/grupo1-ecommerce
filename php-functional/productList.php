<?php
    require_once('models/product.php');

    $products = allProducts($db);
?>
<?php require_once('partials/head.php'); ?>
<?php require_once('partials/header.php'); ?>
<main>
    <h1>LISTADO DE PRODUCTOS</h1>
    <section class="container p-2 d-flex row mx-auto">
        <?php foreach ($products as $product): ?>
            <a href="productShow.php?id=<?= $product['id']?>">
                <article class="card col-12 col-sm-6 col-md-4 col-xl-3 p-3" style="width: 18rem;">
                    <img class="card-img-top" src="https://i.linio.com/p/be2df0b65895b20885c41e0e0c13b7f7-catalog.webp" alt="">
                    <div class="card-body">
                        <h5 class="card-title"><?= $product['title'] ?></h5>
                        <small class="card-subtitle"><?= $product['discount'] ?>% de descuento</small>
                        <p class="card-text mt-2"><?= '$' . $product['price'] ?></p>
                    </div>
                </article>
            </a>
        <?php endforeach ?>
</section>
</main>

<?php require_once('partials/footer.php'); ?>