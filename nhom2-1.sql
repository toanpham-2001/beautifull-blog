-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2022 at 08:25 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nhom2`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `content` longtext NOT NULL,
  `home` int(2) NOT NULL,
  `view` bigint(20) NOT NULL,
  `category_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `name`, `image`, `description`, `content`, `home`, `view`, `category_id`) VALUES
(1, 'Ngô Đức Giang', 'https://1.bp.blogspot.com/-oK9-HK5F4EY/XZAz4-UQqvI/AAAAAAAAK2M/OW_pQ1dazbo_gVSJ3P_F1S2VAuzVOY5eACLcBGAsYHQ/s1600/MOCHI%2BSKIN%2BMAILOVESBEAUTY.JPG', 'hhhhhhhhhhhfhf', '<p>&aacute;dasdadasdsad</p>', 1, 22, 'makeup'),
(2, 'Làm Thế nào để giảm cân sau Tết', 'https://1.bp.blogspot.com/-oK9-HK5F4EY/XZAz4-UQqvI/AAAAAAAAK2M/OW_pQ1dazbo_gVSJ3P_F1S2VAuzVOY5eACLcBGAsYHQ/s1600/MOCHI%2BSKIN%2BMAILOVESBEAUTY.JPG', 'giang', '<p style=\"text-align: justify;\"><span style=\"font-family: Arial; font-size: 11pt; white-space: pre-wrap;\">Sau Tết năm n&agrave;o cũng thấy từ kho&aacute; \"giảm c&acirc;n\" n&ecirc;n d&ugrave; năm nay m&igrave;nh kh&ocirc;ng c&oacute; nhu cầu th&igrave; với kinh nghiệm </span><span style=\"font-family: Arial; font-size: 14.6667px; white-space: pre-wrap;\">giảm c&acirc;n</span><span style=\"font-family: Arial; font-size: 11pt; white-space: pre-wrap;\"> v&agrave; giữ d&aacute;ng m&igrave;nh xin chia sẻ v&agrave;i tips v&ocirc; c&ugrave;ng hiệu quả, kh&ocirc;ng c&oacute; t&aacute;c dụng phụ như sau nha:</span></p>\r\n<p dir=\"ltr\" style=\"line-height: 1.38; margin-bottom: 0pt; margin-top: 0pt;\">&nbsp;</p>\r\n<p><span id=\"docs-internal-guid-7dd7f966-7fff-e0f0-7167-02218c3a4467\"><img style=\"text-align: center; display: block; margin-left: auto; margin-right: auto;\" src=\"https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEglNsvJKjp6QTjV4yQoo1iR9cVAZWsZF6fbkULmf_abzv0dUoHzT8C4W1-zuVdtIPGwkEIJhqtvECOiUl67DXuw1a2p9MlLwBKY99R92P47lQc80W_ohbs9Iy23oeFUAEyVAcjxieYRn1hRrf3y_ov0tOwi4Mg7fwNhSAtvx5FFvRrELom87dq6sioH/s1868/Mailovesbeauty_Giam%20can.jpg\" alt=\"\" width=\"169\" height=\"169\" /><br /><br /></span></p>\r\n<div style=\"text-align: justify;\"><span style=\"font-size: 11pt;\">1. Đ&Aacute;NH RĂNG SỚM</span></div>\r\n<div style=\"text-align: justify;\"><span style=\"font-size: 11pt;\">Thường ăn xong 1 tiếng l&agrave; m&igrave;nh đi đ&aacute;nh răng lu&ocirc;n, th&ecirc;m cả bước tăm nước nữa cho trọn bộ. Việc giữ răng miệng sạch khiến m&igrave;nh&hellip;ngại ăn v&igrave; ăn tiếp th&igrave; sẽ phải đ&aacute;nh răng lại, nếu lười đ&aacute;nh răng m&agrave; chỉ s&uacute;c miệng th&igrave; kh&ocirc;ng sạch được ho&agrave;n to&agrave;n sau lại bị s&acirc;u răng c&aacute;c thứ tốn n&uacute;i tiền chữa (lại c&ograve;n phải chịu đau) n&ecirc;n th&ocirc;i t&eacute;m t&eacute;m c&aacute;i mồm lại ???? Ngo&agrave;i ra thường kem đ&aacute;nh răng, nước s&uacute;c miệng hay c&oacute; vị lợ lợ cũng m&igrave;nh cảm thấy thấy bớt th&egrave;m ăn sau đ&oacute;. </span></div>\r\n<div style=\"text-align: justify;\"><span style=\"font-family: Arial; font-size: 14.6667px; white-space: pre-wrap;\">&nbsp;</span></div>\r\n<div style=\"text-align: justify;\"><span style=\"font-size: 11pt;\">2. UỐNG TR&Agrave; XANH </span></div>\r\n<div style=\"text-align: justify;\"><span style=\"font-size: 11pt;\">Tr&agrave; xanh c&oacute; hoạt chất catechin gi&uacute;p ức chế hấp thụ chất b&eacute;o xấu, qua đ&oacute; m&agrave; c&oacute; t&aacute;c dụng tốt trong việc </span><span style=\"font-size: 14.6667px;\">giảm c&acirc;n</span><span style=\"font-size: 11pt;\">. Ngo&agrave;i ra mọi người đều biết tr&agrave; xanh l&agrave; chất chống oxy mạnh n&ecirc;n việc duy tr&igrave; th&oacute;i quen uống 1 cốc tr&agrave; xanh mỗi ng&agrave;y cũng rất c&oacute; lợi với sức khoẻ. Nếu bạn kh&ocirc;ng phải người th&iacute;ch vị tr&agrave; th&igrave; m&igrave;nh recommend vi&ecirc;n uống tr&agrave; xanh của Vital Beautie, em n&agrave;y dạng vi&ecirc;n cứng được t&aacute;ch chiết hoạt chất catechin h&agrave;m lượng cao n&ecirc;n hiệu quả ức chế hấp thụ mỡ cao hơn so với việc uống tr&agrave;. M&igrave;nh đ&atilde; uống rất nhiều rồi v&agrave; trong nh&agrave; l&uacute;c n&agrave;o cũng c&oacute; để sau mỗi bữa ăn nhiều calo uống liền.&nbsp;</span></div>\r\n<p>&nbsp;</p>\r\n<div style=\"text-align: justify;\"><span style=\"font-family: Arial; font-size: 14.6667px; white-space: pre-wrap;\">&nbsp;</span></div>\r\n<div style=\"text-align: justify;\"><span style=\"font-size: 11pt;\">3. CHUYỂN SANG NGƯỜI CHƠI HỆ HẤP, LUỘC </span></div>\r\n<div style=\"text-align: justify;\"><span style=\"font-size: 11pt;\">Nghe c&oacute; vẻ nhạt nhẽo nhưng ăn đồ hấp, luộc sẽ cảm nhận r&otilde; vị ngọt tự nhi&ecirc;n của thực phẩm hơn nữa nếu biết pha nước chấm ngon th&igrave; c&aacute;i g&igrave; cũng xuất sắc lu&ocirc;n, v&iacute; dụ như nấm mỡ hấp chấm nước tương tỏi ớt ???? Chất b&eacute;o c&oacute; lượng calo cao n&ecirc;n chắc chắn đồ chi&ecirc;n, x&agrave;o sẽ c&oacute; lượng calo lớn rồi, th&ecirc;m v&agrave;o đ&oacute; việc ti&ecirc;u thụ nhiều chất b&eacute;o xấu (c&oacute; trong thịt động vật, dầu tinh luyện, bơ thực vật&hellip;) l&acirc;u d&agrave;i sẽ l&agrave;m tắc nghẽn mạch m&aacute;u, tăng nguy cơ bị bệnh tim mạch. </span></div>\r\n<div style=\"text-align: justify;\"><span style=\"font-family: Arial; font-size: 14.6667px; white-space: pre-wrap;\">&nbsp;</span></div>\r\n<div style=\"text-align: justify;\"><span style=\"font-size: 11pt;\">Sương sương l&agrave; 3 tips đơn giản vậy th&ocirc;i chứ ai cũng biết để </span><span style=\"font-size: 14.6667px;\">giảm c&acirc;n</span><span style=\"font-size: 11pt;\"> th&igrave; n&ecirc;n ăn l&agrave;nh mạnh kết hợp với tập luyện sẽ hiệu quả hơn, gi&uacute;p cơ thể thực sự khoẻ mạnh hơn. H&atilde;y lu&ocirc;n đặt mục ti&ecirc;u sức khoẻ l&ecirc;n h&agrave;ng đầu nha mọi người! Ch&uacute;c mọi người một năm thật khoẻ mạnh cả th&acirc;n &amp; t&acirc;m nh&eacute; ✅</span></div>\r\n<p><span style=\"font-family: Arial; font-size: 11pt; font-variant-east-asian: normal; font-variant-numeric: normal; vertical-align: baseline; white-space: pre-wrap;\">&nbsp;</span></p>', 1, 9, 'songdep'),
(3, 'REVIEW | MẶT NẠ DƯỠNG ẨM CHUYÊN SÂU CURÉL REVIEW | MẶT NẠ DƯỠNG ẨM CHUYÊN SÂU CURÉL', 'https://1.bp.blogspot.com/-oK9-HK5F4EY/XZAz4-UQqvI/AAAAAAAAK2M/OW_pQ1dazbo_gVSJ3P_F1S2VAuzVOY5eACLcBGAsYHQ/s1600/MOCHI%2BSKIN%2BMAILOVESBEAUTY.JPG', 'áđá', '<p>Hi mọi người, thời tiết ở miền Bắc đ&atilde; trở lạnh v&agrave; độ ẩm xuống thấp rồi đ&uacute;ng kh&ocirc;ng? Năm nay Mai ở trong S&agrave;i G&ograve;n tuy ấm &aacute;p nhưng đ&acirc;y cũng l&agrave; m&ugrave;a kh&ocirc; n&ecirc;n nếu da kh&ocirc;ng được cấp ẩm s&acirc;u th&igrave; sẽ bị ngứa r&aacute;t, căng chặt. Bước v&agrave;o m&ugrave;a kh&ocirc; th&igrave; chắc chắn cần d&ugrave;ng mặt nạ giấy dưỡng ẩm s&acirc;u rồi. H&ocirc;m nay Mai sẽ review chi tiết Mặt nạ dưỡng ẩm chuy&ecirc;n s&acirc;u (Moisture Repair Sheet Mask) của Cur&eacute;l - loại mặt nạ giấy Mai đang rất y&ecirc;u th&iacute;ch để c&aacute;c bạn tham khảo nha! Cur&eacute;l l&agrave; thương hiệu skincare thuộc tập đo&agrave;n KAO d&agrave;nh cho da nhạy cảm số 1 tại Nhật Bản. Nh&oacute;m nghi&ecirc;n cứu của KAO đ&atilde; nhận ra rằng việc da trở n&ecirc;n kh&ocirc; &amp; nhạy cảm l&agrave; do thiếu Ceramide - một th&agrave;nh phần quan trọng cấu th&agrave;nh n&ecirc;n h&agrave;ng r&agrave;o bảo vệ da. C&aacute;c bạn c&oacute; thể tưởng tượng mỗi tế b&agrave;o l&agrave; một vi&ecirc;n gạch được xếp so le với nhau v&agrave; &ldquo;vữa\" để gi&uacute;p c&aacute;c vi&ecirc;n gạch gắn kết ch&iacute;nh l&agrave; nhờ Ceramide, Axit b&eacute;o v&agrave; Cholesterol. Nếu những th&agrave;nh phần n&agrave;y bị thiếu hụt (do m&ocirc;i trường, tuổi t&aacute;c, th&oacute;i quen sinh hoạt&hellip;) th&igrave; h&agrave;ng r&agrave;o bảo vệ da sẽ bị suy yếu, qua đ&oacute; m&agrave; da rất dễ bị tổn thương v&agrave; gặp nhiều vấn đề. C&aacute;c sản phẩm của Cur&eacute;l đều chứa hoạt chất Ceramide gi&uacute;p phục hồi, th&acirc;m nhập &amp; duy tr&igrave; độ ẩm cho da. Da m&igrave;nh l&agrave; da hỗn hợp, c&oacute; dầu nhẹ ở T-zone, dễ bị mất nước do thường ở trong m&ocirc;i trường gi&oacute; điều ho&agrave;. Tuy m&igrave;nh sinh hoạt điều độ nhưng đ&ocirc;i khi đơn giản l&agrave; bận qu&aacute; lười skincare, bị stress, đến &ldquo;kỳ d&acirc;u\" hay thời tiết thay đổi thất thường th&igrave; da m&igrave;nh trở n&ecirc;n nhạy cảm hơn, nh&igrave;n tổng thể da kh&ocirc;ng được căng mướt m&agrave; tr&ocirc;ng hơi xỉn. Những l&uacute;c soi gương giật m&igrave;nh thấy l&agrave;n da mệt mỏi, thiếu sức sống th&igrave; m&igrave;nh cần ngay một liều thuốc bổ cho l&agrave;n da đ&oacute; ch&iacute;nh l&agrave; mặt nạ giấy. Lượng dưỡng chất trong mặt nạ giấy rất cao, th&ecirc;m nữa việc c&oacute; miếng mặt nạ giữ dưỡng chất để da từ từ hấp thụ hiệu quả hơn nhiều trong việc cấp ẩm s&acirc;u. C&oacute; nhiều người cho rằng mặt nạ giấy chỉ c&oacute; t&aacute;c dụng tức th&igrave;, kh&ocirc;ng thể ngăn chặn t&igrave;nh trạng kh&ocirc; da th&igrave; m&igrave;nh nghĩ nhận định n&agrave;y kh&ocirc;ng ch&iacute;nh x&aacute;c ho&agrave;n to&agrave;n. Đ&uacute;ng l&agrave; mặt nạ giấy c&oacute; t&aacute;c dụng tức th&igrave; về việc dưỡng ẩm ngay sau khi đắp nhưng nếu bạn duy tr&igrave; sử dụng đ&uacute;ng tần suất th&igrave; chắc chắn t&igrave;nh trạng kh&ocirc; da sẽ cải thiện nha. Cũng tương tự như c&aacute;c sản phẩm skincare kh&aacute;c, sử dụng mặt nạ giấy cũng cần ki&ecirc;n tr&igrave;. Với ti&ecirc;u ch&iacute; l&agrave; lựa chọn mặt nạ giấy l&agrave;nh t&iacute;nh, cấp ẩm s&acirc;u, phục hồi da hiệu quả th&igrave; m&igrave;nh chọn Cur&eacute;l. Cận cảnh em Mặt nạ giấy cấp ẩm chuy&ecirc;n s&acirc;u (Moisture Repair Sheet Mask) Cur&eacute;l&nbsp; mới ra mắt gần đ&acirc;y Một hộp c&oacute; 4 miếng thiết kế tối giản với t&ocirc;ng trắng-xanh đ&uacute;ng chất dược mỹ phẩm, bao b&igrave; nhỏ gọn, dễ d&agrave;ng mang theo khi đi du lịch. Bảng th&agrave;nh phần c&oacute;: + Dipotassium Glycyrrhizate (chiết xuất từ Rễ Cam Thảo) gi&uacute;p cải thiện t&igrave;nh trạng da kh&ocirc;, hư tổn, giảm bong tr&oacute;c, phục hồi sự mềm mại, l&agrave;m dịu da v&agrave; giảm vi&ecirc;m. + Glycerin bảo vệ v&agrave; chống lại c&aacute;c chất g&acirc;y k&iacute;ch ứng da, cải thiện khả năng phục hồi v&agrave; vẻ trẻ trung của da. + Eucalyptus extract (chiết xuất l&aacute; khuynh diệp) chống vi&ecirc;m, giảm ửng đỏ v&agrave; chống oxy h&oacute;a cho da, k&iacute;ch th&iacute;ch da sản sinh ra Ceramide tự nhi&ecirc;n + Cetyl-PG Hydroxyethyl Palmitamide &ndash; Ceramide chức năng (c&ocirc;ng nghệ độc quyền Ceramide Care của nh&atilde;n h&agrave;ng) =&gt; To&agrave;n những th&agrave;nh phần hỗ trợ giảm kh&ocirc; da &amp; phục hồi da hiệu quả lu&ocirc;n. Chất vải kh&ocirc;ng dệt cực kỳ mềm mại tr&ecirc;n da n&ecirc;n hạn chế ma s&aacute;t khi đắp, rất th&iacute;ch hợp với c&aacute;c bạn da nhạy cảm Chất liệu mặt nạ giấy mềm mại, &ocirc;m s&aacute;t l&agrave;n da. Điểm m&igrave;nh đ&aacute;nh gi&aacute; cao l&agrave; mặt nạ giấy của Cur&eacute;l c&oacute; nhiều đường cắt gi&uacute;p m&igrave;nh dễ d&agrave;ng căn chỉnh c&aacute;c g&oacute;c mặt nạ để vừa vặn với khu&ocirc;n mặt. Nếu c&aacute;c mặt nạ giấy thường kho&eacute;t mắt kh&aacute; s&acirc;u th&igrave; Cur&eacute;l được thiết kế kh&aacute; s&aacute;t mắt k&egrave;m theo miếng đắp l&ecirc;n cả m&iacute; mắt. Thương hiệu n&agrave;y c&ograve;n cực kỳ h&agrave;o ph&oacute;ng khi thiết kế th&ecirc;m 2 miếng ở g&oacute;c dưới mặt nạ c&oacute; thể x&eacute; rời để đắp th&ecirc;m v&agrave;o v&ugrave;ng m&igrave;nh cần tr&ecirc;n da. Điều m&igrave;nh cảm nhận rất r&otilde; khi đắp mặt nạ l&agrave; da v&ocirc; c&ugrave;ng dễ chịu kiểu như những v&ugrave;ng da kh&ocirc; được &ldquo;lấp đầy, trở n&ecirc;n mềm hơn. Mặt nạ hơi m&aacute;t, kh&ocirc;ng c&oacute; m&ugrave;i v&agrave; đặc biệt kh&ocirc;ng g&acirc;y cay mắt d&ugrave; đắp kh&aacute; s&aacute;t nha. Sau khi đắp 10&rsquo; m&igrave;nh thấy da ho&agrave;n to&agrave;n kh&aacute;c biệt so với ban đầu, da cực kỳ ẩm mịn nhưng kh&ocirc;ng bị nặng. M&igrave;nh kh&ocirc;ng cần thoa th&ecirc;m kem dưỡng sau đ&oacute; thấy hiệu quả giữ ẩm vẫn rất tốt nhưng nếu bạn c&oacute; nh&oacute;m da kh&ocirc; hoặc ở v&ugrave;ng kh&iacute; hậu lạnh th&igrave; n&ecirc;n thoa th&ecirc;m 1 lớp kem dưỡng nữa nh&eacute;.</p>\r\n<p><img src=\"https://1.bp.blogspot.com/-LhjaUrZVgNc/YY5YRFZsX5I/AAAAAAAANu4/1yWcp7XluZAsdIfZUm2sD9gL9zS5v9suACLcBGAsYHQ/s16000/Mailovesbeauty_Mat%2Bna%25CC%25A3%2BCurel.jpg\" alt=\"\" width=\"500\" height=\"667\" /></p>', 1, 77, 'skincare'),
(4, 'Cuộc sống muôn màu', 'https://blogger.googleusercontent.com/img/a/AVvXsEi4ouImfreczfhjn9ilHCg6T4C66c7qXgJ91V3uweiRq2JWDAtOPp1-MvRgdu2kDwjnBDPTUhzwSF9qGYbxF7Wr5_p53H5FBMRglpnZbkmHG3hVtVDDp1waZ4Q761COT7BIXRHv_Vglq5NdpbA7_qFO9qTUrAoKQ1QTE4aPt-4HExNn0rebk5F5DAA9=w800-h800-p-k-no-n', 'Hi mọi người, Tết của mọi người thế nào? Tết năm nay của Mai vô cùng tĩnh lặng, tính mình vốn không thích ồn ào, công việc lại chủ động được thời gian nên mình cũng không cần phải tranh thủ gặp ai hay làm gì đặc biệt cả. Trong thời gian vừa rồi mình...', '<p>1. L&Agrave;M MỌI THỨ TRONG CH&Aacute;NH NIỆM ???????? &ldquo;Ch&aacute;nh niệm\" hiểu đơn giản l&agrave; sự tập trung trong tỉnh thức, khi l&agrave;m việc g&igrave; trong ch&aacute;nh niệm tức l&agrave; ch&uacute;ng ta nhận diện s&acirc;u sắc m&igrave;nh đang l&agrave;m việc đ&oacute;. V&iacute; dụ đang ăn th&igrave; tập trung ăn, kh&ocirc;ng d&ugrave;ng điện thoại, kh&ocirc;ng vừa ăn vừa xem phim&hellip; Việc n&agrave;y c&oacute; vẻ đi ngược lại xu hướng multi-tasking của thế giới hiện đại nhưng ch&iacute;nh việc kh&ocirc;ng thực tập được ch&aacute;nh niệm mới l&agrave;m m&igrave;nh dễ rối loạn, bị ph&acirc;n t&aacute;n, từ đ&oacute; tổn hại cả th&acirc;n lẫn t&acirc;m. 2. HỌC L&Aacute;I XE ???? D&ugrave; bố mẹ giục bao năm nay, cả nh&agrave; ai cũng c&oacute; bằng l&aacute;i nhưng m&igrave;nh vẫn n&oacute;i kh&ocirc;ng c&oacute; nhu cầu (v&igrave; kh&ocirc;ng c&oacute; &yacute; định mua xe) m&agrave; giờ thấy biết l&aacute;i xe l&agrave; kỹ năng cần c&oacute; chứ đ&ugrave;a. Giả sử đang đi đ&acirc;u 2 người m&agrave; người kia bị l&agrave;m sao th&igrave; m&igrave;nh c&ograve;n biết l&aacute;i chứ kh&ocirc;ng chết d&iacute; đ&oacute; chờ người giải cứu &agrave; ???? C&oacute; xe ri&ecirc;ng cũng chủ động được nhiều việc, nhất l&agrave; khi c&oacute; trẻ con v&agrave; th&uacute; cưng. 3. TẬP THỂ THAO ????????&zwj;♀️ Trước giờ đ&uacute;ng l&agrave; m&igrave;nh chưa từng gắn b&oacute; với một m&ocirc;n thể thao n&agrave;o, chỉ workout tại nh&agrave; nhưng năm nay m&igrave;nh muốn thử th&aacute;ch bản th&acirc;n tập thể thao để khoẻ hơn, năng động hơn ???????? M&ocirc;n đầu ti&ecirc;n m&igrave;nh nghĩ đến l&agrave; bơi lội, m&igrave;nh cần học b&agrave;i bản v&igrave; bơi kh&ocirc;ng chỉ gi&uacute;p d&aacute;ng đẹp m&agrave; c&ograve;n l&agrave; một KỸ NĂNG SỐNG rất cần thiết, lỡ rơi xuống nước c&ograve;n c&oacute; cơ hội sống ???? 4. GẶP NHIỀU NGƯỜI HƠN ???????? M&igrave;nh l&agrave; con Thi&ecirc;n B&igrave;nh điển h&igrave;nh c&aacute;i g&igrave; cũng &ldquo;nửa m&ugrave;a&rdquo; n&ecirc;n việc gặp gỡ, l&agrave;m quen với lo&agrave;i người cũng vậy ???? Vậy n&ecirc;n năm nay m&igrave;nh muốn bước ra khỏi comfort zone của m&igrave;nh, gặp nhiều người, n&oacute;i chuyện với nhiều người ở trong đời thật hơn để biết nhiều hơn, c&oacute; cơ hội học hỏi nhiều hơn, r&egrave;n luyện kỹ năng của bản th&acirc;n nhiều hơn. Để gặp nhiều người hơn l&agrave; chỉ trong cộng đồng quen thuộc th&igrave; m&igrave;nh cần l&agrave;m những thứ m&igrave;nh chưa l&agrave;m ???? 5. &Iacute;T MUA SẮM HƠN ❌ Với một người từng nghiện mua sắm, chỉ ri&ecirc;ng việc đi 80 v&ograve;ng shopping mall cũng thấy vui như m&igrave;nh th&igrave; việc &iacute;t mua sắm hơn xứng đ&aacute;ng v&agrave;o danh s&aacute;ch việc cần l&agrave;m. Thật ra mấy năm gần đ&acirc;y m&igrave;nh cũng &iacute;t mua sắm hơn rồi nhưng l&uacute;c n&agrave;o cũng thấy c&oacute; nhiều đồ, mỗi lần chuyển nh&agrave; l&agrave; một lần muốn ng&atilde; quỵ (tử vi c&ograve;n ph&aacute;n số c&ocirc; phải chuyển nh&agrave; nhiều lần nữa chứ ????). B&ecirc;n cạnh đ&oacute; th&igrave; m&igrave;nh thực sự thấy ti&ecirc;u d&ugrave;ng QU&Aacute; MỨC g&acirc;y hại đến m&ocirc;i trường khủng khiếp, con người kh&ocirc;ng cần qu&aacute; nhiều vật chất để thấy hạnh ph&uacute;c n&ecirc;n l&agrave; trước khi l&agrave; một người c&oacute; sức ảnh hưởng, chỉ l&agrave; một người b&igrave;nh thường m&igrave;nh cũng muốn c&oacute; tr&aacute;ch nhiệm hơn. B&ecirc;n cạnh 5 đầu việc tr&ecirc;n th&igrave; m&igrave;nh vẫn duy tr&igrave; những th&oacute;i quen l&agrave;nh mạnh m&agrave; m&igrave;nh x&acirc;y dựng trong năm vừa qua như ăn plant-based, dậy sớm (c&aacute;i n&agrave;y đang tập lại v&igrave; đợt trước bị stress mất ngủ n&ecirc;n kh&ocirc;ng dậy sớm được ????), tập tại nh&agrave;, ngồi thiền, đọc 1 tiếng mỗi ng&agrave;y. M&igrave;nh chắc chắn l&agrave;m được những việc n&agrave;y v&agrave; mong c&aacute;c bạn cũng sẽ thực hiện được những mục ti&ecirc;u Năm Mới của bản th&acirc;n nh&eacute; ???? Peace &amp; Love Hạnh Mai ????</p>', 1, 3, 'skincare');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
('makeitem', 'Phối Đồ'),
('makeup', 'Làm Đẹp'),
('phongcach', 'PHONG CÁCH THỜI TRANG'),
('skincare', 'Chăm Sóc Da'),
('songdep', 'Sống Đẹp'),
('songkhoe', 'Sống Khỏe');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `STT` int(11) NOT NULL,
  `Hovaten` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `SDT` int(15) NOT NULL,
  `Diachi` varchar(50) NOT NULL,
  `Noidung` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`STT`, `Hovaten`, `Email`, `SDT`, `Diachi`, `Noidung`) VALUES
(1, 'Phạm Văn Toàn', 'toan01nb@gmail.com', 2147483647, 'tổ 4- Thị Trận Quang Minh', 'aaa');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `birthday` varchar(10) NOT NULL,
  `sex` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`username`, `password`, `email`, `fullname`, `birthday`, `sex`) VALUES
('toan', '1234', 'toan@gmail.com', 'Phạm Văn Toàn', '2001', 'Nam');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);
ALTER TABLE `blogs` ADD FULLTEXT KEY `content` (`content`);
ALTER TABLE `blogs` ADD FULLTEXT KEY `content_2` (`content`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`STT`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `STT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `blogs_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
