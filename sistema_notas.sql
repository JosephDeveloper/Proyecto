-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-11-2017 a las 04:59:01
-- Versión del servidor: 10.1.26-MariaDB
-- Versión de PHP: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sistema_notas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividad`
--

CREATE TABLE `actividad` (
  `id_actividad` int(11) NOT NULL,
  `id_evaluacion` int(11) NOT NULL,
  `des_actividad` varchar(30) NOT NULL,
  `por_actividad` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `actividad`
--

INSERT INTO `actividad` (`id_actividad`, `id_evaluacion`, `des_actividad`, `por_actividad`) VALUES
(1, 1, 'Asistencia', 10),
(2, 1, 'Taller', 40),
(3, 1, 'Parcial', 50);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudad`
--

CREATE TABLE `ciudad` (
  `id_ciudad` int(11) NOT NULL,
  `des_ciudad` varchar(30) NOT NULL,
  `id_pais` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ciudad`
--

INSERT INTO `ciudad` (`id_ciudad`, `des_ciudad`, `id_pais`) VALUES
(1, 'Bello', 52),
(2, 'Caldas', 52),
(3, 'Copacabana', 52),
(4, 'Envigado', 52),
(5, 'Guarne', 52),
(6, 'Itagui', 52),
(7, 'La Ceja', 52),
(8, 'La Estrella', 52),
(9, 'La Tablaza', 52),
(10, 'Marinilla', 52),
(11, 'Medellín', 52),
(12, 'Rionegro', 52),
(13, 'Sabaneta', 52),
(14, 'San Antonio de Prado', 52),
(15, 'San Cristóbal', 52),
(16, 'Caucasia', 52),
(17, 'Barranquilla', 52),
(18, 'Malambo', 52),
(19, 'Puerto Colombia', 52),
(20, 'Soledad', 52),
(21, 'Arjona', 52),
(22, 'Bayunca', 52),
(23, 'Carmen de Bolívar', 52),
(24, 'Cartagena', 52),
(25, 'Turbaco', 52),
(26, 'Arcabuco', 52),
(27, 'Belencito', 52),
(28, 'Chiquinquirá', 52),
(29, 'Combita', 52),
(30, 'Cucaita', 52),
(31, 'Duitama', 52),
(32, 'Mongui', 52),
(33, 'Nobsa', 52),
(34, 'Paipa', 52),
(35, 'Puerto Boyacá', 52),
(36, 'Ráquira', 52),
(37, 'Samaca', 52),
(38, 'Santa Rosa de Viterbo', 52),
(39, 'Sogamoso', 52),
(40, 'Sutamerchán', 52),
(41, 'Tibasosa', 52),
(42, 'Tinjaca', 52),
(43, 'Tunja', 52),
(44, 'Ventaquemada', 52),
(45, 'Villa de Leiva', 52),
(46, 'La Dorada', 52),
(47, 'Manizales', 52),
(48, 'Villamaria', 52),
(49, 'Caloto', 52),
(50, 'Ortigal', 52),
(51, 'Piendamo', 52),
(52, 'Popayán', 52),
(53, 'Puerto Tejada', 52),
(54, 'Santander Quilichao', 52),
(55, 'Tunia', 52),
(56, 'Villarica', 52),
(57, 'Valledupar', 52),
(58, 'Cerete', 52),
(59, 'Montería', 52),
(60, 'Planeta Rica', 52),
(61, 'Alban', 52),
(62, 'Bogotá', 52),
(63, 'Bojaca', 52),
(64, 'Bosa', 52),
(65, 'Briceño', 52),
(66, 'Cajicá', 52),
(67, 'Chía', 52),
(68, 'Chinauta', 52),
(69, 'Choconta', 52),
(70, 'Cota', 52),
(71, 'El Muña', 52),
(72, 'El Rosal', 52),
(73, 'Engativá', 52),
(74, 'Facatativa', 52),
(75, 'Fontibón', 52),
(76, 'Funza', 52),
(77, 'Fusagasuga', 52),
(78, 'Gachancipá', 52),
(79, 'Girardot', 52),
(80, 'Guaduas', 52),
(81, 'Guayavetal', 52),
(82, 'La Calera', 52),
(83, 'La Caro', 52),
(84, 'Madrid', 52),
(85, 'Mosquera', 52),
(86, 'Nemocón', 52),
(87, 'Puente Piedra', 52),
(88, 'Puente Quetame', 52),
(89, 'Puerto Bogotá', 52),
(90, 'Puerto Salgar', 52),
(91, 'Quetame', 52),
(92, 'Sasaima', 52),
(93, 'Sesquile', 52),
(94, 'Sibaté', 52),
(95, 'Silvania', 52),
(96, 'Simijaca', 52),
(97, 'Soacha', 52),
(98, 'Sopo', 52),
(99, 'Suba', 52),
(100, 'Subachoque', 52),
(101, 'Susa', 52),
(102, 'Tabio', 52),
(103, 'Tenjo', 52),
(104, 'Tocancipa', 52),
(105, 'Ubaté', 52),
(106, 'Usaquén', 52),
(107, 'Usme', 52),
(108, 'Villapinzón', 52),
(109, 'Villeta', 52),
(110, 'Zipaquirá', 52),
(111, 'Maicao', 52),
(112, 'Riohacha', 52),
(113, 'Aipe', 52),
(114, 'Neiva', 52),
(115, 'Cienaga', 52),
(116, 'Gaira', 52),
(117, 'Rodadero', 52),
(118, 'Santa Marta', 52),
(119, 'Taganga', 52),
(120, 'Villavicencio', 52),
(121, 'Ipiales', 52),
(122, 'Pasto', 52),
(123, 'Cúcuta', 52),
(124, 'El Zulia', 52),
(125, 'La Parada', 52),
(126, 'Los Patios', 52),
(127, 'Villa del Rosario', 52),
(128, 'Armenia', 52),
(129, 'Calarcá', 52),
(130, 'Circasia', 52),
(131, 'La Tebaida', 52),
(132, 'Montenegro', 52),
(133, 'Quimbaya', 52),
(134, 'Dosquebradas', 52),
(135, 'Pereira', 52),
(136, 'Aratoca', 52),
(137, 'Barbosa', 52),
(138, 'Bucaramanga', 52),
(139, 'Floridablanca', 52),
(140, 'Girón', 52),
(141, 'Lebrija', 52),
(142, 'Oiba', 52),
(143, 'Piedecuesta', 52),
(144, 'Pinchote', 52),
(145, 'San Gil', 52),
(146, 'Socorro', 52),
(147, 'Sincelejo', 52),
(148, 'Armero', 52),
(149, 'Buenos Aires', 52),
(150, 'Castilla', 52),
(151, 'Espinal', 52),
(152, 'Flandes', 52),
(153, 'Guamo', 52),
(154, 'Honda', 52),
(155, 'Ibagué', 52),
(156, 'Mariquita', 52),
(157, 'Melgar', 52),
(158, 'Natagaima', 52),
(159, 'Payande', 52),
(160, 'Purificación', 52),
(161, 'Saldaña', 52),
(162, 'Tolemaida', 52),
(163, 'Amaime', 52),
(164, 'Andalucía', 52),
(165, 'Buenaventura', 52),
(166, 'Buga', 52),
(167, 'Buga La Grande', 52),
(168, 'Caicedonia', 52),
(169, 'Cali', 52),
(170, 'Candelaria', 52),
(171, 'Cartago', 52),
(172, 'Cavasa', 52),
(173, 'Costa Rica', 52),
(174, 'Dagua', 52),
(175, 'El Carmelo', 52),
(176, 'El Cerrito', 52),
(177, 'El Placer', 52),
(178, 'Florida', 52),
(179, 'Ginebra', 52),
(180, 'Guacarí', 52),
(181, 'Jamundi', 52),
(182, 'La Paila', 52),
(183, 'La Unión', 52),
(184, 'La Victoria', 52),
(185, 'Loboguerrero', 52),
(186, 'Palmira', 52),
(187, 'Pradera', 52),
(188, 'Roldanillo', 52),
(189, 'Rozo', 52),
(190, 'San Pedro', 52),
(191, 'Sevilla', 52),
(192, 'Sonso', 52),
(193, 'Tulúa', 52),
(194, 'Vijes', 52),
(195, 'Villa Gorgona', 52),
(196, 'Yotoco', 52),
(197, 'Yumbo', 52),
(198, 'Zarzal', 52),
(199, 'Joseph', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiante`
--

CREATE TABLE `estudiante` (
  `id_estudi` int(11) NOT NULL,
  `nom_estudi` varchar(60) COLLATE utf8_spanish2_ci NOT NULL,
  `ape_estudi` varchar(60) COLLATE utf8_spanish2_ci NOT NULL,
  `doc_estudi` varchar(12) COLLATE utf8_spanish2_ci NOT NULL,
  `fec_estudi` date NOT NULL,
  `dir_estudi` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `tel_estudi` varchar(11) COLLATE utf8_spanish2_ci NOT NULL,
  `ema_estudi` varchar(50) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `estudiante`
--

INSERT INTO `estudiante` (`id_estudi`, `nom_estudi`, `ape_estudi`, `doc_estudi`, `fec_estudi`, `dir_estudi`, `tel_estudi`, `ema_estudi`) VALUES
(1, 'Diana Marcela', 'Maya Pizza', '1253647802', '1992-08-10', 'Cra 11D #54-93', '3166439028', 'dimaya@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evaluacion`
--

CREATE TABLE `evaluacion` (
  `id_evaluacion` int(11) NOT NULL,
  `des_evaluacion` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `evaluacion`
--

INSERT INTO `evaluacion` (`id_evaluacion`, `des_evaluacion`) VALUES
(1, 'Consolidado 1'),
(2, 'Consolidado 2'),
(3, 'Consolidado 3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eva_x_act`
--

CREATE TABLE `eva_x_act` (
  `id_eva_act` int(11) NOT NULL,
  `id_estudi` int(11) NOT NULL,
  `id_perso_mate` int(11) NOT NULL,
  `id_subActividad` int(11) DEFAULT NULL,
  `nota` decimal(3,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `eva_x_act`
--

INSERT INTO `eva_x_act` (`id_eva_act`, `id_estudi`, `id_perso_mate`, `id_subActividad`, `nota`) VALUES
(2, 1, 2, 1, '5.00'),
(3, 1, 4, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `instituto`
--

CREATE TABLE `instituto` (
  `id_instituto` int(11) NOT NULL,
  `nom_instituto` varchar(30) NOT NULL,
  `id_ciudad` int(11) NOT NULL,
  `dir_instituto` varchar(30) NOT NULL,
  `barrio_instituto` varchar(50) NOT NULL,
  `tel_instituto` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `instituto`
--

INSERT INTO `instituto` (`id_instituto`, `nom_instituto`, `id_ciudad`, `dir_instituto`, `barrio_instituto`, `tel_instituto`) VALUES
(1, 'FCECEP', 169, 'CALLE 9B 29A-67', 'CHAMPAGNAT', 3828282),
(2, ' UAO', 169, 'Cll 25 115-85', 'Km 2 Vía', 23188000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materia`
--

CREATE TABLE `materia` (
  `id_materia` int(11) NOT NULL,
  `des_materia` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `materia`
--

INSERT INTO `materia` (`id_materia`, `des_materia`) VALUES
(3, 'Etica y ConstituciÃ³n'),
(8, 'GestiÃ³n de Proyectos'),
(24, 'ProgramaciÃ³n IV'),
(29, 'Enfasis III');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pais`
--

CREATE TABLE `pais` (
  `id_pais` int(11) NOT NULL,
  `iso` varchar(3) NOT NULL,
  `des_pais` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pais`
--

INSERT INTO `pais` (`id_pais`, `iso`, `des_pais`) VALUES
(1, 'AF', 'Afganistán'),
(2, 'AX', 'Islas Gland'),
(3, 'AL', 'Albania'),
(4, 'DE', 'Alemania'),
(5, 'AD', 'Andorra'),
(6, 'AO', 'Angola'),
(7, 'AI', 'Anguilla'),
(8, 'AQ', 'Antártida'),
(9, 'AG', 'Antigua y Barbuda'),
(10, 'AN', 'Antillas Holandesas'),
(11, 'SA', 'Arabia Saudí'),
(12, 'DZ', 'Argelia'),
(13, 'AR', 'Argentina'),
(14, 'AM', 'Armenia'),
(15, 'AW', 'Aruba'),
(16, 'AU', 'Australia'),
(17, 'AT', 'Austria'),
(18, 'AZ', 'Azerbaiyán'),
(19, 'BS', 'Bahamas'),
(20, 'BH', 'Bahréin'),
(21, 'BD', 'Bangladesh'),
(22, 'BB', 'Barbados'),
(23, 'BY', 'Bielorrusia'),
(24, 'BE', 'Bélgica'),
(25, 'BZ', 'Belice'),
(26, 'BJ', 'Benin'),
(27, 'BM', 'Bermudas'),
(28, 'BT', 'Bhután'),
(29, 'BO', 'Bolivia'),
(30, 'BA', 'Bosnia y Herzegovina'),
(31, 'BW', 'Botsuana'),
(32, 'BV', 'Isla Bouvet'),
(33, 'BR', 'Brasil'),
(34, 'BN', 'Brunéi'),
(35, 'BG', 'Bulgaria'),
(36, 'BF', 'Burkina Faso'),
(37, 'BI', 'Burundi'),
(38, 'CV', 'Cabo Verde'),
(39, 'KY', 'Islas Caimán'),
(40, 'KH', 'Camboya'),
(41, 'CM', 'Camerún'),
(42, 'CA', 'Canadá'),
(43, 'CF', 'República Centroafricana'),
(44, 'TD', 'Chad'),
(45, 'CZ', 'República Checa'),
(46, 'CL', 'Chile'),
(47, 'CN', 'China'),
(48, 'CY', 'Chipre'),
(49, 'CX', 'Isla de Navidad'),
(50, 'VA', 'Ciudad del Vaticano'),
(51, 'CC', 'Islas Cocos'),
(52, 'CO', 'Colombia'),
(53, 'KM', 'Comoras'),
(54, 'CD', 'República Democrática del Cong'),
(55, 'CG', 'Congo'),
(56, 'CK', 'Islas Cook'),
(57, 'KP', 'Corea del Norte'),
(58, 'KR', 'Corea del Sur'),
(59, 'CI', 'Costa de Marfil'),
(60, 'CR', 'Costa Rica'),
(61, 'HR', 'Croacia'),
(62, 'CU', 'Cuba'),
(63, 'DK', 'Dinamarca'),
(64, 'DM', 'Dominica'),
(65, 'DO', 'República Dominicana'),
(66, 'EC', 'Ecuador'),
(67, 'EG', 'Egipto'),
(68, 'SV', 'El Salvador'),
(69, 'AE', 'Emiratos Árabes Unidos'),
(70, 'ER', 'Eritrea'),
(71, 'SK', 'Eslovaquia'),
(72, 'SI', 'Eslovenia'),
(73, 'ES', 'España'),
(74, 'UM', 'Islas ultramarinas de Estados '),
(75, 'US', 'Estados Unidos'),
(76, 'EE', 'Estonia'),
(77, 'ET', 'Etiopía'),
(78, 'FO', 'Islas Feroe'),
(79, 'PH', 'Filipinas'),
(80, 'FI', 'Finlandia'),
(81, 'FJ', 'Fiyi'),
(82, 'FR', 'Francia'),
(83, 'GA', 'Gabón'),
(84, 'GM', 'Gambia'),
(85, 'GE', 'Georgia'),
(86, 'GS', 'Islas Georgias del Sur y Sandw'),
(87, 'GH', 'Ghana'),
(88, 'GI', 'Gibraltar'),
(89, 'GD', 'Granada'),
(90, 'GR', 'Grecia'),
(91, 'GL', 'Groenlandia'),
(92, 'GP', 'Guadalupe'),
(93, 'GU', 'Guam'),
(94, 'GT', 'Guatemala'),
(95, 'GF', 'Guayana Francesa'),
(96, 'GN', 'Guinea'),
(97, 'GQ', 'Guinea Ecuatorial'),
(98, 'GW', 'Guinea-Bissau'),
(99, 'GY', 'Guyana'),
(100, 'HT', 'Haití'),
(101, 'HM', 'Islas Heard y McDonald'),
(102, 'HN', 'Honduras'),
(103, 'HK', 'Hong Kong'),
(104, 'HU', 'Hungría'),
(105, 'IN', 'India'),
(106, 'ID', 'Indonesia'),
(107, 'IR', 'Irán'),
(108, 'IQ', 'Iraq'),
(109, 'IE', 'Irlanda'),
(110, 'IS', 'Islandia'),
(111, 'IL', 'Israel'),
(112, 'IT', 'Italia'),
(113, 'JM', 'Jamaica'),
(114, 'JP', 'Japón'),
(115, 'JO', 'Jordania'),
(116, 'KZ', 'Kazajstán'),
(117, 'KE', 'Kenia'),
(118, 'KG', 'Kirguistán'),
(119, 'KI', 'Kiribati'),
(120, 'KW', 'Kuwait'),
(121, 'LA', 'Laos'),
(122, 'LS', 'Lesotho'),
(123, 'LV', 'Letonia'),
(124, 'LB', 'Líbano'),
(125, 'LR', 'Liberia'),
(126, 'LY', 'Libia'),
(127, 'LI', 'Liechtenstein'),
(128, 'LT', 'Lituania'),
(129, 'LU', 'Luxemburgo'),
(130, 'MO', 'Macao'),
(131, 'MK', 'ARY Macedonia'),
(132, 'MG', 'Madagascar'),
(133, 'MY', 'Malasia'),
(134, 'MW', 'Malawi'),
(135, 'MV', 'Maldivas'),
(136, 'ML', 'Malí'),
(137, 'MT', 'Malta'),
(138, 'FK', 'Islas Malvinas'),
(139, 'MP', 'Islas Marianas del Norte'),
(140, 'MA', 'Marruecos'),
(141, 'MH', 'Islas Marshall'),
(142, 'MQ', 'Martinica'),
(143, 'MU', 'Mauricio'),
(144, 'MR', 'Mauritania'),
(145, 'YT', 'Mayotte'),
(146, 'MX', 'México'),
(147, 'FM', 'Micronesia'),
(148, 'MD', 'Moldavia'),
(149, 'MC', 'Mónaco'),
(150, 'MN', 'Mongolia'),
(151, 'MS', 'Montserrat'),
(152, 'MZ', 'Mozambique'),
(153, 'MM', 'Myanmar'),
(154, 'NA', 'Namibia'),
(155, 'NR', 'Nauru'),
(156, 'NP', 'Nepal'),
(157, 'NI', 'Nicaragua'),
(158, 'NE', 'Níger'),
(159, 'NG', 'Nigeria'),
(160, 'NU', 'Niue'),
(161, 'NF', 'Isla Norfolk'),
(162, 'NO', 'Noruega'),
(163, 'NC', 'Nueva Caledonia'),
(164, 'NZ', 'Nueva Zelanda'),
(165, 'OM', 'Omán'),
(166, 'NL', 'Países Bajos'),
(167, 'PK', 'Pakistán'),
(168, 'PW', 'Palau'),
(169, 'PS', 'Palestina'),
(170, 'PA', 'Panamá'),
(171, 'PG', 'Papúa Nueva Guinea'),
(172, 'PY', 'Paraguay'),
(173, 'PE', 'Perú'),
(174, 'PN', 'Islas Pitcairn'),
(175, 'PF', 'Polinesia Francesa'),
(176, 'PL', 'Polonia'),
(177, 'PT', 'Portugal'),
(178, 'PR', 'Puerto Rico'),
(179, 'QA', 'Qatar'),
(180, 'GB', 'Reino Unido'),
(181, 'RE', 'Reunión'),
(182, 'RW', 'Ruanda'),
(183, 'RO', 'Rumania'),
(184, 'RU', 'Rusia'),
(185, 'EH', 'Sahara Occidental'),
(186, 'SB', 'Islas Salomón'),
(187, 'WS', 'Samoa'),
(188, 'AS', 'Samoa Americana'),
(189, 'KN', 'San Cristóbal y Nevis'),
(190, 'SM', 'San Marino'),
(191, 'PM', 'San Pedro y Miquelón'),
(192, 'VC', 'San Vicente y las Granadinas'),
(193, 'SH', 'Santa Helena'),
(194, 'LC', 'Santa Lucía'),
(195, 'ST', 'Santo Tomé y Príncipe'),
(196, 'SN', 'Senegal'),
(197, 'CS', 'Serbia y Montenegro'),
(198, 'SC', 'Seychelles'),
(199, 'SL', 'Sierra Leona'),
(200, 'SG', 'Singapur'),
(201, 'SY', 'Siria'),
(202, 'SO', 'Somalia'),
(203, 'LK', 'Sri Lanka'),
(204, 'SZ', 'Suazilandia'),
(205, 'ZA', 'Sudáfrica'),
(206, 'SD', 'Sudán'),
(207, 'SE', 'Suecia'),
(208, 'CH', 'Suiza'),
(209, 'SR', 'Surinam'),
(210, 'SJ', 'Svalbard y Jan Mayen'),
(211, 'TH', 'Tailandia'),
(212, 'TW', 'Taiwán'),
(213, 'TZ', 'Tanzania'),
(214, 'TJ', 'Tayikistán'),
(215, 'IO', 'Territorio Británico del Océan'),
(216, 'TF', 'Territorios Australes Francese'),
(217, 'TL', 'Timor Oriental'),
(218, 'TG', 'Togo'),
(219, 'TK', 'Tokelau'),
(220, 'TO', 'Tonga'),
(221, 'TT', 'Trinidad y Tobago'),
(222, 'TN', 'Túnez'),
(223, 'TC', 'Islas Turcas y Caicos'),
(224, 'TM', 'Turkmenistán'),
(225, 'TR', 'Turquía'),
(226, 'TV', 'Tuvalu'),
(227, 'UA', 'Ucrania'),
(228, 'UG', 'Uganda'),
(229, 'UY', 'Uruguay'),
(230, 'UZ', 'Uzbekistán'),
(231, 'VU', 'Vanuatu'),
(232, 'VE', 'Venezuela'),
(233, 'VN', 'Vietnam'),
(234, 'VG', 'Islas Vírgenes Británicas'),
(235, 'VI', 'Islas Vírgenes de los Estados '),
(236, 'WF', 'Wallis y Futuna'),
(237, 'YE', 'Yemen'),
(238, 'DJ', 'Yibuti'),
(239, 'ZM', 'Zambia'),
(240, 'ZW', 'Zimbabue'),
(242, 'HOL', 'HOLI');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `id_persona` int(11) NOT NULL,
  `nom_persona` varchar(50) NOT NULL,
  `nom1_persona` varchar(50) DEFAULT NULL,
  `ape_persona` varchar(50) NOT NULL,
  `ape1_persona` varchar(50) DEFAULT NULL,
  `doc_persona` varchar(10) NOT NULL,
  `gen_persona` varchar(10) NOT NULL,
  `est_persona` varchar(20) NOT NULL,
  `dir_persona` varchar(50) NOT NULL,
  `tel_persona` varchar(11) DEFAULT NULL,
  `cel_persona` varchar(11) NOT NULL,
  `email_persona` varchar(50) NOT NULL,
  `pass_persona` varchar(30) NOT NULL,
  `id_instituto` int(11) NOT NULL,
  `id_rol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`id_persona`, `nom_persona`, `nom1_persona`, `ape_persona`, `ape1_persona`, `doc_persona`, `gen_persona`, `est_persona`, `dir_persona`, `tel_persona`, `cel_persona`, `email_persona`, `pass_persona`, `id_instituto`, `id_rol`) VALUES
(1, 'Joseph', 'Orlando', 'Lopez', 'Pizza', '1107087151', 'Masculino', 'soltero', 'Cra 12C 53-52', '4387462', '318301194', 'josephorlandolopezpizza@hotmail.com', '123456', 1, 1),
(2, 'Ivan', 'Andres', 'Rodriguez', 'Pizza', '1141529810', 'Masculino', 'soltero', 'Cra 11D 54-93', '4387462', '313154251', 'ivanchos@gmail.com', 'qwerty', 1, 3),
(3, 'Insitucion', NULL, 'Institucion', NULL, '0', '0', '0', '0', '0', '0', 'institucion@gmail.com', '987654', 1, 2),
(4, 'Luis', 'Yovanny', 'Romo', 'Portilla', '1125364121', 'Masculino', 'soltero', 'Sur-Oriental', '5562134', '3164521486', 'luisromo@gmail.com', '123456', 1, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perso_x_materia`
--

CREATE TABLE `perso_x_materia` (
  `id_perso_mate` int(11) NOT NULL,
  `id_persona` int(11) NOT NULL,
  `id_materia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `perso_x_materia`
--

INSERT INTO `perso_x_materia` (`id_perso_mate`, `id_persona`, `id_materia`) VALUES
(2, 1, 24),
(3, 1, 3),
(4, 2, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `id_rol` int(11) NOT NULL,
  `des_rol` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id_rol`, `des_rol`) VALUES
(1, 'Administrador'),
(2, 'Administrador de Institucion'),
(3, 'Docente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subactividad`
--

CREATE TABLE `subactividad` (
  `id_subActividad` int(11) NOT NULL,
  `des_subActividad` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `id_actividad` int(11) NOT NULL,
  `fec_actividad` date NOT NULL,
  `val_actividad` decimal(3,2) NOT NULL,
  `id_perso_mate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `subactividad`
--

INSERT INTO `subactividad` (`id_subActividad`, `des_subActividad`, `id_actividad`, `fec_actividad`, `val_actividad`, `id_perso_mate`) VALUES
(1, 'Asistencia', 1, '2017-11-01', '5.00', 2),
(2, 'Taller 1', 2, '2017-11-01', '2.50', 2),
(3, 'Taller 2', 2, '2017-11-01', '2.50', 2),
(4, 'Parcial', 3, '2017-11-21', '5.00', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actividad`
--
ALTER TABLE `actividad`
  ADD PRIMARY KEY (`id_actividad`),
  ADD KEY `id_evaluacion` (`id_evaluacion`);

--
-- Indices de la tabla `ciudad`
--
ALTER TABLE `ciudad`
  ADD PRIMARY KEY (`id_ciudad`),
  ADD KEY `id_pais` (`id_pais`);

--
-- Indices de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  ADD PRIMARY KEY (`id_estudi`);

--
-- Indices de la tabla `evaluacion`
--
ALTER TABLE `evaluacion`
  ADD PRIMARY KEY (`id_evaluacion`);

--
-- Indices de la tabla `eva_x_act`
--
ALTER TABLE `eva_x_act`
  ADD PRIMARY KEY (`id_eva_act`),
  ADD KEY `id_perso_mate` (`id_perso_mate`),
  ADD KEY `id_subActividad` (`id_subActividad`),
  ADD KEY `id_estudi` (`id_estudi`);

--
-- Indices de la tabla `instituto`
--
ALTER TABLE `instituto`
  ADD PRIMARY KEY (`id_instituto`),
  ADD KEY `id_ciudad` (`id_ciudad`);

--
-- Indices de la tabla `materia`
--
ALTER TABLE `materia`
  ADD PRIMARY KEY (`id_materia`);

--
-- Indices de la tabla `pais`
--
ALTER TABLE `pais`
  ADD PRIMARY KEY (`id_pais`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`id_persona`),
  ADD KEY `id_instituto` (`id_instituto`),
  ADD KEY `id_rol` (`id_rol`);

--
-- Indices de la tabla `perso_x_materia`
--
ALTER TABLE `perso_x_materia`
  ADD PRIMARY KEY (`id_perso_mate`),
  ADD KEY `id_persona` (`id_persona`),
  ADD KEY `id_materia` (`id_materia`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `subactividad`
--
ALTER TABLE `subactividad`
  ADD PRIMARY KEY (`id_subActividad`),
  ADD KEY `id_actividad` (`id_actividad`),
  ADD KEY `id_perso_mate` (`id_perso_mate`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `actividad`
--
ALTER TABLE `actividad`
  MODIFY `id_actividad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `ciudad`
--
ALTER TABLE `ciudad`
  MODIFY `id_ciudad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=200;

--
-- AUTO_INCREMENT de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  MODIFY `id_estudi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `evaluacion`
--
ALTER TABLE `evaluacion`
  MODIFY `id_evaluacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `eva_x_act`
--
ALTER TABLE `eva_x_act`
  MODIFY `id_eva_act` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `instituto`
--
ALTER TABLE `instituto`
  MODIFY `id_instituto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `materia`
--
ALTER TABLE `materia`
  MODIFY `id_materia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de la tabla `pais`
--
ALTER TABLE `pais`
  MODIFY `id_pais` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=243;

--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
  MODIFY `id_persona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `perso_x_materia`
--
ALTER TABLE `perso_x_materia`
  MODIFY `id_perso_mate` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `id_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `subactividad`
--
ALTER TABLE `subactividad`
  MODIFY `id_subActividad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `actividad`
--
ALTER TABLE `actividad`
  ADD CONSTRAINT `actividad_ibfk_1` FOREIGN KEY (`id_evaluacion`) REFERENCES `evaluacion` (`id_evaluacion`);

--
-- Filtros para la tabla `ciudad`
--
ALTER TABLE `ciudad`
  ADD CONSTRAINT `ciudad_ibfk_1` FOREIGN KEY (`id_pais`) REFERENCES `pais` (`id_pais`);

--
-- Filtros para la tabla `eva_x_act`
--
ALTER TABLE `eva_x_act`
  ADD CONSTRAINT `eva_x_act_ibfk_5` FOREIGN KEY (`id_perso_mate`) REFERENCES `perso_x_materia` (`id_perso_mate`),
  ADD CONSTRAINT `eva_x_act_ibfk_6` FOREIGN KEY (`id_subActividad`) REFERENCES `subactividad` (`id_subActividad`),
  ADD CONSTRAINT `eva_x_act_ibfk_7` FOREIGN KEY (`id_estudi`) REFERENCES `estudiante` (`id_estudi`);

--
-- Filtros para la tabla `instituto`
--
ALTER TABLE `instituto`
  ADD CONSTRAINT `instituto_ibfk_1` FOREIGN KEY (`id_ciudad`) REFERENCES `ciudad` (`id_ciudad`);

--
-- Filtros para la tabla `persona`
--
ALTER TABLE `persona`
  ADD CONSTRAINT `persona_ibfk_1` FOREIGN KEY (`id_instituto`) REFERENCES `instituto` (`id_instituto`),
  ADD CONSTRAINT `persona_ibfk_2` FOREIGN KEY (`id_rol`) REFERENCES `rol` (`id_rol`);

--
-- Filtros para la tabla `perso_x_materia`
--
ALTER TABLE `perso_x_materia`
  ADD CONSTRAINT `perso_x_materia_ibfk_1` FOREIGN KEY (`id_persona`) REFERENCES `persona` (`id_persona`),
  ADD CONSTRAINT `perso_x_materia_ibfk_2` FOREIGN KEY (`id_materia`) REFERENCES `materia` (`id_materia`);

--
-- Filtros para la tabla `subactividad`
--
ALTER TABLE `subactividad`
  ADD CONSTRAINT `subactividad_ibfk_1` FOREIGN KEY (`id_actividad`) REFERENCES `actividad` (`id_actividad`),
  ADD CONSTRAINT `subactividad_ibfk_2` FOREIGN KEY (`id_perso_mate`) REFERENCES `perso_x_materia` (`id_perso_mate`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
