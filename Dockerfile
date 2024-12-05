# Usa una imagen base de PHP con Apache
FROM php:8.1-apache

# Copia los archivos de tu proyecto al contenedor
COPY . /var/www/html/

# Da permisos a los archivos del proyecto
RUN chmod -R 755 /var/www/html/

# Expone el puerto para Render
EXPOSE 80