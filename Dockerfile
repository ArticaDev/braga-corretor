FROM webdevops/php-apache:7.4-alpine
WORKDIR /app
ENV WEB_DOCUMENT_ROOT /app/public
COPY  composer.* ./
COPY  database/ database/
RUN composer install --ignore-platform-reqs --no-interaction --no-scripts --prefer-dist
COPY  . ./
EXPOSE 80