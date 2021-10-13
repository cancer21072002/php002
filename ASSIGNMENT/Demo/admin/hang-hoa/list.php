<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Ảnh</th>
            <th>Tên sản phẩm</th>
            <th>Đơn giá</th>
            <th>Lượt xem</th>
            <th>Ngày đăng</th>
            <th>hành động</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($ds_hang_hoa as $hang_hoa) : ?>
            <tr>
                <td><?=$hang_hoa['ma_hh']?></td>
                <td>
                    <img src="<?= $IMAGE_URL . '/' . $hang_hoa['hinh']?>" width="123" alt="">
                </td>
                <td><?=$hang_hoa['ten_hh']?></td>
                <td><?=$hang_hoa['gia']?></td>
                <td><?=$hang_hoa['luot_xem']?></td>
                <td><?=$hang_hoa['ngay_tao']?></td>
                <td>
                    <button class="btn btn-default"><a href="#">Sửa</a></button>
                    <button class="btn btn-danger"><a href="#">Xóa</a></button>
                </td>
            </tr>
        <?php endforeach; ?>

    </tbody>
</table>
<button class="btn"><a href="<?=$ADMIN_URL?>/hang-hoa/?btn_add">Thêm</a></button>