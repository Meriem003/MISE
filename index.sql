CREATE DATABASE users;

CREATE TABLE role(
id_role int PRIMARY KEY AUTO_INCREMENT,
name varchar(50)
);

CREATE TABLE users(
id int PRIMARY KEY AUTO_INCREMENT,
name varchar(50) not null,
email varchar(50),
id_role int,
FOREIGN KEY (id_role) REFERENCES role(id_role) 
);

INSERT INTO role(name)
VALUES
('admin'),
('user');