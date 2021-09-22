# LEMP Code deploy

* index.php    - default file, used for checking PHP functionality;
* checkdb.php  - check MySQL connectivity;
* default.conf - config file for nginx; will go in /etc/nginx/conf.d/default.conf

## docker-compose branch

* docker-compose.yml    - initial docker example in docker-compose format;
* docker-compose-v2.yml - adds persistent volume for MySQL container;
* docker-compose-v3.yml - adds networking support;

* Dockerfile      - used for building the fixed version of php container;
* checkdb-v3.php  - check db connection using docker-compose networking from docker-compose-v3.yml;
* default-v3.conf - config file for nginx, with php support using container name for docker-compose-v3.yml;

