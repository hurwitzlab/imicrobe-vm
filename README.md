# imicrobe-vm
Scripts to build and provision a VM running iMicrobe.

## Requirements
Building a VM with these scripts requires [Vagrant](https://www.vagrantup.com/), [VirtualBox](https://www.virtualbox.org/), and [Ansible](https://www.ansible.com/). Installing Vagrant and VirtualBox will not be described here. Steps to install Ansible are given below.

In addition the Ansible script relies on the following roles available from ansible-galaxy:
 + CSCfi.mariadb
 + lesmyrmidons.mongodb

Instructions for installing these roles are given below.

It is recommended that Ansible be installed in a Python 3.6+ virtual environment. If a Python 3.6+ interpreter is available then a virtual environment can be created like this:

```
$ python3 -m venv ~/venv/imicrobevm
$ source ~/venv/imicrobevm/bin/activate
(imicrobevm)$ pip install ansible
(imicrobevm)$ ansible-galaxy install -r ansible.galaxy.roles.yml
```

If a Python 3.6+ interpreter is not already available then a convenient method to install one is with [Miniconda3](https://conda.io/docs/install/quick.html#os-x-miniconda-install).

After installing Miniconda3 create a virtual environment and install Ansible like this:

```
$ conda create python=3.6 --name imicrobevm
$ source activate imicrobevm
(imicrobevm)$ pip install ansible
(imicrobevm)$ ansible-galaxy install -p ~/etc/ansible/roles -r ansible.galaxy.roles.yml
```

### Install vagrant-vbguest plugin

It is very helpful but not necessary to install the `vagrant-vbguest` plugin. This Vagrant plugin automatically installs the correct version of VirtualBox Guest Additions kernel modules in a VM after VirtualBox is updated. Install the plugin with this command:

```
$ vagrant plugin install vagrant-vbguest
```

## Installation

### Clone the repository

```
$ git clone https://github.com/hurwitzlab/imicrobe-vm.git
```

### Make a local copy of Vagrantfile.default and customize it for your host

Add directories to be shared, set up port forwarding, set the number of CPUs and amount of memory the VM will use, and more!

```
$ cp Vagrantfile.default Vagrantfile
```

### Make a local copy of imicrobe_vars.yml.default and enter the necessary information

```
$ cd imicrobe-vm
$ cp imicrobe_vars.yml.default imicrobe_vars.yml
```

## Build an iMicrobe Virtual Machine

```
$ source activate imicrobevm
(imicrobevm)$ vagrant up
```

### Restart Nginx
Log in to the VM and restart Nginx.

```
$ vagrant ssh
vagrant@vagrant:~$ sudo systemctl restart nginx
```

## Development
Access to the server is available through https://localhost:8443/.
