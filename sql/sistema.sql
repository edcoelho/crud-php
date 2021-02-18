CREATE DATABASE sistema CHARACTER SET utf8 COLLATE utf8_general_ci;
USE sistema;
CREATE TABLE usuarios (
	login varchar(50) NOT NULL,
	email varchar(100) NOT NULL PRIMARY KEY,
	senha varchar(64) NOT NULL
);
CREATE TABLE admins(
	usuario VARCHAR(50) PRIMARY KEY NOT NULL,
	senha VARCHAR(64) NOT NULL
);
