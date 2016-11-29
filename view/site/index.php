<?php
require '/../../app/DB.php';
$db = new DB();
$products = $db->select("products", "*");
include __DIR__.'/../layouts/header.php';
?>



<div class = "discount row">
    <div class="col-md-12">
        <p>До конца акции: <span id = "discountEnd">00 дн. 00 часов 00 минут 00 секунд</span></p>
    </div>
</div>

<div class="content row">
    <?php include __DIR__.'/../layouts/sidebar.php' ?>
    <div class="col-md-9">
        <?php foreach($products as $product): ?>
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <a href = ""><img src="images/<?=$product["img"]?>" alt="item"/></a>
                <div class="caption">
                    <a href = ""><h3><?=$product["title"]?></h3></a>
                    <p><?=$product["description"]?></p>
                    <p>Цена: <?=$product["price"]?> BYN</p>
                    <p>
                        <a href="#" class="btn btn-primary" role="button">В корзину</a>
                    </p>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>

<?php include __DIR__.'/../layouts/footer.php' ?>