CREATE TABLE `Cat_Ped_Relacional` (
  `RelacionalID` int(14) NOT NULL AUTO_INCREMENT,
  `PlatilloID` int(14) NOT NULL,
  `TipoGuisoID` int(14) NOT NULL,
  `Costo` decimal(4,2) NOT NULL,
  PRIMARY KEY (`RelacionalID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1