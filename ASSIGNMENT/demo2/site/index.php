<?php
require_once "../global.php";
require_once "../dao/loai.php";
require_once "../dao/hang_hoa.php";
require_once "../dao/khach_hang.php";
require_once "../dao/binh_luan.php";

extract($_REQUEST);

$loai_hang = loai_select_all();

if (array_key_exists('btn_dangnhap', $_REQUEST)) {
    $khach_hang = khach_hang_by_tai_khoan($username);
    if ($khach_hang) {
        if ($password == $khach_hang['mat_khau']) {
            $_SESSION['user'] = $khach_hang;
            header('location: ' . $SITE_URL);
            die;
        }
    } 
    $MESSAGE = "Tên tài khoản hoặc mật khẩu không đúng";
    $VIEW_PAGE = "login.php";

} elseif (array_key_exists('btn_binhluan', $_REQUEST)) {
    $ngay_tao = date("Y-m-d");
    binh_luan_insert($noi_dung, $_SESSION['user']['ma_kh'], $ma_hh,$ngay_tao);
    header('location: '. $_SERVER['REQUEST_URI']);
    die;
}
elseif (array_key_exists('product', $_REQUEST)) {
    if (isset($ma_loai)) {
        $chi_tiet_loai = loai_select_by_id($ma_loai);
        $ds_hang_hoa = hang_hoa_select_by_loai($ma_loai);
        $VIEW_PAGE = "product.php";
    } else {
        $VIEW_PAGE = "404.php";
    }
    
} elseif (array_key_exists('detail', $_REQUEST)) {
    if (isset($ma_hh)) {
        $hang_hoa_chi_tiet = hang_hoa_select_by_id($ma_hh);
        $hang_hoa_cung_loai = hang_hoa_cung_loai($hang_hoa_chi_tiet['ma_loai'], $ma_hh);
        //lấy ra bình luận của hàng hóa
        $binh_luan = binh_luan_select_by_hang_hoa($ma_hh);

        $VIEW_PAGE = "detail.php";
    }else {
        $VIEW_PAGE = "404.php";
    }
    
} else {
    $hang_hoa_dacbiet = hang_hoa_select_dac_biet();
    $VIEW_PAGE = "home.php";
}


include_once "layout.php";