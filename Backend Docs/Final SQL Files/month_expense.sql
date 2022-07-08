declare

January number :=0;
February number :=0;
March number :=0;
April number :=0;
May number :=0;
June number :=0;
July number :=0;
August number :=0;
September number :=0;
October number :=0;
November number :=0;
December number :=0;
Grand_Total number :=0;
Total_Fund number := 0;
Remaining_Fund number :=0;

begin

select sum(entry_amount) into January from expenditure where entry_month='January';
select sum(entry_amount) into February from expenditure where entry_month='February';
select sum(entry_amount) into March from expenditure where entry_month='March';
select sum(entry_amount) into April from expenditure where entry_month='April';
select sum(entry_amount) into May from expenditure where entry_month='May';
select sum(entry_amount) into June from expenditure where entry_month='June';
select sum(entry_amount) into July from expenditure where entry_month='July';
select sum(entry_amount) into August from expenditure where entry_month='August';
select sum(entry_amount) into September from expenditure where entry_month='September';
select sum(entry_amount) into October from expenditure where entry_month='October';
select sum(entry_amount) into November from expenditure where entry_month='November';
select sum(entry_amount) into December from expenditure where entry_month='December';
select sum(Amount) into Total_Fund from Fund;

Grand_Total := January + February + March+ April +May+ June +July + August + September + October + November + December ;
Remaining_Fund := Total_Fund - Remaining_Fund;

dbms_output.put_line(Grand_Total);



end;