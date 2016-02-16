itamae-wordpress
================

# Vagrant
## requirements
* Vagrant
* VirtualBox

## Install Vagrant
[download](https://www.vagrantup.com/downloads.html) and install the package.

## Install VirtualBox
```
$ brew cask install virtualbox
```

## initialize
It you've not installed `vagrant-vbguest` or `vagrant-itamae`, install them.
```
$ vagrant plugin install vagrant-vbguest
$ vagrant plugin install vagrant-itamae
```

## start server
```
$ vagrant up
```

## provision
```
$ vagrant provision
```

## reload
```
$ vagrant reload
```

## stop server
```
$ vagrant halt
```

## destroy server
```
$ vagrant destroy
```

# Deploy to VPS
## Requirements
* Debian or Ubuntu
* Non configured

# command memo
## サーバ再起動
```
$sudo apachctrl restart

## ログを見る
```
$tail -f /var/log/httpd/access_log

```

# サーバにする場合
```
$ bundle exec install --path vendor/bundle
$ bundle exec itamae ssh -h hostname -j nodes/node.json recipes/init.rb
```
