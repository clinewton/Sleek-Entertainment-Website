create table customer
(
    user_id      int auto_increment
        primary key,
    first_name   varchar(45)  not null,
    last_name    varchar(45)  not null,
    username     varchar(50)  not null,
    phone_number int(13)      not null,
    email        varchar(200) not null,
    password     varchar(200) not null
);

create table movie
(
    movie_id     int auto_increment
        primary key,
    title        varchar(255) not null,
    photo        varchar(255) null,
    genre        varchar(30)  null,
    duration     int          null,
    release_date int          null,
    description  text         null,
    upload_date  date         not null
);

create table orders
(
    order_id int auto_increment
        primary key,
    user_id  int          null,
    username varchar(45)  null,
    title    varchar(100) null,
    type     varchar(20)  null,
    genre    varchar(50)  null,
    amount   int          null
);

create table series
(
    series_id   int auto_increment
        primary key,
    photo       blob        null,
    title       varchar(50) null,
    seasons     int         null,
    genre       varchar(30) null,
    description text        null
);

create table users
(
    user_id       int auto_increment
        primary key,
    user_name     varchar(20) null,
    user_email    varchar(60) null,
    user_password varchar(40) null,
    user_level    varchar(3)  null
);


