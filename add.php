<?php
require_once('classes/Database.php');
require_once('classes/Product.php');

include 'includes/init.php';
include 'includes/header.php';

/*$productData = new ProductRepository();
$products = $productData->getProducts();*/

$typeData = new TypeRepository();
$types = $typeData->getTypes();

?>

<div class="container">
    <form action="index.php" method="POST" id="product_form">
        <div class="top mt-4">
            <h1 class="position-absolute">Add product</h1>
            <div class="mb-3 d-flex justify-content-end position-relative">
                <button type="submit" name="save" class="btn btn-white border mx-2">Save</button>
                <a href="index.php" class="btn btn-white border">Cancel</a>
            </div>
        </div>
        <hr class="mb-5">
        <div class="mb-3">
            <label for="sku" class="form-label">SKU</label>
            <input id="sku" type="text" name="sku" value="" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input id="name" type="text" name="name" value="" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price $</label>
            <input id="price" type="number" name="price" value="" class="form-control" required>
        </div>
        <div class="mb-3">
            <select id="productType" class="form-select" aria-label="selection">
                <?php foreach ($types as $type) { ?>
                    <option><?= $type->getName() ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="size" class="form-label">Size (MB)</label>
            <input id="size" type="number" name="size" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="weight" class="form-label">Weight (Kg)</label>
            <input id="weight" type="number" name="weight" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="length" class="form-label">length (HxWxl)</label>
            <input id="length" type="number" name="length" class="form-control" required>
        </div>
        <hr class="mt-5">
    </form>
</div>
