#!/bin/bash

export IMICROBE_CONF=/home/imicrobe/imicrobe/lib/conf/imicrobe.yaml

cd /home/imicrobe/imicrobe/lib
/home/imicrobe/perl5/perlbrew/perls/perl-5.25.10/bin/hypnotoad mojo/script/imicrobe 2&> /home/imicrobe/imicrobe_mojo.out
