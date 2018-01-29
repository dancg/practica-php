# -*- mode: ruby -*-
# vi: set ft=ruby :
Vagrant.configure("2") do |config|

  config.vm.box = "ubuntu/xenial64"
 # Load Balancer
  config.vm.define "web-balancer" do |app|
    app.vm.hostname = "Nginx"
    #app.vm.network "public_network"
    app.vm.network "private_network", ip: "192.168.33.10"
    app.vm.provision "shell", path: "provision/nginx.sh"
  end

  # MySQL Server
  config.vm.define "db" do |app|
    app.vm.hostname = "mysql"
    #app.vm.network "public_network"
    app.vm.network "private_network", ip: "192.168.33.11"
    app.vm.provision "shell", path: "provision/mysql.sh"
  end

end