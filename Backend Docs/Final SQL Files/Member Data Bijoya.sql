INSERT INTO Student(Std_Name, Std_ID,Std_Department,Std_Level,Std_Phone) VALUES ('Mollika','202014001','CSE',3,01711398252);
INSERT INTO Student(Std_Name, Std_ID,Std_Department,Std_Level,Std_Phone) VALUES ('Afsana','202014002','ME',3,01711148245);
INSERT INTO Student(Std_Name, Std_ID,Std_Department,Std_Level,Std_Phone) VALUES ('Ifadul','201914008','Archi',4,01711398289);

INSERT INTO Student(Std_Name, Std_ID,Std_Department,Std_Level,Std_Phone) VALUES ('Tarikul','201914005','NAME',4,01711398843);
INSERT INTO Student(Std_Name, Std_ID,Std_Department,Std_Level,Std_Phone) VALUES ('Muskan','202114010','EWCE',2,01313398843);
INSERT INTO Student(Std_Name, Std_ID,Std_Department,Std_Level,Std_Phone) VALUES ('Fahad','202114003','NAME',2,01711398440);
INSERT INTO Student(Std_Name, Std_ID,Std_Department,Std_Level,Std_Phone) VALUES ('Tasfia','202014006','EECE',3,01711398564);
INSERT INTO Student(Std_Name, Std_ID,Std_Department,Std_Level,Std_Phone) VALUES ('Farzana','202214007','BME',1,01711398985);
INSERT INTO Student(Std_Name, Std_ID,Std_Department,Std_Level,Std_Phone) VALUES ('Arish','202214009','IPE',1,01811390987);
INSERT INTO Student(Std_Name, Std_ID,Std_Department,Std_Level,Std_Phone) VALUES ('Nawsheen','201914004','CSE',4,01717658843);
INSERT INTO Student(Std_Name, Std_ID,Std_Department,Std_Level,Std_Phone) VALUES ('Binti','201914011','NAME',4,01711398253);
INSERT INTO Student(Std_Name, Std_ID,Std_Department,Std_Level,Std_Phone) VALUES ('Mabia','202214044','CE',1,01714498843);
INSERT INTO Student(Std_Name, Std_ID,Std_Department,Std_Level,Std_Phone) VALUES ('Nurzahan','202014034','NAME',3,01711248809);






INSERT INTO Member(Std_ID,Mem_DOB,Mem_Gender,Mem_Email,Mem_Username,Mem_Password) VALUES ('202014001',to_date('23-Dec-2000','dd-mon-yyyy'),'Female','mollika@gmail.com','Molli','molli_01');
INSERT INTO Member(Std_ID,Mem_DOB,Mem_Gender,Mem_Email,Mem_Username,Mem_Password) VALUES ('202014002',to_date('28-feb-2001','dd-mon-yyyy'),'Female','afsana@gmail.com','Afsa','afsa_02');
INSERT INTO Member(Std_ID,Mem_DOB,Mem_Gender,Mem_Email,Mem_Username,Mem_Password) VALUES ('201914008',to_date('13-Jan-1999','dd-mon-yyyy'),'Male','ifadul@gmail.com','Ifad','ifad_08');

INSERT INTO Member(Std_ID,Mem_DOB,Mem_Gender,Mem_Email,Mem_Username,Mem_Password) VALUES ('201914005',to_date('30-Mar-1999','dd-mon-yyyy'),'Male','tarikul@gmail.com','Trik','tarik_05');
INSERT INTO Member(Std_ID,Mem_DOB,Mem_Gender,Mem_Email,Mem_Username,Mem_Password) VALUES ('202114010',to_date('19-Nov-1999','dd-mon-yyyy'),'Female','muskan@gmail.com','Muskan','muskan_10');
INSERT INTO Member(Std_ID,Mem_DOB,Mem_Gender,Mem_Email,Mem_Username,Mem_Password) VALUES ('202114003',to_date('06-Apr-1999','dd-mon-yyyy'),'Male','fahad@gmail.com','Fahad','fahad_03');
INSERT INTO Member(Std_ID,Mem_DOB,Mem_Gender,Mem_Email,Mem_Username,Mem_Password) VALUES ('202014006',to_date('08-Jun-1999','dd-mon-yyyy'),'Female','tasfia@gmail.com','Tasfia','tasfia_06');
INSERT INTO Member(Std_ID,Mem_DOB,Mem_Gender,Mem_Email,Mem_Username,Mem_Password) VALUES ('202214007',to_date('22-Dec-1999','dd-mon-yyyy'),'Female','farzana@gmail.com','Farzana','farzana_07');
INSERT INTO Member(Std_ID,Mem_DOB,Mem_Gender,Mem_Email,Mem_Username,Mem_Password) VALUES ('202214009',to_date('05-May-1999','dd-mon-yyyy'),'Male','arish@gmail.com','Arish','arish_09');
INSERT INTO Member(Std_ID,Mem_DOB,Mem_Gender,Mem_Email,Mem_Username,Mem_Password) VALUES ('201914004',to_date('27-Aug-1999','dd-mon-yyyy'),'Female','nawsheen@gmail.com','Nawsheen','nawsheen_04');
INSERT INTO Member(Std_ID,Mem_DOB,Mem_Gender,Mem_Email,Mem_Username,Mem_Password) VALUES ('201914011',to_date('15-Oct-1999','dd-mon-yyyy'),'Female','binti@gmail.com','Binti','binti_11');
INSERT INTO Member(Std_ID,Mem_DOB,Mem_Gender,Mem_Email,Mem_Username,Mem_Password) VALUES ('202214044',to_date('04-Sep-1999','dd-mon-yyyy'),'Female','mabia@gmail.com','Mabia','mabia_44');
INSERT INTO Member(Std_ID,Mem_DOB,Mem_Gender,Mem_Email,Mem_Username,Mem_Password) VALUES ('202014034',to_date('28-Mar-1999','dd-mon-yyyy'),'Female','nurzahan@gmail.com','Nurzahan','nurzahan_34');


INSERT INTO Panel_Member(Std_ID,PMem_Password,PMem_Username,PMem_Year,PMem_Designation) VALUES ('202014001','01molli','Molli_Mollika',2020,'Vice president');
INSERT INTO Panel_Member(Std_ID,PMem_Password,PMem_Username,PMem_Year,PMem_Designation) VALUES ('202014002','01afsana','Afsa_Afsana',2021,'President');
INSERT INTO Panel_Member(Std_ID,PMem_Password,PMem_Username,PMem_Year,PMem_Designation) VALUES ('201914008','01ifad','Ifad_Ifadul',2019,'Secretary');
