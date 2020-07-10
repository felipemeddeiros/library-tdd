### Laravel with TDD test 

Run the command in the docker directory
```sh 
$ docker-compose up
```
Run the command to execute the tests
```sh 
$ docker container exec -it php-fpm ./vendor/bin/phpunit -c /var/www/phpunit.xml
```
