#!/bin/sh
rm -f phpDox*.tgz
mkdir -p tmp/TheSeer/phpDox/templates
cp -r src/* tmp/TheSeer/phpDox
cp -r templates/* tmp/TheSeer/phpDox/templates
cp package.xml tmp
cp phpdox.bat tmp
cd tmp
sed -e "s@require __DIR__ . '/src/@require 'TheSeer/phpDox/@" ../phpdox.php | \
sed -e "s@require __DIR__ . '/lib/staticReflection/src/main/php/@require '@" > phpdox.php

sed -e "s@__DIR__ . '/../templates'@__DIR__ . '/templates'@" ../src/cli.php > TheSeer/phpDox/cli.php
pear package
mv phpDox*.tgz ..
cd ..
rm -rf tmp

