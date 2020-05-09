CREATE DEFINER=`root`@`%` PROCEDURE `Pro_Ped_RegresaDatos`(
	IN `Opcion` INT(2) UNSIGNED, _guiso varchar(50), _id int(10), _ini2 int(10), _inv3 varchar(30))
BEGIN
IF Opcion = 0 THEN
BEGIN
	select * from cat_ped_tipoguiso;
END;
ELSEIF Opcion = 1 THEN
begin
	select Platillo from cat_ped_platillo where PlatilloID = _id;
END;
elseif Opcion = 2 then
begin
	select max(NoPedido) NoPedido from cat_ped_pedido;
end;
END IF;
END