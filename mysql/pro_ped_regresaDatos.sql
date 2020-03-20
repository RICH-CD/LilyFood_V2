CREATE DEFINER=`root`@`%` PROCEDURE `Pro_Ped_RegresaDatos`(
	IN `Opcion` INT(2) UNSIGNED, _guiso varchar(50), _id int(10), _ini2 int(10), _inv3 varchar(30))
BEGIN
IF Opcion = 0 THEN
BEGIN
	select * from cat_ped_tipoguiso;
END;
END IF;
END