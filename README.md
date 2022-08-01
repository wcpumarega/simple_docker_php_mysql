# simple_docker_php_mysql
Aplicação simples para uso de uma aplicação PHP dentro de um container Docker padrão realizando conexão com Banco de dados Mysql

## Pré requisitos:

    - Docker
    - Docker compose

## Execcutar Aplicação:

    # docker compose -f "docker-compose.yml" up -d --build

## Visualizar IP do container Mysql:    

    # docker inspect containerId --format='{{range .NetworkSettings.Networks}}{{.IPAddress}}{{end}}'

