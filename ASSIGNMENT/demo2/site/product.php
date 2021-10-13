<div class="heading headline"><?= $chi_tiet_loai['ten_loai'] ?></div>
<div class="row">
    <?php foreach ($ds_hang_hoa as $hang_hoa) : ?>
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