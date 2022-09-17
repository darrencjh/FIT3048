DROP DATABASE IF EXISTS shelbourne_legal;
CREATE DATABASE shelbourne_legal CHARSET = UTF8MB4;
USE shelbourne_legal;

CREATE TABLE `admins` (
  `id` char(36) NOT NULL,
  `email` varchar(255) NOT NULL DEFAULT '',
  `username` varchar(64) NOT NULL  DEFAULT '',
  `password` varchar(255) NOT NULL  DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE `admins`
    ADD PRIMARY KEY (`id`),
    ADD UNIQUE KEY `email` (`email`),
    ADD UNIQUE KEY `username` (`username`);




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
    # 1.personal information
    # 1.1 Your details
    `id`             char(36)     NOT NULL,
    `full_name`      varchar(128) NOT NULL,
    `previous_name`    varchar(128),
    `date_of_birth`     date NOT NULL,
    `occupation`     varchar(64) NOT NULL,
    `home_address` varchar(255) NOT NULL,
    `postal_address` varchar(255),
    `email`          varchar(64) NOT NULL,
    `phone`          char(10) NOT NULL,

    # 1.2 Existing Documents
    `has_will`        tinyint(1) DEFAULT 0,
    `has_power` tinyint(1) DEFAULT 0,
    `has_binding`     tinyint(1)  DEFAULT 0,
    `has_decision_maker` tinyint(1)  DEFAULT 0,
    `has_superannu_deed` tinyint(1)  DEFAULT 0,
    `has_family_deed` tinyint(1)  DEFAULT 0,

    `is_office_holder` tinyint(1)  DEFAULT 0,
    `is_beneficiary` tinyint(1)  DEFAULT 0,
    `in_partnership` tinyint(1)  DEFAULT 0,


    # 1.3
    `is_health`     tinyint(1)  DEFAULT 0,
    `health_desc` varchar(1024) DEFAULT '',

    # 1.4
    `relationship_status` varchar(64)  DEFAULT 'unknown',
    `married_fullName` varchar(128) DEFAULT '',
    `married_dob` date,
    `married_phone` varchar(10)  DEFAULT '',
    `defacto_fullName` varchar(128)  DEFAULT '',
    `defacto_living` date,
    `defacto_mariage` tinyint(1)  DEFAULT 0,
    `sepdiv_property_settlement` tinyint(1)  DEFAULT 0,

    # 1.5 child
    `has_child_current` tinyint(1)  DEFAULT 0,
    `has_child_prev` tinyint(1)  DEFAULT 0,


    # 1.6
    `has_household_member` tinyint(1)  DEFAULT 0,

    # 1.7
    `has_financial_dependent` tinyint(1)  DEFAULT 0,

    # 2
    # 2.1
    `has_accountant` tinyint(1)  DEFAULT 0,
    `accountant_name`      varchar(128)  DEFAULT '',
    `accountant_firm`      varchar(128)  DEFAULT '',
    `accountant_email`      varchar(64)  DEFAULT '',
    `accountant_help`  tinyint(1)  DEFAULT 0,

    `has_adviser` tinyint(1)  DEFAULT 0,
    `adviser_name`      varchar(128)  DEFAULT '',
    `adviser_firm`      varchar(128)  DEFAULT '',
    `adviser_email`      varchar(64)  DEFAULT '',
    `adviser_help`  tinyint(1)  DEFAULT 0,

    `referrer_source` varchar(128)  DEFAULT '',
    `referrer_name`      varchar(128)  DEFAULT '',
    `referrer_firm`      varchar(128)  DEFAULT '',
    `referrer_email`      varchar(64)  DEFAULT '',


    # 2.2
    # 2.3
    `details_youowe` text,
    `has_owe_agreement`  tinyint(1)  DEFAULT 0,
    `details_youowed` text,
    `has_owed_agreement`  tinyint(1)  DEFAULT 0,
    `repay_estate` varchar(32)  DEFAULT '',

    # 2.3
    `insure_house` tinyint(1)  DEFAULT 0,
    `insure_house_company`     varchar(64),
    `insure_vehicle` tinyint(1)  DEFAULT 0,
    `insure_vehicle_company`     varchar(64),
    `insure_health` tinyint(1)  DEFAULT 0,
    `insure_health_company`     varchar(64) ,
    `insure_life` tinyint(1)  DEFAULT 0,
    `insure_life_company`     varchar(64) ,



    # 3

    # 4
    `wish_appoint_child` tinyint(1)  DEFAULT 0,
    `surviving_parent_fullname` varchar(128)  default '',
    `guardian_fullname`  varchar(128)  default '',
    `guardian_relation` varchar(64) default '',


    # 5
    `wish_property_special` tinyint(1)  DEFAULT 0,

    # 6
    # 7
    `way_attorney_decision` varchar(128)  default '',

    # 8
    `addition_notes` text,

    PRIMARY KEY (`id`)
) ENGINE = InnoDB
  DEFAULT CHARSET = utf8mb4;


# Page 2
CREATE TABLE IF NOT EXISTS `children`
(
    `id`             char(36)     NOT NULL,
    `full_name`      varchar(255) NOT NULL,
    `age` tinyint DEFAULT 0,
    `address` varchar(255) DEFAULT NULL,
    `mother` varchar(255) DEFAULT NULL,
    `father` varchar(255) DEFAULT NULL,
    `client_id`      char(36)     DEFAULT NULL,

    PRIMARY KEY (`id`),
    FOREIGN KEY client_children_key(`client_id`) REFERENCES clients(`id`)
) ENGINE = InnoDB
  DEFAULT CHARSET = utf8mb4;

CREATE TABLE IF NOT EXISTS `grandChildren`
(
    `id`             char(36)     NOT NULL,
    `full_name`      varchar(255) NOT NULL,
    `age` tinyint DEFAULT 0,
    `address` varchar(255) DEFAULT NULL,
    `mother` varchar(255) DEFAULT NULL,
    `father` varchar(255) DEFAULT NULL,
    `client_id`      char(36)     DEFAULT NULL,

    PRIMARY KEY (`id`),
    FOREIGN KEY client_grandChildren_key(`client_id`) REFERENCES clients(`id`)
) ENGINE = InnoDB
  DEFAULT CHARSET = utf8mb4;




CREATE TABLE IF NOT EXISTS `householders`
(
    `id`             char(36)     NOT NULL,
    `full_name`      varchar(255) NOT NULL,
    `relationship`   varchar(255) DEFAULT NULL,
    `client_id`      char(36)     DEFAULT NULL,

    PRIMARY KEY (`id`),
    FOREIGN KEY client_key(`client_id`) REFERENCES clients(`id`)
) ENGINE = InnoDB
  DEFAULT CHARSET = utf8mb4;

CREATE TABLE IF NOT EXISTS `dependents`
(
    `id`             char(36)     NOT NULL,
    `full_name`      varchar(255) NOT NULL,
    `relationship`   varchar(255) DEFAULT NULL,
    `nature`   varchar(255) DEFAULT NULL,
    `client_id`      char(36)     DEFAULT NULL,

    PRIMARY KEY (`id`),
    FOREIGN KEY client_dept_key(`client_id`) REFERENCES clients(`id`)
) ENGINE = InnoDB
  DEFAULT CHARSET = utf8mb4;


# Page 3
CREATE TABLE IF NOT EXISTS `estates`
(
    `id`             char(36)     NOT NULL,
    `address`      varchar(255) NOT NULL,
    `owner`   varchar(255) DEFAULT NULL,
    `type`   varchar(255) DEFAULT NULL,
    `location`   varchar(255) DEFAULT NULL,
    `mortgage`   tinyint(1) DEFAULT 0,
    `value` decimal(9,2) DEFAULT 0,
    `client_id`      char(36)     DEFAULT NULL,

    PRIMARY KEY (`id`),
    FOREIGN KEY client_estates_key(`client_id`) REFERENCES clients(`id`)
) ENGINE = InnoDB
  DEFAULT CHARSET = utf8mb4;

CREATE TABLE IF NOT EXISTS `bankaccounts`
(
    `id`             char(36)     NOT NULL,
    `bank`      varchar(255) NOT NULL,
    `holder`   varchar(255) DEFAULT NULL,
    `type`   varchar(255) DEFAULT NULL,
    `value` decimal(11,2) DEFAULT 0,
    `client_id`      char(36)     DEFAULT NULL,

    PRIMARY KEY (`id`),
    FOREIGN KEY client_bank_key(`client_id`) REFERENCES clients(`id`)
) ENGINE = InnoDB
  DEFAULT CHARSET = utf8mb4;


CREATE TABLE IF NOT EXISTS `vehicles`
(
    `id`             char(36)     NOT NULL,
    `make`      varchar(255) NOT NULL,
    `model`   varchar(255) DEFAULT NULL,
    `year`   varchar(255) DEFAULT NULL,
    `client_id`      char(36)     DEFAULT NULL,

    PRIMARY KEY (`id`),
    FOREIGN KEY client_vehicles_key(`client_id`) REFERENCES clients(`id`)
) ENGINE = InnoDB
  DEFAULT CHARSET = utf8mb4;


CREATE TABLE IF NOT EXISTS `investments`
(
    `id`             char(36)     NOT NULL,
    `type`      varchar(255) NOT NULL,
    `held`   varchar(255) DEFAULT NULL,
    `value`   decimal(11,2) DEFAULT 0,
    `client_id`      char(36)     DEFAULT NULL,

    PRIMARY KEY (`id`),
    FOREIGN KEY client_investments_key(`client_id`) REFERENCES clients(`id`)
) ENGINE = InnoDB
  DEFAULT CHARSET = utf8mb4;


CREATE TABLE IF NOT EXISTS `superannuations`
(
    `id`             char(36)     NOT NULL,
    `fund`       decimal(11,2) NOT NULL,
    `value`   decimal(11,2) DEFAULT 0,
    `nomination`   varchar(255) DEFAULT NULL,
    `binding` varchar(10) DEFAULT NULL,
    `client_id`      char(36)     DEFAULT NULL,

    PRIMARY KEY (`id`),
    FOREIGN KEY client_sperannuations_key(`client_id`) REFERENCES clients(`id`)
) ENGINE = InnoDB
  DEFAULT CHARSET = utf8mb4;
