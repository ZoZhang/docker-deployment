#!/bin/bash

#switch user env
sudo -i

#switch directy
ROOT_PATH=/opt/deployment/

#run docker-compose

cd $ROOT_PATH

docker-compose up -d nginx mariadb

#run django-press
docker run -d -p 8000:8000 django_press

