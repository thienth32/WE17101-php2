create table order_details
(
    product_id int           not null,
    order_id   int           not null,
    size_id    int           null,
    color_id   int           null,
    quantity   int default 0 not null,
    unit_price int           null,
    primary key (product_id, order_id)
);

