#!/bin/bash
php bin/composer.phar update hte/asset-bundle --no-dev --optimize-autoloader --prefer-dist
NOW="`date`"
echo "$NOW" >> updateAssets.log
echo "DONE"
