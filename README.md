Links

git
https://github.com/ntrijullo/api2

postman
https://documenter.getpostman.com/view/9501887/2s93RMVvWE


Querys

Creacion de Tabla (aunque la cree con una migracion)

CREATE TABLE `estudiantes` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(40) NOT NULL,
  `apellido` varchar(40) NOT NULL,
  `rut` varchar(12) NOT NULL,
  `edad` int(11) NOT NULL,
  `carrera` varchar(60) NOT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



Insert data a tabla

INSERT INTO api.estudiantes
(nombre, apellido, rut, edad, carrera)
VALUES('Carlos', 'Valenzuela', '25413512-2', 26, 'Medicina'),
('Felipe', 'Molina', '24321980-K', 25, 'Medicina'),
('Claudia', 'Vidal', '26870549-5', 24, 'Ingeniería informática'),
('Ana', 'Perez', '22765394-4', 27, 'Ingeniería Electrónica'),
('Agustín', 'Gonzalez', '23145622-3', 29, 'Ingeniería Civil'),
('Esteban', 'Rodríguez', '24909807-5', 24, 'Medicina'),
('Daniel', 'Neira', '25300255-K', 26, 'Medicina'),
('Sofia', 'Blanco', '26406650-1', 25, 'Psicología');


Se realizo con ORM pero adjunto query alumnos medicina
Select *
from estudiantes
where carrera = 'medicina';
