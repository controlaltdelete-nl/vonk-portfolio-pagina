composer install && \
npm ci && \
php run-database-migrations.php && \
nohup php -S 0.0.0.0:8000 public/index.php &