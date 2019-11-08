-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2019 at 05:46 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `swapp_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `categoria_gastos`
--

CREATE TABLE `categoria_gastos` (
  `id_categoria_gasto` int(11) NOT NULL,
  `categoria_gasto` varchar(100) NOT NULL,
  `id_gasto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `categoria_ingreso`
--

CREATE TABLE `categoria_ingreso` (
  `id_categoria_ingreso` int(11) NOT NULL,
  `categoria_ingreso` varchar(100) NOT NULL,
  `id_ingreso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `gastos`
--

CREATE TABLE `gastos` (
  `id_gasto` int(11) NOT NULL,
  `valor_gasto` double NOT NULL,
  `fecha_gasto` date NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ingresos`
--

CREATE TABLE `ingresos` (
  `id_ingreso` int(11) NOT NULL,
  `valor_ingreso` double NOT NULL,
  `fecha_ingreso` date NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ingresos`
--

INSERT INTO `ingresos` (`id_ingreso`, `valor_ingreso`, `fecha_ingreso`, `id_usuario`) VALUES
(1, 10, '0000-00-00', 25);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_usuario` int(11) NOT NULL,
  `nombres` varchar(200) NOT NULL,
  `apellidos` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_usuario`, `nombres`, `apellidos`, `email`, `password`) VALUES
(25, 'DIEGO', 'FABIAN', 'diego@gmail.com', '$2y$10$QnjC4iS5LbghIP3ygSxfee0OFfyFZoPiQtp8Z6WIhNwebAis/BKtu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categoria_gastos`
--
ALTER TABLE `categoria_gastos`
  ADD PRIMARY KEY (`id_categoria_gasto`),
  ADD KEY `id_gasto` (`id_gasto`);

--
-- Indexes for table `categoria_ingreso`
--
ALTER TABLE `categoria_ingreso`
  ADD PRIMARY KEY (`id_categoria_ingreso`),
  ADD KEY `id_ingreso` (`id_ingreso`);

--
-- Indexes for table `gastos`
--
ALTER TABLE `gastos`
  ADD PRIMARY KEY (`id_gasto`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indexes for table `ingresos`
--
ALTER TABLE `ingresos`
  ADD PRIMARY KEY (`id_ingreso`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categoria_gastos`
--
ALTER TABLE `categoria_gastos`
  MODIFY `id_categoria_gasto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `categoria_ingreso`
--
ALTER TABLE `categoria_ingreso`
  MODIFY `id_categoria_ingreso` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gastos`
--
ALTER TABLE `gastos`
  MODIFY `id_gasto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ingresos`
--
ALTER TABLE `ingresos`
  MODIFY `id_ingreso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `categoria_gastos`
--
ALTER TABLE `categoria_gastos`
  ADD CONSTRAINT `categoria_gastos_ibfk_1` FOREIGN KEY (`id_gasto`) REFERENCES `gastos` (`id_gasto`) ON UPDATE CASCADE;

--
-- Constraints for table `categoria_ingreso`
--
ALTER TABLE `categoria_ingreso`
  ADD CONSTRAINT `categoria_ingreso_ibfk_1` FOREIGN KEY (`id_ingreso`) REFERENCES `ingresos` (`id_ingreso`) ON UPDATE CASCADE;

--
-- Constraints for table `gastos`
--
ALTER TABLE `gastos`
  ADD CONSTRAINT `gastos_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `users` (`id_usuario`) ON UPDATE CASCADE;

--
-- Constraints for table `ingresos`
--
ALTER TABLE `ingresos`
  ADD CONSTRAINT `ingresos_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `users` (`id_usuario`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
