-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Час створення: Гру 17 2018 р., 00:47
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
  `value` text CHARACTER SET utf8mb4 NOT NULL
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
(3, 7, '1/2');

-- --------------------------------------------------------

--
-- Структура таблиці `commonheadline`
--

CREATE TABLE `commonheadline` (
  `item` text CHARACTER SET utf8mb4 NOT NULL,
  `id_item` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп даних таблиці `commonheadline`
--

INSERT INTO `commonheadline` (`item`, `id_item`) VALUES
('????? ?????????? ????????? ? ????? ?????????? ??????', 113),
('??????, ?????????????', 114),
('???? ????????', 115),
('???????????? ?????????', 116),
('????? ????????', 117),
('????????? ????/???????', 118),
('????????? ???????', 119);

-- --------------------------------------------------------

--
-- Структура таблиці `excel`
--

CREATE TABLE `excel` (
  `id_row` int(11) NOT NULL,
  `value` text CHARACTER SET utf8mb4 NOT NULL,
  `num_sem` int(11) NOT NULL,
  `id_cell` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп даних таблиці `excel`
--

INSERT INTO `excel` (`id_row`, `value`, `num_sem`, `id_cell`) VALUES
(1, '46', 1, 1),
(1, '0', 1, 2),
(1, '28', 1, 3),
(1, '0', 1, 4),
(1, '0', 1, 5),
(1, '3', 1, 6),
(1, '0', 1, 7),
(1, '0', 1, 8),
(1, '0', 1, 9),
(1, '0', 1, 10),
(1, '0', 1, 11),
(1, '0', 1, 12),
(1, '2', 1, 13),
(1, '0', 1, 14),
(1, '0', 1, 15),
(1, '0', 1, 16),
(1, '0', 1, 17),
(1, '46', 2, 1),
(1, '0', 2, 2),
(1, '28', 2, 3),
(1, '0', 2, 4),
(1, '0', 2, 5),
(1, '1', 2, 6),
(1, '2', 2, 7),
(1, '0', 2, 8),
(1, '0', 2, 9),
(1, '0', 2, 10),
(1, '0', 2, 11),
(1, '39', 2, 12),
(1, '0', 2, 13),
(1, '9', 2, 14),
(1, '0', 2, 15),
(1, '0', 2, 16),
(1, '0', 2, 17),
(2, '16', 1, 1),
(2, '0', 1, 2),
(2, '0', 1, 3),
(2, '0', 1, 4),
(2, '0', 1, 5),
(2, '2', 1, 6),
(2, '0', 1, 7),
(2, '0', 1, 8),
(2, '0', 1, 9),
(2, '0', 1, 10),
(2, '0', 1, 11),
(2, '0', 1, 12),
(2, '2', 1, 13),
(2, '0', 1, 14),
(2, '0', 1, 15),
(2, '0', 1, 16),
(2, '0', 1, 17),
(2, '4', 2, 1),
(2, '0', 2, 2),
(2, '12', 2, 3),
(2, '0', 2, 4),
(2, '0', 2, 5),
(2, '0', 2, 6),
(2, '2', 2, 7),
(2, '0', 2, 8),
(2, '0', 2, 9),
(2, '0', 2, 10),
(2, '0', 2, 11),
(2, '27', 2, 12),
(2, '0', 2, 13),
(2, '3', 2, 14),
(2, '0', 2, 15),
(2, '0', 2, 16),
(2, '0', 2, 17),
(3, '32', 1, 1),
(3, '0', 1, 2),
(3, '56', 1, 3),
(3, '0', 1, 4),
(3, '0', 1, 5),
(3, '2', 1, 6),
(3, '0', 1, 7),
(3, '0', 1, 8),
(3, '0', 1, 9),
(3, '0', 1, 10),
(3, '0', 1, 11),
(3, '0', 1, 12),
(3, '2', 1, 13),
(3, '0', 1, 14),
(3, '0', 1, 15),
(3, '0', 1, 16),
(3, '0', 1, 17),
(3, '32', 2, 1),
(3, '0', 2, 2),
(3, '56', 2, 3),
(3, '0', 2, 4),
(3, '0', 2, 5),
(3, '2', 2, 6),
(3, '2', 2, 7),
(3, '0', 2, 8),
(3, '0', 2, 9),
(3, '0', 2, 10),
(3, '0', 2, 11),
(3, '0', 2, 12),
(3, '0', 2, 13),
(3, '7', 2, 14),
(3, '0', 2, 15),
(3, '0', 2, 16),
(3, '0', 2, 17);

-- --------------------------------------------------------

--
-- Структура таблиці `group`
--

CREATE TABLE `group` (
  `id_group` int(11) NOT NULL,
  `name_group` text CHARACTER SET utf8mb4 NOT NULL,
  `kurs` text CHARACTER SET utf8mb4 NOT NULL,
  `count` int(11) NOT NULL,
  `form` text CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп даних таблиці `group`
--

INSERT INTO `group` (`id_group`, `name_group`, `kurs`, `count`, `form`) VALUES
(74, ' ??', '3', 26, '?'),
(75, ' ??', '3', 10, '?'),
(76, '??', '2', 22, '?');

-- --------------------------------------------------------

--
-- Структура таблиці `otherheadlines`
--

CREATE TABLE `otherheadlines` (
  `id_item` int(11) NOT NULL,
  `item` text CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп даних таблиці `otherheadlines`
--

INSERT INTO `otherheadlines` (`id_item`, `item`) VALUES
(273, '??????? ??????'),
(274, '?????????? ?????????? ??????'),
(275, '?????????? ???????????? ??????'),
(276, '?????????? ?????????(??????????) ??????'),
(277, '?????????? ?????????????? ??????'),
(278, '?????????? ???????????? ???????? ????????'),
(279, '?????????? ?????????????? ????????????'),
(280, '????????? ???????????,  ????????? ????? ??? ??? ?????????? ??????'),
(281, '????????? ???????????,  ????????? ????? ??? ??? ??????????? ??????'),
(282, '?????????, ??????????? ???????'),
(283, '?????????????, ????????? ?????'),
(284, '???????? ????????, ?????'),
(285, '?????????? ??????'),
(286, '?????????? ??????????? ?????????'),
(287, '???????????, ??????????????, ???????????? ?? ?????????? ??????? ????????? ???????? (?????)'),
(288, '??????????? ???????????, ???????????'),
(289, '??????????? ?????????');

-- --------------------------------------------------------

--
-- Структура таблиці `rating`
--

CREATE TABLE `rating` (
  `id_stud` int(11) NOT NULL,
  `id_subject` int(11) NOT NULL,
  `rat` text NOT NULL,
  `type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп даних таблиці `rating`
--

INSERT INTO `rating` (`id_stud`, `id_subject`, `rat`, `type`) VALUES
(1, 106, '33', '????????? ??????'),
(5, 107, '74', '??????????? ??????'),
(8, 107, '81', 'II ??????'),
(8, 107, '81', 'II ??????');

-- --------------------------------------------------------

--
-- Структура таблиці `rozklad`
--

CREATE TABLE `rozklad` (
  `weekday` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `subject` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `group` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `audience` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `seq_num` int(11) NOT NULL,
  `kurs` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `form` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп даних таблиці `rozklad`
--

INSERT INTO `rozklad` (`weekday`, `subject`, `group`, `audience`, `seq_num`, `kurs`, `form`) VALUES
('Понеділок', 'Web-design', 'PI', '151', 2, '3', 'D'),
('Вівторок', 'Klient-server system', 'PI', '127', 5, '3', 'Z'),
('Середа', 'OS', 'ST', '102', 1, '3', 'D'),
('Четвер', 'System prog', 'CS', '133', 3, '1', 'Z'),
('П\'ятниця', 'Web-design', 'ST', '151', 2, '4', 'Z'),
('Понеділок', 'Web-design', 'CS', '125', 4, '2', 'D'),
('Вівторок', 'Klient-server system', 'PI', '127', 6, '3', 'Z'),
('Четвер', 'System prog', 'PI', '151', 4, '3', 'Z');

-- --------------------------------------------------------

--
-- Структура таблиці `students`
--

CREATE TABLE `students` (
  `group` text CHARACTER SET utf8mb4 NOT NULL,
  `PIB` text CHARACTER SET utf8mb4 NOT NULL,
  `id_stud` int(11) NOT NULL,
  `kurs` text CHARACTER SET utf8mb4 NOT NULL,
  `form` text CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп даних таблиці `students`
--

INSERT INTO `students` (`group`, `PIB`, `id_stud`, `kurs`, `form`) VALUES
('??', '???????? ??*? ??-???????? 1\r\n', 1, '3', '?'),
('??', '???????? ??*? ??-???????? 2\r\n', 2, '3', '?'),
('??', '???????? ??*? ??-???????? 3\r\n', 3, '3', '?'),
('??', '???????? ??*? ??-???????? 4\r\n', 4, '3', '?'),
('??', '???????? ??*? ??-???????? 5\r\n', 5, '3', '?'),
('??', '???????? ??*? ??-???????? 6\r\n', 6, '3', '?'),
('??', '???????? ??*? ??-???????? 7\r\n', 7, '3', '?'),
('??', '???????? ??*? ??-???????? 8\r\n', 8, '3', '?'),
('??', '???????? ??*? ??-???????? 9\r\n', 9, '3', '?'),
('??', '???????? ??*? ??-???????? 10\r\n', 10, '3', '?'),
('??', '???????? ??*? ??-???????? 11\r\n', 11, '3', '?'),
('??', '???????? ??*? ??-???????? 12\r\n', 12, '3', '?'),
('??', '???????? ??*? ??-???????? 13\r\n', 13, '3', '?'),
('??', '???????? ??*? ??-???????? 14\r\n', 14, '3', '?'),
('??', '???????? ??*? ??-???????? 15\r\n', 15, '3', '?'),
('??', '???????? ??*? ??-???????? 16\r\n', 16, '3', '?'),
('??', '???????? ??*? ??-???????? 17\r\n', 17, '3', '?'),
('??', '???????? ??*? ??-???????? 18\r\n', 18, '3', '?');

-- --------------------------------------------------------

--
-- Структура таблиці `subject`
--

CREATE TABLE `subject` (
  `id_subject` int(11) NOT NULL,
  `name_subject` text CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп даних таблиці `subject`
--

INSERT INTO `subject` (`id_subject`, `name_subject`) VALUES
(106, '???????? ????????????? ? ?????????? ???????*'),
(107, '???????? ????????????? ? ?????????? ???????*'),
(108, '???????? ???????? ??????-????????? ??????*'),
(109, '??????:');

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
-- AUTO_INCREMENT для збережених таблиць
--

--
-- AUTO_INCREMENT для таблиці `commonheadline`
--
ALTER TABLE `commonheadline`
  MODIFY `id_item` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;

--
-- AUTO_INCREMENT для таблиці `group`
--
ALTER TABLE `group`
  MODIFY `id_group` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT для таблиці `otherheadlines`
--
ALTER TABLE `otherheadlines`
  MODIFY `id_item` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=290;

--
-- AUTO_INCREMENT для таблиці `students`
--
ALTER TABLE `students`
  MODIFY `id_stud` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT для таблиці `subject`
--
ALTER TABLE `subject`
  MODIFY `id_subject` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;