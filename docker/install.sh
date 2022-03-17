#!/usr/bin/env bash

set -e

readonly DOCKER_PATH=$(dirname $(realpath $0))
cd ${DOCKER_PATH};

. ./lib/functions.sh

block_info "Welcome to Google Passes installer!"

check_requirements
parse_env ".env.dist" ".env"
. ./.env
echo -e "${GREEN}Configuration done!${RESET}" > /dev/tty

block_info "Build & start Docker"
docker-compose pull
./stop.sh
./start.sh
echo -e "${GREEN}Docker is started with success!${RESET}" > /dev/tty

block_info "Install dependencies"
install_composer
echo -e "${GREEN}Dependencies installed with success!${RESET}" > /dev/tty

block_success "Google Passes is started. Enter into shell with 'make shell'"
