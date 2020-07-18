-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 172.12.20.2:3306
-- Tiempo de generación: 18-07-2020 a las 03:45:35
-- Versión del servidor: 10.4.13-MariaDB-1:10.4.13+maria~focal
-- Versión de PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `collectdb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Album`
--

CREATE TABLE `Album` (
  `id` int(11) NOT NULL,
  `title` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `label` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `sleeve` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `format` int(11) DEFAULT NULL,
  `artist` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `genre` int(11) DEFAULT NULL,
  `country` int(11) DEFAULT NULL,
  `released` int(11) DEFAULT NULL,
  `added` date DEFAULT NULL,
  `sleeveStatus` int(11) DEFAULT NULL,
  `diskStatus` int(11) DEFAULT NULL,
  `purchasePrice` double DEFAULT NULL,
  `collection` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `Album`
--

INSERT INTO `Album` (`id`, `title`, `label`, `sleeve`, `format`, `artist`, `genre`, `country`, `released`, `added`, `sleeveStatus`, `diskStatus`, `purchasePrice`, `collection`) VALUES
(1, 'Hysteria', 'Mercury 830 675 1', NULL, 1, 'Def Leppard', 24, 24, 1987, NULL, NULL, 5, NULL, 2),
(2, '1984', 'Warner Bros 3027', NULL, 1, 'Van Halen', 24, 92, 1984, NULL, NULL, 5, NULL, 2),
(3, 'Dirty Deeps Done Dirt Cheap', 'Atlantic SD-16033', NULL, 1, 'AC/DC', 24, 78, 1976, NULL, NULL, 4, NULL, 1),
(4, 'Led Zeppelin', 'Atlantic SD-8216', NULL, 1, 'Led Zeppelin', 24, 78, 1969, NULL, NULL, 4, NULL, 4),
(5, 'Ledd Zeppelin II', 'Atlantic SD-19127', NULL, 1, 'Led Zeppelin', 24, 78, 1977, NULL, NULL, 4, NULL, 1),
(6, 'Physical Graffiti', 'Awan Song SS-2-200', NULL, 1, 'Led Zeppelin', 24, 78, 1975, NULL, NULL, 3, NULL, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Article`
--

CREATE TABLE `Article` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `artist` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `genre` int(11) DEFAULT NULL,
  `added` date DEFAULT NULL,
  `purchasePrice` double DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `collection` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Collection`
--

CREATE TABLE `Collection` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `Collection`
--

INSERT INTO `Collection` (`id`, `name`, `description`, `user`) VALUES
(1, '70s Rock Vinyls', 'Vinyls Albums Rock from 70s', 1),
(2, '80s Rock Vinyls', 'Vinyls Albums Rock from 80s', 1),
(3, 'Salsa Vinyls', 'Salsa vinyls albums', 1),
(4, '60s Rock Vinyls', 'Vinyls Albums Rock From 60s', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Country`
--

CREATE TABLE `Country` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `flag` varchar(255) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `Country`
--

INSERT INTO `Country` (`id`, `name`, `flag`) VALUES
(1, 'Albania', NULL),
(2, 'American Samoa', NULL),
(3, 'Anguilla', NULL),
(4, 'Antigua and Barbuda', NULL),
(5, 'Armenia', NULL),
(6, 'Aruba', NULL),
(7, 'Australia', NULL),
(8, 'Bahamas', NULL),
(9, 'Bahrain', NULL),
(10, 'Barbados', NULL),
(11, 'Belize', NULL),
(12, 'Bermuda', NULL),
(13, 'Bosnia and Herzegovina', NULL),
(14, 'Botswana', NULL),
(15, 'Brazil', NULL),
(16, 'British Virgin Islands', NULL),
(17, 'Cabo Verde', NULL),
(18, 'Canada', NULL),
(19, 'Cayman Islands', NULL),
(20, 'Chile', NULL),
(21, 'China', NULL),
(22, 'Hong Kong', NULL),
(23, 'Macao', NULL),
(24, 'Colombia', NULL),
(25, 'Cook Islands', NULL),
(26, 'Costa Rica', NULL),
(27, 'Curaçao', NULL),
(28, 'Dominica', NULL),
(29, 'Faroe Islands', NULL),
(30, 'Fiji', NULL),
(31, 'Former Yugoslav Republic of Macedonia', NULL),
(32, 'Georgia', NULL),
(33, 'Greenland', NULL),
(34, 'Grenada', NULL),
(35, 'Guam', NULL),
(36, 'Guernsey', NULL),
(37, 'Iceland', NULL),
(38, 'India', NULL),
(39, 'Indonesia', NULL),
(40, 'Isle of Man', NULL),
(41, 'Israel', NULL),
(42, 'Jamaica', NULL),
(43, 'Japan', NULL),
(44, 'Jersey', NULL),
(45, 'Jordan', NULL),
(46, 'Korea', NULL),
(47, 'Malaysia', NULL),
(48, 'Maldives', NULL),
(49, 'Mauritius', NULL),
(50, 'Mongolia', NULL),
(51, 'Montenegro', NULL),
(52, 'Montserrat', NULL),
(53, 'Morocco', NULL),
(54, 'Namibia', NULL),
(55, 'New Caledonia', NULL),
(56, 'Norway', NULL),
(57, 'Oman', NULL),
(58, 'Panama', NULL),
(59, 'Peru', NULL),
(60, 'Qatar', NULL),
(61, 'Saint Kitts and Nevis', NULL),
(62, 'Saint Lucia', NULL),
(63, 'Saint Vincent and the Grenadines', NULL),
(64, 'Samoa', NULL),
(65, 'Saudi Arabia', NULL),
(66, 'Serbia', NULL),
(67, 'Seychelles', NULL),
(68, 'Singapore', NULL),
(69, 'South Africa', NULL),
(70, 'Swaziland', NULL),
(71, 'Taiwan', NULL),
(72, 'Thailand', NULL),
(73, 'Trinidad and Tobago', NULL),
(74, 'Tunisia', NULL),
(75, 'Turkey', NULL),
(76, 'Turks and Caicos Islands', NULL),
(77, 'United Arab Emirates', NULL),
(78, 'United States', NULL),
(79, 'Uruguay', NULL),
(80, 'US Virgin Islands', NULL),
(81, 'Viet Nam', NULL),
(82, 'Andorra', NULL),
(83, 'Liechtenstein', NULL),
(84, 'Monaco', NULL),
(85, 'San Marino', NULL),
(86, 'Switzerland', NULL),
(87, 'Marshall Islands', NULL),
(88, 'Nauru', NULL),
(89, 'Niue', NULL),
(90, 'Palau', NULL),
(91, 'Vanuatu', NULL),
(92, 'Venezuela', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Format`
--

CREATE TABLE `Format` (
  `id` int(11) NOT NULL,
  `name` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `Format`
--

INSERT INTO `Format` (`id`, `name`, `description`) VALUES
(1, 'Vinyl', NULL),
(2, 'Cassette', NULL),
(3, 'CD', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Genre`
--

CREATE TABLE `Genre` (
  `id` int(11) NOT NULL,
  `name` varchar(20) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `Genre`
--

INSERT INTO `Genre` (`id`, `name`) VALUES
(1, 'Big Band'),
(2, 'Blues Contemporary'),
(3, 'Country Traditional'),
(4, 'Dance'),
(5, 'Electronica'),
(6, 'Experimental'),
(7, 'Folk International'),
(8, 'Gospel'),
(9, 'Grunge Emo'),
(10, 'Hip Hop Rap'),
(11, 'Jazz Classic'),
(12, 'Metal Alternative'),
(13, 'Metal Death'),
(14, 'Metal Heavy'),
(15, 'Pop Contemporary'),
(16, 'Pop Indie'),
(17, 'Pop Latin'),
(18, 'Punk'),
(19, 'Reggae'),
(20, 'RnB Soul'),
(21, 'Rock Alternative'),
(22, 'Rock College'),
(23, 'Rock Contemporary'),
(24, 'Rock Hard'),
(25, 'Rock Neo Psychedelia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `List`
--

CREATE TABLE `List` (
  `id` int(11) NOT NULL,
  `name` varchar(30) COLLATE utf8_bin DEFAULT NULL,
  `user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `List`
--

INSERT INTO `List` (`id`, `name`, `user`) VALUES
(1, 'Working Play List', 1),
(2, 'Power', 1),
(3, 'Progressive Rock', 1),
(4, 'Prefe', 1),
(5, 'Test Play List', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ListoToAlbum`
--

CREATE TABLE `ListoToAlbum` (
  `album` int(11) DEFAULT NULL,
  `list` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `ListoToAlbum`
--

INSERT INTO `ListoToAlbum` (`album`, `list`) VALUES
(1, 1),
(2, 1),
(3, 2),
(1, 2),
(NULL, 1),
(NULL, 1),
(5, 1),
(5, 5),
(4, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Status`
--

CREATE TABLE `Status` (
  `id` int(11) NOT NULL,
  `value` varchar(5) COLLATE utf8_bin DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `Status`
--

INSERT INTO `Status` (`id`, `value`, `description`) VALUES
(1, 'M o N', 'Mint / Como Nuevo'),
(2, 'MN', 'Near Mint / Casi como Nuevo'),
(3, 'EX', 'Excellent / Excelente'),
(4, 'VG+', 'Very Goog+ / Mas que Muy Bueno'),
(5, 'VG', 'Very Good / Muy Bueno'),
(6, 'F o P', 'Fair or Poor / Descuidado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `User`
--

CREATE TABLE `User` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `username` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `email` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `password` varchar(300) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `User`
--

INSERT INTO `User` (`id`, `name`, `username`, `email`, `password`) VALUES
(1, 'Carlos Toro', 'charlitoro', 'carlostoro@gmail.com', '$2y$10$xlPXT0AWxfxkwWB4J0oTVOQFyHbYo1Ym9tTnzPJlP/G5aq5dv70ra');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Album`
--
ALTER TABLE `Album`
  ADD PRIMARY KEY (`id`),
  ADD KEY `format` (`format`),
  ADD KEY `genre` (`genre`),
  ADD KEY `country` (`country`),
  ADD KEY `sleeveStatus` (`sleeveStatus`),
  ADD KEY `diskStatus` (`diskStatus`),
  ADD KEY `collection` (`collection`);

--
-- Indices de la tabla `Article`
--
ALTER TABLE `Article`
  ADD PRIMARY KEY (`id`),
  ADD KEY `genre` (`genre`),
  ADD KEY `status` (`status`),
  ADD KEY `collection` (`collection`);

--
-- Indices de la tabla `Collection`
--
ALTER TABLE `Collection`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user` (`user`);

--
-- Indices de la tabla `Country`
--
ALTER TABLE `Country`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `Format`
--
ALTER TABLE `Format`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `Genre`
--
ALTER TABLE `Genre`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `List`
--
ALTER TABLE `List`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user` (`user`);

--
-- Indices de la tabla `ListoToAlbum`
--
ALTER TABLE `ListoToAlbum`
  ADD KEY `album` (`album`),
  ADD KEY `list` (`list`);

--
-- Indices de la tabla `Status`
--
ALTER TABLE `Status`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Album`
--
ALTER TABLE `Album`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `Article`
--
ALTER TABLE `Article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `Collection`
--
ALTER TABLE `Collection`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `Country`
--
ALTER TABLE `Country`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT de la tabla `Format`
--
ALTER TABLE `Format`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `Genre`
--
ALTER TABLE `Genre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `List`
--
ALTER TABLE `List`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `Status`
--
ALTER TABLE `Status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `User`
--
ALTER TABLE `User`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `Album`
--
ALTER TABLE `Album`
  ADD CONSTRAINT `Album_ibfk_1` FOREIGN KEY (`format`) REFERENCES `Format` (`id`),
  ADD CONSTRAINT `Album_ibfk_2` FOREIGN KEY (`genre`) REFERENCES `Genre` (`id`),
  ADD CONSTRAINT `Album_ibfk_3` FOREIGN KEY (`country`) REFERENCES `Country` (`id`),
  ADD CONSTRAINT `Album_ibfk_4` FOREIGN KEY (`sleeveStatus`) REFERENCES `Status` (`id`),
  ADD CONSTRAINT `Album_ibfk_5` FOREIGN KEY (`diskStatus`) REFERENCES `Status` (`id`),
  ADD CONSTRAINT `Album_ibfk_6` FOREIGN KEY (`collection`) REFERENCES `Collection` (`id`);

--
-- Filtros para la tabla `Article`
--
ALTER TABLE `Article`
  ADD CONSTRAINT `Article_ibfk_1` FOREIGN KEY (`genre`) REFERENCES `Genre` (`id`),
  ADD CONSTRAINT `Article_ibfk_2` FOREIGN KEY (`status`) REFERENCES `Status` (`id`),
  ADD CONSTRAINT `Article_ibfk_3` FOREIGN KEY (`collection`) REFERENCES `Collection` (`id`);

--
-- Filtros para la tabla `Collection`
--
ALTER TABLE `Collection`
  ADD CONSTRAINT `Collection_ibfk_1` FOREIGN KEY (`user`) REFERENCES `User` (`id`);

--
-- Filtros para la tabla `List`
--
ALTER TABLE `List`
  ADD CONSTRAINT `List_ibfk_1` FOREIGN KEY (`user`) REFERENCES `User` (`id`);

--
-- Filtros para la tabla `ListoToAlbum`
--
ALTER TABLE `ListoToAlbum`
  ADD CONSTRAINT `ListoToAlbum_ibfk_1` FOREIGN KEY (`album`) REFERENCES `Album` (`id`),
  ADD CONSTRAINT `ListoToAlbum_ibfk_2` FOREIGN KEY (`list`) REFERENCES `List` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
