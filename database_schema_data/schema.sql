DROP DATABASE IF EXISTS shelbourne_legal;
CREATE DATABASE shelbourne_legal CHARSET = UTF8MB4;
USE shelbourne_legal;

CREATE TABLE `bookings`
(
    `id`          char(36)     NOT NULL,
    `date`        date         NOT NULL,
    `booked_time` varchar(10)  NOT NULL,
    `service`     varchar(64)  NOT NULL,
    `name`        varchar(128) NOT NULL,
    `email`       varchar(64)  NOT NULL,
    `location`    varchar(128) NOT NULL,
    `phone`       varchar(10)  NOT NULL,
    `referred_by` varchar(64)
) ENGINE = InnoDB
  DEFAULT CHARSET = utf8mb4;

ALTER TABLE `bookings`
    ADD PRIMARY KEY (`id`);


CREATE TABLE IF NOT EXISTS `clients`
(
    `id`             char(36)     NOT NULL,
    `full_name`      varchar(255) NOT NULL,
    `other_names`    varchar(255) NOT NULL,
    `date_birth`     varchar(255) NOT NULL,
    `occupation`     varchar(255) NOT NULL,
    `address`        varchar(255) NOT NULL,
    `postal_address` varchar(255) NOT NULL,
    `email`          varchar(255) NOT NULL,
    `phone`          varchar(255) NOT NULL,
    `referred_by`    varchar(255) NOT NULL,
    `is_will`        tinyint(1)       NOT NULL            DEFAULT '0',
    `is_powers`      tinyint(1)       NOT NULL            DEFAULT '0',
    `is_binding`     tinyint(1)       NOT NULL            DEFAULT '0',
    `will_text`      varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
    `powers_text`    varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
    `binding_text`   varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB
  DEFAULT CHARSET = utf8mb4;
