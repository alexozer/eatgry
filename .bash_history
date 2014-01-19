su
sudo pacman -Syy
sudo pacman -S apache php php-apache mariadb
sudo nano /etc/httpd/conf/httpd.conf
sudo nano /etc/httpd/conf/mime.types
sudo systemctl restart httpd
cd /srv/http
sudo nano test.php
sudo nano /etc/php/php.ini
sudo systemctl restart httpd
sudo pacman -S wget
wget http://wordpress.org/download/
sudo wget http://wordpress.org/download/
ls
cd /srv/http
sudo wget http://wordpress.org/latest.zip
sudo rm index.html
ls
rm test.php
sudo rm test.php
sudo wget http://wordpress.org/latest.tar.gz
ls 
tzr -xzf latest.tar.gz
tar -xzf latest.tar.gz
sudo tar -xzf latest.tar.gz
ls
rm latest.zip
sudo rm latest.zip
sudo rm latest.tar.gz
sudo cp -r wordpress /srv/http
ls
sudo cp -r /srv/http/wordpress /srv/http
sudo mv /srv/http/wordpress/* /srv/http
ls
sudo rm -rf wordpress
ls
mysql_secure_installation
sudo mysql_secure_installation
sudo systemctl start mariadb
sudo systemctl start mysqld
sudo systemctl enable mysqld

sudo mysql_secure_installation
sudo mysql -u root
sudo mysql -u root -p
sudo nano wp-config-sample.php
sudo nano wp-config-sample.php
htop
sudo pacman -S htop
htop
exit
ls
cd .ssh
ls
ls -a
sudo pacman -S openssh
cd .ssh
ls -a
ls
exit
exit
cd /srv/http/
ls
rm *
sudo rm *
sudo rm -rf *
ls
ssh-keygen -t rsa -C "$(whoami)@$(hostname)-$(date -I)'
ssh-keygen -t rsa -C "$(whoami)@$(hostname)-$(date -I)"
scp -P 26 mhacks@oroide.com:
scp -P 26 .ssh/id_rsa  mhacks@oroide.com:
exit
ls
cd .ssh
ls
cat id_rsa.pub > authorized_keys
chmod 600 authorized_keys 
sudo vim /etc/ssh/sshd_config
sudo nano /etc/ssh/sshd_config
TERM=xterm sudo nano /etc/ssh/sshd_config
exit
ls
exit
exit
rsync
sudo pacman -S rsync
sudo pacman -S rsync
exit
