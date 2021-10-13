<?php

//Tạo các biến toàn cục chứa đường dẫn
$ROOT_URL = "/we16303_duanmau";
$ADMIN_URL = $ROOT_URL . "/admin";
$IMAGE_URL = $ROOT_URL . "/images";

//Đường dẫn tới thư mục upload file
$PATH_IMG = $_SERVER['DOCUMENT_ROOT'] . $IMAGE_URL;

/**
 * Hàm upload file
 * @tham số: $file tên của file trong form
 * @tham số: $dir_path đường dẫn tới thư mục upload
 * @return tên của file
 */
function save_file($file, $dir_path) {
    $file_upload = $_FILES[$file];
    $file_name = $file_upload['name'];
    $dir_file_path = $dir_path . $file_name;
    move_uploaded_file($file_upload['tmp_name'], $dir_file_path);
    return $file_name;
}