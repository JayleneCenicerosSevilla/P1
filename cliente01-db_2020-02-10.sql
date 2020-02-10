-- phpMyAdmin SQL Dump
-- version 3.3.0
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1:3306

-- Generation Time: Feb 10, 2020 at 09:27 AM
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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `administradores`
--

INSERT INTO `administradores` VALUES(1, 'jaylene', 'ceniceros', 'jaylene@hotmail.com', 'qqqqqqqqqqqqq', 1, '', '', 0, 1);
INSERT INTO `administradores` VALUES(2, 'libro', '', '', '', 1, '', '', 0, 1);
INSERT INTO `administradores` VALUES(3, 'jaylene', 'c', '@aaa', 'bbbbbbbbbbbbbb', 1, '', '', 0, 1);
INSERT INTO `administradores` VALUES(4, 'Ana', 'Ceniceros', 'nana@hotmail.com', '1234567890', 1, '', '', 0, 1);
INSERT INTO `administradores` VALUES(5, 'q', 'w', 'e@', '12345678', 1, '', '179565d61e27912083c14699b67a8320.jpg', 0, 1);
INSERT INTO `administradores` VALUES(6, 'a', 's', '@aaa', 'aaaaaaaaaaa', 1, 'wp2978550.jpg', 'c1a5f352002ded2828855757342a5102.jpg', 0, 1);
INSERT INTO `administradores` VALUES(7, 'Jaylene', 'Sevilla ', 'jaylene@hotmail.com', '1234567890', 1, 'FB_IMG_1537280250062.jpg', '179565d61e27912083c14699b67a8320.jpg', 1, 0);
INSERT INTO `administradores` VALUES(8, 'Memo', 'Alcaraz', 'pichonzuelo@hotmail.com', '1234567890', 1, 'QIw5mLkh.jpg', '866565ac074c69d1ac6d191a7dc48d35.jpg', 1, 0);
INSERT INTO `administradores` VALUES(9, 'Marisela', 'Sevilla ', 'marisela@hotmail.com', '1234567890', 1, 'doctor-who-logo.jpg', 'acf8ea35f3faf0a4c0c2dc749f48e7f8.jpg', 1, 0);
INSERT INTO `administradores` VALUES(10, 'Marisela', 'Sevilla ', 'marisela@hotmail.com', '1234567890', 1, 'doctor-who-logo.jpg', 'acf8ea35f3faf0a4c0c2dc749f48e7f8.jpg', 0, 1);
INSERT INTO `administradores` VALUES(11, 'qqq', 'qqq', 'qqq@hotmail.com', '1234567890', 1, 'doctor-who-logo.jpg', 'acf8ea35f3faf0a4c0c2dc749f48e7f8.jpg', 0, 1);
INSERT INTO `administradores` VALUES(12, 'mmm', 'mmm', 'mmm@', '1234567890', 1, 'doctor-who-logo.jpg', 'acf8ea35f3faf0a4c0c2dc749f48e7f8.jpg', 1, 0);
INSERT INTO `administradores` VALUES(13, 'mmm', 'mmm', 'mmm@', '1234567890', 1, 'doctor-who-logo.jpg', 'acf8ea35f3faf0a4c0c2dc749f48e7f8.jpg', 0, 1);
INSERT INTO `administradores` VALUES(14, 'a', 'a', 'a@', '12345678', 1, 'cementerio copia.jpg', 'a26251b56b82eb709a0fb6f446cc4a20.jpg', 1, 0);
INSERT INTO `administradores` VALUES(15, 'fffffffff', 'ddd', 'aa@', '1234567890', 1, 'FB_IMG_1537280250062.jpg', '179565d61e27912083c14699b67a8320.jpg', 0, 1);
INSERT INTO `administradores` VALUES(16, 'ppp', 'aaa', 'ppp@', '1234567890', 1, 'doctor-who-logo.jpg', 'acf8ea35f3faf0a4c0c2dc749f48e7f8.jpg', 1, 0);
INSERT INTO `administradores` VALUES(17, 'q', 'qqqq', '@q', '1234567890', 1, '45085107_529007590905543_2698534351578071040_n.jpg', '7c275eb319ac85e4663d516ac25d09bb.jpg', 1, 0);

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `clientes`
--

INSERT INTO `clientes` VALUES(1, 'raul', 'gomez', 'raul@', '1234567890', 1, 0);
INSERT INTO `clientes` VALUES(2, 'jaime', 'lopez', 'jaime@', '1234567890', 0, 1);
INSERT INTO `clientes` VALUES(3, 'luz', 'padilla', 'luz@', '1234567890', 0, 1);
INSERT INTO `clientes` VALUES(4, 'ana', 'lopez', 'ana@', '1234567890', 0, 1);
INSERT INTO `clientes` VALUES(5, 'pichonzuelo', 'Alcaraz', 'pi@', '1234567890', 1, 0);
INSERT INTO `clientes` VALUES(7, 'David', 'Tenant', 'David@', '1234567890', 1, 0);
INSERT INTO `clientes` VALUES(8, 'Tomy', 'marquez', 'tom@', '1234567890', 1, 0);

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `pedi_productos`
--

INSERT INTO `pedi_productos` VALUES(1, 0, 4, 0);
INSERT INTO `pedi_productos` VALUES(2, 0, 0, 0);
INSERT INTO `pedi_productos` VALUES(3, 0, 8, 0);
INSERT INTO `pedi_productos` VALUES(4, 0, 0, 0);
INSERT INTO `pedi_productos` VALUES(5, 0, 0, 0);
INSERT INTO `pedi_productos` VALUES(6, 0, 0, 0);
INSERT INTO `pedi_productos` VALUES(7, 0, 0, 0);
INSERT INTO `pedi_productos` VALUES(8, 0, 0, 0);
INSERT INTO `pedi_productos` VALUES(10, 0, 0, 0);
INSERT INTO `pedi_productos` VALUES(11, 0, 0, 0);
INSERT INTO `pedi_productos` VALUES(12, 0, 0, 0);

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `productos`
--

INSERT INTO `productos` VALUES(1, 'libro', '123', 'libro 200 paginas', 300, 1, 'LosAdioses.jpg', 'a4c9458cdb525948be0c993db1b0cc5f.jpg', 0, 1);
INSERT INTO `productos` VALUES(2, 'libro', '123', 'libro 200 paginas', 250, 10, 'LosAdioses.jpg', 'a4c9458cdb525948be0c993db1b0cc5f.jpg', 0, 1);
INSERT INTO `productos` VALUES(3, 'libro', '123', 'libro 200 paginas', 209, 15, 'LosAdioses.jpg', 'a4c9458cdb525948be0c993db1b0cc5f.jpg', 0, 1);
INSERT INTO `productos` VALUES(4, 'libro', 'XDS', 'libro 200 paginas', 150, 20, 'LosAdioses.jpg', 'a4c9458cdb525948be0c993db1b0cc5f.jpg', 1, 0);
INSERT INTO `productos` VALUES(5, 'libro', '123s', 'libro 200 paginas', 280, 15, 'LosAdioses.jpg', 'a4c9458cdb525948be0c993db1b0cc5f.jpg', 0, 1);
INSERT INTO `productos` VALUES(6, 'los adioses', '123', 'pelicula', 80, 1, 'LosAdioses.jpg', 'a4c9458cdb525948be0c993db1b0cc5f.jpg', 1, 0);
INSERT INTO `productos` VALUES(7, 'la favorita', '123ab', 'pelicula', 200, 6, 'LaFavorita.jpg', '31daafe78f56fc3117f869de4a627c2f.jpg', 1, 0);
INSERT INTO `productos` VALUES(8, 'El padrino', '123c', 'pelicula', 200, 5, 'Elpadrino.jpg', '9850fdd7bda6610b1abb50c91e5bab2b.jpg', 1, 0);
INSERT INTO `productos` VALUES(9, 'get out', '123c', 'pelicula', 200, 15, 'D_jame_salir-290175782-large.jpg', '66591c91ff25b7f541b92fb2c5cd6ec2.jpg', 1, 0);
INSERT INTO `productos` VALUES(10, 'Parasito', '123e', 'pelicula', 300, 6, 'resizer.jpg', '6aa6510074741a9847fb92dfd10b4b2e.jpg', 1, 0);
INSERT INTO `productos` VALUES(11, 'Hasta el ultimo hombre', '123f', 'pelicula ', 150, 6, 'Hasta_el_ultimo_hombre_poster_oficial_jpg_85.7.jpg', '6dfee7a6475ed020a5a7f7e47e1933f4.7', 1, 0);
INSERT INTO `productos` VALUES(12, 'The irishman', '123g', 'pelicula', 220, 8, '3205974.jpg-c_215_290_x-f_jpg-q_x-xxyxx.jpg', 'd9155b305e125d37dcfbd6b7fed74a3c.jpg-c_215_290_x-f_jpg-q_x-xxyxx', 1, 0);
INSERT INTO `productos` VALUES(13, 'La historia interminable', '122', 'libro', 350, 10, '800_9789561527843.jpg', '3e20f74900f3f9daac3aa58707ba3772.jpg', 1, 0);
INSERT INTO `productos` VALUES(14, 'Momo', '189', 'libro', 330, 8, 'image_1165_1_287442.jpg', '0ffdbada4addb263f5edbc6fbcfe277e.jpg', 1, 0);
INSERT INTO `productos` VALUES(15, 'Cronicas marcianicas', '12o3', 'libro', 200, 11, 'portada_cronicas-marcianas_ray-bradbury_201906251540.jpg', 'fea549f4e723ebfd51485ef25f779083.jpg', 1, 0);
INSERT INTO `productos` VALUES(16, 'La la land', '9302s', 'pelicula', 150, 3, '91h2YMRCdnL._SX342_.jpg', '4bac5cdf7aa288c9a5b59b1aeebf15ca._SX342_', 1, 0);
INSERT INTO `productos` VALUES(17, 'Memorias de crimenes', '930h20', 'libro', 200, 8, '978607314103.jpg', '9c8556adea6253a5568d09f44f7cd707.jpg', 1, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
