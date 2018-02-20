#bin/bash
docker-compose stop
docker-compose pull >> docker.log
docker-compose build >> docker.log
