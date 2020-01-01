CREATE TABLE users (
	user_id int(11) PRIMARY key AUTO_INCREMENT NOT null,
    user_first varchar(255) NOT null,
    user_last varchar(255) NOT null,
    user_email varchar(255) NOT null,
    user_uid varchar(255) NOT null,
    user_pwd varchar(255) NOT null
);

insert into users (user_first, user_last, user_email, user_uid, user_pwd) values ('Sunny', 'Shingala', 'sunny.singala@gmail.com', 'sunnyshingala', 'sunny0001');
insert into users (user_first, user_last, user_email, user_uid, user_pwd) values ('Pankaj', 'patel', 'papatel@gmail.com', 'ppl1', 'test0001');
insert into users (user_first, user_last, user_email, user_uid, user_pwd) values ('Viv', 'shingala', 'vivs@gmail.com', 'viv1', 'test0002');
