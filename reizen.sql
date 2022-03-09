-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 20, 2021 at 10:14 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reizen`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `whodetails` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `whoimage` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.jpg',
  `ourdetails` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `ourimage` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.jpg',
  `howdetails` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `howimage` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.jpg',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `whoname` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ourname` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `howname` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `whodetails`, `whoimage`, `ourdetails`, `ourimage`, `howdetails`, `howimage`, `created_at`, `updated_at`, `whoname`, `ourname`, `howname`) VALUES
(1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry.', 'who_we_are_07136db8389a2067282706d43c5a70ec.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry.', 'our_philosophy_07136db8389a2067282706d43c5a70ec.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry.', 'how_we_work_07136db8389a2067282706d43c5a70ec.jpg', '2021-03-02 18:13:12', '2021-03-02 18:13:12', 'who we are', 'our philosophy', 'how we work');

-- --------------------------------------------------------

--
-- Table structure for table `blog_categories`
--

CREATE TABLE `blog_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'N/A',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_categories`
--

INSERT INTO `blog_categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Lorem Ipsum', 'lorem_ipsum', '2021-02-08 02:31:39', '2021-02-08 02:31:39'),
(2, 'Lorem ipsum1', 'lorem_ipsum1', '2021-03-01 10:16:04', '2021-03-01 10:16:04'),
(3, 'Lorem ipsum2', 'lorem_ipsum2', '2021-03-01 10:16:11', '2021-03-01 10:16:11'),
(4, 'Lorem ipsum3', 'lorem_ipsum3', '2021-03-01 10:16:17', '2021-03-01 10:16:17'),
(5, 'Lorem ipsum4', 'lorem_ipsum4', '2021-03-01 10:16:24', '2021-03-01 10:16:24'),
(6, 'Lorem ipsum5', 'lorem_ipsum5', '2021-03-01 10:16:30', '2021-03-01 10:16:30'),
(7, 'Lorem ipsum6', 'lorem_ipsum6', '2021-03-01 10:16:35', '2021-03-01 10:16:35'),
(8, 'Lorem ipsum7', 'lorem_ipsum7', '2021-03-01 10:16:41', '2021-03-01 10:16:41'),
(9, 'Lorem ipsum8', 'lorem_ipsum8', '2021-03-01 10:16:49', '2021-03-01 10:16:49'),
(10, 'Lorem ipsum9', 'lorem_ipsum9', '2021-03-01 10:16:58', '2021-03-01 10:16:58');

-- --------------------------------------------------------

--
-- Table structure for table `blog_images`
--

CREATE TABLE `blog_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blog_post_id` bigint(20) UNSIGNED NOT NULL,
  `imageName` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_images`
--

INSERT INTO `blog_images` (`id`, `blog_post_id`, `imageName`, `created_at`, `updated_at`) VALUES
(5, 8, '491030.jpg', '2021-03-01 17:59:41', '2021-03-01 17:59:41'),
(6, 8, '739525.jpg', '2021-03-01 17:59:41', '2021-03-01 17:59:41'),
(7, 9, '190744.jpg', '2021-03-01 19:22:49', '2021-03-01 19:22:49'),
(8, 9, '700866.jpg', '2021-03-01 19:22:49', '2021-03-01 19:22:49'),
(9, 10, '509354.jpg', '2021-03-01 19:23:55', '2021-03-01 19:23:55'),
(10, 10, '747303.jpg', '2021-03-01 19:23:55', '2021-03-01 19:23:55'),
(11, 11, '774325.jpg', '2021-03-01 19:25:07', '2021-03-01 19:25:07'),
(12, 11, '678877.jpg', '2021-03-01 19:25:07', '2021-03-01 19:25:07'),
(13, 12, '475769.jpg', '2021-03-01 19:26:54', '2021-03-01 19:26:54'),
(14, 12, '618405.jpg', '2021-03-01 19:26:54', '2021-03-01 19:26:54'),
(15, 13, '940979.jpg', '2021-03-14 14:48:07', '2021-03-14 14:48:07'),
(16, 13, '963468.jpg', '2021-03-14 14:48:07', '2021-03-14 14:48:07'),
(17, 15, '499790.jpg', '2021-03-15 09:50:29', '2021-03-15 09:50:29'),
(18, 16, '429644.jpg', '2021-03-17 06:52:34', '2021-03-17 06:52:34'),
(19, 16, '596925.jpg', '2021-03-17 06:52:34', '2021-03-17 06:52:34');

-- --------------------------------------------------------

--
-- Table structure for table `blog_posts`
--

CREATE TABLE `blog_posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.jpg',
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `blog_category_id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'N/A',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_posts`
--

INSERT INTO `blog_posts` (`id`, `title`, `description`, `image`, `user_id`, `blog_category_id`, `slug`, `created_at`, `updated_at`) VALUES
(7, 'Aliquam id dolor au', 'Et et obcaecati dolo', 'aliquam_id_dolor_au_3ca09ea7f21c8b45f6d7141bc688b343.jpg', NULL, 1, 'N/A', '2021-03-01 17:54:25', '2021-03-01 17:54:25'),
(8, 'Illo quos pariatur', 'Qui odio do dolore e', 'illo_quos_pariatur_7e4c2a8d68beb66dd495c62c33e48828.jpg', NULL, 2, 'N/A', '2021-03-01 17:59:41', '2021-03-01 17:59:41'),
(9, 'Rerum consequatur m', 'Quo sunt deleniti vLorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,\r\nmolestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum\r\nnumquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium\r\noptio, eaque rerum! Provident similique accusantium nemo autem. Veritatis\r\nobcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam\r\nnihil, eveniet aliquid culpa officia aut! Impedit sit sunt quaerat, odit,\r\ntenetur error, harum nesciunt ipsum debitis quas aliquid. Reprehenderit,\r\nquia. Quo neque error repudiandae fuga? Ipsa laudantium molestias eos \r\nsapiente officiis modi at sunt excepturi expedita sint? Sed quibusdam\r\nrecusandae alias error harum maxime adipisci amet laborum. Perspiciatis \r\nminima nesciunt dolorem! Officiis iure rerum voluptates a cumque velit \r\nquibusdam sed amet tempora. Sit laborum ab, eius fugit doloribus tenetur \r\nfugiat, temporibus enim commodi iusto libero magni deleniti quod quam \r\nconsequuntur! Commodi minima excepturi repudiandae velit hic maxime\r\ndoloremque. Quaerat provident commodi consectetur veniam similique ad \r\nearum omnis ipsum saepe, voluptas, hic voluptates pariatur est explicabo \r\nfugiat, dolorum eligendi quam cupiditate excepturi mollitia maiores labore \r\nsuscipit quas? Nulla, placeat. Voluptatem quaerat non architecto ab laudantium\r\nmodi minima sunt esse temporibus sint culpa, recusandae aliquam numquam \r\ntotam ratione voluptas quod exercitationem fuga. Possimus quis earum veniam \r\nquasi aliquam eligendi, placeat qui corporis!', 'rerum_consequatur_m_2b4673fc81c49843e3d390c38db25914.jpg', NULL, 6, 'N/A', '2021-03-01 19:22:49', '2021-03-01 19:22:49'),
(10, 'Exercitation in aut', 'Nesciunt consequatuLorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,\r\nmolestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum\r\nnumquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium\r\noptio, eaque rerum! Provident similique accusantium nemo autem. Veritatis\r\nobcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam\r\nnihil, eveniet aliquid culpa officia aut! Impedit sit sunt quaerat, odit,\r\ntenetur error, harum nesciunt ipsum debitis quas aliquid. Reprehenderit,\r\nquia. Quo neque error repudiandae fuga? Ipsa laudantium molestias eos \r\nsapiente officiis modi at sunt excepturi expedita sint? Sed quibusdam\r\nrecusandae alias error harum maxime adipisci amet laborum. Perspiciatis \r\nminima nesciunt dolorem! Officiis iure rerum voluptates a cumque velit \r\nquibusdam sed amet tempora. Sit laborum ab, eius fugit doloribus tenetur \r\nfugiat, temporibus enim commodi iusto libero magni deleniti quod quam \r\nconsequuntur! Commodi minima excepturi repudiandae velit hic maxime\r\ndoloremque. Quaerat provident commodi consectetur veniam similique ad \r\nearum omnis ipsum saepe, voluptas, hic voluptates pariatur est explicabo \r\nfugiat, dolorum eligendi quam cupiditate excepturi mollitia maiores labore \r\nsuscipit quas? Nulla, placeat. Voluptatem quaerat non architecto ab laudantium\r\nmodi minima sunt esse temporibus sint culpa, recusandae aliquam numquam \r\ntotam ratione voluptas quod exercitationem fuga. Possimus quis earum veniam \r\nquasi aliquam eligendi, placeat qui corporis!', 'exercitation_in_aut_705a5e8561869746168638c3039aaf2f.jpg', NULL, 10, 'N/A', '2021-03-01 19:23:55', '2021-03-01 19:23:55'),
(11, 'Exercitation in aut', 'Nesciunt consequatuLorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,\r\nmolestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum\r\nnumquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium\r\noptio, eaque rerum! Provident similique accusantium nemo autem. Veritatis\r\nobcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam\r\nnihil, eveniet aliquid culpa officia aut! Impedit sit sunt quaerat, odit,\r\ntenetur error, harum nesciunt ipsum debitis quas aliquid. Reprehenderit,\r\nquia. Quo neque error repudiandae fuga? Ipsa laudantium molestias eos \r\nsapiente officiis modi at sunt excepturi expedita sint? Sed quibusdam\r\nrecusandae alias error harum maxime adipisci amet laborum. Perspiciatis \r\nminima nesciunt dolorem! Officiis iure rerum voluptates a cumque velit \r\nquibusdam sed amet tempora. Sit laborum ab, eius fugit doloribus tenetur \r\nfugiat, temporibus enim commodi iusto libero magni deleniti quod quam \r\nconsequuntur! Commodi minima excepturi repudiandae velit hic maxime\r\ndoloremque. Quaerat provident commodi consectetur veniam similique ad \r\nearum omnis ipsum saepe, voluptas, hic voluptates pariatur est explicabo \r\nfugiat, dolorum eligendi quam cupiditate excepturi mollitia maiores labore \r\nsuscipit quas? Nulla, placeat. Voluptatem quaerat non architecto ab laudantium\r\nmodi minima sunt esse temporibus sint culpa, recusandae aliquam numquam \r\ntotam ratione voluptas quod exercitationem fuga. Possimus quis earum veniam \r\nquasi aliquam eligendi, placeat qui corporis!', 'exercitation_in_aut_c270255c80cef64a1bc830548f6f54b6.jpg', NULL, 10, 'N/A', '2021-03-01 19:25:07', '2021-03-01 19:25:07'),
(12, 'Quisquam elit nisi', 'Qui aliquid animi dLorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,\r\nmolestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum\r\nnumquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium\r\noptio, eaque rerum! Provident similique accusantium nemo autem. Veritatis\r\nobcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam\r\nnihil, eveniet aliquid culpa officia aut! Impedit sit sunt quaerat, odit,\r\ntenetur error, harum nesciunt ipsum debitis quas aliquid. Reprehenderit,\r\nquia. Quo neque error repudiandae fuga? Ipsa laudantium molestias eos \r\nsapiente officiis modi at sunt excepturi expedita sint? Sed quibusdam\r\nrecusandae alias error harum maxime adipisci amet laborum. Perspiciatis \r\nminima nesciunt dolorem! Officiis iure rerum voluptates a cumque velit \r\nquibusdam sed amet tempora. Sit laborum ab, eius fugit doloribus tenetur \r\nfugiat, temporibus enim commodi iusto libero magni deleniti quod quam \r\nconsequuntur! Commodi minima excepturi repudiandae velit hic maxime\r\ndoloremque. Quaerat provident commodi consectetur veniam similique ad \r\nearum omnis ipsum saepe, voluptas, hic voluptates pariatur est explicabo \r\nfugiat, dolorum eligendi quam cupiditate excepturi mollitia maiores labore \r\nsuscipit quas? Nulla, placeat. Voluptatem quaerat non architecto ab laudantium\r\nmodi minima sunt esse temporibus sint culpa, recusandae aliquam numquam \r\ntotam ratione voluptas quod exercitationem fuga. Possimus quis earum veniam \r\nquasi aliquam eligendi, placeat qui corporis!', 'quisquam_elit_nisi_2eeac98dbb6520d822b7df5855d82b41.jpg', NULL, 5, 'N/A', '2021-03-01 19:26:54', '2021-03-01 19:26:54'),
(13, 'Sed vel dolorem unde', 'Commodo eum id ipsuLorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,\r\nmolestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum\r\nnumquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium\r\noptio, eaque rerum! Provident similique accusantium nemo autem. Veritatis\r\nobcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam\r\nnihil, eveniet aliquid culpa officia aut! Impedit sit sunt quaerat, odit,\r\ntenetur error, harum nesciunt ipsum debitis quas aliquid. Reprehenderit,\r\nquia. Quo neque error repudiandae fuga? Ipsa laudantium molestias eos \r\nsapiente officiis modi at sunt excepturi expedita sint? Sed quibusdam\r\nrecusandae alias error harum maxime adipisci amet laborum. Perspiciatis \r\nminima nesciunt dolorem! Officiis iure rerum voluptates a cumque velit \r\nquibusdam sed amet tempora. Sit laborum ab, eius fugit doloribus tenetur \r\nfugiat, temporibus enim commodi iusto libero magni deleniti quod quam \r\nconsequuntur! Commodi minima excepturi repudiandae velit hic maxime\r\ndoloremque. Quaerat provident commodi consectetur veniam similique ad \r\nearum omnis ipsum saepe, voluptas, hic voluptates pariatur est explicabo \r\nfugiat, dolorum eligendi quam cupiditate excepturi mollitia maiores labore \r\nsuscipit quas? Nulla, placeat. Voluptatem quaerat non architecto ab laudantium\r\nmodi minima sunt esse temporibus sint culpa, recusandae aliquam numquam \r\ntotam ratione voluptas quod exercitationem fuga. Possimus quis earum veniam \r\nquasi aliquam eligendi, placeat qui corporis!', 'sed_vel_dolorem_unde_30f256e69acd463783d63efca6a27108.jpg', 5, 7, 'N/A', '2021-03-14 14:48:07', '2021-03-14 14:48:07'),
(14, 'Voluptate aute sunt', 'Nulla ut velit at fu', 'voluptate_aute_sunt_f424f6d8c7ca83c9bfb409f81c253f34.jpg', 6, 9, 'N/A', '2021-03-15 09:49:41', '2021-03-15 09:49:41'),
(15, 'Et dolor corporis re', 'Iste omnis accusanti', 'et_dolor_corporis_re_461fb82e060ced4b96691cd261fdaca1.jpg', 6, 3, 'N/A', '2021-03-15 09:50:29', '2021-03-15 09:50:29'),
(16, 'Aute quidem ex atque', 'Id autem alias expli', 'aute_quidem_ex_atque_09dc3eeb57582582c2957629a564d9c6.jpg', 4, 6, 'N/A', '2021-03-17 06:52:34', '2021-03-17 06:52:34');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstname` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `question` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `firstname`, `lastname`, `email`, `question`, `created_at`, `updated_at`) VALUES
(1, 'Kerry', 'Spence', 'qozeqiki@mailinator.com', 'Facilis distinctio', '2021-03-15 09:01:18', '2021-03-15 09:01:18'),
(2, 'Wynter', 'Henry', 'kygol@mailinator.com', 'Pariatur Blanditiis', '2021-03-16 01:11:03', '2021-03-16 01:11:03'),
(3, 'Erich', 'Fisher', 'xiqe@mailinator.com', 'Et velit magni sapie', '2021-03-16 01:12:23', '2021-03-16 01:12:23'),
(4, 'September', 'Sanchez', 'paturunah@mailinator.com', 'Nulla facere volupta', '2021-03-18 05:46:32', '2021-03-18 05:46:32');

-- --------------------------------------------------------

--
-- Table structure for table `emergency_contacts`
--

CREATE TABLE `emergency_contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `location_id` bigint(20) UNSIGNED DEFAULT NULL,
  `police` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hospital` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name_police` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_police` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_hospital` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_hospital` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `emergency_contacts`
--

INSERT INTO `emergency_contacts` (`id`, `location_id`, `police`, `hospital`, `created_at`, `updated_at`, `name_police`, `address_police`, `name_hospital`, `address_hospital`) VALUES
(1, NULL, '+3843784784', '+32517827438', '2021-02-02 13:30:02', '2021-02-02 13:30:02', 'Lorem Ipsum', 'Lorem Ipsum', 'Lorem Ipsum', 'Lorem Ipsum'),
(2, 1, '+88273372563', '+63486738754', '2021-02-02 13:35:25', '2021-02-02 13:35:25', 'Lorem Ipsum', 'Lorem Ipsum', 'Lorem Ipsum', 'Lorem Ipsum'),
(3, 8, '+23454646678', '+23454646679', '2021-03-14 07:05:40', '2021-03-14 07:06:58', 'Megan Garcia', 'Nam blanditiis atque', 'James Foster', 'Possimus accusantiu'),
(4, 4, '+23454646698', '+23454646688', '2021-03-14 07:05:50', '2021-03-14 07:07:19', 'Leroy Suarez', 'Veniam ut cillum de', 'Zephr Powell', 'Do provident ipsam'),
(5, 14, '+13454646678', '+43454646678', '2021-03-14 07:05:57', '2021-03-14 07:07:43', 'Noah Bryant', 'Rem quis quo molesti', 'Brody Charles', 'Quaerat et repudiand'),
(6, 10, '+33454646678', '+53454646678', '2021-03-14 07:06:05', '2021-03-14 07:08:05', 'Ingrid Riddle', 'Nisi ipsam recusanda', 'Deirdre Valencia', 'Anim ab quia consequ'),
(7, 6, '+12454646678', '+89454646678', '2021-03-14 07:06:13', '2021-03-14 07:08:32', 'Zephr Simmons', 'Rem eaque autem cill', 'Caesar Hopkins', 'Esse ut numquam aut'),
(8, 1, '+23454646678', '+23454645678', '2021-03-14 07:09:01', '2021-03-14 07:09:01', 'Eugenia Mathews', 'Totam proident ulla', 'Charity House', 'Officiis nulla quae'),
(9, 7, '+33454646678', '+12454646678', '2021-03-14 07:09:40', '2021-03-14 07:09:40', 'Eagan Sheppard', 'Cum adipisicing nisi', 'Regina Massey', 'Est fugit possimus'),
(10, 5, '+73454646678', '+63454646678', '2021-03-14 07:10:16', '2021-03-14 07:10:16', 'Raja Munoz', 'Eaque dolorem mollit', 'Xanthus Shannon', 'Pariatur Reiciendis'),
(11, 16, '+52454646678', '+62454646678', '2021-03-14 07:10:49', '2021-03-14 07:10:49', 'Jillian Castillo', 'Et quo ut fugiat nec', 'TaShya Harris', 'Temporibus iure null'),
(12, 13, '+73454646678', '+83454646678', '2021-03-14 07:11:20', '2021-03-14 07:11:20', 'Valentine Donovan', 'Sint culpa ut error', 'Holmes Waller', 'Ut deserunt et aut i'),
(13, 15, '+93454646678', '+99454646678', '2021-03-14 07:12:02', '2021-03-14 07:12:02', 'Cherokee Hewitt', 'Dolorem est dolorem', 'Driscoll Gardner', 'Quia et repellendus'),
(14, 9, '+23454646678', '+23454646678', '2021-03-14 07:12:55', '2021-03-14 07:12:55', 'Rina Montgomery', 'Debitis ab nemo repr', 'Sasha Barlow', 'Eum rem amet eiusmo'),
(15, 2, '+23454646679', '+23454646677', '2021-03-14 07:13:41', '2021-03-14 07:13:41', 'Keiko Burns', 'Culpa et quia rerum', 'Buffy Mccullough', 'Duis nulla ad molest'),
(16, 12, '+23454646688', '+23454646698', '2021-03-14 07:14:02', '2021-03-14 07:14:02', 'Harding Howell', 'Ut reprehenderit ab', 'Boris Ward', 'Aute tempore quia a'),
(17, 3, '+23444646678', '+23554646678', '2021-03-14 07:15:16', '2021-03-14 07:15:16', 'Darrel Holman', 'Pariatur Animi aut', 'Pearl Kelley', 'Eveniet vel volupta');

-- --------------------------------------------------------

--
-- Table structure for table `famous_clothes`
--

CREATE TABLE `famous_clothes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.jpg',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `famous_clothes`
--

INSERT INTO `famous_clothes` (`id`, `name`, `details`, `image`, `created_at`, `updated_at`) VALUES
(2, 'ABC', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable.', '_acfa32b4228567a082d3a1a72e2ce47a.jpg', '2021-01-29 15:23:59', '2021-01-29 15:23:59'),
(3, 'DEF', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable.', '_d89ce2bf5c85cd2772bc6c605a7d1817.jpg', '2021-01-29 15:24:27', '2021-01-29 15:24:27'),
(4, 'GHI', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable.', '_c64dc5931267a4c452e70905a4ff2173.jpg', '2021-01-29 15:24:44', '2021-01-29 15:24:44'),
(5, 'JKL', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable.', '_ecb5aa7c03f3d2304cd491779034fb88.jpg', '2021-01-29 15:25:14', '2021-01-29 15:25:14'),
(6, 'MNO', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable.', '_e6d8b00a3cbf9eff4bb3d89d21c15c80.jpg', '2021-01-29 15:25:31', '2021-01-29 15:25:31'),
(7, 'PQR', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable.', '_a19b6d649dc8660b7537121e53e9b572.jpg', '2021-01-29 15:25:48', '2021-01-29 15:25:48'),
(8, 'STU', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, or randomised words which don\'t look even slightly believable.', '_25ed94a6f7a01181deaa52991e2e52d9.jpg', '2021-01-29 15:26:22', '2021-01-29 15:26:22'),
(9, 'VWX', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable.', '_3f8f428b18ea3ebb003e2c9a0f0e8c27.jpg', '2021-01-29 15:26:44', '2021-01-29 15:26:44');

-- --------------------------------------------------------

--
-- Table structure for table `grocery_shops`
--

CREATE TABLE `grocery_shops` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.jpg',
  `contact` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `grocery_shops`
--

INSERT INTO `grocery_shops` (`id`, `name`, `address`, `image`, `contact`, `created_at`, `updated_at`) VALUES
(1, 'ABC', '123 Main Street', '_aac3e80121e7f8dded9ac3bab61a4bfb.jpg', '+3445432345', '2021-01-29 14:09:15', '2021-01-29 14:09:15'),
(2, 'DEF', 'NY 10030', '_d254764638be50e2e7f497f8677d21db.jpg', '+4445767567', '2021-01-29 14:10:16', '2021-01-29 14:15:48'),
(3, 'GHI', '711-2880 Nulla', '_de8ccf3a52e5a6a2c5e228817832e0ac.jpg', '+7657857689', '2021-01-29 14:11:12', '2021-01-29 14:11:12'),
(4, 'JKL', 'Mankato Mississippi 34-p', '_ffbf6857d502c143137333df2a1b8456.jpg', '+9393802468', '2021-01-29 14:12:25', '2021-01-29 14:15:38'),
(5, 'MNO', 'Mr John Smith: 132', '_ba7105ef8dacf2fdc50c86e017c709b8.jpg', '+8796795805', '2021-01-29 14:13:33', '2021-01-29 14:13:33'),
(6, 'PQR', 'My Street: Kingston', '_df89e09e0ebdfca1bb450a1563383f3d.jpg', '+8843646465', '2021-01-29 14:14:29', '2021-01-29 14:14:29'),
(7, 'STU', 'New York 12401', '_ab69e33784154438c9df35ad79a71a87.jpg', '+4378472191', '2021-01-29 14:15:20', '2021-01-29 14:28:12'),
(8, 'VWX', '61 Wellfield', '_321ca9ee7fbb4f7ab0e349484ef4ab70.jpg', '+1234567891', '2021-01-29 14:16:53', '2021-01-29 14:17:06'),
(9, 'YZA', 'Cardiff CF24', '_8b38d9f17d031a2c99cb3e1e1361f8e4.jpg', '+3245671239', '2021-01-29 14:18:02', '2021-01-29 14:18:02');

-- --------------------------------------------------------

--
-- Table structure for table `hotels`
--

CREATE TABLE `hotels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location_id` bigint(20) UNSIGNED DEFAULT NULL,
  `image` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.jpg',
  `website` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hotels`
--

INSERT INTO `hotels` (`id`, `name`, `address`, `location_id`, `image`, `website`, `contact`, `details`, `created_at`, `updated_at`) VALUES
(1, 'Ritz-Carlton Hotel', 'N3100 Street', NULL, '_a0eee5e2b3266a7f663e98fda5aa827e.jpg', 'www.ritz-carltonhotel.com', '+456576876665', 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2021-01-31 03:46:54', '2021-02-01 07:39:22'),
(2, 'Marriott', 'New York', 12, '_7c5da7c724607f4febdf43a7e88f30b1.jpg', 'www.marriott.com', '+645465253366', 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing softLorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.ware like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2021-01-31 03:50:22', '2021-01-31 03:53:51'),
(3, 'St Regis Hotels', '123 Main Street', 2, '_13fbd0db4b378f70bf2b15bc44553661.jpg', 'www.stregishotels.com', '+748745383488', 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2021-01-31 03:58:03', '2021-01-31 03:58:03'),
(4, 'Lorem Ipsum', 'Lorem Ipsum 234', 7, '_1b06324da8f758750b44e29ab888bc40.jpg', 'www.loreipsum.com', '+645465253366', 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2021-01-31 04:14:43', '2021-02-01 07:41:57'),
(5, 'Lorem Ipsum', 'Lorem Ipsum 456', NULL, '_b40e29e0353811938760d4d4c63d0905.jpg', 'www.loreipsum.com', '+456576876665', 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2021-01-31 04:17:41', '2021-01-31 04:17:41'),
(6, 'Lorem Ipsum', 'Lorem Ipsum 678', 7, '_59c9bfcd6181d3fe7aef02bb6a694d3f.jpg', 'www.loreipsum.com', '+645465253366', 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2021-01-31 04:19:00', '2021-01-31 04:19:00'),
(7, 'Lorem Ipsum', 'Lorem Ipsum 897', 3, '_381d2d3c482109456d008ff4e735322f.jpg', 'www.loreipsum.com', '+748745383488', 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2021-01-31 04:20:37', '2021-01-31 04:20:37'),
(8, 'Hyatt', 'NY 10030', 4, '_a67be6fb490ee51fe0e4b1608616c9f0.jpg', 'www.hyatt.com', '+345757777777', 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2021-01-31 04:22:30', '2021-01-31 04:22:30'),
(9, 'Aman Resorts', 'Nulla St', NULL, '_e4cff276ecd49e91c6c6d95509a27361.jpg', 'www.amanresorts.com', '+456576876665', 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2021-01-31 04:24:56', '2021-01-31 04:24:56'),
(10, 'Four Seasons', 'Kingston', NULL, '_48780fffc0fad00478a8f14e4d91995c.jpg', 'www.fourseasons.com', '+64546525336', 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2021-01-31 04:28:34', '2021-02-01 07:39:46'),
(11, 'Ace Hotel', 'Mississippi 96', 10, '_1de13564b73f53086a29e2395c2de949.jpg', 'www.acehotel.com', '+748745383488', 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2021-01-31 04:30:56', '2021-01-31 04:30:56');
INSERT INTO `hotels` (`id`, `name`, `address`, `location_id`, `image`, `website`, `contact`, `details`, `created_at`, `updated_at`) VALUES
(12, 'Gotham Hotel', 'Chapman 711', NULL, '_f10f9b854ed9405c8ac2d249b83988c7.jpg', 'www.gothamhotel.com', '+345757777777', 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2021-01-31 04:32:58', '2021-02-01 07:39:33');

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `name`, `address`, `created_at`, `updated_at`, `image`) VALUES
(1, 'Bholagonj', 'Bholagonj, Companigonj, Sylhet', '2021-01-30 02:59:45', '2021-01-30 02:59:45', '_ee922bca8d6f151247946be3f8677be0.jpg'),
(2, 'Bisnakandi', 'Rustompur, Guainghat, Sylhet', '2021-01-30 03:01:42', '2021-01-30 03:01:42', '_3575fb71894617d409598480251a41ae.jpg'),
(3, 'Dolura', 'Narayontola, Sunamgonj, Sylhet', '2021-01-30 03:06:54', '2021-01-30 03:06:54', '_4b218ee9a21d0ffc8f7252185e1e08c5.jpg'),
(4, 'Jaflong', 'Jaflong, Guainghat Sylhet', '2021-01-30 03:09:33', '2021-01-30 03:09:33', '_b6a7efb4efc7d948b7c47906e7e14a45.jpg'),
(5, 'Jadukata', 'Tahirpur, Sunamgonj Sylhet', '2021-01-30 03:12:17', '2021-01-30 03:12:17', '_5f7cd51693b24a5300b910c93f83729b.jpg'),
(6, 'Khadimnagar Rain Forest', 'Khadimnagar, Shahporhan Sylhet', '2021-01-30 03:13:59', '2021-01-30 03:13:59', '_734f125fed9d5a3f12818df538b17d31.jpg'),
(7, 'Lalakhal', 'Lalakhal, Jaintapur Sylhet', '2021-01-30 03:17:50', '2021-01-30 03:17:50', '_8cdf3ce07ecedfb15c9eaee96a3279e9.jpg'),
(8, 'Lawachara', 'Lawachera, Srimongol Sylhet', '2021-01-30 03:19:01', '2021-01-30 03:19:01', '_b0b9c1b07cd4e5551f8b1995eb320778.jpg'),
(9, 'Luvachora', 'Lovachora, Kanaighat Sylhet', '2021-01-30 03:23:41', '2021-01-30 03:23:41', '_fb626617d8c25adf7aff8d902235b196.jpg'),
(10, 'Panthumai', 'Panthumai, Guainghat Sylhet', '2021-01-30 03:31:45', '2021-01-30 03:31:45', '_aab6628d2cd8ac990217976dacc1a4a9.jpg'),
(11, 'Rema Kalenga Reserve Forest', 'Rema-Kalenga, Chunnarughat Sylhet', '2021-01-30 03:33:03', '2021-01-30 03:33:03', '_4234109119cdf3be3291afc9015fd6e9.jpg'),
(12, 'Sreemongol', 'Sreemongol Sylhet', '2021-01-30 03:34:10', '2021-01-30 03:34:10', '_cecdf56b8706e79ad1fa8cfec6883d5e.jpg'),
(13, 'Sathchori National Forest', 'Sathchori, Chunnarughat Sylhet', '2021-01-30 03:42:31', '2021-01-30 03:45:57', '_db224103b836eee61ffec721c7337b2e.jpg'),
(14, 'Tanguar Hoar', 'Tangoar Haor, Sunamgonj Sylhet', '2021-01-30 03:46:53', '2021-01-30 03:46:53', '_6cbf32e05021ecaedec649a9b9b8bfff.jpg'),
(15, 'Ratargula Swamp Forest', 'Ratargul, Guainghat Sylhet', '2021-01-30 03:48:51', '2021-01-30 03:48:51', '_24b07f0f8bbf8b4e5e92710b808e5c02.jpg'),
(16, 'Niladri', 'Sunamgonj, Sylhet', '2021-01-30 03:49:31', '2021-01-30 03:49:31', '_86eb98ac29492d13639b9caa16a8d857.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2020_12_13_093454_create_locations_table', 1),
(4, '2020_12_14_102044_create_hotels_table', 1),
(5, '2020_12_16_092129_create_famous_clothes_table', 1),
(6, '2020_12_16_092222_create_shopping_malls_table', 1),
(7, '2020_12_20_153351_create_blog_categories_table', 1),
(8, '2020_12_20_153509_create_blog_posts_table', 1),
(9, '2020_12_20_153603_create_blog_images_table', 1),
(10, '2021_01_02_090846_update_location_table', 1),
(11, '2021_01_06_082405_update_shopping_malls', 1),
(12, '2021_01_06_085710_create_grocery_shops_table', 1),
(13, '2021_01_09_083752_create_traditional_aliments_table', 1),
(14, '2021_01_11_082619_create_restaurent_names_table', 1),
(15, '2021_01_20_144937_create_restaurant_menus_table', 1),
(16, '2021_01_22_101616_create_transport_types_table', 1),
(17, '2021_01_22_160308_create_transport_costs_table', 1),
(18, '2021_01_24_081543_create_emergency_contacts_table', 1),
(19, '2021_02_02_182640_update_emergency_contacts', 2),
(20, '2021_03_02_163128_create_abouts_table', 3),
(21, '2021_03_02_202517_update_abouts_table', 4),
(22, '2021_03_12_205554_create_contacts_table', 5),
(23, '2021_03_14_135715_create_transport_categories_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `restaurant_menus`
--

CREATE TABLE `restaurant_menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `restaurent_name_id` bigint(20) UNSIGNED DEFAULT NULL,
  `menu_name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.jpg',
  `price` double NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `menuType` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `restaurant_menus`
--

INSERT INTO `restaurant_menus` (`id`, `restaurent_name_id`, `menu_name`, `image`, `price`, `created_at`, `updated_at`, `menuType`) VALUES
(1, 1, 'Dana Hoffman', '_fec45c622301788c267fba399109f7df.jpg', 576, '2021-03-07 07:30:28', '2021-03-13 14:47:26', 'Lunch'),
(2, 5, 'Burke William', '_543e068bf8f94a3e8b393587ba9e5d59.jpg', 20, '2021-03-13 14:40:20', '2021-03-13 14:40:20', 'Breakfast'),
(3, 1, 'Faith Daniel', '_bc607c7e658d88bfaa358c0db5fd54dd.jpg', 125, '2021-03-13 14:48:15', '2021-03-13 14:48:15', 'Lunch'),
(4, 1, 'Michelle Richard', '_2372eac387de515ed3e7e6adca221e91.jpg', 996, '2021-03-13 14:48:37', '2021-03-13 14:48:37', 'Lunch'),
(5, 3, 'Alexa Lowery', '_7929847bbd960ece15abc602c01d06fb.jpg', 680, '2021-03-13 14:49:05', '2021-03-13 14:49:05', 'Lunch'),
(6, 5, 'Merrill Hendricks', '_da6948e61d39daba73cb37e1f09c34d2.jpg', 423, '2021-03-13 14:49:35', '2021-03-13 14:49:35', 'Breakfast'),
(7, 5, 'Simon Gilliam', '_e2868b226303334ca1b2b01081b85e30.jpg', 833, '2021-03-13 14:49:58', '2021-03-13 14:49:58', 'Breakfast'),
(8, 5, 'Cally Buchanan', '_dccd7aa30370989f9938a85f7c148440.jpg', 328, '2021-03-13 14:50:19', '2021-03-13 14:50:19', 'Breakfast'),
(9, 1, 'Leah Oliver', '_9ae5f1705b627fc48b34d64700b9e2ad.jpg', 611, '2021-03-13 15:07:19', '2021-03-13 15:07:19', 'Breakfast'),
(10, 1, 'Winifred Sweet', '_7181d8b7caecbdf189265411a31c03a6.jpg', 581, '2021-03-13 15:07:50', '2021-03-13 15:07:50', 'Breakfast'),
(11, 1, 'Jermaine Tillman', '_3de9bf3ecaf8d4ae40b448d4e67e588d.jpg', 944, '2021-03-13 15:08:30', '2021-03-13 15:08:30', 'Dinner'),
(12, 1, 'Eve Mcdaniel', '_81ceba1c4a654c4ac5c6e2a33c7b5103.jpg', 695, '2021-03-13 15:08:58', '2021-03-13 15:10:45', 'Dinner'),
(13, 1, 'Ulysses Mcneil', '_24babfcf9962a6f91f117595d24f025d.jpg', 36, '2021-03-13 15:11:26', '2021-03-13 15:11:26', 'Drinks'),
(14, 5, 'Amanda Gregory', '_30dd36a5fc6439cebaa3a6b067195710.jpg', 96, '2021-03-13 15:13:27', '2021-03-13 15:13:27', 'Lunch'),
(15, 5, 'Dolan Pena', '_5dff97c60f41654a62b74d965d12f067.jpg', 86, '2021-03-13 15:14:24', '2021-03-13 15:14:24', 'Lunch'),
(16, 5, 'Sonia Dyer', '_bf5559785e8932d3be7964a5376c897b.jpg', 978, '2021-03-13 15:16:10', '2021-03-13 15:16:10', 'Dinner'),
(17, 5, 'Ali Sawyer', '_e71bf2e89214e8ed17e644b5a82f3d4b.jpg', 537, '2021-03-13 15:16:37', '2021-03-13 15:16:37', 'Dinner'),
(18, 5, 'Sheila Love', '_3cfe36e5475d33dd1c134ea37eca00dd.jpg', 190, '2021-03-13 15:17:21', '2021-03-13 15:17:21', 'Drinks'),
(19, 9, 'Beck Cantrell', '_14f368cae15ba1e48b6c9550222ff748.jpg', 90, '2021-03-13 15:18:51', '2021-03-13 15:18:51', 'Drinks'),
(20, 9, 'Denton Langley', '_a213bb2437af442b54ca08e391eafbeb.jpg', 366, '2021-03-13 15:19:42', '2021-03-13 15:19:42', 'Dinner'),
(21, 9, 'Kenneth Koch', '_3ce1e0790aba39e66fbcfd800b1f985d.jpg', 105, '2021-03-13 15:20:13', '2021-03-13 15:20:13', 'Dinner'),
(22, 9, 'Camille Kline', '_ad550bef80a22665aa42c46d5c1402f9.jpg', 759, '2021-03-13 15:20:41', '2021-03-13 15:20:41', 'Lunch'),
(23, 9, 'Acton Vazquez', '_0994ecc51dee1b6c5b1ebe28c87f9ea5.jpg', 84, '2021-03-13 15:21:01', '2021-03-13 15:21:01', 'Lunch'),
(24, 9, 'Karen Berger', '_ad8badce8b5c8fd693aa010a19eda0f1.jpg', 934, '2021-03-13 15:21:37', '2021-03-13 15:21:37', 'Breakfast'),
(25, 9, 'Maris Obrien', '_4f55f558c44d666e6df7e6c351586870.jpg', 167, '2021-03-13 15:21:56', '2021-03-13 15:21:56', 'Breakfast'),
(26, 2, 'Barclay Albert', '_f4e4e22d8228bc1a9dc35175ef1162bb.jpg', 271, '2021-03-13 15:22:31', '2021-03-13 15:22:31', 'Breakfast'),
(27, 2, 'Jamalia Ferrell', '_7133be0cb0050dc196d2f10c4a1948d5.jpg', 180, '2021-03-13 15:23:09', '2021-03-13 15:23:09', 'Breakfast'),
(28, 2, 'Rashad Ramos', '_ae2531630951785ab371898e10995dc5.jpg', 190, '2021-03-13 15:23:44', '2021-03-13 15:23:44', 'Lunch'),
(29, 2, 'Jonah Cervantes', '_24b2912ebc39a272a8bf5181631e700b.jpg', 124, '2021-03-13 15:24:05', '2021-03-13 15:24:05', 'Lunch'),
(30, 2, 'Sheila Potts', '_0624828bed0f52458ad60024b8d33178.jpg', 103, '2021-03-13 15:25:50', '2021-03-13 15:25:50', 'Dinner'),
(31, 2, 'Cecilia Dejesus', '_275a782ae7bfbebbe591bc23825ee569.jpg', 799, '2021-03-13 15:26:10', '2021-03-13 15:26:10', 'Dinner'),
(32, 2, 'Jakeem Shannon', '_154602f7dc6129855e441a295830004f.jpg', 70, '2021-03-13 15:26:39', '2021-03-13 15:26:39', 'Drinks');

-- --------------------------------------------------------

--
-- Table structure for table `restaurent_names`
--

CREATE TABLE `restaurent_names` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location_id` bigint(20) UNSIGNED DEFAULT NULL,
  `image` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.jpg',
  `contact` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `restaurent_names`
--

INSERT INTO `restaurent_names` (`id`, `name`, `address`, `location_id`, `image`, `contact`, `created_at`, `updated_at`) VALUES
(1, 'Lorem Ipsum', 'New York', 1, '_bd25331dd507d5041dfa981a349f6628.jpg', '+345757777777', '2021-02-28 03:51:09', '2021-02-28 03:51:09'),
(2, 'Patricia Yang', 'Eligendi 123', 4, '_e3057568d57033902d00cc0dfd16441c.jpg', '+64546525336', '2021-02-28 03:52:21', '2021-02-28 03:52:21'),
(3, 'Lorem Ipsum', 'Road no-1', NULL, '_877d4eadb24d7e3584437117fe578bbf.jpg', '+645465253366', '2021-02-28 03:52:50', '2021-02-28 03:52:50'),
(4, 'Lorem Ipsum', '123 Street', NULL, '_46b0bdc9e02f3d755e0902c3b562c36f.jpg', '+748745383488', '2021-02-28 03:53:25', '2021-02-28 03:53:25'),
(5, 'Isaac Cook', 'Consequatur, 12B', 15, '_5bd220ff29247eba6b1eb3d700f783a6.jpg', '+748745383488', '2021-02-28 03:54:09', '2021-02-28 03:54:09'),
(6, 'Moses Boyer', 'Assumenda nihil sunt', NULL, '_ff30c026bca74b837b41493746f2be4e.jpg', '+12334454556566', '2021-02-28 03:54:46', '2021-02-28 03:54:46'),
(7, 'Ayanna Nolan', 'Totam aut perspiciat, 34G', 9, '_c1bab7b975c8347b5d8c869b468e904d.jpg', '+456576876665', '2021-02-28 03:55:28', '2021-02-28 03:55:28'),
(8, 'Flynn Kennedy', 'Minim voluptas volup', 3, '_1a00ed827c0929f345e1faa4b0610e19.jpg', '+645465253366', '2021-02-28 03:55:55', '2021-02-28 03:55:55'),
(9, 'Prescott Bullock', 'Laborum et occaecat', 16, '_19c83013598b4dd5fc7275c4e08ea08a.jpg', '+456576876665', '2021-02-28 03:56:18', '2021-02-28 03:56:18');

-- --------------------------------------------------------

--
-- Table structure for table `shopping_malls`
--

CREATE TABLE `shopping_malls` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.jpg',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `contact` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shopping_malls`
--

INSERT INTO `shopping_malls` (`id`, `name`, `address`, `image`, `created_at`, `updated_at`, `contact`) VALUES
(1, 'Evely Cactus', 'New York', '_c6f501cd0293e13629a937fdbd2c166d.jpg', '2021-01-29 14:40:38', '2021-01-29 14:40:38', '+3245671239'),
(2, 'Evelyx', '123 Main Street', '_a8589eca003b53a8b91523c880dbdf35.jpg', '2021-01-29 14:42:08', '2021-01-29 14:43:17', '+1234567891'),
(3, 'Evely Mingle', 'NY 10030', '_f9553f1401ef7ea3c96d0c8098c2d2c7.jpg', '2021-01-29 14:43:05', '2021-01-29 14:43:05', '+9393802468'),
(4, 'Evely move', 'Cardiff CF24', '_38270dbaf228b017a2a92f2c2b17bad4.jpg', '2021-01-29 14:44:18', '2021-01-29 14:44:18', '+1234567898'),
(5, 'Evelycog', 'New York', '_c6d277e6c5861b1139b352a1cb60b15d.jpg', '2021-01-29 14:45:26', '2021-01-29 14:51:19', '+9393802468'),
(6, 'Evely Capri', '61 Wellfield', '_49dfe9a6ae150fbefeca3fb34636dd9c.jpg', '2021-01-29 14:46:46', '2021-01-29 14:47:08', '+1234567893'),
(7, 'Evelyopolis', 'My Street: Kingston', '_d88734b75b85d2a5aac9987e49ef8173.jpg', '2021-01-29 14:48:19', '2021-01-29 14:48:19', '+1234567895'),
(8, 'Evely Lust', 'My Street: Kingston', '_a3f0dcfaadb73287d3a6080181db14f6.jpg', '2021-01-29 14:52:17', '2021-01-29 14:52:17', '+9393802468'),
(9, 'Evely Style', 'Nulla St', '_ca566bb0544c8dbbab528d5bbecf226a.jpg', '2021-01-29 14:53:37', '2021-01-29 14:53:37', '+3445432345');

-- --------------------------------------------------------

--
-- Table structure for table `traditional_aliments`
--

CREATE TABLE `traditional_aliments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.jpg',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `traditional_aliments`
--

INSERT INTO `traditional_aliments` (`id`, `name`, `details`, `image`, `created_at`, `updated_at`) VALUES
(2, 'ABC', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable.', '_afda501cc8529abd17671b2aea706e86.jpg', '2021-01-29 15:07:31', '2021-01-29 15:07:31'),
(3, 'DEF', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, or randomised words which don\'t look even slightly believable.', '_2b4b16a890c8371484c4f0366272b45a.jpg', '2021-01-29 15:08:02', '2021-01-29 15:11:04'),
(4, 'GHI', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable.', '_b7535908e397d6dcd2f4cba14091d8eb.jpg', '2021-01-29 15:08:25', '2021-01-29 15:08:25'),
(5, 'JKL', 'There are many variations of passages of Lorem Ipsum available, , by injected humour, or randomised words which don\'t look even slightly believable.', '_10afe9b4f1e6b371bca3968c1fc8934e.jpg', '2021-01-29 15:08:49', '2021-01-29 15:11:22'),
(6, 'MNO', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable.', '_161a1538135826a55bfc66162a7c0d8b.jpg', '2021-01-29 15:09:13', '2021-01-29 15:09:13'),
(7, 'PQR', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable.', '_12d5e0061a298611c514d068c33e8356.jpg', '2021-01-29 15:09:32', '2021-01-29 15:09:32'),
(8, 'STU', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable.', '_347cd64800bbbe3e6c60bf5add172117.jpg', '2021-01-29 15:09:50', '2021-01-29 15:09:50'),
(9, 'VWX', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable.', '_a2bbac4971577376f24ebf85025eedf3.jpg', '2021-01-29 15:10:09', '2021-01-29 15:10:09'),
(10, 'YZA', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable.', '_9b061b15d4b33c41268ab2eda099829b.jpg', '2021-01-29 15:10:27', '2021-01-29 15:10:27');

-- --------------------------------------------------------

--
-- Table structure for table `transport_categories`
--

CREATE TABLE `transport_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transport_categories`
--

INSERT INTO `transport_categories` (`id`, `category`, `created_at`, `updated_at`) VALUES
(1, 'Bus', '2021-03-14 09:07:17', '2021-03-14 09:07:17'),
(2, 'Car', '2021-03-14 09:08:08', '2021-03-14 09:08:08'),
(3, 'CNG', '2021-03-14 09:08:21', '2021-03-14 09:08:21'),
(4, 'Rickshaw', '2021-03-14 09:08:32', '2021-03-14 09:08:32');

-- --------------------------------------------------------

--
-- Table structure for table `transport_costs`
--

CREATE TABLE `transport_costs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `transport_type_id` bigint(20) UNSIGNED DEFAULT NULL,
  `location_id` bigint(20) UNSIGNED DEFAULT NULL,
  `from` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `to` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `transport_category_id` bigint(50) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transport_costs`
--

INSERT INTO `transport_costs` (`id`, `transport_type_id`, `location_id`, `from`, `to`, `price`, `created_at`, `updated_at`, `transport_category_id`) VALUES
(11, NULL, 1, 'City', 'Bholagonj', 0, '2021-03-15 15:42:13', '2021-03-15 15:42:13', 1),
(12, NULL, 1, 'City', 'Bholagonj', 1000, '2021-03-15 15:42:46', '2021-03-15 15:42:46', 2),
(13, NULL, 1, 'City', 'Bholagonj', 500, '2021-03-15 15:43:17', '2021-03-15 15:43:17', 3),
(14, NULL, 1, 'City', 'Bholagonj', 0, '2021-03-15 15:43:36', '2021-03-15 15:43:36', 4),
(15, NULL, 2, 'City', 'Bisnakandi', 100, '2021-03-15 15:46:17', '2021-03-15 15:46:17', 1),
(16, NULL, 2, 'City', 'Bisnakandi', 1000, '2021-03-15 15:46:39', '2021-03-15 15:46:39', 2),
(17, NULL, 2, 'City', 'Bisnakandi', 500, '2021-03-15 15:48:44', '2021-03-15 15:48:44', 3),
(18, NULL, 3, 'City', 'Dolura', 500, '2021-03-15 15:49:25', '2021-03-15 15:49:25', 1),
(19, NULL, 3, 'City', 'Dolura', 2500, '2021-03-15 15:49:58', '2021-03-15 15:49:58', 2),
(20, NULL, 3, 'City', 'Dolura', 1000, '2021-03-15 15:50:18', '2021-03-15 15:50:18', 3),
(21, NULL, 3, 'City', 'Dolura', 0, '2021-03-15 15:51:07', '2021-03-15 15:51:07', 4),
(22, NULL, 2, 'City', 'Bisnakandi', 0, '2021-03-15 15:52:07', '2021-03-15 15:52:07', 4),
(23, NULL, 4, 'City', 'Jaflong', 60, '2021-03-15 15:53:18', '2021-03-15 15:55:29', 1),
(24, NULL, 4, 'City', 'Jaflong', 1500, '2021-03-15 15:53:58', '2021-03-15 15:54:37', 2),
(25, NULL, 4, 'City', 'Jaflong', 700, '2021-03-15 15:54:24', '2021-03-15 15:54:24', 3),
(26, NULL, 4, 'City', 'Jaflong', 0, '2021-03-15 15:55:11', '2021-03-15 15:55:11', 4),
(27, NULL, 5, 'City', 'Jadukata', 500, '2021-03-15 15:56:50', '2021-03-15 15:56:50', 3),
(28, NULL, 5, 'City', 'Jadukata', 1000, '2021-03-15 15:57:13', '2021-03-15 15:57:13', 2),
(29, NULL, 6, 'City', 'Khadimnagar Rain Forest', 300, '2021-03-15 15:59:07', '2021-03-15 15:59:07', 3),
(30, NULL, 6, 'City', 'Khadimnagar Rain Forest', 700, '2021-03-15 15:59:44', '2021-03-15 15:59:44', 2),
(31, NULL, 6, 'City', 'Khadimnagar Rain Forest', 200, '2021-03-15 16:00:33', '2021-03-15 16:00:33', 4),
(32, NULL, 6, 'City', 'Khadimnagar Rain Forest', 60, '2021-03-15 16:01:19', '2021-03-15 16:01:19', 1);

-- --------------------------------------------------------

--
-- Table structure for table `transport_types`
--

CREATE TABLE `transport_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `location_id` bigint(20) UNSIGNED DEFAULT NULL,
  `type` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `transport_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'N/A',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `transport_category_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transport_types`
--

INSERT INTO `transport_types` (`id`, `location_id`, `type`, `transport_slug`, `created_at`, `updated_at`, `transport_category_id`) VALUES
(65, 1, NULL, 'N/A', '2021-03-14 09:18:36', '2021-03-14 09:18:36', 1),
(66, 1, NULL, 'N/A', '2021-03-14 09:59:17', '2021-03-14 09:59:17', 2),
(67, 1, NULL, 'N/A', '2021-03-14 10:00:03', '2021-03-14 10:00:03', 3),
(68, 1, NULL, 'N/A', '2021-03-14 10:00:12', '2021-03-14 10:00:12', 4),
(69, 2, NULL, 'N/A', '2021-03-14 10:00:49', '2021-03-14 10:00:49', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `userType` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'User',
  `image` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT 'default.jpg',
  `about` longtext COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `userType`, `image`, `about`) VALUES
(1, 'Tucker Gillespie', 'logocyl@mailinator.com', NULL, '$2y$10$nj9ejhCYNXoJjuzJ991wAuZm3w6HoMcC4W.E.Glm2amGrbXfdf1Ii', NULL, '2021-03-01 10:51:15', '2021-03-01 10:51:15', 'User\r\n', 'default.jpg', NULL),
(2, 'Reece King', 'fynexoqi@mailinator.com', NULL, '$2y$10$B8LRDfFqoXvo02j6HbDW6uYAsVn/W1iXRyqM5rnM1uhuh/5VPI10i', NULL, '2021-03-01 10:51:54', '2021-03-01 10:51:54', 'User', 'default.jpg', NULL),
(3, 'Veronica Lott', 'zewut@mailinator.com', NULL, '$2y$10$hwKgXDXLocJyDZN3QJgEduocPbf/syAS8ml4znQMAJhEtylyYMnJy', NULL, '2021-03-01 14:33:30', '2021-03-01 14:33:30', 'User', 'default.jpg', NULL),
(4, 'Kermit Gamble', 'pubyfymepi@mailinator.com', NULL, '$2y$10$V6Xkex8p98pkqcmr26Ye7.5Mvgz6JMSg0NMpTO5YVpZWtkoxn5GHO', NULL, '2021-03-01 17:21:29', '2021-03-01 17:21:29', 'User', 'default.jpg', NULL),
(5, 'Aileen Duran', 'kynizi@mailinator.com', '2021-03-18 05:40:13', '$2y$10$../qXK9LjWn8DWkdHBC/Aenj0KfZcDJFSBE03m0d4m3YSzWpXLnMG', NULL, '2021-03-02 19:01:11', '2021-03-18 05:40:13', 'User', 'default.jpg', NULL),
(6, 'Dominique Lloyd', 'bycumuhyb@mailinator.com', '2021-03-17 14:01:27', '$2y$10$/BtzJiuCM.e.mZuEBHlbG.RxaHJSpCBg4visnPOWoxRSlePSx6Uk2', NULL, '2021-03-06 16:29:19', '2021-03-17 14:01:27', 'Admin', '_31186803829e73278b19543be5d4e943.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'),
(7, 'Erasmus Bartlett', 'wuxoqev@mailinator.com', NULL, '$2y$10$IE.rzPbeXhSjTkCmyisKa.FnU0TIGvuU4slraCem1bDAWPsd4LY0m', NULL, '2021-03-08 06:54:11', '2021-03-08 06:54:11', 'User', 'default.jpg', NULL),
(8, 'Meredith Hendrix', 'magisanu@mailinator.com', '2021-03-17 09:46:00', '$2y$10$vFB0b9L1o2zKAPGz6guQp.zUiuq7sL/2BD7t3ucY7A.HPI7R8zcDe', NULL, '2021-03-17 09:45:28', '2021-03-17 09:46:00', 'User', 'default.jpg', NULL),
(9, 'Odette Dennis', 'qogyhany@mailinator.com', '2021-03-18 03:02:33', '$2y$10$xBVTdMaMgrIaSXSh2tjRQOivZe8YJv7oDLKDxRq8Oz0uu7p2SzDay', NULL, '2021-03-18 03:01:45', '2021-03-18 03:02:33', 'User', 'default.jpg', NULL),
(10, 'Dean Vargas', 'vymoqawyny@mailinator.com', '2021-03-18 05:42:14', '$2y$10$mzG82IHIRCE8MAVaw41j6ujUK.al6I4TxBgaFLb16snKawhJppdGq', NULL, '2021-03-18 05:41:49', '2021-03-18 05:42:14', 'User', 'default.jpg', NULL),
(11, 'Unity Duncan', 'rokumakygi@mailinator.com', NULL, '$2y$10$u.VlmFPYkS2QE4Kf6TzgfeMGfDKo0KSNoRf1gke7yJyTCDI6JfkFm', NULL, '2021-03-18 08:40:00', '2021-03-18 08:40:00', 'User', 'default.jpg', NULL),
(12, 'Mira Callahan', 'fulexyryso@mailinator.com', NULL, '$2y$10$iuKYPuRRo2OK6vGCR6pjpuHKqOkkSPG5l1MC1Xv9YgKglXDMQWDtq', NULL, '2021-03-18 08:40:16', '2021-03-18 08:40:16', 'User', 'default.jpg', NULL),
(13, 'Farzana Akter Shammi', 'frjnkhtr@gmail.com', '2021-03-18 08:41:16', '$2y$10$XThPGlV7wpfUePmODmkatu5HnR.X6Bug1SGcRcrJs9rf2Sq1U.Ogi', NULL, '2021-03-18 08:40:51', '2021-03-18 08:41:16', 'User', 'default.jpg', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_categories`
--
ALTER TABLE `blog_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_images`
--
ALTER TABLE `blog_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blog_images_blog_post_id_foreign` (`blog_post_id`);

--
-- Indexes for table `blog_posts`
--
ALTER TABLE `blog_posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blog_posts_user_id_index` (`user_id`),
  ADD KEY `blog_posts_blog_category_id_index` (`blog_category_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emergency_contacts`
--
ALTER TABLE `emergency_contacts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `emergency_contacts_location_id_index` (`location_id`);

--
-- Indexes for table `famous_clothes`
--
ALTER TABLE `famous_clothes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grocery_shops`
--
ALTER TABLE `grocery_shops`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotels`
--
ALTER TABLE `hotels`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hotels_location_id_index` (`location_id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `restaurant_menus`
--
ALTER TABLE `restaurant_menus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `restaurant_menus_restaurent_name_id_index` (`restaurent_name_id`);

--
-- Indexes for table `restaurent_names`
--
ALTER TABLE `restaurent_names`
  ADD PRIMARY KEY (`id`),
  ADD KEY `restaurent_names_location_id_index` (`location_id`);

--
-- Indexes for table `shopping_malls`
--
ALTER TABLE `shopping_malls`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `traditional_aliments`
--
ALTER TABLE `traditional_aliments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transport_categories`
--
ALTER TABLE `transport_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transport_costs`
--
ALTER TABLE `transport_costs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transport_costs_transport_type_id_index` (`transport_type_id`);

--
-- Indexes for table `transport_types`
--
ALTER TABLE `transport_types`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transport_types_location_id_index` (`location_id`);

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
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog_categories`
--
ALTER TABLE `blog_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `blog_images`
--
ALTER TABLE `blog_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `blog_posts`
--
ALTER TABLE `blog_posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `emergency_contacts`
--
ALTER TABLE `emergency_contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `famous_clothes`
--
ALTER TABLE `famous_clothes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `grocery_shops`
--
ALTER TABLE `grocery_shops`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `hotels`
--
ALTER TABLE `hotels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `restaurant_menus`
--
ALTER TABLE `restaurant_menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `restaurent_names`
--
ALTER TABLE `restaurent_names`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `shopping_malls`
--
ALTER TABLE `shopping_malls`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `traditional_aliments`
--
ALTER TABLE `traditional_aliments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `transport_categories`
--
ALTER TABLE `transport_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `transport_costs`
--
ALTER TABLE `transport_costs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `transport_types`
--
ALTER TABLE `transport_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blog_images`
--
ALTER TABLE `blog_images`
  ADD CONSTRAINT `blog_images_blog_post_id_foreign` FOREIGN KEY (`blog_post_id`) REFERENCES `blog_posts` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `blog_posts`
--
ALTER TABLE `blog_posts`
  ADD CONSTRAINT `blog_posts_blog_category_id_foreign` FOREIGN KEY (`blog_category_id`) REFERENCES `blog_categories` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `blog_posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `emergency_contacts`
--
ALTER TABLE `emergency_contacts`
  ADD CONSTRAINT `emergency_contacts_location_id_foreign` FOREIGN KEY (`location_id`) REFERENCES `locations` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `hotels`
--
ALTER TABLE `hotels`
  ADD CONSTRAINT `hotels_location_id_foreign` FOREIGN KEY (`location_id`) REFERENCES `locations` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `restaurant_menus`
--
ALTER TABLE `restaurant_menus`
  ADD CONSTRAINT `restaurant_menus_restaurent_name_id_foreign` FOREIGN KEY (`restaurent_name_id`) REFERENCES `restaurent_names` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `restaurent_names`
--
ALTER TABLE `restaurent_names`
  ADD CONSTRAINT `restaurent_names_location_id_foreign` FOREIGN KEY (`location_id`) REFERENCES `locations` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `transport_costs`
--
ALTER TABLE `transport_costs`
  ADD CONSTRAINT `transport_costs_transport_type_id_foreign` FOREIGN KEY (`transport_type_id`) REFERENCES `transport_types` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `transport_types`
--
ALTER TABLE `transport_types`
  ADD CONSTRAINT `transport_types_location_id_foreign` FOREIGN KEY (`location_id`) REFERENCES `locations` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
