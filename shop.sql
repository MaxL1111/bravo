-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 18 2016 г., 19:53
-- Версия сервера: 5.5.48
-- Версия PHP: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `shop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Комплектующие'),
(2, 'Ноутбуки и планшеты'),
(3, 'Компьютеры'),
(4, 'Цифровое фото и видео'),
(5, 'Аудио-видео техника'),
(6, 'Телефоны');

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL,
  `preview_text` text NOT NULL,
  `full_text` text NOT NULL,
  `img` text NOT NULL,
  `date_create` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL,
  `id_category` int(11) NOT NULL,
  `title` text NOT NULL,
  `price` int(11) NOT NULL,
  `description` text NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `id_category`, `title`, `price`, `description`, `img`) VALUES
(1, 2, 'Acer', 900, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores consectetur doloremque iste labore veniam? Aliquid, consequatur dolorem eius et hic id labore laboriosam magnam modi molestiae quaerat', '45view-1620.jpg'),
(2, 2, 'HP', 495, 'Тип ноутбука: Ноутбук, Тип операционной системы: Dos, Версия операционой системы: FreeDos, Материал корпуса: Пластик, Комплект поставки: Адаптер питания Документация, Диагональ экрана: 15.6 ", Разрешение экрана: 1366x768 пикселей, Бренд процессора: Intel, Серия процессора: Pentium, Модель процессора: N3710, Поколение процессора: Braswell, Количество ядер: 4, Количество потоков: 4, Тактовая частота в турбо-режиме: 2.56 ГГц, Объем оперативной памяти: 4 Гб, Тактовая частота: 1600 МГц, Тип видеокарты: Встроенная, Модель видеокарты: HD Graphics 405, Емкость жесткого диска: 500 Гб, Картридер: Да, Аудиосистема: Стерео, Вебкамера: Да, Управление курсором: Тачпад, Bluetooth: 4.0, USB 3.0: 1 шт., HDMI: Да, Вес: 1.96 кг, Гарантия: 1 год, Страна производитель: Китай', 'hp.jpeg'),
(3, 2, 'Lenovo', 655, 'Тип ноутбука: Ноутбук, Тип операционной системы: Dos, Версия операционой системы: FreeDos, Материал корпуса: Пластик, Комплект поставки: Адаптер питания Документация, Диагональ экрана: 15.6 ", Разрешение экрана: 1366x768 пикселей, Бренд процессора: AMD, Серия процессора: A6, Модель процессора: 7310, Поколение процессора: Carrizo-L, Количество ядер: 4, Количество потоков: 4, Тактовая частота в турбо-режиме: 2.4 ГГц, Объем оперативной памяти: 4 Гб, Тактовая частота: 1600 МГц, Тип видеокарты: Дискретная, Модель видеокарты: Radeon R5 M430, Встроенная память видеокарты: 2 Гб, Емкость жесткого диска: 500 Гб, Картридер: Да, Аудиосистема: Моно, Вебкамера: Да, Управление курсором: Тачпад, Bluetooth: 4.0, USB 3.0: 1 шт., HDMI: Да, Запас энергии: 24 Вт*ч, Вес: 2.2 кг, Гарантия: 1 год, Страна производитель: Китай', 'lenovo.jpeg'),
(4, 2, 'ASUS', 1000, 'Тип ноутбука: Ноутбук, Тип операционной системы: Linux, Версия операционой системы: Linpus Linux, Материал корпуса: Пластик, Комплект поставки: Адаптер питания Документация, Диагональ экрана: 15.6 ", Разрешение экрана: 1366x768 пикселей, Бренд процессора: Intel, Серия процессора: Celeron, Модель процессора: N3350, Поколение процессора: Apollo Lake, Количество ядер: 2, Количество потоков: 2, Тактовая частота в турбо-режиме: 2.0 ГГц, Объем оперативной памяти: 2 Гб, Тактовая частота: 1600 МГц, Тип видеокарты: Встроенная, Модель видеокарты: HD Graphics 500, Емкость жесткого диска: 500 Гб, Картридер: Да, Аудиосистема: Стерео, Вебкамера: Да, Управление курсором: Тачпад, Bluetooth: Да, USB 3.0: 1 шт., HDMI: Да, Емкость аккумулятора: 3220 мАч, Запас энергии: 36 Вт*ч, Вес: 2.4 кг, Гарантия: 1 год, Страна производитель: Китай', 'asus.jpeg');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
