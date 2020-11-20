# PHP Unit Test Practice Project

This is a project to practice PHP Unit testing on Laravel framework projects.

Currently it covers tests for Authentication.


## Quick guide on how to install and run PHP Unit Test for this project: 

1. 
> git clone https://github.com/bish-al/unitTest.git

2. 
> composer install


3. create Database 

4. Make sure .env file is present if not
> mv .env.example .env

5. Edit .env file with correct Database name (one you created on step 3)

6. 
> php artisan key:generate

7. Run Migration

> php artisan migrate

8. Now you should be able to run PHP Unit Test

> php artisan test

![alt text](testResult.png?raw=true)