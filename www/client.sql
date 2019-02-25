use client;
create table client_table(
		ccode int(4),
		client_name varchar(30),
		address varchar(50),
		mobile_number int(10),
		dob date,
		email varchar(30)
		)engine=innodb;
desc client_table;

insert into client_table values (12,'jhon','kolkata',1234567890,'1997-5-24','jh@yahoo.in');
insert into client_table values (10,'martin','durgapur',2598745632,'1972-2-78','martin');
insert into client_table values (); 
insert into client_table values ();
insert into client_table values ();
insert into client_table values (); 
insert into client_table values ();
insert into client_table values ();
insert into client_table values ();