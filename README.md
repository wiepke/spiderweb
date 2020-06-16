# RUN with docker

1. docker network create spiderweb-network
2. sudo docker run --name spiderweb -d -p 8082:80 --mount type=bind,source="$(pwd)",target=/var/www/html --network=spiderweb-network php:apache
   - 8082 will be the port were the software is accessible from outside the hostsystem. You need to open this port on the host
3. 