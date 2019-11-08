CREATE TABLE `Usuarios` (
	`id_usuario` INT(25) NOT NULL AUTO_INCREMENT,
	`nombre` varchar(45) NOT NULL,
	`apellido` varchar(45) NOT NULL,
	`correo` varchar(45) NOT NULL,
	`correo` varchar(45) NOT NULL,
	PRIMARY KEY (`id_usuario`)
);

CREATE TABLE `Gastos` (
	`id_usuario` INT NOT NULL,
	`id_gasto` INT(25) NOT NULL AUTO_INCREMENT,
	`categoria` varchar(25) NOT NULL,
	`referencia` varchar(30) NOT NULL,
	`valor` INT(12) NOT NULL,
	`descripcion` TEXT(50) NOT NULL,
	`fecha_factura` DATE(10) NOT NULL,
	`tipo_gasto` varchar(25) NOT NULL,
	PRIMARY KEY (`id_gasto`)
);

CREATE TABLE `Ingresos` (
	`id_usuario` INT(25) NOT NULL,
	`id_ingresos` INT(25) NOT NULL AUTO_INCREMENT,
	`categoria` varchar(25) NOT NULL,
	`banco` TEXT(45) NOT NULL,
	`valor` INT(12) NOT NULL,
	`descripcion` TEXT(50) NOT NULL,
	`fecha_consignacion` DATE(10) NOT NULL,
	`tipo_ingreso` varchar(25) NOT NULL,
	PRIMARY KEY (`id_ingresos`)
);

CREATE TABLE `categoria` (
	`id_usuario` INT(25) NOT NULL,
	`id_categoria` INT(25) NOT NULL AUTO_INCREMENT,
	`nombre_categoria` INT(25) NOT NULL,
	`total_categoria` INT(25) NOT NULL,
	PRIMARY KEY (`id_categoria`)
);

CREATE TABLE `Estadistica` (
	`id_usuario` INT(25) NOT NULL,
	`id_gasto` INT(25) NOT NULL,
	`id_ingresos` INT(25) NOT NULL,
	`total_gastos` INT(25) NOT NULL,
	`total_ingresos` INT(25) NOT NULL
);

ALTER TABLE `Gastos` ADD CONSTRAINT `Gastos_fk0` FOREIGN KEY (`id_usuario`) REFERENCES `Usuarios`(`id_usuario`);

ALTER TABLE `Ingresos` ADD CONSTRAINT `Ingresos_fk0` FOREIGN KEY (`id_usuario`) REFERENCES `Usuarios`(`id_usuario`);

ALTER TABLE `categoria` ADD CONSTRAINT `categoria_fk0` FOREIGN KEY (`id_usuario`) REFERENCES `Usuarios`(`id_usuario`);

ALTER TABLE `Estadistica` ADD CONSTRAINT `Estadistica_fk0` FOREIGN KEY (`id_usuario`) REFERENCES `Usuarios`(`id_usuario`);

ALTER TABLE `Estadistica` ADD CONSTRAINT `Estadistica_fk1` FOREIGN KEY (`id_gasto`) REFERENCES `Gastos`(`id_gasto`);

ALTER TABLE `Estadistica` ADD CONSTRAINT `Estadistica_fk2` FOREIGN KEY (`id_ingresos`) REFERENCES `Ingresos`(`id_ingresos`);

