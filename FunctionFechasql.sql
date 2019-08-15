DELIMITER $$
DROP FUNCTION IF EXISTS ValidarFecha$$
CREATE FUNCTION ValidarFecha(fechaVence date) RETURNS boolean DETERMINISTIC 
BEGIN 
	
	DECLARE respuestafecha boolean 	DEFAULT true;

	IF fechaVence < current_date() THEN
     		SET respuestafecha= false;
     	END IF;
						
	RETURN respuestafecha;
END 
$$
DELIMITER ;