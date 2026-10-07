-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-05-2010 a las 06:59:20
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `budea`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE `empresa` (
  `Num_patroID` varchar(9) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Razon_social` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Tip_rif` enum('J','V','G') COLLATE utf8mb4_unicode_ci NOT NULL,
  `Num_rif` int(9) NOT NULL,
  `Tipo_empresa` enum('Privada','Publica','Unipersonal','Mixta') COLLATE utf8mb4_unicode_ci NOT NULL,
  `Estatus` enum('Activa','Temporal','Inactiva','Inactiva Bloc Definitivo') COLLATE utf8mb4_unicode_ci NOT NULL,
  `Activ_econom` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Riesgo` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Sistema_activ` enum('Tiuna','Tradicional','Sira') COLLATE utf8mb4_unicode_ci NOT NULL,
  `Nacionalidad` enum('V','E') COLLATE utf8mb4_unicode_ci NOT NULL,
  `Repr_legal_CI` int(12) NOT NULL,
  `Nom_Ap_Rep_legal` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Monto` int(10) NOT NULL,
  `Desde` date NOT NULL,
  `Hasta` date NOT NULL,
  `Direccion` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Sector` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Punt_ref` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Telf_local_emp` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Correo_emp` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Correo_altern` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Mes_aprov` enum('Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre') COLLATE utf8mb4_unicode_ci NOT NULL,
  `Año_aprov` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`Num_patroID`, `Razon_social`, `Tip_rif`, `Num_rif`, `Tipo_empresa`, `Estatus`, `Activ_econom`, `Riesgo`, `Sistema_activ`, `Nacionalidad`, `Repr_legal_CI`, `Nom_Ap_Rep_legal`, `Monto`, `Desde`, `Hasta`, `Direccion`, `Sector`, `Punt_ref`, `Telf_local_emp`, `Correo_emp`, `Correo_altern`, `Mes_aprov`, `Año_aprov`) VALUES
('F123456', 'La Fonfi', 'J', 24706426, 'Privada', 'Activa', 'Sublimación y litogr', 'Minimo', 'Tradicional', 'V', 24706426, 'Jordy Cotiz', 123, '2011-12-12', '2022-11-20', 'San Jose de Cocodite', 'El Taparo', 'La casas de Juana', '02695674011', 'hola123@gmail.com', 'lavecijuana@gmail.com', 'Diciembre', 2020),
('F26005012', 'DISTRIBUIDORA TORO REY, C.A', 'J', 295427689, 'Unipersonal', 'Temporal', 'COMERCIO, COMPRAS,VE', 'ALTO', 'Tiuna', 'V', 10600620, 'Juanito Perez Altamar', 22655769, '2019-10-01', '2021-02-28', 'CALLE FALCON CON MEXICO Y PARAGUAI, CASA No 171, MUNICIPIO ACARIRUBANA, ESTADO FALCON', 'CENTRO DE PUNTO FIJO', 'CANCHA PIREPIRE', '2692464691', 'DISTRIBUIDORATOROREYCA@GMAIL.COM', 'AME-CONTABILIDAD@GMAIL.COM', 'Febrero', 2015),
('F26125191', 'NAIM IMPORT Y EXPORT, C.A', 'J', 308207268, 'Privada', 'Inactiva', 'COMERCIO AL POR', 'Medio', 'Tiuna', 'V', 13934496, 'NOREMYS DEL VALLE REYES DE BECERRA', 0, '2019-01-01', '0000-00-00', 'AVENIDA VOLIVAR ENTRE FALCON Y MARIÑO, EDIFICIO DEYENA, PB. MUNICIPIO CARIRUBANA ESTADO FALCON', 'CENTRO DE PUNTO FIJO', 'A UNA CUADRA DEL PASAJE ZEITER, FRENTE A TIENDAS LIDER.', '2692472741', 'NAIMPORTYEXPORT@GMAIL.COM', 'NAIMPORTYEXPORT@HOTMAIL.COM', 'Enero', 2020),
('F26125844', 'CRIOLLISIMO GRILL C.A', 'J', 308012629, 'Privada', 'Activa', 'COMERCIO AL POR', 'Medio', 'Tiuna', 'V', 9721784, 'RICARDO JOSE GOMEZ ROO', 8120606, '2008-12-01', '2021-02-28', 'PROLONGACION GIRARDOT, CIUDAD DEL VIENTO, LOCAL PB-40. MUNICIPIO CARIRUBANA ESTADO FALCON', 'SANTA IRENE', 'LA MISMA CALE DEL CUERPO DE BOMBEROS', '2692483447', 'CRIOLLISIMOGRILL@GMAIL.COM', 'NOHELIAVELASZO231921@HOTMAIL.C', 'Junio', 2009),
('F26126636', 'SPORTEAM SKATE@SURF, C.A', 'J', 308751138, 'Privada', 'Activa', 'COMERCIO AL POR MENO', 'Medio', 'Tiuna', 'V', 4786791, 'DULCE MARIA FALCON DE DIAZ', 2450, '2018-08-01', '2021-02-28', 'AVENIDA 6, CCR LAS VIRTUDES, NIVEL PB, LOCAL P-4-2,', 'COMUNIDAD CARDON', 'DIAGONAL A DIGITEL', '2692485879', 'HIRAM_DIAZ82@YAHOO.ES', 'PAPARRIA@HOTMAIL.COM', 'Agosto', 2013),
('F27961361', 'IVSS 2, C.A', 'G', 279613610, 'Mixta', 'Activa', 'Comercio Libre', 'Minimo', 'Sira', 'E', 27961361, 'Hebert Piña', 2000, '0000-00-00', '2001-05-12', 'IVSS calle libertad', 'Centro', 'Empanadas JoJo', '0269-0000000', 'Dio@gmail.com', 'Jotaro@gmail.com', 'Octubre', 2001),
('O71657189', 'PLATAFORMA CACTUSA24, C.A', 'J', 406696641, 'Privada', 'Activa', 'COMUNICACIONES', 'Minimo', 'Tradicional', 'V', 15140662, 'JEAN CARLOS ARCAYA MORALES', 3998075, '2019-10-20', '2021-01-31', 'INTERCOMUNAL CORO PUNTO FIJO, EDIFICIO CC PARAGUAANA MALL, C.A, NIVEL MEZZANINA, MUNICIPIO CARIRUBANA, ESTADO FALCON.', 'EL CARDON', 'AL LADO DE CONDOMINIO CC PARAGUANA MALL, C.A', '2692440544', 'CACTUS24NOTICIAS@GMAIL.COM', '', 'Enero', 2016),
('O80944607', 'Bodegon Hermanos Gouveia Paraguana, C.A', 'J', 296599599, 'Privada', 'Activa', 'Economico', 'Medio', 'Tiuna', 'V', 11771248, 'TU PAPA', 12, '2009-10-22', '2009-08-09', 'coro punto fijo cc paraguana pb local n°a-5 ', 'el cardon', 'municipio carirubana estado falcon', '0269-440048', 'aNO@aNO.com', 'ANA@ANA.ES', 'Octubre', 2009);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vist_año_aprov`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `vist_año_aprov` (
`Num_patroID` varchar(9)
,`Razon_social` varchar(40)
,`Año_aprov` year(4)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vist_mes_aprov`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `vist_mes_aprov` (
`Num_patroID` varchar(9)
,`Razon_social` varchar(40)
,`Mes_aprov` enum('Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre')
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vist_monto`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `vist_monto` (
`Num_patroID` varchar(9)
,`Razon_social` varchar(40)
,`Monto` int(10)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vist_sector`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `vist_sector` (
`Num_patroID` varchar(9)
,`Razon_social` varchar(40)
,`Sector` varchar(50)
);

-- --------------------------------------------------------

--
-- Estructura para la vista `vist_año_aprov`
--
DROP TABLE IF EXISTS `vist_año_aprov`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vist_año_aprov`  AS  select `empresa`.`Num_patroID` AS `Num_patroID`,`empresa`.`Razon_social` AS `Razon_social`,`empresa`.`Año_aprov` AS `Año_aprov` from `empresa` order by `empresa`.`Mes_aprov` ;

-- --------------------------------------------------------

--
-- Estructura para la vista `vist_mes_aprov`
--
DROP TABLE IF EXISTS `vist_mes_aprov`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vist_mes_aprov`  AS  select `empresa`.`Num_patroID` AS `Num_patroID`,`empresa`.`Razon_social` AS `Razon_social`,`empresa`.`Mes_aprov` AS `Mes_aprov` from `empresa` order by `empresa`.`Mes_aprov` ;

-- --------------------------------------------------------

--
-- Estructura para la vista `vist_monto`
--
DROP TABLE IF EXISTS `vist_monto`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vist_monto`  AS  select `empresa`.`Num_patroID` AS `Num_patroID`,`empresa`.`Razon_social` AS `Razon_social`,`empresa`.`Monto` AS `Monto` from `empresa` order by `empresa`.`Mes_aprov` ;

-- --------------------------------------------------------

--
-- Estructura para la vista `vist_sector`
--
DROP TABLE IF EXISTS `vist_sector`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vist_sector`  AS  select `empresa`.`Num_patroID` AS `Num_patroID`,`empresa`.`Razon_social` AS `Razon_social`,`empresa`.`Sector` AS `Sector` from `empresa` order by `empresa`.`Mes_aprov` ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`Num_patroID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
