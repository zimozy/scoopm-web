# Installing ScoopM on Server

## Install Apache/PHP
- sudo apt-get install apache2 php git

## Change WebRoot
- sudo sed -ri -e 's!/var/www/html!/var/www/public!g' /etc/apache2/sites-available/*.conf
- sudo sed -ri -e 's!/var/www/!/var/www/public!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

## Add yourself to the www-data group and change directory permissions
- sudo adduser <username> www-data
- sudo chown -R www-data:www-data /var/www
- sudo chmod -R g+rwX /var/www
- **Log out and then back in again**

## Composer
- php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
- php -r "if (hash_file('SHA384', 'composer-setup.php') === '544e09ee996cdf60ece3804abc52599c22b1f40f4323403c44d44fdfdd586475ca9813a858088ffbc1f233e9b180f061') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
- php composer-setup.php
- php -r "unlink('composer-setup.php');"

- **./composer.phar install**


## Enable Rewrite Module
- sudo  a2enmod rewrite
### Change AllowOverrides to all:
- sudo nano /etc/apache2/apache2.conf 
- sudo service apache2 restart

