-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jan 24, 2019 at 08:59 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `SMcomunicacion`
--
CREATE DATABASE IF NOT EXISTS `SMcomunicacion` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `SMcomunicacion`;

-- --------------------------------------------------------

--
-- Table structure for table `clientes`
--

CREATE TABLE `clientes` (
  `id_cliente` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) NOT NULL,
  `tel` varchar(15) NOT NULL,
  `localidad` varchar(50) NOT NULL,
  `dir_ip` varchar(20) NOT NULL,
  `fecha-registro` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (id_cliente)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `clientes` ADD `vencido` BOOLEAN NULL AFTER `fecha-registro`;

-- --------------------------------------------------------

--
-- Table structure for table `pagos`
--

CREATE TABLE `pagos` (
  `id_pago` int(11) NOT NULL AUTO_INCREMENT,
  `cliente_id` int(11) NOT NULL,
  `cliente_nombre` int(11) NOT NULL,
  `autorizacion` varchar(20) NOT NULL,
  `monto` varchar(20) NOT NULL,
  `fecha` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  `meses` varchar(50) NOT NULL,
  PRIMARY KEY (id_pago)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(4) NOT NULL,
  `user` varchar(20) NOT NULL,
  `pass` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`),
  ADD UNIQUE KEY `dir_ip` (`dir_ip`),
  ADD UNIQUE KEY `id_cliente_2` (`id_cliente`),
  ADD KEY `id_cliente` (`id_cliente`);

--
-- Indexes for table `pagos`
--
ALTER TABLE `pagos`
  ADD PRIMARY KEY (`id_pago`),
  ADD UNIQUE KEY `id_pago` (`id_pago`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `id_user` (`id_user`);
