CREATE TABLE Student
(
	Std_Name VARCHAR2(40),
	Std_ID VARCHAR2(20) PRIMARY KEY,
	Std_Department VARCHAR2(20),
	Std_Level NUMBER,
	Std_Phone VARCHAR2(20)
);

CREATE TABLE Member
(
	Std_ID VARCHAR2(20),
	Mem_DOB DATE,
	Mem_Gender VARCHAR2(20),
	Mem_Email VARCHAR2(40),
	Mem_Username VARCHAR2(40),
	Mem_Password VARCHAR2(20),
    FOREIGN KEY(Std_ID) REFERENCES Student(Std_ID) ON DELETE CASCADE 
);

CREATE TABLE Panel_Member
(

	Std_ID VARCHAR2(20) ,
	

	PMem_Password VARCHAR2(20),
	PMem_Username VARCHAR2(40),
	PMem_Year NUMBER,
	PMem_Designation VARCHAR2(40),
     FOREIGN KEY(Std_ID) REFERENCES Student(Std_ID) ON DELETE CASCADE
);


CREATE TABLE Volunteer
(

	Std_ID VARCHAR2(20),

	V_Event_Duty VARCHAR2(40),
    FOREIGN KEY(Std_ID) REFERENCES Student(Std_ID) ON DELETE CASCADE
);

CREATE TABLE Event
(
	Event_ID NUMBER(6,0) PRIMARY KEY,
	Event_Name VARCHAR2(40),
	Event_Date DATE
);

CREATE TABLE Fest_Volunteer
(Event_ID NUMBER(6,0),
 Std_ID VARCHAR2(20),
FOREIGN KEY(Event_ID) REFERENCES Event(Event_ID) ON DELETE CASCADE,
FOREIGN KEY(Std_ID) REFERENCES Student(Std_ID)  ON DELETE CASCADE

);

CREATE TABLE Event_Manage
(Event_ID NUMBER(6,0),
 Std_ID VARCHAR2(20),
FOREIGN KEY(Event_ID) REFERENCES Event(Event_ID) ON DELETE CASCADE,
FOREIGN KEY(Std_ID) REFERENCES Student(Std_ID)  ON DELETE CASCADE

);

CREATE TABLE Event_Participant
(Event_ID NUMBER(6,0),
 Std_ID VARCHAR2(20),
FOREIGN KEY(Event_ID) REFERENCES Event(Event_ID) ON DELETE CASCADE,
FOREIGN KEY(Std_ID) REFERENCES Student(Std_ID) ON DELETE CASCADE,
Participated_Segment VARCHAR(30),
Position Number

);

CREATE TABLE Segment_Name
(Event_ID NUMBER(6,0),
 Segment VARCHAR2(40),
FOREIGN KEY(Event_ID) REFERENCES Event(Event_ID) ON DELETE CASCADE

);

create table Books
(
    Isbn_no varchar2(30) primary key,
    Std_ID VARCHAR2(20), 
    Title varchar2(40),
    Publisher varchar2(20),
    Genre varchar2(30),
    Book_Edition varchar2(20),
    Donated_by varchar2(40),
    
    Due_date date,
    Return_date date,
   
    FOREIGN KEY(Std_ID) REFERENCES Student(Std_ID) ON DELETE CASCADE
);

create table Author_Name
(
    Isbn_no varchar2(30),
    Author_name varchar2(40),

    foreign key(Isbn_no) References Books(Isbn_no)ON DELETE CASCADE
);

CREATE TABLE Expenditure 
(Entry_Number NUMBER(9,0) PRIMARY KEY,
 
Entry_Amount NUMBER,
Entry_Date NUMBER(2,0),
Entry_Month VARCHAR(8),
Entry_Year NUMBER(4,0)
);

CREATE TABLE Event_Expense
(Entry_Number NUMBER(9,0) PRIMARY KEY,
 Event_ID NUMBER(6,0),

Type VARCHAR2(40),
Sponsor_Name VARCHAR2(50),
Sponsor_Amount NUMBER,
FOREIGN KEY(Event_ID) REFERENCES Event(Event_ID) ON DELETE CASCADE
);

CREATE TABLE Books_Purchased
(Entry_Number NUMBER(9,0) ,


Books_Quantity NUMBER,
FOREIGN KEY(Entry_Number) REFERENCES Expenditure(Entry_Number) ON DELETE CASCADE
);

CREATE TABLE Others
(Entry_Number NUMBER(9,0) ,


Category VARCHAR2(30),
FOREIGN KEY(Entry_Number) REFERENCES Expenditure(Entry_Number) ON DELETE CASCADE
);

create table Budget
(
    Month varchar2(30), 
    Year number(8,0),
    Total_spent number(10,0),
    Present_amount number(10,0),
	primary key(Month,Year)
);

create table Fund
(
    Fund_ID varchar2(30) PRIMARY KEY,
	Amount NUMBER(10,2),
	Source VARCHAR2(40),
	Transaction_Date DATE
);


CREATE TABLE ISSUE_DEMAND
(
	Std_ID VARCHAR2(20) ,
	Std_Name VARCHAR2(40),
	Std_Department VARCHAR2(20),
	Std_Level NUMBER,
	Isbn_no varchar2(30) ,
	Book_Title varchar2(80),
	Primary key(Std_ID,Isbn_no),
	foreign key(Isbn_no) References Books(Isbn_no)ON DELETE CASCADE,
	 FOREIGN KEY(Std_ID) REFERENCES Student(Std_ID) ON DELETE CASCADE
);
//new participant table, ager ta drop kore eita create koren
CREATE TABLE Participant
(
         P_Name VARCHAR2(40),
	P_ID VARCHAR2(20) PRIMARY KEY,
	P_Department VARCHAR2(20),
         P_Univeristy VARCHAR2(30),
	P_Level NUMBER,
	P_Phone NUMBER,
        P_Image Blob,
        P_University_Image Blob
       
);



