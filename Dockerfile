# Gunakan image PHP + Apache
FROM php:apache

# Aktifkan modul PHP
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Salin semua file proyek ke dalam container
COPY . /var/www/html/

# Buat folder uploads & beri izin tulis
RUN mkdir -p /var/www/html/uploads && chmod -R 777 /var/www/html/uploads
