-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 22 2025 г., 09:45
-- Версия сервера: 8.0.19
-- Версия PHP: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `my.sql`
--

-- --------------------------------------------------------

--
-- Структура таблицы `requests`
--

CREATE TABLE `requests` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `tel` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `service` text NOT NULL,
  `payment` enum('Наличные','Банковская карта') NOT NULL,
  `status` enum('Новая','В работе','Выполненно','Отменено') NOT NULL DEFAULT 'Новая',
  `reject` text
);

--
-- Дамп данных таблицы `requests`
--

INSERT INTO `requests` (`id`, `user_id`, `tel`, `address`, `date`, `time`, `service`, `payment`, `status`, `reject`) VALUES
(1, 2, '111', '111', '2025-05-08', '11:39:00', 'dsadasdas', 'Наличные', 'Отменено', 'fdsfsdfsd'),
(2, 2, '222', '222', '2025-04-30', '11:58:00', 'Общий клининг', 'Наличные', 'Отменено', 'eafaesfaswfasfasfsafasfa'),
(3, 2, '333', '333', '2025-05-17', '11:00:00', 'Общий клининг', 'Наличные', 'В работе', ''),
(4, 2, '888', '888', '2025-05-02', '11:59:00', 'hgjhgjghjg', 'Наличные', 'Выполненно', ''),
(5, 2, 'екуеукеук', 'епкукуе', '2025-05-11', '12:02:00', 'павпвапвап', 'Наличные', 'Новая', NULL),
(6, 2, 'нкуенрекунр', '786ш76гш657', '2025-05-16', '12:02:00', 'Общий клининг', 'Наличные', 'Новая', NULL),
(7, 2, '4444', '4444', '2025-05-17', '14:10:00', 'Общий клининг', 'Банковская карта', 'Новая', NULL),
(8, 2, 'rewr', 'rrer', '2025-05-18', '14:08:00', 'Общий клининг', 'Наличные', 'Новая', NULL),
(9, 2, '444', '444', '2025-05-17', '14:10:00', 'Общий клининг', 'Банковская карта', 'Новая', NULL),
(10, 2, 'hgfhgfhfg', 'hgfhgfh', '2025-05-17', '19:08:00', 'Общий клининг', 'Наличные', 'Новая', NULL),
(11, 2, 'fdsfds', 'fdsfsd', '2025-05-17', '14:14:00', 'Общий клининг', 'Наличные', 'Новая', NULL),
(12, 2, 'jghjghjgh', 'jytgjytjytr', '2025-05-24', '14:18:00', 'Общий клининг', 'Наличные', 'Новая', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `login` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `fio` varchar(255) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `role` enum('user','admin') NOT NULL DEFAULT 'user'
);

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `login`, `password`, `fio`, `tel`, `email`, `role`) VALUES
(1, '111', '111', '111', '111', '111@111', 'admin'),
(2, '222', '222', '222', '222', '222@222', 'user');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login` (`login`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `requests`
--
ALTER TABLE `requests`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `requests`
--
ALTER TABLE `requests`
  ADD CONSTRAINT `requests_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
