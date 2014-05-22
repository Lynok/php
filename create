<?php
mysql_connect("localhost","-u root"," ");

mysql_query("drop database if exists information;");
mysql_query("create database information;");
mysql_query("use information;");
mysql_query("create table information (id int not null auto_increment primary key, 
	 name char(30), surname char(30), fathersname char(30),city char(20), adress char(60), 
	 product char(30), quantity int);");
mysql_query("insert into information (name,surname,fathersname,city, adress,product,quantity) 
	values ('Maxim', 'Khomenko','Olegovich','Cherkassy', 'Gogolya street 25','TV', 1);");
mysql_query("insert into information (name,surname,fathersname,city,adress,product,quantity) 
	values ('Igor', 'Fedorishin','Evgenievich','Kyiv','Chehova street 67','Computer',3);");
echo "Ok.";
?>
