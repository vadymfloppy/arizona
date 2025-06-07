-- phpMyAdmin SQL Dump
-- version 4.4.15.10
-- https://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Апр 10 2025 г., 00:48
-- Версия сервера: 5.5.68-MariaDB
-- Версия PHP: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `t_base`
--

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `title` varchar(128) NOT NULL,
  `content` text NOT NULL,
  `image` text NOT NULL,
  `url_video` varchar(128) NOT NULL,
  `commend` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
  `id` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `server_id` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `price` varchar(32) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `servers`
--

CREATE TABLE IF NOT EXISTS `servers` (
  `id` int(11) NOT NULL,
  `server_name` varchar(32) NOT NULL,
  `server_ip` varchar(25) NOT NULL,
  `group_vk_url` varchar(32) NOT NULL,
  `db_host` varchar(16) NOT NULL,
  `db_user` varchar(32) NOT NULL,
  `db_password` varchar(32) NOT NULL,
  `db_name` varchar(16) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `servers`
--

INSERT INTO `servers` (`id`, `server_name`, `server_ip`, `group_vk_url`, `db_host`, `db_user`, `db_password`, `db_name`, `status`) VALUES
(1, 'Swag', ' 185.71.65.56:7777', 'https://vk.com/arz_swag', '', '', '', '', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `shop`
--

CREATE TABLE IF NOT EXISTS `shop` (
  `id` int(11) NOT NULL,
  `packet_type` int(11) NOT NULL,
  `packet_url` text NOT NULL,
  `packet_name` varchar(32) NOT NULL,
  `packet_sum` int(11) NOT NULL,
  `packet_economy` int(11) NOT NULL,
  `packet_admins` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `shop`
--

INSERT INTO `shop` (`id`, `packet_type`, `packet_url`, `packet_name`, `packet_sum`, `packet_economy`, `packet_admins`, `price`, `status`) VALUES
(1, 1, '/public/img/shop/shop-packet-5.png', 'Нимб, киоск и лейка', 30000000, 30000000, 0, 1499, 1),
(2, 1, '/public/img/shop/shop-packet-1.png', 'Администратор 1 LVL', 30000000, 100000, 0, 2499, 1),
(3, 0, '/public/img/shop/cash-1.png', 'Тестовая покупка', 5000000, 1000000, 0, 100, 1),
(4, 2, '/public/img/shop/admin-3.png', 'Администратор 10 LVL', 0, 0, 10, 299, 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `servers`
--
ALTER TABLE `servers`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `shop`
--
ALTER TABLE `shop`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `servers`
--
ALTER TABLE `servers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT для таблицы `shop`
--
ALTER TABLE `shop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
