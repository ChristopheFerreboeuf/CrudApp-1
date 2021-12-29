<?php

use Repository\ProductRepository;

include 'includes/init.php';
include 'includes/header.php';

$productData = new ProductRepository();
$products = $productData->getProducts();

/*$product_id = $products->getProduct();
var_dump($product_id);*/
?>

    <div class="container overflow-hidden">
        <div class="top mt-4">
            <h1 class="position-absolute">Product list</h1>
            <div class="d-flex justify-content-end position-relative">
                <a href="add.php" class="btn btn-white border mx-2">Add</a>
                <a href="" class="btn btn-white border" id="delete-product-btn">Mass delete</a>
            </div>
        </div>
        <hr>
        <div class="row p-3">
            <?php
            foreach ($products as $product) { ?>
                <div class="col-4">
                    <div class="card col-12 p-2 mt-2 mb-3">
                        <div class="form-check">
                            <label class="form-check-label" for="delete"></label>
                            <input class="form-check-input delete-checkbox" type="checkbox" value="<?= $product->getId() ?>">
                        </div>
                        <div class="card-body text-center">
                            <h4 class="card-title"> <?= $product->getSku() ?> </h4>
                            <h5 class="card-title"> <?= $product->getName() ?> </h5>
                            <p class="card-text"> <?= $product->getPrice() ?> &euro;</p>
                            <p class="card-text"> <?= $product->getType() ?> </p>
                            <p class="card-text"> <?= $product->getSize() ?> MB</p>
                            <p class="card-text"> <?= $product->getWeight() ?> KG</p>
                            <p class="card-text">Dimension: <?= $product->getLength() ?> </p>
                        </div>
                    </div>
                </div>
            <?php  } ?>
        </div>
        <hr>
    </div>

<?php include 'includes/footer.php'; ?>

