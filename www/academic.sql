create database academics;	/*creating a database*/
use academics;	/*using the database*/

/*creating first table*/
	create table course_catagory(catagory_id varchar(30) primary key,
								 catagory_name varchar(30),
								 duration varchar(30)
								 )engine=innodb;

/*creating second table*/
	create table course(course_id varchar(30) primary key,
						course_name varchar(30),
						catagory_id varchar(30),foreign key(catagory_id) references course_catagory(catagory_id) on update cascade on delete cascade
						)engine=innodb;

/*creating third table*/
	create table student(s_code varchar(30) primary key,
						 first_name varchar(30),
						 last_name varchar(30),
						 contact varchar(30),
						 catagory_id varchar(30),
						 course_id varchar(30),foreign key(course_id) references course(course_id) on update cascade on delete cascade
						 )engine=innodb;

/*creating forth table*/
	create table payment(transaction_id varchar(30) primary key, 
						 s_code varchar(30),foreign key(s_code) references student(s_code) on update cascade on delete cascade,
						 payment_mode varchar(50),
						 payment_catagory varchar(30),
						 payment_date date,
						 payment_time time,
						 payment_amount int
						 )engine=innodb;

/*creating fifth table*/
	create table studymate(catagory_id varchar(30),foreign key(catagory_id) references course_catagory(catagory_id)on update cascade on delete cascade,
						   course_id varchar(30),
						   book_name varchar(30),
						   author varchar(30)

						  )engine=innodb;

/*inserting into first table course_catagory*/
	insert into course_catagory values('B.TECH','Bachelor of Technology','4 years');
	insert into course_catagory values('M.TECH','Master of Technology','2 years');
	insert into course_catagory values('PhD','Doctorate of Philosophy','2-6 years');
	insert into course_catagory values('BSC','Bachelor of Science','3 years');

/*insert into second table course*/
	insert into course values('BT','Biotechnology','B.TECH');
	insert into course values('CE','Civil Engineering','B.TECH');
	insert into course values('CH','Chemical Engineering','B.TECH');
	insert into course values('CS','Computer Science & Engineering','B.TECH');
	insert into course values('EC','Electronics & Communication','B.TECH');
	insert into course values('EE','Electrical Engineering','B.TECH');
	insert into course values('ME','Mechanical Engineering','B.TECH');
	insert into course values('PG/ME','Mechanical Engineering','M.TECH');
	insert into course values('PhD/ME','Mechanical Engineering','PhD');



	
