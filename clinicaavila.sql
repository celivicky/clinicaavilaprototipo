-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-06-2024 a las 05:11:13
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `clinicaavila`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admit_invo_db`
--

CREATE TABLE `admit_invo_db` (
  `Invo_no` int(11) NOT NULL,
  `pet_no` int(11) NOT NULL,
  `pet_name` varchar(100) NOT NULL,
  `p_age` int(3) NOT NULL,
  `price_of_med` int(11) NOT NULL,
  `price_of_doc` int(11) NOT NULL,
  `day_count` int(11) NOT NULL,
  `price_of_room` int(11) NOT NULL,
  `ser_char` int(11) NOT NULL,
  `totl` int(11) NOT NULL,
  `invo_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `admit_invo_db`
--

INSERT INTO `admit_invo_db` (`Invo_no`, `pet_no`, `pet_name`, `p_age`, `price_of_med`, `price_of_doc`, `day_count`, `price_of_room`, `ser_char`, `totl`, `invo_date`) VALUES
(1, 1, 'Juan Galan', 26, 500, 500, 20, 200, 500, 215, '2024-06-11 03:38:18'),
(2, 2, 'Omar Estrada', 27, 1250, 4520, 8, 80, 500, 5855, '2024-06-12 01:13:32'),
(3, 6, 'Josue Echeverria', 35, 20, 20, 5, 5000, 500, 5540, '2024-06-24 22:09:36');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admit_pet`
--

CREATE TABLE `admit_pet` (
  `admit_petid` int(10) NOT NULL,
  `admit_name` varchar(500) NOT NULL,
  `admit_age` int(3) NOT NULL,
  `admit_con` varchar(15) NOT NULL,
  `admit_bg` varchar(3) NOT NULL,
  `admit_rn` varchar(10) NOT NULL,
  `pet_id` int(10) NOT NULL,
  `admit_date` date NOT NULL,
  `pet_des` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `admit_pet`
--

INSERT INTO `admit_pet` (`admit_petid`, `admit_name`, `admit_age`, `admit_con`, `admit_bg`, `admit_rn`, `pet_id`, `admit_date`, `pet_des`) VALUES
(5, 'Julian Cardozo', 34, '+58 424258794', 'O+', '2', 3, '2024-06-20', 'Leucemia'),
(7, 'Omar Estrada', 27, '+58 2147483647', 'O+', '5', 2, '2024-06-24', 'Catarsis');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hospi_room`
--

CREATE TABLE `hospi_room` (
  `room_id` int(11) NOT NULL,
  `room_name` varchar(100) NOT NULL,
  `room_avilabl` varchar(20) DEFAULT NULL,
  `rc_time_mo` varchar(10) NOT NULL DEFAULT '11.30 AM',
  `rc_time_ev` varchar(10) DEFAULT '06.30 PM',
  `room_drid` int(11) DEFAULT NULL,
  `eroom_drid` int(11) DEFAULT NULL,
  `room_petID` varchar(11) DEFAULT 'No Patient'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `hospi_room`
--

INSERT INTO `hospi_room` (`room_id`, `room_name`, `room_avilabl`, `rc_time_mo`, `rc_time_ev`, `room_drid`, `eroom_drid`, `room_petID`) VALUES
(1, 'Quirofano 1', 'AV', '11.30 AM', '1:00 PM', 1, 6, 'No Pacient'),
(2, 'Quirofano 2', 'NAV', '11.30 AM', '1.30 PM', NULL, NULL, '3'),
(3, 'Quirofano 3', 'AV', '11.30 AM', '2.30 PM', NULL, NULL, 'No Patient'),
(4, 'Quirofano 4', 'AV', '9.30 AM', '3.30 PM', NULL, NULL, 'No Patient'),
(5, 'Quirofano 5', 'NAV', '10.30 AM', '2.30 PM', 1, 1, '2'),
(6, 'Quirofano 6', 'AV', '9.30 AM', '3.30 PM', NULL, NULL, 'No Patient'),
(7, 'Quirofano 7', 'AV', '11.30 AM', '2.30 PM', NULL, NULL, 'No Patient'),
(8, 'Quirofano 8', 'AV', '11.30 AM', '4.00 PM', NULL, NULL, 'No Patient'),
(9, 'Quirofano 9', 'AV', '11.30 AM', '1.00 PM', NULL, NULL, 'No Patient'),
(10, 'Quirofano 10', 'AV', '11.30 pm', '4.30 PM', 1, 6, 'No Patient');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lvl2_admin`
--

CREATE TABLE `lvl2_admin` (
  `lvtwname` varchar(100) NOT NULL,
  `lvtwusern` varchar(100) NOT NULL,
  `lvtwemail` varchar(200) NOT NULL,
  `lvtwpass` varchar(50) NOT NULL,
  `lvtwid` int(11) NOT NULL,
  `lvtwcdate` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `lvl2_admin`
--

INSERT INTO `lvl2_admin` (`lvtwname`, `lvtwusern`, `lvtwemail`, `lvtwpass`, `lvtwid`, `lvtwcdate`) VALUES
('usuario', 'admin08', 'usuario@gmail.com', '4b67deeb9aba04a5b54632ad19934f26', 1, '2024-06-24');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `patient`
--

CREATE TABLE `patient` (
  `pet_id` int(11) NOT NULL,
  `pet_reg_date` datetime DEFAULT current_timestamp(),
  `pet_fn` varchar(100) DEFAULT NULL,
  `pet_sn` varchar(100) DEFAULT NULL,
  `pet_addr` varchar(500) DEFAULT NULL,
  `pet_ac` varchar(3) DEFAULT '+57',
  `pet_con` varchar(10) DEFAULT NULL,
  `pet_em` varchar(1000) DEFAULT NULL,
  `pet_gen` varchar(10) DEFAULT NULL,
  `pet_bd` date DEFAULT NULL,
  `pet_age` int(3) DEFAULT NULL,
  `pet_bg` varchar(3) DEFAULT NULL,
  `Pet_opdid` int(11) DEFAULT NULL,
  `Insert_admunname` varchar(100) DEFAULT NULL,
  `Update_sadmunname` varchar(100) DEFAULT NULL,
  `update_date` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `patient`
--

INSERT INTO `patient` (`pet_id`, `pet_reg_date`, `pet_fn`, `pet_sn`, `pet_addr`, `pet_ac`, `pet_con`, `pet_em`, `pet_gen`, `pet_bd`, `pet_age`, `pet_bg`, `Pet_opdid`, `Insert_admunname`, `Update_sadmunname`, `update_date`) VALUES
(2, '2024-06-24 14:59:13', 'Omar', 'Estrada', 'Coche', '+58', '2147483647', 'oestrada@gmail.com', 'Male', '1993-06-08', 27, 'O+', 4, 'Celi', NULL, NULL),
(5, '2024-06-24 17:46:37', 'Monte', 'Cacho', 'Santa Monica', '+57', '412784562', 'mc@gmail.com', 'Female', '1983-07-06', 41, 'B-', 2, 'admin08', NULL, NULL),
(6, '2024-06-24 17:55:57', 'Josue', 'Echeverria', 'Coche', '+57', '1427845612', 'Josueecheverriaa8@gmail.com', 'Male', '1989-02-15', 35, 'B+', 2, 'admin08', NULL, NULL),
(7, '2024-06-24 17:58:35', 'Sancha', 'Lopez', 'San Martin', '+57', '4261245789', 'kr@gmail.com', 'Female', '1955-05-09', 69, 'AB+', 6, 'admin08', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pet_invo`
--

CREATE TABLE `pet_invo` (
  `invo_id` int(11) NOT NULL,
  `invo_Pet_name` varchar(500) NOT NULL,
  `invo_pet_id` int(100) NOT NULL DEFAULT 1,
  `invo_pet_age` int(3) NOT NULL,
  `invo_date` date NOT NULL,
  `medi_charge` int(10) NOT NULL,
  `doc_charge` int(10) NOT NULL,
  `hos_charge` int(10) NOT NULL DEFAULT 1500,
  `total_charge` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `pet_invo`
--

INSERT INTO `pet_invo` (`invo_id`, `invo_Pet_name`, `invo_pet_id`, `invo_pet_age`, `invo_date`, `medi_charge`, `doc_charge`, `hos_charge`, `total_charge`) VALUES
(1, 'Juan Galan', 1, 26, '2024-06-20', 500, 1500, 500, 2005),
(2, 'Julian Cardozo', 3, 34, '2024-06-20', 1250, 2540, 500, 3795);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `staff`
--

CREATE TABLE `staff` (
  `staffID` int(11) NOT NULL,
  `smfname` varchar(50) NOT NULL,
  `smlname` varchar(50) NOT NULL,
  `smtype` varchar(20) NOT NULL,
  `smbd` date NOT NULL,
  `telcode` varchar(3) NOT NULL DEFAULT '+57',
  `smtel` varchar(15) NOT NULL,
  `smemail` varchar(200) NOT NULL,
  `smgender` varchar(6) NOT NULL,
  `smwoti` varchar(10) NOT NULL,
  `smaddr` varchar(600) NOT NULL,
  `instetd_by` varchar(100) DEFAULT NULL,
  `insterted_date` timestamp NULL DEFAULT current_timestamp(),
  `update_by` varchar(100) DEFAULT NULL,
  `update_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `staff`
--

INSERT INTO `staff` (`staffID`, `smfname`, `smlname`, `smtype`, `smbd`, `telcode`, `smtel`, `smemail`, `smgender`, `smwoti`, `smaddr`, `instetd_by`, `insterted_date`, `update_by`, `update_date`) VALUES
(1, 'Dilan', 'Camargo', 'Doctor', '1997-06-10', '+58', '4127845632', 'dcamargo@gmail.com', 'Male', 'Full', 'El valle', 'Celenia', '2024-06-24 22:42:42', 'Celenia ', '2024-06-24 09:19:38'),
(2, 'Juan', 'Cabrera', 'Doctor', '1981-06-01', '+58', '4241563568', 'jcabrera@gmail.com', 'Male', 'Mañana', 'Petatr', 'Celi', '2024-06-24 20:21:47', NULL, '2024-06-24 20:21:47'),
(3, 'Juan', 'Curubita', 'Doctor', '1975-09-22', '+58', '4241547897', 'jcurubita@gmail.com', 'Male', 'Tarde', 'Coche', 'Celi', '2024-06-24 20:24:29', NULL, '2024-06-24 20:24:29'),
(4, 'Rosa', 'Almarales', 'Doctor', '1981-02-11', '+58', '4164578899', 'ralmarales@gmail.com', 'Female', 'Tarde', 'Las Mercedes', 'Celi', '2024-06-24 20:31:04', NULL, '2024-06-24 20:31:04'),
(5, 'Patricia', 'Perez', 'Enfermera', '1993-03-02', '+58', '4124578963', 'pperez@gmail.com', 'Female', 'Mañana', 'El Valle', 'Celi', '2024-06-24 20:47:04', NULL, '2024-06-24 20:47:04'),
(6, 'Karina', 'Corrales', 'Doctor', '1996-06-11', '+58', '4124152789', 'kcorrales@gmail.com', 'Female', 'Full', 'Petare', 'Celi', '2024-06-24 21:05:06', NULL, '2024-06-24 21:05:06'),
(7, 'Felipe', 'Clavel', 'Other', '1981-11-25', '+58', '4127892563', 'fclavel@gmail.com', 'Male', 'Evening', 'El Junquito', 'Celi', '2024-06-12 00:07:44', NULL, '2024-06-25 00:07:44');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sup_admin`
--

CREATE TABLE `sup_admin` (
  `sadid` int(11) NOT NULL,
  `sadiun` varchar(20) NOT NULL,
  `sadipw` varchar(500) NOT NULL,
  `sadem` varchar(50) NOT NULL,
  `saname` varchar(100) DEFAULT NULL,
  `cret_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `sup_admin`
--

INSERT INTO `sup_admin` (`sadid`, `sadiun`, `sadipw`, `sadem`, `saname`, `cret_date`) VALUES
(1, 'admin08', '4b67deeb9aba04a5b54632ad19934f26', 'msevillab@gmail.com', 'Celenia Rondinel', '2024-10-06 23:49:20');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admit_invo_db`
--
ALTER TABLE `admit_invo_db`
  ADD PRIMARY KEY (`Invo_no`),
  ADD KEY `pet_no` (`pet_no`);

--
-- Indices de la tabla `admit_pet`
--
ALTER TABLE `admit_pet`
  ADD PRIMARY KEY (`admit_petid`),
  ADD KEY `pet_id` (`pet_id`);

--
-- Indices de la tabla `hospi_room`
--
ALTER TABLE `hospi_room`
  ADD PRIMARY KEY (`room_id`),
  ADD KEY `room_drid` (`room_drid`),
  ADD KEY `eroom_id` (`eroom_drid`),
  ADD KEY `room_petID` (`room_petID`);

--
-- Indices de la tabla `lvl2_admin`
--
ALTER TABLE `lvl2_admin`
  ADD PRIMARY KEY (`lvtwid`);

--
-- Indices de la tabla `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`pet_id`),
  ADD KEY `Pet_opdid` (`Pet_opdid`);

--
-- Indices de la tabla `pet_invo`
--
ALTER TABLE `pet_invo`
  ADD PRIMARY KEY (`invo_id`),
  ADD KEY `invo_pet_id` (`invo_pet_id`);

--
-- Indices de la tabla `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staffID`);

--
-- Indices de la tabla `sup_admin`
--
ALTER TABLE `sup_admin`
  ADD PRIMARY KEY (`sadid`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admit_invo_db`
--
ALTER TABLE `admit_invo_db`
  MODIFY `Invo_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `admit_pet`
--
ALTER TABLE `admit_pet`
  MODIFY `admit_petid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `hospi_room`
--
ALTER TABLE `hospi_room`
  MODIFY `room_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `lvl2_admin`
--
ALTER TABLE `lvl2_admin`
  MODIFY `lvtwid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `patient`
--
ALTER TABLE `patient`
  MODIFY `pet_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `pet_invo`
--
ALTER TABLE `pet_invo`
  MODIFY `invo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `staff`
--
ALTER TABLE `staff`
  MODIFY `staffID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `sup_admin`
--
ALTER TABLE `sup_admin`
  MODIFY `sadid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
