# ZONA-FULL-APP
 
#Run and Install

1. clone repository via git clone or github desktop
2. cd ZONA-FULL-APP
3. run terminal "composer install" or "composer update"
4. npm install
5. run terminal "cp .env.example .env"
6. php artisan key:generate
7. add a database in phpmyadmin and change the DB_DATABASE in .env as the database name. (ex. DB_DATABASE = ZONA)
8. run terminal "php artisan migrate"
9. run terminal "php artisan db:seed --class=UserSeeder"
10. run terminal "php artisan serve" OR "php -S localhost:8000 -t public"
