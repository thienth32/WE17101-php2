create table product_galleries
(
    id         int auto_increment
        primary key,
    product_id int          null,
    url        varchar(255) not null
);

