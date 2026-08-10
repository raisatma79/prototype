# Menggunakan PHP 8.4 dengan Apache
FROM php:8.4-apache

# 1. Install sistem pendukung dan Node.js (untuk Vite)
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libzip-dev \
    zip \
    unzip \
    git \
    curl \
    && curl -fsSL https://deb.nodesource.com/setup_20.x | bash - \
    && apt-get install -y nodejs

# 2. Install PHP extensions yang dibutuhkan Laravel
RUN docker-php-ext-install pdo_mysql bcmath gd zip

# 3. Aktifkan mod_rewrite Apache
RUN a2enmod rewrite

# 4. Setup folder root Apache
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf

# 5. Salin semua file dari repository
COPY . .

# 6. Install Composer (Backend)
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
RUN composer install --no-dev --optimize-autoloader

# 7. Install NPM dan Build Vite (Frontend - INI YANG BARU)
RUN npm install
RUN npm run build

# 8. Atur izin kepemilikan folder
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# 9. Matikan mesin yang bentrok TEPAT saat server menyala
CMD sh -c "php artisan storage:link --force && a2dismod mpm_event mpm_worker || true && a2enmod mpm_prefork && apache2-foreground"