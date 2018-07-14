-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 19 2017 г., 11:02
-- Версия сервера: 5.5.50
-- Версия PHP: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `collage`
--

-- --------------------------------------------------------

--
-- Структура таблицы `books`
--

CREATE TABLE IF NOT EXISTS `books` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `book` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `carousel`
--

CREATE TABLE IF NOT EXISTS `carousel` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `short` text NOT NULL,
  `text` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `carousel`
--

INSERT INTO `carousel` (`id`, `title`, `short`, `text`, `image`) VALUES
(7, 'O''quv yeg''ini FVV', 'Toshkent Bank Hisob Kollejida FVV tomonidan o''quv yeg''ini o''tkazildi', 'Toshkent Bank Hisob Kollejida Favqulotda vaziyatlar vazirligi tomonidan o''quv yeg''ini o''tkazildi', '1489316050.jpeg'),
(8, ' I.A. Karimov', 'Kollejda birinchi prizidentimiz I.A. Karimovga bag''ishlangan video o''quvchilarga havola etildi', 'Kollejda birinchi prizidentimiz I.A. Karimovga bag''ishlangan video o''quvchilarga havola etildi', '1489316195.jpeg'),
(9, 'Kollejda o''qituvchilar kengashi', 'Yangi o''quv yili boshlanishi munosabati bilan o''qituvchilar kengashi o''tkazildi', 'Yangi o''quv yili boshlanishi munosabati bilan o''qituvchilar kengashi o''tkazildi', '1489316303.jpeg');

-- --------------------------------------------------------

--
-- Структура таблицы `galery`
--

CREATE TABLE IF NOT EXISTS `galery` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `short` text NOT NULL,
  `text` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `title`, `short`, `text`, `image`) VALUES
(1, 'Yangi o''quv yili boshlanishi munosabati bilan o''qituvchilar kengashi o''tkazildi', 'Bank hisob kollejida yangi o''quv yili boshlanishi munosabati bilan o''qituvchilar kengashi o''tkazildi. Kengashda ko''plab dolzarb masalalar ko''rib chiqildi...', 'Bank hisob kollejida yangi o''quv yili boshlanishi munosabati bilan o''qituvchilar kengashi o''tkazildi. Kengashda ko''plab dolzarb masalalar ko''rib chiqildi. ', '1489316503.jpeg'),
(2, 'Navoiyhonlik kechasi', 'Kollejda Alisher Navoiy tavalludiga bag''ishlab Navoiyhonlik kechasi o''tkizildi...', 'Kollejda Alisher Navoiy tavalludiga bag''ishlab Navoiyhonlik kechasi o''tkizildi. Tadbirda taniqli san''atkorlar va kollej talabalari o''zlarining chiqishlari bilan ishtirok etishdi.', '1489316851.jpeg'),
(3, 'Aql charhi', 'Kollejda "Aql charhi" mavzusida Shahmat Shashka musobaqasi o''tkazildi...', 'Kollejda "Aql charhi" mavzusida Shahmat Shashka musobaqasi o''tkazildi. Musobaqa juda qizg''in o''tdi va yakunda 3 - bosqish talabasi Abdumo''minov Murodjon 1 - o''rin sohibi bo''ldi', '1489317177.jpeg');

-- --------------------------------------------------------

--
-- Структура таблицы `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `short` text NOT NULL,
  `text` text NOT NULL,
  `file` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `posts`
--

INSERT INTO `posts` (`id`, `name`, `surname`, `city`, `email`, `short`, `text`, `file`) VALUES
(1, 'a.sa.,sd', 'asdasd asd a', 'a sdasd asd ', 'asdasd@mail.co', 'asdasdasdaskjdn aksjdn ', 'kj ansdjkasn kdnasjkd naskjd ansdjk ', 'admin/post_files/1489315390.vnd.openxmlformats-officedocument.wordprocessingml.document');

-- --------------------------------------------------------

--
-- Структура таблицы `spirituality`
--

CREATE TABLE IF NOT EXISTS `spirituality` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `short` text NOT NULL,
  `text` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `teachers`
--

CREATE TABLE IF NOT EXISTS `teachers` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `surname` varchar(100) NOT NULL,
  `position` varchar(255) NOT NULL,
  `accept_time` varchar(100) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `email` varchar(100) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `email`, `login`, `password`) VALUES
(1, 'Muhammadali', 'Yuldashev', 'muhammadali8767@gmail.com', 'muhammadali', '6057cfe38c989cf8e0c21a2e0e87ba43'),
(7, 'axad', 'axad', 'axad@mail.com', 'axad', '20dd75917bd7130dde18cedc8107762f');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `carousel`
--
ALTER TABLE `carousel`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `galery`
--
ALTER TABLE `galery`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `spirituality`
--
ALTER TABLE `spirituality`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `teachers`
--
ALTER TABLE `teachers`
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
-- AUTO_INCREMENT для таблицы `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `carousel`
--
ALTER TABLE `carousel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT для таблицы `galery`
--
ALTER TABLE `galery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `spirituality`
--
ALTER TABLE `spirituality`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
