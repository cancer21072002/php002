<?php

require_once "../../global.php";
require_once "../../dao/loai.php";
require_once "../../dao/hang_hoa.php";

extract($_REQUEST);
// $arr = ['name'=>'ngocbq', 'email'=>'ngocbq3@fe.edu.vn']
// extract($arr);
// $name = 'ngocbq'; $email = 'ngocbq3@fe.edu.vn';
if (array_key_exists('btn_insert', $_REQUEST)) {
    $hinh = save_file('hinh', $PATH_IMG . '/');
    $hinh = strlen($hinh) > 0 ? $hinh : 'product.jpg';

    $ngay_tao = date('Y-m-d');

    hang_hoa_insert($ten_hh, $don_gia, $giam_gia, $hinh, $mo_ta, $dac_biet, $ma_loai, $ngay_tao, $ngay_tao);

    $ds_hang_hoa = hang_hoa_select_all();
    $VIEW_PAGE = 'list.php';
}elseif (array_key_exists('btn_add', $_REQUEST)) {
    $loai_hang = loai_select_all();
    $VIEW_PAGE = 'add.php';
}elseif (array_key_exists('btn_edit', $_REQUEST)) {
    $loai_hang = loai_select_all();
    $hang_hoa = hang_hoa_select_by_id($ma_hh);
    $VIEW_PAGE = 'edit.php';
} elseif (array_key_exists('btn_update', $_REQUEST)) {
    $hinh = save_file('hinh', $PATH_IMG . '/');
    $hinh = strlen($hinh) > 0 ? $hinh : $hinh_cu;

    $ngay_sua = date('Y-m-d');

    hang_hoa_update($ten_hh, $don_gia, $giam_gia, $hinh, $mo_ta, $dac_biet, $ma_loai,  $ngay_sua, $ma_hh);

    $MESSAGE = "Cập nhật dữ liệu thành công";
    $ds_hang_hoa = hang_hoa_select_all();
    $VIEW_PAGE = 'list.php';
} elseif (array_key_exists('btn_delete', $_REQUEST)) {
    if (isset($ma_hh)) {
        hang_hoa_delete($ma_hh);
        $MESSAGE = "Xóa dữ liệu thành công";
    }
    $ds_hang_hoa = hang_hoa_select_all();
    $VIEW_PAGE = 'list.php';
}
else {
    $ds_hang_hoa = hang_hoa_select_all();
    $VIEW_PAGE = 'list.php';
}

require_once "../layout.php";