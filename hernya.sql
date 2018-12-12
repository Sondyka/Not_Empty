-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Час створення: Гру 12 2018 р., 22:47
-- Версія сервера: 10.1.31-MariaDB
-- Версія PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База даних: `hernya`
--

-- --------------------------------------------------------

--
-- Структура таблиці `audience`
--

CREATE TABLE `audience` (
  `id_audience` int(11) NOT NULL,
  `audience_number` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп даних таблиці `audience`
--

INSERT INTO `audience` (`id_audience`, `audience_number`) VALUES
(1, '514'),
(2, '336'),
(3, '103'),
(4, '157'),
(5, '279');

-- --------------------------------------------------------

--
-- Структура таблиці `comexcel`
--

CREATE TABLE `comexcel` (
  `id_row` int(11) NOT NULL,
  `id_cell` int(11) NOT NULL,
  `value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп даних таблиці `comexcel`
--

INSERT INTO `comexcel` (`id_row`, `id_cell`, `value`) VALUES
(1, 1, '???????? ????????????? ? ?????????? ???????*'),
(1, 2, ' ??'),
(1, 3, '3'),
(1, 4, '26'),
(1, 5, '?'),
(1, 6, '1'),
(1, 7, '1/2'),
(2, 1, '???????? ????????????? ? ?????????? ???????*'),
(2, 2, ' ??'),
(2, 3, '3'),
(2, 4, '10'),
(2, 5, '?'),
(2, 6, '1'),
(2, 7, '1'),
(3, 1, '???????? ???????? ??????-????????? ??????*'),
(3, 2, '??'),
(3, 3, '2'),
(3, 4, '22'),
(3, 5, '?'),
(3, 6, '1'),
(3, 7, '1/2'),
(1, 1, '???????? ????????????? ? ?????????? ???????*'),
(1, 2, ' ??'),
(1, 3, '3'),
(1, 4, '26'),
(1, 5, '?'),
(1, 6, '1'),
(1, 7, '1/2'),
(2, 1, '???????? ????????????? ? ?????????? ???????*'),
(2, 2, ' ??'),
(2, 3, '3'),
(2, 4, '10'),
(2, 5, '?'),
(2, 6, '1'),
(2, 7, '1'),
(3, 1, '???????? ???????? ??????-????????? ??????*'),
(3, 2, '??'),
(3, 3, '2'),
(3, 4, '22'),
(3, 5, '?'),
(3, 6, '1'),
(3, 7, '1/2'),
(1, 1, '???????? ????????????? ? ?????????? ???????*'),
(1, 2, ' ??'),
(1, 3, '3'),
(1, 4, '26'),
(1, 5, '?'),
(1, 6, '1'),
(1, 7, '1/2'),
(2, 1, '???????? ????????????? ? ?????????? ???????*'),
(2, 2, ' ??'),
(2, 3, '3'),
(2, 4, '10'),
(2, 5, '?'),
(2, 6, '1'),
(2, 7, '1'),
(3, 1, '???????? ???????? ??????-????????? ??????*'),
(3, 2, '??'),
(3, 3, '2'),
(3, 4, '22'),
(3, 5, '?'),
(3, 6, '1'),
(3, 7, '1/2'),
(1, 1, '???????? ????????????? ? ?????????? ???????*'),
(1, 2, ' ??'),
(1, 3, '3'),
(1, 4, '26'),
(1, 5, '?'),
(1, 6, '1'),
(1, 7, '1/2'),
(2, 1, '???????? ????????????? ? ?????????? ???????*'),
(2, 2, ' ??'),
(2, 3, '3'),
(2, 4, '10'),
(2, 5, '?'),
(2, 6, '1'),
(2, 7, '1'),
(3, 1, '???????? ???????? ??????-????????? ??????*'),
(3, 2, '??'),
(3, 3, '2'),
(3, 4, '22'),
(3, 5, '?'),
(3, 6, '1'),
(3, 7, '1/2'),
(1, 1, '???????? ????????????? ? ?????????? ???????*'),
(1, 2, ' ??'),
(1, 3, '3'),
(1, 4, '26'),
(1, 5, '?'),
(1, 6, '1'),
(1, 7, '1/2'),
(2, 1, '???????? ????????????? ? ?????????? ???????*'),
(2, 2, ' ??'),
(2, 3, '3'),
(2, 4, '10'),
(2, 5, '?'),
(2, 6, '1'),
(2, 7, '1'),
(3, 1, '???????? ???????? ??????-????????? ??????*'),
(3, 2, '??'),
(3, 3, '2'),
(3, 4, '22'),
(3, 5, '?'),
(3, 6, '1'),
(3, 7, '1/2');

-- --------------------------------------------------------

--
-- Структура таблиці `commonheadline`
--

CREATE TABLE `commonheadline` (
  `item` text NOT NULL,
  `id_item` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Структура таблиці `excel`
--

CREATE TABLE `excel` (
  `id_row` int(11) NOT NULL,
  `value` text NOT NULL,
  `num_sem` int(11) NOT NULL,
  `id_cell` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп даних таблиці `excel`
--

INSERT INTO `excel` (`id_row`, `value`, `num_sem`, `id_cell`) VALUES
(1, '46', 1, 1),
(1, '28', 1, 3),
(1, '3', 1, 6),
(1, '2', 1, 13),
(1, '46', 2, 1),
(1, '28', 2, 3),
(1, '1', 2, 6),
(1, '2', 2, 7),
(1, '39', 2, 12),
(1, '9', 2, 14),
(2, '16', 1, 1),
(2, '2', 1, 6),
(2, '2', 1, 13),
(2, '4', 2, 1),
(2, '12', 2, 3),
(2, '2', 2, 7),
(2, '27', 2, 12),
(2, '3', 2, 14),
(3, '32', 1, 1),
(3, '56', 1, 3),
(3, '2', 1, 6),
(3, '2', 1, 13),
(3, '32', 2, 1),
(3, '56', 2, 3),
(3, '2', 2, 6),
(3, '2', 2, 7),
(3, '7', 2, 14),
(1, '46', 1, 1),
(1, '28', 1, 3),
(1, '3', 1, 6),
(1, '2', 1, 13),
(1, '46', 2, 1),
(1, '28', 2, 3),
(1, '1', 2, 6),
(1, '2', 2, 7),
(1, '39', 2, 12),
(1, '9', 2, 14),
(2, '16', 1, 1),
(2, '2', 1, 6),
(2, '2', 1, 13),
(2, '4', 2, 1),
(2, '12', 2, 3),
(2, '2', 2, 7),
(2, '27', 2, 12),
(2, '3', 2, 14),
(3, '32', 1, 1),
(3, '56', 1, 3),
(3, '2', 1, 6),
(3, '2', 1, 13),
(3, '32', 2, 1),
(3, '56', 2, 3),
(3, '2', 2, 6),
(3, '2', 2, 7),
(3, '7', 2, 14),
(1, '46', 1, 1),
(1, '28', 1, 3),
(1, '3', 1, 6),
(1, '2', 1, 13),
(1, '46', 2, 1),
(1, '28', 2, 3),
(1, '1', 2, 6),
(1, '2', 2, 7),
(1, '39', 2, 12),
(1, '9', 2, 14),
(2, '16', 1, 1),
(2, '2', 1, 6),
(2, '2', 1, 13),
(2, '4', 2, 1),
(2, '12', 2, 3),
(2, '2', 2, 7),
(2, '27', 2, 12),
(2, '3', 2, 14),
(3, '32', 1, 1),
(3, '56', 1, 3),
(3, '2', 1, 6),
(3, '2', 1, 13),
(3, '32', 2, 1),
(3, '56', 2, 3),
(3, '2', 2, 6),
(3, '2', 2, 7),
(3, '7', 2, 14);

-- --------------------------------------------------------

--
-- Структура таблиці `group`
--

CREATE TABLE `group` (
  `id_group` int(11) NOT NULL,
  `name_group` text NOT NULL,
  `kurs` text NOT NULL,
  `count` int(11) NOT NULL,
  `form` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп даних таблиці `group`
--

INSERT INTO `group` (`id_group`, `name_group`, `kurs`, `count`, `form`) VALUES
(17, ' ??', '3', 26, '?'),
(18, ' ??', '3', 10, '?'),
(19, '??', '2', 22, '?');

-- --------------------------------------------------------

--
-- Структура таблиці `otherheadlines`
--

CREATE TABLE `otherheadlines` (
  `id_item` int(11) NOT NULL,
  `item` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Структура таблиці `rozklad`
--

CREATE TABLE `rozklad` (
  `id_week` int(11) NOT NULL,
  `id_subject` int(11) NOT NULL,
  `id_group` int(11) NOT NULL,
  `id_audience` int(11) NOT NULL,
  `seq_num` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп даних таблиці `rozklad`
--

INSERT INTO `rozklad` (`id_week`, `id_subject`, `id_group`, `id_audience`, `seq_num`) VALUES
(1, 3, 2, 1, 1),
(1, 3, 2, 1, 2),
(3, 3, 3, 2, 3),
(3, 2, 2, 1, 4);

-- --------------------------------------------------------

--
-- Структура таблиці `students`
--

CREATE TABLE `students` (
  `group` text NOT NULL,
  `PIB` text NOT NULL,
  `id_stud` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Структура таблиці `subject`
--

CREATE TABLE `subject` (
  `id_subject` int(11) NOT NULL,
  `name_subject` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп даних таблиці `subject`
--

INSERT INTO `subject` (`id_subject`, `name_subject`) VALUES
(36, '???????? ????????????? ? ?????????? ???????*'),
(37, '???????? ????????????? ? ?????????? ???????*'),
(38, '???????? ???????? ??????-????????? ??????*'),
(39, '??????:');

-- --------------------------------------------------------

--
-- Структура таблиці `user`
--

CREATE TABLE `user` (
  `login` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп даних таблиці `user`
--

INSERT INTO `user` (`login`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Структура таблиці `weekday`
--

CREATE TABLE `weekday` (
  `id_week` int(11) NOT NULL,
  `weekday` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп даних таблиці `weekday`
--

INSERT INTO `weekday` (`id_week`, `weekday`) VALUES
(1, 'Monday'),
(2, 'Tuesday'),
(3, 'Wednesday'),
(4, 'Thursday'),
(5, 'Friday'),
(6, 'Saturday');

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `audience`
--
ALTER TABLE `audience`
  ADD PRIMARY KEY (`id_audience`);

--
-- Індекси таблиці `commonheadline`
--
ALTER TABLE `commonheadline`
  ADD PRIMARY KEY (`id_item`);

--
-- Індекси таблиці `group`
--
ALTER TABLE `group`
  ADD PRIMARY KEY (`id_group`);

--
-- Індекси таблиці `otherheadlines`
--
ALTER TABLE `otherheadlines`
  ADD PRIMARY KEY (`id_item`);

--
-- Індекси таблиці `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id_stud`);

--
-- Індекси таблиці `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id_subject`);

--
-- Індекси таблиці `weekday`
--
ALTER TABLE `weekday`
  ADD PRIMARY KEY (`id_week`);

--
-- AUTO_INCREMENT для збережених таблиць
--

--
-- AUTO_INCREMENT для таблиці `commonheadline`
--
ALTER TABLE `commonheadline`
  MODIFY `id_item` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблиці `group`
--
ALTER TABLE `group`
  MODIFY `id_group` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT для таблиці `otherheadlines`
--
ALTER TABLE `otherheadlines`
  MODIFY `id_item` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблиці `students`
--
ALTER TABLE `students`
  MODIFY `id_stud` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблиці `subject`
--
ALTER TABLE `subject`
  MODIFY `id_subject` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT для таблиці `weekday`
--
ALTER TABLE `weekday`
  MODIFY `id_week` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
