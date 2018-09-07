## Laravel-PHPUnit [Testing- user tests, browser tests, database tests] 

### Installation steps  
1.Clone repo  
2.Run composer install/composer update in the root project  
3.Start MySQL server, create database phpunit  
4.php artisan migrate  
5.php artisan serve     

### Testing  
1.User Tests  
user creation/deletion test  
run >php vendor/phpunit/phpunit/phpunit tests/unit/UserTest  
![enter image description here](https://github.com/manojkmishra/laravel-phpunit/blob/master/screenshots/usertest.PNG)  

2.Browser Test  
user login test on browser  
run >php artisan dusk tests/Browser/LoginTest 
![enter image description here](https://github.com/manojkmishra/laravel-phpunit/blob/master/screenshots/browserlogintest.PNG)  

In case of error, please check screenshots folder as shown below    
![enter image description here](https://github.com/manojkmishra/laravel-phpunit/blob/master/screenshots/browserlogintest1.PNG)  

2.Database Test
run >php artisan dusk tests/Browser/DatabaseTest

check if user exist(please change content of /tests/Browser/DatabaseTest.php as shown in picture)  
![enter image description here](https://github.com/manojkmishra/laravel-phpunit/blob/master/screenshots/dbuserexist.PNG)  

check if user does not exist(please change content of /tests/Browser/DatabaseTest.php as shown in picture)  
![enter image description here](https://github.com/manojkmishra/laravel-phpunit/blob/master/screenshots/dbusernotexist.PNG)  

check if user is deleted
![enter image description here](https://github.com/manojkmishra/laravel-phpunit/blob/master/screenshots/dbuserdeleted.PNG)  