
## About MDF
The MDF is a responsive web application for family activities control.



## Contributing guide

- 1  ```Composer.phar install```
- 2  copy ev. and change the database credentials https://github.com/laravel/laravel/blob/master/.env.example 
- 3 ``` git clone https://github.com/lucascudo/laravel-5.6-pt-BR-localization.git ./pt-BR ```
- 4  Altere Linha 81 do arquivo config/app.php para: ```'locale' => 'pt-BR', ``` e ```'fallback_locale' => 'pt-BR',```
- 4 ```php artisan migrate ```


