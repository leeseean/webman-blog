#!/bin/bash
OUTPUT=$(docker ps -f ancestor=developer/app:1.0 --format "{{.ID}}")
echo $OUTPUT
docker stop $OUTPUT
docker rm $OUTPUT
docker rmi developer/app:1.0
