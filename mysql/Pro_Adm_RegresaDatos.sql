delimiter $$
CREATE DEFINER=`root`@`%` PROCEDURE `Pro_Adm_RegresaDatos`(
	IN `Opcion` INT(2) UNSIGNED, _id int(10), _inv1 varchar(50), _ini2 int(10), _inv3 varchar(30))
BEGIN
IF Opcion = 0 THEN
BEGIN
	select * from cat_adm_menu;
END;
END IF;
END

$$