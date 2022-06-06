create table users
(
    id           int auto_increment
        primary key,
    name         varchar(255)  not null,
    email        varchar(255)  not null,
    phone_number varchar(255)  not null,
    avatar       varchar(255)  null,
    role_id      int default 1 null,
    password     varchar(255)  not null,
    constraint users_email_uindex
        unique (email),
    constraint users_phone_number_uindex
        unique (phone_number)
);

INSERT INTO php2_asm.users (id, name, email, phone_number, avatar, role_id, password) VALUES (1, 'thienth', 'thienth32@gmail.com', '0987654321', null, 1, '');
INSERT INTO php2_asm.users (id, name, email, phone_number, avatar, role_id, password) VALUES (2, 'namdt', 'namdt@gmail.com', '0987654322', null, 2, '');
