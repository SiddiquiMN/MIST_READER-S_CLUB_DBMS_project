
CREATE or replace TRIGGER check_id
	BEFORE INSERT
	ON Student
	FOR EACH ROW
BEGIN
	IF :new.Std_ID NOT LIKE '20_______' THEN
		RAISE_APPLICATION_ERROR (-20008, 'Invalid ID. Please try again.');
	END IF;
END;

CREATE or replace TRIGGER check_phone
	BEFORE INSERT
	ON Student
	FOR EACH ROW
BEGIN
	IF :new.Std_Phone NOT LIKE '01_________' THEN
		RAISE_APPLICATION_ERROR (-20009, 'Invalid Phone. Please try again.');
	END IF;
END;

CREATE SEQUENCE Expense_Sequence
START WITH 2022000
INCREMENT BY 1

NOCYCLE;


/* for creating fund SEQUENCE*/

CREATE SEQUENCE Fund_Sequence
START WITH 1000
INCREMENT BY 1

NOCYCLE;


