-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le: mar. Jan 24 2023 at 09:45
-- Server version: 10.4.27-MariaDB
--PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base documents: article
--

-------------------------------------------------- --------

--
-- Structure of the admin table
--
-- Drop the 'admin' table if it exists
DROP TABLE IF EXISTS admin;

-- Create the 'admin' table if it does not exist
CREATE TABLE IF NOT EXISTS admin (
    id int(44) NOT NULL AUTO_INCREMENT,
    first_name varchar(111) NOT NULL,
    last_name varchar(111) NOT NULL,
    email varchar(255) NOT NULL,
    password varchar(255) NOT NULL,
    PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Insert data into the 'admin' table
INSERT INTO `admin` (`id`, `first_name`, `last_name`, `email`, `password`) VALUES
(2, 'Prince', 'Evance', 'evans@gmail.com', '12345678');

-- Create the 'category' table
CREATE TABLE IF NOT EXISTS category (
    id int(11) NOT NULL AUTO_INCREMENT,
    name varchar(255) DEFAULT NULL,
    PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Insert data into the 'category' table
INSERT INTO category (id, name) VALUES
(1, 'AI_'),
(2, 'security'),
(3, 'dev');

-- Create the 'post' table
CREATE TABLE IF NOT EXISTS post (
    id int(11) NOT NULL AUTO_INCREMENT,
    image varchar(255) DEFAULT NULL,
    category int(11) DEFAULT NULL,
    title varchar(255) DEFAULT NULL,
    description varchar(255) DEFAULT NULL,
    PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Insert data into the 'post' table
INSERT INTO post (id, image, category, title, description) VALUES
(1, '', 1, NULL, '<p>this is paragraph</p>\r\n'),
(2, '', 1, 'test', '<p>est</p>\r\n'),
(3, '', 3, 'development', '<p>test is here&nbsp;</p>\r\n'),
(4, '', 0, '2', '<p>test apple</p>\r\n');

--
-- Index for downloaded tables
--

--
-- Index for table admin
--
ALTER TABLE admin
    ADD PRIMARY KEY (id);

--
-- Index for table category
--
ALTER TABLE category
    ADD PRIMARY KEY (id);

--
-- Index for table post
--
ALTER TABLE post
    ADD PRIMARY KEY (id);

--
-- AUTO_INCREMENT for downloaded tables
--

--
-- AUTO_INCREMENT for table admin
--
ALTER TABLE admin
    MODIFY id int(44) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour table category
--
ALTER TABLE category
    MODIFY id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour table post
--
ALTER TABLE post
    MODIFY id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;