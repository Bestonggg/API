#!/bin/bash
echo "Content-type: text/plain\n";
echo '';
cd /var/www/domains/site.ru/ || exit > /dev/null
git reset --hard > /dev/null
git pull ssh://gafurovstudio@bitbucket.org/gafurovstudio/g2.git develop > /dev/null
#git@bitbucket.org:gafurovstudio/g2.git
