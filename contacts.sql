-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июл 10 2023 г., 12:43
-- Версия сервера: 8.0.30
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `database_name`
--

-- --------------------------------------------------------

--
-- Структура таблицы `contacts`
--

CREATE TABLE `contacts` (
  `user_name` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_message` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `contacts`
--

INSERT INTO `contacts` (`user_name`, `phone`, `email`, `user_message`) VALUES
('sdgwdwg', '1313131', 'eugeneabramov@mail.ru', 'sdfghsdg'),
('', '', '', ''),
('sdghdsgf', '12312314', 'eugeneabramov@mail.ru', '123123'),
('', '', '', ''),
('sdghdsgf', '12312314', 'eugeneabramov@mail.ru', '123123'),
('', '', '', ''),
('wqeqe', '32131', 'eugeneabramov@mail.ru', 'sdfgsdfg'),
('', '', '', ''),
('wqeqe', '32131', 'eugeneabramov@mail.ru', 'sdfgsdfg'),
('', '', '', ''),
('wqeqe', '32131', 'eugeneabramov@mail.ru', 'sdfgsdfg'),
('', '', '', ''),
('wqeqe', '32131', 'eugeneabramov@mail.ru', 'sdfgsdfg'),
('', '', '', ''),
('dfgsdg', '123124141', '3123123dfg@mail.ru', 'sdfsdf');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
