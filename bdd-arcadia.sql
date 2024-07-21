CREATE SCHEMA `vetenary`;

CREATE SCHEMA `animal`;

CREATE SCHEMA `testimony`;

CREATE TABLE `admin` (
  `admin_id` integer PRIMARY KEY,
  `email` varchar(254) UNIQUE, NOT NULL
  `password` varchar(255)NOT NULL
);

CREATE TABLE `employee` (
  `employee_id` integer PRIMARY KEY,
  `username` varchar(255), NOT NULL
  `password` varchar(255) NOT NULL
);

CREATE TABLE `vetenary` (
  `vetenary_id` integer PRIMARY KEY,
  `username` varchar(255), NOT NULL
  `password` varchar(255) NOT NULL
);

CREATE TABLE `animal` (
  `id` int PRIMARY KEY,
  `name` varchar(255), 
  `race` varchar(255), 
  `linving_space` varchar(255)
);

CREATE TABLE `services` (
  `id` int PRIMARY KEY,
  `name` varchar(255),
  `description` varchar(500)
);

CREATE TABLE `schedules` (
  `id` int PRIMARY KEY,
  `date` varchar(191),
  `hour` date
);

CREATE TABLE `vetenary`.`report` (
  `id` int PRIMARY KEY,
  `animal_condition` varchar(255),
  `food` varchar(255),
  `quantity_food` int(50),
  `date` timestamp,
  `animal_condition_description` text(500)
);

CREATE TABLE `animal`.`space` (
  `id` int PRIMARY KEY,
  `name` varchar(255),
  `space_description` text(500)
);

CREATE TABLE `testimony`.`client` (
  `testimony_id` int PRIMARY KEY,
  `name` varchar(255),
  `comment` varchar(500),
  `date` timestamp
);

ALTER TABLE `admin` ADD FOREIGN KEY (`admin_id`) REFERENCES `employee` (`employee_id`);

ALTER TABLE `admin` ADD FOREIGN KEY (`admin_id`) REFERENCES `vetenary` (`vetenary_id`);

ALTER TABLE `admin` ADD FOREIGN KEY (`admin_id`) REFERENCES `schedules` (`id`);

ALTER TABLE `admin` ADD FOREIGN KEY (`admin_id`) REFERENCES `services` (`id`);

ALTER TABLE `admin` ADD FOREIGN KEY (`admin_id`) REFERENCES `animal`.`space` (`id`);

ALTER TABLE `admin` ADD FOREIGN KEY (`admin_id`) REFERENCES `animal` (`id`);

ALTER TABLE `employee` ADD FOREIGN KEY (`employee_id`) REFERENCES `testimony`.`client` (`testimony_id`);

ALTER TABLE `employee` ADD FOREIGN KEY (`employee_id`) REFERENCES `services` (`id`);

ALTER TABLE `employee` ADD FOREIGN KEY (`employee_id`) REFERENCES `vetenary`.`report` (`id`);

ALTER TABLE `vetenary` ADD FOREIGN KEY (`vetenary_id`) REFERENCES `vetenary`.`report` (`id`);

ALTER TABLE `animal`.`space` ADD FOREIGN KEY (`space_description`) REFERENCES `animal` (`name`);
