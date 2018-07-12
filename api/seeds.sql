DROP DATABASE IF EXISTS todolist;

CREATE DATABASE todolist;

USE todolist;

CREATE TABLE todos (
  id INT NOT NULL AUTO_INCREMENT,
  task VARCHAR(45) NULL,
PRIMARY KEY (id)
);

INSERT INTO todos (task)
VALUES ("learn php"),("finish packing"),("clean apartment");



