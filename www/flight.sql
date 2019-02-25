create database flight;
	use flight;
	create table flightdetails(

		aircraftcode varchar(30),
		ftype varchar(30),
		source varchar(30),
		destination varchar(30),
		depttime time,
		journyhrs int
		)engine=innodb;
	insert into flightdetails values('UA01','Boeing','Los Angles','London','15:30',6);
	insert into flightdetails values('UA02','Boeing','California','Newyork','9:30',8);
	insert into flightdetails values('SA01','Boeing','Istanbul','Ankara','10:45',8);
	insert into flightdetails values('SA02','Airbus','London','Moscow','11:15',9);
	insert into flightdetails values('SQ01','Airbus','Sydney','Ankara','1:45',15);
	insert into flightdetails values('SQ02','Boeing','Perth','Aden','13:30',10);
	insert into flightdetails values('SQ03','Airbus','San Francisco','Nairobi','15:45',15);


		/*question number1*/
		select * from flights;

		/*rename table*/
		alter table flightdetails rename to flights;

		/*question number 2 */
		select source as SOURCE,destination as DESTINATION,depttime as 'DEPT TIME' from flights;

		/*question number 3*/
		select * from flights order by journyhrs desc; 

		/*question number 4*/
		select ftype count(ftype) as number from flights group by ftype;