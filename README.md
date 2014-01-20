HTE
==========
This repo is a freelance project for a small business.

This project uses these technologies:
*   [Symfony 2.4](http://symfony.com/)
*   [Sass 3](http://sass-lang.com/)
*   [Compass](http://compass-style.org/)
*   [Bootstrap 3](http://getbootstrap.com/)

This project mainly uses these languages:
*   PHP 5.4
*   CSS3
*   HTML5

To build this project in production:

1. Checkout the repo: `git checkout https://github.com/justindelacruz/hte.git`  
2. Update vendors: `php composer.phar install --no-dev --optimize-autoloader`  
3. Compile Sass: `compass compile`  
4. Install assets: `php app/console assets:install web`  
5. Dump asset files: `php app/console assetic:dump --env=prod --no-debug`
6. Clear Symfony cache: `php app/console cache:clear --env=prod --no-debug`  

To build this project in dev:

1. Checkout the repo: `git checkout https://github.com/justindelacruz/hte.git`  
2. Update vendors: `php composer.phar install`  
3. Compile Sass: `compass compile`  
4. Install assets: `php app/console assets:install web`  
5. Clear Symfony cache: `php app/console cache:clear`  

This project was made using PhpStorm.

Wishlist
==========
- Implement as static site (Sculpin, Jekyll, etc)
- Pull assets into separate bundle

Changelog
==========
0.1.0 - 1/1/14
- Set up site w/Symfony, Bootstrap, Sass, and Compass

0.2.0 - 1/5/14
- Use Assetic for CSS assets
- Add banners and headers
- Add carousel (Bootstrap)
- Add lightbox (v.2)

0.3.0 - 1/12/14
- Finish adding assets (images, sprites)
- Transition to domain
- Convert "Capabilities" layout to 3x2 grid
- Fix @import font
