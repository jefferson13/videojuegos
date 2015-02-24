#  Creado con Kata Kuntur - Modelador de Datos
#  Versión: 2.5.2
#  Sitio Web: http://katakuntur.jeanmazuelos.com/
#  Si usted encuentra algún error le agradeceriamos lo reporte en:
#  http://pm.jeanmazuelos.com/katakuntur/issues/new

#  Administrador de Base de Datos: MySQL/MariaDB
#  Diagrama: juegos
#  Autor: Jefferson
#  Fecha y hora: 24/02/2015 15:47:11

# GENERANDO TABLAS
CREATE TABLE `Juego` (
	`id_juego` INTEGER NOT NULL,
	`nombre` VARCHAR(80) NOT NULL,
	`descripcion` VARCHAR(100) NOT NULL,
	`imagen` LONGBLOB NOT NULL,
	`cantidad` INTEGER NOT NULL,
	PRIMARY KEY(`id_juego`)
) ENGINE=INNODB;
CREATE TABLE `Alquiler` (
	`id_alquiler` INTEGER NOT NULL,
	`fecha_alquiler` DATE NOT NULL,
	`precio` DOUBLE NOT NULL,
	`juego_id_juego` INTEGER NOT NULL,
	KEY(`juego_id_juego`),
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
ALTER TABLE `Alquiler` ADD CONSTRAINT `alquiler_juego_juego_id_juego` FOREIGN KEY (`juego_id_juego`) REFERENCES `Juego`(`id_juego`) ON DELETE NO ACTION ON UPDATE CASCADE;
ALTER TABLE `Alquiler` ADD CONSTRAINT `alquiler_cliente_cliente_cedula` FOREIGN KEY (`cliente_cedula`) REFERENCES `Cliente`(`cedula`) ON DELETE NO ACTION ON UPDATE CASCADE;