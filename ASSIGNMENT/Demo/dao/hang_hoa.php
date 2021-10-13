<?php
require_once "pdo.php";
/**
 * Sinh viên hoàn thiện các hàm theo chú thích sau
 */
//function hang_hoa_insert
function hang_hoa_insert($ten_hh, $gia, $giam_gia, $hinh, $mo_ta, $dac_biet, $ma_loai, $ngay_tao, $ngay_sua) {
    $sql = "INSERT INTO hang_hoa(ten_hh, gia, giam_gia, hinh, mo_ta, dac_biet,ma_loai, ngay_tao, ngay_sua) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?)";
    pdo_execute($sql, $ten_hh, $gia, $giam_gia, $hinh, $mo_ta, $dac_biet, $ma_loai, $ngay_tao, $ngay_sua);
}
//function hang_hoa_update

//function hang_hoa_delete

//function hang_hoa_select_all
function hang_hoa_select_all(){
    $sql = "SELECT * FROM hang_hoa ORDER BY ma_hh DESC";
    return pdo_query($sql);
}
//function hang_hoa_select_by_id

//function hang_hoa_exist

//function hang_hoa_tang_so_luot_xem

/**
 * function hang_hoa_select_top10()
 * Hiển thị 10 sản phẩm có số lượt xem lớn nhất
 */


/**
 * function hang_hoa_select_dac_biet()
 * Hiển thị các sản phẩm đặc biệt
 */


/**
 * function hang_hoa_select_by_loai
 * Hiển thị sản phẩm theo loại
 */

/**
 * function hang_hoa_select_keyword
 * tìm kiếm hàng hóa theo tên hàng hóa
 * sử dụng LIKE
 */
