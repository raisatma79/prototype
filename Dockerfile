# Menggunakan PHP 8.4 dengan Apache
FROM php:8.4-apache

# Install sistem pendukung
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libzip-dev \
    zip \
    unzip \
    git

# Install PHP extensions yang dibutuhkan Laravel
RUN docker-php-ext-install pdo_mysql bcmath gd zip

# --- BAGIAN PERBAIKAN ERROR MPM ---
# Matikan modul event/worker yang bentrok, dan biarkan prefork berjalan
RUN a2dismod mpm_event mpm_worker || true
RUN a2enmod mpm_prefork
# ----------------------------------

# Aktifkan mod_rewrite Apache
RUN a2enmod rewrite

# Setup folder root Apache
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf

# Salin semua file dari repository
COPY . .

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
RUN composer install --no-dev --optimize-autoloader

# Atur izin kepemilikan folder
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache