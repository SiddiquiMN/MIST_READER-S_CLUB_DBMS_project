
DECLARE

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
DBMS_OUTPUT.PUT_LINE('fund val '||fund_val.amount);

total_fund := total_fund+fund_val.amount;

exit when fund_cursor%NOTFOUND;

end Loop;

total_fund := total_fund-fund_val.amount;
DBMS_OUTPUT.PUT_LINE('total fund'||total_fund);

CLOSE fund_cursor;

Loop
FETCH ex_cursor INTO expense_val;
DBMS_OUTPUT.PUT_LINE('expense val '||expense_val.entry_amount);

total_expense := total_expense+expense_val.entry_amount;

exit when ex_cursor%NOTFOUND;

end Loop;
total_expense := total_expense-expense_val.entry_amount;
CLOSE ex_cursor;
DBMS_OUTPUT.PUT_LINE('total expense '||total_expense);


END;
