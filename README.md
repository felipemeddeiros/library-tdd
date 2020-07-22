### Laravel with TDD test 
This project simulate a library system for reservation with books, authors and users. 
You can create a book informing a name and author. 
You can also checkout and checkin a book with a user. 

Run this command in the docker directory
```sh 
$ docker-compose up
```

Run this command to create the environment 
```sh
$ docker container exec -it php-fpm composer install \
    && docker container exec -it php-fpm cp .env.example .env \
    && docker container exec -it php-fpm php artisan key:generate
```

Run this command to execute tests
```sh 
$ docker container exec -it php-fpm ./vendor/bin/phpunit -c /var/www/phpunit.xml
```
