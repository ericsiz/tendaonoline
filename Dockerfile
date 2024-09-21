# Utilizar la imagen oficial de PHP con Apache
FROM php:8.3-apache

# Instalar extensiones necesarias para MySQL
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copiar el código de la aplicación al directorio raíz de Apache
COPY php/ /var/www/html/

# Dar permisos necesarios al directorio de Apache
RUN chown -R www-data:www-data /var/www/html/