# imicrobe-vm
Scripts to build and provision a VM running iMicrobe.

## Requirements
Building a VM with these scripts requires [Vagrant](https://www.vagrantup.com/), [VirtualBox](https://www.virtualbox.org/), and [Ansible](https://www.ansible.com/).

In addition the Ansible script relies on the following roles available from ansible-galaxy:
 + ontic.nginx
 + CSC-IT-Center-for-Science.mariadb
 + lesmyrmidons.mongodb

It is recommended that Ansible be installed in a Python virtual environment. A convenient method is to use [Miniconda3](https://conda.io/docs/install/quick.html#os-x-miniconda-install) because it supports both Python 2.7 and Python 3 virtual environments.

```
$ conda create python=2.7 --name imicrobevm
$ source activate imicrobevm
(imicrobevm)$ pip install ansible
(imicrobevm)$ ansible-galaxy install ontic.nginx
(imicrobevm)$ ansible-galaxy install CSC-IT-Center-for-Science.mariadb
(imicrobevm)$ ansible-galaxy install lesmyrmidons.mongodb
```

## Build a Virtual Machine

```
(imicrobevm)$ git clone https://github.com/hurwitzlab/imicrobe-vm.git
(imicrobevm)$ cd imicrobe-vm
(imicrobevm)$ vagrant up
```

## Development
Access to data.imicrobe.us is available through 127.0.0.1:8000.
Access to imicrobe.us is available through 127.0.0.1:8001.
