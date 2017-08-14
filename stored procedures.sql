DELIMITER $$
CREATE PROCEDURE my_procedure_Local_Variables()
BEGIN   /* declare local variables */   
DECLARE a INT DEFAULT 10;   
DECLARE b, c INT;    /* using the local variables */   
SET a = a + 100;   
SET b = 2;   
SET c = a + b;    
BEGIN      /* local variable in nested block */      
DECLARE c INT;             
SET c = 5;       
/* local variable c takes precedence over the one of the          
same name declared in the enclosing block. */       
SELECT a, b, c;   
END;    
SELECT a, b, c;
END$$



CREATE PROCEDURE odd(IN n INT)
BEGIN
SET @sum = 0;
SET @x = 1;
WHILE @x<n 
DO
   IF mod(@x, 2) <> 0 THEN   
SET @sum = @sum + @x;   
END IF;   
SET @x = @x + 1;   
END WHILE;
END$$



DELIMITER $$
CREATE PROCEDURE my_proc_WHILE(IN n INT)
BEGIN
SET @sum = 0;
SET @x = 1;
WHILE @x<n 
DO
   IF mod(@x, 2) <> 0 THEN   
SET @sum = @sum + @x;   
END IF;   
SET @x = @x + 1;   
END WHILE;
END$$

CREATE PROCEDURE c1(INOUT return_val INT)
BEGIN
DECLARE a,b INT; 
DECLARE cur_1 CURSOR FOR 
SELECT advFROM htl;
DECLARE CONTINUE HANDLER FOR NOT FOUNDSET b = 1;
OPEN cur_1;REPEATFETCH cur_1 INTO a;
UNTIL b = 1END REPEAT;
CLOSE cur_1;
SET return_val = a;
END;
$$



CREATE PROCEDURE cu(INOUT return_val INT)
BEGIN
DECLARE a,b INT; 
DECLARE cur_1 CURSOR FOR 
SELECT adv FROM htl;
DECLARE CONTINUE HANDLER FOR NOT FOUNDSET b = 1;
OPEN cur_1;
REPEATFETCH cur_1 INTO a;
UNTIL b = 1;
END REPEAT;
CLOSE cur_1;
SET return_val = a;
END;
$$



CREATE PROCEDURE sc(INOUT count INT(4),IN inc INT(4))
BEGIN
 SET count = count + inc;
END$$