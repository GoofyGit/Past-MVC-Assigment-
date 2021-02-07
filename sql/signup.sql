use containerdb;

create table signup(
    signup_id int NOT NULL,
    username varchar(255)NOT NULL,
    password varchar(255)NOT NULL,
    PRIMARY KEY (signup_id)
    )AUTO_INCREMENT=1;

use containerdb;
Insert into signup (signup_id,username,password) values ('1','jaredross10010010','adminpassword123');