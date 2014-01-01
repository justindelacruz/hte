HTE
==========
This is my side project for a small business.

This project uses these technologies:
*   PHP 5.4
*   Symfony 2.4
*   Sass 3.2.13
*   Compass 0.12
*   Bootstrap 3

To build this project in production:

1. Checkout the repo: `git checkout https://github.com/justindelacruz/hte.git`  
2. Update vendors: `php composer.phar install --no-dev --optimize-autoloader`  
3. Compile Sass: `compass compile`  
4. Install assets: `php app/console assets:install web`  
5. Clear Symfony cache: `php app/console cache:clear --env=prod --no-debug`  

To build this project in dev:

1. Checkout the repo: `git checkout https://github.com/justindelacruz/hte.git`  
2. Update vendors: `php composer.phar install`  
3. Compile Sass: `compass compile`  
4. Install assets: `php app/console assets:install web`  
5. Clear Symfony cache: `php app/console cache:clear`  

This project was made using PhpStorm.
