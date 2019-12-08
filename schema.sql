drop database chart02hcphp;
create database chart02hcphp;
use chart02hcphp;

create table val(
	id int not null auto_increment primary key,
	k varchar(255),
	v float,
	o int
);

