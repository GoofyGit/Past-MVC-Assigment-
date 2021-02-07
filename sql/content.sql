use containerdb;

create table classes(
    class_id int,
    ClassName varchar(255),
    description varchar(255),
    PRIMARY KEY (class_id)
    )AUTO_INCREMENT=1;

create table hobbys(
    hobby_id int,
    hobby varchar(255),
    PRIMARY KEY (hobby_id)
    )AUTO_INCREMENT=1;
 
create table blog(
    blog_id int,
    news varchar(255),
    PRIMARY KEY (blog_id)
)AUTO_INCREMENT=1;


Insert into hobbys (hobby_id,hobby) values ('1','Running a Discord Server');
Insert into hobbys (hobby_id,hobby) values ('2','Playing Team based shooter video games');

Insert into classes(class_id,ClassName,description) values ('1','2017 COMP5002 Introductory Programming','');
Insert into classes(class_id,ClassName,description) values ('2','2017 COMP5003 IT Essentials and Networking','');
Insert into classes(class_id,ClassName,description) values ('3','2017 COMP5004 IT Infrastructure','');
Insert into classes(class_id,ClassName,description) values ('4','2017 COMP5007 Introduction to Multimedia','');
Insert into classes(class_id,ClassName,description) values ('5','2017 COMP5008 Software Packages','');
Insert into classes(class_id,ClassName,description) values ('6','2017 INFT5001 Professional Skills','');
Insert into classes(class_id,ClassName,description) values ('7','2018 COMP.6211 Algorithms and Data Structures','');

Insert into blog (blog_id,news) values ('1','`Finishing up this page looking good');
Insert into blog (blog_id,news) values ('2','Page finished');