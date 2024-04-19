FROM richan/laravel-swoole:8.3.6

# Create the application directory
RUN mkdir -p /var/www/laravel
WORKDIR /var/www/laravel

# Copy the application files
COPY . /var/www/laravel

# Install the composer dependencies
RUN composer install --no-dev --no-interaction --no-progress --no-suggest --optimize-autoloader

# Install Node.js dependencies
RUN npm install

# Build the assets
RUN npm run build

# Configure the Laravel application
RUN cp .env.production.example .env
RUN php artisan key:generate
RUN php artisan optimize
RUN php artisan storage:link

EXPOSE 8080

CMD ["/bin/bash", "/var/www/laravel/entrypoint.sh"]
