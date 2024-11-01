CREATE DATABASE bienesraices;
CREATE TABLE seller (
    id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(32) NOT NULL,
    email VARCHAR(32) NOT NULL,
    phone VARCHAR(10),
    PRIMARY KEY (id)
);
CREATE TABLE property (
    id INT NOT NULL AUTO_INCREMENT,
    title VARCHAR(64) NOT NULL,
    price DECIMAL(10,0) NOT NULL,
    image VARCHAR(128),
    description LONGTEXT,
    rooms INT,
    wc INT,
    garage INT,
    timeslamp DATE,
    id_seller INT NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (id_seller) REFERENCES seller(id)
);