-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2023 at 09:06 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `da-blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `author_id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`author_id`, `username`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Duy Anh', 'nguyenduyanh.tit@gmail.com', 'nguyenduyanh', NULL, NULL),
(2, 'Hương Giang', 'phmhnggng@gmail.com', 'phmhnggng', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` bigint(20) UNSIGNED NOT NULL,
  `text` text NOT NULL,
  `date_commented` datetime NOT NULL,
  `author_id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image_name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `image_name`, `created_at`, `updated_at`) VALUES
(1, 'banh-tart-trung.jpg', NULL, NULL),
(2, 'pho-cuon.jpg', NULL, NULL),
(3, 'che-dau-den.jpg', NULL, NULL),
(4, 'com-rang.jpg', NULL, NULL),
(5, 'mi-tom.jpg', NULL, NULL),
(6, 'banh-deo.jpg', '2023-07-28 09:21:41', '2023-07-28 09:21:41'),
(7, 'sua-chua.jpg', '2023-07-28 09:22:27', '2023-07-28 09:22:27'),
(8, 'sinh-to-xoai.jpg', '2023-07-28 09:24:07', '2023-07-28 09:24:07'),
(9, 'tra-tao.png', '2023-07-28 09:25:27', '2023-07-28 09:25:27'),
(10, 'tao-pho.jpg', '2023-07-28 09:30:49', '2023-07-28 09:30:49');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_07_21_134323_create_authors_table', 2),
(6, '2023_07_21_134326_create_posts_table', 2),
(7, '2023_07_21_134330_create_comments_table', 3),
(13, '2014_10_12_000000_create_users_table', 4),
(14, '2014_10_12_200000_add_two_factor_columns_to_users_table', 4),
(15, '2023_07_23_195703_create_sessions_table', 4),
(16, '2023_07_23_195917_create_sessions_table', 5),
(17, '2023_07_28_160117_create_images_table', 6),
(18, '2023_07_28_163435_remove_column_from_table', 7),
(19, '2023_07_28_163557_add_image_id_to_posts', 8);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('nguyenduyanh.tit@gmail.com', '$2y$10$m7Hx65yEeQ7l24IHqM/eueHGDQoCwzNCyoKuUsaNx9LNnPAfrhbCa', '2023-07-26 01:31:19');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `meta` text NOT NULL,
  `content` text NOT NULL,
  `date_posted` datetime NOT NULL,
  `author_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `title`, `meta`, `content`, `date_posted`, `author_id`, `created_at`, `updated_at`, `image_id`) VALUES
(1, 'Cách làm bánh Tart Trứng', 'Hướng dẫn chi tiết cách làm món bánh tart trứng siêu đơn giản tại nhà. Cùng đọc và tìm hiểu ngay!', 'Làm bánh tart trứng là một quá trình đơn giản và thú vị. Dưới đây là hướng dẫn cơ bản để bạn có thể thực hiện tại nhà:  Nguyên liệu cần chuẩn bị:  Bột tarts (hoặc bạn có thể làm từ bột mỳ, bơ và đường) Trứng (khoảng 3-4 quả) Đường (khoảng 150g) Sữa tươi (khoảng 200ml) Một chút vani hoặc mùi hương tự nhiên (tuỳ chọn) Các bước thực hiện:  Chuẩn bị bột tart: Nếu bạn mua bột tart sẵn có, làm theo hướng dẫn trên bao bì để nướng vỏ tart. Nếu bạn muốn tự làm bột tart, kết hợp 150g bột mỳ, 75g bơ lạnh (cắt thành từng miếng nhỏ), 50g đường và một chút muối. Trộn chúng lại với nhau cho đến khi hỗn hợp trở nên bột mịn và bắt đầu tụt lại với nhau. Lưu ý không nhồi quá nhiều để tránh làm bột cứng. Gói bột lại bằng giấy thủy tinh hoặc nhựa dán và để trong tủ lạnh trong khoảng 30 phút. Làm nhân trứng: Đánh trứng trong một tô lớn, sau đó thêm đường và khuấy đều. Tiếp theo, thêm sữa tươi và vani hoặc mùi hương (nếu có) vào hỗn hợp trứng và đường. Khuấy đều cho đến khi tạo thành một hỗn hợp mịn. Làm vỏ bánh tart: Lấy bột tart từ tủ lạnh và để ở nhiệt độ phòng trong vài phút trước khi dùng. Lấy từng phần nhỏ bột và dùng tay nặn nhẹ để lót lên các khuôn bánh tart (khuôn có thể làm từ nhựa hoặc kim loại). Dùng ngón tay đều nhấn từng miếng bột vào khuôn, đảm bảo đều và mỏng. Sau đó dùng dao cắt những phần bột thừa ở viền khuôn. Lắp ráp và nướng bánh tart: Đổ nhân trứng đã chuẩn bị vào từng vỏ bánh tart đã làm sẵn, điền khoảng 2/3 chiều cao của bánh tart. Đặt các bánh tart đã lắp nhân lên khay nướng hoặc khay bánh và đặt vào lò nướng đã được trước đó ở nhiệt độ 180°C. Nướng bánh trong khoảng 15-20 phút hoặc cho đến khi bánh có màu vàng đẹp và nhân đã đông. Hoàn thiện: Sau khi nướng xong, để bánh tart trứng nguội tự nhiên. Bạn có thể thưởng thức bánh tart trứng nguội hoặc để nguội hoàn toàn trước khi thưởng thức. Chúc bạn thành công và thưởng thức bánh tart trứng thơm ngon!', '2023-07-28 15:04:22', 2, NULL, NULL, 1),
(2, 'Cách làm món Phở Cuốn siêu ngon', 'Cùng học cách làm món phở cuốn siêu ngon. Phở cuốn là món ăn truyền thống của Việt Nam.', 'Phở cuốn, còn được gọi là cuốn phở, là một món ăn ngon miệng và độc đáo trong ẩm thực Việt Nam. Dưới đây là cách làm phở cuốn đơn giản:\r\n\r\nNguyên liệu cần chuẩn bị:\r\n\r\nBánh phở (bánh tráng mỏng)\r\nThịt bò luộc mỏng (hoặc thịt gà, tôm, heo tùy sở thích)\r\nRau sống (rau húng, rau diếp cá, rau mùi, giá đỗ, lá lốt, ... theo sở thích)\r\nHành tây mỏng cắt sợi\r\nBún tươi\r\nTương phở hoặc tương xào (được làm từ nước dùng phở)\r\nHướng dẫn làm phở cuốn:\r\n\r\nBước 1: Chuẩn bị một tô nước ấm, đặt từng tấm bánh phở vào nước để làm mềm.\r\n\r\nBước 2: Khi bánh phở mềm, lấy ra và đặt lên bề mặt phẳng, bố trí các nguyên liệu như thịt bò, rau sống, hành tây, bún tươi, và một ít tương phở ở phía trên bánh.\r\n\r\nBước 3: Gói chặt các nguyên liệu trong bánh phở bằng cách gập hai bên thành cuốn và sau đó cuốn chặt từ dưới lên trên.\r\n\r\nBước 4: Lặp lại quá trình cho đến khi sử dụng hết nguyên liệu.\r\n\r\nBước 5: Chuẩn bị một chén nước mắm pha với một ít đường, tỏi băm nhỏ, và ớt thái mỏng làm nước chấm ăn kèm.\r\n\r\nPhở cuốn đã sẵn sàng để thưởng thức. Hãy thưởng thức món ăn ngon miệng này bằng cách nhúng phở cuốn vào chén nước mắm chấm thơm ngon. Nếu muốn, bạn có thể thêm các loại gia vị khác như hành phi, đậu phộng rang, và bột tỏi ớt để làm cho món ăn thêm đa dạng và hấp dẫn. Chúc bạn ngon miệng!', '2023-07-21 15:52:42', 1, NULL, NULL, 2),
(3, 'Hướng Dẫn làm chè đậu đen mát lạnh mùa hè.', 'Hướng dẫn nấu món chè đậu đen. Cách làm chè đậu đen đơn giản tại nhà.', 'Làm món chè đậu đen là một cách thưởng thức tráng miệng ngon lành và bổ dưỡng. Dưới đây là cách làm chè đậu đen đơn giản:\r\n\r\nNguyên liệu cần chuẩn bị:\r\n\r\n1 chén đậu đen đã ngâm qua đêm hoặc trên 6 giờ\r\n6 chén nước\r\n1 ống vani (hoặc 1 thìa cà phê tinh dầu vani)\r\n1 chén đường (có thể điều chỉnh theo khẩu vị)\r\n1/4 thìa cà phê muối\r\nNước cốt dừa (tuỳ chọn)\r\nThạch đường, nước cốt dừa, hoặc hạt chia để trang trí (tuỳ chọn)\r\nHướng dẫn làm chè đậu đen:\r\n\r\nBước 1: Rửa sạch đậu đen sau khi đã ngâm. Cho đậu vào nồi và đổ 6 chén nước vào. Đun đậu đen ở lửa cao cho đến khi nước sôi, sau đó giảm lửa xuống.\r\n\r\nBước 2: Khi đậu đen đã mềm, thêm vani và muối vào nồi. Khuấy đều và nấu tiếp khoảng 5 phút nữa để các hương vị kết hợp.\r\n\r\nBước 3: Tiếp theo, thêm đường vào nồi và khuấy đều cho đến khi đường tan hoàn toàn.\r\n\r\nBước 4: Nếu muốn chè đậu đen mềm mịn hơn, bạn có thể sử dụng máy xay sinh tố để xay nhuyễn. Nếu muốn chè có độ sệt hơn, bạn có thể thêm một ít nước cốt dừa vào chè.\r\n\r\nBước 5: Cho chè vào tô và trang trí bằng thạch đường, nước cốt dừa hoặc hạt chia để tăng thêm vị trí đẹp mắt và hấp dẫn.\r\n\r\nChè đậu đen đã hoàn thành! Bạn có thể thưởng thức chè ấm hoặc để nguội, tùy theo sở thích cá nhân. Món chè này thích hợp để thưởng thức vào bất kỳ thời điểm nào trong ngày, đặc biệt là vào những ngày hè nóng bức. Chúc bạn thực hiện thành công và thưởng thức ngon miệng!', '2023-07-21 15:54:34', 2, NULL, NULL, 3),
(4, 'Cách làm cơm rang siêu đơn giản tại nhà.', 'Hướng dẫn làm món cơm rang thập cơm. Công thức siêu dễ cho mọi người cùng làm.', 'Món cơm rang (hay còn gọi là cơm chiên) là một món ăn ngon và phổ biến trong ẩm thực nhiều quốc gia. Dưới đây là cách làm cơm rang trứng và thịt heo đơn giản:\r\n\r\nNguyên liệu cần chuẩn bị:\r\n\r\n2 chén cơm trắng đã nấu chín và để nguội\r\n100g thịt heo (hoặc thịt gà, tôm, hoặc cá, tùy sở thích) - thái nhỏ\r\n2 quả trứng gà\r\n1 củ hành tây - thái nhỏ\r\n2 củ tỏi - băm nhỏ\r\n1/2 củ hành tím - thái nhỏ\r\n1/2 củ cà rốt - thái nhỏ\r\n1/2 củ cải bắp - thái nhỏ\r\n2 thìa canh dầu ăn\r\n3 thìa canh nước mắm\r\n1 thìa canh nước tương\r\n1 thìa canh xì dầu\r\nTiêu, hạt nêm và muối theo khẩu vị\r\nHành lá và ớt tươi thái nhỏ để trang trí (tuỳ chọn)\r\nHướng dẫn làm cơm rang:\r\n\r\nBước 1: Đánh trứng trong một tô lớn. Đổ cơm đã nguội vào tô và trộn đều cho đến khi cơm được phủ một lớp mỏng trứng đều khắp.\r\n\r\nBước 2: Trong một chảo hay nồi lớn, đổ dầu ăn vào và đun nóng. Khi dầu nóng, thêm tỏi và hành tím vào, phi thơm.\r\n\r\nBước 3: Tiếp theo, thêm thịt heo vào và xào cho đến khi thịt chín và có màu vàng caramelize.\r\n\r\nBước 4: Tiếp tục thêm cà rốt và cải bắp vào chảo, xào chung với thịt heo cho đến khi các loại rau củ chín mềm.\r\n\r\nBước 5: Đổ cơm đã trộn trứng vào chảo, khuấy đều với các loại rau củ và thịt heo. Nêm nếm gia vị với nước mắm, nước tương, xì dầu, tiêu, hạt nêm và muối theo khẩu vị.\r\n\r\nBước 6: Xào cơm trong một vài phút cho đến khi cơm được chín và có màu vàng hấp dẫn.\r\n\r\nBước 7: Trang trí cơm rang với hành lá và ớt tươi thái nhỏ trước khi thưởng thức.\r\n\r\nCơm rang đã hoàn thành! Bạn có thể thưởng thức cơm rang một mình hoặc kèm theo một số món ăn nhỏ, rau sống, nước mắm chua ngọt hoặc tương ớt tùy theo sở thích cá nhân. Chúc bạn thành công và thưởng thức bữa ăn ngon miệng!', '2023-07-21 15:57:41', 1, NULL, NULL, 4),
(5, 'Hướng dẫn làm mì tôm cực kì đơn giản', 'Làm món mì tôm cực kì đơn giản với một vài bước. Xem ngay để học cách làm mì tôm!', 'Món mì tôm (hay còn gọi là mì gói) là món ăn nhanh, tiện lợi và phổ biến trên toàn thế giới. Dưới đây là cách làm món mì tôm đơn giản:\r\n\r\nNguyên liệu cần chuẩn bị:\r\n\r\n1 gói mì tôm (loại mà bạn thích)\r\n2 1/2 chén nước\r\n1 quả trứng gà\r\nRau sống (rau mùi, hành lá, hành phi, ớt tươi, ngò gai,...)\r\nHành hoa, tỏi băm và ớt bột để trang trí (tuỳ chọn)\r\nHướng dẫn làm mì tôm:\r\n\r\nBước 1: Đun sôi nước trong một nồi lớn. Khi nước sôi, cho gói mì tôm vào nồi và đun khoảng 2-3 phút cho đến khi mì chín mềm.\r\n\r\nBước 2: Trong khi mì đang nấu, hòa 1 gói gia vị (nước xốt mì tôm) với 2 1/2 chén nước trong một tô riêng.\r\n\r\nBước 3: Khi mì đã chín, gắp mì ra khỏi nồi và đổ nước xốt mì tôm vào nồi. Đun sôi nước xốt trong khoảng 1 phút.\r\n\r\nBước 4: Đánh trứng trong một tô riêng và đổ trứng vào nồi với nước xốt mì tôm. Khuấy đều để trứng đông thành sợi nhỏ.\r\n\r\nBước 5: Thêm gia vị từ gói mì tôm vào nồi và khuấy đều.\r\n\r\nBước 6: Đổ mì vào nồi và khuấy đều với nước xốt và trứng cho đến khi mì được ướp đều gia vị.\r\n\r\nBước 7: Cho mì tôm vào đĩa, trang trí bằng rau sống và hành hoa, tỏi băm và ớt bột (tuỳ chọn).\r\n\r\nMì tôm đã hoàn thành! Bạn có thể thưởng thức món ăn ngay khi nó còn nóng. Nếu muốn, bạn cũng có thể thêm thêm gia vị như tương ớt, hành phi, hay chanh để làm cho món mì tôm thêm hấp dẫn và đa dạng hương vị. Chúc bạn ngon miệng!', '2023-07-21 18:00:22', 2, NULL, NULL, 5);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('uakOpWJy1sXmiKD1BZd1fYrXsTmokqv6VzZWS6dg', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoickFlYXBaa0R4ZjNLem1JZUVuZ3h2cDd0N09sbXVneGlNQmtiYTBwWiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9kYXNoYm9hcmQvYWRtaW5pbWFnZXMvc2hvd0FsbCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czoyMToicGFzc3dvcmRfaGFzaF9zYW5jdHVtIjtzOjYwOiIkMnkkMTAkZmVSRjZqSnRTcWF2d1dYT0xYUGV3TzRrd28ycUFDUlVrMkxpdEJNUkNDMnR5NGtaNGpwcmEiO30=', 1690613826);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'nguyenduyanh.tit@gmail.com', NULL, '$2y$10$feRF6jJtSqavwWXOLXPewO4kwo2qACRUk2LitBMRCC2ty4kZ4jpra', NULL, NULL, NULL, 'nqubb4oRvrptavM2jRZvTQa3BREZai0QBc078JFspsClAfFxz2era4TQG5DP', NULL, NULL, '2023-07-28 09:03:11', '2023-07-28 09:03:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`author_id`),
  ADD UNIQUE KEY `authors_email_unique` (`email`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `comments_author_id_foreign` (`author_id`),
  ADD KEY `comments_post_id_foreign` (`post_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`),
  ADD KEY `posts_author_id_foreign` (`author_id`),
  ADD KEY `posts_image_id_foreign` (`image_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `author_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_author_id_foreign` FOREIGN KEY (`author_id`) REFERENCES `authors` (`author_id`),
  ADD CONSTRAINT `comments_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`post_id`);

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_author_id_foreign` FOREIGN KEY (`author_id`) REFERENCES `authors` (`author_id`),
  ADD CONSTRAINT `posts_image_id_foreign` FOREIGN KEY (`image_id`) REFERENCES `images` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
