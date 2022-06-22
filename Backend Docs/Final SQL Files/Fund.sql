insert into Fund(Fund_id, Source, Amount,  Transaction_date)
values('1', 'Gorib1', 1, to_date('08-06-2022', 'dd-mm-yyyy'));

insert into Fund(Fund_id, Source, Amount,  Transaction_date)
values('2', 'Gorib2', 2, to_date('08-06-2022', 'dd-mm-yyyy'));

insert into Fund(Fund_id, Source, Amount,  Transaction_date)
values('3', 'Gorib3', 5, to_date('08-06-2022', 'dd-mm-yyyy'));

insert into Fund(Fund_id, Source, Amount,  Transaction_date)
values('4', 'Gorib4', 10, to_date('08-06-2022', 'dd-mm-yyyy'));

--view
select * from Fund;