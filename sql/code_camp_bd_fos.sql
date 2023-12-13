-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2023 at 03:50 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `code_camp_bd_fos`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adm_id` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adm_id`, `username`, `password`, `email`) VALUES
(1, 'admin', '123', 'admin@gmai.com');

-- --------------------------------------------------------

--
-- Table structure for table `contract_t`
--

CREATE TABLE `contract_t` (
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` int(11) NOT NULL,
  `message` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contract_t`
--

INSERT INTO `contract_t` (`name`, `email`, `phone`, `message`) VALUES
('koushik', 'koushik101517@gmail.com', 1703375052, 'jooo'),
('shawgat', '1930091@iub.edu.bd', 1571389861, 'I don\'t like php that much'),
('shawgat', '1930091@iub.edu.bd', 1571389861, 'I don\'t like php that much');

-- --------------------------------------------------------

--
-- Table structure for table `dishes`
--

CREATE TABLE `dishes` (
  `d_id` int(11) NOT NULL,
  `rs_id` int(11) NOT NULL,
  `title` varchar(222) NOT NULL,
  `slogan` varchar(222) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `img` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `dishes`
--

INSERT INTO `dishes` (`d_id`, `rs_id`, `title`, `slogan`, `price`, `img`) VALUES
(1, 1, 'Yorkshire Lamb Patties', 'Lamb patties which melt in your mouth, and are quick and easy to make. Served hot with a crisp salad.', '14.00', '62908867a48e4.jpg'),
(2, 1, 'Lobster Thermidor', 'Lobster Thermidor is a French dish of lobster meat cooked in a rich wine sauce, stuffed back into a lobster shell, and browned.', '36.00', '629089fee52b9.jpg'),
(3, 4, 'Chicken Madeira', 'Chicken Madeira, like Chicken Marsala, is made with chicken, mushrooms, and a special fortified wine. But, the wines are different;', '23.00', '62908bdf2f581.jpg'),
(4, 1, 'Stuffed Jacket Potatoes', 'Deep fry whole potatoes in oil for 8-10 minutes or coat each potato with little oil. Mix the onions, garlic, tomatoes and mushrooms. Add yoghurt, ginger, garlic, chillies, coriander', '8.00', '62908d393465b.jpg'),
(5, 2, 'Pink Spaghetti Gamberoni', 'Spaghetti with prawns in a fresh tomato sauce. This dish originates from Southern Italy and with the combination of prawns, garlic, chilli and pasta. Garnish each with remaining tablespoon parsley.', '21.00', '606d7491a9d13.jpg'),
(6, 2, 'Cheesy Mashed Potato', 'Deliciously Cheesy Mashed Potato. The ultimate mash for your Thanksgiving table or the perfect accompaniment to vegan sausage casserole. Everyone will love it\'s fluffy, cheesy.', '5.00', '606d74c416da5.jpg'),
(7, 2, 'Crispy Chicken Strips', 'Fried chicken strips, served with special honey mustard sauce.', '8.00', '606d74f6ecbbb.jpg'),
(8, 2, 'Lemon Grilled Chicken And Pasta', 'Marinated rosemary grilled chicken breast served with mashed potatoes and your choice of pasta.', '11.00', '606d752a209c3.jpg'),
(9, 3, 'Vegetable Fried Rice', 'Chinese rice wok with cabbage, beans, carrots, and spring onions.', '5.00', '606d7575798fb.jpg'),
(10, 3, 'Prawn Crackers', '12 pieces deep-fried prawn crackers', '7.00', '606d75a7e21ec.jpg'),
(11, 3, 'Spring Rolls', 'Lightly seasoned shredded cabbage, onion and carrots, wrapped in house made spring roll wrappers, deep fried to golden brown.', '6.00', '606d75ce105d0.jpg'),
(12, 3, 'Manchurian Chicken', 'Chicken pieces slow cooked with spring onions in our house made manchurian style sauce.', '11.00', '606d7600dc54c.jpg'),
(13, 4, ' Buffalo Wings', 'Fried chicken wings tossed in spicy Buffalo sauce served with crisp celery sticks and Blue cheese dip.', '11.00', '606d765f69a19.jpg'),
(14, 4, 'Mac N Cheese Bites', 'Served with our traditional spicy queso and marinara sauce.', '9.00', '606d768a1b2a1.jpg'),
(15, 4, 'Signature Potato Twisters', 'Spiral sliced potatoes, topped with our traditional spicy queso, Monterey Jack cheese, pico de gallo, sour cream and fresh cilantro.', '6.00', '606d76ad0c0cb.jpg'),
(16, 4, 'Meatballs Penne Pasta', 'Garlic-herb beef meatballs tossed in our house-made marinara sauce and penne pasta topped with fresh parsley.', '10.00', '606d76eedbb99.jpg'),
(17, 2, 'Burger', 'Delecious', '5.00', 'dishes/food1.png');

-- --------------------------------------------------------

--
-- Table structure for table `order_t`
--

CREATE TABLE `order_t` (
  `o.id` int(20) NOT NULL,
  `title` varchar(50) NOT NULL,
  `price` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_t`
--

INSERT INTO `order_t` (`o.id`, `title`, `price`) VALUES
(2, 'abcd', '20'),
(3, 'Chicken Madeira', '23'),
(4, 'Lobster Thermidor', '36'),
(5, 'Chicken Madeira', '23'),
(6, 'Lobster Thermidor', '36'),
(7, 'Lobster Thermidor', '36'),
(8, 'Chicken Madeira', '23'),
(9, 'Yorkshire Lamb Patties', '14'),
(10, 'Chicken Madeira', '23'),
(11, 'Chicken Madeira', '23'),
(12, 'Chicken Madeira', '23'),
(13, 'Chicken Madeira', '23'),
(14, 'Pink Spaghetti Gamberoni', '21'),
(15, 'Chicken Madeira', '23'),
(16, 'Chicken Madeira', '23'),
(17, 'Chicken Madeira', '23'),
(18, 'Lobster Thermidor', '36'),
(19, 'Chicken Madeira', '23'),
(20, 'Cheesy Mashed Potato', '5');

-- --------------------------------------------------------

--
-- Table structure for table `remark`
--

CREATE TABLE `remark` (
  `id` int(11) NOT NULL,
  `frm_id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `remark` mediumtext NOT NULL,
  `remarkDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `remark`
--

INSERT INTO `remark` (`id`, `frm_id`, `status`, `remark`, `remarkDate`) VALUES
(16, 23, 'in process', 'within 10 min', '2023-08-17 04:36:19'),
(17, 24, 'closed', 'done', '2023-08-17 04:37:39');

-- --------------------------------------------------------

--
-- Table structure for table `restaurant`
--

CREATE TABLE `restaurant` (
  `rs_id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `title` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `phone` varchar(222) NOT NULL,
  `url` varchar(222) NOT NULL,
  `o_hr` varchar(222) NOT NULL,
  `c_hr` varchar(222) NOT NULL,
  `o_days` varchar(222) NOT NULL,
  `address` text NOT NULL,
  `image` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `restaurant`
--

INSERT INTO `restaurant` (`rs_id`, `c_id`, `title`, `email`, `phone`, `url`, `o_hr`, `c_hr`, `o_days`, `address`, `image`, `date`) VALUES
(7, 0, 'North Street Tavern', 'NorthStreetTavern@gmail.com', '123456', '', '8.00 AM', '10.00PM', '', ' H Block,Bashundhara R/A', 'Res_img/6290af6f81887.jpg', '2023-08-30 08:11:17'),
(8, 0, 'Eataly', 'eataly@gmail.com', '123456', '', '8.00 AM', '10.00PM', '', ' G Block,Bashundhara R/A', 'Res_img/606d720b5fc71.jpg', '2023-08-30 08:12:07'),
(9, 0, 'KFC', 'kfc@gmail.com', '123456', '', '8.00 AM', '10.00PM', '', ' I Block,Bashundhara R/A', 'Res_img/6290860e72d1e.jpg', '2023-08-30 08:12:40'),
(10, 0, 'Bar & Grill', 'bar&grill@gmail.com', '123456', '', '8.00 AM', '10.00PM', '', ' A Block,Bashundhara R/A', 'Res_img/6290877b473ce.jpg', '2023-08-30 08:13:34'),
(12, 0, 'Kacchi Vai', 'kacchi@gmail.com', '01703375052', '', '8.00 AM', '10.00 PM', '', 'Bashundhara R/A ', 'Res_img/6290860e72d1e.jpg', '2023-08-30 20:32:55');

-- --------------------------------------------------------

--
-- Table structure for table `res_category`
--

CREATE TABLE `res_category` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(222) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `res_category`
--

INSERT INTO `res_category` (`c_id`, `c_name`, `date`) VALUES
(1, 'Continental', '2022-05-27 08:07:35'),
(2, 'Italian', '2021-04-07 08:45:23'),
(3, 'Chinese', '2021-04-07 08:45:25'),
(4, 'American', '2021-04-07 08:45:28');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `u_id` int(11) NOT NULL,
  `username` varchar(222) NOT NULL,
  `f_name` varchar(222) NOT NULL,
  `l_name` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `phone` varchar(222) NOT NULL,
  `password` varchar(222) NOT NULL,
  `address` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `username`, `f_name`, `l_name`, `email`, `phone`, `password`, `address`, `status`, `date`) VALUES
(1, 'shawgat17', 'Shawgat', 'alrazi', '1930091@iub.edu.bd', '01571389861', '123', 'Bashundhara R/A', 1, '2023-12-11 19:05:07'),
(2, 'himu15', 'Khademul', 'islam', '1921717@iub.edu.bd', '01768474489', '123', 'Bashundhara R/A', 1, '2023-12-11 19:04:34'),
(12, 'shakib75', 'shakib', 'al hasan', 'shakib@gmail.com', '0911123669', '123', 'Bashundhara R/A', 1, '2023-08-30 20:22:58'),
(13, 'Washik12', 'Washik', 'alrazi', 'washik123@gmail.com', '01726640024', '123', 'H block', 1, '2023-12-12 18:31:17');

-- --------------------------------------------------------

--
-- Table structure for table `users_orders`
--

CREATE TABLE `users_orders` (
  `o_id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `title` varchar(222) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `status` varchar(222) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users_orders`
--

INSERT INTO `users_orders` (`o_id`, `u_id`, `title`, `quantity`, `price`, `status`, `date`) VALUES
(23, 9, 'Pink Spaghetti Gamberoni', 1, '21.00', 'in process', '2023-08-17 04:36:19'),
(24, 10, 'Yorkshire Lamb Patties', 2, '14.00', 'closed', '2023-08-17 04:37:39'),
(25, 11, 'Stuffed Jacket Potatoes', 0, '8.00', NULL, '2023-08-30 20:15:08'),
(26, 11, 'Cheesy Mashed Potato', 0, '5.00', NULL, '2023-08-30 20:15:08'),
(27, 12, 'Pink Spaghetti Gamberoni', 0, '21.00', NULL, '2023-08-30 20:25:39'),
(28, 12, 'Vegetable Fried Rice', 0, '5.00', NULL, '2023-08-30 20:25:39'),
(29, 12, 'Chicken Madeira', 0, '23.00', NULL, '2023-12-11 17:44:44'),
(30, 12, 'Chicken Madeira', 0, '23.00', NULL, '2023-12-11 17:44:48'),
(31, 1, 'Lobster Thermidor', 0, '36.00', NULL, '2023-12-11 22:02:05'),
(32, 1, 'Chicken Madeira', 0, '23.00', NULL, '2023-12-11 22:02:05'),
(33, 1, 'Pink Spaghetti Gamberoni', 0, '21.00', NULL, '2023-12-11 22:02:05'),
(34, 1, 'Lobster Thermidor', 0, '36.00', NULL, '2023-12-11 22:02:08'),
(35, 1, 'Chicken Madeira', 0, '23.00', NULL, '2023-12-11 22:02:08'),
(36, 1, 'Pink Spaghetti Gamberoni', 0, '21.00', NULL, '2023-12-11 22:02:08'),
(37, 1, 'Lobster Thermidor', 0, '36.00', NULL, '2023-12-12 16:52:13'),
(38, 1, 'Cheesy Mashed Potato', 0, '5.00', NULL, '2023-12-12 16:52:13'),
(39, 1, 'Lobster Thermidor', 0, '36.00', NULL, '2023-12-12 19:56:03'),
(40, 1, 'Chicken Madeira', 0, '23.00', NULL, '2023-12-12 19:56:03'),
(41, 1, 'Lobster Thermidor', 0, '36.00', NULL, '2023-12-12 19:56:40'),
(42, 1, 'Chicken Madeira', 0, '23.00', NULL, '2023-12-12 19:56:40'),
(43, 1, 'Meatballs Penne Pasta', 0, '10.00', NULL, '2023-12-12 19:56:40'),
(44, 1, 'Burger', 0, '5.00', NULL, '2023-12-12 19:56:40'),
(45, 0, 'Spring Rolls', 0, '6.00', NULL, '2023-12-12 22:25:38'),
(46, 0, 'Prawn Crackers', 0, '7.00', NULL, '2023-12-12 22:25:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adm_id`);

--
-- Indexes for table `dishes`
--
ALTER TABLE `dishes`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `order_t`
--
ALTER TABLE `order_t`
  ADD PRIMARY KEY (`o.id`);

--
-- Indexes for table `remark`
--
ALTER TABLE `remark`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `restaurant`
--
ALTER TABLE `restaurant`
  ADD PRIMARY KEY (`rs_id`);

--
-- Indexes for table `res_category`
--
ALTER TABLE `res_category`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `users_orders`
--
ALTER TABLE `users_orders`
  ADD PRIMARY KEY (`o_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adm_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `dishes`
--
ALTER TABLE `dishes`
  MODIFY `d_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `order_t`
--
ALTER TABLE `order_t`
  MODIFY `o.id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `remark`
--
ALTER TABLE `remark`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `restaurant`
--
ALTER TABLE `restaurant`
  MODIFY `rs_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `res_category`
--
ALTER TABLE `res_category`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users_orders`
--
ALTER TABLE `users_orders`
  MODIFY `o_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
