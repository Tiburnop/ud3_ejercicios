# Usar la imagen oficial de MariaDB
FROM mariadb:latest

# Configurar las variables de entorno para el contenedor
ENV MARIADB_ROOT_PASSWORD=mi_contraseña_secreta
ENV MARIADB_DATABASE=gestion_notas
ENV MARIADB_USER=ig
ENV MARIADB_PASSWORD=mi_contraseña_secreta

# Exponer el puerto 3306 para MariaDB
EXPOSE 3306

