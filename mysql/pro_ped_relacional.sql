delimiter $$
DROP PROCEDURE IF EXISTS `Pro_Ped_Relacional`;
CREATE DEFINER=`root`@`%` PROCEDURE `Pro_Ped_Relacional`(
	IN `Opcion` INT(2) UNSIGNED, 
    _Platillo int(14), _TipoGuiso int(14), _Costo decimal(4,2), _extra int(14))
BEGIN
IF Opcion = 0 THEN
BEGIN
	select * from cat_ped_tipoguiso;
END;
ELSEIF Opcion = 1 THEN
begin
	IF NOT EXISTS (select Costo from cat_ped_relacional where PlatilloID = _Platillo and TipoGuisoID = _TipoGuiso) then
    begin
		insert into cat_ped_relacional(PlatilloID,TipoGuisoID,Costo) values(_Platillo,_TipoGuiso,_Costo);
    end;
    else
    begin
		update cat_ped_relacional r set r.Costo = _Costo where r.PlatilloID = _Platillo and r.TipoGuisoID = _TipoGuiso;
    end;
    end if;
END;
ELSEIF Opcion = 2 THEN
begin
  select pl.Platillo,tg.TipoGuisoID, tg.TopoGuiso, rel.Costo from cat_ped_relacional rel left join cat_ped_platillo pl on pl.PlatilloID = rel.PlatilloID left join cat_ped_tipoguiso tg on tg.TipoGuisoID = rel.TipoGuisoID where rel.PlatilloID = _Platillo;
end;
ELSEIF Opcion = 3 then
begin
  if exists (select rel.Costo from cat_ped_relacional rel where rel.PlatilloID = _Platillo and rel.TipoGuisoID = _TipoGuiso) then
  begin
    select rel.Costo from cat_ped_relacional rel where rel.PlatilloID = _Platillo and rel.TipoGuisoID = _TipoGuiso;
  end;
  else
  begin
    select nu.Numeros Costo from cat_adm_numeros nu where nu.NumerosID = 1;
  end;
  end if;
end;
END IF;
END
$$