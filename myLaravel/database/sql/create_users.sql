CREATE TABLE `pu021`.`users`
(
    `id` BIGINT NOT NULL AUTO_INCREMENT ,
    `email` VARCHAR(255) NOT NULL ,
    `password` VARCHAR(255) NOT NULL ,
    `created_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB;

create table users
(
    id         bigint auto_increment
        primary key,
    email      varchar(255)                         not null,
    password   varchar(255)                         not null,
    created_at datetime default current_timestamp() not null
);

