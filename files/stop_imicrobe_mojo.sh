#!/bin/bash

export PATH=/usr/local/bin:$PATH
export IMICROBE_CONF=/home/imicrobe/imicrobe/lib/conf/imicrobe.yaml

cd /home/imicrobe/imicrobe/lib
hypnotoad -s mojo/script/imicrobe
