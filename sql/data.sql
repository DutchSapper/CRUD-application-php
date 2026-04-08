-- data.sql fills the database with demo articles.

-- database is created for sharing the database with other people.
CREATE DATABASE IF NOT EXISTS crud_articles;

-- The right database is selected.
USE crud_articles;

-- Table is created if it does not exist.
CREATE TABLE IF NOT EXISTS articles (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    price DECIMAL(5,2)
);

-- Demo-data is created
INSERT INTO articles (name, price) VALUES
('Milk', '1.50'),
('Bread', '2.50'),
('Eggs', '2.00'),
('Cheese', '8.00'),
('Butter','5.00');