CREATE DATABASE colorfy;

CREATE TABLE `colorfy`.`clientes` (
  `idclientes` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  `email` VARCHAR(110) NOT NULL,
  `telefone` VARCHAR(15) NOT NULL,
  `senha` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`idclientes`));