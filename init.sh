#!/bin/bash
PLUGIN_NAME='name_for_plugin';#TODO change this

sed -i 's/{{plugin_name}}/'${PLUGIN_NAME}'/g' *.php
sed -i 's/{{plugin_name}}/'${PLUGIN_NAME}'/g' classes/*.php
sed -i 's/{{plugin_name}}/'${PLUGIN_NAME}'/g' db/*
mv lang/en/auth_{{plugin_name}}.php lang/en/auth_${PLUGIN_NAME}.php

rm -rf .git
rm -f init.sh
echo "please edit db/install.xml to finish project init"