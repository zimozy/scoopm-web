# HTTPS on Amazon Web Services
## Ubuntu Linux

### More info can be found at /usr/share/doc/apache2/README.Debian

1. SSH into the server.
2. sudo a2enmod default-ssl
3. sudo a2enmod ssl
4. To create a self-signed certificate:
    * sudo apt install ssl-cert
    * sudo make-ssl-cert generate-default-snakeoil --force-overwrite
5. sudo service apache2 restart
6. sudo nano /etc/apache2/sites-available/default-ssl.conf
7. Add the following to the directive:
<pre>BrowserMatch "MSIE [2-6]" \
    nokeepalive ssl-unclean-shutdown \
    downgrade-1.0 force-response-1.0
BrowserMatch "MSIE [17-9]" ssl-unclean-shutdown</pre>