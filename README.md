# PHP Unit Test Practice Project

This is a project to practice PHP Unit testing on Laravel framework projects.

Currently it covers tests for Authentication.


## Quick guide on how to install and run PHP Unit Test for this project: 

### Download Project
> git clone https://github.com/bish-al/unitTest.git

### Install Dependencies
> composer install


### Create Database 

### Rename example environment file 
> mv .env.example .env

### Edit .env file with correct Database name (one you created on step 3)

### Generate App Key 
> php artisan key:generate

### Run Migration

> php artisan migrate

### Now you should be able to run PHP Unit Test

> php artisan test

![alt text](testResult.png?raw=true)