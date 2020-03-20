CREATE DEFINER=`root`@`%` PROCEDURE `Pro_Ped_Platillos`(
	IN `Opcion` INT(2) UNSIGNED, _platillo varchar(50), _id int(10))
BEGIN
IF Opcion = 0 THEN
BEGIN
	select * from cat_ped_platillo;
END;
ELSEIF Opcion = 1 then
begin
	insert into cat_ped_platillo(Platillo) values(_platillo);
end;
elseif Opcion = 2 then
begin
	update cat_ped_platillo set Platillo = _platillo where PlatilloID = _id;
end;
elseif Opcion = 3 then
begin
	delete from cat_ped_platillo where PlatilloID = _id;
end;
END IF;
END