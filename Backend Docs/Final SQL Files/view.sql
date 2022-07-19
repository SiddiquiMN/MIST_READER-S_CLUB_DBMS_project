//view create

CREATE OR REPLACE VIEW Available_Books("ISBN_NO","Title","PUBLISHER","BOOK_EDITION","GENRE") AS
SELECT ISBN_NO,Title,PUBLISHER,BOOK_EDITION,GENRE FROM Books WHERE Std_ID IS  NULL


//view display
select * from Available_Books