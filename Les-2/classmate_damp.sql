-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Хост: 10.0.0.234:3309
-- Время создания: Ноя 25 2023 г., 21:59
-- Версия сервера: 10.5.18-MariaDB-log
-- Версия PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `pokalnetovps_edu`
--

-- --------------------------------------------------------

--
-- Структура таблицы `classmate`
--

CREATE TABLE `classmate` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `age` tinyint(4) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `classmate`
--

INSERT INTO `classmate` (`id`, `name`, `age`, `address`) VALUES
(1, 'Михаил', 25, 'Курган'),
(2, 'Сергей', 39, 'Екатеринбург'),
(3, 'Иван', 41, 'Вологда'),
(4, 'Николай', 31, 'С.Петербург'),
(5, 'Жанна', 29, 'Ялта'),
(6, 'Александр', 29, 'Сочи'),
(7, 'Юлий', 40, 'Новосибирс');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `classmate`
--
ALTER TABLE `classmate`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `classmate`
--
ALTER TABLE `classmate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
