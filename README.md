## Report here: 
Link to group drive: [driveSP_03](https://drive.google.com/drive/folders/1uJG-OQVU2W3jJvizpzOXTNWRu22nPT-g?usp=sharing)

- Week 1-3 report --> SP_W3

- Week 4 (cards) --> SP_W4

## Install instruction:
-Step 1: Clone project.
Install composer dependencies
```
composer require jenssegers/mongodb
composer install
```
-Step 2: Create database with mongodb.
* Create database in mongodb with name "LTCT"
* copy file .env from https://drive.google.com/file/d/1s4HFIt7xKKsUshZyCCEJ7uwdg-_UUOvQ/view?usp=sharing and copy to main folder
* Migrate database
```
php artisan migrate 
```
* Start local server
```
php artisan serve 
```

## API list:
1. API for set/get role
* GET: '/user/get-role/from-id'
* POST: '/user/set-role/for-id'
2. API for login
* GET: api/login
* POST: api/login
