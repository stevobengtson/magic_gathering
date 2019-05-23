# Magic Gathering Application

This is an application that is used for learning about several languages and having them interact with each other.

##### Languages used

1. Angular (version 7)
2. PHP (version 7.3)
   1. Laravel (version 5.8)
3. Ruby On Rails (version 5.2)
   1. Ruby (version 2.6)
4. Nodejs (version 10.15)
5. Go (version ???)

##### Other services used

1. Google Firebase (Authentication and Authorization)
2. MySQL database
3. MongoDB
4. Redis
5. Docker and docker-compose

## Components

### Posts Api

/posts-api

The Posts Api will be written in PHP with the Laravel Framework, it will use MySQL as a storage server and redis for caching.

### User Web

/user-web

The User Web will be written in Angular and authenticate users with the Google Firebase authentication system.

Users will be able to sign up and sign in from this site.

## Docker Setup and Run

### Build

`docker-compose build --force-rm --no-cache user-web`
`docker-compose build --force-rm --no-cache posts-api`

### Setup

`docker-compose exec posts-api php artisan migrate`
`docker-compose exec posts-api php artisan db:seed`

### Run

`docker-compose up -d`

### Testing

#### User Web

`docker-compose exec user-web ng test --watch=false`
> Remove the **--watch=false** to test each time there are changes

`docker-compose exec user-web ng e2e --port 4201`

#### Posts Api

`docker-compose exec posts-api ./vendor/bin/phpunit`
