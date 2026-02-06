-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-11-2025 a las 21:39:53
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ifz2025`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `cod_categoria` int(11) NOT NULL,
  `nombre_categoria` varchar(70) NOT NULL,
  `baja_categoria` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`cod_categoria`, `nombre_categoria`, `baja_categoria`) VALUES
(1, 'Tecnicatura Analistas de Sistemas', 0),
(2, 'Profesorado de Informática', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `correlativas`
--

CREATE TABLE `correlativas` (
  `cod_correlativa` int(11) NOT NULL,
  `cod_materia` int(11) NOT NULL,
  `cod_requisito` int(11) NOT NULL,
  `baja_correlativa` tinyint(4) NOT NULL,
  `nombre_correlativa` varchar(120) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `correlativas`
--

INSERT INTO `correlativas` (`cod_correlativa`, `cod_materia`, `cod_requisito`, `baja_correlativa`, `nombre_correlativa`) VALUES
(1, 103, 1, 1, 'Filosofía de la Ciencia y de la Técnica I'),
(2, 103, 2, 0, 'Filosofía de la Ciencia y de la Técnica I'),
(3, 104, 1, 1, 'Inglés Técnico I'),
(4, 104, 2, 0, 'Inglés Técnico I'),
(5, 104, 1, 1, 'Inglés Técnico I'),
(6, 104, 2, 1, 'Inglés Técnico I'),
(7, 106, 1, 1, 'Matemática I'),
(8, 106, 2, 0, 'Matemática I'),
(9, 109, 1, 1, 'Programación Lógica'),
(10, 109, 2, 0, 'Programación Lógica'),
(11, 110, 1, 1, 'Informática I'),
(12, 110, 2, 0, 'Informática I'),
(13, 215, 1, 1, 'Matemática II'),
(14, 215, 2, 0, 'Matemática II'),
(15, 216, 1, 1, 'Matemática II'),
(16, 216, 2, 0, 'Matemática II'),
(17, 217, 1, 1, 'Informática II'),
(18, 217, 2, 0, 'Informática II'),
(19, 214, 1, 1, 'Ética y Deontología Prof. I'),
(20, 214, 2, 0, 'Ética y Deontología Prof. I'),
(21, 218, 1, 1, 'Programación I'),
(22, 218, 2, 0, 'Programación I'),
(23, 219, 1, 1, 'Informática III'),
(24, 219, 2, 0, 'Informática III'),
(25, 220, 1, 1, 'Sist. Información Contable I'),
(26, 220, 2, 0, 'Sist. Información Contable I'),
(27, 221, 1, 1, 'Sist. Información Contable I'),
(28, 221, 2, 0, 'Sist. Información Contable I'),
(29, 222, 1, 1, 'Programación II'),
(30, 222, 2, 0, 'Programación II'),
(31, 223, 1, 1, 'EDI I'),
(32, 223, 2, 0, 'EDI I'),
(33, 324, 1, 1, 'Práctica Profesional I'),
(34, 324, 2, 0, 'Práctica Profesional I'),
(35, 325, 1, 1, 'Matemática III'),
(36, 325, 2, 0, 'Matemática III'),
(37, 326, 1, 1, 'Matemática Aplicada I'),
(38, 326, 2, 0, 'Matemática Aplicada I'),
(39, 327, 1, 1, 'Sistemas Administrativos I'),
(40, 327, 2, 0, 'Sistemas Administrativos I'),
(41, 327, 1, 1, 'Sist. Información Contable II'),
(42, 327, 2, 0, 'Sist. Información Contable II'),
(43, 328, 1, 1, 'Informática Aplicada'),
(44, 328, 2, 0, 'Informática Aplicada'),
(45, 329, 1, 1, 'Sistemas Administrativos II'),
(46, 329, 2, 0, 'Sistemas Administrativos II'),
(47, 329, 1, 1, 'Minicomputadoras'),
(48, 329, 2, 0, 'Minicomputadoras'),
(49, 330, 1, 1, 'Programación III'),
(50, 330, 2, 0, 'Programación III'),
(51, 331, 1, 1, 'Programación IV'),
(52, 331, 2, 0, 'Programación IV'),
(53, 332, 1, 1, 'EDI II'),
(54, 332, 2, 0, 'EDI II'),
(55, 333, 1, 1, 'Práctica Profesional II'),
(56, 333, 2, 0, 'Práctica Profesional II'),
(57, 12, 1, 1, 'Herramientas Informáticas (Taller)'),
(58, 12, 2, 0, 'Herramientas Informáticas (Taller)'),
(59, 13, 1, 1, 'Psicología Educacional'),
(60, 13, 2, 0, 'Psicología Educacional'),
(61, 14, 1, 1, 'Elementos de Matemática Aplicada a la Informática'),
(62, 14, 1, 1, 'Contabilidad'),
(63, 14, 2, 0, 'Elementos de Matemática Aplicada a la Informática'),
(64, 14, 2, 0, 'Contabilidad'),
(65, 15, 1, 1, 'Herramientas Informáticas (Taller)'),
(66, 15, 2, 0, 'Herramientas Informáticas (Taller)'),
(67, 16, 1, 1, 'Didáctica General'),
(68, 16, 2, 0, 'Didáctica General'),
(69, 17, 1, 1, 'Fundamentos de Programación'),
(70, 17, 2, 0, 'Fundamentos de Programación'),
(71, 18, 1, 1, 'Herramientas Informáticas (Taller)'),
(72, 18, 1, 1, 'Práctica Docente I: Contexto, Comunidad y Escuela (Taller I y II) '),
(73, 18, 2, 0, 'Herramientas Informáticas (Taller)'),
(74, 18, 2, 0, 'Práctica Docente I: Contexto, Comunidad y Escuela (Taller I y II)'),
(75, 19, 1, 1, 'Historia Argentina y Latinoamérica'),
(76, 19, 2, 0, 'Historia Argentina y Latinoamérica'),
(77, 21, 1, 1, 'Sujetos de la Educación Secundaria'),
(78, 21, 2, 0, 'Sujetos de la Educación Secundaria'),
(79, 22, 1, 1, 'Fundamentos de Programación'),
(80, 22, 1, 1, 'TICs'),
(81, 22, 2, 0, 'Fundamentos de Programación'),
(82, 22, 2, 0, 'TICs'),
(83, 24, 1, 1, 'Informática Aplicada a la Gestión'),
(84, 24, 2, 0, 'Informática Aplicada a la Gestión'),
(85, 25, 1, 1, 'Informática Aplicada a la Gestión'),
(86, 25, 1, 1, 'Didáctica de la Informática para la Escuela Secundaria'),
(87, 25, 2, 0, 'Informática Aplicada a la Gestión'),
(88, 25, 2, 0, 'Didáctica de la Informática para la Escuela Secundaria'),
(89, 26, 1, 1, 'Lenguaje de Programación I: Programación Imperativa'),
(90, 26, 2, 0, 'Lenguaje de Programación I: Programación Imperativa'),
(91, 27, 1, 1, 'Lenguaje de Programación I: Programación Imperativa'),
(92, 27, 2, 0, 'Lenguaje de Programación I: Programación Imperativa'),
(93, 28, 1, 1, 'Didáctica de la Informática para la Escuela Secundaria'),
(94, 28, 1, 1, 'Práctica Docente II: Gestión Institucional, Currículum y Enseñanza'),
(95, 28, 2, 0, 'Didáctica de la Informática para la Escuela Secundaria'),
(96, 28, 2, 0, 'Práctica Docente II: Gestión Institucional, Currículum y Enseñanza'),
(97, 29, 1, 1, 'Filosofía'),
(98, 29, 2, 0, 'Filosofía'),
(99, 30, 1, 1, 'Sujetos de la Educación Secundaria'),
(100, 30, 2, 0, 'Sujetos de la Educación Secundaria'),
(101, 31, 1, 1, 'Lenguaje de Programación II: Orientada a Objetos'),
(102, 31, 2, 0, 'Lenguaje de Programación II: Orientada a Objetos'),
(103, 32, 1, 1, 'Sistema Operativo'),
(104, 32, 1, 1, 'Recursos Informáticos Aplicados'),
(105, 32, 1, 1, 'Robótica y Automatización'),
(106, 32, 2, 0, 'Sistema Operativo'),
(107, 32, 2, 0, 'Recursos Informáticos Aplicados'),
(108, 32, 2, 0, 'Robótica y Automatización'),
(109, 33, 1, 1, 'Recursos Informáticos Aplicados'),
(110, 33, 2, 0, 'Recursos Informáticos Aplicados'),
(111, 34, 1, 1, 'Sistema Operativo'),
(112, 34, 2, 0, 'Sistema Operativo'),
(113, 35, 1, 1, 'Integración Educativa en el Nivel Secundario'),
(114, 35, 1, 1, 'Recursos Informáticos Aplicados'),
(115, 35, 2, 0, 'Integración Educativa en el Nivel Secundario'),
(116, 35, 2, 0, 'Recursos Informáticos Aplicados'),
(117, 36, 1, 1, 'Sistema Operativo'),
(118, 36, 1, 1, 'Recursos Informáticos Aplicados'),
(119, 36, 1, 1, 'Lenguaje de Programación II: Orientada a Objetos'),
(120, 36, 1, 1, 'Práctica Docente III: Prácticas de Enseñanza'),
(121, 36, 2, 0, 'Sistema Operativo'),
(122, 36, 2, 0, 'Recursos Informáticos Aplicados'),
(123, 36, 2, 0, 'Lenguaje de Programación II: Orientada a Objetos'),
(124, 36, 2, 0, 'Práctica Docente III: Prácticas de Enseñanza');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias`
--

CREATE TABLE `materias` (
  `cod_materia` int(11) NOT NULL,
  `nombre_materia` varchar(80) NOT NULL,
  `anio_materia` int(11) NOT NULL,
  `cuatrimestre_materia` varchar(30) NOT NULL,
  `cod_categoria` int(11) NOT NULL,
  `baja_materia` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `materias`
--

INSERT INTO `materias` (`cod_materia`, `nombre_materia`, `anio_materia`, `cuatrimestre_materia`, `cod_categoria`, `baja_materia`) VALUES
(1, 'Pedagogía', 1, '1er Cuat.', 2, 0),
(2, 'Didáctica General', 1, 'Anual', 2, 0),
(3, 'Psicología Educacional', 1, '2do Cuat.', 2, 0),
(4, 'Lectura y Escritura Académica (Taller)', 1, 'Anual', 2, 0),
(5, 'Elementos de Matemática Aplicada a la Informática', 1, 'Anual', 2, 0),
(6, 'Contabilidad', 1, '1er Cuat.', 2, 0),
(7, 'Fundamentos de Programación', 1, '2do Cuat.', 2, 0),
(8, 'Herramientas Informáticas (Taller)', 1, 'Anual', 2, 0),
(9, 'Práctica Docente I: Contexto, Comunidad y Escuela (Taller I y II)', 1, 'Anual', 2, 0),
(10, 'Sociología de la Educación', 2, '4to Cuat.', 2, 0),
(11, 'Historia Argentina y Latinoamérica', 2, '3er Cuat.', 2, 0),
(12, 'TICs', 2, '4to Cuat.', 2, 0),
(13, 'Sujetos de la Educación Secundaria', 2, 'Anual', 2, 0),
(14, 'Sistema Tributario Argentino', 2, '3er Cuat.', 2, 0),
(15, 'Informática Aplicada a la Gestión', 2, '4to Cuat.', 2, 0),
(16, 'Didáctica de la Informática para la Escuela Secundaria', 2, 'Anual', 2, 0),
(17, 'Lenguaje de Programación I: Programación Imperativa', 2, 'Anual', 2, 0),
(18, 'Práctica Docente II: Gestión Institucional, Currículum y Enseñanza (Taller I y I', 2, 'Anual', 2, 0),
(19, 'Historia y Política de la Educación Argentina', 3, '5to Cuat.', 2, 0),
(20, 'Filosofía', 3, '6to Cuat.', 2, 0),
(21, 'Integración Educativa en el Nivel Secundario', 3, '5to Cuat.', 2, 0),
(22, 'Sistema Operativo', 3, 'Anual', 2, 0),
(23, 'Inglés Técnico', 3, 'Anual', 2, 0),
(24, 'Auditoría y Seguridad', 3, '6to Cuat.', 2, 0),
(25, 'Recursos Informáticos Aplicados', 3, '5to Cuat.', 2, 0),
(26, 'Robótica y Automatización', 3, '6to Cuat.', 2, 0),
(27, 'Lenguaje de Programación II: Orientada a Objetos', 3, 'Anual', 2, 0),
(28, 'Práctica Docente III: Prácticas de Enseñanza', 3, 'Anual', 2, 0),
(29, 'Formación Ética y Ciudadana', 4, '8vo Cuat.', 2, 0),
(30, 'Educación Sexual Integral', 4, '7mo Cuat.', 2, 0),
(31, 'Lenguaje de Programación III: Aplicaciones Web', 4, 'Anual', 2, 0),
(32, 'Redes y Comunicación de Datos', 4, 'Anual', 2, 0),
(33, 'EDI', 4, 'Anual', 2, 0),
(34, 'Software Libre', 4, '8vo Cuat.', 2, 0),
(35, 'Problemática de la Enseñanza de la Informática en la Escuela Secundaria', 4, '7mo Cuat.', 2, 0),
(36, 'Práctica Docente IV: Residencia', 4, '8vo Cuat.', 2, 0),
(101, 'Filosofía de la Ciencia y de la Técnica I', 1, '1er Cuat.', 1, 0),
(102, 'Inglés Técnico I', 1, '1er Cuat.', 1, 0),
(103, 'Filosofía de la Ciencia y de la Técnica II', 1, '2do Cuat.', 1, 0),
(104, 'Inglés Técnico II', 1, '2do Cuat.', 1, 0),
(105, 'Matemática I', 1, '1er Cuat.', 1, 0),
(106, 'Matemática II', 1, '2do Cuat.', 1, 0),
(107, 'Programación Lógica', 1, '1er Cuat.', 1, 0),
(108, 'Informática I', 1, '1er Cuat.', 1, 0),
(109, 'Programación I', 1, '2do Cuat.', 1, 0),
(110, 'Informática II', 1, '2do Cuat.', 1, 0),
(111, 'EDI I', 1, '2do Cuat.', 1, 0),
(112, 'Práctica Profesional I', 1, 'Anual', 1, 0),
(213, 'Ética y Deontología Prof. I', 2, '3er Cuat.', 1, 0),
(214, 'Ética y Deontología Prof. II', 2, '4to Cuat.', 1, 0),
(215, 'Sist. Información Contable I', 2, '3er Cuat.', 1, 0),
(216, 'Matemática III', 2, '3er Cuat.', 1, 0),
(217, 'Informática III', 2, '3er Cuat.', 1, 0),
(218, 'Programación II', 2, '3er Cuat.', 1, 0),
(219, 'Informática Aplicada', 2, '4to Cuat.', 1, 0),
(220, 'Sist. Información Contable II', 2, '4to Cuat.', 1, 0),
(221, 'Sistemas Administrativos I', 2, '4to Cuat.', 1, 0),
(222, 'Programación III', 2, '4to Cuat.', 1, 0),
(223, 'EDI II', 2, '3er Cuat.', 1, 0),
(324, 'Práctica Profesional II', 2, 'Anual', 1, 0),
(325, 'Matemática Aplicada I', 3, '5to Cuat.', 1, 0),
(326, 'Matemática Aplicada II', 3, '6to Cuat.', 1, 0),
(327, 'Sistemas Administrativos II', 3, '5to Cuat.', 1, 0),
(328, 'Minicomputadoras', 3, '5to Cuat.', 1, 0),
(329, 'Seminario', 3, '6to Cuat.', 1, 0),
(330, 'Programación IV', 3, '5to Cuat.', 1, 0),
(331, 'Técnicas de Programación', 3, '6to Cuat.', 1, 0),
(332, 'EDI III', 3, '6to Cuat.', 1, 0),
(333, 'Práctica Profesional III', 3, 'Anual', 1, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `requisito`
--

CREATE TABLE `requisito` (
  `cod_requisito` int(11) NOT NULL,
  `descripcion_requisito` varchar(70) NOT NULL,
  `baja_requisito` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `requisito`
--

INSERT INTO `requisito` (`cod_requisito`, `descripcion_requisito`, `baja_requisito`) VALUES
(1, 'Cursar', 0),
(2, 'Rendir', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `secundario`
--

CREATE TABLE `secundario` (
  `id` int(11) NOT NULL,
  `anio` int(11) NOT NULL,
  `nombre_materia` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `secundario`
--

INSERT INTO `secundario` (`id`, `anio`, `nombre_materia`) VALUES
(1, 1, 'Biología'),
(2, 1, 'Educación Artística'),
(3, 1, 'Educación Física'),
(4, 1, 'Educación Tecnológica'),
(5, 1, 'Física'),
(6, 1, 'Formación Ética y Ciudadana'),
(7, 1, 'Geografía'),
(8, 1, 'Historia'),
(9, 1, 'Informática'),
(10, 1, 'Lengua Extranjera (Inglés)'),
(11, 1, 'Lengua y Literatura'),
(12, 1, 'Matemática'),
(13, 2, 'Biología'),
(14, 2, 'Educación Artística'),
(15, 2, 'Educación Física'),
(16, 2, 'Educación Tecnológica'),
(17, 2, 'Formación Ética y Ciudadana'),
(18, 2, 'Geografía'),
(19, 2, 'Historia'),
(20, 2, 'Informática'),
(21, 2, 'Lengua Extranjera (Inglés)'),
(22, 2, 'Lengua y Literatura'),
(23, 2, 'Matemática'),
(24, 2, 'Química'),
(25, 3, 'Aplicaciones para la Gestión de Oficinas I'),
(26, 3, 'Biología'),
(27, 3, 'Diseño Multimedial'),
(28, 3, 'Educación Artística'),
(29, 3, 'Educación Física'),
(30, 3, 'Geografía'),
(31, 3, 'Historia'),
(32, 3, 'Lengua Extranjera (Inglés)'),
(33, 3, 'Lengua y Literatura'),
(34, 3, 'Matemática'),
(35, 3, 'TIC'),
(36, 4, 'Aplicaciones para la Gestión de Oficinas II'),
(37, 4, 'Educación Física'),
(38, 4, 'Filosofía'),
(39, 4, 'Física'),
(40, 4, 'Geografía'),
(41, 4, 'Historia'),
(42, 4, 'Laboratorio Informático'),
(43, 4, 'Lengua Extranjera (Inglés)'),
(44, 4, 'Lengua y Literatura'),
(45, 4, 'Matemática'),
(46, 4, 'Programación Imperativa'),
(47, 4, 'Sistema de Procesamiento de Datos'),
(48, 5, 'Economía'),
(49, 5, 'Educación Física'),
(50, 5, 'Formación Ética y Ciudadana'),
(51, 5, 'Lengua Extranjera (Inglés)'),
(52, 5, 'Lengua y Literatura'),
(53, 5, 'Matemática'),
(54, 5, 'Programación Orientada a Objetos'),
(55, 5, 'Proyecto Informático'),
(56, 5, 'Psicología'),
(57, 5, 'Química'),
(58, 5, 'Sistemas de Gestión de Base de Datos');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`cod_categoria`);

--
-- Indices de la tabla `correlativas`
--
ALTER TABLE `correlativas`
  ADD PRIMARY KEY (`cod_correlativa`),
  ADD KEY `cod_materia` (`cod_materia`),
  ADD KEY `cod_requisito` (`cod_requisito`);

--
-- Indices de la tabla `materias`
--
ALTER TABLE `materias`
  ADD PRIMARY KEY (`cod_materia`),
  ADD KEY `cod_categoria` (`cod_categoria`);

--
-- Indices de la tabla `requisito`
--
ALTER TABLE `requisito`
  ADD PRIMARY KEY (`cod_requisito`);

--
-- Indices de la tabla `secundario`
--
ALTER TABLE `secundario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `cod_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `correlativas`
--
ALTER TABLE `correlativas`
  MODIFY `cod_correlativa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;

--
-- AUTO_INCREMENT de la tabla `requisito`
--
ALTER TABLE `requisito`
  MODIFY `cod_requisito` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `secundario`
--
ALTER TABLE `secundario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `correlativas`
--
ALTER TABLE `correlativas`
  ADD CONSTRAINT `correlativas_ibfk_1` FOREIGN KEY (`cod_materia`) REFERENCES `materias` (`cod_materia`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `correlativas_ibfk_2` FOREIGN KEY (`cod_requisito`) REFERENCES `requisito` (`cod_requisito`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `materias`
--
ALTER TABLE `materias`
  ADD CONSTRAINT `materias_ibfk_1` FOREIGN KEY (`cod_categoria`) REFERENCES `categorias` (`cod_categoria`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
