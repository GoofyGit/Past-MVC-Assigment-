use containerdb;

create table contact(
    contact_id int NOT NULL AUTO_INCREMENT,
    fname varchar(255) NOT NULL,
    lname varchar(255)NOT NULL,
    email varchar(255)NOT NULL,
    message varchar(255)NOT NULL,
    PRIMARY KEY (contact_id)
    )AUTO_INCREMENT=1;

use containerdb;

Insert into contact (contact_id,Fname,Lname,email,Message) values ('1','jared','ross','10010010@gmail.com','hello');
Insert into contact (contact_id,Fname,Lname,email,Message) values ('2','jared','ross','10010010@gmail.com','Hello123');
Insert into contact (contact_id,Fname,Lname,email,Message) values ('3','jared','ross','10010010@gmail.com','1234');