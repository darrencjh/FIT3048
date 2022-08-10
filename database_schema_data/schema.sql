DROP DATABASE IF EXISTS shelbourne_legal;
CREATE DATABASE shelbourne_legal CHARSET=UTF8MB4;
USE shelbourne_legal;

CREATE TABLE `bookings`
(
    `id`        char(36) NOT NULL,
    `date` date NOT NULL,
    `booked_time` varchar(10) NOT NULL,
    `name` varchar(128) NOT NULL,
    `email` varchar(64) NOT NULL,
    `location` varchar(128) NOT NULL,
    `phone` varchar(10) NOT NULL,
    `referred_by` varchar(64)
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;

ALTER TABLE `bookings`
    ADD PRIMARY KEY (`id`);
