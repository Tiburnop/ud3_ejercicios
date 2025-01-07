Entrega: Se debe entregar únicamente la URL de proyecto de GitHub mediante el Moodle de la escuela (igformacion.online) en la tarea asociada antes de finalizar el plazo de entrega. El usuario de Github jpaniorte debe tener permisos para clonar el repositorio. Si corresponde, responde a las preguntas en el README.md de la raíz del proyecto.


Ejecuta el comando php artisan config:clear para limpiar y cachear la configuración de Laravel.
Ejecuta el comando php artisan migrate para crear las tablas por defecto definidas en la carpeta database/migrations
Muestra las tablas:
docker exec -it mariadb-server mariadb -u root -p
USE test1;
SHOW TABLES;
¿Cuántas tablas aparecen?
Como mínimo la tabla 1 migration

php artisan migrate: Ejecuta las migraciones pendientes y actualiza la base de datos.

php artisan migrate:status: Muestra el estado de las migraciones, indicando cuáles se han ejecutado y cuáles no.

php artisan migrate:rollback: Revierte la última migración ejecutada.

php artisan migrate:reset: Revierte todas las migraciones ejecutadas, deshaciendo todos los cambios.

php artisan migrate:refresh: Revierte todas las migraciones y luego las vuelve a ejecutar.

php artisan make:migration: Crea un nuevo archivo de migración para definir cambios en la base de datos.

php artisan migrate --seed: Ejecuta las migraciones y luego ejecuta los seeders para poblar la base de datos con datos iniciales.