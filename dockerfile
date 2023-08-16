FROM ubuntu
RUN apt update
RUN apt install apache2 -y
EXPOSE 80
ENTRYPOINT apachectl -D FOREGROUND
