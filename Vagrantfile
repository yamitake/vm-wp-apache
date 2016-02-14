# -*- mode: ruby -*-
# vi: set ft=ruby :

# All Vagrant configuration is done below. The "2" in Vagrant.configure
# configures the configuration version (we support older styles for
# backwards compatibility). Please don't change it unless you know what
# you're doing.
Vagrant.configure(2) do |config|
  # The most common configuration options are documented and commented below.
  # For a complete reference, please see the online documentation at
  # https://docs.vagrantup.com.

  # Every Vagrant development environment requires a box. You can search for
  # boxes at https://atlas.hashicorp.com/search.
  config.vm.box = "puphpet/centos65-x64"

  config.vm.hostname = "wp-apache"
  config.vm.network :private_network, ip: "192.168.33.33"
  config.vm.synced_folder "./projects/", "/var/www/projects", nfs: true, nfs_udp: false
  config.vm.provider :virtualbox do |vb|
    # Don't boot with headless mode
    vb.gui = false

    # Use VBoxManage to customize the VM. For example to change memory:
    vb.customize ["modifyvm", :id, "--memory", "2024"]
    vb.customize ["modifyvm", :id, "--natdnsproxy1", "off"]
    vb.customize ["modifyvm", :id, "--natdnshostresolver1", "off"]
  end

  config.vm.provision :itamae do |conf|
    conf.sudo = true
    conf.recipes = [
      # './recipes/init_server.rb',
      # './recipes/wordpress.rb'
      './recipes/init.rb'
    ]
    conf.json = "./nodes/node.json"
  end
end
