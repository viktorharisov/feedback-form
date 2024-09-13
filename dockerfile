# Используем базовый образ с PHP и Apache
FROM php:8.1-apache

# Копируем файлы проекта в контейнер
COPY . /var/www/html/

# Открываем порт для доступа к серверу
EXPOSE 80

# Устанавливаем необходимые расширения PHP (например, для MySQL)
RUN docker-php-ext-install mysqli pdo pdo_mysql
