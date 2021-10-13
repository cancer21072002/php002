<?php

/**
 * Sinh viên hoàn thiện các hàm theo chú thích sau
 */
//function function khach_hang_insert


//function function khach_hang_update

//functiong function khach_hang_delete


//function khach_hang_select_all

//function khach_hang_select_by_id

//function khach_hang_by_tai_khoan
function khach_hang_by_tai_khoan($ten_tk)
{
    $sql = "SELECT * FROM khach_hang WHERE ten_tk=?";
    return pdo_query_one($sql, $ten_tk);
}
/**
 * function khach_hang_exist
 * Để kiểm tra sự tồn tại của khách hàng
 */

/**
 * function khach_hang_select_by_role
 * Lấy ra danh sách khách hàng theo vai trò (quản trị hay khách hàng)
 */

/**
 * function khach_hang_change_password
 * dùng để thay đổi mật khẩu
 */
