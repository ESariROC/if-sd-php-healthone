<!DOCTYPE html>
<html>
<?php
include_once('defaults/head.php');
?>
<body>
<div class="container bg-dark">
    <?php
    include_once ('defaults/header.php');
    include_once ('defaults/menu.php');
    include_once ('defaults/pictures.php');
    global $product;
    global $review;
    ?>
    <div class="container bg-dark">
        <div class="row">
            <div class="col-md-6 bg-dark">
                <h3 class="text-white"><?php echo $product->name?></h3>
                <img class="img-fluid img-thumbnail" style="width: 85%" src='/img/<?= $product->img ?>'/>
            </div>
            <div class="col-md-6 bg-dark pt-5">
                <p class="text-white"><?php echo $product->description?></p><br>
                <p class="text-white">€<?php echo $product->price?>,-</p>
            </div>
        </div>
    </div>
    <hr>

        <div class="row">
            <?php foreach ($review as &$reviews): ?>
            <div class="row">
                <div class="col-md-12 text-white">
                    <hr>
                    <b><p><?= $reviews->name . ' ' . $reviews->date . ' ' . $reviews->time?></p></b>
                    <p><b><?= $reviews->title ?></p></b>
                    <p><?= $reviews->description ?></p>
                    <p><?= $reviews->rating ?> Stars</p>
                </div>
            </div>
        </div>
        <?php endforeach; ?>


    <hr class="bg-light">
    <?php
    include_once ('defaults/footer.php');
    ?>
</div>
</body>
</html>
