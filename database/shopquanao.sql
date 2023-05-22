-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2022 at 03:43 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopquanao`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `title` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `employee_id`, `title`, `img`, `content`, `created_at`, `updated_at`) VALUES
(1, 2, 'Tuyệt chiêu dọn dẹp nhà cửa siêu nhanh ngày cuối tuần', 'https://cdn-www.vinid.net/2020/06/46dbb652-c%C3%A1ch-gi%E1%BB%AF-nh%C3%A0-c%E1%BB%ADa-s%E1%BA%A1ch-s%E1%BA%BD.jpg', 'Giữ nhà cửa sạch sẽ và những lợi ích không ngờ\r\nChắc hẳn ai cũng muốn giữ gìn nhà cửa luôn luôn sạch sẽ, nhưng vì quá bận rộn với công việc nên chúng ta không có thời gian để dọn dẹp. Ít ai ngờ rằng, giữ gìn nhà cửa gọn gàng sẽ mang lại cho bạn và cả gia đình những lợi ích bất ngờ đấy. \r\n\r\nTạo môi trường sống lành mạnh\r\nKhông ai muốn sống trong một không gian ngập đầy rác thải và bụi bẩn. Điều này không chỉ ảnh hưởng đến sức khỏe của chính bạn mà còn khiến bản thân rơi vào trạng thái hỗn loạn, vô tổ chức. Do vậy, việc thường xuyên giặt giũ rèm cửa, ga trải giường, lau dọn bụi bẩn ở tủ, ở sàn sẽ giúp bạn có một không gian sống thật thoáng đãng và sạch sẽ hơn. \r\n\r\nGiải tỏa căng thẳng\r\nNhiều người cho rằng, làm việc nhà cũng là một cách để bạn thư giãn và giải tỏa toàn bộ lo lắng trong tâm trí của mình. Cùng với đó, dọn dẹp nhà giúp bạn có thời gian để lắng nghe bản thân mình và sắp xếp lại mọi thứ.\r\n\r\nDuy trì sức khỏe\r\nKhi làm việc nhà, cơ thể của bạn sẽ được vận động nhiều hơn. Từ công việc quét nhà, dọn dẹp nhà tắm, phòng ngủ đều đòi hỏi bạn phải linh động và sử dụng sức lực của mình. Nhờ đó, cơ thể của bạn sẽ trở nên săn chắc, bền bỉ hơn mà không cần phải tập luyện thể dục. \r\n\r\nXây dựng thói quen làm việc độc lập\r\nKhi sống một mình và không ở chung với gia đình, bạn phải tự tay dọn dẹp nhà cửa và không thể phụ thuộc vào bố mẹ. Nhờ đó, bạn sẽ có trách nhiệm với bản thân hơn từ việc rửa bát, giặt đồ, lau dọn nhà… Xây dựng được những thói quen tự làm việc nhà mỗi ngày sẽ giúp bạn trở nên độc lập hơn và sống có tổ chức. \r\n\r\nTận dụng thời gian rảnh\r\nThay vì sử dụng thời gian để chơi game hay than vãn, tại sao bạn không tận dụng thời gian ấy để trang trí lại ngôi nhà của mình? Bạn có thể trồng cây, xếp quần áo, lau dọn tủ đồ và trang trí lại không gian sống cho chính mình. \r\n\r\nCách giữ nhà cửa sạch sẽ và luôn luôn sạch sẽ\r\nNhững tuyệt chiêu giữ gìn nhà cửa dưới đây sẽ giúp bạn luôn luôn có một không gian nhà ở thoáng đãng mà không cần phải mất nhiều thời gian và công sức. Thay vào đó, bạn có thể dùng thời gian rảnh để nghỉ ngơi, thư giãn và chăm sóc con cái. \r\n\r\nTập thói quen giữ vệ sinh sạch sẽ\r\nXây dựng thói quen giữ vệ sinh sạch sẽ hàng ngày sẽ giúp bạn tiết kiệm được thời gian dọn dẹp mà lúc nào cũng có một không gian sống thoải mái, thoáng đãng. Vậy thì đừng quên học ngay 8 thói quen giữ vệ sinh nhà cửa ngăn nắp này nhé!\r\n\r\nDùng đồ xong trả về vị trí cũ\r\nNhiều người có thói quen dùng xong đồ đạc thường vứt lung tung. Do vậy, để giúp nhà cửa ngăn nắp, việc đầu tiên là bạn phải học cách dùng xong đồ là trả về chỗ cũ. \r\n\r\nGiặt quần áo mỗi ngày\r\nGiặt quần áo mỗi ngày sẽ cho bạn nhiều thời gian rảnh rỗi hơn là dồn tất cả vào ngày cuối tuần. \r\n\r\nSử dụng tấm thảm trải sàn\r\nThảm có khả năng hút bụi bẩn rất tốt,do vậy bạn có thể đặt thảm ở lối đi hay trước cửa nhà để hạn chế bụi bẩn bám trên sàn. Nên nhớ, bạn phải dọn dẹp thảm từ 3 – 5 ngày sau khi sử dụng', '2022-11-28 05:45:39', '2022-11-28 05:45:39');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Đồ Nữ', '2022-11-27 04:37:37', '2022-11-27 04:37:37'),
(2, 'Đồ Nam', '2022-11-27 04:37:37', '2022-11-27 04:37:37'),
(3, 'Đồ Trẻ Em', '2022-11-27 04:37:49', '2022-11-27 04:37:49'),
(4, 'Phụ Kiện', '2022-11-27 04:37:49', '2022-11-27 04:37:49');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `employee_password` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fullname` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cccd` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(13) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `role_id`, `email`, `employee_password`, `fullname`, `cccd`, `phone`, `address`, `created_at`, `updated_at`, `deleted`) VALUES
(1, 1, 'huynhtaitri@gmail.com', 'huynhtaitri', 'Huỳnh Tài Trí', '343928475831', '+849999999989', '19 Nguyễn Hữu Thọ, TP HCM', '2022-11-28 05:39:18', '2022-11-28 05:39:18', b'0'),
(2, 2, 'huynhcongchanh@gmail.com', 'huynhcongchanh', 'Huỳnh Công Chánh', '849204858623', '0777970194', '19 Nguyễn Hữu Thọ, TP Hồ Chí Minh', '2022-11-28 05:39:18', '2022-11-28 05:39:18', b'0'),
(3, 3, 'hotrongnghia@gmail.com', 'hotrongnghia', 'Hồ Trọng Nghĩa', '438495618351', '0834759619', '19 Nguyễn Hữu Thọ, TP HCM', '2022-11-28 05:42:12', '2022-11-28 05:42:12', b'1'),
(4, 4, 'kerryexpress@gmail.com', 'kerryexpress', 'Đơn Vị Vận Chuyển', '444593483292', '0934458649', 'Tầng 8, Toà nhà Pico Plaza, số 20 Đường Cộng Hoà, Phường 12, Q. Tân Bình, TP HCM, Việt Nam', '2022-12-13 15:32:55', '2022-12-13 15:32:55', b'0');

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Áo Thun', '2022-11-27 04:38:13', '2022-11-27 04:38:13'),
(2, 'Áo Khoác', '2022-11-27 04:38:13', '2022-11-27 04:38:13'),
(3, 'Quần Dài', '2022-11-28 06:27:39', '2022-11-28 06:27:39'),
(4, 'Quần Ngắn', '2022-11-28 06:27:39', '2022-11-28 06:27:39'),
(5, 'Túi / Ví', '2022-11-28 06:28:03', '2022-11-28 06:28:03'),
(6, 'Phụ Kiện Khác', '2022-11-28 06:28:03', '2022-11-28 06:28:03');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`id`, `order_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Đang gói hàng', '2022-11-28 05:29:30', '2022-11-28 05:29:30');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `promo_id` int(11) NOT NULL,
  `address` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(13) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_date` datetime NOT NULL,
  `delivery_date` datetime NOT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `feeship` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `VAT` float NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `user_id`, `promo_id`, `address`, `phone`, `order_date`, `delivery_date`, `status`, `feeship`, `total`, `VAT`, `created_at`, `updated_at`, `deleted`) VALUES
(1, 1, 1, NULL, NULL, '2022-11-28 05:27:48', '2022-11-28 05:27:48', 'Chờ xét duyệt', 20, 1, 0.1, '2022-11-28 05:27:48', '2022-11-28 05:27:48', b'0');

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `pdetail_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`id`, `order_id`, `pdetail_id`, `qty`, `amount`, `total`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 1, 1, '2022-11-28 05:28:47', '2022-11-28 05:28:47');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `form_id` int(11) NOT NULL,
  `title` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discription` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `weight` int(11) NOT NULL,
  `sku` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hot` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `category_id`, `form_id`, `title`, `discription`, `weight`, `sku`, `hot`, `created_at`, `updated_at`, `deleted`) VALUES
(1, 1, 2, 'ÁO KHOÁC NGẮN MẶC HAI MẶT', 'Áo khoác dáng ngắn, cổ ve lật, dài tay. Có hai túi ở phía trước. Bên trong lót vải khác màu. Cài phía trước bằng khóa kéo kim loại.', 1, 'SKUAK00001', '2022-11-27 04:39:11', '2022-11-27 04:39:11', '2022-11-27 04:39:11', b'0');

-- --------------------------------------------------------

--
-- Table structure for table `product_color`
--

CREATE TABLE `product_color` (
  `id` int(11) NOT NULL,
  `color` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_color`
--

INSERT INTO `product_color` (`id`, `color`, `created_at`, `updated_at`) VALUES
(1, 'Trắng', '2022-11-27 04:33:34', '2022-11-27 04:33:34'),
(2, 'Đen', '2022-11-27 04:33:34', '2022-11-27 04:33:34');

-- --------------------------------------------------------

--
-- Table structure for table `product_detail`
--

CREATE TABLE `product_detail` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `size_id` int(11) NOT NULL,
  `color_id` int(11) NOT NULL,
  `img_id` int(11) NOT NULL,
  `discount_id` int(11) DEFAULT NULL,
  `price` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_detail`
--

INSERT INTO `product_detail` (`id`, `product_id`, `size_id`, `color_id`, `img_id`, `discount_id`, `price`, `qty`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 2, 1, NULL, 200, 1, 'Còn Hàng', '2022-11-27 04:39:42', '2022-11-27 04:39:42'),
(2, 1, 2, 2, 2, NULL, 200, 1, 'Còn Hàng', '2022-11-27 04:40:46', '2022-11-27 04:40:46');

-- --------------------------------------------------------

--
-- Table structure for table `product_discount`
--

CREATE TABLE `product_discount` (
  `id` int(11) NOT NULL,
  `percent` float NOT NULL,
  `status` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_discount`
--

INSERT INTO `product_discount` (`id`, `percent`, `status`, `created_at`, `updated_at`) VALUES
(1, 0.1, '2022-11-27 04:34:03', '2022-11-27 04:34:03', '2022-11-27 04:34:03'),
(2, 0.2, '2022-11-27 04:34:03', '2022-11-27 04:34:03', '2022-11-27 04:34:03');

-- --------------------------------------------------------

--
-- Table structure for table `product_img`
--

CREATE TABLE `product_img` (
  `id` int(11) NOT NULL,
  `path` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_img`
--

INSERT INTO `product_img` (`id`, `path`, `created_at`, `updated_at`) VALUES
(1, 'https://static.zara.net/photos///2022/I/0/1/p/2969/257/700/2/w/750/2969257700_6_1_1.jpg?ts=1663313711662', '2022-11-27 04:35:53', '2022-11-27 04:35:53'),
(2, 'https://static.zara.net/photos///2022/I/0/1/p/2969/257/700/2/w/750/2969257700_6_2_1.jpg?ts=1663313711804', '2022-11-27 04:35:53', '2022-11-27 04:35:53');

-- --------------------------------------------------------

--
-- Table structure for table `product_size`
--

CREATE TABLE `product_size` (
  `id` int(11) NOT NULL,
  `size` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_size`
--

INSERT INTO `product_size` (`id`, `size`, `created_at`, `updated_at`) VALUES
(1, 'S', '2022-11-27 04:32:52', '2022-11-27 04:32:52'),
(2, 'M', '2022-11-27 04:32:52', '2022-11-27 04:32:52'),
(3, 'L', '2022-11-27 04:33:15', '2022-11-27 04:33:15');

-- --------------------------------------------------------

--
-- Table structure for table `promo`
--

CREATE TABLE `promo` (
  `id` int(11) NOT NULL,
  `pdetail_id` int(11) NOT NULL,
  `code` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `exp` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `promo`
--

INSERT INTO `promo` (`id`, `pdetail_id`, `code`, `exp`, `created_at`, `updated_at`) VALUES
(1, 1, 'KM1', '2022-11-28 05:26:58', '2022-11-28 05:26:58', '2022-11-28 05:26:58');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', '2022-11-28 05:31:41', '2022-11-28 05:31:41'),
(2, 'QT Website', '2022-11-28 05:31:41', '2022-11-28 05:31:41'),
(3, 'QT Kho', '2022-11-28 05:32:03', '2022-11-28 05:32:03'),
(4, 'Đơn vị vận chuyển', '2022-12-13 15:32:34', '2022-12-13 15:32:34');

-- --------------------------------------------------------

--
-- Table structure for table `token`
--

CREATE TABLE `token` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `code` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `exp` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(13) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `point` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fullname`, `email`, `phone`, `address`, `password`, `point`, `created_at`, `updated_at`, `deleted`) VALUES
(1, 'Ngô Quỳnh Mai', 'maingo@gmail.com', '+849999999999', 'IPI Tower, TP Hồ Chí Minh', '7df35f4414b61c1dda52fd59706ed03c', 500, '2022-11-28 05:25:26', '2022-11-28 05:25:26', b'0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_blog_employeeid` (`employee_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_employeeid_role` (`role_id`);

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_invoice_odid` (`order_id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_odid_userid` (`user_id`),
  ADD KEY `fk_odid_promoid` (`promo_id`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_oddetail_odid` (`order_id`),
  ADD KEY `fk_oddetail_pdetail` (`pdetail_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_category` (`category_id`),
  ADD KEY `fk_form` (`form_id`);

--
-- Indexes for table `product_color`
--
ALTER TABLE `product_color`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_detail`
--
ALTER TABLE `product_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_productid_pdetail` (`product_id`),
  ADD KEY `fk_detail_sizeid` (`size_id`),
  ADD KEY `fk_detail_colorid` (`color_id`),
  ADD KEY `fk_detail_imgid` (`img_id`),
  ADD KEY `fk_detail_discountid` (`discount_id`);

--
-- Indexes for table `product_discount`
--
ALTER TABLE `product_discount`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_img`
--
ALTER TABLE `product_img`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_size`
--
ALTER TABLE `product_size`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `promo`
--
ALTER TABLE `promo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_promo_pdetail` (`pdetail_id`) USING BTREE;

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `token`
--
ALTER TABLE `token`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_token_userid` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product_color`
--
ALTER TABLE `product_color`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product_detail`
--
ALTER TABLE `product_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product_discount`
--
ALTER TABLE `product_discount`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product_img`
--
ALTER TABLE `product_img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product_size`
--
ALTER TABLE `product_size`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `promo`
--
ALTER TABLE `promo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `token`
--
ALTER TABLE `token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blog`
--
ALTER TABLE `blog`
  ADD CONSTRAINT `fk_blog_employeeid` FOREIGN KEY (`employee_id`) REFERENCES `employee` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `fk_employeeid_role` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `invoice`
--
ALTER TABLE `invoice`
  ADD CONSTRAINT `fk_invoice_odid` FOREIGN KEY (`order_id`) REFERENCES `order` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `fk_odid_promoid` FOREIGN KEY (`promo_id`) REFERENCES `promo` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_odid_userid` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD CONSTRAINT `fk_oddetail_odid` FOREIGN KEY (`order_id`) REFERENCES `order` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_oddetail_pdetail` FOREIGN KEY (`pdetail_id`) REFERENCES `product_detail` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `fk_category` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_form` FOREIGN KEY (`form_id`) REFERENCES `form` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product_detail`
--
ALTER TABLE `product_detail`
  ADD CONSTRAINT `fk_detail_colorid` FOREIGN KEY (`color_id`) REFERENCES `product_color` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_detail_discountid` FOREIGN KEY (`discount_id`) REFERENCES `product_discount` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_detail_imgid` FOREIGN KEY (`img_id`) REFERENCES `product_img` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_detail_sizeid` FOREIGN KEY (`size_id`) REFERENCES `product_size` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_productid_pdetail` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `promo`
--
ALTER TABLE `promo`
  ADD CONSTRAINT `fk_promo` FOREIGN KEY (`pdetail_id`) REFERENCES `product_detail` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `token`
--
ALTER TABLE `token`
  ADD CONSTRAINT `fk_token_userid` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
