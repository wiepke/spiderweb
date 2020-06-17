# RUN with docker

1. Make sure ./mysqldata is empty

2. Make sure ./mysql contains a sql script with the relevant data and schemas

3. mv dbconn.php dbnotdocker.php

4. cp docker_db_conn.php dbconn.php

5. sudo docker network create spiderweb-network

6. sudo docker run --rm --name spiderweb-db -p 3308:3306 -d -e MYSQL_ROOT_PASSWORD=voyager -v $(pwd)/mysql:/docker-entrypoint-initdb.d -v $(pwd)/mysqldata:/var/lib/mysql --network=spiderweb-network mariadb:10.1

   1. mysql will now run on 3308 in order to not conflict with other mysql dbs on the system
   
7. sudo docker run --name spiderweb -d -p 8082:80 --mount type=bind,source="$(pwd)",target=/var/www/html --network=spiderweb-network php:apache

   - 8082 will be the port were the software is accessible from outside the hostsystem. You need to open this port on the host
   - you can also create a proxy locally on the host that patches 8082 through to whereevery you want spiderweb to run

8. Enable mysqli:    
           - docker exec -it spiderweb bash
           - docker-php-ext-install mysqli
           - you can save this fixed image with docker commit -p spiderweb spiderweb-i


