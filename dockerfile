FROM ubuntu
RUN apt update
RUN apt install apache2 -y
WORKDIR /var/www/html
RUN rm -rf index.html
COPY . /var/www/html
EXPOSE 80
ENTRYPOINT apachectl -D FOREGROUND
