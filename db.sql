-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 11, 2024 lúc 04:41 AM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `test`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `account`
--

CREATE TABLE `account` (
  `id` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `pass` varchar(255) DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `admin` int(11) NOT NULL DEFAULT 0,
  `status` int(11) NOT NULL DEFAULT 0,
  `forgotToken` text NOT NULL,
  `create_time` datetime DEFAULT NULL,
  `activeToken` varchar(255) DEFAULT NULL,
  `update_pass` datetime DEFAULT NULL,
  `update_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `account`
--

INSERT INTO `account` (`id`, `email`, `pass`, `phone`, `address`, `firstName`, `lastName`, `admin`, `status`, `forgotToken`, `create_time`, `activeToken`, `update_pass`, `update_time`) VALUES
(21, 'lesycuong692003@gmail.com', '$2y$10$L6BRbP9cn8HbkPftOO7rnuYaj/VdrR7JAKrOd7nLAf/fBrrQ40IQu', 865811722, NULL, 'Lê', 'Cường', 1, 1, 'd887a179f9749242f4d7ba98516e6cc212a6b0d9', '2024-11-25 18:46:54', NULL, '2024-11-25 19:42:10', '2024-12-02 10:15:34');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ipad`
--

CREATE TABLE `ipad` (
  `id` int(11) NOT NULL,
  `ten_san_pham` varchar(255) DEFAULT NULL,
  `noi_dung` text DEFAULT NULL,
  `gia_km` int(11) DEFAULT NULL,
  `gia_goc` int(11) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `moi` int(11) DEFAULT 0,
  `noi_bat` int(11) DEFAULT 0,
  `ban_chay` int(11) DEFAULT 0,
  `giam` int(11) DEFAULT NULL,
  `phien_ban` varchar(255) DEFAULT NULL,
  `bo_nho` int(11) DEFAULT NULL,
  `ram` int(11) DEFAULT NULL,
  `camera` varchar(255) DEFAULT NULL,
  `man_hinh` float DEFAULT NULL,
  `loai` varchar(255) DEFAULT NULL,
  `thuong_hieu` varchar(255) DEFAULT NULL,
  `so_luong` int(11) DEFAULT NULL,
  `mau_sac` varchar(255) DEFAULT NULL,
  `chip` varchar(255) DEFAULT NULL,
  `sim` varchar(255) DEFAULT NULL,
  `dung_luong_pin` varchar(255) DEFAULT NULL,
  `pin` varchar(255) DEFAULT NULL,
  `tan_so` varchar(255) DEFAULT NULL,
  `do_phan_giai` varchar(255) DEFAULT NULL,
  `camera_sau` varchar(255) DEFAULT NULL,
  `camera_truoc` varchar(255) DEFAULT NULL,
  `he_dieu_hanh` varchar(255) DEFAULT NULL,
  `bao_hanh` varchar(255) DEFAULT NULL,
  `so_sanh` text DEFAULT NULL,
  `thich` text DEFAULT NULL,
  `nhu_cau` varchar(255) DEFAULT NULL,
  `tinh_nang_camera` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `ipad`
--

INSERT INTO `ipad` (`id`, `ten_san_pham`, `noi_dung`, `gia_km`, `gia_goc`, `img`, `moi`, `noi_bat`, `ban_chay`, `giam`, `phien_ban`, `bo_nho`, `ram`, `camera`, `man_hinh`, `loai`, `thuong_hieu`, `so_luong`, `mau_sac`, `chip`, `sim`, `dung_luong_pin`, `pin`, `tan_so`, `do_phan_giai`, `camera_sau`, `camera_truoc`, `he_dieu_hanh`, `bao_hanh`, `so_sanh`, `thich`, `nhu_cau`, `tinh_nang_camera`) VALUES
(1, 'iPad Pro 11 inch M2 2022 1TB Wifi + 5G - Chính hãng VN', '&lt;h2&gt;&lt;strong&gt;iPad Pro M1: Thay đổi mạnh mẽ nhất từ trước đến nay.&lt;/strong&gt;&lt;/h2&gt;\r\n&lt;p&gt;D&amp;agrave;nh được sự quan t&amp;acirc;m v&amp;ocirc; c&amp;ugrave;ng lớn của người y&amp;ecirc;u c&amp;ocirc;ng nghệ,&lt;strong&gt;&amp;nbsp;iPad Pro 2021&lt;/strong&gt;&amp;nbsp;đ&amp;atilde; được lộ diện v&amp;agrave; trở th&amp;agrave;nh t&amp;acirc;m điểm sự kiện Spring Loaded của Apple đầu năm 2021. Mặc d&amp;ugrave; kh&amp;ocirc;ng thay đổi nhiều về bề ngo&amp;agrave;i nhưng b&amp;ecirc;n trong thế hệ iPad n&amp;agrave;y đ&amp;atilde; được thay đổi mạnh mẽ với sự xuất hiện của con chip M1.&lt;/p&gt;\r\n&lt;h2&gt;&lt;strong&gt;1. Chip M1 được đưa v&amp;agrave;o iPad.&lt;/strong&gt;&lt;br&gt;C&amp;oacute; thể n&amp;oacute;i đ&amp;acirc;y l&amp;agrave; bước tiến lớn trong việc Apple lu&amp;ocirc;n ấp ủ bao l&amp;acirc;u nay ch&amp;iacute;nh l&amp;agrave; việc d&amp;ugrave;ng những chiếc tablet để thay thế laptop.&lt;br&gt;Con chip Apple M1 được nh&amp;agrave; T&amp;aacute;o đưa l&amp;ecirc;n&lt;strong&gt;&amp;nbsp;iPad Pro 2021&lt;/strong&gt;.&lt;/h2&gt;\r\n&lt;p&gt;&lt;img style=&quot;height: auto;&quot; src=&quot;https://onewaymobile.vn/upload_images/images/2021/05/30/iPad-Pro-2021-onewaymobile_vn.jpg&quot; alt=&quot;&quot; data-src=&quot;/upload_images/images/2021/05/30/iPad-Pro-2021-onewaymobile_vn.jpg&quot;&gt;&lt;br&gt;Đ&amp;acirc;y l&amp;agrave; lần đầu ti&amp;ecirc;n, iPad Pro sau nhiều năm cải tiến, ph&amp;aacute;t triển đ&amp;atilde; kh&amp;ocirc;ng sử dụng phi&amp;ecirc;n bản A-Series.&lt;br&gt;Apple M1 l&amp;agrave; con chip nhận được v&amp;ocirc; số lời khen từ những người sử dụng, hiệu năng của n&amp;oacute; tr&amp;ecirc;n những chiếc Macbook đ&amp;atilde; g&amp;acirc;y ấn tượng v&amp;ocirc; c&amp;ugrave;ng tốt với người d&amp;ugrave;ng v&amp;agrave; cũng đ&amp;aacute; ph&amp;aacute; được rất nhiều kỉ lục.&lt;br&gt;Ch&amp;iacute;nh v&amp;igrave; việc bộ vi xử l&amp;iacute; n&amp;agrave;y được trang bị tr&amp;ecirc;n iPad n&amp;agrave;y th&amp;igrave; hiệu năng của chiếc m&amp;aacute;y sẽ c&amp;oacute; hiệu suất cực k&amp;igrave; nhanh, tốt.&lt;br&gt;Apple cho biết, do c&amp;oacute; sự xuất hiện của con chip M1, tốc độ xử l&amp;iacute; của&amp;nbsp;&lt;strong&gt;iPad Pro 2021&lt;/strong&gt;&amp;nbsp;sẽ hơn 50% so với thế hệ trước tức iPad Pro 2020, c&amp;ograve;n nếu so s&amp;aacute;nh với thế hệ iPad đầu ti&amp;ecirc;n th&amp;igrave; l&amp;ecirc;n tới 75 lần.&lt;/p&gt;\r\n&lt;p&gt;&lt;img style=&quot;height: auto;&quot; src=&quot;https://onewaymobile.vn/upload_images/images/2021/05/30/iPad-Pro-2021-onewaymobile_vn2.png&quot; alt=&quot;&quot; data-src=&quot;/upload_images/images/2021/05/30/iPad-Pro-2021-onewaymobile_vn2.png&quot;&gt;&lt;br&gt;B&amp;ecirc;n cạnh đ&amp;oacute;, tốc độ xử l&amp;iacute; đồ họa nhanh hơn 40% của thế hệ Pro đ&amp;agrave;n anh v&amp;agrave; cao gấp 1500 lần so với chiếc iPad đầu ti&amp;ecirc;n.&lt;br&gt;Nghe qua những th&amp;ocirc;ng số, cũng c&amp;oacute; thể hiểu hiệu năng của những chiếc iPad Pro l&amp;agrave; v&amp;ocirc; c&amp;ugrave;ng mạnh mẽ.&lt;br&gt;Những game đồ họa cao, c&amp;ocirc;ng việc đ&amp;ograve;i hỏi về m&amp;agrave;u sắc, AR th&amp;igrave; cũng sẽ đơn giản khi xử l&amp;iacute; tr&amp;ecirc;n thế hệ n&amp;agrave;y.&lt;br&gt;C&amp;ograve;n chưa kể bộ nhớ của iPad c&amp;oacute; thể lưu trữ thoải m&amp;aacute;i t&amp;agrave;i liệu, ứng dụng khi người d&amp;ugrave;ng c&amp;oacute; thể t&amp;ugrave;y chọn phi&amp;ecirc;n bản RAM lớn v&amp;agrave; bộ nhớ lớn l&amp;ecirc;n tới 16GB v&amp;agrave; 1 - 2TB bộ nhớ trong.&lt;/p&gt;\r\n&lt;p&gt;&lt;img style=&quot;height: auto;&quot; src=&quot;https://onewaymobile.vn/upload_images/images/2022/05/05/ipad-pro-m1-onewaymobile-2.png&quot; alt=&quot;&quot; data-src=&quot;/upload_images/images/2022/05/05/ipad-pro-m1-onewaymobile-2.png&quot;&gt;&lt;/p&gt;\r\n&lt;h2&gt;&lt;strong&gt;2. M&amp;agrave;n h&amp;igrave;nh chất lượng cao.&lt;/strong&gt;&lt;br&gt;Với phiển bản 12.9 th&amp;igrave; đ&amp;acirc;y l&amp;agrave; một sự n&amp;acirc;ng cấp rất lớn. M&amp;agrave;n h&amp;igrave;nh với tấm nền Mini LED được trang bị tr&amp;ecirc;n iPad Pro 12.9&quot; 2021&lt;br&gt;Đ&amp;acirc;y l&amp;agrave; loại m&amp;agrave;n giống LCD nhưng được cải tiến để đem lại chất lượng hiển thị sống động, ch&amp;acirc;n thực nhất. Đồn thời sẽ hạn chế được khả năng bị ch&amp;aacute;t m&amp;agrave;n h&amp;igrave;nh so với c&amp;ocirc;ng nghệ m&amp;agrave;n h&amp;igrave;nh OLED&lt;br&gt;C&amp;ocirc;ng nghệ m&amp;agrave;n h&amp;igrave;nh tr&amp;ecirc;n iPad Pro 12.9&quot; được gọi l&amp;agrave; c&amp;ocirc;ng nghệ Liquid Retina XDR mang tới trải nghiệm b&amp;igrave;nh ảnh, chi tiết ch&amp;acirc;n thực nhất, ấn tượng nhất.&lt;br&gt;Độ s&amp;aacute;ng m&amp;agrave;n h&amp;igrave;nh l&amp;ecirc;n đến 1000 nits v&amp;agrave; s&amp;aacute;ng tối đa l&amp;agrave; 1600 nits c&amp;ugrave;ng với độ tương phản 1000000:1&lt;br&gt;Với việc trang bị m&amp;agrave;n h&amp;igrave;nh th&amp;ocirc;ng số khủng vậy, chiếc iPad n&amp;agrave;y ho&amp;agrave;n to&amp;agrave;n c&amp;oacute; thể phục vụ những c&amp;ocirc;ng việc về s&amp;aacute;ng tao, đồ họa v&amp;agrave; c&amp;oacute; thể chỉnh c&amp;aacute;c nội dung HDR.&lt;/h2&gt;\r\n&lt;p&gt;&lt;img style=&quot;height: auto;&quot; src=&quot;https://onewaymobile.vn/upload_images/images/2021/05/30/iPad-Pro-2021-onewaymobile_vn4_2.jpg&quot; alt=&quot;&quot; data-src=&quot;/upload_images/images/2021/05/30/iPad-Pro-2021-onewaymobile_vn4_2.jpg&quot;&gt;&lt;/p&gt;\r\n&lt;h2&gt;&lt;strong&gt;3. Những n&amp;acirc;ng cấp đ&amp;aacute;ng gi&amp;aacute; kh&amp;aacute;c của iPad Pro 2021.&lt;/strong&gt;&lt;br&gt;Mặc d&amp;ugrave; thiết kế của&amp;nbsp;&lt;strong&gt;iPad Pro 2021&lt;/strong&gt;&amp;nbsp;kh&amp;ocirc;ng c&amp;oacute; sự kh&amp;aacute;c biệt so với phi&amp;ecirc;n bản cũ.&lt;br&gt;Nhưng sự n&amp;acirc;ng cấp về hiệu năng, m&amp;agrave;n h&amp;igrave;nh rất đ&amp;aacute;ng gi&amp;aacute;, ngo&amp;agrave;i ra c&amp;ograve;n c&amp;oacute; những n&amp;acirc;ng cấp kh&amp;aacute;c rất đ&amp;aacute;ng sử dụng.&lt;br&gt;Cổng Thunderbolt/USB 4 đem lại tốc độ truyền tải nhanh hơn gấp 4 lần so với người đ&amp;agrave;n anh v&amp;agrave; l&amp;ecirc;n tớ 40Gbps.&lt;br&gt;Với việc hỗ trợ cả Ethernet 10Gbps, iPad Pro 2021 c&amp;oacute; thể kết nối c&amp;aacute;c phụ kiện l&amp;agrave;m việc hiệu suất cao như bộ nhớ ngo&amp;agrave;i, xuất m&amp;agrave;n h&amp;igrave;nh ngo&amp;agrave;i với độ ph&amp;acirc;n giải cao,...&lt;/h2&gt;\r\n&lt;p&gt;Ngo&amp;agrave;i ra 5G cũng được t&amp;iacute;ch hợp tr&amp;ecirc;n thế hệ iPad mới. Với điều n&amp;agrave;y, người d&amp;ugrave;ng c&amp;oacute; thể thoải m&amp;aacute;i cầm chiếc iPad của m&amp;igrave;nh l&amp;agrave;m việc mọi l&amp;uacute;c mọi nơi.&lt;br&gt;5G sẽ đem lại chất lượng cao để người d&amp;ugrave;ng c&amp;oacute; thể đ&amp;agrave;m thoại trực tuyến, facetime, l&amp;agrave;m việc, giải tr&amp;iacute; tốt hơn rất nhiều.&lt;/p&gt;\r\n&lt;p&gt;&lt;img style=&quot;height: auto;&quot; src=&quot;https://onewaymobile.vn/upload_images/images/2022/05/05/ipad-pro-m1-onewaymobile-3.png&quot; alt=&quot;&quot; data-src=&quot;/upload_images/images/2022/05/05/ipad-pro-m1-onewaymobile-3.png&quot;&gt;&lt;/p&gt;\r\n&lt;p&gt;Camera cũng được n&amp;acirc;ng cấp nhẹ khi hệ thống camera TrueDepth được t&amp;iacute;ch hợp tr&amp;ecirc;n camera mặt trước với độ ph&amp;acirc;n giải 12MP.&lt;br&gt;T&amp;iacute;nh năng mới được ra mắt Center Stage sẽ tracking khu&amp;ocirc;n mặt người d&amp;ugrave;ng để tạo khả năng, trải nghiệm tốt nhất khi người d&amp;ugrave;ng sử dụng để l&amp;agrave;m việc, họp onlime.&lt;/p&gt;', 42990000, 43990000, 'https://bizweb.dktcdn.net/100/502/883/products/minhtuanmobile-ipad-pro-11-selec-78be9d03-2d95-4a49-968e-a5332eb20465-25342150-a1b4-4244-a941-9089187a0048-44aae303-9599-4883-87ec-8b4256b6f45a.png?v=1700213504547', 1, 0, 1, 8, 'gen-10', 256, 8, NULL, 11, 'ipad', ' Apple', 444, 'Xám, Trắng', 'Apple M1 8 nhân', '1 Nano SIM hoặc 1 eSIM', '28.65 Wh (~ 7538 mAh)', 'Li-Po', '120', '	1668 x 2388 Pixels', '	Chính 12 MP & Phụ 10 MP, TOF 3D LiDAR', '12 MP', 'iPadOS 15', 'Được hỗ trợ 1 đổi 1 trong 30 ngày nếu có lỗi từ nhà sản xuất', NULL, NULL, 'game,cauhinh,nhe', 'sac,baomat'),
(2, 'iPad Pro 100 inch M2 2022 1TB Wifi + 5G - Chính hãng VN', '&lt;h2&gt;&lt;strong&gt;iPad Pro M1: Thay đổi mạnh mẽ nhất từ trước đến nay.&lt;/strong&gt;&lt;/h2&gt;\r\n&lt;p&gt;D&amp;agrave;nh được sự quan t&amp;acirc;m v&amp;ocirc; c&amp;ugrave;ng lớn của người y&amp;ecirc;u c&amp;ocirc;ng nghệ,&lt;strong&gt;&amp;nbsp;iPad Pro 2021&lt;/strong&gt;&amp;nbsp;đ&amp;atilde; được lộ diện v&amp;agrave; trở th&amp;agrave;nh t&amp;acirc;m điểm sự kiện Spring Loaded của Apple đầu năm 2021. Mặc d&amp;ugrave; kh&amp;ocirc;ng thay đổi nhiều về bề ngo&amp;agrave;i nhưng b&amp;ecirc;n trong thế hệ iPad n&amp;agrave;y đ&amp;atilde; được thay đổi mạnh mẽ với sự xuất hiện của con chip M1.&lt;/p&gt;\r\n&lt;h2&gt;&lt;strong&gt;1. Chip M1 được đưa v&amp;agrave;o iPad.&lt;/strong&gt;&lt;br&gt;C&amp;oacute; thể n&amp;oacute;i đ&amp;acirc;y l&amp;agrave; bước tiến lớn trong việc Apple lu&amp;ocirc;n ấp ủ bao l&amp;acirc;u nay ch&amp;iacute;nh l&amp;agrave; việc d&amp;ugrave;ng những chiếc tablet để thay thế laptop.&lt;br&gt;Con chip Apple M1 được nh&amp;agrave; T&amp;aacute;o đưa l&amp;ecirc;n&lt;strong&gt;&amp;nbsp;iPad Pro 2021&lt;/strong&gt;.&lt;/h2&gt;\r\n&lt;p&gt;&lt;img style=&quot;height: auto;&quot; src=&quot;https://onewaymobile.vn/upload_images/images/2021/05/30/iPad-Pro-2021-onewaymobile_vn.jpg&quot; alt=&quot;&quot; data-src=&quot;/upload_images/images/2021/05/30/iPad-Pro-2021-onewaymobile_vn.jpg&quot;&gt;&lt;br&gt;Đ&amp;acirc;y l&amp;agrave; lần đầu ti&amp;ecirc;n, iPad Pro sau nhiều năm cải tiến, ph&amp;aacute;t triển đ&amp;atilde; kh&amp;ocirc;ng sử dụng phi&amp;ecirc;n bản A-Series.&lt;br&gt;Apple M1 l&amp;agrave; con chip nhận được v&amp;ocirc; số lời khen từ những người sử dụng, hiệu năng của n&amp;oacute; tr&amp;ecirc;n những chiếc Macbook đ&amp;atilde; g&amp;acirc;y ấn tượng v&amp;ocirc; c&amp;ugrave;ng tốt với người d&amp;ugrave;ng v&amp;agrave; cũng đ&amp;aacute; ph&amp;aacute; được rất nhiều kỉ lục.&lt;br&gt;Ch&amp;iacute;nh v&amp;igrave; việc bộ vi xử l&amp;iacute; n&amp;agrave;y được trang bị tr&amp;ecirc;n iPad n&amp;agrave;y th&amp;igrave; hiệu năng của chiếc m&amp;aacute;y sẽ c&amp;oacute; hiệu suất cực k&amp;igrave; nhanh, tốt.&lt;br&gt;Apple cho biết, do c&amp;oacute; sự xuất hiện của con chip M1, tốc độ xử l&amp;iacute; của&amp;nbsp;&lt;strong&gt;iPad Pro 2021&lt;/strong&gt;&amp;nbsp;sẽ hơn 50% so với thế hệ trước tức iPad Pro 2020, c&amp;ograve;n nếu so s&amp;aacute;nh với thế hệ iPad đầu ti&amp;ecirc;n th&amp;igrave; l&amp;ecirc;n tới 75 lần.&lt;/p&gt;\r\n&lt;p&gt;&lt;img style=&quot;height: auto;&quot; src=&quot;https://onewaymobile.vn/upload_images/images/2021/05/30/iPad-Pro-2021-onewaymobile_vn2.png&quot; alt=&quot;&quot; data-src=&quot;/upload_images/images/2021/05/30/iPad-Pro-2021-onewaymobile_vn2.png&quot;&gt;&lt;br&gt;B&amp;ecirc;n cạnh đ&amp;oacute;, tốc độ xử l&amp;iacute; đồ họa nhanh hơn 40% của thế hệ Pro đ&amp;agrave;n anh v&amp;agrave; cao gấp 1500 lần so với chiếc iPad đầu ti&amp;ecirc;n.&lt;br&gt;Nghe qua những th&amp;ocirc;ng số, cũng c&amp;oacute; thể hiểu hiệu năng của những chiếc iPad Pro l&amp;agrave; v&amp;ocirc; c&amp;ugrave;ng mạnh mẽ.&lt;br&gt;Những game đồ họa cao, c&amp;ocirc;ng việc đ&amp;ograve;i hỏi về m&amp;agrave;u sắc, AR th&amp;igrave; cũng sẽ đơn giản khi xử l&amp;iacute; tr&amp;ecirc;n thế hệ n&amp;agrave;y.&lt;br&gt;C&amp;ograve;n chưa kể bộ nhớ của iPad c&amp;oacute; thể lưu trữ thoải m&amp;aacute;i t&amp;agrave;i liệu, ứng dụng khi người d&amp;ugrave;ng c&amp;oacute; thể t&amp;ugrave;y chọn phi&amp;ecirc;n bản RAM lớn v&amp;agrave; bộ nhớ lớn l&amp;ecirc;n tới 16GB v&amp;agrave; 1 - 2TB bộ nhớ trong.&lt;/p&gt;\r\n&lt;p&gt;&lt;img style=&quot;height: auto;&quot; src=&quot;https://onewaymobile.vn/upload_images/images/2022/05/05/ipad-pro-m1-onewaymobile-2.png&quot; alt=&quot;&quot; data-src=&quot;/upload_images/images/2022/05/05/ipad-pro-m1-onewaymobile-2.png&quot;&gt;&lt;/p&gt;\r\n&lt;h2&gt;&lt;strong&gt;2. M&amp;agrave;n h&amp;igrave;nh chất lượng cao.&lt;/strong&gt;&lt;br&gt;Với phiển bản 12.9 th&amp;igrave; đ&amp;acirc;y l&amp;agrave; một sự n&amp;acirc;ng cấp rất lớn. M&amp;agrave;n h&amp;igrave;nh với tấm nền Mini LED được trang bị tr&amp;ecirc;n iPad Pro 12.9&quot; 2021&lt;br&gt;Đ&amp;acirc;y l&amp;agrave; loại m&amp;agrave;n giống LCD nhưng được cải tiến để đem lại chất lượng hiển thị sống động, ch&amp;acirc;n thực nhất. Đồn thời sẽ hạn chế được khả năng bị ch&amp;aacute;t m&amp;agrave;n h&amp;igrave;nh so với c&amp;ocirc;ng nghệ m&amp;agrave;n h&amp;igrave;nh OLED&lt;br&gt;C&amp;ocirc;ng nghệ m&amp;agrave;n h&amp;igrave;nh tr&amp;ecirc;n iPad Pro 12.9&quot; được gọi l&amp;agrave; c&amp;ocirc;ng nghệ Liquid Retina XDR mang tới trải nghiệm b&amp;igrave;nh ảnh, chi tiết ch&amp;acirc;n thực nhất, ấn tượng nhất.&lt;br&gt;Độ s&amp;aacute;ng m&amp;agrave;n h&amp;igrave;nh l&amp;ecirc;n đến 1000 nits v&amp;agrave; s&amp;aacute;ng tối đa l&amp;agrave; 1600 nits c&amp;ugrave;ng với độ tương phản 1000000:1&lt;br&gt;Với việc trang bị m&amp;agrave;n h&amp;igrave;nh th&amp;ocirc;ng số khủng vậy, chiếc iPad n&amp;agrave;y ho&amp;agrave;n to&amp;agrave;n c&amp;oacute; thể phục vụ những c&amp;ocirc;ng việc về s&amp;aacute;ng tao, đồ họa v&amp;agrave; c&amp;oacute; thể chỉnh c&amp;aacute;c nội dung HDR.&lt;/h2&gt;\r\n&lt;p&gt;&lt;img style=&quot;height: auto;&quot; src=&quot;https://onewaymobile.vn/upload_images/images/2021/05/30/iPad-Pro-2021-onewaymobile_vn4_2.jpg&quot; alt=&quot;&quot; data-src=&quot;/upload_images/images/2021/05/30/iPad-Pro-2021-onewaymobile_vn4_2.jpg&quot;&gt;&lt;/p&gt;\r\n&lt;h2&gt;&lt;strong&gt;3. Những n&amp;acirc;ng cấp đ&amp;aacute;ng gi&amp;aacute; kh&amp;aacute;c của iPad Pro 2021.&lt;/strong&gt;&lt;br&gt;Mặc d&amp;ugrave; thiết kế của&amp;nbsp;&lt;strong&gt;iPad Pro 2021&lt;/strong&gt;&amp;nbsp;kh&amp;ocirc;ng c&amp;oacute; sự kh&amp;aacute;c biệt so với phi&amp;ecirc;n bản cũ.&lt;br&gt;Nhưng sự n&amp;acirc;ng cấp về hiệu năng, m&amp;agrave;n h&amp;igrave;nh rất đ&amp;aacute;ng gi&amp;aacute;, ngo&amp;agrave;i ra c&amp;ograve;n c&amp;oacute; những n&amp;acirc;ng cấp kh&amp;aacute;c rất đ&amp;aacute;ng sử dụng.&lt;br&gt;Cổng Thunderbolt/USB 4 đem lại tốc độ truyền tải nhanh hơn gấp 4 lần so với người đ&amp;agrave;n anh v&amp;agrave; l&amp;ecirc;n tớ 40Gbps.&lt;br&gt;Với việc hỗ trợ cả Ethernet 10Gbps, iPad Pro 2021 c&amp;oacute; thể kết nối c&amp;aacute;c phụ kiện l&amp;agrave;m việc hiệu suất cao như bộ nhớ ngo&amp;agrave;i, xuất m&amp;agrave;n h&amp;igrave;nh ngo&amp;agrave;i với độ ph&amp;acirc;n giải cao,...&lt;/h2&gt;\r\n&lt;p&gt;Ngo&amp;agrave;i ra 5G cũng được t&amp;iacute;ch hợp tr&amp;ecirc;n thế hệ iPad mới. Với điều n&amp;agrave;y, người d&amp;ugrave;ng c&amp;oacute; thể thoải m&amp;aacute;i cầm chiếc iPad của m&amp;igrave;nh l&amp;agrave;m việc mọi l&amp;uacute;c mọi nơi.&lt;br&gt;5G sẽ đem lại chất lượng cao để người d&amp;ugrave;ng c&amp;oacute; thể đ&amp;agrave;m thoại trực tuyến, facetime, l&amp;agrave;m việc, giải tr&amp;iacute; tốt hơn rất nhiều.&lt;/p&gt;\r\n&lt;p&gt;&lt;img style=&quot;height: auto;&quot; src=&quot;https://onewaymobile.vn/upload_images/images/2022/05/05/ipad-pro-m1-onewaymobile-3.png&quot; alt=&quot;&quot; data-src=&quot;/upload_images/images/2022/05/05/ipad-pro-m1-onewaymobile-3.png&quot;&gt;&lt;/p&gt;\r\n&lt;p&gt;Camera cũng được n&amp;acirc;ng cấp nhẹ khi hệ thống camera TrueDepth được t&amp;iacute;ch hợp tr&amp;ecirc;n camera mặt trước với độ ph&amp;acirc;n giải 12MP.&lt;br&gt;T&amp;iacute;nh năng mới được ra mắt Center Stage sẽ tracking khu&amp;ocirc;n mặt người d&amp;ugrave;ng để tạo khả năng, trải nghiệm tốt nhất khi người d&amp;ugrave;ng sử dụng để l&amp;agrave;m việc, họp onlime.&lt;/p&gt;', 4299000, 43990000, 'https://bizweb.dktcdn.net/100/502/883/products/minhtuanmobile-ipad-pro-11-selec-78be9d03-2d95-4a49-968e-a5332eb20465-25342150-a1b4-4244-a941-9089187a0048-44aae303-9599-4883-87ec-8b4256b6f45a.png?v=1700213504547', 1, 0, 1, 8, 'gen-9', 256, 8, NULL, 11, 'ipad', ' Apple', 0, 'Xám, Trắng', 'Apple M1 8 nhân', '1 Nano SIM hoặc 1 eSIM', '28.65 Wh (~ 7538 mAh)', 'Li-Po', '120', '	1668 x 2388 Pixels', '	Chính 12 MP & Phụ 10 MP, TOF 3D LiDAR', '12 MP', 'iPadOS 15', 'Được hỗ trợ 1 đổi 1 trong 30 ngày nếu có lỗi từ nhà sản xuất', NULL, NULL, 'game,cauhinh,nhe', 'sac,baomat');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `iphone`
--

CREATE TABLE `iphone` (
  `id` int(11) NOT NULL,
  `ten_san_pham` varchar(255) DEFAULT NULL,
  `noi_dung` text DEFAULT NULL,
  `gia_km` int(11) DEFAULT NULL,
  `gia_goc` int(11) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `moi` varchar(20) DEFAULT '0',
  `noi_bat` varchar(20) DEFAULT '0',
  `ban_chay` varchar(20) DEFAULT '0',
  `giam` varchar(20) DEFAULT NULL,
  `phien_ban` varchar(255) DEFAULT NULL,
  `bo_nho` int(11) DEFAULT NULL,
  `ram` int(11) DEFAULT NULL,
  `camera` varchar(255) DEFAULT NULL,
  `man_hinh` float DEFAULT NULL,
  `loai` varchar(255) DEFAULT NULL,
  `thuong_hieu` varchar(255) DEFAULT NULL,
  `so_luong` int(11) DEFAULT NULL,
  `mau_sac` varchar(255) DEFAULT NULL,
  `chip` varchar(255) DEFAULT NULL,
  `sim` varchar(255) DEFAULT NULL,
  `dung_luong_pin` varchar(255) DEFAULT NULL,
  `pin` varchar(255) DEFAULT NULL,
  `tan_so` varchar(255) DEFAULT NULL,
  `do_phan_giai` varchar(255) DEFAULT NULL,
  `camera_sau` varchar(255) DEFAULT NULL,
  `camera_truoc` varchar(255) DEFAULT NULL,
  `he_dieu_hanh` varchar(255) DEFAULT NULL,
  `bao_hanh` varchar(255) DEFAULT NULL,
  `so_sanh` text DEFAULT NULL,
  `thich` text DEFAULT NULL,
  `nhu_cau` varchar(255) DEFAULT NULL,
  `tinh_nang_camera` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `iphone`
--

INSERT INTO `iphone` (`id`, `ten_san_pham`, `noi_dung`, `gia_km`, `gia_goc`, `img`, `moi`, `noi_bat`, `ban_chay`, `giam`, `phien_ban`, `bo_nho`, `ram`, `camera`, `man_hinh`, `loai`, `thuong_hieu`, `so_luong`, `mau_sac`, `chip`, `sim`, `dung_luong_pin`, `pin`, `tan_so`, `do_phan_giai`, `camera_sau`, `camera_truoc`, `he_dieu_hanh`, `bao_hanh`, `so_sanh`, `thich`, `nhu_cau`, `tinh_nang_camera`) VALUES
(1, 'iPhone 11 64GB - Chính hãng VN/A', '<h3><strong>Iphone 11 New Fullbox 100%</strong>: Mở hộp v&agrave; đ&aacute;nh gi&aacute;.</h3>\r\n<p>Apple đ&atilde; ra mắt thế hệ smartphone mới v&agrave;o năm 2019. Sau th&agrave;nh c&ocirc;ng bởi doanh số của iPhone XR, nh&agrave; T&aacute;o muốn khẳng định v&agrave; tiếp tục th&agrave;nh c&ocirc;ng với doanh số khi một lần nữa cho ra mắt mẫu iPhone gi&aacute; cả ph&ugrave; hợp với người d&ugrave;ng. Trong b&agrave;i viết dưới đ&acirc;y h&atilde;y xem một sản phẩm bao gồm g&igrave; m&agrave; rất nhiều t&iacute;n đồ c&ocirc;ng nghệ đ&atilde; phải đi&ecirc;u đứng v&agrave; ph&aacute;t sốt với thế hệ iPhone n&agrave;y.</p>\r\n<p><strong>1. Mở hộp Iphone 11&nbsp;New Fullbox 100%.</strong><br>Hộp của phi&ecirc;n bản n&agrave;y vu&ocirc;ng vắn, được bọc lớp vỏ nilong mỏng như những iPhone đời trước. Hộp tổng thể m&agrave;u trắng c&oacute; in h&igrave;nh ảnh của m&aacute;y b&ecirc;n trong rất s&aacute;ng v&agrave; sang trọng.<br>B&ecirc;n trong bao gồm c&aacute;c phụ kiện quen thuộc của nh&agrave; T&aacute;o với c&aacute;p sạc Lightning, tai nghe EarPods v&agrave; adapter 5W kh&ocirc;ng phải sạc nhanh.</p>\r\n<p><strong>2. Thiết kế đẹp mắt, lạ.</strong><br>Mặt trước sễ thiết kế giống như iPhone XR, vẫn sở hữu notch d&agrave;i rộng giống như những phi&ecirc;n bản cũ. Lớp k&iacute;nh s&aacute;ng, bao bọc m&agrave;n h&igrave;nh v&agrave; những cảm biến, camera. Cạnh viền được bo g&oacute;c độ cong kh&aacute; nhỏ gần như phẳng, tạo n&ecirc;n cảm gi&aacute;c tr&agrave;n viền, đầy đủ.<br>Hai b&ecirc;n h&ocirc;ng của phi&ecirc;n bản n&agrave;y vẫn l&agrave; c&aacute;c n&uacute;t vật l&yacute; quen thuộc của nh&agrave; T&aacute;o gồm c&ocirc;ng tắc im lặng, ph&iacute;m &acirc;m lượng b&ecirc;n tr&aacute;i. Ph&iacute;a dưới gồm cổng Lightning v&agrave; loa thoại. Ph&iacute;a b&ecirc;n phải sẽ bảo gồm ph&iacute;m nguồn v&agrave; khe Sim. Một sự sắp xếp rất quen thuộc với những fan của nh&agrave; T&aacute;o khuyết.</p>\r\n<p><img style=\"height: auto;\" src=\"https://onewaymobile.vn/upload_images/images/2020/10/18/Iphone%2011%20-%20onewaymobile_vn(7).jpg\" alt=\"\" data-src=\"/upload_images/images/2020/10/18/Iphone%2011%20-%20onewaymobile_vn(7).jpg\"></p>\r\n<p><em>Thiết kế sang trọng, độc nhất.</em><br>Khung của điện thoại T&aacute;o n&agrave;y l&agrave; khung nh&ocirc;m với lớp sơn mờ giống như XR v&agrave; X. Mắt sau được bảo vệ bở lớp k&iacute;nh Gorilla với logo t&aacute;o lớn hơn v&agrave; đặt ở vị tr&iacute; trung t&acirc;m của m&aacute;y chứ kh&ocirc;ng phải ở phần nửa tr&ecirc;n của c&aacute;c thế hệ trước. Đặc biệt hơn, mọi &aacute;nh mắt dược đổ dồn v&agrave;o cụm camera h&igrave;nh vu&ocirc;ng độc đ&aacute;o, nh&igrave;n rất lộm cộm nhưng thực tế kh&ocirc;ng hề bị nh&ocirc; v&agrave; v&ecirc;nh ra qu&aacute; nhiều.</p>\r\n<p><strong>3. M&agrave;n h&igrave;nh sắc n&eacute;t, cấu h&igrave;nh mạnh mẽ.</strong><br>Đầu ti&ecirc;n, Apple vẫn giữ nguy&ecirc;n m&agrave;n h&igrave;nh của XR với tấm nền IPS LCD 6.1&rdquo; b&ecirc;n dưới gồm phần notch t&iacute;ch hợp FaceID, Camera selfie v&agrave; loa &acirc;m thanh. M&agrave;n h&igrave;nh được bảo vệ cũng bởi lớp k&iacute;nh Gorilla phủ lớp oleophobic, chống d&iacute;nh v&acirc;n tay, dễ lau ch&ugrave;i.&nbsp;<strong>Iphone 11 New Fullbox 100%</strong>&nbsp;c&oacute; m&agrave;n h&igrave;nh IPS LCD Liquid Retina 6.1 inch với 326 ppi, notch ở ph&iacute;a tr&ecirc;n. Độ ph&acirc;n giải 828 x 1792 pixel đem lại chi tiết cho h&igrave;nh ảnh. C&ocirc;ng nghệ True Tone được t&iacute;ch hợp n&ecirc;n người d&ugrave;ng ho&agrave;n to&agrave;n c&oacute; thể sử dụng tại trường hợp &aacute;nh s&aacute;ng mạnh.</p>\r\n<p><img style=\"height: auto;\" src=\"https://onewaymobile.vn/upload_images/images/2020/10/18/Iphone%2011%201%20-%20onewaymobile_vn(9).jpg\" alt=\"\" data-src=\"/upload_images/images/2020/10/18/Iphone%2011%201%20-%20onewaymobile_vn(9).jpg\"></p>\r\n<p><em>M&agrave;n h&igrave;nh tuyệt vời.</em></p>\r\n<p>M&agrave;n h&igrave;nh của smartphone n&agrave;y c&oacute; độ ch&iacute;nh x&aacute;c m&agrave;u rất tốt. Điểm Delta E đạt 1.1 , độ lệch tối đa 2,4 sRGB với hỗ trợ DCI-P3, m&agrave;u sắc cũng chuẩn x&aacute;c ngay khi giảm độ s&aacute;ng xuống mức 2.3 nit. M&agrave;u sắc hiển thị tr&ecirc;n phi&ecirc;n bản n&agrave;y đem lại sự chuẩn x&aacute;c, sống động m&agrave; c&oacute; độ s&acirc;u. Mọi trải nghiệm đồ họa khiến c&aacute;c t&iacute;n đồ c&ocirc;ng nghệ kh&ocirc;ng thể ch&ecirc; được.<br>Phi&ecirc;n bản n&agrave;y chạy chip Apple A13 Biona mạnh mẽ. Apple giới thiệu con chip n&agrave;y c&oacute; 8,5 tỷ b&oacute;ng b&aacute;n dẫn với tiến tr&igrave;nh 7 nm. Chip A13 Bionic c&oacute; 6 nh&acirc;n book xử l&iacute; với 2 nh&acirc;n xung nhịp 2.65 GHz Lightning v&agrave; 4 nh&acirc;n CPU Thunder 1,8GHz. Neural Engine thế hệ 3 được t&iacute;ch hợp c&oacute; 8 nh&acirc;n nhanh hơn 20% với thế hệ cũ v&agrave; n&oacute; sẽ phụ tr&aacute;ch c&aacute;c t&iacute;nh năng hư Deep Fusion v&agrave; Night Mode. Với cấu h&igrave;nh như vậy mọi t&aacute;c vụ nặng nề đều c&oacute; thể đ&aacute;p ứng được. Từ chỉnh sửa h&igrave;nh ảnh, video cho tới chơi c&aacute;c game với mức đồ họa cao nhất như Li&ecirc;n Qu&acirc;n, PUBG, COD. Người d&ugrave;ng sẽ c&oacute; trải nghiệm đồ họa rất tuyệt vời v&agrave; kh&ocirc;ng hề c&oacute; sự thất vọng n&agrave;o vơi chất lượng hiển thị.</p>\r\n<p><strong>4. Camera ch&acirc;n thực, pin khủng.</strong><br>Cụm camera của thế hệ n&agrave;y gồm c&oacute; 2 camera v&agrave; 1 flash ở ph&iacute;a sau. Camera ch&iacute;nh 12MP c&oacute; OIS v&agrave; 1 camera g&oacute;c rộng 12MP, kh&ocirc;ng c&oacute; camera zoom, ph&iacute;a trước c&oacute; 1 camera 12 MP. Đ&acirc;y l&agrave; cụm camera tr&ecirc;n smartphone c&oacute; chất lượng tốt nhất trong thời điểm hiện tại. H&igrave;nh ảnh từ cụm camera sau rất sắc n&eacute;t, chi tiết tỉ mỉ. M&agrave;u sắc cực ch&iacute;nh s&aacute;c, ch&acirc;n thực, độ tương phản tuyệt vời. Camera trước đem lại h&igrave;nh ảnh selfie đầy đủ, sắc n&eacute;t, m&agrave;u sắc chuẩn x&aacute;c. H&igrave;nh ảnh được đem lại được đ&aacute;nh gi&aacute; l&agrave; xuất sắc đối với camera của điện thoại.<br>Với vi&ecirc;n pin 3110 mAh, phi&ecirc;n bản n&agrave;y c&oacute; thể thực hiện 18 cuộc giờ 3G, 15 giờ khi duyệt web v&agrave; xem video trong 18 giờ. Mặc d&ugrave; kh&ocirc;ng c&oacute; sạc nhanh trong hộp nhưng thế hệ n&agrave;y c&oacute; thể sử dụng được sạc nhanh 18W v&agrave; hỗ trợ sạc kh&ocirc;ng d&acirc;y.</p>', 60000, 14990000, 'https://bizweb.dktcdn.net/thumb/large/100/502/883/products/230807014406-iphone11.png?v=1700190264893', '1', '0', '1', '29', '11', 128, 4, 'Dual camera (12 MP, f/1.8, 26mm (wide), 1/2.55', 6.1, 'Điện thoại', 'Apple', 999, 'Đen, Trắng', 'Apple A13 Bionic 6 nhân', '	1 Nano SIM & 1 eSIM', '3110', 'Li-ion', '60 Hz', '828 x 1792', '	2 camera 12 MP', '12 MP', 'iOS 15', 'Được hỗ trợ 1 đổi 1 trong 30 ngày nếu có lỗi từ nhà sản xuất', NULL, '1', 'game,cauhinh,nhe', 'sac,baomat'),
(2, 'aPhone 11 64GB - Chính hãng VN/A', '<h3><strong>Iphone 11 New Fullbox 100%</strong>: Mở hộp v&agrave; đ&aacute;nh gi&aacute;.</h3>\r\n<p>Apple đ&atilde; ra mắt thế hệ smartphone mới v&agrave;o năm 2019. Sau th&agrave;nh c&ocirc;ng bởi doanh số của iPhone XR, nh&agrave; T&aacute;o muốn khẳng định v&agrave; tiếp tục th&agrave;nh c&ocirc;ng với doanh số khi một lần nữa cho ra mắt mẫu iPhone gi&aacute; cả ph&ugrave; hợp với người d&ugrave;ng. Trong b&agrave;i viết dưới đ&acirc;y h&atilde;y xem một sản phẩm bao gồm g&igrave; m&agrave; rất nhiều t&iacute;n đồ c&ocirc;ng nghệ đ&atilde; phải đi&ecirc;u đứng v&agrave; ph&aacute;t sốt với thế hệ iPhone n&agrave;y.</p>\r\n<p><strong>1. Mở hộp Iphone 11&nbsp;New Fullbox 100%.</strong><br>Hộp của phi&ecirc;n bản n&agrave;y vu&ocirc;ng vắn, được bọc lớp vỏ nilong mỏng như những iPhone đời trước. Hộp tổng thể m&agrave;u trắng c&oacute; in h&igrave;nh ảnh của m&aacute;y b&ecirc;n trong rất s&aacute;ng v&agrave; sang trọng.<br>B&ecirc;n trong bao gồm c&aacute;c phụ kiện quen thuộc của nh&agrave; T&aacute;o với c&aacute;p sạc Lightning, tai nghe EarPods v&agrave; adapter 5W kh&ocirc;ng phải sạc nhanh.</p>\r\n<p><strong>2. Thiết kế đẹp mắt, lạ.</strong><br>Mặt trước sễ thiết kế giống như iPhone XR, vẫn sở hữu notch d&agrave;i rộng giống như những phi&ecirc;n bản cũ. Lớp k&iacute;nh s&aacute;ng, bao bọc m&agrave;n h&igrave;nh v&agrave; những cảm biến, camera. Cạnh viền được bo g&oacute;c độ cong kh&aacute; nhỏ gần như phẳng, tạo n&ecirc;n cảm gi&aacute;c tr&agrave;n viền, đầy đủ.<br>Hai b&ecirc;n h&ocirc;ng của phi&ecirc;n bản n&agrave;y vẫn l&agrave; c&aacute;c n&uacute;t vật l&yacute; quen thuộc của nh&agrave; T&aacute;o gồm c&ocirc;ng tắc im lặng, ph&iacute;m &acirc;m lượng b&ecirc;n tr&aacute;i. Ph&iacute;a dưới gồm cổng Lightning v&agrave; loa thoại. Ph&iacute;a b&ecirc;n phải sẽ bảo gồm ph&iacute;m nguồn v&agrave; khe Sim. Một sự sắp xếp rất quen thuộc với những fan của nh&agrave; T&aacute;o khuyết.</p>\r\n<p><img style=\"height: auto;\" src=\"https://onewaymobile.vn/upload_images/images/2020/10/18/Iphone%2011%20-%20onewaymobile_vn(7).jpg\" alt=\"\" data-src=\"/upload_images/images/2020/10/18/Iphone%2011%20-%20onewaymobile_vn(7).jpg\"></p>\r\n<p><em>Thiết kế sang trọng, độc nhất.</em><br>Khung của điện thoại T&aacute;o n&agrave;y l&agrave; khung nh&ocirc;m với lớp sơn mờ giống như XR v&agrave; X. Mắt sau được bảo vệ bở lớp k&iacute;nh Gorilla với logo t&aacute;o lớn hơn v&agrave; đặt ở vị tr&iacute; trung t&acirc;m của m&aacute;y chứ kh&ocirc;ng phải ở phần nửa tr&ecirc;n của c&aacute;c thế hệ trước. Đặc biệt hơn, mọi &aacute;nh mắt dược đổ dồn v&agrave;o cụm camera h&igrave;nh vu&ocirc;ng độc đ&aacute;o, nh&igrave;n rất lộm cộm nhưng thực tế kh&ocirc;ng hề bị nh&ocirc; v&agrave; v&ecirc;nh ra qu&aacute; nhiều.</p>\r\n<p><strong>3. M&agrave;n h&igrave;nh sắc n&eacute;t, cấu h&igrave;nh mạnh mẽ.</strong><br>Đầu ti&ecirc;n, Apple vẫn giữ nguy&ecirc;n m&agrave;n h&igrave;nh của XR với tấm nền IPS LCD 6.1&rdquo; b&ecirc;n dưới gồm phần notch t&iacute;ch hợp FaceID, Camera selfie v&agrave; loa &acirc;m thanh. M&agrave;n h&igrave;nh được bảo vệ cũng bởi lớp k&iacute;nh Gorilla phủ lớp oleophobic, chống d&iacute;nh v&acirc;n tay, dễ lau ch&ugrave;i.&nbsp;<strong>Iphone 11 New Fullbox 100%</strong>&nbsp;c&oacute; m&agrave;n h&igrave;nh IPS LCD Liquid Retina 6.1 inch với 326 ppi, notch ở ph&iacute;a tr&ecirc;n. Độ ph&acirc;n giải 828 x 1792 pixel đem lại chi tiết cho h&igrave;nh ảnh. C&ocirc;ng nghệ True Tone được t&iacute;ch hợp n&ecirc;n người d&ugrave;ng ho&agrave;n to&agrave;n c&oacute; thể sử dụng tại trường hợp &aacute;nh s&aacute;ng mạnh.</p>\r\n<p><img style=\"height: auto;\" src=\"https://onewaymobile.vn/upload_images/images/2020/10/18/Iphone%2011%201%20-%20onewaymobile_vn(9).jpg\" alt=\"\" data-src=\"/upload_images/images/2020/10/18/Iphone%2011%201%20-%20onewaymobile_vn(9).jpg\"></p>\r\n<p><em>M&agrave;n h&igrave;nh tuyệt vời.</em></p>\r\n<p>M&agrave;n h&igrave;nh của smartphone n&agrave;y c&oacute; độ ch&iacute;nh x&aacute;c m&agrave;u rất tốt. Điểm Delta E đạt 1.1 , độ lệch tối đa 2,4 sRGB với hỗ trợ DCI-P3, m&agrave;u sắc cũng chuẩn x&aacute;c ngay khi giảm độ s&aacute;ng xuống mức 2.3 nit. M&agrave;u sắc hiển thị tr&ecirc;n phi&ecirc;n bản n&agrave;y đem lại sự chuẩn x&aacute;c, sống động m&agrave; c&oacute; độ s&acirc;u. Mọi trải nghiệm đồ họa khiến c&aacute;c t&iacute;n đồ c&ocirc;ng nghệ kh&ocirc;ng thể ch&ecirc; được.<br>Phi&ecirc;n bản n&agrave;y chạy chip Apple A13 Biona mạnh mẽ. Apple giới thiệu con chip n&agrave;y c&oacute; 8,5 tỷ b&oacute;ng b&aacute;n dẫn với tiến tr&igrave;nh 7 nm. Chip A13 Bionic c&oacute; 6 nh&acirc;n book xử l&iacute; với 2 nh&acirc;n xung nhịp 2.65 GHz Lightning v&agrave; 4 nh&acirc;n CPU Thunder 1,8GHz. Neural Engine thế hệ 3 được t&iacute;ch hợp c&oacute; 8 nh&acirc;n nhanh hơn 20% với thế hệ cũ v&agrave; n&oacute; sẽ phụ tr&aacute;ch c&aacute;c t&iacute;nh năng hư Deep Fusion v&agrave; Night Mode. Với cấu h&igrave;nh như vậy mọi t&aacute;c vụ nặng nề đều c&oacute; thể đ&aacute;p ứng được. Từ chỉnh sửa h&igrave;nh ảnh, video cho tới chơi c&aacute;c game với mức đồ họa cao nhất như Li&ecirc;n Qu&acirc;n, PUBG, COD. Người d&ugrave;ng sẽ c&oacute; trải nghiệm đồ họa rất tuyệt vời v&agrave; kh&ocirc;ng hề c&oacute; sự thất vọng n&agrave;o vơi chất lượng hiển thị.</p>\r\n<p><strong>4. Camera ch&acirc;n thực, pin khủng.</strong><br>Cụm camera của thế hệ n&agrave;y gồm c&oacute; 2 camera v&agrave; 1 flash ở ph&iacute;a sau. Camera ch&iacute;nh 12MP c&oacute; OIS v&agrave; 1 camera g&oacute;c rộng 12MP, kh&ocirc;ng c&oacute; camera zoom, ph&iacute;a trước c&oacute; 1 camera 12 MP. Đ&acirc;y l&agrave; cụm camera tr&ecirc;n smartphone c&oacute; chất lượng tốt nhất trong thời điểm hiện tại. H&igrave;nh ảnh từ cụm camera sau rất sắc n&eacute;t, chi tiết tỉ mỉ. M&agrave;u sắc cực ch&iacute;nh s&aacute;c, ch&acirc;n thực, độ tương phản tuyệt vời. Camera trước đem lại h&igrave;nh ảnh selfie đầy đủ, sắc n&eacute;t, m&agrave;u sắc chuẩn x&aacute;c. H&igrave;nh ảnh được đem lại được đ&aacute;nh gi&aacute; l&agrave; xuất sắc đối với camera của điện thoại.<br>Với vi&ecirc;n pin 3110 mAh, phi&ecirc;n bản n&agrave;y c&oacute; thể thực hiện 18 cuộc giờ 3G, 15 giờ khi duyệt web v&agrave; xem video trong 18 giờ. Mặc d&ugrave; kh&ocirc;ng c&oacute; sạc nhanh trong hộp nhưng thế hệ n&agrave;y c&oacute; thể sử dụng được sạc nhanh 18W v&agrave; hỗ trợ sạc kh&ocirc;ng d&acirc;y.</p>', 10590000, 14990000, 'https://bizweb.dktcdn.net/thumb/large/100/502/883/products/230807014406-iphone11.png?v=1700190264893', '0', '1', '0', '29', '12', 128, 8, 'Dual camera (12 MP, f/1.8, 26mm (wide), 1/2.55', 6.1, 'Điện thoại', 'Apple', 999, 'Đen, Trắng', 'Apple A13 Bionic 6 nhân', '	1 Nano SIM & 1 eSIM', '3110 mAh', 'Li-ion', '60 Hz', '828 x 1792', '	2 camera 12 MP', '12 MP', 'iOS 15', 'Được hỗ trợ 1 đổi 1 trong 30 ngày nếu có lỗi từ nhà sản xuất', '1', NULL, 'chupanh,dungluong,nho,pin', 'khuonmat,khangnuoc');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `logintoken`
--

CREATE TABLE `logintoken` (
  `id` int(11) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `create_time` datetime DEFAULT NULL,
  `admin` int(11) NOT NULL DEFAULT 0,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Đang đổ dữ liệu cho bảng `logintoken`
--

INSERT INTO `logintoken` (`id`, `token`, `create_time`, `admin`, `email`) VALUES
(31, '6e6c017ee35acb1a3df00603cef4c7b35402bb05', '2024-12-02 22:41:37', 0, 'lesycuong692003@gmail.com'),
(32, 'fee15e0580f719a2f4102e25e7c26561e5ffca45', '2024-12-04 22:36:30', 0, 'lesycuong692003@gmail.com'),
(33, 'b165dd60ee7437d359d1285dc7d6fbf953b4c7c1', '2024-12-05 20:55:24', 0, 'lesycuong692003@gmail.com'),
(34, '752e706d330db35bd66b2e1906a3bd6f097a87cd', '2024-12-06 18:32:26', 0, 'lesycuong692003@gmail.com');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `mac`
--

CREATE TABLE `mac` (
  `id` int(11) NOT NULL,
  `ten_san_pham` varchar(255) DEFAULT NULL,
  `noi_dung` text DEFAULT NULL,
  `gia_km` int(11) DEFAULT NULL,
  `gia_goc` int(11) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `moi` int(11) DEFAULT 0,
  `noi_bat` int(11) DEFAULT 0,
  `ban_chay` int(11) DEFAULT 0,
  `giam` int(11) DEFAULT NULL,
  `phien_ban` varchar(255) DEFAULT NULL,
  `bo_nho` int(11) DEFAULT NULL,
  `ram` int(11) DEFAULT NULL,
  `camera` varchar(255) DEFAULT NULL,
  `man_hinh` float DEFAULT NULL,
  `loai` varchar(255) DEFAULT NULL,
  `thuong_hieu` varchar(255) DEFAULT NULL,
  `so_luong` int(11) DEFAULT NULL,
  `mau_sac` varchar(255) DEFAULT NULL,
  `chip` varchar(255) DEFAULT NULL,
  `sim` varchar(255) DEFAULT NULL,
  `dung_luong_pin` varchar(255) DEFAULT NULL,
  `pin` varchar(255) DEFAULT NULL,
  `tan_so` varchar(255) DEFAULT NULL,
  `do_phan_giai` varchar(255) DEFAULT NULL,
  `camera_sau` varchar(255) DEFAULT NULL,
  `camera_truoc` varchar(255) DEFAULT NULL,
  `he_dieu_hanh` varchar(255) DEFAULT NULL,
  `bao_hanh` varchar(255) DEFAULT NULL,
  `so_sanh` text DEFAULT NULL,
  `thich` text DEFAULT NULL,
  `nhu_cau` varchar(255) DEFAULT NULL,
  `tinh_nang_camera` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ma_khuyen_mai`
--

CREATE TABLE `ma_khuyen_mai` (
  `id` int(11) NOT NULL,
  `code` varchar(50) NOT NULL,
  `gia_tri_giam` int(11) NOT NULL,
  `is_active` tinyint(1) DEFAULT 1,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `ma_khuyen_mai`
--

INSERT INTO `ma_khuyen_mai` (`id`, `code`, `gia_tri_giam`, `is_active`, `created_at`) VALUES
(1, 'SUMMER2024', 50000, 1, '2024-12-04 16:38:15'),
(2, 'WELCOME', 100000, 1, '2024-12-04 16:38:15');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_sanpham`
--

CREATE TABLE `order_sanpham` (
  `id` int(11) NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `product_name` varchar(255) NOT NULL,
  `loai` varchar(50) DEFAULT NULL,
  `id_sp` int(11) DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `tong_tien` int(11) NOT NULL,
  `color` varchar(50) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `created_at` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `order_sanpham`
--

INSERT INTO `order_sanpham` (`id`, `order_id`, `product_name`, `loai`, `id_sp`, `quantity`, `price`, `tong_tien`, `color`, `img`, `created_at`) VALUES
(50, 25, 'aPhone 11 64GB - Chính hãng VN/A', 'ipad', 1, 3, 10590000, 31770000, 'Đen', 'https://bizweb.dktcdn.net/thumb/large/100/502/883/products/230807014406-iphone11.png?v=1700190264893', '22:39:59 05-12-2024'),
(51, 25, 'iPad Pro 11 inch M2 2022 1TB Wifi + 5G - Chính hãng VN', 'ipad', 1, 2, 42990000, 85980000, 'Trắng', 'https://bizweb.dktcdn.net/100/502/883/products/minhtuanmobile-ipad-pro-11-selec-78be9d03-2d95-4a49-968e-a5332eb20465-25342150-a1b4-4244-a941-9089187a0048-44aae303-9599-4883-87ec-8b4256b6f45a.png?v=1700213504547', '22:39:59 05-12-2024'),
(52, 26, 'iPad Pro 11 inch M2 2022 1TB Wifi + 5G - Chính hãng VN', 'iphone', 1, 3, 42990000, 128970000, 'Xám', 'https://bizweb.dktcdn.net/100/502/883/products/minhtuanmobile-ipad-pro-11-selec-78be9d03-2d95-4a49-968e-a5332eb20465-25342150-a1b4-4244-a941-9089187a0048-44aae303-9599-4883-87ec-8b4256b6f45a.png?v=1700213504547', '18:32:04 06-12-2024'),
(53, 26, 'iPad Pro 11 inch M2 2022 1TB Wifi + 5G - Chính hãng VN', 'iphone', 1, 4, 42990000, 171960000, 'Trắng', 'https://bizweb.dktcdn.net/100/502/883/products/minhtuanmobile-ipad-pro-11-selec-78be9d03-2d95-4a49-968e-a5332eb20465-25342150-a1b4-4244-a941-9089187a0048-44aae303-9599-4883-87ec-8b4256b6f45a.png?v=1700213504547', '18:32:04 06-12-2024'),
(54, 26, 'iPhone 11 64GB - Chính hãng VN/A', 'iphone', 1, 4, 60000, 240000, 'Đen', 'https://bizweb.dktcdn.net/thumb/large/100/502/883/products/230807014406-iphone11.png?v=1700190264893', '18:32:04 06-12-2024'),
(55, 26, 'iPhone 11 64GB - Chính hãng VN/A', 'iphone', 1, 5, 60000, 300000, 'Trắng', 'https://bizweb.dktcdn.net/thumb/large/100/502/883/products/230807014406-iphone11.png?v=1700190264893', '18:32:04 06-12-2024');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_user`
--

CREATE TABLE `order_user` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `tinh_thanh` varchar(255) DEFAULT NULL,
  `phi_ship` int(11) NOT NULL,
  `payment_method` varchar(50) DEFAULT NULL,
  `total_order` int(11) NOT NULL,
  `note` text DEFAULT NULL,
  `van_chuyen` int(11) NOT NULL DEFAULT 0,
  `thanh_toan` int(11) NOT NULL DEFAULT 0,
  `created_at` varbinary(255) NOT NULL,
  `code_shipping` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `order_user`
--

INSERT INTO `order_user` (`id`, `email`, `name`, `phone`, `address`, `tinh_thanh`, `phi_ship`, `payment_method`, `total_order`, `note`, `van_chuyen`, `thanh_toan`, `created_at`, `code_shipping`) VALUES
(25, 'lesycuong692003@gmail.com', 'Lê Sỹ Cường', '0865811722', 'Ngô Xuân Quảng', 'Hà Nội', 40000, 'Thu hộ (COD)', 117790000, '', 0, 0, 0x32323a33393a35392030352d31322d32303234, NULL),
(26, 'lesycuong692003@gmail.com', 'Lê Sỹ Cường', '0865811722', 'Ngô Xuân Quảng', 'Hà Nội', 40000, 'Chuyển khoản (ATM)', 301510000, '', 0, 0, 0x31383a33323a30342030362d31322d32303234, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phukien`
--

CREATE TABLE `phukien` (
  `id` int(11) NOT NULL,
  `ten_san_pham` varchar(255) DEFAULT NULL,
  `noi_dung` text DEFAULT NULL,
  `gia_km` int(11) DEFAULT NULL,
  `gia_goc` int(11) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `moi` int(11) DEFAULT 0,
  `noi_bat` int(11) DEFAULT 0,
  `ban_chay` int(11) DEFAULT 0,
  `giam` int(11) DEFAULT NULL,
  `phien_ban` varchar(255) DEFAULT NULL,
  `bo_nho` int(11) DEFAULT NULL,
  `ram` int(11) DEFAULT NULL,
  `camera` varchar(255) DEFAULT NULL,
  `man_hinh` float DEFAULT NULL,
  `loai` varchar(255) DEFAULT NULL,
  `thuong_hieu` varchar(255) DEFAULT NULL,
  `so_luong` int(11) DEFAULT NULL,
  `mau_sac` varchar(255) DEFAULT NULL,
  `chip` varchar(255) DEFAULT NULL,
  `sim` varchar(255) DEFAULT NULL,
  `dung_luong_pin` varchar(255) DEFAULT NULL,
  `pin` varchar(255) DEFAULT NULL,
  `tan_so` varchar(255) DEFAULT NULL,
  `do_phan_giai` varchar(255) DEFAULT NULL,
  `camera_sau` varchar(255) DEFAULT NULL,
  `camera_truoc` varchar(255) DEFAULT NULL,
  `he_dieu_hanh` varchar(255) DEFAULT NULL,
  `bao_hanh` varchar(255) DEFAULT NULL,
  `so_sanh` text DEFAULT NULL,
  `thich` text DEFAULT NULL,
  `nhu_cau` varchar(255) DEFAULT NULL,
  `tinh_nang_camera` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `watch`
--

CREATE TABLE `watch` (
  `id` int(11) NOT NULL,
  `ten_san_pham` varchar(255) DEFAULT NULL,
  `noi_dung` text DEFAULT NULL,
  `gia_km` int(11) DEFAULT NULL,
  `gia_goc` int(11) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `moi` int(11) DEFAULT 0,
  `noi_bat` int(11) DEFAULT 0,
  `ban_chay` int(11) DEFAULT 0,
  `giam` int(11) DEFAULT NULL,
  `phien_ban` varchar(255) DEFAULT NULL,
  `bo_nho` int(11) DEFAULT NULL,
  `ram` int(11) DEFAULT NULL,
  `camera` varchar(255) DEFAULT NULL,
  `man_hinh` float DEFAULT NULL,
  `loai` varchar(255) DEFAULT NULL,
  `thuong_hieu` varchar(255) DEFAULT NULL,
  `so_luong` int(11) DEFAULT NULL,
  `mau_sac` varchar(255) DEFAULT NULL,
  `chip` varchar(255) DEFAULT NULL,
  `sim` varchar(255) DEFAULT NULL,
  `dung_luong_pin` varchar(255) DEFAULT NULL,
  `pin` varchar(255) DEFAULT NULL,
  `tan_so` varchar(255) DEFAULT NULL,
  `do_phan_giai` varchar(255) DEFAULT NULL,
  `camera_sau` varchar(255) DEFAULT NULL,
  `camera_truoc` varchar(255) DEFAULT NULL,
  `he_dieu_hanh` varchar(255) DEFAULT NULL,
  `bao_hanh` varchar(255) DEFAULT NULL,
  `so_sanh` text DEFAULT NULL,
  `thich` text DEFAULT NULL,
  `nhu_cau` varchar(255) DEFAULT NULL,
  `tinh_nang_camera` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `watch`
--

INSERT INTO `watch` (`id`, `ten_san_pham`, `noi_dung`, `gia_km`, `gia_goc`, `img`, `moi`, `noi_bat`, `ban_chay`, `giam`, `phien_ban`, `bo_nho`, `ram`, `camera`, `man_hinh`, `loai`, `thuong_hieu`, `so_luong`, `mau_sac`, `chip`, `sim`, `dung_luong_pin`, `pin`, `tan_so`, `do_phan_giai`, `camera_sau`, `camera_truoc`, `he_dieu_hanh`, `bao_hanh`, `so_sanh`, `thich`, `nhu_cau`, `tinh_nang_camera`) VALUES
(1, 'Apple Watch S7 LTE 45mm - Chính Hãng VN/A', NULL, 12490000, 17790000, 'https://bizweb.dktcdn.net/thumb/large/100/502/883/products/220817045837-s7-lte-nhom-su-blue.png?v=1700214386510', 0, 0, 0, 10, 'S7', NULL, NULL, NULL, NULL, NULL, 'apple', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `ipad`
--
ALTER TABLE `ipad`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `iphone`
--
ALTER TABLE `iphone`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `logintoken`
--
ALTER TABLE `logintoken`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `mac`
--
ALTER TABLE `mac`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `ma_khuyen_mai`
--
ALTER TABLE `ma_khuyen_mai`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code` (`code`);

--
-- Chỉ mục cho bảng `order_sanpham`
--
ALTER TABLE `order_sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`);

--
-- Chỉ mục cho bảng `order_user`
--
ALTER TABLE `order_user`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `phukien`
--
ALTER TABLE `phukien`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `watch`
--
ALTER TABLE `watch`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `ipad`
--
ALTER TABLE `ipad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `iphone`
--
ALTER TABLE `iphone`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `logintoken`
--
ALTER TABLE `logintoken`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT cho bảng `mac`
--
ALTER TABLE `mac`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `ma_khuyen_mai`
--
ALTER TABLE `ma_khuyen_mai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `order_sanpham`
--
ALTER TABLE `order_sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT cho bảng `order_user`
--
ALTER TABLE `order_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT cho bảng `phukien`
--
ALTER TABLE `phukien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `watch`
--
ALTER TABLE `watch`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `order_sanpham`
--
ALTER TABLE `order_sanpham`
  ADD CONSTRAINT `order_sanpham_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `order_user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
