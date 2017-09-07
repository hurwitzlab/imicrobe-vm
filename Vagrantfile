# -*- mode: ruby -*-
# vi: set ft=ruby :

Vagrant.configure("2") do |config|
  # Every Vagrant development environment requires a box. You can search for
  # boxes at https://atlas.hashicorp.com/search.
  config.vm.box = "bento/ubuntu-17.04"
  ##config.vm.box = "bento/centos-7.3"

  config.vm.network "forwarded_port", host: 8000, guest: 80
  config.vm.network "forwarded_port", host: 8443, guest: 443
  config.vm.network "forwarded_port", host: 5000, guest: 5000

  config.vm.synced_folder "~/project/imicrobe/elm-imicrobe-spa", "/elm-imicrobe-spa"
  config.vm.synced_folder "~/project/imicrobe/flask-imicrobe", "/flask-imicrobe"

  config.vm.provider "virtualbox" do |vb|
    vb.name = "iMicrobe"
    # Display the VirtualBox GUI when booting the machine?
    vb.gui = false
    vb.cpus = 2
    vb.memory = 1024
  end

  config.vm.provision "ansible" do |ansible|
    ansible.playbook = "imicrobe_playbook.yml"
  end

end
