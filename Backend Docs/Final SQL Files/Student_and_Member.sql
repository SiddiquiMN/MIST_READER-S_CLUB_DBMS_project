INSERT INTO Student(Std_Name, Std_ID,Std_Department,Std_Level,Std_Phone) VALUES ('Maliha Zerin','202014025','CSE',3,01677309435);

INSERT INTO Student(Std_Name, Std_ID,Std_Department,Std_Level,Std_Phone) VALUES ('Tahsin Tahiyat','202132033','Civil',2,0133445678);
INSERT INTO Student(Std_Name, Std_ID,Std_Department,Std_Level,Std_Phone) VALUES ('Maria Tabassum','202115015','Aero',2,01687308435);
INSERT INTO Student(Std_Name, Std_ID,Std_Department,Std_Level,Std_Phone) VALUES ('Samiul Hasan','202015060','Aero',3,01681118435);
INSERT INTO Student(Std_Name, Std_ID,Std_Department,Std_Level,Std_Phone) VALUES ('Nashita Noor','202032013','Civil',3,01798308435);
INSERT INTO Student(Std_Name, Std_ID,Std_Department,Std_Level,Std_Phone) VALUES ('Tatheera Sultana','201916044','NSE',4,01787308111);
INSERT INTO Student(Std_Name, Std_ID,Std_Department,Std_Level,Std_Phone) VALUES ('Ilma Binte Maksud','202116008','NSE',1,01886668435);
INSERT INTO Student(Std_Name, Std_ID,Std_Department,Std_Level,Std_Phone) VALUES ('Alif Khan','201918021','IPE',4,01734308435);
INSERT INTO Student(Std_Name, Std_ID,Std_Department,Std_Level,Std_Phone) VALUES ('Safwan Sadi','202019012','EECE',3,0178908435);
INSERT INTO Student(Std_Name, Std_ID,Std_Department,Std_Level,Std_Phone) VALUES ('Sheraf Saheel','202119030','EECE',2,01687409435);

INSERT INTO Member(Std_ID,Mem_DOB,Mem_Gender,Mem_Email,Mem_Username,Mem_Password) VALUES ('202132033',to_date('13-June-2000','dd-mon-yyyy'),'Female','Tahsin-Tahiyat@gmail.com','Tahsin1','TahsinCivil');
INSERT INTO Member(Std_ID,Mem_DOB,Mem_Gender,Mem_Email,Mem_Username,Mem_Password) VALUES ('202115015',to_date('14-July-2000','dd-mon-yyyy'),'Female','Maria-Tabassum@gmail.com','Maria1','MariaAero');
INSERT INTO Member(Std_ID,Mem_DOB,Mem_Gender,Mem_Email,Mem_Username,Mem_Password) VALUES ('202015060',to_date('15-Aug-2000','dd-mon-yyyy'),'Male','Samiul-Hasan@gmail.com','Samiul1','SamiulAero');
INSERT INTO Member(Std_ID,Mem_DOB,Mem_Gender,Mem_Email,Mem_Username,Mem_Password) VALUES ('202032013',to_date('16-Sept-2000','dd-mon-yyyy'),'Female','Nashita-Noort@gmail.com','Nashita1','NashitaCivil');
INSERT INTO Member(Std_ID,Mem_DOB,Mem_Gender,Mem_Email,Mem_Username,Mem_Password) VALUES ('201916044',to_date('17-Oct-2000','dd-mon-yyyy'),'Female','Tatheera-Sultana@gmail.com','Tatheera1','TathheraNSE');
INSERT INTO Member(Std_ID,Mem_DOB,Mem_Gender,Mem_Email,Mem_Username,Mem_Password) VALUES ('202116008',to_date('18-Nov-2000','dd-mon-yyyy'),'Female','Ilma-Bintet@gmail.com','Ilma1','IlmaNSE');
INSERT INTO Member(Std_ID,Mem_DOB,Mem_Gender,Mem_Email,Mem_Username,Mem_Password) VALUES ('201918021',to_date('19-Dec-2000','dd-mon-yyyy'),'Male','Alif-Khan@gmail.com','Alif1','AlifIPE');
INSERT INTO Member(Std_ID,Mem_DOB,Mem_Gender,Mem_Email,Mem_Username,Mem_Password) VALUES ('202019012',to_date('20-Jan-2000','dd-mon-yyyy'),'Male','Safwan-Sadi@gmail.com','Safwan1','SafwanEECE');
INSERT INTO Member(Std_ID,Mem_DOB,Mem_Gender,Mem_Email,Mem_Username,Mem_Password) VALUES ('202119030',to_date('21-Feb-2000','dd-mon-yyyy'),'Male','Sheraf-Saheel@gmail.com','Sheraf1','SherafEECE');



INSERT INTO Books(Isbn_no,Std_ID,Title,Genre,Due_date,Return_date,Book_Edition,Donated_by,Publisher) VALUES ('12345678','202132033','Thousand Splendid Suns','Fiction',to_date('18-June-2022','dd-mon-yyyy'),to_date('15-June-2022','dd-mon-yyyy'),NULL,NULL,NULL);
INSERT INTO Books(Isbn_no,Std_ID,Title,Genre,Due_date,Return_date,Book_Edition,Donated_by,Publisher) VALUES ('13345678','202115015','The Sun Down Motel','Mystery Thriller',to_date('15-June-2022','dd-mon-yyyy'),to_date('18-June-2022','dd-mon-yyyy'),NULL,NULL,NULL,);
INSERT INTO Books(Isbn_no,Std_ID,Title,Genre,Due_date,Return_date,Book_Edition,Donated_by,Publisher) VALUES ('13245678','201918021','The Night Swim','Mystery Thriller',to_date('05-June-2022','dd-mon-yyyy'),to_date('3-June-2022','dd-mon-yyyy'),NULL,NULL,NULL);
INSERT INTO Books(Isbn_no,Std_ID,Title,Genre,Due_date,Return_date,Book_Edition,Donated_by,Publisher) VALUES ('13246578','202119030','The Notebook','Romantic',to_date('03-June-2022','dd-mon-yyyy'),to_date('05-June-2022','dd-mon-yyyy'),NULL,NULL,NULL);
INSERT INTO Books(Isbn_no,Std_ID,Title,Genre,Due_date,Return_date,Book_Edition,Donated_by,Publisher) VALUES ('13246587','202116008','Lolita','Romantic',to_date('03-June-2022','dd-mon-yyyy'),to_date('01-June-2022','dd-mon-yyyy'),NULL,NULL,NULL);



INSERT INTO Participant(Std_ID,P_University_Name,P_ID,P_Photo,P_ID_Card_Photo) VALUES ('201914005','MIST','201914005',Null,Null);
INSERT INTO Participant(Std_ID,P_University_Name,P_ID,P_Photo,P_ID_Card_Photo) VALUES ('202014006','MIST','202014006',Null,Null);
INSERT INTO Participant(Std_ID,P_University_Name,P_ID,P_Photo,P_ID_Card_Photo) VALUES ('202015060','MIST','202015060',Null,Null);

INSERT INTO Volunteer(Std_ID,V_Event_Duty) VALUES ('202014001','Decoration');
INSERT INTO Volunteer(Std_ID,V_Event_Duty) VALUES ('202014002','Decoration');
INSERT INTO Volunteer(Std_ID,V_Event_Duty) VALUES ('201916044','Logistics');
INSERT INTO Volunteer(Std_ID,V_Event_Duty) VALUES ('202132033','Event Management');
INSERT INTO Volunteer(Std_ID,V_Event_Duty) VALUES ('202114003','Logistics');

INSERT INTO Fest_Volunteer(Std_ID,Event_ID) VALUES ('202014001',202201);
INSERT INTO Fest_Volunteer(Std_ID,Event_ID) VALUES ('202014002',202201);
INSERT INTO Fest_Volunteer(Std_ID,Event_ID) VALUES ('201916044',202202);
INSERT INTO Fest_Volunteer(Std_ID,Event_ID) VALUES ('202132033',202202);
INSERT INTO Fest_Volunteer(Std_ID,Event_ID) VALUES ('202132033',202203);

INSERT INTO Event_Manage(Std_ID,Event_ID) VALUES ('202014001',202201);
INSERT INTO Event_Manage(Std_ID,Event_ID) VALUES ('202014002',202202);
INSERT INTO Event_Manage(Std_ID,Event_ID) VALUES ('201914008',202203);



INSERT INTO Event_Participant(Event_ID,Std_ID,Participated_Segment,Position) VALUES (202201,'201914005','Quiz',1);
INSERT INTO Event_Participant(Event_ID,Std_ID,Participated_Segment,Position) VALUES (202202,'202014006','Bangla Book Quiz',1);
INSERT INTO Event_Participant(Event_ID,Std_ID,Participated_Segment,Position) VALUES (202202,'202015060','English Book Quiz',1);