#!/bin/bash

sed -i "s/autoindex off;/autoindex on;/g" /etc/nginx/nginx.conf
nginx -s reload