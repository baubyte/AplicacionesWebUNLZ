CREATE TABLE `usuario` (
  `usuario` varchar(255) NOT NULL COMMENT 'Clave Primaria',
  `clave` varchar(255) NOT NULL COMMENT 'Contraseña del Usuario',
  `rol` varchar(255) NOT NULL COMMENT 'Nivel de Permiso del Usuario',
  PRIMARY KEY (`usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8