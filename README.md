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

If a Python 3.6+ interpreter is not already available then a convenient method is to install one is with [Miniconda3](https://conda.io/docs/install/quick.html#os-x-miniconda-install).

After installing Miniconda3 create a virtual environment and install Ansible like this:

```
$ conda create python=3.6 --name imicrobevm
$ source activate imicrobevm
(imicrobevm)$ pip install ansible
(imicrobevm)$ ansible-galaxy install -r ansible.galaxy.roles.yml
```

### Install vagrant-vbguest plugin

It is very helpful to install the `vagrant-vbguest` plugin. This plugin automatically updates the VirtualBox Guest Additions kernel modules in a VM each time you run `vagrant up`. Install it with this command:

```
$ vagrant plugin install vagrant-vbguest
```

## Installation

### Clone the repository

```
$ git clone https://github.com/hurwitzlab/imicrobe-vm.git
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

## Development
Access to data.imicrobe.us is available through 127.0.0.1:8000.

Access to imicrobe.us is available through 127.0.0.1:8001.
