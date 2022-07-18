CREATE DATABASE my_db;

USE my_db;

CREATE TABLE users (
    id int UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    email varchar(255) NOT NULL,
    full_name varchar(255) NOT NULL,
    is_active boolean DEFAULT 0 NOT NULL,
    created_at datetime NOT NULL,
    KEY `is_active`(`is_active`),
    UNIQUE KEY `email`(`email`)
);

CREATE TABLE invoices (
    id int UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    amount decimal(10,4),
    user_id int UNSIGNED,
    FOREIGN KEY (user_id) REFERENCES users(id)
        ON DELETE SET NULL
        ON UPDATE CASCADE
);

INSERT INTO users (email, full_name, is_active, created_at)
    VALUES  ('one@email.com', 'John One', 1, NOW()),
            ('two@email.com', 'John Two', 1, NOW()),
            ('three@email.com', 'John Three', 1, NOW());
