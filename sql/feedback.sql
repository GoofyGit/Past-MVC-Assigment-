
create table feedback(
    fb_id int AUTO_INCREMENT,
    fname varchar(255)NOT NULL,
    message varchar(255)NOT NULL,
    PRIMARY KEY (fb_id)
    )AUTO_INCREMENT=1;

Insert into feedback (fb_id,Fname,Message) values ('1','jared','web site works well');
Insert into feedback (fb_id,Fname,Message) values ('2','john','hello testing to see if this works');
Insert into feedback (fb_id,Fname,Message) values ('3','j22','Testing');

use containerdb;
select * from feedback;