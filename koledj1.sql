-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Дек 14 2020 г., 09:54
-- Версия сервера: 10.4.14-MariaDB
-- Версия PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `koledj1`
--

-- --------------------------------------------------------

--
-- Структура таблицы `documents`
--

CREATE TABLE `documents` (
  `ident_no` int(14) NOT NULL,
  `passport_no` varchar(45) NOT NULL,
  `student_nomer` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `documents`
--

INSERT INTO `documents` (`ident_no`, `passport_no`, `student_nomer`) VALUES
(1, 'AWR12424HD', 12345),
(2, 'DTR12524GD', 12346),
(3, 'ABA12424HD', 12322),
(4, 'ABC19874GD', 11123),
(5, 'ATR22424HD', 12545),
(6, 'ABC13324GD', 12986),
(7, 'AQR14424HD', 12450),
(8, 'ABC11198GD', 13376),
(9, 'AAA11424HD', 21345);

-- --------------------------------------------------------

--
-- Структура таблицы `progress`
--

CREATE TABLE `progress` (
  `id` int(11) NOT NULL,
  `№_zalicovoi` int(11) NOT NULL,
  `name_subject` int(11) NOT NULL,
  `ocinka` int(11) NOT NULL,
  `data_ekz` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `progress`
--

INSERT INTO `progress` (`id`, `№_zalicovoi`, `name_subject`, `ocinka`, `data_ekz`) VALUES
(1, 1, 1, 5, '2019-12-12'),
(2, 1, 2, 4, '2019-12-15'),
(3, 1, 3, 5, '2019-12-21'),
(4, 2, 1, 3, '2019-12-12'),
(5, 2, 2, 5, '2019-12-15'),
(6, 2, 3, 3, '2019-12-21'),
(7, 3, 1, 5, '2019-12-12'),
(8, 4, 1, 4, '2019-12-12'),
(9, 5, 1, 3, '2019-12-12'),
(10, 6, 1, 3, '2019-12-12'),
(11, 7, 1, 5, '2019-12-12'),
(12, 8, 1, 4, '2019-12-12');

-- --------------------------------------------------------

--
-- Структура таблицы `specialty`
--

CREATE TABLE `specialty` (
  `kod_specialty` int(11) NOT NULL,
  `name_specialty` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `specialty`
--

INSERT INTO `specialty` (`kod_specialty`, `name_specialty`) VALUES
(1, 'ІПЗ-31'),
(2, 'ІПЗ-32'),
(3, 'ІПЗ-41'),
(4, 'КІ-31'),
(5, 'КІ-32');

-- --------------------------------------------------------

--
-- Структура таблицы `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `pib` varchar(45) NOT NULL,
  `birth_data` date NOT NULL,
  `address` varchar(45) NOT NULL,
  `specialty` int(11) NOT NULL,
  `№_zalicovoi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `students`
--

INSERT INTO `students` (`id`, `pib`, `birth_data`, `address`, `specialty`, `№_zalicovoi`) VALUES
(1, 'Захарченко Трофим Александрович', '1999-12-08', 'м.Луцьк вул. Шевченка 12', 1, 1),
(2, 'Никонов Владлен Сергеевич', '1992-01-01', 'м.Луцьк вул. Молоді 12', 2, 2),
(3, 'Евдокимов Тит Михайлович', '1991-11-18', 'м.Луцьк вул. Лесі Українки 12', 3, 3),
(4, 'Шумейко Тит Григорьевич', '1991-11-01', 'м.Луцьк вул. Рівненська 105', 5, 4),
(5, 'Гаврилов Эдуард Евгеньевич', '1991-01-10', 'м.Луцьк вул. Винниченка 2', 3, 5),
(6, 'Павленко Зураб Юхимович', '1992-11-11', 'м.Луцьк вул. Єршова 6', 4, 6),
(7, 'Яровой Харитон Анатолиевич', '1991-08-08', 'м.Луцьк вул. Б.Хмельницького 12', 2, 7),
(8, 'Дзюба Эдуард Леонидович', '1995-01-01', 'м.Луцьк вул. Рівненська 200', 4, 8);

-- --------------------------------------------------------

--
-- Структура таблицы `subject`
--

CREATE TABLE `subject` (
  `id` int(11) NOT NULL,
  `name_subject` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `subject`
--

INSERT INTO `subject` (`id`, `name_subject`) VALUES
(1, 'Математика'),
(2, 'Бази даних'),
(3, 'Програмування');

-- --------------------------------------------------------

--
-- Структура таблицы `teachers`
--

CREATE TABLE `teachers` (
  `id_teachers` int(11) NOT NULL,
  `pib` varchar(45) NOT NULL,
  `birth_data` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `teachers`
--

INSERT INTO `teachers` (`id_teachers`, `pib`, `birth_data`) VALUES
(1, 'Мороз Світлана Степанівна', '1991-10-21'),
(2, 'Поліщук Валентина Степанівна', '1993-11-07'),
(3, 'Никонов Сергій Сергійович', '2000-01-29');

-- --------------------------------------------------------

--
-- Структура таблицы `zalicovi`
--

CREATE TABLE `zalicovi` (
  `id` int(11) NOT NULL,
  `№_zalicovoi` int(15) NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `zalicovi`
--

INSERT INTO `zalicovi` (`id`, `№_zalicovoi`, `data`) VALUES
(1, 12324, '2019-09-12'),
(2, 12398, '2019-09-12'),
(3, 12378, '2019-09-12'),
(4, 12344, '2019-09-12'),
(5, 12222, '2019-09-12'),
(6, 12888, '2019-09-12'),
(7, 12311, '2019-09-12'),
(8, 12315, '2019-09-12'),
(9, 11111, '2019-09-12');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`ident_no`);

--
-- Индексы таблицы `progress`
--
ALTER TABLE `progress`
  ADD PRIMARY KEY (`id`),
  ADD KEY `name_subject` (`name_subject`),
  ADD KEY `№_zalicovoi` (`№_zalicovoi`);

--
-- Индексы таблицы `specialty`
--
ALTER TABLE `specialty`
  ADD PRIMARY KEY (`kod_specialty`);

--
-- Индексы таблицы `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD KEY `specialty` (`specialty`),
  ADD KEY `№_zalicovoi` (`№_zalicovoi`);

--
-- Индексы таблицы `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id_teachers`);

--
-- Индексы таблицы `zalicovi`
--
ALTER TABLE `zalicovi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `documents`
--
ALTER TABLE `documents`
  MODIFY `ident_no` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `progress`
--
ALTER TABLE `progress`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `specialty`
--
ALTER TABLE `specialty`
  MODIFY `kod_specialty` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id_teachers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `zalicovi`
--
ALTER TABLE `zalicovi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `progress`
--
ALTER TABLE `progress`
  ADD CONSTRAINT `progress_ibfk_2` FOREIGN KEY (`name_subject`) REFERENCES `subject` (`id`),
  ADD CONSTRAINT `progress_ibfk_3` FOREIGN KEY (`№_zalicovoi`) REFERENCES `zalicovi` (`id`);

--
-- Ограничения внешнего ключа таблицы `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_ibfk_1` FOREIGN KEY (`id`) REFERENCES `documents` (`ident_no`),
  ADD CONSTRAINT `students_ibfk_2` FOREIGN KEY (`specialty`) REFERENCES `specialty` (`kod_specialty`),
  ADD CONSTRAINT `students_ibfk_3` FOREIGN KEY (`№_zalicovoi`) REFERENCES `zalicovi` (`id`);

--
-- Ограничения внешнего ключа таблицы `subject`
--
ALTER TABLE `subject`
  ADD CONSTRAINT `subject_ibfk_1` FOREIGN KEY (`id`) REFERENCES `teachers` (`id_teachers`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
