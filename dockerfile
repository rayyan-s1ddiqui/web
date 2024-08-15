FROM ubuntu:latest
RUN apt-get update && apt-get install -y apache2
WORKDIR /var/www/html
EXPOSE 80
CMD ["apache2ctl", "-D", "FOREGROUND"]

