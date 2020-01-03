-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema restaurant
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `restaurant` ;

-- -----------------------------------------------------
-- Schema restaurant
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `restaurant` DEFAULT CHARACTER SET utf8 ;
USE `restaurant` ;

-- -----------------------------------------------------
-- Table `restaurant`.`kategori`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `restaurant`.`kategori` (
  `idKategori` INT(11) NOT NULL AUTO_INCREMENT,
  `nama` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`idKategori`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `restaurant`.`menu`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `restaurant`.`menu` (
  `idMenu` INT(11) NOT NULL AUTO_INCREMENT,
  `nama` VARCHAR(45) NOT NULL,
  `harga` DOUBLE NOT NULL,
  `status` TINYINT(4) NOT NULL,
  `kategori_idKategori` INT(11) NOT NULL,
  PRIMARY KEY (`idMenu`),
  INDEX `fk_menu_kategori1_idx` (`kategori_idKategori` ASC) ,
  CONSTRAINT `fk_menu_kategori1`
    FOREIGN KEY (`kategori_idKategori`)
    REFERENCES `restaurant`.`kategori` (`idKategori`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `restaurant`.`user`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `restaurant`.`user` (
  `idUser` INT(11) NOT NULL AUTO_INCREMENT,
  `role` VARCHAR(45) NOT NULL,
  `nama` VARCHAR(45) NOT NULL,
  `username` VARCHAR(45) NOT NULL,
  `password` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idUser`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `restaurant`.`pesanan`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `restaurant`.`pesanan` (
  `idPesanan` INT(11) NOT NULL AUTO_INCREMENT,
  `no_meja` INT(3) NULL DEFAULT NULL,
  `sub_total` DOUBLE NOT NULL,
  `created` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idPesanan`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `restaurant`.`menu_pesanan`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `restaurant`.`menu_pesanan` (
  `pesanan_id` INT(11) NOT NULL,
  `menu_id` INT(11) NOT NULL,
  `qty` INT(4) NOT NULL,
  `harga_jual` DOUBLE NOT NULL,
  `status` TINYINT(1) NOT NULL,
  PRIMARY KEY (`pesanan_id`, `menu_id`),
  INDEX `fk_pesanan_has_menu_menu1_idx` (`menu_id` ASC) ,
  INDEX `fk_pesanan_has_menu_pesanan1_idx` (`pesanan_id` ASC) ,
  CONSTRAINT `fk_pesanan_has_menu_pesanan1`
    FOREIGN KEY (`pesanan_id`)
    REFERENCES `restaurant`.`pesanan` (`idPesanan`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_pesanan_has_menu_menu1`
    FOREIGN KEY (`menu_id`)
    REFERENCES `restaurant`.`menu` (`idMenu`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `restaurant`.`pembayaran`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `restaurant`.`pembayaran` (
  `idPembayaran` INT(11) NOT NULL AUTO_INCREMENT,
  `metode_bayar` VARCHAR(45) NOT NULL,
  `total` DOUBLE NOT NULL,
  `created` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` INT(11) NOT NULL,
  `pesanan_id` INT(11) NOT NULL,
  `menu_id` INT(11) NOT NULL,
  PRIMARY KEY USING BTREE (`idPembayaran`),
  INDEX `fk_pembayaran_user1_idx` (`user_id` ASC) ,
  INDEX `fk_pembayaran_menu_pesanan1_idx` (`pesanan_id` ASC, `menu_id` ASC) ,
  CONSTRAINT `fk_pembayaran_user1`
    FOREIGN KEY (`user_id`)
    REFERENCES `restaurant`.`user` (`idUser`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_pembayaran_menu_pesanan1`
    FOREIGN KEY (`pesanan_id` , `menu_id`)
    REFERENCES `restaurant`.`menu_pesanan` (`pesanan_id` , `menu_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
