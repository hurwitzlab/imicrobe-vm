#!/bin/bash

export PATH=/usr/local/bin:$PATH
export IMICROBE_CONF=/home/imicrobe/imicrobe/lib/conf/imicrobe.yaml

cd /home/imicrobe/imicrobe/lib
hypnotoad mojo/script/imicrobe 2&> /home/imicrobe/imicrobe_mojo.out
