#!/bin/bash

git checkout master
git reset --hard origin/php-katana
rm -Rf docker
mv katana/public/* $(pwd)
rm -Rf katana
git add .
git commit -m "UPD master"
git push origin master
