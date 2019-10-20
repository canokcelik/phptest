## How to run:

- Install [https://hub.docker.com/search/?type=edition&offering=community](Docker) for your OS.

- Clone git repo:
    `git clone https://github.com/canokcelik/phptest.git`

- Change dir to `phptest`

- Build docker image:
    `docker build . -t php-apache:latest`

- Run image:
    `docker run -p 8899:80 php-apache`