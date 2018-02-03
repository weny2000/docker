#bin/bash
docker-compose stop
nohup docker-compose up hrmsDB >> docker.log &
docker-compose build data >> docker.log
docker-compose build php >> docker.log
docker-compose build tomcat01 >> docker.log
docker-compose build nginx >> docker.log
