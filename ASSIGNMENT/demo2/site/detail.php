<div class="heading headline">
    <?= $hang_hoa_chi_tiet['ten_hh'] ?>
</div>
<div class="row-detail">
    <div class="col-6">
        <div class="thumb">
            <img src="<?= $IMAGE_URL ?>/<?= $hang_hoa_chi_tiet['hinh'] ?>" alt="">
        </div>
    </div>
    <div class="col-6">
        <div class="price-detail">
            <span class="price-new"><?= $hang_hoa_chi_tiet['gia'] ?> <u>đ</u></span>
            <!-- Giá niêm yết: <span class="price-old">16,900,000 <u>đ</u></span> -->
        </div>
    </div>
</div>
<div class="detail">
    <?= $hang_hoa_chi_tiet['mo_ta'] ?>
</div>

<?php if (isset($_SESSION['user'])) : ?>
    <form action="" method="post">
        <input type="hidden" name="ma_hh" value="<?= $hang_hoa_chi_tiet['ma_hh'] ?>">
        <textarea name="noi_dung" id="" style="width:100%" rows="5"></textarea>
        <br>
        <button type="submit" name="btn_binhluan">Gửi</button>
    </form>
<?php else : ?>
    <div class="alert">Bạn cần phải đăng nhập để bình luận</div>
<?php endif; ?>

<?php if ($binh_luan) : ?>
    <?php foreach($binh_luan as $bl): ?>
        <div>
            <?=$bl['noi_dung']?> 
            Người bình luận: <?=$bl['ten_tk']?>
        </div>
    <?php endforeach; ?>
<?php endif; ?>
<div class="heading headline">Sản phẩm cùng loại</div>
<div class="row">
    <?php foreach ($hang_hoa_cung_loai as $hang_hoa) : ?>
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