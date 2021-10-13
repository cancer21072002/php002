<div class="heading headline">Sản phẩm đặc biệt</div>
<div class="row">

    <?php foreach ($hang_hoa_dacbiet as $hang_hoa) : ?>
        <div class="col">
            <a href="<?= $SITE_URL ?>/?detail&ma_hh=<?= $hang_hoa['ma_hh'] ?>">
                <img src="<?= $IMAGE_URL ?>/<?= $hang_hoa['hinh'] ?>" alt="">
                <div class="product-name">
                    <h4><?= $hang_hoa['ten_hh'] ?></h4>
                </div>
                <div class="price">
                    <?= $hang_hoa['gia'] ?> <u>đ</u>
                </div>
            </a>
        </div>
    <?php endforeach; ?>

</div>
<div class="heading headline">Sản phẩm đang được giảm giá</div>
<div class="row">
    <div class="col">
        <a href="#">
            <img src="images/anh1.jfif" alt="">
            <div class="product-name">
                <h4>Samsung Galaxy A50s - Chính hãng</h4>
            </div>
            <div class="price">
                7000000 <u>đ</u>
            </div>
        </a>
    </div>
    <div class="col">
        <a href="#">
            <img src="images/iphone.jfif" alt="">
            <div class="product-name">
                <h4>Iphone 11 Pro Max</h4>
            </div>
            <div class="price">
                27000000 <u>đ</u>
            </div>
        </a>
    </div>
    <div class="col">
        <a href="#">
            <img src="images/anh1.jfif" alt="">
            <div class="product-name">
                <h4>Apple iPad Mini 5 - Wifi - 64GB - Chính hãng</h4>
            </div>
            <div class="price">
                7000000 <u>đ</u>
            </div>
        </a>
    </div>

</div>