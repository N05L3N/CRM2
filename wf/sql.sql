CREATE TABLE `cliente_basico` (
  `id` int(100) NOT NULL auto_increment,
  `nombre` varchar(100) NOT NULL,
  `contacto2` varchar(100) NOT NULL,
  `contacto3` varchar(100) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `ciudad` varchar(100) NOT NULL,
  `pais` varchar(100) NOT NULL,
  `estado` varchar(100) NOT NULL,
  `lada` varchar(100) NOT NULL,
  `telefono` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `medio` varchar(100) NOT NULL,
  `giro` varchar(100) NOT NULL,
  `comentarios` varchar(500) NOT NULL,
  `fecha` varchar(100) NOT NULL,
  `hora` varchar(100) NOT NULL,
  `formulario` varchar(100) NOT NULL,
  `equipodeinteres` varchar(100) NOT NULL,
  `comeqenatp` varchar(100) NOT NULL,
  `eqclosqcuenta` varchar(100) NOT NULL,
  `antacteq` varchar(100) NOT NULL,
  `escliente` varchar(100) NOT NULL,
  `numerodecliente` varchar(100) NOT NULL,
  `motivodeconsulta` varchar(100) NOT NULL,
  `empresa` varchar(100) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=UTF8;