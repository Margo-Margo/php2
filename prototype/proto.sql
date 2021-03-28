-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3310
-- Время создания: Мар 29 2021 г., 01:01
-- Версия сервера: 5.6.47
-- Версия PHP: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `proto`
--

-- --------------------------------------------------------

--
-- Структура таблицы `basket`
--

CREATE TABLE `basket` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_good` int(11) NOT NULL,
  `price` double NOT NULL,
  `is_in_order` tinyint(4) NOT NULL DEFAULT '0',
  `id_order` tinyint(4) DEFAULT NULL,
  `amount` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `good_title` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `basket`
--

INSERT INTO `basket` (`id`, `id_user`, `id_good`, `price`, `is_in_order`, `id_order`, `amount`, `good_title`) VALUES
(4, 999, 2, 1145.95, 0, NULL, 1, 'Клавиатура');

-- --------------------------------------------------------

--
-- Структура таблицы `brand`
--

CREATE TABLE `brand` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `brand`
--

INSERT INTO `brand` (`id`, `title`, `description`) VALUES
(1, 'Бренд №1', 'Описание бренда №1'),
(2, 'Бренд №2', 'Описание бренда №2');

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id_category` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `parent_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id_category`, `status`, `name`, `parent_id`) VALUES
(1, 1, 'Категория №1', 0),
(2, 1, 'Категория №2', 0),
(3, 1, 'Категория №3', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `coments`
--

CREATE TABLE `coments` (
  `id` int(11) NOT NULL,
  `fio` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `text` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `coments`
--

INSERT INTO `coments` (`id`, `fio`, `email`, `text`, `date`) VALUES
(4, 'Маргарита', 'test@test.ru', 'Доставили быстро! Всё супер!', '2021-02-04 01:35:07'),
(5, 'Александр', 'test@test.ru', 'Очень вежливые менеджеры', '2021-02-04 01:42:08'),
(6, 'Александр', 'test@test.ru', 'Очень вежливые менеджеры', '2021-02-04 01:42:56'),
(7, 'Маргарита', 'test@test.ru', '+++', '2021-03-28 09:48:58');

-- --------------------------------------------------------

--
-- Структура таблицы `goods`
--

CREATE TABLE `goods` (
  `id_good` int(11) NOT NULL,
  `name` varchar(50) NOT NULL DEFAULT '',
  `price` double NOT NULL DEFAULT '0',
  `id_category` int(11) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id_order` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `amount` double NOT NULL,
  `datetime_create` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_order_status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id_order`, `id_user`, `amount`, `datetime_create`, `id_order_status`) VALUES
(12, 1, 256.43, '2021-01-11 15:18:31', 1),
(13, 999, 1145.95, '2021-01-11 15:21:21', 1),
(14, 999, 2546.45, '2021-01-11 15:26:06', 1),
(15, 999, 512.15, '2021-01-11 15:36:18', 1),
(16, 999, 2546.45, '2021-01-11 15:45:48', 1),
(17, 1, 512.15, '2021-01-11 15:51:51', 1),
(18, 1001, 1145.95, '2021-03-19 22:48:29', 1),
(19, 1001, 3437.85, '2021-03-22 23:13:39', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `order_items`
--

CREATE TABLE `order_items` (
  `ord_id` int(10) UNSIGNED NOT NULL,
  `item_id` int(10) UNSIGNED NOT NULL,
  `amount` int(10) UNSIGNED NOT NULL,
  `notes` varchar(255) NOT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `order_items`
--

INSERT INTO `order_items` (`ord_id`, `item_id`, `amount`, `notes`, `price`) VALUES
(12, 24, 1, '', 256.43),
(13, 25, 1, '', 1145.95),
(14, 26, 1, '', 2546.45),
(15, 27, 1, '', 512.15),
(16, 28, 1, '', 2546.45),
(17, 30, 1, '', 512.15),
(18, 36, 1, '', 1145.95),
(19, 3, 3, '', 1145.95);

-- --------------------------------------------------------

--
-- Структура таблицы `order_status`
--

CREATE TABLE `order_status` (
  `id_order_status` int(11) DEFAULT NULL,
  `order_status_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `order_status`
--

INSERT INTO `order_status` (`id_order_status`, `order_status_name`) VALUES
(1, 'Оформлен'),
(2, 'Подтвержден'),
(3, 'Обрабатывается'),
(4, 'Отправлен'),
(5, 'Получен'),
(6, 'Задерживается'),
(7, 'Отменен'),
(8, 'Утерян');

-- --------------------------------------------------------

--
-- Структура таблицы `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `title` varchar(256) NOT NULL,
  `photo` varchar(256) NOT NULL,
  `description` text NOT NULL,
  `short_description` text NOT NULL,
  `brand_id` int(11) NOT NULL,
  `price` double NOT NULL,
  `availability` int(11) NOT NULL,
  `discount` tinyint(4) NOT NULL,
  `is_new` tinyint(4) NOT NULL,
  `is_recommended` tinyint(4) NOT NULL,
  `reviews_count` int(11) NOT NULL,
  `reviews_score` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `category_id`, `title`, `photo`, `description`, `short_description`, `brand_id`, `price`, `availability`, `discount`, `is_new`, `is_recommended`, `reviews_count`, `reviews_score`) VALUES
(1, 1, 'Наушники', '1', 'В наличии', 'В наличии', 1, 2546.45, 10, 0, 1, 1, 24, 5),
(2, 2, 'Клавиатура', '2', 'В наличии', 'В наличии', 2, 1145.95, 5, 10, 0, 1, 45, 4),
(3, 1, 'Монитор', '3', 'В наличии', 'В наличии', 1, 22512.15, 85, 25, 0, 0, 25, 3),
(4, 3, 'Мышка', '4', 'В наличии', 'В наличии', 2, 556.43, 12, 10, 1, 1, 10, 4),
(5, 2, 'Ноутбук', '5', 'В наличии', 'В наличии', 1, 52455.25, 6, 0, 1, 1, 12, 5),
(6, 1, 'Вебкамера', '6', 'В наличии', 'В наличии', 2, 4870.74, 2, 0, 1, 1, 65, 5),
(7, 2, 'Умная колонка', '7', 'В наличии', 'В наличии', 2, 3225.14, 42, 5, 0, 0, 22, 4),
(8, 3, 'Игра на PS4', '8', 'В наличии', 'В наличии', 1, 1422.11, 17, 0, 0, 1, 84, 3),
(9, 3, 'Робот-пылесос', '9', 'В наличии', 'В наличии', 1, 19241.1, 9, 0, 1, 1, 34, 4),
(10, 1, 'Смартфон', '10', 'В наличии', 'В наличии', 1, 11950.65, 111, 0, 1, 0, 73, 5),
(11, 3, 'Утюг Tefal', '11', 'В наличии', 'В наличии', 1, 3229.94, 21, 0, 1, 1, 27, 5),
(12, 2, 'Пылесос', '12', 'В наличии', 'В наличии', 2, 25631.72, 11, 5, 1, 1, 63, 4),
(13, 1, 'Мойка воздуха', '13', 'В наличии', 'В наличии', 1, 18431.39, 55, 0, 1, 0, 125, 2),
(14, 3, 'Телевизор', '14', 'В наличии', 'В наличии', 2, 55514.95, 33, 0, 0, 0, 64, 2),
(15, 3, 'Стиралка', '4', 'В наличии', 'В наличии', 2, 35556.43, 12, 10, 1, 1, 10, 4);

-- --------------------------------------------------------

--
-- Структура таблицы `role`
--

CREATE TABLE `role` (
  `id_role` int(11) NOT NULL,
  `role_name` varchar(50) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `role`
--

INSERT INTO `role` (`id_role`, `role_name`) VALUES
(1, 'Обычный пользователь'),
(999, 'Демо пользователь'),
(777, 'Администратор');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `login` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_last_action` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `login`, `password`, `user_last_action`) VALUES
(1, 'user1', 'user1', 'd9f1eeb7e757b522c74cfa25e51e9c4224c9e15e52afc47c225b757e7bee1f9d', '2021-03-12 10:03:04'),
(2, 'user3', 'user3', '87b6321e18ef7de2a6df54a07fa7782992877af70a45fd6a2ed7fe81e1236b78', '2021-03-12 10:03:04'),
(999, 'demo', 'demo', '922e40a289c7deafaf8cabf7a2ec10ef68eb5140ac65ca14b86debdb49dbda32', '2021-03-12 10:03:04'),
(1000, 'тест', 'testtt', 'b5a812f77591c807fc3a54494f32e55ff55e23f49445a3cf708c19577f218a5b', '2021-03-12 23:00:44'),
(1001, 'тестовый', 'testt', '6ee1b29cfa295e16b077b833ad835741147538da338b770b61e592afc92b1ee6', '2021-03-12 23:39:45');

-- --------------------------------------------------------

--
-- Структура таблицы `user_role`
--

CREATE TABLE `user_role` (
  `id_user_role` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user_role`
--

INSERT INTO `user_role` (`id_user_role`, `id_user`, `id_role`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 999, 999);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `basket`
--
ALTER TABLE `basket`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `brand`
--
ALTER TABLE `brand`
  ADD KEY `id` (`id`);

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD KEY `id_category` (`id_category`);

--
-- Индексы таблицы `coments`
--
ALTER TABLE `coments`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id_order`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_products_categories` (`category_id`),
  ADD KEY `FK_products_brand` (`brand_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id_user_role`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `basket`
--
ALTER TABLE `basket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `brand`
--
ALTER TABLE `brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `coments`
--
ALTER TABLE `coments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1002;

--
-- AUTO_INCREMENT для таблицы `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id_user_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `FK_products_brand` FOREIGN KEY (`brand_id`) REFERENCES `brand` (`id`),
  ADD CONSTRAINT `FK_products_categories` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id_category`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
