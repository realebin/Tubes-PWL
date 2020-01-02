-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema Restaurant
-- -----------------------------------------------------
DROP DATABASE IF EXISTS `Restaurant` ;

-- -----------------------------------------------------
-- Schema Restaurant
-- -----------------------------------------------------
CREATE DATABASE IF NOT EXISTS `Restaurant` DEFAULT CHARACTER SET utf8 ;
USE `Restaurant` ;

-- -----------------------------------------------------
-- Table `Restaurant`.`Menu`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Restaurant`.`Menu` (
  `idMenu` INT NOT NULL AUTO_INCREMENT,
  `nama` VARCHAR(45) NOT NULL,
  `harga` DOUBLE NOT NULL,
  `status` TINYINT NOT NULL,
  PRIMARY KEY (`idMenu`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Restaurant`.`Kategori`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Restaurant`.`Kategori` (
  `idKategori` INT NOT NULL AUTO_INCREMENT,
  `Menu_id` INT NOT NULL,
  PRIMARY KEY (`idKategori`, `Menu_id`),
  INDEX `fk_Kategori_Menu_idx` (`Menu_id` ASC) ,
  CONSTRAINT `fk_Kategori_Menu`
    FOREIGN KEY (`Menu_id`)
    REFERENCES `Restaurant`.`Menu` (`idMenu`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Restaurant`.`Pesanan`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Restaurant`.`Pesanan` (
  `idPesanan` INT NOT NULL AUTO_INCREMENT,
  `no_meja` INT(3) NULL,
  `sub_total` DOUBLE NOT NULL,
  `created` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idPesanan`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Restaurant`.`Pembayaran`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Restaurant`.`Pembayaran` (
  `idPembayaran` INT NOT NULL AUTO_INCREMENT,
  `metode_bayar` VARCHAR(45) NOT NULL,
  `total` DOUBLE NOT NULL,
  `created` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Pesanan_id` INT NOT NULL,
  `User_id` INT NOT NULL,
  PRIMARY KEY (`idPembayaran`, `Pesanan_id`, `User_id`),
  INDEX `fk_Pembayaran_Pesanan1_idx` (`Pesanan_id` ASC) ,
  INDEX `fk_Pembayaran_User1_idx` (`User_id` ASC) ,
  CONSTRAINT `fk_Pembayaran_Pesanan1`
    FOREIGN KEY (`Pesanan_id`)
    REFERENCES `Restaurant`.`Pesanan` (`idPesanan`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Pembayaran_User1`
    FOREIGN KEY (`User_id`)
    REFERENCES `Restaurant`.`User` (`idUser`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Restaurant`.`User`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Restaurant`.`User` (
  `idUser` INT NOT NULL AUTO_INCREMENT,
  `role` VARCHAR(45) NOT NULL,
  `nama` VARCHAR(45) NOT NULL,
  `username` VARCHAR(45) NOT NULL,
  `password` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idUser`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Restaurant`.`Pembayaran`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Restaurant`.`Pembayaran` (
  `idPembayaran` INT NOT NULL AUTO_INCREMENT,
  `metode_bayar` VARCHAR(45) NOT NULL,
  `total` DOUBLE NOT NULL,
  `created` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Pesanan_id` INT NOT NULL,
  `User_id` INT NOT NULL,
  PRIMARY KEY (`idPembayaran`, `Pesanan_id`, `User_id`),
  INDEX `fk_Pembayaran_Pesanan1_idx` (`Pesanan_id` ASC) ,
  INDEX `fk_Pembayaran_User1_idx` (`User_id` ASC) ,
  CONSTRAINT `fk_Pembayaran_Pesanan1`
    FOREIGN KEY (`Pesanan_id`)
    REFERENCES `Restaurant`.`Pesanan` (`idPesanan`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Pembayaran_User1`
    FOREIGN KEY (`User_id`)
    REFERENCES `Restaurant`.`User` (`idUser`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Restaurant`.`Menu_Pesanan`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Restaurant`.`Menu_Pesanan` (
  `Menu_id` INT NOT NULL,
  `Pesanan_id` INT NOT NULL,
  `qty` INT(4) NOT NULL,
  `harga_jual` DOUBLE NOT NULL,
  PRIMARY KEY (`Menu_id`, `Pesanan_id`),
  INDEX `fk_Menu_has_Pesanan_Pesanan1_idx` (`Pesanan_id` ASC) ,
  INDEX `fk_Menu_has_Pesanan_Menu1_idx` (`Menu_id` ASC) ,
  CONSTRAINT `fk_Menu_has_Pesanan_Menu1`
    FOREIGN KEY (`Menu_id`)
    REFERENCES `Restaurant`.`Menu` (`idMenu`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Menu_has_Pesanan_Pesanan1`
    FOREIGN KEY (`Pesanan_id`)
    REFERENCES `Restaurant`.`Pesanan` (`idPesanan`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;



