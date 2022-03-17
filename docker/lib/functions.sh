#!/usr/bin/env bash

# PROMPT COLOURS
readonly RESET='\033[0;0m'
readonly BLACK='\033[0;30m'
readonly RED='\033[0;31m'
readonly GREEN='\033[0;32m'
readonly YELLOW='\033[0;33m'
readonly BLUE='\033[0;34m'
readonly PURPLE='\033[0;35m'
readonly CYAN='\033[0;36m'
readonly WHITE='\033[0;37m'

readonly DOCKER_MINIMAL_VERSION=19.03.0
readonly DOCKER_COMPOSE_MINIMAL_VERSION=1.25.0

function check_requirements() {
    check_docker
    check_docker_compose
}

function check_version() {
    local version=$1
    local require_version=$2
    local package=$3

    dpkg --compare-versions ${version} 'ge' ${require_version} \
        || (echo -e "${RED}Requirement: need '${package}:${require_version}', you have '${package}:${version}'.${RESET}" > /dev/tty && exit 1)
}

# Check version of Docker
function check_docker() {
    if [[ -z $(which docker) ]]; then
        echo -e "${RED}Requirement: need 'docker:${DOCKER_MINIMAL_VERSION}' see https://docs.docker.com/install/linux/docker-ce/ubuntu.${RESET}" > /dev/tty
        exit 1
    fi

    check_version $(docker -v | sed -r 's/.* version ([^,]+),.*/\1/') ${DOCKER_MINIMAL_VERSION} 'docker'
}

# Check version of Docker Compose
function check_docker_compose() {
    if [[ -z $(which docker-compose) ]]; then
        echo -e "${RED}Requirement: need 'docker-compose:${DOCKER_COMPOSE_MINIMAL_VERSION}' see https://docs.docker.com/compose/install.${RESET}" > /dev/tty
        exit 1
    fi

    check_version $(docker-compose -v | sed -r 's/.* version ([^,]+),.*/\1/') ${DOCKER_COMPOSE_MINIMAL_VERSION} 'docker-compose'
}

# Display a message to ask a value for .env file
function ask_value() {
    local message=$1
    local default_value=$2
    local value
    local default_value_message=''

    if [[ ! -z "${default_value}" ]]; then
        default_value_message=" (default: ${YELLOW}${default_value}${CYAN})"
    fi

    echo -e "${CYAN}${message}${default_value_message}: ${RESET}" > /dev/tty
    read value < /dev/tty

    if [[ -z "${value}" ]]; then
        value=${default_value}
    fi

    echo "${value}"
}

# Add all values to .env
function configure_env() {
    local key=$1
    local value=$2
    local env_to=$3

    if [[ ! -z "${env_to}" ]] && [[ -f "${env_to}" ]]; then
        sed -e "/^${key}=/d" -i "${env_to}"
    fi

    echo "${key}=${value}" >> ${env_to}
}

# Determines values for .env
function get_env_value() {
    local key=$1
    local default_value=$2
    local env_to=$3

    case ${key} in
        DOCKER_UID)
            value=$(id -u)
        ;;
        *)
            if [[ ! -f ${env_to} ]] || [[ "$(cat ${env_to} | grep -Ec "^${key}=(.*)$")" -eq 0 ]]; then
                value=$(ask_value "Define the value of ${YELLOW}${key}${CYAN}" ${default_value})
            else
                value=$(cat ${env_to} | grep -E "^${key}=(.*)$" | awk -F "${key} *= *" '{print $2}')
            fi
        ;;
    esac

    if [[ -z "${value}" ]]; then
        value=${default_value}
    fi

    echo ${value}
}

# Parse .env file
function parse_env() {
    local env_from=$1
    local env_to=$2

    if [[ -f "${env_from}" ]]; then
        for line in $(cat ${env_from})
        do
            key=$(echo ${line} | awk -F "=" '{print $1}')
            defaultValue=$(echo ${line} | awk -F "${key} *= *" '{print $2}')
            value=$(get_env_value "${key}" "${defaultValue}" "${env_to}")
            configure_env "${key}" "${value}" "${env_to}"
        done
    fi
}

function install_composer() {
    docker-compose exec php composer install --no-interaction --no-progress
}

function block() {
    local color=$1
    local text=$2
    local title_length=${#text}

    echo -en "\n\033[${color}m\033[1;37m    "
    for x in $(seq 1 ${title_length}); do echo -en " "; done;
    echo -en "\033[0m\n"

    echo -en "\033[${color}m\033[1;37m  ${text}  \033[0m\n"
    echo -en "\033[${color}m\033[1;37m    "
    for x in $(seq 1 ${title_length}); do echo -en " "; done;
    echo -en "\033[0m\n\n"
}

function block_error() {
    block "41" "${1}"
}

function block_success() {
    block "42" "${1}"
}

function block_warning() {
    block "43" "${1}"
}

function block_info() {
    block "44" "${1}"
}
