-- phpMyAdmin SQL Dump
-- version 3.3.0
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1:3306

-- Generation Time: Jan 07, 2020 at 08:54 PM
-- Server version: 5.1.44
-- PHP Version: 5.2.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cliente01`
--

-- --------------------------------------------------------

--
-- Table structure for table `administradores`
--

CREATE TABLE `administradores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombres` varchar(128) NOT NULL,
  `apellidos` varchar(128) NOT NULL,
  `correo` varchar(128) NOT NULL,
  `pass` varchar(32) NOT NULL,
  `rol` int(1) NOT NULL,
  `archivo_n` varchar(255) NOT NULL,
  `archivo` varchar(128) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  `eliminado` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `administradores`
--

INSERT INTO `administradores` VALUES(1, 'jaylene', 'ceniceros', 'jaylene@hotmail.com', 'qqqqqqqqqqqqq', 1, '', '', 0, 1);
INSERT INTO `administradores` VALUES(2, 'libro', '', '', '', 1, '', '', 0, 1);
INSERT INTO `administradores` VALUES(3, 'jaylene', 'c', '@aaa', 'bbbbbbbbbbbbbb', 1, '', '', 0, 1);
INSERT INTO `administradores` VALUES(4, 'Ana', 'Ceniceros', 'nana@hotmail.com', '1234567890', 1, '', '', 1, 0);
INSERT INTO `administradores` VALUES(5, 'q', 'w', 'e@', '12345678', 1, '', '179565d61e27912083c14699b67a8320.jpg', 0, 1);
INSERT INTO `administradores` VALUES(6, 'a', 's', '@aaa', 'aaaaaaaaaaa', 1, 'wp2978550.jpg', 'c1a5f352002ded2828855757342a5102.jpg', 0, 1);
INSERT INTO `administradores` VALUES(7, 'jaylene', 'Ceniceros', 'jaylene@hotmail.com', '1234567890', 1, 'FB_IMG_1537280250062.jpg', '179565d61e27912083c14699b67a8320.jpg', 1, 0);
INSERT INTO `administradores` VALUES(8, 'Memo', 'Alcaraz', 'pichonzuelo@hotmail.com', '1234567890', 1, 'QIw5mLkh.jpg', '866565ac074c69d1ac6d191a7dc48d35.jpg', 1, 0);
INSERT INTO `administradores` VALUES(9, 'Marisela', 'Sevilla ', 'marisela@hotmail.com', '1234567890', 1, 'doctor-who-logo.jpg', 'acf8ea35f3faf0a4c0c2dc749f48e7f8.jpg', 1, 0);
INSERT INTO `administradores` VALUES(10, 'Marisela', 'Sevilla ', 'marisela@hotmail.com', '1234567890', 1, 'doctor-who-logo.jpg', 'acf8ea35f3faf0a4c0c2dc749f48e7f8.jpg', 0, 1);
INSERT INTO `administradores` VALUES(11, 'qqq', 'qqq', 'qqq@hotmail.com', '1234567890', 1, 'doctor-who-logo.jpg', 'acf8ea35f3faf0a4c0c2dc749f48e7f8.jpg', 1, 0);
INSERT INTO `administradores` VALUES(12, 'mmm', 'mmm', 'mmm@', '1234567890', 1, 'doctor-who-logo.jpg', 'acf8ea35f3faf0a4c0c2dc749f48e7f8.jpg', 1, 0);
INSERT INTO `administradores` VALUES(13, 'mmm', 'mmm', 'mmm@', '1234567890', 1, 'doctor-who-logo.jpg', 'acf8ea35f3faf0a4c0c2dc749f48e7f8.jpg', 0, 1);
INSERT INTO `administradores` VALUES(14, 'a', 'a', 'a@', '12345678', 1, 'cementerio copia.jpg', 'a26251b56b82eb709a0fb6f446cc4a20.jpg', 1, 0);
INSERT INTO `administradores` VALUES(15, 'fffffffff', 'ddd', 'aa@', '1234567890', 1, 'FB_IMG_1537280250062.jpg', '179565d61e27912083c14699b67a8320.jpg', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(128) NOT NULL,
  `apellidos` varchar(128) NOT NULL,
  `correo` varchar(128) NOT NULL,
  `pass` varchar(32) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  `eliminado` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `clientes`
--

INSERT INTO `clientes` VALUES(1, 'raul', 'gomez', 'raul@', '1234567890', 1, 0);
INSERT INTO `clientes` VALUES(2, 'jaime', 'lopez', 'jaime@', '1234567890', 0, 1);
INSERT INTO `clientes` VALUES(3, 'luz', 'padilla', 'luz@', '1234567890', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `pedidos`
--

CREATE TABLE `pedidos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` int(11) NOT NULL,
  `usuario` varchar(32) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `pedidos`
--


-- --------------------------------------------------------

--
-- Table structure for table `pedi_productos`
--

CREATE TABLE `pedi_productos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_pedido` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `pedi_productos`
--


-- --------------------------------------------------------

--
-- Table structure for table `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(128) NOT NULL,
  `codigo` varchar(32) NOT NULL,
  `descripcion` text NOT NULL,
  `costo` double NOT NULL,
  `stock` int(11) NOT NULL,
  `archivo_n` varchar(255) NOT NULL,
  `archivo` varchar(128) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  `eliminado` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `productos`
--

INSERT INTO `productos` VALUES(1, 'libro', '123', 'libro 200 paginas', 300, 1, 'LosAdioses.jpg', 'a4c9458cdb525948be0c993db1b0cc5f.jpg', 0, 1);
INSERT INTO `productos` VALUES(2, 'libro', '123', 'libro 200 paginas', 250, 10, 'LosAdioses.jpg', 'a4c9458cdb525948be0c993db1b0cc5f.jpg', 1, 0);
INSERT INTO `productos` VALUES(3, 'libro', '123', 'libro 200 paginas', 209, 1, 'LosAdioses.jpg', 'a4c9458cdb525948be0c993db1b0cc5f.jpg', 1, 0);
INSERT INTO `productos` VALUES(4, 'libro', '123a', 'libro 200 paginas', 130, 20, 'LosAdioses.jpg', 'a4c9458cdb525948be0c993db1b0cc5f.jpg', 1, 0);
INSERT INTO `productos` VALUES(5, 'libro', '123s', 'libro 200 paginas', 280, 15, 'LosAdioses.jpg', 'a4c9458cdb525948be0c993db1b0cc5f.jpg', 1, 0);
INSERT INTO `productos` VALUES(6, 'los adioses', '123', 'pelicula', 80, 1, 'LosAdioses.jpg', 'a4c9458cdb525948be0c993db1b0cc5f.jpg', 1, 0);
INSERT INTO `productos` VALUES(7, 'la favorita', '123ab', 'pelicula', 200, 6, 'LaFavorita.jpg', '31daafe78f56fc3117f869de4a627c2f.jpg', 1, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
