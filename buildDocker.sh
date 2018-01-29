#bin/bash
docker-compose stop
docker-compose build php
docker-compose build hrmsDB
docker-compose build data
docker-compose build tomcat01
docker-compose build nginx
