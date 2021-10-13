<?php
require_once "pdo.php";
//loai.php sẽ xử lý các hàm dữ liệu cho bảng loai

//Thêm dữ liệu 
function loai_insert($ten_loai, $bieu_tuong)
{
    $sql = "INSERT INTO loai(ten_loai, bieu_tuong) VALUES(?,?)";
    pdo_execute($sql, $ten_loai, $bieu_tuong);
}
//Sửa dữ liệu
function loai_update($ten_loai, $bieu_tuong, $ma_loai) {
    $sql = "UPDATE loai SET ten_loai=?, bieu_tuong=? WHERE ma_loai=?";
    pdo_execute($sql, $ten_loai, $bieu_tuong, $ma_loai);
}

/**
 * Xóa dữ liệu
 * Kiểm tra xem $ma_loai có phải là mảng không (Xóa 1 lúc nhiều loại)
 * Nếu đúng thì sẽ xóa từng loại 1
 * Nếu sai thì chỉ xóa 1 loại
 */
function loai_delete($ma_loai) {
    $sql = "DELETE FROM loai WHERE ma_loai=?";
    if (is_array($ma_loai)) {
        foreach($ma_loai as $ma){
            pdo_execute($sql, $ma);
        }
    } else {
        pdo_execute($sql, $ma_loai);
    }
}

//Lấy toàn bộ dữ liệu
function loai_select_all(){
    $sql = "SELECT * FROM loai";
    return pdo_query($sql);
}

/**
 * Truy vấn 1 bản ghi theo mã loại
 */
function loai_select_by_id($ma_loai) {
    $sql = "SELECT * FROM loai WHERE ma_loai=?";
    return pdo_query_one($sql, $ma_loai);
}

//Kiểm tra sự tồn tại của loại hàng
function loai_exist($ma_loai)
{
    $sql = "SELECT count(*) FROM loai WHERE ma_loai=?";
    return pdo_query_value($sql, $ma_loai) > 0;
}
