-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-11-2023 a las 02:07:41
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `squadron`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `canciones`
--

CREATE TABLE `canciones` (
  `ID_CANCIONES` int(11) NOT NULL,
  `NOMBRE` varchar(100) NOT NULL,
  `ARTISTA` varchar(100) NOT NULL DEFAULT '---',
  `BPM` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `canciones`
--

INSERT INTO `canciones` (`ID_CANCIONES`, `NOMBRE`, `ARTISTA`, `BPM`) VALUES
(37, 'No me arrepiento de este amor', 'Attaque 77', 192),
(38, 'El sol no regresa', 'La Quinta Estación', 128),
(39, 'Prófugos', 'Soda Estéreo', 130),
(40, 'Mala vida', 'Los rancheros', 166),
(41, 'Corazón espinado', 'Maná', 125),
(42, 'Clavado en un bar', 'Maná', 148),
(43, 'La corbata de mi tío', 'Los Ex', 147),
(44, 'Estrechez de corazón', 'Los prisioneros', 130),
(45, 'Mujer amante', 'Rata Blanca', 120),
(46, 'Entre dos tierras', 'Héroes del Silencio', 166),
(47, 'One way or another', 'Blondie', 162),
(48, 'Libido', 'Libido', 119),
(49, 'Triciclo Perú', 'Los Mojarras', 173),
(50, 'Loco', 'Calamaro', 110),
(51, 'Pupilas Lejanas', '---', 150),
(52, 'Runaway', '---', 150),
(53, 'La Muralla Verde', '---', 130),
(54, 'Yo te vi en un tren', '---', 137),
(55, 'Por el resto de tus días', '---', 137),
(56, 'Devuelveme a mi chica', '---', 172),
(57, 'Marta tiene un marcapaso', '---', 204),
(58, 'La corbata de mi tio', '---', 147),
(59, 'El sol no regresa', '---', 128),
(60, 'El che', '---', 137),
(61, 'Mala vida', '---', 166),
(62, 'oye mi amor', '---', 162),
(63, 'Labios compartidos', '---', 162);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `canciones`
--
ALTER TABLE `canciones`
  ADD PRIMARY KEY (`ID_CANCIONES`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `canciones`
--
ALTER TABLE `canciones`
  MODIFY `ID_CANCIONES` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
