# Lumen
Repositorio de aprendizaje sobre el micro framework Lumen


Documentacion postman
````
https://www.getpostman.com/collections/80c2e79213a299dcc25d
````
Tutorial seguido
````
https://seegatesite.com/restful-api-tutorial-with-lumen-laravel-5-5-for-beginners/
````


````
[Xdebug]
zend_extension="/usr/lib/php/20160303/xdebug.so"
xdebug.remote_enable=1
xdebug.remote_port="9000"
xdebug.profiler_enable=1
xdebug.profiler_output_dir="home\tmp"

````

````
<VirtualHost *:80>
    ServerName lumen.local.com
    ServerAlias lumen.local.com
    DocumentRoot /var/www/lumen/public
    <Directory /var/www/lumen/public>
        AllowOverride All
    </Directory>

    ErrorLog /var/log/apache2/project_error.log
    CustomLog /var/log/apache2/project_access.log combined

</VirtualHost>


````

