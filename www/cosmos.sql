
	/* create database */
	create database cosmos;

	/* use database */
	use cosmos;

	/* create table employee details */
	create table empdetails(

		emp_id char(5) primary key,
		firstname char(30),
		lastname char(30),
		address char(30),
		dept_id char(4),
		designation char(30),
		salary int,
		join_date date,
		performance_rating int
		)engine=innodb;

	/* inserting values into employee details */
	insert into empdetails values('ABC','banka','mondal','durgapur','DB','manager','40000','2016-08-20','9');
	insert into empdetails values('DEF','sattik','das','asansoul','WPD','worker','17000','2017-09-10','8');
	insert into empdetails values('GHI','suman','roy','DSP','SAL','co-worker','15000','2016-02-13','5');
	insert into empdetails values('JKL','bunty','sikder','MAMC','SAL','clerk','10000','2017-12-19','6');
	insert into empdetails values('MNO','megha','das','durgapur','DD','worker','17000','2018-03-28','7');
	insert into empdetails values('PQR','trisha','mondal','bankura','DB','co-manager','35000','2016-08-20','9');
	insert into empdetails values('STU','arnab','karmaker','DSP','MSO','ast-manager','30000','2016-02-13','6');
	insert into empdetails values('VWZ','shilpi','nandi','MAMC','WPD','supervisor','25000','2016-08-31','7');
	insert into empdetails values('YZA','sourav','roy','durgapur','DB','clerk','10000','2018-05-22','8');
	insert into empdetails values('BCD','jhil','dutta','kolkata','DD','worker','17000','2015-04-15','7');

	

	/* create table leave deatils */
	create table leavedetails(
		emp_id char(5),foreign key(emp_id) references empdetails(emp_id) on update cascade on delete cascade,
		leave_taken int,
		from_date date,
		to_date date,
		reason text
		)engine=innodb;

	/* inserting values into leave details */
	insert into leavedetails values('ABC','14','2018-1-10','2018-1-24','wedding');
	insert into leavedetails values('BCD','9','2018-3-5','2018-3-14','accident');
	insert into leavedetails values('STU','5','2018-1-13','2018-1-18','going home');
	insert into leavedetails values('PQR','14','2018-1-10','2018-1-24','wedding');
	insert into leavedetails values('GHI','9','2018-12-28','2019-1-6','wedding');
	insert into leavedetails values('YZA','7','2018-6-7','2018-6-14','fever');

	


	/* question number 2 */
	select a.firstname,a.lastname,b.leave_taken from empdetails a,leavedetails b where a.emp_id=b.emp_id and a.designation='manager';

	/* question number 4 */
	select * from empdetails order by performance_rating desc limit 1;

	/* question number 3 */
	select a.firstname,a.lastname,b.leave_taken from empdetails a,leavedetails b where a.emp_id=b.emp_id and b.leave_taken > 5;



