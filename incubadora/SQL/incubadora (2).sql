-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-10-2018 a las 04:47:59
-- Versión del servidor: 10.1.35-MariaDB
-- Versión de PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `incubadora`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bet`
--

CREATE TABLE `bet` (
  `id_bet` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `id_idea` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish_ci;

--
-- Volcado de datos para la tabla `bet`
--

INSERT INTO `bet` (`id_bet`, `quantity`, `id_idea`, `id_user`) VALUES
(1, 3445, 35, 4),
(2, 22, 35, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comment`
--

CREATE TABLE `comment` (
  `id_comment` int(11) NOT NULL,
  `text` varchar(400) COLLATE utf32_spanish_ci NOT NULL,
  `id_idea` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish_ci;

--
-- Volcado de datos para la tabla `comment`
--

INSERT INTO `comment` (`id_comment`, `text`, `id_idea`, `id_user`) VALUES
(1, 'hola soy el comentario 1', 35, 4),
(2, 'hola soy el comentario 2 que tengas un lindo dia', 35, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `donnation`
--

CREATE TABLE `donnation` (
  `id_donnation` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `id_idea` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish_ci;

--
-- Volcado de datos para la tabla `donnation`
--

INSERT INTO `donnation` (`id_donnation`, `quantity`, `id_idea`, `id_user`) VALUES
(1, 300, 35, 4),
(2, 200, 35, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `idea`
--

CREATE TABLE `idea` (
  `id_idea` int(11) NOT NULL,
  `name` varchar(40) COLLATE utf32_spanish_ci NOT NULL,
  `id_user` int(11) NOT NULL,
  `theme` varchar(40) COLLATE utf32_spanish_ci NOT NULL,
  `impact` varchar(40) COLLATE utf32_spanish_ci NOT NULL,
  `description` varchar(400) COLLATE utf32_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish_ci;

--
-- Volcado de datos para la tabla `idea`
--

INSERT INTO `idea` (`id_idea`, `name`, `id_user`, `theme`, `impact`, `description`) VALUES
(35, 'fede1', 6, 'social', 'fede', 'Esta idea esta basaa en cosas muy interesantes , esta descripcion es muy buena ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `idea_like`
--

CREATE TABLE `idea_like` (
  `id_like` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `id_idea` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish_ci;

--
-- Volcado de datos para la tabla `idea_like`
--

INSERT INTO `idea_like` (`id_like`, `quantity`, `id_idea`, `id_user`) VALUES
(1, 6, 35, 4),
(2, 4, 35, 4),
(3, 2, 35, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `theme`
--

CREATE TABLE `theme` (
  `id_theme` int(11) NOT NULL,
  `name` varchar(40) COLLATE utf32_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish_ci;

--
-- Volcado de datos para la tabla `theme`
--

INSERT INTO `theme` (`id_theme`, `name`) VALUES
(11, 'social'),
(12, 'politica'),
(13, 'other'),
(15, 'ocio');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `name` varchar(20) COLLATE utf32_spanish2_ci NOT NULL,
  `lastname` varchar(20) COLLATE utf32_spanish2_ci NOT NULL,
  `email` varchar(40) COLLATE utf32_spanish2_ci NOT NULL,
  `about` text COLLATE utf32_spanish2_ci NOT NULL,
  `avatar` blob NOT NULL,
  `userId` varchar(25) COLLATE utf32_spanish2_ci NOT NULL,
  `password` varchar(25) COLLATE utf32_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish2_ci;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id_user`, `name`, `lastname`, `email`, `about`, `avatar`, `userId`, `password`) VALUES
(4, 'Facundo Edelmar', 'Martinez', 'facundomartinez@gmail.com', 'texto largo', '', 'famartinez', 'lala123'),
(5, 'Fede', 'Ackerley', 'fedeack@gmail.com', 'texto largo', '', 'fedeack', 'lala345'),
(6, 'pepe', 'Sarlanga', 'sarasa@gmail.com', 'asdljkasjdladj aasd ajsdla', '', 'pepesar', 'lala123');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `bet`
--
ALTER TABLE `bet`
  ADD PRIMARY KEY (`id_bet`),
  ADD KEY `id_idea` (`id_idea`),
  ADD KEY `id_user` (`id_user`);

--
-- Indices de la tabla `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id_comment`),
  ADD KEY `id_idea` (`id_idea`),
  ADD KEY `id_user` (`id_user`);

--
-- Indices de la tabla `donnation`
--
ALTER TABLE `donnation`
  ADD PRIMARY KEY (`id_donnation`),
  ADD KEY `id_idea` (`id_idea`),
  ADD KEY `id_user` (`id_user`);

--
-- Indices de la tabla `idea`
--
ALTER TABLE `idea`
  ADD PRIMARY KEY (`id_idea`),
  ADD KEY `user_id` (`id_user`);

--
-- Indices de la tabla `idea_like`
--
ALTER TABLE `idea_like`
  ADD PRIMARY KEY (`id_like`),
  ADD KEY `id_idea` (`id_idea`),
  ADD KEY `id_user` (`id_user`);

--
-- Indices de la tabla `theme`
--
ALTER TABLE `theme`
  ADD PRIMARY KEY (`id_theme`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `bet`
--
ALTER TABLE `bet`
  MODIFY `id_bet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `comment`
--
ALTER TABLE `comment`
  MODIFY `id_comment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `donnation`
--
ALTER TABLE `donnation`
  MODIFY `id_donnation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `idea`
--
ALTER TABLE `idea`
  MODIFY `id_idea` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT de la tabla `idea_like`
--
ALTER TABLE `idea_like`
  MODIFY `id_like` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `theme`
--
ALTER TABLE `theme`
  MODIFY `id_theme` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `bet`
--
ALTER TABLE `bet`
  ADD CONSTRAINT `bet_ibfk_1` FOREIGN KEY (`id_idea`) REFERENCES `idea` (`id_idea`),
  ADD CONSTRAINT `bet_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Filtros para la tabla `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`id_idea`) REFERENCES `idea` (`id_idea`),
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Filtros para la tabla `donnation`
--
ALTER TABLE `donnation`
  ADD CONSTRAINT `donnation_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`),
  ADD CONSTRAINT `donnation_ibfk_2` FOREIGN KEY (`id_idea`) REFERENCES `idea` (`id_idea`);

--
-- Filtros para la tabla `idea`
--
ALTER TABLE `idea`
  ADD CONSTRAINT `idea_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Filtros para la tabla `idea_like`
--
ALTER TABLE `idea_like`
  ADD CONSTRAINT `idea_like_ibfk_1` FOREIGN KEY (`id_idea`) REFERENCES `idea` (`id_idea`),
  ADD CONSTRAINT `idea_like_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
