-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 29 2019 г., 21:54
-- Версия сервера: 5.7.11
-- Версия PHP: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `gbphp`
--

-- --------------------------------------------------------

--
-- Структура таблицы `booking`
--

CREATE TABLE IF NOT EXISTS `booking` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `adres` varchar(200) NOT NULL,
  `msg` varchar(200) NOT NULL,
  `items` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `booking`
--

INSERT INTO `booking` (`id`, `name`, `adres`, `msg`, `items`) VALUES
(1, '111', '22', '333', '{"1":{"price":"200","name":"Товар 1","count":3},"2":{"price":"300","name":"Товар 2","count":5}}'),
(2, '111', '22', '333', '{"1":{"price":"200","name":"Товар 1","count":3},"2":{"price":"300","name":"Товар 2","count":5}}');

-- --------------------------------------------------------

--
-- Структура таблицы `goods`
--

CREATE TABLE IF NOT EXISTS `goods` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `info` varchar(250) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `goods`
--

INSERT INTO `goods` (`id`, `name`, `info`, `price`) VALUES
(1, 'Товар 1', 'Тут информация о товаре 1', 200),
(2, 'Товар 2', 'Тут информация о товаре 2', 300),
(3, 'Товар 3', 'Описание', 230),
(4, 'Товар 4', 'Описание этого товара', 4560);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) NOT NULL,
  `login` varchar(15) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`) VALUES
(1, 'admin', '87bd8892e3b714543d8bb6ca71470fa9'),
(2, 'user', '87bd8892e3b714543d8bb6ca71470fa9'),
(3, '', ''),
(4, '123', '123'),
(7, 'asdasd', 'asd'),
(8, 'asdasd', 'asd'),
(10, 'asdasd', 'asd'),
(11, 'asdasd', 'asd'),
(12, 'guest', '123'),
(13, 'guest', '123'),
(14, 'guest', '123'),
(15, 'guest', '123');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `goods`
--
ALTER TABLE `goods`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `goods`
--
ALTER TABLE `goods`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
