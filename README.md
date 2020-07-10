### Laravel with TDD test 
This project simulate a library system for reservation with books, authors and users. 
You can create a book informing a name and author. 
You can also checkout and checkin a book with a user. 

Run the command in the docker directory
```sh 
$ docker-compose up
```
Run the command to execute the tests
```sh 
$ docker container exec -it php-fpm ./vendor/bin/phpunit -c /var/www/phpunit.xml
```
