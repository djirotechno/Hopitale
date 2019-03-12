# APP Hopital Traditionnelle  Keur Massar (Laravel 5.4)


## Installation

Clone the repo
```
git clone https://github.com/djirotechno/Hopitale.git
```

Move to the newly created folder and install all dependencies:
```
cd Hopital
composer install
```

Create a new database, for example with phpMyAdmin. Then open the .env.example file, edit it to match your database name, username and password and save it as .env file. Once done, build tables with the following command:
```
php artisan migrate
```

Now fill the tables:
```
php artisan db:seed
```

Finally, generate the application key 
```
php artisan key:generate
```



## Licence

Please refer to the [Laravel licence](https://opensource.org/licenses/MIT)
