<?php
$conn=oci_connect("DBMS_PROJECT","1234","localhost/XE");
if (!$conn) {
	$e = oci_error();
	trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}



$query = oci_parse($conn,"DECLARE

CURSOR fund_cursor
IS
SELECT amount FROM fund;

CURSOR ex_cursor
IS
SELECT entry_amount FROM expenditure;



fund_val fund_cursor%ROWTYPE; 
expense_val ex_cursor%ROWTYPE; 


total_fund number :=0;
total_expense number:=0;
current number:=0;

BEGIN
OPEN fund_cursor;
OPEN ex_cursor;


Loop
FETCH fund_cursor INTO fund_val;


total_fund := total_fund+fund_val.amount;

exit when fund_cursor%NOTFOUND;

end Loop;

total_fund := total_fund-fund_val.amount;


CLOSE fund_cursor;

Loop
FETCH ex_cursor INTO expense_val;


total_expense := total_expense+expense_val.entry_amount;

exit when ex_cursor%NOTFOUND;

end Loop;
total_expense := total_expense-expense_val.entry_amount;
CLOSE ex_cursor;
current := total_fund-total_expense;
DBMS_OUTPUT.PUT_LINE('total current'||current);


END;");

	oci_execute($query);
    $dum =oci_fetch($query);

	echo "$dum";





?>