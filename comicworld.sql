-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 11-02-2020 a las 14:46:00
-- Versión del servidor: 10.4.8-MariaDB
-- Versión de PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `comicworld`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pelicula`
--

CREATE TABLE `pelicula` (
  `id` int(11) NOT NULL,
  `saga` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `titulo` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_estreno` date NOT NULL,
  `director` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `sinopsis` varchar(2000) COLLATE utf8_spanish_ci NOT NULL,
  `img_carrusel` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `img_cartelera` varchar(200) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `pelicula`
--

INSERT INTO `pelicula` (`id`, `saga`, `titulo`, `fecha_estreno`, `director`, `sinopsis`, `img_carrusel`, `img_cartelera`) VALUES
(3, 'MARVEL', 'Capitán América: El Primer Vengador', '2011-08-05', 'Joe Johnston', 'Nacido durante la Gran Depresión (años 30), Steve Rogers creció como un chico enclenque en una familia pobre. Horrorizado por las noticias que llegaban de Europa sobre los nazis, decidió enrolarse en el ejército; sin embargo, debido a su precaria salud, fue rechazado una y otra vez. Enternecido por sus súplicas, el General Chester Phillips le ofreció la oportunidad de participar en un experimento especial: la \"Operación Renacimiento\". Tras administrarle el “Suero Super-Soldado” y bombardearlo con “vitarrayos”, el cuerpo de Steve se hace perfecto. A continuación, se sometió a un intensivo programa de entrenamiento físico y táctico. Tres meses después, le encomendaron su primera misión como Capitán América. Armado con un escudo indestructible, emprenderá la guerra contra el Mal como centinela de la libertad y líder de los Vengadores.  ', 'assets/img/peliculas/capitanB.jpg', 'assets/img/peliculas/capitanC.jpg'),
(4, 'MARVEL', 'Thor: Ragnarok', '2017-08-10', 'Taika Waititi', '  Thor está preso al otro lado del universo sin su poderoso martillo y se enfrenta a una carrera contra el tiempo. Su objetivo es volver a Asgard y parar el Ragnarok porque significaría la destrucción de su planeta natal y el fin de la civilización Asgardiana a manos de una todopoderosa y nueva amenaza, la implacable Hela. Pero, primero deberá sobrevivir a una competición letal de gladiadores que lo enfrentará a su aliado y compañero en los Vengadores, ¡el Increíble Hulk!.  ', 'assets/img/peliculas/thorB.jpg', 'assets/img/peliculas/thorC.jpg'),
(5, 'MARVEL', 'Guardianes de la Galaxia', '2014-08-14', 'James Gunn', '  El temerario aventurero Peter Quill es objeto de un implacable cazarrecompensas después de robar una misteriosa esfera codiciada por Ronan, un poderoso villano cuya ambición amenaza todo el universo. Para poder escapar del incansable Ronan, Quill se ve obligado a pactar una complicada tregua con un cuarteto de disparatados inadaptados: Rocket, un mapache armado con un rifle, Groot, un humanoide con forma de árbol, la letal y enigmática Gamora y el vengativo Drax the Destroyer. Pero cuando Quill descubre el verdadero poder de la esfera, deberá hacer todo lo posible para derrotar a sus extravagantes rivales en un intento desesperado de salvar el destino de la galaxia.  ', 'assets/img/peliculas/guardianesB.jpg', 'assets/img/peliculas/guardianesC.jpg'),
(6, 'MARVEL', 'Capitana Marvel', '2019-03-08', 'Anna Boden', 'La historia sigue a Carol Danvers mientras se convierte en uno de los héroes más poderosos del universo, cuando la Tierra se encuentra atrapada en medio de una guerra galáctica entre dos razas alienígenas. Situada en los años 90, Capitana Marvel es una historia nueva de un período de tiempo nunca antes visto en la historia del Universo Cinematográfico de Marvel. ', 'assets/img/peliculas/capitanaB.jpg', 'assets/img/peliculas/capitanaC.jpg'),
(7, 'DC', 'Batman Vs. Superman: El Amanecer de la Justicia', '2016-03-23', 'Zack Snyder', 'Ante el temor de las acciones que pueda llevar a cabo Superman, el vigilante de Gotham City aparece para poner a raya al superhéroe de Metrópolis, mientras que la opinión pública debate cuál es realmente el héroe que necesitan. El hombre de acero y Batman se sumergen en una contienda territorial, pero las cosas se complican cuando una nueva y peligrosa amenaza surge rápidamente, poniendo en jaque la existencia de la humanidad.', 'assets/img/peliculas/batmanVsSupermanB.jpg', 'assets/img/peliculas/batmanVsSupermanC.jpg'),
(8, 'DC', 'Escuadrón Suicida', '2016-08-05', 'David Ayer', 'Mientras el gobierno de EE.UU no tiene claro cómo responder a una visita alienígena a la Tierra con intenciones malignas, Amanda \'El Muro\' Waller (Viola Davis), la líder de la agencia secreta A.R.G.U.S., ofrece una curiosa solución: reclutar a los villanos más crueles, con habilidades letales e incluso mágicas, para que trabajen para ellos. Sin demasiadas opciones a dar una negativa, los ocho supervillanos más peligrosos del mundo acceden a colaborar con el Ejecutivo en peligrosas misiones secretas, casi suicidas, para así lograr limpiar su expediente.', 'assets/img/peliculas/escuadronB.jpg', 'assets/img/peliculas/escuadronC.jpg'),
(9, 'DC', 'Liga de la Justicia', '2017-11-16', 'Zack Snyder', 'Motivado por la fe que había recuperado en la humanidad e inspirado por la acción altruista de Superman, Bruce Wayne recluta la ayuda de su nueva aliada, Diana Prince, para enfrentarse a un enemigo aún mayor. Juntos, Batman y Wonder Woman se mueven rápidamente para intentar encontrar y reclutar un equipo de metahumanos que combata esta nueva amenaza. El problema es que a pesar de la formación de esta liga de héroes sin precedentes –Batman, Wonder Woman, Aquaman, Cyborg y Flash– puede que sea demasiado tarde para salvar el planeta de una amenaza de proporciones catastróficas.', 'assets/img/peliculas/ligaB.jpg', 'assets/img/peliculas/ligaC.jpg'),
(10, 'DC', 'Joker', '2019-10-04', 'Todd Phillips', 'Arthur Fleck (Phoenix) vive en Gotham con su madre, y su única motivación en la vida es hacer reír a la gente. Actúa haciendo de payaso en pequeños trabajos, pero tiene problemas mentales que hacen que la gente le vea como un bicho raro. Su gran sueño es actuar como cómico delante del público, pero una serie de trágicos acontecimientos le hará ir incrementando su ira contra una sociedad que le ignora.', 'assets/img/peliculas/jokerB.jpg', 'assets/img/peliculas/jokerC.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `username` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `apellido1` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `apellido2` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `correo` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `pais` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `codigo_postal` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `rol` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `usuario_google` tinyint(1) NOT NULL DEFAULT 0,
  `img_perfil` varchar(300) COLLATE utf8_spanish_ci NOT NULL DEFAULT 'assets/img/usuarios/default_profile.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `username`, `password`, `nombre`, `apellido1`, `apellido2`, `correo`, `fecha_nacimiento`, `pais`, `codigo_postal`, `telefono`, `rol`, `usuario_google`, `img_perfil`) VALUES
(9, 'admin', '21232f297a57a5a743894a0e4a801fc3', '', '', '', '', '0000-00-00', '', '', '', 'admin', 0, 'assets/img/usuarios/default_profile.jpg'),
(33, 'usuario', 'f8032d5cae3de20fcec887f395ec9a6a', 'Usuario', 'Usuario', 'Usuario', 'usuario@gmail.com', '2020-01-01', 'España', '14900', '111222333', 'usuario', 0, 'assets/img/usuarios/default_profile.jpg'),
(34, 'jorgelozano228', 'c822c1b63853ed273b89687ac505f9fa', 'Jorge', 'Lozano', '', 'jorgelozano228@gmail.com', '0000-00-00', '', '', '', 'usuario', 1, 'https://lh3.googleusercontent.com/a-/AAuE7mCgO45t9oqJ_yjeA5Ex8Uod3vV2ZsNiWFpToeNF_qM=s96-c'),
(35, 'erumo96', 'c822c1b63853ed273b89687ac505f9fa', 'Emilio', '', '', 'erumo96@gmail.com', '0000-00-00', '', '', '', 'usuario', 1, 'https://lh3.googleusercontent.com/a-/AAuE7mBK9FqE0bVWPgaMHPfu7ULf6aYxDDTTUF2Sbjg-jw=s96-c');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `valoracion`
--

CREATE TABLE `valoracion` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_pelicula` int(11) NOT NULL,
  `texto` varchar(1000) COLLATE utf8_spanish_ci NOT NULL,
  `puntuacion` int(11) NOT NULL DEFAULT 0,
  `fecha_valoracion` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `valoracion`
--

INSERT INTO `valoracion` (`id`, `id_usuario`, `id_pelicula`, `texto`, `puntuacion`, `fecha_valoracion`) VALUES
(21, 34, 6, 'Tiene grandes virtudes y mejores momentos. Da por superados los discursos feministas en este tipo de historias y se dedica directamente a aplicarlos. Un personaje estupendo que, quizás, merecía una película mucho más redonda.', 1, '2020-02-11'),
(22, 34, 5, 'Una diversión colorida e irónica, especialmente diseñada para los adultos amantes de la ciencia-ficción kitsch de los años 80.', 4, '2020-02-11'),
(23, 35, 5, 'Es un prodigio aventurero, una atracción gigante en la que no se ven los railes y un salto al hiperespacio con los tíos que querrías pegarte una juerga.', 5, '2020-02-11');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pelicula`
--
ALTER TABLE `pelicula`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `correo` (`correo`);

--
-- Indices de la tabla `valoracion`
--
ALTER TABLE `valoracion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_usuario` (`id_usuario`),
  ADD KEY `fk_pelicula` (`id_pelicula`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pelicula`
--
ALTER TABLE `pelicula`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT de la tabla `valoracion`
--
ALTER TABLE `valoracion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `valoracion`
--
ALTER TABLE `valoracion`
  ADD CONSTRAINT `fk_pelicula` FOREIGN KEY (`id_pelicula`) REFERENCES `pelicula` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
