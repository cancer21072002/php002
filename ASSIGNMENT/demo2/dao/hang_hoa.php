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
function hang_hoa_update($ten_hh, $gia, $giam_gia, $hinh, $mo_ta, $dac_biet, $ma_loai,  $ngay_sua, $ma_hh) {
    $sql = "UPDATE hang_hoa SET ten_hh=?, gia=?, giam_gia=?, hinh=?, mo_ta=?, dac_biet=?, ma_loai=?, ngay_sua=? WHERE ma_hh=?";
    pdo_execute($sql, $ten_hh, $gia, $giam_gia, $hinh, $mo_ta, $dac_biet, $ma_loai, $ngay_sua, $ma_hh);
}
//function hang_hoa_delete
function hang_hoa_delete($ma_hh) {
    $sql = "DELETE FROM hang_hoa WHERE ma_hh=?";
    if (is_array($ma_hh)) {
        foreach($ma_hh as $ma){
            pdo_execute($sql, $ma);
        }
    } else {
        pdo_execute($sql, $ma_hh);
    }
}
//function hang_hoa_select_all
function hang_hoa_select_all(){
    $sql = "SELECT * FROM hang_hoa ORDER BY ma_hh DESC";
    return pdo_query($sql);
}
//function hang_hoa_select_by_id
function hang_hoa_select_by_id($ma_hh) {
    $sql = "SELECT * FROM hang_hoa WHERE ma_hh=?";
    return pdo_query_one($sql, $ma_hh);
}
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
function hang_hoa_select_dac_biet() {
    $sql = "SELECT * FROM hang_hoa WHERE dac_biet=1 ORDER BY ngay_tao DESC LIMIT 0,6";
    return pdo_query($sql);
}

/**
 * function hang_hoa_select_by_loai
 * Hiển thị sản phẩm theo loại
 */
function hang_hoa_select_by_loai($ma_loai) {
    $sql = "SELECT * FROM hang_hoa WHERE ma_loai=?";
    return pdo_query($sql, $ma_loai);
}
/**
 * function hang_hoa_cung_loai()
 * để hiển thị 3 sản phẩm cùng loại mà không hiển thị sản phẩm đó
 * @tham số: $ma_hh chính là sản phẩm đang xem
 */
function hang_hoa_cung_loai($ma_loai, $ma_hh) {
    $sql = "SELECT * FROM hang_hoa WHERE ma_loai=? AND ma_hh!=? LIMIT 0,3";
    return pdo_query($sql, $ma_loai, $ma_hh);
}
/**
 * function hang_hoa_select_keyword
 * tìm kiếm hàng hóa theo tên hàng hóa
 * sử dụng LIKE
 */
