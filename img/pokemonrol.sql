-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-05-2023 a las 16:54:16
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.1.17

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pj`
--

CREATE TABLE `pj` (
  `id_pj` int(255) NOT NULL,
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `sprite` varchar(255) NOT NULL DEFAULT '0',
  `exp` int(255) NOT NULL DEFAULT 0,
  `vida` int(255) NOT NULL DEFAULT 20,
  `tipoa` varchar(255) DEFAULT NULL,
  `tipob` varchar(255) DEFAULT NULL,
  `zenny` int(255) NOT NULL,
  `region` varchar(255) NOT NULL,
  `fuerza` int(255) NOT NULL,
  `destreza` int(255) NOT NULL,
  `resistencia` int(255) NOT NULL,
  `suerte` int(255) NOT NULL,
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
  `intimidacion` int(255) NOT NULL DEFAULT 0,
  `inventario` longtext NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pj`
--

INSERT INTO `pj` (`id_pj`, `id`, `name`, `sprite`, `exp`, `vida`, `tipoa`, `tipob`, `zenny`, `region`, `fuerza`, `destreza`, `resistencia`, `suerte`, `percepcion`, `inteligencia`, `apariencia`, `conocimientopkmn`, `mecanica`, `pelea`, `tecnologia`, `cultura`, `cocina`, `supervivencia`, `cartografia`, `conducir`, `informatica`, `investigacion`, `pericias`, `subterfugio`, `sigilo`, `medicina`, `interpretacion`, `ciencias`, `atletismo`, `alerta`, `intimidacion`, `inventario`) VALUES
(7, 8, 'Porcupine', 'https://play.pokemonshowdown.com/sprites/trainers/scientist-gen4.png', 12, 20, NULL, NULL, 2000, 'Kanto', 2, 4, 2, 2, 3, 4, 2, 4, 0, 2, 4, 0, 2, 0, 0, 0, 4, 2, 2, 4, 0, 2, 0, 4, 0, 0, 2, 'Pokedex\r\nPokeball 11\r\nPocion 2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pokemon`
--

CREATE TABLE `pokemon` (
  `id_pkmn` int(255) NOT NULL,
  `id_api_pokemon` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `sprite` varchar(255) NOT NULL,
  `tipoa` varchar(255) NOT NULL,
  `tipob` varchar(255) DEFAULT NULL,
  `id_pj` int(255) NOT NULL,
  `apodo` varchar(255) NOT NULL,
  `nivel` int(255) NOT NULL,
  `experiencia` int(255) NOT NULL,
  `vida` int(255) NOT NULL,
  `efecto_habilidad` varchar(255) NOT NULL DEFAULT 'habilidad',
  `rancho` int(255) NOT NULL DEFAULT 0,
  `habilidad` varchar(255) NOT NULL DEFAULT 'sin habilidad',
  `shinny` int(11) NOT NULL DEFAULT 0,
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
  `move_f_effect` longtext NOT NULL DEFAULT 'no effect',
  `move_a_tipo` varchar(255) NOT NULL,
  `move_b_tipo` varchar(255) NOT NULL,
  `move_c_tipo` varchar(255) NOT NULL,
  `move_d_tipo` varchar(255) NOT NULL,
  `move_e_tipo` varchar(255) NOT NULL,
  `move_f_tipo` varchar(255) NOT NULL,
  `move_a_elemento` varchar(255) NOT NULL DEFAULT '',
  `move_b_elemento` varchar(255) NOT NULL DEFAULT '',
  `move_c_elemento` varchar(255) NOT NULL DEFAULT '',
  `move_d_elemento` varchar(255) NOT NULL DEFAULT '',
  `move_e_elemento` varchar(255) NOT NULL DEFAULT '',
  `move_f_elemento` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pokemon`
--

INSERT INTO `pokemon` (`id_pkmn`, `id_api_pokemon`, `name`, `sprite`, `tipoa`, `tipob`, `id_pj`, `apodo`, `nivel`, `experiencia`, `vida`, `efecto_habilidad`, `rancho`, `habilidad`, `shinny`, `atkfisico`, `atkespecial`, `deffisico`, `defespecial`, `agilidad`, `destreza`, `move_a_name`, `move_a_dmg`, `move_a_effect`, `move_b_name`, `move_b_dmg`, `move_b_effect`, `move_c_name`, `move_c_dmg`, `move_c_effect`, `move_d_name`, `move_d_dmg`, `move_d_effect`, `move_e_name`, `move_e_dmg`, `move_e_effect`, `move_f_name`, `move_f_dmg`, `move_f_effect`, `move_a_tipo`, `move_b_tipo`, `move_c_tipo`, `move_d_tipo`, `move_e_tipo`, `move_f_tipo`, `move_a_elemento`, `move_b_elemento`, `move_c_elemento`, `move_d_elemento`, `move_e_elemento`, `move_f_elemento`) VALUES
(1, 6, 'charizard', 'https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/6.png', 'fire', 'flying', 7, '', 0, 0, 0, '', 0, '', 0, 7, 7, 7, 7, 7, 7, '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(6, 133, 'eevee', 'https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/133.png', 'normal', ' ', 7, '', 0, 0, 0, '', 0, '', 0, 8, 8, 8, 8, 8, 8, '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(7, 133, 'eevee', 'https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/shiny/133.png', 'normal', '', 7, '', 0, 0, 0, '', 0, '', 0, 8, 8, 8, 8, 8, 8, '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(8, 149, 'dragonite', 'https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/149.png', 'dragon', 'flying', 7, '', 25, 0, 50, 'Inmune a estados alterados', 0, 'Escamas', 0, 14, 12, 12, 12, 18, 16, 'Cola Dragon', 8, '', 'Garra Dragon', 8, '25% de probabilidad de hacer retroceder', 'impactrueno', 6, '25% de probabilidad de paralisis', 'rayo de hielo', 8, '25% de probabilidad de congelar', '', 0, '', '', 0, '0', 'fisico', 'fisico', 'especial', 'especial', '', '', 'dragon', 'dragon', 'electric', 'ice', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `email` varchar(255) NOT NULL,
  `jugador` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `id` int(255) NOT NULL,
  `token` varchar(255) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`email`, `jugador`, `pass`, `id`, `token`) VALUES
('david.devwebsite@gmail.com', 'David Castro', '123', 8, '0');

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
-- Indices de la tabla `pokemon`
--
ALTER TABLE `pokemon`
  ADD PRIMARY KEY (`id_pkmn`);

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
  MODIFY `id_pj` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `pokemon`
--
ALTER TABLE `pokemon`
  MODIFY `id_pkmn` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
