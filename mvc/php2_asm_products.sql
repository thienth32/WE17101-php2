create table products
(
    id          int auto_increment
        primary key,
    name        varchar(255)  not null,
    category_id int           null,
    main_image  varchar(255)  null,
    price       int default 0 null,
    detail      text          null,
    promotion   float         null
);

