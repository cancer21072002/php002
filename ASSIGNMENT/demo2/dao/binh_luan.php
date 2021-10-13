<?php

//function binh_luan_insert
function binh_luan_insert($noi_dung, $ma_kh, $ma_hh, $ngay_tao){
    $sql = "INSERT INTO binh_luan(noi_dung, ma_kh, ma_hh, ngay_tao) VALUES(?,?,?,?)";
    pdo_execute($sql, $noi_dung, $ma_kh, $ma_hh, $ngay_tao);
}
//function binh_luan_update

//function binh_luan_delete

//function binh_luan_select_all

//function binh_luan_select_by_id

//function binh_luan_exist

/**
 * function binh_luan_select_by_hang_hoa
 * Hiển thị các bình luận theo hàng hóa
 */
function binh_luan_select_by_hang_hoa($ma_hh) {
    $sql = "SELECT * FROM binh_luan bl INNER JOIN khach_hang kh ON bl.ma_kh=kh.ma_kh WHERE ma_hh=?";
    return pdo_query($sql, $ma_hh);
}