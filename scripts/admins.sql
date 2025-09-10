SHOW DATABASES;

CREATE TABLE admins (
adminID      INT(11)      NOT NULL   AUTO_INCREMENT,
emailAddress VARCHAR(255) NOT NULL   UNIQUE,
password     CHAR(64)     NOT NULL,
firstName    VARCHAR(60)  NOT NULL,
lastName     VARCHAR(60)  NOT NULL,
PRIMARY KEY (adminID)
);

SHOW TABLES;

SHOW CREATE TABLE admins;

DESCRIBE admins;

INSERT INTO admins
(emailAddress, password, firstName, lastName)
VALUES
('cjf47@njit.edu', SHA2('Njit2025!fuse', 256), 'Ceasar', 'Flores');