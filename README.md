## Laravel with TDD test 

### to get up the project go to the docker directory and run the command
```sh 
$ docker-compose up
```

### Run the command to execute the tests
```sh 
$ docker container exec -it php-fpm ./vendor/bin/phpunit -c /var/www/phpunit.xml
```
