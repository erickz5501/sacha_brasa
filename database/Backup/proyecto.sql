-- MySQL Script generated by MySQL Workbench
-- Tue Jan 25 10:35:44 2022
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`tipo_cliente`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`tipo_cliente` (
  `id` INT NOT NULL,
  `nombre` VARCHAR(30) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`cliente`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`cliente` (
  `id` INT NOT NULL,
  `nombre` VARCHAR(255) NULL,
  `direccion` VARCHAR(250) NULL,
  `celular` VARCHAR(10) NULL,
  `dni` VARCHAR(8) NULL,
  `ruc` VARCHAR(11) NULL,
  `estado` VARCHAR(1) NULL DEFAULT '1',
  `tipo_cliente_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_cliente_tipo_cliente1_idx` (`tipo_cliente_id` ASC) VISIBLE,
  CONSTRAINT `fk_cliente_tipo_cliente1`
    FOREIGN KEY (`tipo_cliente_id`)
    REFERENCES `mydb`.`tipo_cliente` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`categoria`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`categoria` (
  `id` INT NOT NULL,
  `nombre` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`productos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`productos` (
  `id` INT NOT NULL,
  `nombre` VARCHAR(250) NOT NULL,
  `descripcion` VARCHAR(250) NULL,
  `stock` INT NULL,
  `alerta` INT NULL,
  `precio` DECIMAL NULL,
  `categoria_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_productos_categoria_idx` (`categoria_id` ASC) VISIBLE,
  CONSTRAINT `fk_productos_categoria`
    FOREIGN KEY (`categoria_id`)
    REFERENCES `mydb`.`categoria` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`usuarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`usuarios` (
  `id` INT NOT NULL,
  `nombre` VARCHAR(90) NOT NULL,
  `apellidos` VARCHAR(150) NOT NULL,
  `celular` VARCHAR(9) NOT NULL,
  `direccion` VARCHAR(150) NOT NULL,
  `user` VARCHAR(50) NOT NULL,
  `password` VARCHAR(100) NOT NULL,
  `estado` VARCHAR(1) NULL DEFAULT '1',
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`ventas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`ventas` (
  `id` INT NOT NULL,
  `total_venta` DECIMAL NULL,
  `change` DECIMAL NULL,
  `cantidad` INT NULL,
  `cash` DECIMAL NULL,
  `nro_mesa` VARCHAR(20) NULL,
  `estado` ENUM('PENDIENTE', 'PAGADO', 'ENTREGADO') NULL DEFAULT 'PAGADO',
  `usuarios_id` INT NOT NULL,
  `cliente_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_ventas_usuarios1_idx` (`usuarios_id` ASC) VISIBLE,
  INDEX `fk_ventas_cliente1_idx` (`cliente_id` ASC) VISIBLE,
  CONSTRAINT `fk_ventas_usuarios1`
    FOREIGN KEY (`usuarios_id`)
    REFERENCES `mydb`.`usuarios` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_ventas_cliente1`
    FOREIGN KEY (`cliente_id`)
    REFERENCES `mydb`.`cliente` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`detalle_venta`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`detalle_venta` (
  `id` INT NOT NULL,
  `precio_venta` DECIMAL NULL,
  `cantidad` INT NULL,
  `ventas_id` INT NOT NULL,
  `productos_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_detalle_venta_ventas1_idx` (`ventas_id` ASC) VISIBLE,
  INDEX `fk_detalle_venta_productos1_idx` (`productos_id` ASC) VISIBLE,
  CONSTRAINT `fk_detalle_venta_ventas1`
    FOREIGN KEY (`ventas_id`)
    REFERENCES `mydb`.`ventas` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_detalle_venta_productos1`
    FOREIGN KEY (`productos_id`)
    REFERENCES `mydb`.`productos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;