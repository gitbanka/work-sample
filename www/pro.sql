create table product(
pro_id int(5) primary key auto_increment,
pro_name varchar(30),
pro_comp varchar(30),
pro_price int(5),
op_time time,
op_date date
)engine=innodb;

desc product;

set autocommit=0;
insert into product(pro_name,pro_comp,pro_price,op_time,op_date) values ('mobile','asus',19999,curtime(),curdate());
insert into product(pro_name,pro_comp,pro_price,op_time,op_date) values ('tv','panasonic',32500,curtime(),curdate());
insert into product(pro_name,pro_comp,pro_price,op_time,op_date) values ('mobile','xoimi',12207,curtime(),curdate());
insert into product(pro_name,pro_comp,pro_price,op_time,op_date) values ('mobile','lenevo',13630,curtime(),curdate());
insert into product(pro_name,pro_comp,pro_price,op_time,op_date) values ('mobile','asus',18501,curtime(),curdate());
insert into product(pro_name,pro_comp,pro_price,op_time,op_date) values ('tv','samsung',22500,curtime(),curdate());
insert into product(pro_name,pro_comp,pro_price,op_time,op_date) values ('tv','sony',45800,curtime(),curdate());
savepoint state1;