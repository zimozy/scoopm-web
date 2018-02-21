# HTTPS on Amazon Web Services
## Ubuntu Linux

### More info can be found at /usr/share/doc/apache2/README.Debian
[https://docs.aws.amazon.com/AWSEC2/latest/UserGuide/SSL-on-an-instance.html](https://docs.aws.amazon.com/AWSEC2/latest/UserGuide/SSL-on-an-instance.html "AWS Article")

1. SSH into the server.
2. sudo a2enmod default-ssl
3. sudo a2enmod ssl
4. To create a self-signed certificate:
    * sudo apt install ssl-cert
    * sudo make-ssl-cert generate-default-snakeoil --force-overwrite
5. sudo nano /etc/apache2/sites-available/default-ssl.conf
6. Add the following to the directive:
<pre>BrowserMatch "MSIE [2-6]" \
    nokeepalive ssl-unclean-shutdown \
    downgrade-1.0 force-response-1.0
BrowserMatch "MSIE [17-9]" ssl-unclean-shutdown</pre>
7. Redirect incoming HTT**P** requests:
<pre>
    RewriteEngine On
    RewriteRule .* https://%{HTTP:Host}%{REQUEST_URI} [L,R=permanent]
</pre>
7. sudo service apache2 restart