CREATE SCHEMA `infopersonal` ;
CREATE TABLE `infopersonal`.`cat_sexo` (
  `id_sexo` INT NOT NULL AUTO_INCREMENT,
  `sexo` VARCHAR(45) NULL,
  PRIMARY KEY (`id_sexo`));
CREATE TABLE `infopersonal`.`t_infopersonal` (
  `id_infoPersonal` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NULL,
  `aPaterno` VARCHAR(45) NULL,
  `aMaterno` VARCHAR(45) NULL,
  `Matricula` INT(20) NULL,
  `edad` INT NULL DEFAULT NULL,
  `especialidad` VARCHAR(45) NULL,
  `sexo` VARCHAR(45) NULL,
  `Archivo` VARCHAR(45) NULL,
  PRIMARY KEY (`id_infoPersonal`));
INSERT INTO `infopersonal`.`cat_sexo` (`sexo`) VALUES ('Masculino');
INSERT INTO `infopersonal`.`cat_sexo` (`sexo`) VALUES ('Fememino');
INSERT INTO `infopersonal`.`t_infopersonal` (`nombre`, `aPaterno`, `aMaterno`, `Matricula`, `edad`, `especialidad`, `sexo`, `Archivo`) VALUES ('Jose Alberto', 'Velazquez', 'Nava', '191190060', '20', 'Desarrollo de Paginas Web', 'Masculino', 'img');
