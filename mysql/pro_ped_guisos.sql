CREATE DEFINER=`root`@`%` PROCEDURE `Pro_Ped_Guisos`(
	IN `Opcion` INT(2) UNSIGNED, _guiso varchar(50), _id int(10))
BEGIN
IF Opcion = 0 THEN
BEGIN
	select * from cat_ped_guiso;
END;
ELSEIF Opcion = 1 then
begin
	insert into cat_ped_guiso(Guiso) values(_guiso);
end;
elseif Opcion = 2 then
begin
	update cat_ped_guiso set Guiso = _guiso where GuisoID = _id;
end;
elseif Opcion = 3 then
begin
	delete from cat_ped_guiso where GuisoID = _id;
end;
END IF;
END