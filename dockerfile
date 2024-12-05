FROM starkz09/web
RUN apt-get update && apt-get install -y apache2
WORKDIR /var/www/html
copy . .
EXPOSE 80
CMD ["apache2ctl", "-D", "FOREGROUND"]

