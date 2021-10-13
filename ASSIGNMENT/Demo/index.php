<?php
require_once "dao/loai.php";

//Câu lệnh SQL
// $sql = "INSERT INTO loai(ten_loai, bieu_tuong) VALUES(?, ?)";
// $ten_loai = "Apple";
// $bieu_tuong = "apple.jpg";
// pdo_execute($sql, $ten_loai, $bieu_tuong);
//Cập nhật dữ liệu cho bảng loại
loai_update('Samsung', 'samsung.jpg', 1);

$sql = "SELECT * FROM loai";
$result = pdo_query($sql);


// $sql = "SELECT * FROM loai WHERE ma_loai=?";
// $result = pdo_query_one($sql, 2);
echo "<pre>";
var_dump($result);
echo "<pre>";
$value = pdo_query_value($sql, 1);
var_dump($value);