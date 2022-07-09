<html>   
   <head>
      <title>Form Validation</title>      

       
   </head>
   
   <body>
    <form>
        <input id="text1" placeholder="Cellphone" type="number"/><br>
       
        <button onclick="validate()" type ="button"></button> Submit </button>
    </form>  
    <?php

    CREATE TRIGGER `person_validate_insert`
	BEFORE INSERT
	ON `person`
	FOR EACH ROW
BEGIN
	IF NEW.`email` NOT LIKE '%_@%_.__%' THEN
		SIGNAL SQLSTATE VALUE '45000'
			SET MESSAGE_TEXT = '[table:person] - `email` column is not valid';
	END IF;
END;

    ?>
   </body>
</html>