### Example For Laravel Logging
<hr>

#### 1. Install composer
```
composer install
```

#### 2. Copy `.env.test` file and rename copied file to `.env`

#### 3. RUN Command
```
php artisan key:generate
```

> __Note__
> if the .env file contains the key but you are still getting an application key error, then run `php artisan config:cache` to clear and reset the config.

#### 4. Find logging test file in `tests/Feature/LoggingTest.php`

#### 5. Find logging config file in `config/logging.php`