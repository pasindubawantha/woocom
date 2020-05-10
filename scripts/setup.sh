#!/bin/bash

sudo apt-get update -y
apt-get install mariadb-server
/usr/bin/mysql_secure_installation
