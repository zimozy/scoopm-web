# Installing ScoopM on Server

## Log in to secure shell
- chmod 400 ~/.ssh/ScoopMProduction.pem
- ssh -i ~/.ssh/ScoopMProduction.pem ubuntu@34.228.230.81


## Install Dependency Packages
 - sudo apt-get install apache2 php7.0 git php7.0-curl php7.0-mbstring php7.0-zip libapache2-mod-php7.0


## Change WebRoot
- sudo sed -ri -e 's!/var/www/html!/var/www/public!g' /etc/apache2/sites-available/*.conf
- sudo sed -ri -e 's!/var/www/!/var/www/public!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

## Add yourself to the www-data group and change directory permissions
- sudo adduser ubuntu www-data
- sudo chown -R www-data:www-data /var/www
- sudo chmod -R g+rwX /var/www
- **Log out and then back in again**

## Clone code
- cd /var/wwww
- sudo rm -rv html/ #delete unnecessary files
- git clone https://github.com/zimozy/scoopm-web.git . # the dot sends the files to the current dir (not a sub-dir)

## Install and run Composer
- php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
- php -r "if (hash_file('SHA384', 'composer-setup.php') === '544e09ee996cdf60ece3804abc52599c22b1f40f4323403c44d44fdfdd586475ca9813a858088ffbc1f233e9b180f061') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
- php composer-setup.php
- php -r "unlink('composer-setup.php');"
- mv composer.phar /usr/local/bin/composer
- cd /var/www
- **composer install**


## Enable Rewrite Module
- sudo  a2enmod rewrite
### Change AllowOverrides to all:
- sudo nano /etc/apache2/apache2.conf 

## Allow web access to the instance
- AWS Console > Instances > click on instance > click on its security group
- Inbound tab > edit > add rule
    - HTTP
    - HTTPS
- Click OK

## Enable HTTPS / TLS
### More info:
- /usr/share/doc/apache2/README.Debian
- [https://docs.aws.amazon.com/AWSEC2/latest/UserGuide/SSL-on-an-instance.html](https://docs.aws.amazon.com/AWSEC2/latest/UserGuide/SSL-on-an-instance.html "AWS Article")

1. SSH into the server.
2. sudo a2ensite default-ssl
3. sudo a2enmod ssl
4. To create a self-signed certificate:
    * sudo apt install ssl-cert
    * sudo make-ssl-cert generate-default-snakeoil --force-overwrite
5. sudo nano /etc/apache2/sites-available/default-ssl.conf
- Add the following to the ssl VirtualHost section:
<pre>BrowserMatch "MSIE [2-6]" \
    nokeepalive ssl-unclean-shutdown \
    downgrade-1.0 force-response-1.0
BrowserMatch "MSIE [17-9]" ssl-unclean-shutdown</pre>
7. sudo nano /etc/apache2/sites-available/000-default.conf
- Redirect incoming HTT**P** requests:
<pre>
    RewriteEngine On
    RewriteRule .* https://%{HTTP:Host}%{REQUEST_URI} [L,R]
</pre>

# May need to change permissions for Twig templates cache
- mkdir templates/cache
- ubuntu@ip-172-31-19-157:/var/www$ chgrp www-data ./templates/cache/

# After everything, restart the server
## sudo service apache2 restart