## REST API Laravel Backend
A REST API built using Laravel with Sanctum implementation of the UI frontend.

### Create Laravel Project
To create fresh new Laravel project. Install via Composer. <br>
Link to Laravel installation: https://laravel.com/docs/8.x#installation-via-composer
```
composer create-project laravel/laravel example-app
cd example-app
php artisan serve
```

### Database Configuration
The WAMP server is compatible with Windows PC and MAMP server is compatible with MacOS.

- Install WAMP or MAMP
- Install Composer
- Clone the project in Github repo
- Place the project folder in www or htdocs
- Change the required configuration in the .env file
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=8889
DB_DATABASE=hotel_booking_db
DB_USERNAME=root
DB_PASSWORD=root
```

### Operating System
The software's are compatible with the operating systems listed.

- macOS: Big Sur or later
- Windows 10 or later

### Install Homebrew
Note: PHP has been removed for macOS Monterey. You need to install Homebrew to run PHP again. <br>
Homebrew: https://brew.sh/ <br>
PHP: https://formulae.brew.sh/formula/php#default
```
$ /bin/bash -c "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/HEAD/install.sh)
$ brew install php@7.4
```

### Programming Languages
These are the versions recommended.

| Langauges | Versions |
| --------- | -------- |
| PHP       | 7.4      |
| Laravel   | 8x       |
| Composer  | 2.1.9    |
| Homebrew  | 3.0.0    |
| Heroku    | 7.59.1   |

### Technologies
Install Composer https://getcomposer.org/download/ <br>
Laravel https://laravel.com/ <br>
Homebrew: https://brew.sh/ <br>

### Link to Heroku App Deployment
Heroku https://www.heroku.com/ <br>
Heroku CLI: https://devcenter.heroku.com/articles/heroku-cli#download-and-install