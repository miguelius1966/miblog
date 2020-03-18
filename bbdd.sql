--
-- Table structure for table `autor`
--

DROP TABLE IF EXISTS `autor`;

CREATE TABLE `autor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(128) NOT NULL,
  `usuario` varchar(64) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Table structure for table `categoria`
--

DROP TABLE IF EXISTS `categoria`;

CREATE TABLE `categoria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `texto` varchar(64) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

--
-- Table structure for table `entrada`
--

DROP TABLE IF EXISTS `entrada`;

CREATE TABLE `entrada` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(128) NOT NULL,
  `contenido` text NOT NULL,
  `id_autor` int(11) NOT NULL,
  `fecha` datetime NOT NULL DEFAULT current_timestamp(),
  `enlace` varchar(256) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_autor` (`id_autor`),
  CONSTRAINT `entrada_ibfk_1` FOREIGN KEY (`id_autor`) REFERENCES `autor` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Table structure for table `entrada_categoria`
--

DROP TABLE IF EXISTS `entrada_categoria`;

CREATE TABLE `entrada_categoria` (
  `id_entrada` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id_entrada`,`id_categoria`),
  KEY `id_categoria` (`id_categoria`),
  CONSTRAINT `entrada_categoria_ibfk_1` FOREIGN KEY (`id_entrada`) REFERENCES `entrada` (`id`),
  CONSTRAINT `entrada_categoria_ibfk_2` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Table structure for table `entrada_etiqueta`
--

DROP TABLE IF EXISTS `entrada_etiqueta`;

CREATE TABLE `entrada_etiqueta` (
  `id_entrada` int(11) NOT NULL,
  `id_etiqueta` int(11) NOT NULL,
  PRIMARY KEY (`id_entrada`,`id_etiqueta`),
  KEY `id_etiqueta` (`id_etiqueta`),
  CONSTRAINT `entrada_etiqueta_ibfk_1` FOREIGN KEY (`id_entrada`) REFERENCES `entrada` (`id`),
  CONSTRAINT `entrada_etiqueta_ibfk_2` FOREIGN KEY (`id_etiqueta`) REFERENCES `etiqueta` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Table structure for table `etiqueta`
--

DROP TABLE IF EXISTS `etiqueta`;

CREATE TABLE `etiqueta` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `texto` varchar(64) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;
