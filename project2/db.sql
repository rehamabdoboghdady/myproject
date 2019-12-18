drop database if exists db;
create database db;
use db;
create table localstore(
local_target varchar(1000) not null,
local_type varchar(1000) not null,
local_date varchar(1000) not null
);
select*from localstore;