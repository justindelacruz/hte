#!/bin/bash
php app/console assets:install web
php app/console cache:clear --env=prod --no-debug
