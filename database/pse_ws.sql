-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-06-2018 a las 14:10:04
-- Versión del servidor: 10.1.10-MariaDB
-- Versión de PHP: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pse_ws`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_config_payout`
--

CREATE TABLE `tbl_config_payout` (
  `language` varchar(2) NOT NULL,
  `currency` varchar(3) NOT NULL,
  `percent_tax_amount` int(11) NOT NULL,
  `percent_devolution_base` int(11) NOT NULL,
  `buyer_identification_type` varchar(3) NOT NULL,
  `buyer_identification` varchar(12) NOT NULL,
  `name` varchar(60) NOT NULL,
  `lastname` varchar(60) NOT NULL,
  `company` varchar(60) NOT NULL,
  `email` varchar(80) NOT NULL,
  `addres` varchar(100) NOT NULL,
  `city` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  `country` varchar(2) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `cellphone` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_config_payout`
--

INSERT INTO `tbl_config_payout` (`language`, `currency`, `percent_tax_amount`, `percent_devolution_base`, `buyer_identification_type`, `buyer_identification`, `name`, `lastname`, `company`, `email`, `addres`, `city`, `department`, `country`, `phone`, `cellphone`) VALUES
('ES', 'CO', 10, 20, '122', 'CC', 'Nombre', 'Apellido', 'CompaÃ±ia', 'correo@correo.com', 'direccion', 'Ciudad', 'Departamento', 'Pa', '2779126', '3016323511');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_transaction`
--

CREATE TABLE `tbl_transaction` (
  `sessionID` varchar(32) NOT NULL,
  `returnCode` varchar(30) NOT NULL,
  `trazabilityCode` varchar(40) NOT NULL,
  `transactionCycle` int(11) NOT NULL,
  `bankCurrency` varchar(3) NOT NULL,
  `bankFactor` float NOT NULL,
  `bankURL` text NOT NULL,
  `responseCode` int(11) NOT NULL,
  `responseReasonCode` varchar(3) NOT NULL,
  `responseReasonText` text NOT NULL,
  `transactionID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_transaction`
--
ALTER TABLE `tbl_transaction`
  ADD PRIMARY KEY (`transactionID`),
  ADD UNIQUE KEY `sessionID` (`sessionID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
