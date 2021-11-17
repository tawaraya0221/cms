         ___        ______     ____ _                 _  ___  
        / \ \      / / ___|   / ___| | ___  _   _  __| |/ _ \ 
       / _ \ \ /\ / /\___ \  | |   | |/ _ \| | | |/ _` | (_) |
      / ___ \ V  V /  ___) | | |___| | (_) | |_| | (_| |\__, |
     /_/   \_\_/\_/  |____/   \____|_|\___/ \__,_|\__,_|  /_/ 
 ----------------------------------------------------------------- 


Hi there! Welcome to AWS Cloud9!

To get started, create some files, play with the terminal,
or visit https://docs.aws.amazon.com/console/cloud9/ for our documentation.

Happy coding!

sudo yum -y install php73 php73-cli php73-common php73-devel php73-mysqlnd php73-pdo php73-xml php73-gd php73-intl php73-mbstring php73-mcrypt php73-opcache php73-pecl-apcu php73-pecl-imagick php73-pecl-memcached php73-pecl-redis php73-pecl-xdebug
hani — 2021/11/12
sudo alternatives --set php /usr/bin/php-7.3
curl -sS https://getcomposer.org/installer | php
sudo mv composer.phar /usr/bin/composer
composer global require "laravel/installer"
sudo dd if=/dev/zero of=/swapfile bs=1M count=512
sudo chmod 600 /swapfile
sudo mkswap /swapfile
sudo swapon /swapfile
composer create-project laravel/laravel cms 6.* --prefer-dist
sudo swapoff /swapfile
sudo rm /swapfile
sudo swapoff -a && swapon -a 
--------------------------------
mysql -u root -p
[Enter] ※パスワードなし
create database c9;
show databases;
use c9;
show tables;
update mysql.user set password=password('root') where user='root';
flush privileges;
exit; 
-----------
php artisan migrate
----------------------
sudo service mysqld restart
cd cms
php artisan serve --port=8080