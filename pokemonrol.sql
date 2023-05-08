-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-04-2023 a las 18:30:48
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pokemonrol`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario`
--

CREATE TABLE `inventario` (
  `id_item` int(255) NOT NULL,
  `id_pj` int(255) NOT NULL,
  `id` int(255) NOT NULL,
  `item` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pj`
--

CREATE TABLE `pj` (
  `id_pj` int(255) NOT NULL,
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `exp` int(255) NOT NULL,
  `vida` int(255) NOT NULL,
  `zenny` int(255) NOT NULL,
  `region` varchar(255) NOT NULL,
  `fuerza` int(255) NOT NULL,
  `destreza` int(255) NOT NULL,
  `resistencia` int(255) NOT NULL,
  `percepcion` int(255) NOT NULL,
  `inteligencia` int(255) NOT NULL,
  `apariencia` int(255) NOT NULL,
  `conocimientopkmn` int(255) NOT NULL DEFAULT 0,
  `mecanica` int(255) NOT NULL DEFAULT 0,
  `pelea` int(255) NOT NULL DEFAULT 0,
  `tecnologia` int(255) NOT NULL DEFAULT 0,
  `cultura` int(255) NOT NULL DEFAULT 0,
  `cocina` int(255) NOT NULL DEFAULT 0,
  `supervivencia` int(255) NOT NULL DEFAULT 0,
  `cartografia` int(255) NOT NULL DEFAULT 0,
  `conducir` int(255) NOT NULL DEFAULT 0,
  `informatica` int(255) NOT NULL DEFAULT 0,
  `investigacion` int(255) NOT NULL DEFAULT 0,
  `pericias` int(255) NOT NULL DEFAULT 0,
  `subterfugio` int(255) NOT NULL DEFAULT 0,
  `sigilo` int(255) NOT NULL DEFAULT 0,
  `medicina` int(255) NOT NULL DEFAULT 0,
  `interpretacion` int(255) NOT NULL DEFAULT 0,
  `ciencias` int(255) NOT NULL DEFAULT 0,
  `atletismo` int(255) NOT NULL DEFAULT 0,
  `alerta` int(255) NOT NULL DEFAULT 0,
  `intimidacion` int(255) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pokemon`
--

CREATE TABLE `pokemon` (
  `id_pkmn` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `id_pj` int(255) NOT NULL,
  `apodo` varchar(255) NOT NULL,
  `nivel` int(255) NOT NULL,
  `experiencia` int(255) NOT NULL,
  `vida` int(255) NOT NULL,
  `efecto_habilidad` varchar(255) NOT NULL DEFAULT 'habilidad',
  `rancho` int(255) NOT NULL DEFAULT 0,
  `habilidad` varchar(255) NOT NULL DEFAULT 'sin habilidad',
  `atkfisico` int(255) NOT NULL,
  `atkespecial` int(255) NOT NULL,
  `deffisico` int(255) NOT NULL,
  `defespecial` int(255) NOT NULL,
  `agilidad` int(255) NOT NULL,
  `destreza` int(255) NOT NULL,
  `move_a_name` varchar(255) NOT NULL,
  `move_a_dmg` int(255) NOT NULL,
  `move_a_effect` longtext NOT NULL DEFAULT 'no effect',
  `move_b_name` varchar(255) NOT NULL,
  `move_b_dmg` int(255) NOT NULL,
  `move_b_effect` longtext NOT NULL DEFAULT 'no effect',
  `move_c_name` varchar(255) NOT NULL,
  `move_c_dmg` int(255) NOT NULL,
  `move_c_effect` longtext NOT NULL DEFAULT 'no effect',
  `move_d_name` varchar(255) NOT NULL,
  `move_d_dmg` int(255) NOT NULL,
  `move_d_effect` longtext NOT NULL DEFAULT 'no effect',
  `move_e_name` varchar(255) NOT NULL,
  `move_e_dmg` int(255) NOT NULL,
  `move_e_effect` longtext NOT NULL DEFAULT 'no effect',
  `move_f_name` varchar(255) NOT NULL,
  `move_f_dmg` int(255) NOT NULL,
  `move_f_effect` longtext NOT NULL DEFAULT 'no effect'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `email` varchar(255) NOT NULL,
  `jugador` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `id` int(255) NOT NULL,
  `token` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `inventario`
--
ALTER TABLE `inventario`
  ADD PRIMARY KEY (`id_item`);

--
-- Indices de la tabla `pj`
--
ALTER TABLE `pj`
  ADD PRIMARY KEY (`id_pj`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `inventario`
--
ALTER TABLE `inventario`
  MODIFY `id_item` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pj`
--
ALTER TABLE `pj`
  MODIFY `id_pj` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
