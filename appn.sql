-- phpMyAdmin SQL Dump
-- version 4.6.0
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Dec 08, 2016 at 11:49 PM
-- Server version: 10.1.9-MariaDB-log
-- PHP Version: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `appn`
--

-- --------------------------------------------------------

--
-- Table structure for table `a3lergias`
--

CREATE TABLE `a3lergias` (
  `id` int(11) DEFAULT NULL,
  `Alergico` enum('Si','No') DEFAULT NULL,
  `MotivodelaAlergia` varchar(50) DEFAULT NULL,
  `EnfermedadDiagnosticada` varchar(50) DEFAULT NULL,
  `AnteriorPadecimiento` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `a3lergias`
--

INSERT INTO `a3lergias` (`id`, `Alergico`, `MotivodelaAlergia`, `EnfermedadDiagnosticada`, `AnteriorPadecimiento`) VALUES
(726555522, 'No', '', 'No', 'Nop'),
(12345678, 'Si', 'No', 'No', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `a5ntecedentesfamiliares`
--

CREATE TABLE `a5ntecedentesfamiliares` (
  `id` int(11) DEFAULT NULL,
  `Obesidad` set('Si','No') DEFAULT NULL,
  `Diabetes` set('Si','No') DEFAULT NULL,
  `Cancer` set('Si','No') DEFAULT NULL,
  `HTA` set('Si','No') DEFAULT NULL,
  `Hipercolesterolemia` set('Si','No') DEFAULT NULL,
  `Hipertrigliceridemia` set('Si','No') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `a5ntecedentesfamiliares`
--

INSERT INTO `a5ntecedentesfamiliares` (`id`, `Obesidad`, `Diabetes`, `Cancer`, `HTA`, `Hipercolesterolemia`, `Hipertrigliceridemia`) VALUES
(12345678, 'Si', 'No', 'No', 'No', 'No', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `a7ctividades`
--

CREATE TABLE `a7ctividades` (
  `id` int(11),
  `Rango` decimal(10,1) DEFAULT NULL,
  `EjercicioPractica` varchar(50) DEFAULT NULL,
  `Frecuencia` varchar(50) DEFAULT NULL,
  `Tiempo` int(11) DEFAULT NULL,
  `HaceComenzoActividad` varchar(50) DEFAULT NULL,
  `MotivoActividad` varchar(50) DEFAULT NULL,
  `SintomasActividad` varchar(50) DEFAULT NULL,
  `Aspecto` varchar(50) DEFAULT NULL,
  `VasosAgua` int(11) DEFAULT NULL,
  `MareosActividad` enum('Si','No') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `a7ctividades`
--

INSERT INTO `a7ctividades` (`id`, `Rango`, `EjercicioPractica`, `Frecuencia`, `Tiempo`, `HaceComenzoActividad`, `MotivoActividad`, `SintomasActividad`, `Aspecto`, `VasosAgua`, `MareosActividad`) VALUES
(98522, '1.4', 'Correr', '1 vez por semana', 30, 'Hace un año', 'Ninguno', 'Ninguno', 'Excelente', 2, 'No'),
(1902, '1.6', 'Futbol', '2 veces a la semana', 30, 'Hace 2 meses', 'Ninguno', 'si', 'Excelente', 2, 'No'),
(12345678, '0.0', 'Natacion', '1', 30, 'hace una semana', 'ninguno', 'si', 'bueno', 2, 'Si');

-- --------------------------------------------------------

--
-- Table structure for table `d1atospersonales`
--

CREATE TABLE `d1atospersonales` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `edad` int(11) DEFAULT NULL,
  `sexo` enum('Masculino','Femenino') DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `direccion` varchar(50) DEFAULT NULL,
  `telefono` varchar(50) DEFAULT NULL,
  `correo` varchar(50) DEFAULT NULL,
  `motivo` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `d1atospersonales`
--

INSERT INTO `d1atospersonales` (`id`, `nombre`, `edad`, `sexo`, `fecha`, `direccion`, `telefono`, `correo`, `motivo`) VALUES
(1902, 'ivan', 13, 'Masculino', '2003-11-23', 'no', '9512342345', 'no', 'no'),
(98222, 'antonio', 23, 'Masculino', '1992-10-11', 'no', '9312323333', 'no', 'no'),
(98522, 'IvÃ¡n GarcÃ­a', 23, 'Masculino', '1992-11-23', 'Cipres', '9513634177', 'ivann1922@gmail.com', 'motivo desconocido'),
(9835533, 'julio', 23, 'Masculino', '1992-10-15', 'Centro', '9512342562', 'no tiene', 'desconocido'),
(12345678, 'juanito', 18, 'Masculino', '1882-05-12', 'no tiene', '95123422345', 'no tiene', 'desconocida'),
(726555522, 'lucas', 17, 'Masculino', '1990-11-23', 'sin direccio', '9514232222', 'ass', 'sss');

-- --------------------------------------------------------

--
-- Table structure for table `g8inecologicos`
--

CREATE TABLE `g8inecologicos` (
  `id` int(11) DEFAULT NULL,
  `EmbarazoActual` enum('Si','No') DEFAULT NULL,
  `HabitosAlimen` varchar(50) DEFAULT NULL,
  `Planificacion` enum('Si','No') DEFAULT NULL,
  `Consistio` varchar(50) DEFAULT NULL,
  `AcidoFolico` enum('Si','No') DEFAULT NULL,
  `Antojo` enum('Si','No') DEFAULT NULL,
  `QueAlimentos` varchar(50) DEFAULT NULL,
  `NauseasVomitos` enum('Si','No') DEFAULT NULL,
  `Mareos` enum('Si','No') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `i2ndicadoresclinicos`
--

CREATE TABLE `i2ndicadoresclinicos` (
  `id` int(11),
  `Diarrea` enum('Si','No') DEFAULT NULL,
  `Estrenimiento` enum('Si','No') DEFAULT NULL,
  `Gastritis` enum('Si','No') DEFAULT NULL,
  `Ulcera` enum('Si','No') DEFAULT NULL,
  `Nauseas` enum('Si','No') DEFAULT NULL,
  `Pirosis` enum('Si','No') DEFAULT NULL,
  `Colitis` enum('Si','No') DEFAULT NULL,
  `Vomito` enum('Si','No') DEFAULT NULL,
  `Otros` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `i2ndicadoresclinicos`
--

INSERT INTO `i2ndicadoresclinicos` (`id`, `Diarrea`, `Estrenimiento`, `Gastritis`, `Ulcera`, `Nauseas`, `Pirosis`, `Colitis`, `Vomito`, `Otros`) VALUES
(98222, 'Si', 'No', 'Si', 'Si', 'No', 'No', 'No', 'Si', 'NO'),
(1902, 'Si', 'Si', 'Si', 'No', 'No', 'No', 'No', 'No', 'no'),
(726555522, 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'si'),
(12345678, 'Si', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `i4ngestaparabajardepeso`
--

CREATE TABLE `i4ngestaparabajardepeso` (
  `id` int(11) DEFAULT NULL,
  `Laxantes` enum('Si','No') DEFAULT NULL,
  `MotivoLaxante` varchar(50) DEFAULT NULL,
  `Diureticos` enum('Si','No') DEFAULT NULL,
  `MotivoDiureticos` varchar(50) DEFAULT NULL,
  `Antiacidos` enum('Si','No') DEFAULT NULL,
  `MotivoAntiacido` varchar(50) DEFAULT NULL,
  `Analgesicos` enum('Si','No') DEFAULT NULL,
  `MotivoAnalgesico` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `i4ngestaparabajardepeso`
--

INSERT INTO `i4ngestaparabajardepeso` (`id`, `Laxantes`, `MotivoLaxante`, `Diureticos`, `MotivoDiureticos`, `Antiacidos`, `MotivoAntiacido`, `Analgesicos`, `MotivoAnalgesico`) VALUES
(12345678, 'Si', 'Por que si', 'No', 'Nooo', 'No', 'Nooo', 'Si', 'Por que si');

-- --------------------------------------------------------

--
-- Table structure for table `i6ntervencionquirurgica`
--

CREATE TABLE `i6ntervencionquirurgica` (
  `id` int(11) DEFAULT NULL,
  `Intervencion` enum('Si','No') DEFAULT NULL,
  `QueAlimento` varchar(50) DEFAULT NULL,
  `FrecuenciaDesparacita` varchar(50) DEFAULT NULL,
  `UltimaVezDesp` varchar(50) DEFAULT NULL,
  `ConsumeBeAlco` enum('Si','No') DEFAULT NULL,
  `ConsumeTabaco` enum('Si','No') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `i6ntervencionquirurgica`
--

INSERT INTO `i6ntervencionquirurgica` (`id`, `Intervencion`, `QueAlimento`, `FrecuenciaDesparacita`, `UltimaVezDesp`, `ConsumeBeAlco`, `ConsumeTabaco`) VALUES
(12345678, 'No', 'Ninguno', '2 veces por mes', 'Hace un aÃ±o', 'No', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `i9ndicadoresantropome`
--

CREATE TABLE `i9ndicadoresantropome` (
  `id` int(11) DEFAULT NULL,
  `PesoActual` float DEFAULT NULL,
  `PesoHabitual` float DEFAULT NULL,
  `Estatura` float DEFAULT NULL,
  `IMC` float DEFAULT NULL,
  `PCS` float DEFAULT NULL,
  `ICC` float DEFAULT NULL,
  `CM` float DEFAULT NULL,
  `TMB` float DEFAULT NULL,
  `ETA` float UNSIGNED DEFAULT NULL,
  `ACT` float DEFAULT NULL,
  `GET` float DEFAULT NULL,
  `CircunferenciaCadera` float DEFAULT NULL,
  `CircunferenciaMuneca` float DEFAULT NULL,
  `CincunferenciaCintura` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `m10ediciones`
--

CREATE TABLE `m10ediciones` (
  `Id` int(11) DEFAULT NULL,
  `CircunCadera` int(11) DEFAULT NULL,
  `CircunMuneca` int(11) DEFAULT NULL,
  `CircunCintura` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `username`, `password`) VALUES
(1, 'ivan', '1234'),
(2, 'julio', '4321'),
(3, 'user', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `Paswd` varchar(50) NOT NULL,
  `Usuario` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `a3lergias`
--
ALTER TABLE `a3lergias`
  ADD KEY `FK_alergias_datospersonales` (`id`);

--
-- Indexes for table `a5ntecedentesfamiliares`
--
ALTER TABLE `a5ntecedentesfamiliares`
  ADD KEY `FK__Antecedentesdatospersonales` (`id`);

--
-- Indexes for table `a7ctividades`
--
ALTER TABLE `a7ctividades`
  ADD KEY `FK__ActividadesDatospersonales` (`id`);

--
-- Indexes for table `d1atospersonales`
--
ALTER TABLE `d1atospersonales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `g8inecologicos`
--
ALTER TABLE `g8inecologicos`
  ADD KEY `FK__GineDatospersonales` (`id`);

--
-- Indexes for table `i2ndicadoresclinicos`
--
ALTER TABLE `i2ndicadoresclinicos`
  ADD KEY `id` (`id`);

--
-- Indexes for table `i4ngestaparabajardepeso`
--
ALTER TABLE `i4ngestaparabajardepeso`
  ADD KEY `FK_Ingestaparabajardepeso_datospersonales` (`id`);

--
-- Indexes for table `i6ntervencionquirurgica`
--
ALTER TABLE `i6ntervencionquirurgica`
  ADD KEY `FK__Interdatospersonales` (`id`);

--
-- Indexes for table `i9ndicadoresantropome`
--
ALTER TABLE `i9ndicadoresantropome`
  ADD KEY `FK__AntroDatospersonales` (`id`);

--
-- Indexes for table `m10ediciones`
--
ALTER TABLE `m10ediciones`
  ADD KEY `FK__MedicionesDatospersonales` (`Id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`Paswd`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `a3lergias`
--
ALTER TABLE `a3lergias`
  ADD CONSTRAINT `FK_alergias_datospersonales` FOREIGN KEY (`id`) REFERENCES `d1atospersonales` (`id`);

--
-- Constraints for table `a5ntecedentesfamiliares`
--
ALTER TABLE `a5ntecedentesfamiliares`
  ADD CONSTRAINT `FK__Antecedentesdatospersonales` FOREIGN KEY (`id`) REFERENCES `d1atospersonales` (`id`);

--
-- Constraints for table `a7ctividades`
--
ALTER TABLE `a7ctividades`
  ADD CONSTRAINT `FK__ActividadesDatospersonales` FOREIGN KEY (`id`) REFERENCES `d1atospersonales` (`id`);

--
-- Constraints for table `g8inecologicos`
--
ALTER TABLE `g8inecologicos`
  ADD CONSTRAINT `FK__GineDatospersonales` FOREIGN KEY (`id`) REFERENCES `d1atospersonales` (`id`);

--
-- Constraints for table `i2ndicadoresclinicos`
--
ALTER TABLE `i2ndicadoresclinicos`
  ADD CONSTRAINT `FK_indicadoresclinicos_datospersonales` FOREIGN KEY (`id`) REFERENCES `d1atospersonales` (`id`);

--
-- Constraints for table `i4ngestaparabajardepeso`
--
ALTER TABLE `i4ngestaparabajardepeso`
  ADD CONSTRAINT `FK_Ingestaparabajardepeso_datospersonales` FOREIGN KEY (`id`) REFERENCES `d1atospersonales` (`id`);

--
-- Constraints for table `i6ntervencionquirurgica`
--
ALTER TABLE `i6ntervencionquirurgica`
  ADD CONSTRAINT `FK__Interdatospersonales` FOREIGN KEY (`id`) REFERENCES `d1atospersonales` (`id`);

--
-- Constraints for table `i9ndicadoresantropome`
--
ALTER TABLE `i9ndicadoresantropome`
  ADD CONSTRAINT `FK__AntroDatospersonales` FOREIGN KEY (`id`) REFERENCES `d1atospersonales` (`id`);

--
-- Constraints for table `m10ediciones`
--
ALTER TABLE `m10ediciones`
  ADD CONSTRAINT `FK__MedicionesDatospersonales` FOREIGN KEY (`Id`) REFERENCES `d1atospersonales` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
