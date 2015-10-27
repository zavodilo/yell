-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Окт 27 2015 г., 19:27
-- Версия сервера: 5.6.21
-- Версия PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `yell`
--

-- --------------------------------------------------------

--
-- Структура таблицы `authors`
--

CREATE TABLE IF NOT EXISTS `authors` (
  `id` int(11) NOT NULL DEFAULT '0',
  `name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `authors`
--

INSERT INTO `authors` (`id`, `name`) VALUES
(1, 'Автор 1'),
(2, 'Автор 2'),
(3, 'Автор 3'),
(4, '4');

-- --------------------------------------------------------

--
-- Структура таблицы `books`
--

CREATE TABLE IF NOT EXISTS `books` (
  `id` int(11) NOT NULL DEFAULT '0',
  `name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `books`
--

INSERT INTO `books` (`id`, `name`) VALUES
(1, 'Book 1'),
(2, 'Book 2'),
(3, 'Book 3'),
(4, 'Book 4'),
(5, 'Book 5');

-- --------------------------------------------------------

--
-- Структура таблицы `book_to_author`
--

CREATE TABLE IF NOT EXISTS `book_to_author` (
  `book_id` int(11) DEFAULT NULL,
  `author_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `book_to_author`
--

INSERT INTO `book_to_author` (`book_id`, `author_id`) VALUES
(1, 1),
(1, 2),
(2, 1),
(4, 1),
(4, 4);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `authors`
--
ALTER TABLE `authors`
 ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `books`
--
ALTER TABLE `books`
 ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `book_to_author`
--
ALTER TABLE `book_to_author`
 ADD KEY `product_id` (`book_id`), ADD KEY `category_id` (`author_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
