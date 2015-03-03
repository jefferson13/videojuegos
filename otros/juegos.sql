#  Creado con Kata Kuntur - Modelador de Datos
#  Versión: 2.5.2
#  Sitio Web: http://katakuntur.jeanmazuelos.com/
#  Si usted encuentra algún error le agradeceriamos lo reporte en:
#  http://pm.jeanmazuelos.com/katakuntur/issues/new

#  Administrador de Base de Datos: MySQL/MariaDB
#  Diagrama: juegos
#  Autor: Jefferson
#  Fecha y hora: 25/02/2015 7:56:03

# GENERANDO TABLAS
CREATE TABLE `Juego` (
	`imagen` LONGBLOB NOT NULL,
	`nombre` VARCHAR(80) NOT NULL,
	`descripcion` VARCHAR(100) NOT NULL,
	`plataforma` VARCHAR(100) NOT NULL,
	`cantidad` INTEGER NOT NULL,
	PRIMARY KEY(`nombre`)
) ENGINE=INNODB;
CREATE TABLE `Alquiler` (
	`id_alquiler` INTEGER NOT NULL,
	`fecha_alquiler` DATE NOT NULL,
	`precio` DOUBLE NOT NULL,
	`juego_nombre` VARCHAR(80) NOT NULL,
	KEY(`juego_nombre`),
	`cliente_cedula` INTEGER NOT NULL,
	KEY(`cliente_cedula`),
	PRIMARY KEY(`id_alquiler`)
) ENGINE=INNODB;
CREATE TABLE `Cliente` (
	`nombre` VARCHAR(80) NOT NULL,
	`cedula` INTEGER NOT NULL,
	`telefono` INTEGER NOT NULL,
	PRIMARY KEY(`cedula`)
) ENGINE=INNODB;

# GENERANDO RELACIONES
ALTER TABLE `Alquiler` ADD CONSTRAINT `alquiler_juego_juego_nombre` FOREIGN KEY (`juego_nombre`) REFERENCES `Juego`(`nombre`) ON DELETE NO ACTION ON UPDATE CASCADE;
ALTER TABLE `Alquiler` ADD CONSTRAINT `alquiler_cliente_cliente_cedula` FOREIGN KEY (`cliente_cedula`) REFERENCES `Cliente`(`cedula`) ON DELETE NO ACTION ON UPDATE CASCADE;