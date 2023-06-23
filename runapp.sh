#!/bin/bash

# Build Docker image
docker build --rm -t developer/app:1.0 .

# Run Docker container
# docker run -d --restart=always --name=app -p 8787:8787 -e HOST_IP=$(ip route | awk '/default/ { print $3 }') developer/app:1.0
# Run Docker container 
# -e HOST_IP=$(ip route | awk '/default/ { print $3 }') 这句是将宿主机的 IP 地址作为 HOST_IP 环境变量传递给容器
 docker run -d --restart=always --name=app -p 8787:8787 -e HOST_IP=$(ip route | awk '/default/ { print $3 }') developer/app:1.0
