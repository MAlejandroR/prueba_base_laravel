### Traducir nombres de las columnas

1.- Crear los ficheros de traduccion (alumnos)
lang.es.alumno.php
![labels alumnos ](./../lang/es/alumnos.php)
2.- Crear el método getLabels en cada modelo

![getLables en modelo](./../app/Http/models/alumno.php)

3.- En el controlador retornar el contenido del método del model 
* Esta es la parte menos intuitiva
* Detenerse aquí a analizar esto
* Ver el index
![controlador](./../app/Http/Controllers/AlumnoController.php)

4.- En la vista ya se procede normal
El controlador pasa un array con los labels traducidos

![vista](./../resources/views/alumnos/listado.blade.php)
