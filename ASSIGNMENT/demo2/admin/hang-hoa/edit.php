<form action="index.php" method="post" enctype="multipart/form-data">
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label for="">Mã hàng hóa</label>
                <input class="form-control" type="text" name="ma_hh" readonly placeholder="auto number" value="<?= $hang_hoa['ma_hh']?>">
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label for="">Tên hàng hóa</label>
                <input class="form-control" type="text" name="ten_hh" placeholder="tên hàng" value="<?= $hang_hoa['ten_hh']?>">
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label for="">Đơn giá</label>
                <input class="form-control" type="number" name="don_gia" min="0" value="<?= $hang_hoa['gia']?>">
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label for="">Loại hàng</label>
                <select class="form-control" name="ma_loai" id="">
                    <?php foreach($loai_hang as $loai): ?>
                        <?php if($loai['ma_loai'] == $hang_hoa['ma_loai']) : ?>
                            <option selected value="<?=$loai['ma_loai']?>"><?=$loai['ten_loai']?></option>
                        <?php else : ?>
                            <option value="<?=$loai['ma_loai']?>"><?=$loai['ten_loai']?></option>
                        <?php endif; ?>
                    <?php endforeach; ?>                    
                </select>
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label for="">Hàng đặc biệt</label>
                <div class="form-special">
                    <input type="radio" name="dac_biet" value="1" <?= $hang_hoa['dac_biet']?'checked':''?>> Đặc biệt
                    <input type="radio" name="dac_biet" value="0" <?= $hang_hoa['dac_biet']==0?'checked':''?>> Bình thường
                </div>
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label for="">Hình</label>
                <input type="file" name="hinh" placeholder="">
                <input type="hidden" name="hinh_cu" value="<?= $hang_hoa['hinh']?>">
                <br>
                <img src="<?= $IMAGE_URL?>/<?= $hang_hoa['hinh']?>" alt="" width="123">
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label for="">Giảm giá</label>
                <input class="form-control" type="number" name="giam_gia" placeholder="Theo phần trăm" value="<?= $hang_hoa['giam_gia']?>">
            </div>
        </div>
        <div class="full">
            <div class="form-group">
                <label for="">Mô tả</label>
                <textarea name="mo_ta"><?= $hang_hoa['mo_ta']?></textarea>
            </div>
        </div>

    </div>
    <button class="btn" type="submit" name="btn_update">Cập nhật</button>
    <button class="btn"><a href="<?=$ADMIN_URL?>/hang-hoa/">Danh sách</a></button>

</form>