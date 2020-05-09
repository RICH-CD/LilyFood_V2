CREATE TABLE `Cat_Ped_Pedido` (
  `PedidoID` int(14) NOT NULL AUTO_INCREMENT,
  `PlatilloID` int(14) NOT NULL,
  `GuisoID` int(14) NOT NULL,
  `NoPlato` int(14) NOT NULL,
  `Cantidad` int(14) NOT NULL
  PRIMARY KEY (`PedidoID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1