-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Sep 18, 2025 at 01:25 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-commerce1`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login_details`
--

CREATE TABLE `admin_login_details` (
  `id` int(40) NOT NULL,
  `name` varchar(200) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `email` varchar(40) NOT NULL,
  `address` varchar(40) DEFAULT NULL,
  `password` varchar(40) NOT NULL,
  `role` int(10) DEFAULT NULL,
  `file` varchar(200) DEFAULT NULL,
  `gst_number` varchar(200) DEFAULT NULL,
  `last_invoice_no` bigint(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_login_details`
--

INSERT INTO `admin_login_details` (`id`, `name`, `mobile`, `email`, `address`, `password`, `role`, `file`, `gst_number`, `last_invoice_no`) VALUES
(9, 'pooja khatri', 8707858421, 'admin@gmail.com', 'Hazratganj', '12345', 1, 'upload-images/hair_06.jpg', '29AALC6789997', 98000006),
(12, 'navya khatri', 8707858427, 'navya@gmail.com', 'Hazratganj', '12345', 2, 'upload-images/beauty_02.jpg', NULL, NULL),
(16, 'anvi', 8019858421, 'anvi@gmail.com', 'Hazratganj', '1234', 2, 'upload-images/team-9.jpg', NULL, NULL),
(25, 'Pari Kapoor', 89078431264234234, 'khatri424@gmail.com', 'Hazratganj', '1234', 2, 'upload-images/blow dry.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `all_products`
--

CREATE TABLE `all_products` (
  `id` int(200) NOT NULL,
  `c_id` int(200) NOT NULL,
  `s_id` int(200) NOT NULL,
  `product` varchar(200) NOT NULL,
  `description` varchar(200) NOT NULL,
  `price` int(200) NOT NULL,
  `discount_percentage` int(200) NOT NULL,
  `offer_price` int(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `file` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `all_products`
--

INSERT INTO `all_products` (`id`, `c_id`, `s_id`, `product`, `description`, `price`, `discount_percentage`, `offer_price`, `created_at`, `file`) VALUES
(1, 1, 1, 'soap', 'very good quality', 0, 0, 0, '2025-09-16 10:13:11', ''),
(5, 1, 1, 'Soap', 'good', 200, 0, 180, '2025-09-16 10:13:11', ''),
(6, 1, 1, 'soap', 'very good', 500, 20, 400, '2025-09-16 10:13:11', ''),
(7, 1, 1, 'dress', 'very nice', 600, 10, 540, '2025-09-16 10:13:11', ''),
(8, 1, 1, 'top', 'good', 500, 10, 450, '2025-09-16 10:14:06', ''),
(9, 1, 1, 'Samsung mobile ', 'very good mobile', 10000, 10, 9000, '2025-09-16 11:15:07', ''),
(10, 1, 1, 'rtertret', 'fghfgh', 500, 10, 450, '2025-09-18 09:34:57', ''),
(11, 1, 1, 'rtertret', 'gfdgdsg', 500, 10, 450, '2025-09-18 10:12:49', 'upload-images/refresh.webp');

-- --------------------------------------------------------

--
-- Table structure for table `all_services`
--

CREATE TABLE `all_services` (
  `a_id` int(40) NOT NULL,
  `all_service` varchar(200) NOT NULL,
  `price` int(50) NOT NULL,
  `discount_percentage` int(200) NOT NULL,
  `price_after_discount` int(200) NOT NULL,
  `description` varchar(200) DEFAULT NULL,
  `file` varchar(200) NOT NULL,
  `file1` varchar(200) NOT NULL,
  `file2` varchar(200) NOT NULL,
  `service_number` int(100) NOT NULL,
  `c_id_category_service` int(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `all_services`
--

INSERT INTO `all_services` (`a_id`, `all_service`, `price`, `discount_percentage`, `price_after_discount`, `description`, `file`, `file1`, `file2`, `service_number`, `c_id_category_service`) VALUES
(1, 'Samsung mobile', 20000, 10, 18000, 'good', 'upload-images/THUMB_Galaxy-A34-5G-Media-Assets-Thumb.jpg', 'upload-images/THUMB_Galaxy-A34-5G-Media-Assets-Thumb.jpg', 'upload-images/THUMB_Galaxy-A34-5G-Media-Assets-Thumb.jpg', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `banner_management`
--

CREATE TABLE `banner_management` (
  `id` int(40) NOT NULL,
  `file` varchar(300) NOT NULL,
  `content` varchar(200) NOT NULL,
  `buttonName` varchar(200) DEFAULT NULL,
  `buttonLink` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `banner_management`
--

INSERT INTO `banner_management` (`id`, `file`, `content`, `buttonName`, `buttonLink`) VALUES
(2, 'upload-images/hero-9.jpg', 'Skin care studio', 'View Menu', 'https://beautyparlour.ranjeetyadav.in/pprice?c_id=1'),
(3, 'upload-images/slide-1.jpg', 'Unleash your beauty with Demo Beauty Studio', 'View Menu', 'https://beautyparlour.edug.in/pprice?c_id=3'),
(9, 'upload-images/slide-15.jpg', 'Hair Care Studio', 'View Menu', 'https://beautyparlour.edug.in/pprice?c_id=1'),
(13, 'upload-images/slide-3.jpg', 'Make up studio', 'View Menu', NULL),
(30, 'upload-images/makeupp.avif', 'Beauty salon', 'View Menu', 'https://beautyparlour.edug.in/pprice?c_id=2'),
(35, 'upload-images/wallpaper51.jpg', 'Artist', 'demo studio Menu', 'https://beautyparlour.edug.in/pprice?c_id=2'),
(38, 'upload-images/wallpaper71.jpg', 'Artist', 'demo studio Menu', 'https://beautyparlour.edug.in/pprice?c_id=1'),
(45, 'upload-images/slide-2.jpg', 'Stay beautiful', 'demo studio ', 'https://tvssolution.in/');

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `Sno` bigint(50) NOT NULL,
  `appointment_id` int(50) NOT NULL,
  `bill_amount` bigint(50) NOT NULL,
  `discount_percent` int(20) NOT NULL,
  `bill_after_discount` int(20) NOT NULL,
  `adding_gst` int(50) NOT NULL,
  `round_off_bill` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`Sno`, `appointment_id`, `bill_amount`, `discount_percent`, `bill_after_discount`, `adding_gst`, `round_off_bill`) VALUES
(1, 57, 690, 10, 621, 733, 733),
(2, 58, 0, 10, 302, 356, 356),
(5, 63, 770, 10, 693, 818, 818),
(8, 66, 600, 10, 540, 637, 637),
(9, 98, 0, 10, 302, 356, 356);

-- --------------------------------------------------------

--
-- Table structure for table `business_hours`
--

CREATE TABLE `business_hours` (
  `id` int(11) NOT NULL,
  `day` varchar(20) NOT NULL,
  `open_time` time NOT NULL,
  `close_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `business_hours`
--

INSERT INTO `business_hours` (`id`, `day`, `open_time`, `close_time`) VALUES
(1, 'Monday', '03:00:00', '21:00:00'),
(2, 'Tuesday', '13:00:00', '21:00:00'),
(3, 'Wednesday', '11:04:00', '21:00:00'),
(4, 'Thursday', '10:00:00', '19:30:00'),
(5, 'Friday', '10:00:00', '21:00:00'),
(6, 'Saturday', '11:00:00', '17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `category_service`
--

CREATE TABLE `category_service` (
  `c_id` int(40) NOT NULL,
  `c_service` varchar(200) NOT NULL,
  `description` varchar(200) DEFAULT NULL,
  `file` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category_service`
--

INSERT INTO `category_service` (`c_id`, `c_service`, `description`, `file`) VALUES
(1, 'Electronics', 'All electronics products are available here ', 'upload-images/electronics.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry_message`
--

CREATE TABLE `enquiry_message` (
  `id` int(35) NOT NULL,
  `name` varchar(35) NOT NULL,
  `email` varchar(200) NOT NULL,
  `mobile` bigint(35) NOT NULL,
  `message` varchar(40) NOT NULL,
  `status` varchar(40) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `enquiry_message`
--

INSERT INTO `enquiry_message` (`id`, `name`, `email`, `mobile`, `message`, `status`, `created_at`) VALUES
(22, 'pooja', 'pooja@gmail.com', 8899117706, 'hello', 'Pending', '2025-07-01 06:30:58'),
(24, 'Priyanka ', 'priyanka@gmail.com', 8707858489, 'opening time', 'Completed', '2025-09-15 04:13:08');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `customer_id` int(200) NOT NULL,
  `totalPrice` decimal(10,2) NOT NULL,
  `discount` decimal(5,2) NOT NULL,
  `totalAfterDiscount` int(200) NOT NULL,
  `billing_number` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `payment_status` int(6) NOT NULL,
  `delivery_status` varchar(200) NOT NULL,
  `payment_type` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customer_id`, `totalPrice`, `discount`, `totalAfterDiscount`, `billing_number`, `created_at`, `payment_status`, `delivery_status`, `payment_type`) VALUES
(1, 1, 500.00, 10.00, 450, '2345', '2025-09-09 11:26:42', 0, 'delivered', 'cash on delivery'),
(2, 1, 1000.00, 10.00, 900, '4534', '2025-09-13 06:15:14', 1, 'yes', 'cash on delivery');

-- --------------------------------------------------------

--
-- Table structure for table `package1`
--

CREATE TABLE `package1` (
  `id` int(200) NOT NULL,
  `package_name` varchar(200) NOT NULL,
  `package_number` varchar(200) NOT NULL,
  `description` varchar(200) NOT NULL,
  `discount` int(200) NOT NULL,
  `file` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `package1`
--

INSERT INTO `package1` (`id`, `package_name`, `package_number`, `description`, `discount`, `file`) VALUES
(9, 'platinum package ', '328101', 'A haircut, in the most common sense, is the act of cutting and styling hair, usually performed by a barber or stylist', 10, 'upload-images/biolight1.jpg'),
(10, 'Gold package', '305836', 'Permanent color treatment is traditional oxidization color treatment – oxidization refers to the chemical process that makes it possible to alter the color at the core of the hair', 10, 'upload-images/biolight3.jpg'),
(11, 'silver package ', '648184', 'A \"facial\" is a skin treatment designed to cleanse, exfoliate, and hydrate the skin, often targeting specific concerns like acne, wrinkles, or uneven skin tone', 32, 'upload-images/teenfacial3.jpg'),
(13, 'hair package', '774800', 'different styling of hair ', 40, 'upload-images/blowdry1.jpg'),
(19, 'platinum package ', '443441', 'good', 10, 'upload-images/brazillian1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `package_selected`
--

CREATE TABLE `package_selected` (
  `id` int(200) NOT NULL,
  `appointment_id` int(200) DEFAULT NULL,
  `package_name` varchar(200) DEFAULT NULL,
  `package1_id` int(200) DEFAULT NULL,
  `package_number` int(200) DEFAULT NULL,
  `billing_number` int(200) DEFAULT NULL,
  `created_at` timestamp(6) NULL DEFAULT current_timestamp(6),
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `package_services`
--

CREATE TABLE `package_services` (
  `id` int(200) NOT NULL,
  `package_id` int(200) NOT NULL,
  `service_name` varchar(200) NOT NULL,
  `price` int(200) NOT NULL,
  `price_after_discount` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `package_services`
--

INSERT INTO `package_services` (`id`, `package_id`, `service_name`, `price`, `price_after_discount`) VALUES
(1, 9, 'Women s Haircut', 200, 180),
(2, 9, 'Child Hair cut', 200, 180),
(3, 10, 'Hair & Scalp Treatments', 240, 216),
(4, 10, 'Safe Color Treatment', 95, 86),
(5, 11, 'Teen Facial', 200, 136),
(6, 11, 'Herbal Facial', 80, 54),
(7, 12, 'Women s Haircut', 200, 180),
(8, 12, 'Mens haircut', 100, 90),
(9, 12, 'Color Refresh', 130, 117),
(10, 12, 'Single Process', 130, 117),
(11, 13, 'Women s Haircut', 200, 120),
(12, 13, 'Mens haircut', 100, 60),
(13, 13, 'Keratin Complex', 300, 180),
(14, 14, 'Women s Haircut', 200, 60),
(15, 14, 'Child Hair cut', 200, 60),
(16, 14, 'blow dry', 100, 30),
(17, 14, 'Mens haircut', 100, 30),
(18, 15, 'Women s Haircut', 200, 136),
(19, 15, 'Child Hair cut', 200, 136),
(20, 16, 'Women s Haircut', 200, 180),
(21, 16, 'Mens haircut', 100, 90),
(22, 17, 'Women s Haircut', 200, 110),
(23, 17, 'Child Hair cut', 200, 110),
(24, 17, 'blow dry', 100, 55),
(25, 17, 'Mens haircut', 100, 55),
(26, 18, 'Women s Haircut', 200, 186),
(27, 19, 'Women s Haircut', 200, 180),
(28, 19, 'Child Hair cut', 200, 180);

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(60) NOT NULL,
  `file` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id`, `file`) VALUES
(16, 'upload-images/bg-01.jpg'),
(19, 'upload-images/bg-02.jpg'),
(23, 'upload-images/img-11.jpg'),
(24, 'upload-images/img-08.jpg'),
(25, 'upload-images/woman_03.jpg'),
(29, 'upload-images/hair_08.jpg'),
(30, 'upload-images/slide-1.jpg'),
(40, 'upload-images/extensionservice.jpg'),
(41, 'upload-images/blow dry.jpg'),
(42, 'upload-images/full.jpg'),
(44, 'upload-images/brazillian2.jpg'),
(46, 'upload-images/browtint12.jpg'),
(47, 'upload-images/blowdry1.jpg'),
(49, 'upload-images/team-554.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `comment` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `name`, `comment`) VALUES
(8, 'TARA', ' Absolutely loved my experience here! The staff is incredibly friendly, and the ambience is so relaxing. My facial left my skin glowing, and the haircut was just perfect. Highly recommended for anyone'),
(9, 'SHIKHA', ' This beauty parlour is a hidden gem! The hairstylists are experts, and the skincare treatments are amazing. My manicure and pedicure were done with great precision. I always leave feeling refreshed a'),
(10, 'Kavya ', ' Had a fantastic makeover session! The staff took great care in understanding my skin type and recommended the perfect treatment. The results were beyond my expectations. The hygiene standards are exc'),
(11, 'Pari Kapoor', ' I got my bridal makeup done here, and it was absolutely stunning! The makeup artists are professionals who know exactly how to enhance natural beauty. The products used were of high quality, and my l'),
(12, 'DIYA', ' Best beauty parlour I’ve ever visited! The waxing service was painless, and the massage was so relaxing. The atmosphere is clean and soothing. The team is professional and ensures you get the best ca'),
(17, 'POOJA KHATRI', ' service is nice');

-- --------------------------------------------------------

--
-- Table structure for table `staff_designation`
--

CREATE TABLE `staff_designation` (
  `id` int(50) NOT NULL,
  `designation` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staff_designation`
--

INSERT INTO `staff_designation` (`id`, `designation`) VALUES
(1, 'Management'),
(2, 'Hair Stylist'),
(3, 'Makeup-artist'),
(4, 'Nail Artists'),
(20, 'xyz'),
(23, 'abc');

-- --------------------------------------------------------

--
-- Table structure for table `staff_gallery`
--

CREATE TABLE `staff_gallery` (
  `id` int(60) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `file` varchar(200) DEFAULT NULL,
  `staff_designation_id` int(200) DEFAULT NULL,
  `Short_bio` varchar(200) NOT NULL,
  `Experience` varchar(200) NOT NULL,
  `Availability` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staff_gallery`
--

INSERT INTO `staff_gallery` (`id`, `name`, `file`, `staff_designation_id`, `Short_bio`, `Experience`, `Availability`) VALUES
(3, 'shikha', 'upload-images/woman_08.jpg', 1, 'Our talented stylists are dedicated to providing.', '5', '12 am to 5 pm'),
(4, 'divya', 'upload-images/nail_10.jpg', 1, 'Dedicated to enhancing natural beauty through creativity and precision.', '2', '12 am to 5 pm'),
(6, 'pooja', 'upload-images/hair_11.jpg', 1, 'Professional hairstylist specializing in trendy cuts, color, and styling. Known for personalized consultations and transforming hair with care and confidence.', '4', '12 am to 5 pm'),
(8, 'Pari Kapoor', 'upload-images/team-2.jpg', 2, 'Skilled beautician offering a wide range of skincare, facial, and grooming services. Committed to providing relaxing experiences and visible results for every client.', '7', '12 am to 5 pm'),
(9, 'shikha srivastava ', 'upload-images/team-5.jpg', 2, 'Known for personalized consultations and transforming hair with care and confidence.', '8', '12 am to 5 pm'),
(10, 'kavya singh', 'upload-images/team-6.jpg', 2, 'Known for personalized consultations and transforming hair with care and confidence.', '12', '12 am to 5 pm'),
(11, 'Nancy Verma', 'upload-images/team-3.jpg', 2, 'Skilled beautician offering a wide range of skincare, facial, and grooming services. Committed to providing relaxing experiences and visible results for every client.', '10', '12 am to 5 pm'),
(13, 'Diyva Kapoor', 'upload-images/team-8.jpg', 2, 'Dedicated to enhancing natural beauty through creativity and precision.', '15', '12 am to 5 pm'),
(19, 'bhawna', 'upload-images/woman_05.jpg', 3, 'Professional hairstylist specializing in trendy cuts, color, and styling. Known for personalized consultations and transforming hair with care and confidence.', '5', '12 am to 5 pm'),
(21, 'Pratigya Singh', 'upload-images/team-9.jpg', 3, 'Skilled beautician offering a wide range of skincare, facial, and grooming services. Committed to providing relaxing experiences and visible results for every client.', '7', '12 am to 5 pm'),
(25, 'Pari Kapoor', 'upload-images/hair_06.jpg', 3, 'Dedicated to enhancing natural beauty through creativity and precision.', '8', '12 am to 5 pm'),
(29, 'pooja', 'upload-images/banner-1.jpg', 15, 'Dedicated to enhancing natural beauty through creativity and precision.', '9', '12 am to 5 pm'),
(31, 'Pari Kapoor', 'upload-images/beauty_03.jpg', 18, 'Our talented stylists are dedicated to providing.', '15', '12 am to 5 pm'),
(33, 'pooja', 'upload-images/lashtint1.jpg', 20, 'good', '6', '12 am to 5 pm');

-- --------------------------------------------------------

--
-- Table structure for table `sub_category_service`
--

CREATE TABLE `sub_category_service` (
  `s_id` int(40) NOT NULL,
  `s_name` varchar(200) NOT NULL,
  `description` varchar(200) DEFAULT NULL,
  `file` varchar(200) NOT NULL,
  `sub_service` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sub_category_service`
--

INSERT INTO `sub_category_service` (`s_id`, `s_name`, `description`, `file`, `sub_service`) VALUES
(1, 'Mobile', 'All brand of mobiles are available here ', 'upload-images/vivo-mobile-phone-7-38mm-ultra-smooth-body-170g-light-2-5d-adjusted-outline-for-a-great-hold-703.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_about`
--

CREATE TABLE `tb_about` (
  `id` int(40) NOT NULL,
  `page_title` varchar(35) NOT NULL,
  `page_description` varchar(400) NOT NULL,
  `page_content` varchar(400) DEFAULT NULL,
  `page_text` varchar(400) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_about`
--

INSERT INTO `tb_about` (`id`, `page_title`, `page_description`, `page_content`, `page_text`) VALUES
(1, '', '<p>hello hy</p>\r\n', NULL, NULL),
(2, 'Mind, Body and Soul', 'Demo salon where you will feel unique', 'Welcome to our Demo salon, where you’ll experience personalized beauty treatments in a sophisticated and relaxing atmosphere. Our expert team ensures that every visit leaves you feeling unique, pamper', 'Step into our luxury salon, where every detail is crafted to make you feel unique. Experience personalized beauty treatments in an elegant, serene environment. Our expert stylists and beauticians are '),
(3, 'Our Services', 'Feel Yourself More Beautiful', 'Embrace your beauty with our expert treatments, designed to enhance your natural features and make you feel radiant. Rediscover your confidence and step out looking and feeling your absolute best with', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_about_us`
--

CREATE TABLE `tb_about_us` (
  `id` int(200) NOT NULL,
  `page_title` varchar(200) DEFAULT NULL,
  `heading` varchar(200) DEFAULT NULL,
  `file1` varchar(200) DEFAULT NULL,
  `file2` varchar(200) DEFAULT NULL,
  `text_area` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_about_us`
--

INSERT INTO `tb_about_us` (`id`, `page_title`, `heading`, `file1`, `file2`, `text_area`) VALUES
(1, 'About Demo Studio', 'Demo salon where you will feel unique and Free', 'upload-images/hair_06.jpg', 'upload-images/hair_02.jpg', '<p>Welcome to our NIDHI Beauty, where you&rsquo;ll experience personalized beauty treatments in a sophisticated and relaxing atmosphere. Our expert team ensures that every visit leaves you feeling unique, pampered, and confident with exceptional service tailored just for you.Step into our luxury salon, where every detail is crafted to make you feel unique. Experience personalized beauty treatments in an elegant, serene environment. Our expert stylists and beauticians are dedicated to providing you with exceptional service, ensuring that you leave feeling refreshed, rejuvenated, and truly one-of-a-kind.</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tb_appointment`
--

CREATE TABLE `tb_appointment` (
  `id` int(35) NOT NULL,
  `name` varchar(35) NOT NULL,
  `email` varchar(35) NOT NULL,
  `mobile` bigint(35) NOT NULL,
  `address` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `prefered_time` varchar(35) NOT NULL,
  `appointment_for` varchar(35) NOT NULL,
  `staff` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_appointment`
--

INSERT INTO `tb_appointment` (`id`, `name`, `email`, `mobile`, `address`, `date`, `prefered_time`, `appointment_for`, `staff`) VALUES
(4, 'rama', 'rama@gmail.com', 8907843155, 'Hazratganj', '2025-07-30', '09:48', 'offline booking', ''),
(5, 'veronica', 'veronica@gmail.com', 8907843188, 'Hazratganj', '2025-07-16', '10:19', 'offline booking', ''),
(6, 'preetikhatri', 'preeti@gmail.com', 8997843126, 'Alambhag', '2025-07-29', '18:37', 'offline booking', ''),
(7, 'preetikhatri', 'preeti@gmail.com', 8997843126, 'Alambhag', '2025-07-30', '19:39', 'offline booking', ''),
(8, 'priyanka', 'Malhotra@gmail.com', 8907843117, ' RAJAJIPURAM', '2025-08-06', '18:57', 'Hair Services', 'any');

-- --------------------------------------------------------

--
-- Table structure for table `tb_contact_us`
--

CREATE TABLE `tb_contact_us` (
  `id` int(11) NOT NULL,
  `mobile_number` bigint(10) NOT NULL,
  `address` varchar(200) NOT NULL,
  `email_us` varchar(35) NOT NULL,
  `time` varchar(200) NOT NULL,
  `Logo` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_contact_us`
--

INSERT INTO `tb_contact_us` (`id`, `mobile_number`, `address`, `email_us`, `time`, `Logo`) VALUES
(1, 8789090876, ' RAJAJIPURAM', 'h@yourdomain.com', '18:25', 'upload-images/slide-2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_invoice`
--

CREATE TABLE `tb_invoice` (
  `id` int(200) NOT NULL,
  `appointment_id` int(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `mobile` bigint(35) NOT NULL,
  `address` varchar(200) NOT NULL,
  `email` varchar(35) NOT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_invoice`
--

INSERT INTO `tb_invoice` (`id`, `appointment_id`, `name`, `mobile`, `address`, `email`, `date`) VALUES
(1, 3, 'Sneha tondon', 8619858421, 'Alambhag', 's@gmail.com', '2025-07-09'),
(5, 5, 'veronica', 8907843188, 'Hazratganj', 'veronica@gmail.com', '2025-07-16'),
(6, 6, 'preetikhatri', 8997843126, 'Alambhag', 'preeti@gmail.com', '2025-07-29'),
(7, 7, 'preetikhatri', 8997843126, 'Alambhag', 'preeti@gmail.com', '2025-07-30');

-- --------------------------------------------------------

--
-- Table structure for table `tb_selected_services`
--

CREATE TABLE `tb_selected_services` (
  `id` int(11) NOT NULL,
  `appointment_id` int(35) NOT NULL,
  `c_id` int(200) DEFAULT NULL,
  `s_id` int(200) DEFAULT NULL,
  `a_id` int(200) DEFAULT NULL,
  `service_name` varchar(255) NOT NULL,
  `service_price` decimal(10,2) NOT NULL,
  `discount_percentage` int(200) DEFAULT NULL,
  `price_after_discount` int(200) DEFAULT NULL,
  `billing_number` varchar(20) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_services`
--

CREATE TABLE `tb_services` (
  `id` int(35) NOT NULL,
  `service_name` varchar(35) NOT NULL,
  `service_price` bigint(35) NOT NULL,
  `creation_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_services`
--

INSERT INTO `tb_services` (`id`, `service_name`, `service_price`, `creation_date`) VALUES
(30, 'WOMENS HAIR CUT', 3000, '2025-01-09 08:56:11'),
(31, 'CLEAN UP', 200, '2025-03-06 06:00:36'),
(32, 'MANICURE', 3000, '2025-02-15 07:01:40'),
(33, 'LASH APPLICATION', 20, '0000-00-00 00:00:00'),
(34, 'MENS HAIRCUT', 200, '0000-00-00 00:00:00'),
(35, 'FACIAL ', 200, '0000-00-00 00:00:00'),
(36, 'WAXING', 40000, '2025-02-17 06:44:47'),
(37, 'MANICURE', 3000, '2025-02-15 07:01:40'),
(84, 'spa6', 200, '2025-03-06 11:23:41'),
(86, 'spa', 200, '2025-03-10 08:31:39'),
(87, 'spa', 200, '2025-03-10 08:32:08');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(35) NOT NULL,
  `name` varchar(35) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `orders` int(200) NOT NULL,
  `last_order` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Total_spend` bigint(200) NOT NULL,
  `city` varchar(200) NOT NULL,
  `State` varchar(200) NOT NULL,
  `email` varchar(35) NOT NULL,
  `address` varchar(200) NOT NULL,
  `password` varchar(35) NOT NULL,
  `file` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `mobile`, `orders`, `last_order`, `Total_spend`, `city`, `State`, `email`, `address`, `password`, `file`) VALUES
(1, 'Priyanka ', 8707858421, 1, '2025-09-04 10:23:28', 25000, 'Lucknow', 'U.P.', 'priyanka@gmail.com', 'e-2009 Alambhag', '123', 'upload-images/hair_06.jpg'),
(2, 'preeti', 56347855636, 4, '2025-09-04 10:23:24', 5000, 'Lucknow', 'U.P.', 'tondon@gmail.com', 'Rajajipuram ', '7777', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users_notes`
--

CREATE TABLE `users_notes` (
  `id` int(200) NOT NULL,
  `users_id` int(200) NOT NULL,
  `note` longtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users_notes`
--

INSERT INTO `users_notes` (`id`, `users_id`, `note`, `created_at`) VALUES
(28, 2, 'Payment is pending ', '2025-09-09 06:51:14'),
(31, 2, 'customer behaviour is good', '2025-09-09 06:51:14'),
(42, 1, 'payment received on time ', '2025-09-09 06:57:08'),
(44, 1, ' Overall good behavior.', '2025-09-09 06:59:13'),
(45, 2, 'still payment is pending \r\n', '2025-09-09 07:00:01'),
(46, 0, 'dfgdfg', '2025-09-09 07:25:12');

-- --------------------------------------------------------

--
-- Table structure for table `users_wishlist`
--

CREATE TABLE `users_wishlist` (
  `id` int(200) NOT NULL,
  `customer_id` int(200) NOT NULL,
  `Products` varchar(200) NOT NULL,
  `color` varchar(200) NOT NULL,
  `size` varchar(200) NOT NULL,
  `price` varchar(200) NOT NULL,
  `file` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users_wishlist`
--

INSERT INTO `users_wishlist` (`id`, `customer_id`, `Products`, `color`, `size`, `price`, `file`) VALUES
(1, 1, 'Western dress', 'red', '32', '120', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login_details`
--
ALTER TABLE `admin_login_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `all_products`
--
ALTER TABLE `all_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `all_services`
--
ALTER TABLE `all_services`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `banner_management`
--
ALTER TABLE `banner_management`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`Sno`),
  ADD UNIQUE KEY `appointment_id` (`appointment_id`);

--
-- Indexes for table `business_hours`
--
ALTER TABLE `business_hours`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_service`
--
ALTER TABLE `category_service`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `enquiry_message`
--
ALTER TABLE `enquiry_message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package1`
--
ALTER TABLE `package1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package_selected`
--
ALTER TABLE `package_selected`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package_services`
--
ALTER TABLE `package_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff_designation`
--
ALTER TABLE `staff_designation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff_gallery`
--
ALTER TABLE `staff_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_category_service`
--
ALTER TABLE `sub_category_service`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `tb_about`
--
ALTER TABLE `tb_about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_about_us`
--
ALTER TABLE `tb_about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_appointment`
--
ALTER TABLE `tb_appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_contact_us`
--
ALTER TABLE `tb_contact_us`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `tb_invoice`
--
ALTER TABLE `tb_invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_selected_services`
--
ALTER TABLE `tb_selected_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_services`
--
ALTER TABLE `tb_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_notes`
--
ALTER TABLE `users_notes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_wishlist`
--
ALTER TABLE `users_wishlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login_details`
--
ALTER TABLE `admin_login_details`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `all_products`
--
ALTER TABLE `all_products`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `all_services`
--
ALTER TABLE `all_services`
  MODIFY `a_id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `banner_management`
--
ALTER TABLE `banner_management`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `Sno` bigint(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `business_hours`
--
ALTER TABLE `business_hours`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `category_service`
--
ALTER TABLE `category_service`
  MODIFY `c_id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `enquiry_message`
--
ALTER TABLE `enquiry_message`
  MODIFY `id` int(35) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `package1`
--
ALTER TABLE `package1`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `package_selected`
--
ALTER TABLE `package_selected`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `package_services`
--
ALTER TABLE `package_services`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `staff_designation`
--
ALTER TABLE `staff_designation`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `staff_gallery`
--
ALTER TABLE `staff_gallery`
  MODIFY `id` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `sub_category_service`
--
ALTER TABLE `sub_category_service`
  MODIFY `s_id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_about`
--
ALTER TABLE `tb_about`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_about_us`
--
ALTER TABLE `tb_about_us`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_appointment`
--
ALTER TABLE `tb_appointment`
  MODIFY `id` int(35) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_invoice`
--
ALTER TABLE `tb_invoice`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_selected_services`
--
ALTER TABLE `tb_selected_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_services`
--
ALTER TABLE `tb_services`
  MODIFY `id` int(35) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(35) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users_notes`
--
ALTER TABLE `users_notes`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `users_wishlist`
--
ALTER TABLE `users_wishlist`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
