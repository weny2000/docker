#bin/bash
docker-compose stop
docker-compose rm -f
docker rm -f `docker ps -a | awk 'NR>1{print $1}'`
docker rmi -f `docker images | awk 'NR>1{print $3}'`
