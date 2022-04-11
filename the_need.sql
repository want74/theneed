-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 24, 2022 at 02:30 AM
-- Server version: 5.6.38
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `the_need`
--

-- --------------------------------------------------------

--
-- Table structure for table `store`
--

CREATE TABLE `store` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `adress` varchar(50) NOT NULL,
  `time` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `store`
--

INSERT INTO `store` (`id`, `title`, `adress`, `time`, `phone`) VALUES
(1101, 'У Петровича', '​Тимирязева, 53а', 'Сегодня c 06:00 до 19:00', '89142728891'),
(1102, 'Инкотрейд', 'Чернышевского, 66 ст22', 'Сегодня c 09:00 до 18:00', '+7 (4112) 47‒31‒10'),
(1201, 'Амбаръ', 'Автодорожная, 11/6а', 'Сегодня c 09:00 до 20:00', '+7‒914‒221‒71‒95'),
(1202, 'Авангард', '​Ксенофонта Уткина, 4', 'Сегодня c 09:00 до 18:00', '+7‒914‒270‒12‒12'),
(2101, 'Успех', '​Лизы Чайкиной, 9', 'Круглосуточно', '+7 (4112) 35‒18‒68'),
(2102, 'Сладкая планета', '​Чернышевского, 66 ст12', 'Сегодня c 09:30 до 17:00', '+7 (4112) 35‒18‒68'),
(2201, 'Ярче', 'Автодорожная, 13а', 'Ежедневно с 08:00 до 22:00', '+7‒924‒876‒70‒43'),
(2202, 'Зея', '​Автодорожная, 3/8 к2', 'Сегодня c 09:00 до 18:00', '89142728891'),
(3101, 'Маяк', '​Тимирязева, 35', 'Ежедневно с 09:00 до 24:00', '+79644215592'),
(3102, 'ТКД', '​Чернышевского, 66 ст16', 'Сегодня c 09:00 до 18:00', '+7 (4112) 47‒33‒04'),
(3201, 'ЛиДи', '​Автодорожная, 13/1ж', 'Ежедневно с 08:00 до 22:00', '+7‒924‒661‒71‒01'),
(3202, 'Добрый', '​Автодорожная, 3/8 к1,', 'Сегодня c 09:00 до 18:00', '+7‒929‒469‒99‒95'),
(4101, 'Вива', '​Байкалова, 22', 'Ежедневно с 08:00 до 22:00', '+7 (4112) 35‒18‒68'),
(4102, 'Аким', 'Чернышевского, 66 ст57', 'Сегодня c 09:00 до 18:00', '+7 (4112) 35‒85‒46'),
(4201, 'Своя копейка', 'Автодорожная, 19/1в', 'Ежедневно с 09:00 до 21:00', '+7 (4112) 35‒18‒68'),
(4202, 'Артком', 'Автодорожная, 3/8', 'Сегодня c 09:00 до 18:00', '+7‒924‒663‒84‒41'),
(5102, 'Анна', 'Чернышевского, 66 ст40', 'Сегодня c 09:00 до 18:00', '+7‒914‒270‒32‒05'),
(6102, 'Темп', '​Чернышевского, 66 ст41', 'Сегодня c 09:00 до 17:00', '+7‒924‒174‒66‒66'),
(7102, 'Дуэт', '​Чернышевского, 66 ст35', 'Сегодня c 09:00 до 18:00', '+7 (4112) 32‒17‒79');

-- --------------------------------------------------------

--
-- Table structure for table `tovars`
--

CREATE TABLE `tovars` (
  `id` int(10) NOT NULL,
  `img` varchar(50) NOT NULL,
  `title` varchar(20) NOT NULL,
  `price` varchar(10) NOT NULL,
  `number` varchar(10) NOT NULL,
  `store_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tovars`
--

INSERT INTO `tovars` (`id`, `img`, `title`, `price`, `number`, `store_id`) VALUES
(2, 'img/moloko.svg', 'МОЛОКО пастеризованн', '118 рублей', '48 ', 1101),
(3, 'img/sahar.svg', 'САХАР, 5 кг', '118 рублей', '0', 1101),
(4, 'img/muka.svg', 'МУКА, 50 кг', '118 рублей', '15', 1101),
(5, 'img/grechka.svg', 'ГРЕЧКА, непрогаренна', '118 рублей', ' 143', 1101),
(6, 'img/ovs.svg', 'ГЕРКУЛЕС, овсянка', '118 рублей', '0', 1101),
(7, 'img/krupa.svg', 'РИС, крупа', '118 рублей', '0', 1101),
(8, 'img/moloko.svg', 'МОЛОКО пастеризованн', '101 рублей', '33', 1102),
(9, 'img/sahar.svg', 'САХАР, 5 кг', '67 рублей ', '20', 1102),
(40, 'img/krupa.svg', 'РИС, крупа', '60 рублей', '12', 1102),
(41, 'img/moloko.svg', 'МОЛОКО пастеризованн', '18 рублей', '48 ', 1201),
(42, 'img/sahar.svg', 'САХАР, 5 кг', '108 рублей', '30', 1201),
(43, 'img/muka.svg', 'МУКА, 50 кг', '181 рублей', '20', 1201),
(44, 'img/grechka.svg', 'ГРЕЧКА, непрогаренна', '110 рублей', '10', 1202),
(45, 'img/ovs.svg', 'ГЕРКУЛЕС, овсянка', '80 рублей', '12', 1202),
(46, 'img/krupa.svg', 'РИС, крупа', '70 рублей', '14', 1202),
(47, 'img/ovs.svg', 'ГЕРКУЛЕС, овсянка', '58 рублей', '13', 2101),
(48, 'img/krupa.svg', 'РИС, крупа', '48 рублей', '12', 2101),
(49, 'img/moloko.svg', 'МОЛОКО пастеризованн', '71 рублей', '11', 2101),
(50, 'img/ovs.svg', 'ГЕРКУЛЕС, овсянка', '68 рублей', '13', 2102),
(51, 'img/krupa.svg', 'РИС, крупа', '38 рублей', '102', 2102),
(52, 'img/moloko.svg', 'МОЛОКО пастеризованн', '78 рублей', '101', 2102),
(53, 'img/sahar.svg', 'САХАР, 5 кг', '112 рублей', '0', 2201),
(54, 'img/muka.svg', 'МУКА, 50 кг', '105 рублей', '51', 2201),
(55, 'img/grechka.svg', 'ГРЕЧКА, непрогаренна', '112 рублей', '43', 2201),
(56, 'img/sahar.svg', 'САХАР, 5 кг', '69 рублей ', '21', 2202),
(57, 'img/krupa.svg', 'РИС, крупа', '60 рублей', '12', 2202),
(58, 'img/moloko.svg', 'МОЛОКО пастеризованн', '30 рублей', '41', 2202),
(59, 'img/sahar.svg', 'САХАР, 5 кг', '70 рублей ', '49', 3101),
(60, 'img/krupa.svg', 'РИС, крупа', '50 рублей', '12', 3101),
(61, 'img/moloko.svg', 'МОЛОКО пастеризованн', '40 рублей', '4', 3101);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `phone`, `name`, `password`) VALUES
(1, '89142728891', 'ListraiD', '1234'),
(2, '89243607067', 'Милена', '1234'),
(3, '', 'Инесса', '123'),
(4, '89243607067', 'Крылов Николай', '123'),
(5, '1213', 'Милена', 'фыв');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `store`
--
ALTER TABLE `store`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tovars`
--
ALTER TABLE `tovars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `store`
--
ALTER TABLE `store`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7103;

--
-- AUTO_INCREMENT for table `tovars`
--
ALTER TABLE `tovars`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
