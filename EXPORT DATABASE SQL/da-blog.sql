-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2023 at 12:55 PM
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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`author_id`, `username`, `email`, `created_at`, `updated_at`) VALUES
(0, 'Không rõ tác giả', 'unknown@unknown', '2023-07-29 06:53:10', '2023-07-29 06:53:10'),
(3, 'Obama', 'obama@gmail.us', '2023-07-29 05:54:07', '2023-07-29 05:54:07'),
(4, 'Trương Mỹ Huyền', 'myhuyentruong@gmail.com', '2023-07-29 05:56:08', '2023-07-29 05:56:08'),
(5, 'Tường Ly', 'maituongly@gmail.com', '2023-07-29 05:57:53', '2023-07-29 05:57:53'),
(10, 'Kiều Dũng', 'ktdzung@gmail.com', '2023-07-29 06:52:14', '2023-07-29 06:52:14'),
(12, 'Phạm Hương Giang', 'phmgiangibdneu@gmail.com', '2023-07-29 06:54:11', '2023-07-29 06:54:11'),
(13, 'Duy Anh', 'nguyenduyanh.tit@gmail.com', '2023-07-31 03:10:27', '2023-07-31 03:10:27'),
(15, 'Quang Hải', 'footballplayer.quanghai@gmail.com', '2023-07-31 03:46:41', '2023-07-31 03:46:41');

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
(0, 'unknown.png', '2023-07-29 05:24:06', '2023-07-29 05:24:06'),
(2, 'pho-cuon.jpg', NULL, NULL),
(3, 'che-dau-den.jpg', NULL, '2023-07-29 01:06:03'),
(4, 'com-rang.jpg', NULL, NULL),
(5, 'mi-tom.jpg', NULL, '2023-07-29 01:05:06'),
(6, 'banh-deo.jpg', '2023-07-28 09:21:41', '2023-07-28 09:21:41'),
(7, 'sua-chua.jpg', '2023-07-28 09:22:27', '2023-07-29 00:39:09'),
(8, 'sinh-to-xoai.jpg', '2023-07-28 09:24:07', '2023-07-28 09:24:07'),
(9, 'tra-tao.png', '2023-07-28 09:25:27', '2023-07-28 09:25:27'),
(15, 'tao-pho.jpg', '2023-07-29 05:15:25', '2023-07-29 05:15:25'),
(18, 'banh-tart-trung.jpg', '2023-07-29 05:28:37', '2023-07-29 05:28:37'),
(19, 'nuoc-chanh.jpg', '2023-07-30 01:28:31', '2023-07-30 01:28:31');

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
(19, '2023_07_28_163557_add_image_id_to_posts', 8),
(20, '2023_07_29_105210_remove_column_from_table', 9),
(21, '2023_07_29_114817_add_on_delete_set_null_to_author_id_in_posts', 10),
(22, '2023_07_29_115910_add_on_delete_set_defaults', 11),
(23, '2023_07_29_123034_add_on_delete_set_default', 12),
(24, '2023_07_30_073454_change_auto_increment_for_posts_table', 13),
(25, '2023_07_30_082622_change_date_posted_column_type_in_posts_table', 14),
(26, '2023_07_31_093334_create_emails', 15),
(27, '2023_07_31_105439_update_table_nullable_columns', 16);

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
  `meta` text DEFAULT NULL,
  `content` text DEFAULT NULL,
  `date_posted` date NOT NULL,
  `author_id` bigint(20) UNSIGNED NOT NULL DEFAULT 9999,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `title`, `meta`, `content`, `date_posted`, `author_id`, `created_at`, `updated_at`, `image_id`) VALUES
(1, 'Cách làm bánh Tart Trứng', 'Hướng dẫn chi tiết cách làm món bánh tart trứng siêu đơn giản tại nhà', 'Làm bánh tart trứng là một quá trình đơn giản và thú vị. Dưới đây là hướng dẫn cơ bản để bạn có thể thực hiện tại nhà:\r\n\r\nNguyên liệu cần chuẩn bị:\r\n\r\nBột tarts (hoặc bạn có thể làm từ bột mỳ, bơ và đường)\r\nTrứng (khoảng 3-4 quả)\r\nĐường (khoảng 150g)\r\nSữa tươi (khoảng 200ml)\r\nMột chút vani hoặc mùi hương tự nhiên (tuỳ chọn)\r\nCác bước thực hiện:\r\n\r\nChuẩn bị bột tart:\r\nNếu bạn mua bột tart sẵn có, làm theo hướng dẫn trên bao bì để nướng vỏ tart.\r\nNếu bạn muốn tự làm bột tart, kết hợp 150g bột mỳ, 75g bơ lạnh (cắt thành từng miếng nhỏ), 50g đường và một chút muối. Trộn chúng lại với nhau cho đến khi hỗn hợp trở nên bột mịn và bắt đầu tụt lại với nhau. Lưu ý không nhồi quá nhiều để tránh làm bột cứng.\r\nGói bột lại bằng giấy thủy tinh hoặc nhựa dán và để trong tủ lạnh trong khoảng 30 phút.\r\nLàm nhân trứng:\r\nĐánh trứng trong một tô lớn, sau đó thêm đường và khuấy đều.\r\nTiếp theo, thêm sữa tươi và vani hoặc mùi hương (nếu có) vào hỗn hợp trứng và đường. Khuấy đều cho đến khi tạo thành một hỗn hợp mịn.\r\nLàm vỏ bánh tart:\r\nLấy bột tart từ tủ lạnh và để ở nhiệt độ phòng trong vài phút trước khi dùng.\r\nLấy từng phần nhỏ bột và dùng tay nặn nhẹ để lót lên các khuôn bánh tart (khuôn có thể làm từ nhựa hoặc kim loại).\r\nDùng ngón tay đều nhấn từng miếng bột vào khuôn, đảm bảo đều và mỏng. Sau đó dùng dao cắt những phần bột thừa ở viền khuôn.\r\nLắp ráp và nướng bánh tart:\r\nĐổ nhân trứng đã chuẩn bị vào từng vỏ bánh tart đã làm sẵn, điền khoảng 2/3 chiều cao của bánh tart.\r\nĐặt các bánh tart đã lắp nhân lên khay nướng hoặc khay bánh và đặt vào lò nướng đã được trước đó ở nhiệt độ 180°C.\r\nNướng bánh trong khoảng 15-20 phút hoặc cho đến khi bánh có màu vàng đẹp và nhân đã đông.\r\nHoàn thiện:\r\nSau khi nướng xong, để bánh tart trứng nguội tự nhiên.\r\nBạn có thể thưởng thức bánh tart trứng nguội hoặc để nguội hoàn toàn trước khi thưởng thức.\r\nChúc bạn thành công và thưởng thức bánh tart trứng thơm ngon!', '2023-07-27', 13, NULL, '2023-07-31 03:10:39', 18),
(2, 'Cách làm món Phở Cuốn siêu ngon', 'Cùng học cách làm món phở cuốn siêu ngon. Phở cuốn là món ăn truyền thống của Việt Nam.', 'Phở cuốn, còn được gọi là cuốn phở, là một món ăn ngon miệng và độc đáo trong ẩm thực Việt Nam. Dưới đây là cách làm phở cuốn đơn giản:\r\n\r\nNguyên liệu cần chuẩn bị:\r\n\r\nBánh phở (bánh tráng mỏng)\r\nThịt bò luộc mỏng (hoặc thịt gà, tôm, heo tùy sở thích)\r\nRau sống (rau húng, rau diếp cá, rau mùi, giá đỗ, lá lốt, ... theo sở thích)\r\nHành tây mỏng cắt sợi\r\nBún tươi\r\nTương phở hoặc tương xào (được làm từ nước dùng phở)\r\nHướng dẫn làm phở cuốn:\r\n\r\nBước 1: Chuẩn bị một tô nước ấm, đặt từng tấm bánh phở vào nước để làm mềm.\r\n\r\nBước 2: Khi bánh phở mềm, lấy ra và đặt lên bề mặt phẳng, bố trí các nguyên liệu như thịt bò, rau sống, hành tây, bún tươi, và một ít tương phở ở phía trên bánh.\r\n\r\nBước 3: Gói chặt các nguyên liệu trong bánh phở bằng cách gập hai bên thành cuốn và sau đó cuốn chặt từ dưới lên trên.\r\n\r\nBước 4: Lặp lại quá trình cho đến khi sử dụng hết nguyên liệu.\r\n\r\nBước 5: Chuẩn bị một chén nước mắm pha với một ít đường, tỏi băm nhỏ, và ớt thái mỏng làm nước chấm ăn kèm.\r\n\r\nPhở cuốn đã sẵn sàng để thưởng thức. Hãy thưởng thức món ăn ngon miệng này bằng cách nhúng phở cuốn vào chén nước mắm chấm thơm ngon. Nếu muốn, bạn có thể thêm các loại gia vị khác như hành phi, đậu phộng rang, và bột tỏi ớt để làm cho món ăn thêm đa dạng và hấp dẫn. Chúc bạn ngon miệng!', '2023-07-28', 5, NULL, '2023-07-31 03:10:50', 2),
(3, 'Hướng Dẫn làm tào phớ mát lạnh mùa hè.', 'Hướng dẫn nấu món tào phớ. Cách làm tào phớ đơn giản tại nhà.', 'Tào phớ là một món tráng miệng ngon miệng và phổ biến trong ẩm thực Á Đông. Dưới đây là cách làm tào phớ truyền thống:\r\n\r\nNguyên liệu cần chuẩn bị cho món tào phớ này:\r\n\r\nPhần tào:\r\n\r\n1 lít nước đậu nành tươi (hoặc bạn có thể dùng sữa đậu nành tươi)\r\n2 muỗng canh gắp (hoặc 15g) muối magnesi clorid (E511) hoặc muối khoáng rửa đậu nành\r\n2-3 muỗng canh đường (tuỳ khẩu vị)\r\n1/2 muỗng cà phê vani (tuỳ chọn)\r\nPhần nước đường:\r\n\r\n500ml nước\r\n100g đường\r\nPhần đá:\r\n\r\nĐá viên hoặc đá nhỏ (tuỳ thích)\r\nPhần trân châu (tuỳ chọn):\r\n\r\nHạt trân châu (sẵn bán tại các cửa hàng thực phẩm châu Á) hoặc tự làm từ bột tapioca và màu thực phẩm.\r\nCác bước thực hiện:\r\n\r\nLàm tào:\r\nTrong một nồi lớn, đun nước đậu nành tươi. Khi nước nấu sôi, giảm lửa xuống nhỏ.\r\nTrong một tô nhỏ, pha muối magnesi clorid (hoặc muối khoáng rửa đậu nành) với một ít nước ấm, khuấy đều cho đến khi muối hoàn toàn tan.\r\nKhi nước đậu nành sôi nhẹ, thêm muối đã pha vào nồi và khuấy đều.\r\nTiếp theo, thêm đường và vani (nếu dùng) vào nồi, khuấy đều cho đến khi đường hoàn toàn tan và hỗn hợp đồng nhất.\r\nTiếp tục đun nấu nước đậu nành trong khoảng 5 phút, tiếp tục khuấy đều để ngăn tào bị cháy đáy.\r\nTắt bếp và để hỗn hợp nguội tự nhiên trong nồi khoảng 15 phút.\r\nLàm nước đường:\r\nTrong một nồi nhỏ, hòa đường vào nước và đun nấu đến khi đường hoàn toàn tan. Để nguội.\r\nLàm trân châu (tuỳ chọn):\r\nNếu bạn muốn thêm trân châu vào tào phớ, theo hướng dẫn trên bao bì hạt trân châu hoặc tự làm từ bột tapioca và màu thực phẩm theo hướng dẫn cụ thể.\r\nThưởng thức tào phớ:\r\nĐổ tào phớ vào các chén hay ly nhỏ, thêm nước đường và đá viên (hoặc đá nhỏ) vào trên tào.\r\nNếu bạn dùng trân châu, thêm một số hạt trân châu vào trên tào phớ.\r\nThưởng thức ngay khi tào phớ còn mát.\r\nLưu ý: Tùy theo khẩu vị, bạn có thể thêm đậu phụng rang thơm và bột thạch rau câu vào tào phớ để tăng thêm hương vị và độ ngon của món tráng miệng này.', '2023-07-27', 12, NULL, '2023-07-31 01:51:59', 15),
(4, 'Cách làm cơm rang siêu đơn giản tại nhà.', 'Hướng dẫn làm món cơm rang thập cơm. Công thức siêu dễ cho mọi người cùng làm.', 'Món cơm rang (hay còn gọi là cơm chiên) là một món ăn ngon và phổ biến trong ẩm thực nhiều quốc gia. Dưới đây là cách làm cơm rang trứng và thịt heo đơn giản:\r\n\r\nNguyên liệu cần chuẩn bị:\r\n\r\n2 chén cơm trắng đã nấu chín và để nguội\r\n100g thịt heo (hoặc thịt gà, tôm, hoặc cá, tùy sở thích) - thái nhỏ\r\n2 quả trứng gà\r\n1 củ hành tây - thái nhỏ\r\n2 củ tỏi - băm nhỏ\r\n1/2 củ hành tím - thái nhỏ\r\n1/2 củ cà rốt - thái nhỏ\r\n1/2 củ cải bắp - thái nhỏ\r\n2 thìa canh dầu ăn\r\n3 thìa canh nước mắm\r\n1 thìa canh nước tương\r\n1 thìa canh xì dầu\r\nTiêu, hạt nêm và muối theo khẩu vị\r\nHành lá và ớt tươi thái nhỏ để trang trí (tuỳ chọn)\r\nHướng dẫn làm cơm rang:\r\n\r\nBước 1: Đánh trứng trong một tô lớn. Đổ cơm đã nguội vào tô và trộn đều cho đến khi cơm được phủ một lớp mỏng trứng đều khắp.\r\n\r\nBước 2: Trong một chảo hay nồi lớn, đổ dầu ăn vào và đun nóng. Khi dầu nóng, thêm tỏi và hành tím vào, phi thơm.\r\n\r\nBước 3: Tiếp theo, thêm thịt heo vào và xào cho đến khi thịt chín và có màu vàng caramelize.\r\n\r\nBước 4: Tiếp tục thêm cà rốt và cải bắp vào chảo, xào chung với thịt heo cho đến khi các loại rau củ chín mềm.\r\n\r\nBước 5: Đổ cơm đã trộn trứng vào chảo, khuấy đều với các loại rau củ và thịt heo. Nêm nếm gia vị với nước mắm, nước tương, xì dầu, tiêu, hạt nêm và muối theo khẩu vị.\r\n\r\nBước 6: Xào cơm trong một vài phút cho đến khi cơm được chín và có màu vàng hấp dẫn.\r\n\r\nBước 7: Trang trí cơm rang với hành lá và ớt tươi thái nhỏ trước khi thưởng thức.\r\n\r\nCơm rang đã hoàn thành! Bạn có thể thưởng thức cơm rang một mình hoặc kèm theo một số món ăn nhỏ, rau sống, nước mắm chua ngọt hoặc tương ớt tùy theo sở thích cá nhân. Chúc bạn thành công và thưởng thức bữa ăn ngon miệng!', '2023-07-21', 13, NULL, '2023-07-31 03:11:01', 4),
(5, 'Cách làm nước chanh', 'Hướng dẫn làm nước chanh', 'Sau khi vắt chanh xong bạn tiến hành pha nước chanh theo công thức như sau, cho vào ly 40ml nước cốt chanh, 45ml nước đường, 150ml nước lọc và một chút xíu muối, khuấy đều cho hỗn hợp hòa quyện. Cuối cùng, thêm đá viên vào đầy ly. Trang trí bằng một lát chanh mỏng và vài lá bạc hà trên miệng ly cho đẹp mắt.', '2023-07-26', 4, '2023-07-30 00:40:06', '2023-07-30 01:28:42', 19),
(9, 'a', NULL, NULL, '2023-07-01', 0, '2023-07-31 03:53:59', '2023-07-31 03:53:59', 0);

-- --------------------------------------------------------

--
-- Table structure for table `reader-emails`
--

CREATE TABLE `reader-emails` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reader-emails`
--

INSERT INTO `reader-emails` (`id`, `email`, `created_at`, `updated_at`) VALUES
(2, 'nangkieulobuoc@gmail.com', NULL, NULL),
(3, 'congchuabongbong9x@yahoo.com', NULL, NULL),
(4, 'nda@abc', '2023-07-31 03:20:53', '2023-07-31 03:20:53'),
(5, 'duyanhliebedeutschland@gmail.com', '2023-07-31 03:23:22', '2023-07-31 03:23:22'),
(6, 'phmhnggng@gmail.com', '2023-07-31 03:24:55', '2023-07-31 03:24:55'),
(8, 'hello@abc', '2023-07-31 03:25:40', '2023-07-31 03:25:40'),
(9, 'maituongly@gmail.com', '2023-07-31 03:26:03', '2023-07-31 03:26:03'),
(10, 'duyduyduyanhanhanhanh@gmail.com', '2023-07-31 03:26:49', '2023-07-31 03:26:49'),
(11, 'maituongly@xn--gmadil-rta.com', '2023-07-31 03:27:51', '2023-07-31 03:27:51');

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
('Y0xLXODNTTAulYsuDQmadSDFXpBANamRo2LyxE04', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiYzRrS2VwT2RQR2ZnUjVlYlJRWFVrOURnMEZ2MnhDWFRIOGZ2RmRqRyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDg6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9kYXNoYm9hcmQvYWRtaW5wb3N0cyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czoyMToicGFzc3dvcmRfaGFzaF9zYW5jdHVtIjtzOjYwOiIkMnkkMTAkZmVSRjZqSnRTcWF2d1dYT0xYUGV3TzRrd28ycUFDUlVrMkxpdEJNUkNDMnR5NGtaNGpwcmEiO30=', 1690800840);

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
(1, 'Duy Anh', 'nguyenduyanh.tit@gmail.com', NULL, '$2y$10$feRF6jJtSqavwWXOLXPewO4kwo2qACRUk2LitBMRCC2ty4kZ4jpra', NULL, NULL, NULL, 'nqubb4oRvrptavM2jRZvTQa3BREZai0QBc078JFspsClAfFxz2era4TQG5DP', NULL, NULL, '2023-07-28 09:03:11', '2023-07-31 01:56:44');

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
  ADD KEY `posts_image_id_foreign` (`image_id`),
  ADD KEY `posts_author_id_foreign` (`author_id`);

--
-- Indexes for table `reader-emails`
--
ALTER TABLE `reader-emails`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `reader_emails_email_unique` (`email`);

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
  MODIFY `author_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `reader-emails`
--
ALTER TABLE `reader-emails`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
