-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2019 at 10:53 PM
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
-- Table structure for table `estadistica`
--

CREATE TABLE `estadistica` (
  `id_estadistica` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_ingreso` int(11) NOT NULL,
  `id_gasto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `gastos`
--

CREATE TABLE `gastos` (
  `id_gasto` int(11) NOT NULL,
  `categoria_gasto` varchar(200) NOT NULL,
  `valor_gasto` double NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gastos`
--

INSERT INTO `gastos` (`id_gasto`, `categoria_gasto`, `valor_gasto`, `id_usuario`) VALUES
(13, 'Banco', 274383, 37),
(14, 'Mercado', 294724, 37),
(15, 'Plan Celular', 2729527, 38),
(16, 'Tarjeta Credito', 4825295, 38),
(17, 'Medico', 287242, 38),
(18, 'Factura ETB', 50000, 37),
(19, 'Factura Agua', 75000, 37);

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
(1, 10, '0000-00-00', 25),
(3, 30000, '2019-11-16', 25);

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
(25, 'DIEGO', 'FABIAN', 'diego@gmail.com', '$2y$10$QnjC4iS5LbghIP3ygSxfee0OFfyFZoPiQtp8Z6WIhNwebAis/BKtu'),
(27, 'ANDRES', 'PEREZ', 'andres', '$2y$10$79/5MaRzA7vDM16TbVXOeuPBsKVPFg9agI96oUn3liz5DPBLBSt2G'),
(28, 'FELIPE', 'PEREZ', 'felipe@mail.com', '$2y$10$xRbgMAPDa0mGqX.fuK0vROKn9IDAgj6FEz8qNYtz7v8TTmmKe3JUy'),
(29, 'Andres', 'Perez', 'andresfirigua@gmail.com', '$2y$10$jpKkZUbyRxvleWCcLG71ceTT3RuL7dSjM4hWQemyTA4F8gD5RnWKW'),
(30, 'Felipe', 'Firigua', 'felipefirigua@gmail.com', '$2y$10$c88bRRx8eL8W9q9Lqk.qleAGFMTXMOY.YxcNKXyUudAmn/mE1Lyh.'),
(31, 'norbert', 'forero', 'nsforero@sanmateo.edu.co', '$2y$10$uJJdawaXLqw3zyVBMESyTOBjAMef2pNFEDGGGI/qk7nOsdt.GEgQS'),
(32, 'norbert', 'forero', '@', '$2y$10$LPdHHPEUPQMPnl7WDwyPcukxIkvOpD55JunCRxp7r7lunKmCpbaM6'),
(33, 'h', 's', 'h@s', '$2y$10$/fWODbRq4iZju2ViVahyZOPSqQ1v1hn7by58Cz1MF0VPL6sLBbHrq'),
(34, 'Andrés Felipe ', 'Perez Firigua', 'andres.perez@gmail.com', '$2y$10$MyIJjugyVZE2dDzW5tVJaeVU4Amlw6L1flP/Cbbpze196SyoqnbWe'),
(35, 'Diego', 'Rayo', 'diego.rayo@gmail.com', '$2y$10$lfTiJvnh/d2HKUN6sRW7PuZcGtdHPyHlEFi/BrJYU0xOD0VOHIunW'),
(36, 'Andres', 'Perez', 'prueba1@gmail.com', '$2y$10$.mp78YvTfzdJC5wsFLRG.erzNxXqGBk8fqPaq6hLaaZbsTcc9XXu6'),
(37, 'Jose ', 'Rodriguez', 'jose@gmail.com', '$2y$10$0Yo7pwbYaInvj/.YkZysVOn2yYnViDakQMQxTkhtVl9pdj6.k0uqC'),
(38, 'Andres', 'Felipe', 'andres.firigua@gmail.com', '$2y$10$fUFlmOE0dwQVmW8PJYA2EuECL0yOj2QCSCIgJl2dF3/k.DFfbMnZy'),
(39, '', '', '', '$2y$10$5WSWD3WvkPCrMUJN2GBVUezQbJkE.UFUB1hq/VP9CN5LAvrgkO4Dm');

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
-- Indexes for table `estadistica`
--
ALTER TABLE `estadistica`
  ADD PRIMARY KEY (`id_estadistica`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_ingreso` (`id_ingreso`),
  ADD KEY `id_gasto` (`id_gasto`);

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
-- AUTO_INCREMENT for table `estadistica`
--
ALTER TABLE `estadistica`
  MODIFY `id_estadistica` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gastos`
--
ALTER TABLE `gastos`
  MODIFY `id_gasto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `ingresos`
--
ALTER TABLE `ingresos`
  MODIFY `id_ingreso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

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
-- Constraints for table `estadistica`
--
ALTER TABLE `estadistica`
  ADD CONSTRAINT `estadistica_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `users` (`id_usuario`) ON UPDATE CASCADE,
  ADD CONSTRAINT `estadistica_ibfk_2` FOREIGN KEY (`id_ingreso`) REFERENCES `ingresos` (`id_ingreso`) ON UPDATE CASCADE,
  ADD CONSTRAINT `estadistica_ibfk_3` FOREIGN KEY (`id_gasto`) REFERENCES `gastos` (`id_gasto`) ON UPDATE CASCADE;

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
