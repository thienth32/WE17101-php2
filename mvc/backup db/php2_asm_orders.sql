create table orders
(
    id           int auto_increment
        primary key,
    address      varchar(255)  not null,
    phone_number varchar(255)  not null,
    email        varchar(255)  not null,
    status       int default 1 not null,
    total_price  int default 0 null,
    created_at   timestamp     not null
);

