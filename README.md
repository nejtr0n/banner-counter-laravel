# README

### Starting
* ``cp src/.env.example src/.env``
* ``docker-compose up``
* ``make install``  
* ``docker-compose exec php php artisan key:generate``
  
  (only first run)
* ``make dev-up``
* Navigate to http://localhost/
* click banner
* login with password from `.env`
  (`APP_TEST_USER_PASS` value)