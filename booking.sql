-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th8 11, 2022 lúc 01:20 AM
-- Phiên bản máy phục vụ: 5.7.31
-- Phiên bản PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `booking`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'thaihieu2002', 'f9cb96dc03707cea9fa0d5d30cff3978'),
(12, '20211TT3032', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `card`
--

DROP TABLE IF EXISTS `card`;
CREATE TABLE IF NOT EXISTS `card` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type_card` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `name_card_1` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content_name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `name_card_2` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content_name_2` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name_card_3` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content_name_3` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name_card_4` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content_name_4` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `card`
--

INSERT INTO `card` (`id`, `type_card`, `name_card_1`, `content_name`, `name_card_2`, `content_name_2`, `name_card_3`, `content_name_3`, `name_card_4`, `content_name_4`) VALUES
(1, 'title', NULL, 'THIẾT KẾ WEBSITE PHÒNG VÉ - TOUR DU LỊCH', NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'link', 'rel', 'profile', 'href', 'https://gmpg.org/xfn/11', NULL, NULL, NULL, NULL),
(3, 'meta', 'name', 'description', 'content', 'THIẾT KẾ WEBSITE PHÒNG VÉ', NULL, NULL, NULL, NULL),
(4, 'meta', 'property', 'og:locale', 'content', 'vi_VN', NULL, NULL, NULL, NULL),
(5, 'meta', 'property', 'og:type', 'content', 'website', NULL, NULL, NULL, NULL),
(6, 'meta', 'property', 'og:title', 'content', 'THIẾT KẾ WEBSITE PHÒNG VÉ - TOUR DU LỊCH', NULL, NULL, NULL, NULL),
(7, 'meta', 'property', 'og:description', 'content', 'THIẾT KẾ WEBSITE PHÒNG VÉ - TOUR DU LỊCH', NULL, NULL, NULL, NULL),
(8, 'meta', 'property', 'og:url', 'content', 'index.php', NULL, NULL, NULL, NULL),
(9, 'meta', 'property', 'og:site_name', 'content', '1SBooking', NULL, NULL, NULL, NULL),
(10, 'meta', 'property', 'fb:app_id', 'content', '239569373169525', NULL, NULL, NULL, NULL),
(11, 'meta', 'property', 'og:image:width', 'content', '1200', '', NULL, NULL, NULL),
(12, 'meta', 'property', 'og:image:height', 'content', '630', NULL, NULL, NULL, NULL),
(13, 'link', 'id', 'favico', 'rel', 'icon', 'type', 'image/png', 'href', 'https://1sbooking.com/logo.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contact_order`
--

DROP TABLE IF EXISTS `contact_order`;
CREATE TABLE IF NOT EXISTS `contact_order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `link` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `col` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `contact_order`
--

INSERT INTO `contact_order` (`id`, `image`, `content`, `link`, `col`) VALUES
(1, 'shopping-basket.png', 'ĐẶT MUA', 'javascript:void(0)', 0),
(2, 'icon-2.png', '096.316.9638', 'tel:0963169638', 1),
(3, 'icon-2.png', '097.717.3383', 'tel:0977173383', 1),
(4, 'messenger.png', 'Liên hệ Facebook', 'https://m.me/mr.changnguyen', 2),
(5, 'zalo.png', 'Liên hệ hỗ trợ qua Zalo', 'http://zalo.me/0977173383', 2),
(6, 'group-facebook.png', 'Tham gia group Facebook hỗ trợ', 'https://www.facebook.com/plugins/group/join/popup/?group_id=687730015290795&source=email_campaign_plugin', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `footer`
--

DROP TABLE IF EXISTS `footer`;
CREATE TABLE IF NOT EXISTS `footer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `content` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `col` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `footer`
--

INSERT INTO `footer` (`id`, `title`, `image`, `content`, `col`) VALUES
(1, 'CÔNG TY CPTM & DV 1SBOOKING VIET NAM', 'layer-48.png', 'Phòng 201, Tòa F5, Trung Kính, Cầu Giấy, Hà Nội', 0),
(2, NULL, 'layer-49.png', '097.717.3383 (Tư vấn hỗ trợ miễn phí)', 0),
(3, NULL, 'layer-50.png', '097 717 3383 - 096 316 9638 (Hỗ trợ từ 8:00 - 22:00)', 0),
(4, NULL, 'layer-47.png', '1SBooking.Com@Gmail.com', 0),
(5, NULL, 'layer-47.png', 'TechcomBank: 19032953395010', 0),
(6, NULL, 'layer-46.png', 'www.1SBooking.Com', 1),
(7, NULL, 'binary-code.png', 'Mã số thuế: 0108647297', 1),
(8, NULL, 'analysis.png', 'Lĩnh vực kinh doanh: Phần mềm', 1),
(9, NULL, 'manager.png', 'Thời gian làm việc: 8:00 - 22:00 (Thứ 2 - Thứ CN)', 1),
(10, NULL, 'layer-47.png', 'VietcomBank : 0541001609968', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `header`
--

DROP TABLE IF EXISTS `header`;
CREATE TABLE IF NOT EXISTS `header` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image_logo` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `logo_mb` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `menu` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `move` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=82 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `header`
--

INSERT INTO `header` (`id`, `image_logo`, `logo_mb`, `menu`, `move`, `address`) VALUES
(1, 'logo.png', 'logo.png', '', '', '<p>CÔNG TY CỔ PHẦN THƯƠNG MẠI VÀ DỊCH VỤ 1SBOOKING VIỆT NAM - Phòng 201, Tòa F5, Trung Kính, Cầu Giấy, Hà Nội Mã số doanh nghiệp: 0108647297 HOTLINE: 097 717 3383 Zalo: 0977173383 TechcomBank 19032953395010 - Nguyễn Thành Chung VietcomBank: 0541001609968 - Nguyễn Thành Chung</p>'),
(5, NULL, '', 'GIỚI THIỆU', 'Description', NULL),
(6, '', '', 'TÍNH NĂNG', 'Feature', NULL),
(7, NULL, '', 'LỢI ÍCH', 'Solution', NULL),
(8, NULL, '', 'BẢNG GIÁ', 'Price', NULL),
(9, NULL, '', 'HƯỚNG DẪN', 'Documents', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `infouser`
--

DROP TABLE IF EXISTS `infouser`;
CREATE TABLE IF NOT EXISTS `infouser` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phone_number` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(1) NOT NULL,
  `create_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `phone_number` (`phone_number`)
) ENGINE=MyISAM AUTO_INCREMENT=62 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `infouser`
--

INSERT INTO `infouser` (`id`, `fullname`, `phone_number`, `status`, `create_at`) VALUES
(58, 'Thái Minh Hiếu ', '0987712063', 0, '2022-08-01 10:30:33');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `modal`
--

DROP TABLE IF EXISTS `modal`;
CREATE TABLE IF NOT EXISTS `modal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `logo` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `des` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `input_1` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `input_2` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `btn_form` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `note` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `modal`
--

INSERT INTO `modal` (`id`, `logo`, `image`, `title`, `des`, `input_1`, `input_2`, `btn_form`, `note`) VALUES
(1, 'logo.png', 'services.png', 'Đăng ký sử dụng Website Phòng vé', '(Anh/chị vui lòng nhập đúng định dạng số điện thoại đang sử dụng)', 'Họ và tên', 'Số điện thoại', 'Mua Phần Mềm', 'Nhân viên 1SBooking sẽ liên lạc hỗ trợ anh/chị trong ít phút nữa.');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `section_1`
--

DROP TABLE IF EXISTS `section_1`;
CREATE TABLE IF NOT EXISTS `section_1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `des` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `btn_sec` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `move` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `section_1`
--

INSERT INTO `section_1` (`id`, `title`, `des`, `btn_sec`, `image`, `move`) VALUES
(1, 'WEBSITE PHÒNG VÉ', 'GIẢI PHÁP BÁO GIÁ, GIỮ CHỖ, CANH VÉ ONLINE TỰ ĐỘNG HIỆU QUẢ GIÁ CHỈ 250K: WEBSITE + DỮ LIỆU MÁY BAY', 'TÌM HIỂU NGAY', '1_1.jpg', 'Description');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `section_2`
--

DROP TABLE IF EXISTS `section_2`;
CREATE TABLE IF NOT EXISTS `section_2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `des` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `sub_img` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `section_2`
--

INSERT INTO `section_2` (`id`, `title`, `des`, `image`, `sub_img`) VALUES
(1, 'WEBSITE PHÒNG VÉ', 'Là Website đặt giữ chỗ vé máy bay ra code thật của 4 hãng nội địa. <font color=\"#ff9c00\">Khách lẻ, CTV, Đại lý (KHÔNG CẦN ĐĂNG NHẬP) có thể tra cứu báo giá và giữ chỗ tự động</font>. Tạo lợi thế cạnh tranh so với các phòng vé khác.\r\n(Đây là một trong những giải pháp giữ chỗ hiệu quả mà bạn không nên bỏ qua)', '1swebbook.jpg', 'bg-pro.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `section_3`
--

DROP TABLE IF EXISTS `section_3`;
CREATE TABLE IF NOT EXISTS `section_3` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `main_title` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `sub_title` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `des` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `img_col_1` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `title_col_1` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `des_col_1` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `img_col_2` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `title_col_2` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `des_col_2` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `img_col_3` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `title_col_3` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `des_col_3` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `section_3`
--

INSERT INTO `section_3` (`id`, `main_title`, `sub_title`, `des`, `img_col_1`, `title_col_1`, `des_col_1`, `img_col_2`, `title_col_2`, `des_col_2`, `img_col_3`, `title_col_3`, `des_col_3`) VALUES
(1, 'LÝ DO VÌ SAO BẠN NÊN KINH DOANH QUA TRANG CÁ NHÂN FACEBOOK?', 'CÁC WEBSITE VÉ MÁY BAY ĐĂT GIỮ CHỖ NGÀY CÀNG TRỞ NÊN PHỔ BIẾN VÀ SỬ DỤNG RỘNG RÃI', 'Hiện nay có khá nhiều phòng vé đã có các website riêng để xây dựng thương hiệu, để kết nối khách hàng tiềm năng và bán hàng hiệu quả', 'trend.png', 'XU HƯỚNG', 'WEBSITE PHÒNG VÉ là kênh ONLINE hiệu quả cho phép Khách lẻ, CTV tự tra cứu và giữ vé tự động. Cũng đồng nghĩa với việc bạn có thể phục vụ nhiều khách hàng tiềm năng hơn', 'choices.png', 'CƠ HỘI', 'Trong khi rất nhiều phòng vé phải chi tốn nhiều tiền để có được một website riêng của họ (10 - 15 triệu / năm. Thanh toán theo năm) . 1SBooking cũng cung cấp giải pháp thiết kế website vé máy bay cho phòng vé với chi phí cực kỳ thấp(250K / tháng. Thanh toán theo tháng). Chi phí thấp và cơ chế thanh toán cực kỳ linh động', 'career.png', 'ĐỘT PHÁ', 'WEBSITE PHÒNG VÉ là kênh ONLINE hiệu quả cho phép Khách lẻ, CTV tự tra cứu và giữ vé tự động. Cũng đồng nghĩa với việc bạn có thể phục vụ nhiều khách hàng tiềm năng hơn');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `section_4`
--

DROP TABLE IF EXISTS `section_4`;
CREATE TABLE IF NOT EXISTS `section_4` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sub_title` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `content` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `section_4`
--

INSERT INTO `section_4` (`id`, `title`, `sub_title`, `content`) VALUES
(1, 'TÍNH NĂNG CỦA WEBSITE PHÒNG VÉ', 'TÌM KIẾM 4 HÃNG NỘI ĐỊA, QUỐC TẾ', ' . Tra cứu tìm kiếm 4 hãng nội địa . Tra cứu tìm kiếm vé QUỐC TẾ . Tìm kiếm vé Tháng . Hiển thị đầy đủ phí xuất . Lọc theo Hãng, Giá, Khung giờ bay...'),
(2, NULL, 'TÍNH NĂNG CHỤP BÁO GIÁ (Duy nhất)', ' . Chụp lưu báo giá dạng ảnh với đầy đủ phí xuất . Copy Danh sách chuyến bay, tóm tắt chuyện bay . Tiện lợi gửi Ảnh báo giá, text báo giá trên di động'),
(3, NULL, 'ĐẶT GIỮ CHỖ 4 HÃNG NỘI ĐỊA', ' . Đặt giữ chỗ mất khoảng 15 - 20s/ 1 booking . Đặt giữ chỗ Quốc Tế: đang cập nhật'),
(4, NULL, 'QUẢN LÝ, TÌM KIẾM VÉ NÂNG CAO', ' . Quản lý, tìm kiếm đơn hàng. . Quản lý vé chờ xuất, vé sắp bay. . Đặt lại đơn hàng (giữ lại booking cho khách)'),
(5, NULL, 'TÍNH NĂNG XUẤT VÉ', ' . Book xuất cho các vé không giữ được . Tính năng xuất vé: đang bổ sung'),
(6, NULL, 'TÍNH NĂNG NÂNG CAO KHÁC', ' . Đang bổ sung');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `section_5`
--

DROP TABLE IF EXISTS `section_5`;
CREATE TABLE IF NOT EXISTS `section_5` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `content` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `section_5`
--

INSERT INTO `section_5` (`id`, `title`, `image`, `content`) VALUES
(1, 'WEBBOOK PHÙ HỢP VỚI', '10.png', ' . Mọi đại lý cấp 2 có tài khoản Đại lý book vé . Những ai muốn trang bị cho mình công cụ hỗ trợ bán vé đắc lực . Những ai muốn tiết kiệm thời gian, chi phí tiếp cận khách hàng . Những ai muốn xây dựng thương hiệu cá nhân, tạo lợi thế cạnh tranh với đối thủ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `section_6`
--

DROP TABLE IF EXISTS `section_6`;
CREATE TABLE IF NOT EXISTS `section_6` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `main_title` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `des` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `main_img` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `sub_img` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `sub_title` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `content` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `section_6`
--

INSERT INTO `section_6` (`id`, `main_title`, `des`, `main_img`, `sub_img`, `sub_title`, `content`) VALUES
(1, 'QUÀ TẶNG ĐẶC BIỆT DÀNH CHO KHÁCH HÀNG SỬ DỤNG CÔNG CỤ', 'không những tiếp cận thêm hàng nghìn khách hàng tiềm năng trên Facebook, mà còn nhận được . những quà tặng giá trị và tuyệt vời từ chúng tôi', '11_1.png', 'donation.png', 'Quà Tặng #1:', ' . 1 Tháng sử dụng phần mềm Canh vé vào tên tự động VJ hoặc BB . 1 Tháng sử dụng phần Báo giá, đặt giữ chỗ tự động trên máy tính . Kích hoạt bất cứ khi nào theo yêu cầu của bạn'),
(2, NULL, NULL, '12.png', 'donation.png', 'Quà Tặng #2:', ' . Miễn phí cài đặt'),
(5, NULL, NULL, 'default (3).jpg', 'pixlr-bg-result.png', 'đ', '<p>đ</p>');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `section_7`
--

DROP TABLE IF EXISTS `section_7`;
CREATE TABLE IF NOT EXISTS `section_7` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `main_title` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `des` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sub_title` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `sub_des` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `content` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `btn_sec` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `col` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `section_7`
--

INSERT INTO `section_7` (`id`, `main_title`, `des`, `sub_title`, `sub_des`, `content`, `btn_sec`, `col`) VALUES
(1, 'BẢNG GIÁ', 'Giá thị trường 10 - 15 triệu/năm - Thanh toán theo năm. . Giá chúng tôi 250k/Tháng - Thanh toán theo tháng', 'CƠ BẢN', '250K/Tháng', ' . Tìm kiếm, tra cứu vé . Tìm vé theo tháng . Đặt giữ chỗ 4 Hãng nội địa . Quản lý đơn hàng . Xuất vé: KHÔNG . Thanh toán theo tháng . Thanh toán 03 tháng + free 15 ngày', 'MUA NGAY', 0),
(2, '', '', 'NÂNG CAO', '350K/Tháng', ' . Tìm kiếm, tra cứu vé . Tìm vé theo tháng . Đặt giữ chỗ 4 Hãng nội địa . Quản lý đơn hàng . Xuất vé . Thanh toán theo tháng . Thanh toán 03 tháng + free 15 ngày', 'MUA NGAY', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `section_8`
--

DROP TABLE IF EXISTS `section_8`;
CREATE TABLE IF NOT EXISTS `section_8` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `main_title` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `embed_link` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sub_title` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `content` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `section_8`
--

INSERT INTO `section_8` (`id`, `main_title`, `embed_link`, `sub_title`, `content`) VALUES
(1, 'HƯỚNG DẪN SỬ DỤNG & GIẢI ĐÁP THẮC MẮC', 'https://www.youtube.com/embed/lvw-vPK5vyE', 'Tôi có được sử dụng miễn phí không?', 'Với lịch sử phát triển hơn 2 năm trong lĩnh vực đặt vé và canh vé tự động. Chúng tôi hoàn toàn tự tin vào mọi sản phẩm khi tung ra thị trường. Website Phòng vé cần cấu hình bằng tay (không tự động) nên vì thế chúng tôi không cung cấp dịch vụ Dùng thử'),
(2, NULL, NULL, 'Tôi có thể sử dụng tài khoản Đại lý của mình?', 'Bạn sử dụng tài khoản Đại lý của bạn để Website có thể đặt giữ cho bạn. Bạn nên sử dụng các tài khoản giữ chỗ'),
(3, NULL, NULL, 'Cơ chế bảo mật?', 'Với vốn kinh nghiệm 14 năm trong lĩnh vực phần mềm, Đạo đức nghề nghiệp luôn là Tôn chỉ hàng đầu trong kinh doanh.'),
(4, NULL, NULL, 'Để sử dụng Website phòng vé, tôi cần làm gì?', 'Bạn thanh toán phí để chúng tôi kích hoạt dịch vụ. Thời gian triển khai trong vòng 24h'),
(5, NULL, NULL, 'Phí gia hạn 250k/Tháng?', 'Giá 250K/Tháng: bao gồm website và dữ liệu Vé máy bay. Bạn không phải thanh toán thêm bất kỳ khoản phí nào');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `section_9`
--

DROP TABLE IF EXISTS `section_9`;
CREATE TABLE IF NOT EXISTS `section_9` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `des` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `background` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `icon_btn` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `btn_sec` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `link_btn` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `section_9`
--

INSERT INTO `section_9` (`id`, `title`, `des`, `background`, `icon_btn`, `btn_sec`, `link_btn`) VALUES
(1, 'Hơn 30 Phòng vé vừa và nhỏ đã đang sử dụng!', 'Chat Zalo để được tư vấn!', '21.png', 'chat.png', 'LIVE CHAT NGAY ĐỂ ĐƯỢC HỖ TRỢ', 'http://zalo.me/0977173383');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `section_10`
--

DROP TABLE IF EXISTS `section_10`;
CREATE TABLE IF NOT EXISTS `section_10` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `main_title` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `sub_title` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `des` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `content` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `section_10`
--

INSERT INTO `section_10` (`id`, `main_title`, `sub_title`, `des`, `image`, `content`) VALUES
(1, 'CAM KẾT HOÀN TIỀN', '100% TRONG VÒNG 7 NGÀY', '1SBOOKING luôn đảm bảo quyền lợi tối đa cho khách hàng. Nếu bạn thấy sản phẩm KHÔNG ĐÚNG . NHƯ MÔ TẢ , tính năng hoạt động không giống như cam kết.. Hãy liên hệ và chúng tôi sẽ HOÀN LẠI . TIỀN cho bạn.', '15.png', ' . CAM KẾT HOÀN TIỀN 100% PHÍ SỬ DỤNG NẾU KHÔNG HÀI LÒNG * <br> (* sản phẩm không giống như mô tả) . PHÍ KHÔI PHỤC DỊCH VỤ 150K ! . TechcomBank: 19032953395010 - Nguyễn Thành Chung . VechcomBank: 0541001609968 - Nguyễn Thành Chung');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
