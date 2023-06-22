#!/bin/bash

# Build Docker image
docker build --rm -t developer/app:1.0 .

# Run Docker container
docker run -d --restart=always --name=app -p 8787:8787 developer/app:1.0
