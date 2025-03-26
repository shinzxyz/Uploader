# Gunakan image PHP + Apache
FROM php:apache

# Aktifkan modul PHP yang dibutuhkan
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Salin semua file proyek ke dalam container
COPY . /var/www/html/

# Beri izin agar folder uploads bisa ditulis
RUN chmod -R 777 /var/www/html/uploads
