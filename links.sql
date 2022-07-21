-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Июл 20 2022 г., 02:12
-- Версия сервера: 5.7.33-0ubuntu0.16.04.1
-- Версия PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `ifcspdmd_m3`
--

-- --------------------------------------------------------

--
-- Структура таблицы `links`
--

CREATE TABLE `links` (
  `id` int(11) NOT NULL,
  `url` varchar(500) NOT NULL,
  `short_key` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `links`
--

INSERT INTO `links` (`id`, `url`, `short_key`) VALUES
(1, 'http://wsr.ru/index.php', '5Q7P987'),
(2, 'http://wsr.ru/phpmyadmin/index.php?route=/sql&amp;server=1&amp;db=ifcspdmd_m3&amp;table=links&amp;pos=0', '0G9P987'),
(3, 'http://wsr.ru/phpmyadmin/index.php?route=/sql&amp;server=1&amp;db=ifcspdmd_m3&amp;table=links&amp;pos=0', 'JJ9P987'),
(4, 'http://wsr.ru/phpmyadmin/index.php?route=/sql&amp;server=1&amp;db=ifcspdmd_m3&amp;table=links&amp;pos=0', 'QK9P987'),
(5, 'http://wsr.ru/phpmyadmin/index.php?route=/table/sql&amp;db=ifcspdmd_m3&amp;table=links', 'AHQA987'),
(6, 'https://only-to-top.ru/blog/programming/2019-11-06-rest-api-php.html', 'ZRWA987');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `links`
--
ALTER TABLE `links`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `links`
--
ALTER TABLE `links`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
