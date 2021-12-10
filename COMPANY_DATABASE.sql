drop database if exists COMPANY_DATABASE ;
create schema COMPANY_DATABASE;
use COMPANY_DATABASE;

CREATE TABLE LOGIN(
user_id tinyint auto_increment primary key,
user_name varchar(30),
user_email varchar(55),
user_password varchar(80)
);

CREATE TABLE PRODUCT_PROJECT(
ProductID varchar(30) not null,
Function_ varchar(100),
ProjectedLength varchar(30),
Number_on_project int,
Target_market enum('youth','middle-aged','elderly','general public'),
primary key(ProductID));

CREATE TABLE RESEARCH_PROJECT(
ResearchID varchar(30) not null,
FieldOfStudy varchar(50),
Purpose varchar(100),
Number_on_project int,
primary key(ResearchID));

