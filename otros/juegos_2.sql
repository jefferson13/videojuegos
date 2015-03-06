#  Creado con Kata Kuntur - Modelador de Datos
#  Versión: 2.5.2
#  Sitio Web: http://katakuntur.jeanmazuelos.com/
#  Si usted encuentra algún error le agradeceriamos lo reporte en:
#  http://pm.jeanmazuelos.com/katakuntur/issues/new

#  Administrador de Base de Datos: MySQL/MariaDB
#  Diagrama: juegos
#  Autor: Jefferson
#  Fecha y hora: 04/03/2015 21:52:42

# GENERANDO TABLAS
CREATE TABLE `Juego` (
	`imagen` LONGBLOB NOT NULL,
	`nombre` VARCHAR(80) NOT NULL,
	`descripcion` VARCHAR(100) NOT NULL,
	`plataforma` VARCHAR(100) NOT NULL,
	`cantidad` INTEGER NOT NULL,
	`precio` DOUBLE NOT NULL,
	`administrador_cedula` INTEGER NOT NULL,
	KEY(`administrador_cedula`),
	`categorias_nombre` VARCHAR(50) NOT NULL,
	KEY(`categorias_nombre`),
	PRIMARY KEY(`nombre`)
) ENGINE=INNODB;
CREATE TABLE `Alquiler` (
	`id_alquiler` INTEGER NOT NULL,
	`fecha_inicio` DATE NOT NULL,
	`fecha_vencimiento` DATE NOT NULL,
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
CREATE TABLE `Categorias` (
	`id_categoria` INTEGER NOT NULL,
	`nombre` VARCHAR(50) NOT NULL,
	PRIMARY KEY(`nombre`)
) ENGINE=INNODB;
CREATE TABLE `Administrador` (
	`nombre` VARCHAR(50) NOT NULL,
	`cedula` INTEGER NOT NULL,
	`telefono` VARCHAR(10) NOT NULL,
	PRIMARY KEY(`cedula`)
) ENGINE=INNODB;

# GENERANDO RELACIONES
ALTER TABLE `Juego` ADD CONSTRAINT `juego_administrador_administrador_cedula` FOREIGN KEY (`administrador_cedula`) REFERENCES `Administrador`(`cedula`) ON DELETE NO ACTION ON UPDATE CASCADE;
ALTER TABLE `Juego` ADD CONSTRAINT `juego_categorias_categorias_nombre` FOREIGN KEY (`categorias_nombre`) REFERENCES `Categorias`(`nombre`) ON DELETE NO ACTION ON UPDATE CASCADE;
ALTER TABLE `Alquiler` ADD CONSTRAINT `alquiler_juego_juego_nombre` FOREIGN KEY (`juego_nombre`) REFERENCES `Juego`(`nombre`) ON DELETE NO ACTION ON UPDATE CASCADE;
ALTER TABLE `Alquiler` ADD CONSTRAINT `alquiler_cliente_cliente_cedula` FOREIGN KEY (`cliente_cedula`) REFERENCES `Cliente`(`cedula`) ON DELETE NO ACTION ON UPDATE CASCADE;