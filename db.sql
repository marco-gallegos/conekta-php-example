create table payment(
    id int AUTO_INCREMENT PRIMARY key,
    total float,
    date_created datetime,
    description text,
    name varchar(200),
    number_card varchar(10),
    email varchar(100),
    order_id varchar(100)
)