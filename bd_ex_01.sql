-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-05-2016 a las 15:44:00
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_ex_01`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `ID` bigint(20) UNSIGNED NOT NULL,
  `Name` varchar(20) COLLATE utf8_unicode_520_ci NOT NULL,
  `Mail` varchar(50) COLLATE utf8_unicode_520_ci NOT NULL,
  `Description` text COLLATE utf8_unicode_520_ci,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_520_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`ID`, `Name`, `Mail`, `Description`, `Date`) VALUES
(1, 'Alpha2', 'alpha@mymail.com', 'Este sujeto tiene una descripción', '2016-05-01'),
(2, 'Beta', 'beta@mymail.com', 'Ahora Beta tiene una descripción! ', '2016-04-01'),
(4, 'Delta', 'delta@mymail.com', 'lalalalala', '2016-05-13'),
(5, 'Gamma', 'gamma@mymail.com', 'Simple descripción :)', '2016-01-14');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `ID` (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
