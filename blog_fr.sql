-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июл 05 2022 г., 11:38
-- Версия сервера: 8.0.24
-- Версия PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `blog_fr`
--

-- --------------------------------------------------------

--
-- Структура таблицы `statyas`
--

CREATE TABLE `statyas` (
  `id` int UNSIGNED NOT NULL,
  `text` text COLLATE utf8mb4_unicode_520_ci,
  `date` date DEFAULT NULL,
  `zakrep` tinyint UNSIGNED DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `data` date DEFAULT NULL,
  `silka` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Дамп данных таблицы `statyas`
--

INSERT INTO `statyas` (`id`, `text`, `date`, `zakrep`, `name`, `data`, `silka`) VALUES
(29, 'Хых, нажми', '2022-07-04', NULL, 'Первая статья', NULL, ''),
(30, 'Ну чтож, я очень рад что я пишу его, так-как это ПЕРВАЯ нормальная ЗАКОНЧЕННАЯ работа, которой можно похвастаться))) Я не горжусь ей, для меня было довольно легко делать. Гуглил я где-то 2-3 раза и то по backend, я его плохо знаю) Но лето впереди и есть время чтобы подтянуться) Не думаю что на 2курсе у нас будет backend значит еще больше времени, но будет Js который я сначала пробегусь до темы на которой остановился и пойду дальше. Желаю удачи всем кто учится в этой сфере. Наша работа важна! VK убил мызыку... слушать с включенным экраном.. пипец да? Есть решение, написать свой плеер! ТЫ МОЖЕШЬ СДЕЛАТЬ ВСЕ ЧТО ХОЧЕШЬ. Все в твоих руках бро. Дерзай! p.s прикиньте не сохранится то что я пишу)) во прикол будет\r\n\r\nДелал этот говно кодер)', '2022-07-05', NULL, 'Блог', NULL, 'https://vk.com/mr_4iter_pro');

-- --------------------------------------------------------

--
-- Структура таблицы `tasks`
--

CREATE TABLE `tasks` (
  `id` int UNSIGNED NOT NULL,
  `text` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `date` date DEFAULT NULL,
  `zakrep` tinyint UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Дамп данных таблицы `tasks`
--

INSERT INTO `tasks` (`id`, `text`, `date`, `zakrep`) VALUES
(2, 'Это типо стена (НЕ СТАТЬЯ И НЕ РАБОТА) ВСЕ ЗАПИСИ КОТОРЫЙ ПИШУТ ТУТ ОНИ ТУТ', '2022-07-04', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int UNSIGNED NOT NULL,
  `login` text COLLATE utf8mb4_unicode_520_ci,
  `email` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `status` tinyint UNSIGNED DEFAULT NULL,
  `spes` varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `o_sebe` text COLLATE utf8mb4_unicode_520_ci,
  `image` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `email`, `password`, `status`, `spes`, `o_sebe`, `image`) VALUES
(1, 'Илья Безруков', 'ilya.bezrukov.2005@mail.ru', '$2y$10$vpNtgMWjs3GrFFFLpDDDJ.1hu0DvOymp7LMCxgDnCej6Yaj.y1Vou', 1, 'Fullstack developer | Programmer', 'В 2020 году начал изучать Frontend, а именно HTML5, CSS3. После нового года взялся за изучение JavaScript. Летом чуть чуть изучал Python. Мои любимые языки программирования это JavaScript, PHP, Python. \r\nP.S Это первый нормальный,так скажем большой проект :)\r\n', 'xdd.png');

-- --------------------------------------------------------

--
-- Структура таблицы `works`
--

CREATE TABLE `works` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `text` text COLLATE utf8mb4_unicode_520_ci,
  `data` date DEFAULT NULL,
  `silka` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Дамп данных таблицы `works`
--

INSERT INTO `works` (`id`, `name`, `text`, `data`, `silka`) VALUES
(7, 'Этот блог', 'Ну чтож, я очень рад что я пишу его, так-как это ПЕРВАЯ нормальная ЗАКОНЧЕННАЯ работа, которой можно похвастаться))) Я не горжусь ей, для меня было довольно легко делать. Гуглил я где-то 2-3 раза и то по backend, я его плохо знаю) Но лето впереди и есть время чтобы подтянуться) Не думаю что на 2курсе у нас будет backend значит еще больше времени, но будет Js который я сначала пробегусь до темы на которой остановился и пойду дальше. Желаю удачи всем кто учится в этой сфере. Наша работа важна! VK убил мызыку... слушать с включенным экраном.. пипец да? Есть решение, написать свой плеер! ТЫ МОЖЕШЬ СДЕЛАТЬ ВСЕ ЧТО ХОЧЕШЬ. Все в твоих руках бро. Дерзай!\r\n\r\np.s прикиньте не сохранится то что я пишу)) во прикол будет', '2022-07-04', NULL),
(9, 'Админ сайта?', 'Он', '2022-07-04', 'https://vk.com/mr_4iter_pro');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `statyas`
--
ALTER TABLE `statyas`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `works`
--
ALTER TABLE `works`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `statyas`
--
ALTER TABLE `statyas`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT для таблицы `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `works`
--
ALTER TABLE `works`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
