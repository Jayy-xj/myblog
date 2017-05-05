
blog项目：数据库及数据表建立语句

文章列表：
create table article(
    id int primary key auto_increment,
    title varchar(50),
    cate_id int,
    author varchar(20),
    content text,
    intime timestamp default current_timestamp,
    views int default 0
);
文章分类列表：
create table category(
    id int primary key auto_increment,
    cate_name varchar(30),
    order_no tinyint
);
留言表：
create table guestbook(
    id int primary key auto_increment,
    username varchar(30),
    order_no tinyint,
    art_id int,
    content text,
    intime timestamp default current_timestamp,
    flag tinyint default 0
);
管理员列表：
create table admin(
    id int primary key auto_increment,
    username varchar(30),
    password varchar(32),
    flag varchar(10) default '超级管理员'
);
--------------------------------------------------分割线---------------------------------------------------