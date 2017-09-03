create database shopping_galaxy;
use shopping_galaxy;


create table users
(
  id int unsigned not null auto_increment primary key,
  user_id varchar(23) not null unique,
  name char(60) not null,
  email char(80) not null,
  encrypted_password varchar(80) not null,
  salt varchar(10) not null,
  created_at datetime,
  updated_at datetime null
);