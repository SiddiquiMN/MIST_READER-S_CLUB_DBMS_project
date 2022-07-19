CREATE VIEW Sum_Expense AS
SELECT sum(entry_amount) as "Sum Expense"
FROM expenditure

CREATE VIEW Sum_Fund AS
SELECT sum(amount) as "Sum Fund"
FROM fund