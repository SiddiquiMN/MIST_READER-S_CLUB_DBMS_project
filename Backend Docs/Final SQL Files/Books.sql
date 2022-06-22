

insert into Books(Isbn_no, Title, Publisher,  Genre, Book_Edition, Donated_by,Due_date, Return_date)
values('5', 'Step Away From The Screen', 'Sajid Hossain', 'Life Lesson', '2nd', 'Readers Club', Null,Null);


insert into Books(Isbn_no, Title, Publisher,  Genre, Book_Edition, Donated_by,Due_date, Return_date)
values('3', 'Kayanath', 'Easin Arafat', 'HUM', '3rd', 'Rayhan Ferdous Faisal',Null,Null);

insert into Books(Isbn_no, Title, Publisher,  Genre, Book_Edition, Donated_by,Due_date, Return_date)
values('4', 'Mazdoor', 'Khaled Hasan', 'HUM', '3rd', 'Rayhan Ferdous Faisal',Null,Null);
insert into Books(Isbn_no, Title, Publisher,  Genre, Book_Edition, Donated_by,Due_date, Return_date)
values('6', 'Captain Nash', 'Captain Nash', 'HUM', '3rd', 'Rayhan Ferdous Faisal', Null,NULL);

insert into Books(Isbn_no, Title, Publisher,  Genre, Book_Edition, Donated_by,Std_ID,Due_date, Return_date)
values('13435', 'Captain', 'Captain Nash', 'HUM', '3rd', 'Rayhan Ferdous Faisal','202014025', Null,NULL);









insert into Author_name(Isbn_no, Author_name)
values('3', 'Easin Arafat');

insert into Author_name(Isbn_no, Author_name)
values('3', 'Khaled Hasan Irfan');


insert into Author_name(Isbn_no, Author_name)
values('3', 'Captain Nash');



insert into Author_name(Isbn_no, Author_name)
values('1', 'M N Alam Siddiqui');

insert into Author_name(Isbn_no, Author_name)
values('5', 'Sajid Hossain');
insert into BAuthor_name(Isbn_no, Author_name)
values('4', 'Khaled Hasan');

--VIEW
select b.Isbn_no, Title, Publisher,  Genre, Edition, Donated_by,  Year,Due_date, Return_date
from Books b inner join Book_author ba
on b.Isbn_no=ba.Isbn_no;
