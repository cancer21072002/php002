-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 13, 2021 lúc 12:08 PM
-- Phiên bản máy phục vụ: 10.4.14-MariaDB
-- Phiên bản PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `we16303_duanmau`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binh_luan`
--

CREATE TABLE `binh_luan` (
  `ma_bl` int(11) NOT NULL,
  `noi_dung` varchar(255) NOT NULL,
  `ma_kh` int(11) NOT NULL,
  `ma_hh` int(11) NOT NULL,
  `ngay_tao` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `binh_luan`
--

INSERT INTO `binh_luan` (`ma_bl`, `noi_dung`, `ma_kh`, `ma_hh`, `ngay_tao`) VALUES
(4, 'Bình luận 1', 2, 12, '2021-10-13'),
(5, 'Bình luận 2', 2, 12, '2021-10-13'),
(6, 'Bình luận của admin', 1, 12, '2021-10-13'),
(7, 'asdasd sad', 2, 13, '2021-10-13');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cau_hinh`
--

CREATE TABLE `cau_hinh` (
  `ma_ch` int(4) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `dia_chi` varchar(255) NOT NULL,
  `sdt` varchar(15) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `youtube` varchar(300) NOT NULL,
  `tiktok` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hang_hoa`
--

CREATE TABLE `hang_hoa` (
  `ma_hh` int(11) NOT NULL,
  `ten_hh` varchar(255) NOT NULL,
  `gia` decimal(10,2) NOT NULL,
  `giam_gia` tinyint(3) NOT NULL,
  `hinh` varchar(255) NOT NULL,
  `mo_ta` text NOT NULL,
  `dac_biet` tinyint(1) NOT NULL,
  `ma_loai` int(11) NOT NULL,
  `luot_xem` int(11) NOT NULL DEFAULT 0,
  `ngay_tao` date DEFAULT NULL,
  `ngay_sua` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `hang_hoa`
--

INSERT INTO `hang_hoa` (`ma_hh`, `ten_hh`, `gia`, `giam_gia`, `hinh`, `mo_ta`, `dac_biet`, `ma_loai`, `luot_xem`, `ngay_tao`, `ngay_sua`) VALUES
(5, 'Apple iPhone 12 Pro - 128GB - Chính hãng VN/A', '1099.00', 0, 'iphone-12-pro-max-xanh-duong-new-600x600-600x600.jpg', 'Apple iPhone 12 Pro - 128GB - Chính hãng VN/A', 1, 2, 0, '2021-09-29', '2021-09-29'),
(6, 'Apple iPhone 12 Mini - 64GB - Chính hãng VN/A', '699.00', 0, 'iphone-12-xanh-duong-600x600.jpg', 'Apple iPhone 12 Mini - 64GB - Chính hãng VN/A', 0, 2, 0, '2021-09-29', '2021-09-29'),
(7, 'Apple Watch SE GPS, 40mm Aluminum Case with Sport Band - Chính hãng (VN/A)', '499.00', 0, 'samsung-galaxy-z-flip-3-cream-1-600x600.jpg', 'Apple Watch SE GPS, 40mm Aluminum Case with Sport Band - Chính hãng (VN/A)', 0, 2, 0, '2021-09-29', '2021-09-29'),
(8, 'Điện thoại di động Xiaomi Redmi Note 10 5G - Chính hãng', '250.00', 0, 'oppo-reno6-z-5g-aurora-1-600x600.jpg', 'Điện thoại di động Xiaomi Redmi Note 10 5G - Chính hãng', 0, 3, 0, '2021-09-29', '2021-09-29'),
(9, 'Điện thoại di động Samsung Galaxy S21 Ultra 256GB 5G - Chính hãng', '999.00', 10, 'samsung-galaxy-z-fold-3-silver-1-600x600.jpg', 'Điện thoại di động Samsung Galaxy S21 Ultra 256GB 5G - Chính hãng', 1, 1, 0, '2021-09-29', '2021-09-29'),
(11, 'Điện thoại iPhone 12 64GB', '699.00', 10, 'iphone-12-xanh-duong-600x600.jpg', 'Điện thoại iPhone 12 64GB', 1, 2, 0, '2021-10-02', '2021-10-12'),
(12, 'Điện thoại Samsung Galaxy S20 FE (8GB/256GB)', '12990000.00', 10, 'samsung-galaxy-s20-fan-edition-090320-040338-600x600.jpg', 'Samsung đã giới thiệu đến người dùng thành viên mới của dòng điện thoại thông minh S20 Series đó chính là Samsung Galaxy S20 FE. Đây là mẫu flagship cao cấp quy tụ nhiều tính năng mà Samfan yêu thích, hứa hẹn sẽ mang lại trải nghiệm cao cấp của dòng Galaxy S với mức giá dễ tiếp cận hơn.\r\nNhiếp ảnh chuyên nghiệp với cụm camera đẳng cấp\r\nCamera trên S20 FE là 3 cảm biến chất lượng nằm gọn trong mô đun chữ nhật độc đáo ở mặt lưng bao gồm: Camera chính 12 MP cho chất lượng ảnh sắc nét, camera góc siêu rộng 12 MP cung cấp góc chụp tối đa và cuối cùng camera tele 8 MP hỗ trợ zoom quang 3X.', 1, 1, 0, '2021-10-13', '2021-10-13'),
(13, 'Điện thoại Samsung Galaxy Z Fold3 5G 512GB', '43000000.00', 0, 'samsung-galaxy-z-fold-3-silver-1-600x600.jpg', 'Galaxy Z Fold3 5G đánh dấu bước tiến mới của Samsung trong phân khúc điện thoại gập cao cấp khi được cải tiến về độ bền cùng những nâng cấp đáng giá về cấu hình hiệu năng, hứa hẹn sẽ mang đến trải nghiệm sử dụng đột phá cho người dùng.\r\nĐột phá thiết kế màn hình gập\r\nĐầu tiên, khung viền Galaxy Z Fold3 được hoàn thiện bằng chất liệu Armor Aluminum cao cấp nhất từ trước đến giờ nhằm tăng cường được độ bền, mà vẫn đảm bảo được trọng lượng cân đối đem tới cảm giác vô cùng chắc chắn và cao cấp. ', 1, 1, 0, '2021-10-13', '2021-10-13');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khach_hang`
--

CREATE TABLE `khach_hang` (
  `ma_kh` int(11) NOT NULL,
  `ten_tk` varchar(255) NOT NULL COMMENT 'Tên tài khoản',
  `mat_khau` varchar(190) NOT NULL,
  `ho_ten` varchar(255) NOT NULL,
  `hinh` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gioi_tinh` tinyint(1) NOT NULL,
  `dia_chi` varchar(255) NOT NULL,
  `vai_tro` tinyint(1) NOT NULL,
  `kich_hoat` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `khach_hang`
--

INSERT INTO `khach_hang` (`ma_kh`, `ten_tk`, `mat_khau`, `ho_ten`, `hinh`, `email`, `gioi_tinh`, `dia_chi`, `vai_tro`, `kich_hoat`) VALUES
(1, 'admin', '123abc', 'Bùi Ngọc', 'ngocbq.jpg', 'ngocbq@fpt.edu.vn', 1, 'hn', 1, 1),
(2, 'minhbq', '123456', 'Quang Minh', 'minhbq.jpg', 'minhbq@fe.edu.vn', 1, 'hn', 0, 1),
(3, 'ngocbq', '$2y$10$mFzZ3t3GtgA6Dm3if4T8j.30qXesN8c02I4YDQHsUSiAHfvNlsLmG', 'bùi', 'avatar.jpg', 'ngocbq@fe.edu.vn', 1, 'HN', 1, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai`
--

CREATE TABLE `loai` (
  `ma_loai` int(11) NOT NULL,
  `ten_loai` varchar(255) NOT NULL,
  `bieu_tuong` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `loai`
--

INSERT INTO `loai` (`ma_loai`, `ten_loai`, `bieu_tuong`) VALUES
(1, 'Samsung', 'samsung.jpg'),
(2, 'Apple', 'apple.jpg'),
(3, 'Xiaomi', 'xiaomi.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slider`
--

CREATE TABLE `slider` (
  `ma_slide` int(11) NOT NULL,
  `ten_slide` varchar(255) NOT NULL,
  `hinh` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD PRIMARY KEY (`ma_bl`);

--
-- Chỉ mục cho bảng `cau_hinh`
--
ALTER TABLE `cau_hinh`
  ADD PRIMARY KEY (`ma_ch`);

--
-- Chỉ mục cho bảng `hang_hoa`
--
ALTER TABLE `hang_hoa`
  ADD PRIMARY KEY (`ma_hh`);

--
-- Chỉ mục cho bảng `khach_hang`
--
ALTER TABLE `khach_hang`
  ADD PRIMARY KEY (`ma_kh`);

--
-- Chỉ mục cho bảng `loai`
--
ALTER TABLE `loai`
  ADD PRIMARY KEY (`ma_loai`);

--
-- Chỉ mục cho bảng `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`ma_slide`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  MODIFY `ma_bl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `cau_hinh`
--
ALTER TABLE `cau_hinh`
  MODIFY `ma_ch` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `hang_hoa`
--
ALTER TABLE `hang_hoa`
  MODIFY `ma_hh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `khach_hang`
--
ALTER TABLE `khach_hang`
  MODIFY `ma_kh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `loai`
--
ALTER TABLE `loai`
  MODIFY `ma_loai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `slider`
--
ALTER TABLE `slider`
  MODIFY `ma_slide` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
