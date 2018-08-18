<h1>Dashboard- Login and Register form with database</h1>

<h2>Installation guide for MacOS</h2>

<h3>Activate Apache WebServer</h3>

Step 1: Open terminal, sudo apachectl start

Step 2: Go to directory> Library/WebServer/Documents 

<h3>Activate PHP</h3>

Step 1: sudo nano /etc/apache2/httpd.conf

Step 2: Find “Load Module” section> Remove “#” before “#Load Module php7_module”> Ctrl O> Enter> Ctrl X

Step 3: Restart the WebServer> sudo apachectl restart

#Make sure that the WebServer will always use PHP files in the first in case you have two different index files, for that use the following command

Step 1: sudo nano /etc/apache2/httpd.conf

Step 2: Find “Directory Index Module“> Add index.php before index.html in the “IFModule”> Ctrl O> Enter> Ctrl X

Step 3: Restart the WebServer> sudo apachectl restart

<h3>Testing PHP</h3>

Step 1: sudo nano /Library/WebServer/Documents/index.php

Step 2: Initializing index.php file by adding the following code into it> Ctrl O> Enter> Ctrl X

<?php phpinfo(); ?>

Step 3: Go to browser and check localhost, it will display php info.

<h3>MySQL</h3>

Step 1: Go to link> http://dev.mysql.com/downloads/mysql/

Step 2: Download the DMG Archive file for MacOS and install

<h3>Testing MySQL Server</h3>

Step 1: sudo /usr/local/mysql/support-files/mysql.server start> Go to directory> cd /usr/local/mysql/bin

Step 2: sudo ./mysql -u root -p > (MYSQL Password)

Step 3: Change Admin Password> Alter user 'root'@'localhost' identified by 'PASSWORD'; > exit

<h3>Installing phpMyAdmin</h3>

Step 1: Go to link> https://www.phpmyadmin.net> Download and extract it to Library/WebServer/Documents> Rename Extracted folder to: phpMyAdmin

Step 2: Go to directory> Library/WebServer/Documents/phpMyAdmin

Step 3: Create config folder> sudo mkdir config

Step 4: Adjust rights> sudo chmod o+x config

Step 5: Open Browser, go to: localhost/phpMyAdmin/setup

Step 6: Click on NEW SERVER

Step 7: In Authentication Type the Password and save

Step 8: Click on Download and Drag config into phpMyAdmin folder

Step 9: Change localhost to 127.0.0.1 in config.inc.php - the file you moved to phpMyAdmin.