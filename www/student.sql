use banka;
create table student(
Roll_No varchar(10) primary key,
Name varchar(30),
Age int(2),
Address varchar(30),
CGPA int(5)
);
desc student;

insert into student values ('15/IT/83','Bankim Mondal',21,'Durgapur',8);
insert into student values ('15/IT/04','Saptarshi Paul',22,'Assam',9);
insert into student values ('14/MM/42','Sonu Tewari',23,'Bihar',7); 
insert into student values ('15/IT/87','Anil Singh',21,'Durgapur',8);
insert into student values ('15/IT/84','Satyam Saha',22,'Dankuni',6);
insert into student values ('14/MM/42','Ramswaroop Singh',20,'Bihar',7); 
insert into student values ('15/IT/85','Bankim Mondal',21,'Durgapur',8);
insert into student values ('15/IT/14','Saptarshi Paul',22,'Assam',9);
insert into student values ('14/MM/72','Sonu Tewari',23,'Bihar',7); 