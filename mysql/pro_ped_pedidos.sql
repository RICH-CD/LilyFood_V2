delimiter $$
DROP PROCEDURE IF EXISTS `Pro_Ped_Pedidos`;
CREATE DEFINER=`root`@`%` PROCEDURE `Pro_Ped_Pedidos`(
	IN `Opcion` INT(2) UNSIGNED, 
    _Pedido int(14), _Platillo int(14), _Guiso int(14), _Lugar int(5), _Plato int(5),
    _Cantidad int(5), Terminado tinyint(1), _extra int(14))
BEGIN
IF Opcion = 0 THEN
BEGIN
	select * from cat_ped_pedido;
END;
ELSEIF Opcion = 1 THEN
begin
		insert into cat_ped_pedido(NoPedido,PlatilloID,GuisoID,LugarID,NoPlato,Cantidad,Terminado) 
    value (_Pedido,_Platillo,_Guiso,_Lugar,_Plato,_Cantidad,0);
END;
ELSEIF Opcion = 2 THEN
begin
    update cat_ped_pedido p set p.Terminado = 1 where p.NoPedido = _Pedido;
END;
END IF;
END
$$